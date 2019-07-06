<?php $__env->startSection('title','edit category'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	 <div class="container-fluid">
            <div class="block-header">
                <h2>Edit category</h2>
            </div>

      
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Edit category
                                <small>With floating label</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="<?php echo e(route('admin.category.update', $category->id)); ?>" method="POST" enctype="multipart/form-data">
                            	<?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="name" name="name" value="<?php echo e($category->name); ?>" class="form-control">
                                        <label class="form-label">category name</label>
                                    </div>
                                </div>

                               
                                 <div class="form-group">
                                  
                                      <input type="file" name="image">
                                   
                                </div>

                               
                                <a class="btn btn-danger m-t-15 waves-effect" href="<?php echo e(route('admin.category.index')); ?>">back</a>

                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
        
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\blog_sistem\resources\views/admin/category/edit.blade.php */ ?>