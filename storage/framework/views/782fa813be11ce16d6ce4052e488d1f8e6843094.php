<div class="d-flex justify-content-center shadow bg-body-tertiary bg-white sticky-top">
    <nav class="navbar navbar-light">
        <a class="text-decoration-none" href="/">
            
            <h1 class="text-success fw-bold">Amazing E-Grocery</h1>
        </a>
    </nav>
</div>

<?php $__env->startSection('container'); ?>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 860px;">
        <div class="text-center">
            <div class="d-flex pb-2">
                <h1 class="pe-2">Welcome to</h1>
                <h1 class="text-success">Amazing E-Grocery</h1>
            </div>
            <h3>Find and Buy Your Grocery Here!</h3>
            <div class="d-flex justify-content-center pt-3">
                <a href="/login"><button type="button" class="btn btn-outline-success me-2">Login</button></a>
                <a href="/register"><button type="button" class="btn btn-outline-secondary ">Register</button></a>
            </div>
        </div>
    </div>
<?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bina Nusantara\Semester 5\3. Web Programming\Lec WP\Final Exam WebProg\AmazingE-Grocery\resources\views/pages/welcome.blade.php ENDPATH**/ ?>