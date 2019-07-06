 <div class="container-fluid position-relative no-side-padding">

            <a href="#" class="logo">Blog</a>

            <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

            <ul class="main-menu visible-on-click" id="main-menu">
                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li><a href="<?php echo e(route('post.index')); ?>">Posts</a></li>
               

                <?php if(auth()->guard()->guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                <?php else: ?>
                    <?php if(Auth::user()->role_id == 1): ?>
                        <li><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    <?php endif; ?>

                    <?php if(Auth::user()->role_id == 2): ?>
                        <li><a href="<?php echo e(route('author.dashboard')); ?>">Dashboard</a></li>
                    <?php endif; ?>

                <?php endif; ?>
            </ul><!-- main-menu -->

            <div class="src-area">
                <form method="GET" action="<?php echo e(route('search')); ?>">
                    <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                    <input class="src-input" name="query" value="<?php echo e(isset($query) ? $query : ''); ?>" type="text" placeholder="Type of search">
                </form>
            </div>

</div><!-- conatiner -->
<?php /* C:\xampp\htdocs\blog_sistem\resources\views/layouts/frontend/partial/header.blade.php */ ?>