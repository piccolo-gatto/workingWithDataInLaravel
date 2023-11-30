<?php $__env->startSection('content'); ?>
<form method="POST" action="">
    <?php echo csrf_field(); ?>
    <div class="form">
    <input type="hidden" name="id" value="<?php echo e($service->id); ?>">
        <label for="name"><b>Название услуги:</b></label>
        <input type="text" name="name" id="name" value="<?php echo e(old('name') ?? $service->name); ?>">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form">
        <label for="price"><b>Цена:</b></label>
        <input type="number" name="price" id="price" value="<?php echo e(old('price') ?? $service->price); ?>">
        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <button type="submit">Создать</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user/firstLaravelProject/resources/views/edit_service.blade.php ENDPATH**/ ?>