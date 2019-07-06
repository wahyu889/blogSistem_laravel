<?php $__env->startSection('title','create tag'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	 <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Tag</h2>
            </div>

      
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Edit Tag
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
                            <form action="<?php echo e(route('admin.tag.update', $tag->id)); ?>" method="POST">
                            	<?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="name" name="name" value="<?php echo e($tag->name); ?>" class="form-control">
                                        <label class="form-label">tag name</label>
                                    </div>
                                </div>

                               

                               
                                <a class="btn btn-danger m-t-15 waves-effect" href="<?php echo e(route('admin.tag.index')); ?>">back</a>

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
<?php /* C:\xampp\htdocs\laravel5_88\resources\views/admin/tag/edit.blade.php */ ?>