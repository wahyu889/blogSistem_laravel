@extends('layouts.backend.app')

@section('title','create category')

@push('css')
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@endpush

@section('content')
     <div class="container-fluid">
            <div class="block-header">
                <h2>post add</h2>
            </div>
    <form action="{{ route('author.post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
      
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
                                        <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}">
                                        <label class="form-label">Post Title</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="image">Featured Image</label> 
                                    <input type="file" name="image">
                                   
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="publish" class="filled-in" name="status" value="1" {{ $post->status == true ? 'checked' : ''}}>
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
                                    <div class="form-line {{ $errors->has('categories') ? 'focused error' : '' }}">
                                       
                                        <label for="category">select category</label>
                                        <select name="categories[]" id="category" class="form-control show-tick" data-live-search="true" multiple>
                                            @foreach($categories as $category)
                                                <option
                                                 @foreach($post->categories as $postCategory)
                                                    {{ $postCategory->id == $category->id ? 'selected' : '' }}
                                                 @endforeach
                                                 value="{{ $category->id}}">{{ $category->name }}</option>
                                                 
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                 <div class="form-group form-float">
                                    <div class="form-line {{ $errors->has('tags') ? 'focused error' : '' }}">
                                       
                                        <label for="tag">select tag</label>
                                        <select name="tags[]" id="tag" class="form-control show-tick" data-live-search="true" multiple>
                                            @foreach($tags as $tag)
                                                <option 
                                                @foreach($post->tags as $postTag)
                                                    {{ $postTag->id == $tag->id ? 'selected' : '' }}
                                                @endforeach
                                                value="{{ $tag->id}}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                               

                               

                               
                                <a class="btn btn-danger m-t-15 waves-effect" href="{{ route('author.post.index')}}">back</a>

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
                          <textarea id="tinymce" name="body">{{ $post->body }}</textarea>
                          
                        </div>
                    </div>
                </div>
            </div>
</form>

            <!-- Vertical Layout | With Floating Label -->
        
        </div>
@endsection

@push('js')
      <!-- Select Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
  <!-- TinyMCE -->
    <script src="{{asset('assets/backend/plugins/tinymce/tinymce.js')}}"></script>

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
    tinyMCE.baseURL = '{{asset('assets/backend/plugins/tinymce')}}';
});
    </script>
@endpush