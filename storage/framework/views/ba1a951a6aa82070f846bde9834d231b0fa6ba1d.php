<?php $__env->startSection('title','Comment'); ?>

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
                               ALL comments
                               <span class="badge bg-info"><?php echo e($comments->count()); ?></span>
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
                                          
                                            <th class="text-center">Comment info</th>
                                            <th class="text-center">Post Info</th>
                                             
                                           
                                            <th class="text-center">Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            
                                            <th class="text-center">Comment info</th>
                                            <th class="text-center">Post Info</th>
                                             
                                           
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>
                                            <td>
                                            <div class="media">
                                              <div class="media-left">
                                                <a href="#">
                                                  <img 
                                                    src="<?php echo e(asset('storage/profile/'.$comment->user->image)); ?>"
                                                    width="64" height="64">    
                                                </a>
                                              </div>

                                              <div class="media-body">
                                                <h4 
                                                  class="media-heading"><?php echo e($comment->user->name); ?>

                                                  <small>
                                                    <?php echo e($comment->created_at->diffForHumans()); ?>

                                                  </small>
                                                </h4>
                                                <p><?php echo e($comment->comment); ?></p>
                                                <a href="<?php echo e(route('post.details',$comment->post->slug.
                                                '#comments')); ?>" target="_blank">Reply</a>
                                              </div>
                                            </div>
                                            </td>      

                                            <td>
                                            <div class="media">
                                              <div class="media-left">
                                                <a href="#">
                                                  <img 
                                                    src="<?php echo e(asset('storage/post/'.$comment->post->image)); ?>"
                                                    width="64" height="64">    
                                                </a>
                                              </div>

                                              <div class="media-body">
                                                <a href="<?php echo e(route('post.details',$comment->post->slug)); ?>" target="_blank">
                                                  <h4 class="media-heading"><?php echo e(str_limit($comment->post->title,'40')); ?></h4>
                                                </a> 
                                                <p>by <strong><?php echo e($comment->post->user->name); ?></strong></p> 
                                              </div>
                                            </div>
                                            </td>    

                                            <td>
                                              
                                         <button class="btn btn-danger wafes-effect" type="button" onclick="deleteComment(<?php echo e($comment->id); ?>)">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                    <form id="delete-form-<?php echo e($comment->id); ?>" action="<?php echo e(route('admin.comment.destroy', $comment->id)); ?>" method="POST" style="display: none;">
                                                      <?php echo csrf_field(); ?> 
                                                      <?php echo method_field('DELETE'); ?>                     
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
         function deleteComment(id){
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
        document.getElementById('delete-form-' + id).submit();
    
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
<?php /* C:\xampp\htdocs\blog_sistem\resources\views/admin/comments.blade.php */ ?>