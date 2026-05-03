<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildSchema()); ?>

</div>
<?php /**PATH D:\laragon\www\PWL\PWL\Week05&Week06&Week07&Week10&Week11\vendor\filament\schemas\resources\views/components/grid.blade.php ENDPATH**/ ?>