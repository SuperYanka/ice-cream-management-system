<?php
    use App\Models\Types;
?>



<?php $__env->startSection('page_title'); ?>
    <div class="ice-cream-attributs">
        <div class="main-vf">
    <b><?php echo e($ice_cream->name); ?> Information</b> </div></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div  class="ice-cream-attributs">
    <table>

        <tr>
            <td>Name :</td>
            <td> <?php echo e($ice_cream->name); ?> </td> </tr>

        <tr>  <td>Taste:</td>
            <td><?php echo e($ice_cream->taste); ?></td>
        </tr>
        <tr>  <td>Cost:</td>
            <td><?php echo e($ice_cream->cost); ?></td>
        </tr>
        <tr>  <td>Type:</td>
            <td><?php echo e(isset(Types::$types[$ice_cream->type]) ? Types::$types[$ice_cream->type] : ''); ?></td>
        </tr>
        </table>


    </div>
    <div style="text-align: center; margin-top: 20px;">
        <a class="submit-button" id="sweety-dreams" href="/types">Back</a>
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <a class="submit-button" id="sweety-dreams" href="/admin/types">Back to admin</a>
    </div>



    <?php if(isset(Types::$types_images[$ice_cream->type])): ?>
        <img src="<?php echo e(Types::$types_images[$ice_cream->type]); ?>" alt="Type Image" style="display: block; margin: 0 auto;>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\KPI_Labs\laba-9\sweetydreams\resources\views/app/types/type.blade.php ENDPATH**/ ?>