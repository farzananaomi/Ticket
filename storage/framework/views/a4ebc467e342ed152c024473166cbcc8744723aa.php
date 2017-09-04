<?php $__env->startSection('content'); ?>

    <div class="card ">
        <div class="header">
            <div class="btn-group pull-right">

            </div>
            <h4 class="title inline-block">  User Registration</h4>
            <div class="clearfix"></div>
        </div>

    </div>


        <div class="">
            <div class="">
                <!-- Modal Header -->

                <form role="form" action="<?php echo e(route('users.store')); ?>" method="post" id="user-form">
                <?php echo csrf_field(); ?>

                <!-- Modal Body -->
                    <div class="">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">   <?php echo $__env->make('partials.bs_text', ['name' => 'name', 'label' => 'Name', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
                            <div class="col-md-6 col-lg-6"> <?php echo $__env->make('partials.bs_email', ['name' => 'email', 'label' => 'Email', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <label for="sub_centre_id" class="col-md-12 col-lg-12 control-label">Sub center</label>
                                <div class="col-md-12 col-lg-12">

                                    <select class="form-control select2" id="sub_centre_id" name="sub_centre_id"  >

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">

                            <label for="sub_centre_id" class="col-md-12 col-lg-12 control-label">Designation</label>
                            <div class="col-md-12 col-lg-12">

                                <select class="form-control select2" id="designation_id" name="designation_id"  >

                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">   <?php echo $__env->make('partials.bs_text', ['name' => 'contact', 'label' => 'Contact', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>

                        <div class="row">
                            <div class="col-md-6 col-lg-6">   <?php echo $__env->make('partials.bs_textarea', ['name' => 'address', 'label' => 'Address', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-6">  <?php echo $__env->make('partials.bs_password', ['name' => 'password', 'label' => 'Password', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> </div>
                            <div class="col-md-6 col-lg-6">    <?php echo $__env->make('partials.bs_password', ['name' => 'password_confirmation', 'label' => 'Confirm Password', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">   <?php echo $__env->make('partials.bs_text', ['name' => 'username', 'label' => 'Username', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> </div>
                            <div class="col-md-6 col-lg-6">   </div>
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-default btn-danger btn-fill">Submit</button>
                    </div>
                </form>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>

    $(document).ready(function ()
    {  $('.datepicker').datetimepicker(
        {
            format: 'YYYY-MM-DD'
        }
    );
        sub_centre_select();
        designation_id_select();
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
    function designation_id_select() {
        $.ajax({
            url: "<?php echo e(route('ajax.designation')); ?>", //'ajax.category'
            type: "get",
            success: function (result) {
                //  document.getElementById('category_id_h[0]').innerHTML = "";
                for (i = 0; i < result.length; i++) {
                    $("#designation_id").append('<option value="' + result[i].id + '">' + result[i].text + '</option>');
                }

            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }

</script>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.beforebase', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>