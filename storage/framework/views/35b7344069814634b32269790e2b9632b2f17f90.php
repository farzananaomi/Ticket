<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('tickets.update', $ticket->id)); ?>" method="post" enctype="multipart/form-data"
          class="form-horizontal">
        <?php echo csrf_field(); ?>

        <?php echo method_field('put'); ?>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">Create Ticket</div>
                    <div class="content">
                        <div class="form-horizontal">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="category_id_h0" class="col-sm-3 control-label">Sub center</label>
                                        <div class="col-sm-8">

                                            <select class="form-control select2" id="sub_centre_id"
                                                    name="sub_centre_id">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id_h0" class="col-sm-3 control-label">Pop</label>
                                        <div class="col-sm-8">

                                            <select class="form-control select2" id="pop_id" name="pop_id">

                                            </select>
                                        </div>
                                    </div>

                                    <?php echo $__env->make('partials.bs_date', ['name' => 'request_date', 'label' => 'Request Date', 'useOld' =>  old('request_date', $ticket->request_date), 'horizontal' => 'true', 'extras' => 'required="required"'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <?php echo $__env->make('partials.bs_textarea', ['name' => 'work_dscription', 'label' => 'Work Dscription', 'useOld' =>  old('work_dscription', $ticket->work_dscription), 'horizontal' => 'true', 'extras' => 'required="required"'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="col-md-3"></label>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-fill btn-info">Update Ticket</button>
                        <a href="<?php echo e(route('products.index')); ?>"
                           class="btn btn-fill btn-warning pull-right"><i class="fa fa-arrow-left"></i> Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>

    $(document).ready(function () {
        $('.datepicker').datetimepicker(
            {
                format: 'YYYY-MM-DD'
            }
        );
        sub_centre_select();
        pop_select();
    });


    function sub_centre_select() {
        $.ajax({
            url: "<?php echo e(route('ajax.sub_centre')); ?>", //'ajax.category'
            type: "get",
            success: function (result) {
                //  document.getElementById('category_id_h[0]').innerHTML = "";
                for (i = 0; i < result.length; i++) {
                    $("#sub_centre_id").append('<option value="' + result[i].id + '">' + result[i].text + '</option>');
                }

            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }
    function pop_select() {
        $.ajax({
            url: "<?php echo e(route('ajax.pop')); ?>", //'ajax.category'
            type: "get",
            success: function (result) {
                //  document.getElementById('category_id_h[0]').innerHTML = "";
                for (i = 0; i < result.length; i++) {
                    $("#pop_id").append('<option value="' + result[i].id + '">' + result[i].text + '</option>');
                }

            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }

</script>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>