<?php     if (preg_match('/^(.+?)\[(.+?)?\]$/i', $name)) {
        $flat_name = preg_replace('/^(.+?)\[(.+?)?\]$/i', '$1.$2', $name);
    } else {
        $flat_name = $name;
    }
    $flat_name = trim($flat_name, '.');

    if (@$multiple && isset($useOld)) {
        $useOld = (array) $useOld;
    }
 ?>

<div class="form-group select2-label-fix <?php echo e($errors->has(@$flat_name)? 'has-error':''); ?> <?php echo e(isset($wrapperClass)? $wrapperClass:''); ?>" <?php echo isset($styles) ? $styles : ''; ?>>
    <label for="<?php echo e(@$name); ?>" class="<?php echo e(@$horizontal? @$labelSize? $labelSize:'col-sm-3':''); ?> control-label"><?php echo e(@$label); ?></label>
    <?php if(@$horizontal): ?>
        <div class="<?php echo e(@$valueSize? $valueSize:'col-sm-8'); ?>">
            <?php endif; ?>
            <select name="<?php echo e(@$name); ?>" id="<?php echo e(@$flat_name); ?>"
                    class="form-control <?php echo e(isset($noSelect2)? '':'select2'); ?>" <?php echo @$multiple? 'multiple="multiple"':''; ?> <?php echo isset($extras) ? $extras : ''; ?>>
                <?php if(isset($placeholder)): ?>
                    <option value="" disabled="disabled" selected="selected"><?php echo e(@$placeholder); ?></option>
                <?php endif; ?>

                <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(@$multiple): ?>
                        <?php if(empty($key)): ?>
                            <?php continue; ?>
                        <?php endif; ?>
                        <?php if(@$useKeys): ?>
                            <option value="<?php echo e($key); ?>" <?php echo e(isset($useOld)? in_array($key, $useOld)? 'selected':'':''); ?>><?php echo e($value); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($value); ?>" <?php echo e(isset($useOld)? in_array($key, $useOld)? 'selected':'':''); ?>><?php echo e($value); ?></option>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if(@$useKeys): ?>
                            <option value="<?php echo e($key); ?>" <?php echo e(isset($useOld)? old($flat_name, $useOld) == $key? 'selected':'':''); ?>><?php echo e($value); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($value); ?>" <?php echo e(isset($useOld)? old($flat_name, $useOld) == $value? 'selected':'':''); ?>><?php echo e($value); ?></option>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <?php if($errors->has(@$flat_name)): ?>
                <span class="help-block"><?php echo e($errors->first(@$flat_name)); ?></span>
            <?php endif; ?>
            <?php if(@$horizontal): ?>
        </div>
    <?php endif; ?>
</div>
