<?php $__env->startSection('titile','Dashboard'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
     <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL POSTS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo e($posts->count()); ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">favorite</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL FAVORITE</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo e(Auth::user()->favorite_posts()->count()); ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">library_books</i>
                        </div>
                        <div class="content">
                            <div class="text">PENDING POSTS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo e($total_pending_posts); ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">eyes</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL VIEWS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo e($all_views); ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->

              <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">apps</i>
                        </div>
                        <div class="content">
                            <div class="text">CATEGORIES</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo e($category_count); ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>

                    

                      <div class="info-box bg-pink hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">labels</i>
                        </div>
                        <div class="content">
                            <div class="text">TAG</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo e($tag_count); ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>

                      <div class="info-box bg-pink hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">account_circle</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL AUTHOR</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo e($author_count); ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                </div>

                  <div class="info-box bg-pink hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">fiber_new</i>
                        </div>
                        <div class="content">
                            <div class="text">TODAY AUTHOR</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo e($new_authors_today); ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                </div>

                </div>

               

              
                
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>MOST POPULAR POST</h2>
                        </div>

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Rank</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Views</th>
                                            <th>Fvorite</th>
                                            <th>Comments</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                            <?php $__currentLoopData = $popular_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <tr>
                                                <td><?php echo e($key + 1); ?></td>
                                                <td><?php echo e(str_limit($post->title, '20')); ?></td>
                                                <td><?php echo e($post->user->name); ?></td>
                                                <td><?php echo e($post->view_count); ?></td>
                                                <td><?php echo e($post->favorite_to_users_count); ?></td>
                                                <td><?php echo e($post->comments_count); ?></td>
                                                <td>
                                                     <?php if($post->status == true): ?>
                                                        <span class="label bg-green">Published</span>
                                                    <?php else: ?>
                                                        <span class="label bg-red">Pending</span>
                                                    <?php endif; ?>
                                                </td>

                                                <td>
                                                    <a href="<?php echo e(route('post.details', $post->slug)); ?>">View</a>
                                                </td>
                                              </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
          

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>TOP 10 AUTHOR</h2>
                       
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Rank</th>
                                            <th>Name</th>
                                            <th>Posts</th>
                                            <th>Comment</th>
                                            <th>Fvorite</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $active_authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td><?php echo e($key + 1); ?></td>
                                            <td><?php echo e($author->name); ?></td>
                                            <td><?php echo e($author->posts_count); ?></td>
                                            <td><?php echo e($author->comments_count); ?></td>
                                            <td><?php echo e($author->favorite_posts_count); ?></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
 <script src="<?php echo e(asset('assets/backend/js/pages/index.js')); ?>"></script>

   <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo e(asset('assets/backend/plugins/jquery-countto/jquery.countTo.js')); ?>"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo e(asset('assets/backend/plugins/raphael/raphael.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/morrisjs/morris.js')); ?>"></script>

    <!-- ChartJs -->
    <script src="<?php echo e(asset('assets/backend/plugins/chartjs/Chart.bundle.js')); ?>"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo e(asset('assets/backend/plugins/flot-charts/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/flot-charts/jquery.flot.resize.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/flot-charts/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/flot-charts/jquery.flot.categories.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/flot-charts/jquery.flot.time.js')); ?>"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo e(asset('assets/backend/plugins/jquery-sparkline/jquery.sparkline.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\blog_sistem\resources\views/admin/dashboard.blade.php */ ?>