<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('container'); ?>
<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container min-vh-100">
        <div class="d-flex justify-content-center pt-2 pb-5">
            <div class="card" style="width: 800px">
                <div class="card-header text-center">
                    <h5 class="fw-bold fs-6">Profile</h5>
                </div>
                <form class="container" action="<?php echo e(route('updateProfile', $user->UserID)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <div class="container px-3">
                        <div class="d-flex justify-content-center pb-2 pt-3">
                            <div class="border border-secondary col-md-4 p-0 m-0">
                                
                                <img src="<?php echo e(asset('storage/images/'.$user->picture)); ?>" style="width: 250px; height: 280px;" class="img-fluid" alt="profile">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" id="formGroupExampleInput" value="<?php echo e($user->firstname); ?>">
                        </div>
                        <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="formGroupExampleInput" value="<?php echo e($user->lastname); ?>">
                        </div>
                        <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="formGroupExampleInput2" value="<?php echo e($user->email); ?>">
                        </div>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Role</label><br>
                            <input type="text" name="RoleID" class="form-control" id="formGroupExampleInput2" value="<?php echo e($user->role->rolename); ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your New Password">
                        </div>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="formGroupExampleInput2" placeholder="Re-Type Your New Password">
                        </div>
                        <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Gender</label><br>
                            <?php if($user->gender == 'Male'): ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
                                <label class="form-check-label" for="flexRadioDefault2">
                                Female
                                </label>
                            </div>
                            <?php else: ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
                                <label class="form-check-label" for="flexRadioDefault1">
                                Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                Female
                                </label>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="mb-4">
                            <label for="formFile" class="form-label">Display Picture</label>
                            <input class="form-control" name="picture" type="file" id="formFile">
                        </div>
                        <?php $__errorArgs = ['picture'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="d-grid gap-2 col-5 mx-auto">
                            <button type="submit" class="btn btn-outline-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\brili\Downloads\AmazingE-Grocery\resources\views/pages/profile.blade.php ENDPATH**/ ?>