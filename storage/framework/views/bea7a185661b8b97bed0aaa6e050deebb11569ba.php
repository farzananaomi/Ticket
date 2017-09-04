<?php
    $flat_name = '';
    if(isset($name))
    {
        if (preg_match('/^(.+?)\[(.+?)\]$/i', $name)) {
            $flat_name = preg_replace('/^(.+?)\[(.+?)\]$/i', '$1.$2', $name);
        } else {
            $flat_name = $name;
        }
    }
?>

<div class="form-group <?php echo e($errors->has(@$flat_name)? 'has-error':''); ?> <?php echo e(isset($wrapperClass)? $wrapperClass:''); ?>">
    <label for="<?php echo e(@$name); ?>" class="<?php echo e(@$horizontal? @$labelSize? $labelSize:'col-sm-3':''); ?> control-label"><?php echo e(@$label); ?></label>
    <?php if(@$horizontal): ?>
        <div class="<?php echo e(@$valueSize? $valueSize:'col-sm-8'); ?>">
    <?php endif; ?>
    <input type="text" class="form-control" name="<?php echo e(@$name); ?>" id="<?php echo e(@$name); ?>" placeholder="<?php echo e(@$placeholder); ?>"
           value="<?php echo e(isset($useOld)? old($flat_name, $useOld):''); ?>"
            <?php echo e(isset($pattern)? 'pattern='.$pattern.'':''); ?> <?php echo e(@$status); ?>

            <?php echo @$extras; ?>>
    <?php if($errors->has(@$flat_name)): ?>
        <p class="help-block"><?php echo e($errors->first(@$flat_name)); ?></p>
    <?php endif; ?>
    <?php if(@$horizontal): ?>
        </div>
    <?php endif; ?>
</div>
