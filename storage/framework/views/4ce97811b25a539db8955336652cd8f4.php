<?php $__env->startSection('content'); ?>

<p>
<div>Название услуги:</div>
<div><?php echo e($service->name ?? "N/A"); ?></div>
</p>
<p>
<div>Цена: <?php echo e($service->price ?? "N/A"); ?></div>
</p>
<p>
<a href="/service/<?php echo e($service->id); ?>/edit">Редактировать</a> | <a href="/service/<?php echo e($service->id); ?>/delete">Удалить</a>
</p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user/firstLaravelProject/resources/views/service.blade.php ENDPATH**/ ?>