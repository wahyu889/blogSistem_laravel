<?php $__env->startSection('title','create category'); ?>

<?php $__env->startPush('css'); ?>
    <!-- Bootstrap Select Css -->
    <link href="<?php echo e(asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
     <div class="container-fluid">
            <div class="block-header">
                <h2>post add</h2>
            </div>
    <form action="<?php echo e(route('admin.post.update',$post->id)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
      
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                edit post
                                <small></small>
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
                        
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="title" name="title" class="form-control" value="<?php echo e($post->title); ?>">
                                        <label class="form-label">Post Title</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="image">Featured Image</label> 
                                    <input type="file" name="image">
                                   
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="publish" class="filled-in" name="status" value="1" <?php echo e($post->status == true ? 'checked' : ''); ?>>
                                    <label for="publish">publish</label>
                                </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Categories and Tags
                                <small></small>
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
                        
                                <div class="form-group form-float">
                                    <div class="form-line <?php echo e($errors->has('categories') ? 'focused error' : ''); ?>">
                                       
                                        <label for="category">select category</label>
                                        <select name="categories[]" id="category" class="form-control show-tick" data-live-search="true" multiple>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                 <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo e($postCategory->id == $category->id ? 'selected' : ''); ?>

                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                                 
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                                 <div class="form-group form-float">
                                    <div class="form-line <?php echo e($errors->has('tags') ? 'focused error' : ''); ?>">
                                       
                                        <label for="tag">select tag</label>
                                        <select name="tags[]" id="tag" class="form-control show-tick" data-live-search="true" multiple>
                                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option 
                                                <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo e($postTag->id == $tag->id ? 'selected' : ''); ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>


                               

                               

                               
                                <a class="btn btn-danger m-t-15 waves-effect" href="<?php echo e(route('admin.category.index')); ?>">back</a>

                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                          
                        </div>
                    </div>
                </div>
            </div>

             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BODY
                                <small></small>
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
                          <textarea id="tinymce" name="body"><?php echo e($post->body); ?></textarea>
                          
                        </div>
                    </div>
                </div>
            </div>
</form>

            <!-- Vertical Layout | With Floating Label -->
        
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
      <!-- Select Plugin Js -->
    <script src="<?php echo e(asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')); ?>"></script>
  <!-- TinyMCE -->
    <script src="<?php echo e(asset('assets/backend/plugins/tinymce/tinymce.js')); ?>"></script>

    <script>
        $(function () {

    //TinyMCE
    tinymce.init({
        selector: "textarea#tinymce",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = '<?php echo e(asset('assets/backend/plugins/tinymce')); ?>';
});
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\blog_sistem\resources\views/admin/post/edit.blade.php */ ?>