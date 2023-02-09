<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('container'); ?>
<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container pb-5 min-vh-100">
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php elseif(session()->has('message')): ?>
            <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                <?php echo e(session('message')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <div class="d-flex row justify-content-between pb-3">
            <?php if($products->isNotEmpty()): ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="pt-3" style="width: 264px">
                    <a href="<?php echo e(route('productdetail', $product->ProductID)); ?>" class="text-decoration-none text-black">
                        <div class="card" style="border-width: 1px; border-color: grey">
                            <img src="<?php echo e(asset('storage/images/'.$product->productphoto)); ?>" class="rounded-top" alt="Product">
                            <div class="card-body" style = 'margin-bottom: -5px;'>
                                <h6 class="fw-normal "><?php echo e(Str ::limit($product->productname, 20)); ?></h6>
                                <h6 class="card-text fw-bold">IDR <?php echo e($product->productprice); ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="container text-center mt-3">
                    <td class="align-middle"><h5>There is no Product!</h5></td>
                </div>
            <?php endif; ?>
        </div>
        <div class="d-flex justify-content-center pb-5">
            <?php echo e($products->links()); ?>

        </div>
    </div>
<?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bina Nusantara\Semester 5\3. Web Programming\Lec WP\Final Exam WebProg\AmazingE-Grocery\resources\views/pages/home.blade.php ENDPATH**/ ?>