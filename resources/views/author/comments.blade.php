@extends('layouts.backend.app')

@section('title','Comment')

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
                               ALL comments
                             
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
                                       
                                        @foreach($posts as $key => $post)
                                          @foreach($post->comments as $comment)
                                          <tr>
                                            <td>
                                            <div class="media">
                                              <div class="media-left">
                                                <a href="#">
                                                  <img 
                                                    src="{{ asset('storage/profile/'.$comment->user->image)}}"
                                                    width="64" height="64">    
                                                </a>
                                              </div>

                                              <div class="media-body">
                                                <h4 
                                                  class="media-heading">{{ $comment->user->name }}
                                                  <small>
                                                    {{ $comment->created_at->diffForHumans() }}
                                                  </small>
                                                </h4>
                                                <p>{{ $comment->comment }}</p>
                                                <a href="{{ route('post.details',$comment->post->slug.
                                                '#comments') }}" target="_blank">Reply</a>
                                              </div>
                                            </div>
                                            </td>      

                                            <td>
                                            <div class="media">
                                              <div class="media-left">
                                                <a href="#">
                                                  <img 
                                                    src="{{ asset('storage/post/'.$comment->post->image)}}"
                                                    width="64" height="64">    
                                                </a>
                                              </div>

                                              <div class="media-body">
                                                <a href="{{ route('post.details',$comment->post->slug)}}" target="_blank">
                                                  <h4 class="media-heading">{{ str_limit($comment->post->title,'40') }}</h4>
                                                </a> 
                                                <p>by <strong>{{ $comment->post->user->name }}</strong></p> 
                                              </div>
                                            </div>
                                            </td>    

                                            <td>
                                              
                                         <button class="btn btn-danger wafes-effect" type="button" onclick="deleteComment({{ $comment->id }})">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                    <form id="delete-form-{{ $comment->id }}" action="{{route('author.comment.destroy', $comment->id)}}" method="POST" style="display: none;">
                                                      @csrf 
                                                      @method('DELETE')                     
                                                    </form>

                                            </td>                                                 
                                          
                                          </tr>
                                          @endforeach
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

@endpush
