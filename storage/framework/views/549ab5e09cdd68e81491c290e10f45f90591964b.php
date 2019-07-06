<?php $__env->startSection('title','SUBSCRIBER'); ?>

<?php $__env->startPush('css'); ?>
	 <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	 <div class="container-fluid">
         
	 	 <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               ALL SUBSCRIBER
                                <span class="badge bg-info"><?php echo e($subscribers->count()); ?></span>
                            </h2>
                        
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>email</th>
                                           
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>email</th>
                                           
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php $__currentLoopData = $subscribers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($no++); ?></td>
                                                <td><?php echo e($subscriber->id); ?></td>
                                                <td><?php echo e($subscriber->email); ?></td>
                                              
                                                <td><?php echo e($subscriber->created_at); ?></td>
                                                <td><?php echo e($subscriber->updated_at); ?></td>
                                                <td>
													
                                                    <button class="btn btn-danger wafes-effect" type="button" onclick="deleteSubscriber(<?php echo e($subscriber->id); ?>)">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                    <form id="delete-form-<?php echo e($subscriber->id); ?>" action="<?php echo e(route('admin.subscriber.destroy', $subscriber->id)); ?>" method="POST" style="display: none;">
                                                        
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
         function deleteSubscriber(id){
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
<?php /* C:\xampp\htdocs\blog_sistem\resources\views/admin/subscriber.blade.php */ ?>