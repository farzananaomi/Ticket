<?php $__env->startSection('content'); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="clearfix">
                <span class="panel-title">Invoices</span>
                <a href="<?php echo e(route('invoices.index')); ?>"
                               class="btn btn-fill btn-warning pull-right" style="width: 100px">Create</a>

            </div>
        </div>
        <div class="panel-body">
            <?php if($invoices->count()): ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Invoice No.</th>
                        <th>Grand Total</th>
                        <th>Client</th>
                        <th>Invoice Date</th>
                        <th colspan="2">Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($invoice->invoice_no); ?></td>
                            <td><?php echo e($invoice->grand_total); ?></td>
                            <td><?php echo e($invoice->customer->customer_name); ?></td>
                            <td><?php echo e($invoice->invoice_date); ?></td>
                            <td><?php echo e($invoice->created_at->diffForHumans()); ?></td>
                            <td class="text-right">
                                <a href="<?php echo e(route('invoices.show', $invoice)); ?>" class="btn btn-fill btn-default btn-sm">View</a>
                                <a href="<?php echo e(route('invoices.edit', $invoice)); ?>" class="btn  btn-fill btn-primary btn-sm">Edit</a>
                                <form class="form-inline" method="post"
                                      action="<?php echo e(route('invoices.destroy', $invoice)); ?>"
                                      onsubmit="return confirm('Are you sure?')">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <input type="submit" value="Delete" class="btn btn-fill btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo $invoices->render(); ?>

            <?php else: ?>
                <div class="invoice-empty">
                    <p class="invoice-empty-title">
                        No Invoices were created.
                        <a href="<?php echo e(route('invoices.create')); ?>">Create Now!</a>
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>