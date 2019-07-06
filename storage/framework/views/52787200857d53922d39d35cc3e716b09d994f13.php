<?php $__env->startSection('title','post'); ?>

<?php $__env->startPush('css'); ?>
   <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
   <div class="container-fluid">
         <div class="block-header">
                <h2>
                 
                </h2>
            </div>
     <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               ALL faforite post
                               <span class="badge bg-info"><?php echo e($posts->count()); ?></span>
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                              <th>Author</th>
                                            <th><i class="material-icons">favorite</i></th>
                                           <!-- <th><i class="material-icons">comment</i></th> -->
                                            <th><i class="material-icons">visibility</i></th>
                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                              <th>Author</th>
                                            <th><i class="material-icons">favorite</i></th>
                                           <!-- <th><i class="material-icons">comment</i></th> -->
                                            <th><i class="material-icons">visibility</i></th>
                                           
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key + 1); ?></td>
                                                <td><?php echo e(str_limit($post->title,'10')); ?></td>
                                                <td><?php echo e($post->user->name); ?></td>
                                                <td><?php echo e($post->favorite_to_users->count()); ?></td>
                                                <td><?php echo e($post->view_count); ?></td>
                                              
                                                 
                                                <td>
                                                    
                          <a href = "<?php echo e(route('admin.post.show', $post->id)); ?> " class="btn btn-primary wafes-effect">
                            <i class="material-icons">visibility</i>
                          </a>
                                       
                                         <button class="btn btn-danger wafes-effect" type="button" onclick="removePost(<?php echo e($post->id); ?>)">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                    <form id="remove-form-<?php echo e($post->id); ?>" action="<?php echo e(route('post.favorite', $post->id)); ?>" method="POST" style="display: none;">
                                                        
                                                        <?php echo csrf_field(); ?>
                                                       

                                                    </form>



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
            <!-- #END# Exportable Table -->
   </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
   <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo e(asset('assets/backend/plugins/jquery-datatable/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/jquery-datatable/extensions/export/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js')); ?>"></script>

     <script src="<?php echo e(asset('assets/backend/js/pages/tables/jquery-datatable.js')); ?>"></script>

     <script src="<?php echo e(asset('css/sweetalert2.all.js')); ?>"></script>

     <script type="text/javascript">
         function removePost(id){
            const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false,
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
    
        event.preventDefault();
        document.getElementById('remove-form-' + id).submit();
    
  } else if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})
         }



     </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\blog_sistem\resources\views/author/favorite.blade.php */ ?>