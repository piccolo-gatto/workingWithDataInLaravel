<?php $__env->startSection('content'); ?>

<p>
<div>Название услуги: <?php echo e($service->name ?? "N/A"); ?></div>
</p>
<p>
<div>Цена: <?php echo e($service->price ?? "N/A"); ?></div>
</p>
<p>
<a href="/service/<?php echo e($service->id); ?>/edit">
<button type="submit">Редактировать</button>
</a>

<form method="POST" action="<?php echo e(route('services.delete', $service->id)); ?>">
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit">Удалить</button>
</form>
</p>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user/Downloads/firstLaravelProject/resources/views/service.blade.php ENDPATH**/ ?>