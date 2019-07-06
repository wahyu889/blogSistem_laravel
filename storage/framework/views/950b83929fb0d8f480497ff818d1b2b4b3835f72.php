<?php $__env->startSection('title','create category'); ?>

<?php $__env->startPush('css'); ?>
    <!-- Bootstrap Select Css -->
    <link href="<?php echo e(asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	 <div class="container-fluid">
            <div class="block-header">
                <h2>show post</h2>
            </div>
  
      
            <!-- Vertical Layout | With Floating Label -->
            <a href="<?php echo e(route('admin.post.index')); ?>" class="btn btn-danger waves-effect">BACK</a>
            <?php if($post->is_approved == false): ?>
                <button type="button" 
                class="btn btn-success waves-effect pull-right" 
                onclick="approvePost(<?php echo e($post->id); ?>)">
                    <i class="material-icons">done</i>
                    <span>Approve</span>
                </button>

                 <form id="approval-form-<?php echo e($post->id); ?>" method="POST" action="<?php echo e(route('admin.post.approve', $post->id)); ?>"  style="display: none;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                </form>
               
                <?php else: ?>

                <button type="button" class="btn btn-success pull-right disabled">
                    <i class="material-icons">done</i>
                    <span>Approved</span>
                </button>
                <?php endif; ?>

                <br>
                <br>

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php echo e($post->title); ?>

                                <small><strong><a href=""><?php echo e($post->user->name); ?></a></strong> on <?php echo e($post->created_at->toFormattedDateString()); ?></small>
                            </h2>
                            
                        </div>
                        <div class="body">
                        
                             <?php echo $post->body; ?>

                        </div>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="card ">
                        <div class="header">
                            <h2 >
                                Categories 
                            </h2>
                         
                        </div>
                        <div class="body">
                            <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="label bg-light-blue"> <?php echo e($category->name); ?> </span>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                          
                        </div>
                    </div>

                     <div class="card bg-green">
                        <div class="header">
                            <h2>
                               Tags
                            </h2>
                         
                        </div>
                        <div class="body">
                            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="label bg-cyan"><?php echo e($tag->name); ?></span>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                          
                        </div>
                    </div>

                      <div class="card bg-amber">
                        <div class="header">
                            <h2>
                              featured image
                            </h2>
                         
                        </div>
                        <div class="body">
                            <img class="img-responsive thumbnail" src="<?php echo e(asset('storage/post/'.$post->image )); ?>">  
                          
                        </div>
                    </div>

                </div>
            </div>

   >

            <!-- Vertical Layout | With Floating Label -->
        
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
      <!-- Select Plugin Js -->
    <script src="<?php echo e(asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')); ?>"></script>
  <!-- TinyMCE -->
    <script src="<?php echo e(asset('assets/backend/plugins/tinymce/tinymce.js')); ?>"></script>

    <script src="<?php echo e(asset('css/sweetalert2.all.js')); ?>"></script>



    <script type="text/javascript">
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

        function approvePost(id){
            const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success waves-effect pull-right',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false,
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to Approve this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, approve it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
    
        event.preventDefault();
        document.getElementById('approval-form-'+id).submit();
    
  } else if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'the post reamin pending',
      'info'
    )
  }
});
         }
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\blog_sistem\resources\views/admin/post/show.blade.php */ ?>