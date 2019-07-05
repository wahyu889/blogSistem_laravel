@extends('layouts.backend.app')


@section('title','Settings')

@push('css')

@endpush

@section('content')
	<div class="container-fluid">
		<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Settings
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> Update Profile
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#change_password_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> Password
                                    </a>
                                </li>
                           
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    <form class="form-horizontal" method="POST" action="{{ route('author.profil.update')}}" enctype="multipart/form-data">
                                   	@csrf
                                   	@method('PUT')

                                   	   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="name" class="form-control" placeholder="Enter your name" name="name" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Email Address</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address" name="email" value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 

                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Profile Image </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="file" name="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">About</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea name="about" rows="5" class="form-control">{{ Auth::user()->about}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                               
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                                </div>
                                <!-- PANEL 2 -->
                                <div role="tabpanel" class="tab-pane fade" id="change_password_with_icon_title">

                                	<form class="form-horizontal" method="POST" action="{{ route('author.password.update')}}">
                                   	@csrf
                                   	@method('PUT')

                                   	   <div class="row clearfix">
                                    		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        	<label for="Old_Password">Old Password</label>
                                    		</div>
                                    		<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        		<div class="form-group">
                                            		<div class="form-line">
                                                		<input type="password" id="old_password" class="form-control" placeholder="Enter your old password" name="old_password">
                                            		</div>
                                        		</div>
                                    		</div>
                                		</div>
                                		<!-- clearfix -->

                                			   <div class="row clearfix">
                                    		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        	<label for="Old_Password">new Password</label>
                                    		</div>
                                    		<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        		<div class="form-group">
                                            		<div class="form-line">
                                                		<input type="password" id="new_password" class="form-control" placeholder="Enter your password" name="password">
                                            		</div>
                                        		</div>
                                    		</div>
                                		</div>

                                		   <div class="row clearfix">
                                    		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        	<label for="confirm_password">Cofirm Password</label>
                                    		</div>
                                    		<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        		<div class="form-group">
                                            		<div class="form-line">
                                                		<input type="password" id="confirm_password" class="form-control" placeholder="Confirm your password" name="password_confirmation">
                                            		</div>
                                        		</div>
                                    		</div>
                                		</div>

                                		  
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                                    </div>
                                </div>

                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>
@endsection

@push('js')

@endpush