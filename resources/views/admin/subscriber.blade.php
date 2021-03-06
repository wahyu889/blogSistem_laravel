@extends('layouts.backend.app')

@section('title','SUBSCRIBER')

@push('css')
	 <!-- JQuery DataTable Css -->
    <link href="{{ asset('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endpush

@section('content')
	 <div class="container-fluid">
         
	 	 <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               ALL SUBSCRIBER
                                <span class="badge bg-info">{{ $subscribers->count() }}</span>
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
                                        @php $no = 1; @endphp
                                        @foreach($subscribers as $subscriber)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $subscriber->id }}</td>
                                                <td>{{ $subscriber->email }}</td>
                                              
                                                <td>{{ $subscriber->created_at}}</td>
                                                <td>{{ $subscriber->updated_at }}</td>
                                                <td>
													
                                                    <button class="btn btn-danger wafes-effect" type="button" onclick="deleteSubscriber({{ $subscriber->id }})">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                    <form id="delete-form-{{ $subscriber->id }}" action="{{route('admin.subscriber.destroy', $subscriber->id)}}" method="POST" style="display: none;">
                                                        
                                                        @csrf
                                                        @method('DELETE')

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

@endpush
