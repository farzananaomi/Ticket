<?php $__env->startSection('content'); ?>

    <div class="card ">
        <div class="header">
            <div class="btn-group pull-right">
                <button type="button" role="button" class="btn btn-info" data-toggle="modal" data-target="#user-modal">
                    <i class="fa fa-plus"></i>
                    Add User
                </button>
            </div>
            <h4 class="title inline-block">Listing Users</h4>
            <div class="clearfix"></div>
        </div>
        <div class="content">
            <?php echo $dataTable->table(); ?>

        </div>
    </div>

    <div class="modal fade" id="user-modal" tabindex="-1" role="dialog"
         aria-labelledby="user-form-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="user-form-title">
                        Add new Form
                    </h4>
                </div>
                <form role="form" action="<?php echo e(route('users.store')); ?>" method="post" id="user-form">
                <?php echo csrf_field(); ?>

                <!-- Modal Body -->
                    <div class="modal-body">
                        <?php echo $__env->make('partials.bs_text', ['name' => 'name', 'label' => 'Name', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('partials.bs_email', ['name' => 'email', 'label' => 'Email', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('partials.bs_text', ['name' => 'contact', 'label' => 'Contact', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('partials.bs_text', ['name' => 'additional_no', 'label' => 'Additional Contact', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <?php echo $__env->make('partials.bs_textarea', ['name' => 'address', 'label' => 'Address', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('partials.selectpicker', ['name' => 'role', 'label' => 'User Type', 'options' =>['Admin', 'Employee', 'Salesman', 'Super','Supplier'], 'useKeys' => 'true', 'extras' => 'required="required"'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('partials.bs_text', ['name' => 'username', 'label' => 'Username', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('partials.bs_password', ['name' => 'password', 'label' => 'Password', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('partials.bs_password', ['name' => 'password_confirmation', 'label' => 'Confirm Password', 'extras' => 'required="required"', 'useOld' => ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-default btn-danger btn-fill">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<?php echo $dataTable->scripts(); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>