<?php $__env->startSection('content'); ?>

<p>
<div>Имя: <?php echo e($record->name ?? "N/A"); ?></div>
</p>
<p>
<div>Номер телефона: <?php echo e($record->phone ?? "N/A"); ?></div>
</p>
<p>
<div>Услуга: <a href="/service/<?php echo e($record->service->id); ?>"><?php echo e($record->service->name); ?></a></div>
</p>
<p>
<div>Дата: <?php echo e($record->date ?? "N/A"); ?></div>
</p>
<p>
<div>Время: <?php echo e($record->time ?? "N/A"); ?></div>
</p>
<p>
<a href="/record/<?php echo e($record->id); ?>/edit">
<button type="submit">Редактировать</button>
</a>

<form method="POST" action="<?php echo e(route('records.delete', $record->id)); ?>">
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit">Удалить</button>
</form>
</p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user/Downloads/workingWithDataInLaravel/resources/views/record.blade.php ENDPATH**/ ?>