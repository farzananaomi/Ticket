<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="header"> <h3>Listed Categories</h3>
                    <div class="pull-right">
                        <a href="#" class="btn btn-danger btn-fill" data-toggle="modal" data-target="#operation-modal">Add
                            Category</a>
                    </div>
                </div>

                <div class="content">
                    <?php echo $dataTable->table(); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="operation-modal" tabindex="-1" role="dialog"
         aria-labelledby="operation-form-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="operation-form-title">
                        Add new Category</h4>
                </div>
                <form role="form" action="<?php echo e(route('categories.store')); ?>" method="post" id="operation-form">
                <?php echo csrf_field(); ?>

                <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name"
                                   name="name" placeholder="Enter CategoryName" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description"
                                      name="description"></textarea>
                        </div>

                        <hr>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="type" value="sub-operation"> Sub-operation
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="category_id_h0" class="col-sm-3 control-label">Category</label>
                            <div class="col-sm-8">
                                <input type="hidden" name="category_id" id="category_id" style="display: none"
                                       value="0">
                                <input type="hidden" name="increment_id" id="increment_id"
                                       style="display: none" value="1">
                                <select class="form-control select2" id="category_id_h0"
                                        name="category_id_h[0]"
                                        onchange="set_empty();set_category(this);">

                                </select>
                            </div>
                        </div>
                        <div id="div_sub_category"></div>

                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-default btn-fill" >Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
<style>
    #categories-table tr td:first-of-type {
        padding-left: 25px;
    }

    .child-indent > td:first-of-type {
        padding-left: 60px !important;
    }

    .parent-row {
        background-color: #f2f2f2;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<?php echo $dataTable->scripts(); ?>

<script>

    $(document).ready(function () {
        category_select();

    });

    var increment_id = 1;
    function set_empty() {
        document.getElementById('div_sub_category').innerHTML = "";
    }
    function set_category(evn) {
        var values = evn.value;
       //   alert('val ' + values);
        $("#category_id").val(values);
        load_subcategory();
    }

    function category_select() {
        $.ajax({
            url: "<?php echo e(route('ajax.category')); ?>",
            type: "get",
            success: function (result) {
                //  document.getElementById('category_id_h[0]').innerHTML = "";
                for (i = 0; i < result.length; i++) {
                    $("#category_id_h0").append('<option value="' + result[i].id + '">' + result[i].text + '</option>');
                }
                /*
                 $('#category_id')
                 .select2();*/
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }
    function load_subcategory() {
        var category_id = $("#category_id").val();
        $.ajax({
            url: "<?php echo e(route('ajax.sub_category')); ?>",
            type: "get",
            data: {id: category_id},
            success: function (result) {
                if (result.length != 0) {
                    var html_string = '<div class="form-group" id="sub_category">' +
                        '<label for="sub_category_id" class="col-sm-3 control-label">Sub Category</label>' +
                        '<div class="col-sm-8">' +
                        '<select class="form-control select2" id="category_id_h' + increment_id + '" name="category_id_h[' + increment_id + ']" onchange="set_category(this);">';

                    increment_id = increment_id + 1;
                    $("#increment_id").val(increment_id);
                    category_id = result[0].id;
                    for (i = 0; i < result.length; i++) {
                        html_string = html_string + '<option value="' + result[i].id + '">' + result[i].text + '</option>';
                    }

                    html_string = html_string + ' </select> ' +
                        '</div> ' +
                        '</div>';

                    $("#div_sub_category").append(html_string);
                    $("#category_id").val(category_id);
                } else {
                    $("#div_sub_category").append('');
                }
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }


    $('#edit-modal').on('show.bs.modal', function (e) {
        //get data-id attribute of the clicked element
        let btn = $(e.relatedTarget);
        let action = btn.data('action');
        let name = btn.data('name');
        let description = btn.data('description');
        let type = btn.data('type');
        let parent_id = btn.data('parent_id');
        let questionId = $(e.relatedTarget).data('question-id');
        let submissionId = $(e.relatedTarget).data('submission-id');
        $(e.currentTarget).find('#edit-operation-form').attr('action', action);
        $(e.currentTarget).find('#edit-name').val(name);
        $(e.currentTarget).find('#edit-description').val(description);
        $(e.currentTarget).find('#edit-parent_id').val(parent_id).trigger('change');

        $(e.currentTarget).find('[name="type"]').prop('checked', type == 'sub-category');
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>