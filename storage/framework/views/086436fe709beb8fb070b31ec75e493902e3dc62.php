<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('container'); ?>
<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container min-vh-100 d-flex justify-content-center pt-2">
        <div class="marginbottom container pb-5 p-0 m-0">
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <?php if($users->count() > 0): ?>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mb-3 px-3">
                    <div class="d-flex justify-content-between py-2">
                        <h5 class="pt-2"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></h5>
                        <div class="d-flex ">
                            <form action="<?php echo e(route('updateRole', $user->UserID)); ?>" class="pb-0 mb-0" style="display: flex" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="me-2">
                                    <select class="form-select" name="RoleID" id="floatingSelectGrid">
                                        <?php if($user->role->rolename == 'User'): ?>
                                            <option  value="1" selected="selected"><?php echo e($user->role->rolename); ?></option>
                                            <option value="2">Admin</option>
                                        <?php else: ?>
                                            <option  value="2" selected="selected"><?php echo e($user->role->rolename); ?></option>
                                            <option value="1">User</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-outline-success me-2" type="submit" id="button-addon2"><i class="fas fa-save"></i></button>
                                </div>
                            </form>
                            <form action="/manage/delete/<?php echo e($user->UserID); ?>" class="pb-0 mb-0"  style="display: flex"  method="POST">
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-outline-danger" type="submit" id="button-addon2" onclick="return confirm('Are you sure want to Delete this account?')"><i class="bi bi-trash-fill"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="text-center mt-4 fw-bold">
                    <h3>There is no Account Yet!</h3>
                    <a href="/home"><button type="button" class="btn btn-outline-success mt-1">Home</button></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\brili\Downloads\AmazingE-Grocery\resources\views/admin/manage.blade.php ENDPATH**/ ?>