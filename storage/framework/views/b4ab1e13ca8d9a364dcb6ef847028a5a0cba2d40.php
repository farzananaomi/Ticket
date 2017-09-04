<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="header">Basic Information</div>
                <div class="content">
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-xs-12">
                                <?php echo $__env->make('partials.bs_static', ['label' => 'Name', 'value' => $user->name], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php echo $__env->make('partials.bs_static', ['label' => 'Email', 'value' =>  $user->email], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php echo $__env->make('partials.bs_static', ['label' => 'Username', 'value' =>  $user->username], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <a href="<?php echo e(route('users.edit', $user->id)); ?>"
               class="btn btn-fill btn-info"><i class="fa fa-pencil"></i> Edit User Info</a>
            <a href="<?php echo e(route('users.index')); ?>"
               class="btn btn-fill btn-warning pull-right"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>