<?php $__env->startSection('content'); ?>

<table>
    <tr>
        <th>name</th>
        <th>phone</th>
        <th>service</th>
        <th>date</th>
        <th>time</th>
    </tr>
    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><a href="/record/<?php echo e($row->id); ?>"><?php echo e($row->name  ?? "N/A"); ?></a></td>
		<td><?php echo e($row->phone  ?? "N/A"); ?></td>
		<td><a href="/service/<?php echo e($row->service->id); ?>"><?php echo e($row->service->name  ?? "N/A"); ?></a></td>
		<td><?php echo e($row->date  ?? "N/A"); ?></td>
		<td><?php echo e($row->time  ?? "N/A"); ?></td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
<p><a href="/record/add">Добавить запись</a></p>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user/Downloads/workingWithDataInLaravel/resources/views/records.blade.php ENDPATH**/ ?>