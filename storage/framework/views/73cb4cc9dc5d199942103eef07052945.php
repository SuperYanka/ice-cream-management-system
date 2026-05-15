<?php
    use App\Models\Types;
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Eczar&display=swap"/>
    <link rel="stylesheet" href="/styles.css" />
</head>

<?php echo $__env->make('admin.ice-cream.admin-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <table class="ice-cream-table">
        <tr>
            <td class="table-rows-cols">Type</td>
            <td class="table-rows-cols">Taste</td>
            <td class="table-rows-cols" >Name</td>
            <td class="table-rows-cols">Cost</td>
            <td class="table-rows-cols">In stock</td>
            <td colspan="2" class="table-rows-cols " >Admin</td>
        </tr>
        <?php $__currentLoopData = $ice_creams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ice_cream): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e(isset(Types::$types[$ice_cream->type]) ? Types::$types[$ice_cream->type] : ''); ?></td>
                <td><?php echo e($ice_cream->taste); ?></td>
                <td>
                    <a id="sweety-dreams" href="/types/<?php echo e($ice_cream->id); ?>"><?php echo e($ice_cream->name); ?></a>
                </td>

                <td><?php echo e($ice_cream->cost); ?></td>
                <td><?php echo e(isset(Types::$in_stock[$ice_cream->in_stock]) ? Types::$in_stock[$ice_cream->in_stock] : ''); ?></td>
                <td>
                    <a class="edit-link" href="/admin/types/<?php echo e($ice_cream->id); ?>/edit">edit</a>
                </td>
                <td>
                    <form action="/admin/types/<?php echo e($ice_cream->id); ?>" method="POST">

                        <?php echo e(method_field('DELETE')); ?>

                        <?php echo e(csrf_field()); ?>

                        <button class="button-style">Delete</button>
                    </form>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>

    <?php echo $__env->make('app.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\KPI_Labs\laba-9\sweetydreams\resources\views/admin/ice-cream/list.blade.php ENDPATH**/ ?>