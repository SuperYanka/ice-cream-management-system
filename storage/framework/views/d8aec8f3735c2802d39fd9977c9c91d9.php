<?php $__env->startSection('page_title'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <table class="table" >
        <td class="table-rows-cols" > Type</td>
        <td class="table-rows-cols" id="table-taste-name-cols"> Taste</td>
        <td class="table-rows-cols" id="table-taste-name-cols"> Name</td>

        <td class="table-rows-cols" > Cost</td>
        <td class="table-rows-cols" > In stock</td>

        <?php $__currentLoopData = $ice_creams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ice_cream): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
         <td  class="table-rows-cols" id="table-taste-name-cols"><?php echo e($ice_cream -> type); ?></td>
         <td  class="table-rows-cols" id="table-taste-name-cols"><?php echo e($ice_cream -> taste); ?></td>

         <td  class="table-rows-cols"> <a id="sweety-dreams" href="/types/<?php echo e($ice_cream -> id); ?>"><?php echo e($ice_cream -> name); ?></a></td>

         <td  class="table-rows-cols"><?php echo e($ice_cream -> cost); ?></td>
         <td  class="table-rows-cols"> <?php echo e($ice_cream -> in_stock); ?></td>
     </tr>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<div class="left-panel">
    <aside>
        <div class="type-of-ice">Type of ice cream:</div>
    <form method="get" action="/types">
        <?php echo csrf_field(); ?>
        <select class="select-sort" id="type-of-ice-select" name="type">
            <option value="0">All types</option>

            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $type_title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option  value="<?php echo e($id); ?>"
                    <?php echo e(( $id == $type_selected ) ? 'selected' : ''); ?>>
                    <?php echo e($type_title); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </select>

        <input class="new-ice-button" type="submit" value="Знайти" />
        </form></aside>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\KPI_Labs\laba-8\sweetydreams\resources\views/app/types/list.blade.php ENDPATH**/ ?>