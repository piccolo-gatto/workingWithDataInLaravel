<?php $__env->startSection('content'); ?>

<table>
    <tr>
        <th>name</th>
        <th>price</th>
    </tr>
    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><a href="/service/<?php echo e($row->id); ?>"><?php echo e($row->name); ?></a></td>
		<td><?php echo e($row->price); ?></td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
<p><a href="/service/add">Добавить услугу</a></p>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\учеба\firstLaravelProject\resources\views/services.blade.php ENDPATH**/ ?>