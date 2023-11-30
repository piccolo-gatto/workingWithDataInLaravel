<?php $__env->startSection('content'); ?>

<p>
<div>Имя:</div>
<div><?php echo e($record->name ?? "N/A"); ?></div>
</p>
<p>
<div>Номер телефона: <?php echo e($record->phone ?? "N/A"); ?></div>
</p>
<p>
<div>Услуга: <?php echo e($record->service ?? "N/A"); ?></div>
</p>
<p>
<div>Дата: <?php echo e($record->date ?? "N/A"); ?></div>
</p>
<p>
<div>Время: <?php echo e($record->time ?? "N/A"); ?></div>
</p>
<p>
<a href="/record/<?php echo e($record->id); ?>/edit">Редактировать</a> | <a href="/record/<?php echo e($record->id); ?>/delete">Удалить</a>
</p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user/firstLaravelProject/resources/views/record.blade.php ENDPATH**/ ?>