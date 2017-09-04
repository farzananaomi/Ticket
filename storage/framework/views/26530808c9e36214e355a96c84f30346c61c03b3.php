<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="header">Pop</div>
                <div class="content">
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-xs-12">
                                <?php echo $__env->make('partials.bs_static', ['label' => 'Name', 'value' => $pop->name], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php echo $__env->make('partials.bs_static', ['label' => 'Voter No', 'value' => $pop->description], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <a href="<?php echo e(route('pops.edit', $pop->id)); ?>"
               class="btn btn-fill btn-info"><i class="fa fa-pencil"></i> Edit Member Info</a>

            <a href="<?php echo e(route('pops.index')); ?>"
               class="btn btn-fill btn-warning pull-right"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>