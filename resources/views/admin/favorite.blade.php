@extends('layouts.backend.app')

@section('title','post')

@push('css')
   <!-- JQuery DataTable Css -->
    <link href="{{ asset('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endpush

@section('content')
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
                               <span class="badge bg-info">{{ $posts->count() }}</span>
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
                                        @php $no = 1; @endphp
                                        @foreach($posts as $key => $post)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ str_limit($post->title,'10') }}</td>
                                                <td>{{ $post->user->name }}</td>
                                                <td>{{ $post->favorite_to_users->count() }}</td>
                                                <td>{{ $post->view_count }}</td>
                                              
                                                 
                                                <td>
                                                    
                          <a href = "{{ route('admin.post.show', $post->id)}} " class="btn btn-primary wafes-effect">
                            <i class="material-icons">visibility</i>
                          </a>
                                       
                                         <button class="btn btn-danger wafes-effect" type="button" onclick="removePost({{ $post->id }})">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                    <form id="remove-form-{{ $post->id }}" action="{{route('post.favorite', $post->id)}}" method="POST" style="display: none;">
                                                        
                                                        @csrf
                                                       

                                                    </form>



                        </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
   </div>

@endsection

@push('js')
   <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

     <script src="{{ asset('assets/backend/js/pages/tables/jquery-datatable.js')}}"></script>

     <script src="{{ asset('css/sweetalert2.all.js') }}"></script>

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

@endpush
