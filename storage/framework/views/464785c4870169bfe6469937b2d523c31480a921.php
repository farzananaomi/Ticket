
<a rel="tooltip" title="" class="btn btn-info btn-fill btn-icon edit" data-original-title="Edit Admin"
   href="<?php echo e(route('tickets.edit', $ticket->id)); ?>">
    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
</a>

<a rel="tooltip" title="" class="btn btn-success btn-fill btn-icon edit" data-original-title="Edit Admin"
   href="<?php echo e(route('tickets.adminedit', $ticket->id)); ?>">
    <i class="pe-7s-check" aria-hidden="true"></i> Accept
</a>
<a rel="tooltip" title="" class="btn btn-danger btn-fill btn-icon edit" data-original-title="Edit Admin"
   href="<?php echo e(route('tickets.adminedit', $ticket->id)); ?>">
    <i class="pe-7s-close" aria-hidden="true"></i> Reject
</a>