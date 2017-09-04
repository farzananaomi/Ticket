<div class="form-group form-static <?php echo e(isset($wrapperClass)? $wrapperClass:''); ?>">
    <label class="<?php echo e(isset($labelSize)? $labelSize:'col-sm-3'); ?> control-label"><?php echo e(@$label); ?></label>
    <div class="<?php echo e(isset($valueSize)? $valueSize:'col-sm-8'); ?>">
        <p class="form-control-static"><?php echo @$value; ?></p>
    </div>
</div>
