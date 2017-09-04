<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('sub_centres.update', $sub_centre->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <?php echo method_field('put'); ?>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">Create Sub Centre</div>
                    <div class="content">
                        <div class="form-horizontal">
                            <div class="row">
                                <div class="col-xs-12">
                                    <?php echo $__env->make('partials.bs_text', ['name' => 'name', 'label' => 'Sub Centres Name', 'useOld' => $sub_centre->name, 'horizontal' => 'true', 'extras' => 'required="required"'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <?php echo $__env->make('partials.bs_textarea', ['name' => 'description', 'label' => 'Description', 'useOld' => $sub_centre->description, 'horizontal' => 'true', 'extras' => 'required="required"'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                </div>
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
                    <button type="submit" class="btn btn-fill btn-danger">Update Sub Centre</button>
                    <a href="<?php echo e(route('sub_centres.index')); ?>"
                       class="btn btn-fill btn-warning pull-right"><i class="fa fa-arrow-left"></i> Cancel</a>
                </div>
            </div>
        </div>


    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>