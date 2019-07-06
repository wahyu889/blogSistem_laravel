   <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo e(asset('assets/backend/images/user.png')); ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?></div>
                    <div class="email"><?php echo e(Auth::user()->email); ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                   
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="material-icons">input</i>sign out
                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <?php if(Request::is('admin*')): ?>
                         <li class="<?php echo e(Request::is('admin/dashboard') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                            </a>
                         </li>

                         <li class="<?php echo e(Request::is('admin/tag*') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('admin.tag.index')); ?>">
                            <i class="material-icons">label</i>
                            <span>Tag</span>
                            </a>
                         </li>
                    <?php endif; ?>

                    <?php if(Request::is('author*')): ?>
                          <li class="active">
                            <a href="<?php echo e(route('author.dashboard')); ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                            </a>
                         </li>
                        <li>
                        <a href="pages/typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Typography</span>
                        </a>
                        </li>
                        <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                        </li>
                    <?php endif; ?>
                   
                
                 
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
<?php /* C:\xampp\htdocs\laravel5_88\resources\views/layouts/backend/partial/sidebar.blade.php */ ?>