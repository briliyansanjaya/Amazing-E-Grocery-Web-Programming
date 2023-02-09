<nav class="navbar navbar-expand-lg mx-auto bg-transparent pt-3 p-0 m-0">
    <div class="container mb-0 pb-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li>
                    <a href="/home" class="nav-link ps-0 fw-bold text-success" aria-current="page">Home</a>
                </li>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                    <li>
                        <a href="/manage" class="nav-link fw-bold text-success" aria-current="page">Account Maintenance</a>
                    </li>
                <?php endif; ?>
            </ul>

            <ul class="navbar-nav d-flex">
                <li class="nav-item">
                    <a href="/cart" class="nav-link mt-1 text-success" aria-current="page">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                
                    <a class="nav-link dropdown-toggle pe-0 fw-bold text-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?>

                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <li><a class="dropdown-item" href="/history">History</a></li>
                        <li>
                            <form action="/logout" method="POST">
                                <?php echo csrf_field(); ?>
                                <button class="dropdown-item pe-0" type="submit" href="/logout">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\Bina Nusantara\Semester 5\3. Web Programming\Lec WP\Final Exam WebProg\AmazingE-Grocery\resources\views/components/navbar.blade.php ENDPATH**/ ?>