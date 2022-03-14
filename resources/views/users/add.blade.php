@extends('layouts.layoutsBack.apBack')

@section('content')

<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

<div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-3">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Add New User</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <form class="form" method="POST"
                                action="{{ route('users.store') }}" enctype="multipart/form-data">
                                @csrf
                           <div class="form-group">
                              <div class="add-img-user profile-img-edit">
                                 <img class="profile-pic img-fluid" src="{{asset('images/user/11.png')}}" alt="profile-pic">
                                 <div class="p-image">
                                   <a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
                                   <input type="file" name="avatar" id="avatar" class="file-upload form-control form-control-solid @error('avatar') is-invalid @enderror" accept=".png, .jpg, .jpeg" 
                    value="@if ($route == 'users.create') {{old('avatar')}} @else {{$user->avatar}} @endif" accept="image/*">
                                </div>
                              </div>
                             <div class="img-extension mt-3">
                                <div class="d-inline-block align-items-center">
                                    <span>Only</span>
                                   <a href="javascript:void();">.jpg</a>
                                   <a href="javascript:void();">.png</a>
                                   <a href="javascript:void();">.jpeg</a>
                                   <span>allowed</span>
                                </div>
                             </div>
                           </div>
                           <div class="form-group">
                              <label>User Role:</label>
                              <select class="form-control select2"  name="roles[]" id="selectuserrole" required>
                              @foreach($roles as $id => $roles)
                                 <option value="{{ $id }}" @if($route != 'users.create') @isset($roles) @if(in_array($id,$user->roles()->pluck('name')->toArray())) selected @endif @endisset  @endif>{{ $roles }}</option>
                              @endforeach
                              </select>
                           </div>
                     </div>
                  </div>
            </div>
            <div class="col-lg-9">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">New User Information</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="new-user-info">
                              <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="fname">Name:</label>
                                    <input placeholder="Your Name" type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" 
                                        name="name" id="name" value="@if($route == 'users.create'){{old('name')}}@else{{$user->name}}@endif"/>
                                    @error('name')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <span class="form-text text-muted" role="alert"><strong class="text-danger name" ></strong></span>
                                <div class="form-group col-md-6">
                                    <label for="lname">Last Name:</label>
                                    <input type="text" class="form-control form-control-solid @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="@if($route == 'users.create'){{old('last_name')}}@else{{$user->last_name}}@endif"/>
                                    @error('last_name')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <span class="form-text text-muted" role="alert"><strong class="text-danger last_name" ></strong></span>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone:</label>
                                    <input type="number" class="form-control form-control-solid @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" value="@if($route == 'users.create'){{old('phone_number')}}@else{{$user->phone_number}}@endif" />
                                    @error('phone_number')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <span class="form-text text-muted" role="alert"><strong class="text-danger phone_number" ></strong></span>
                                <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control form-control-solid @error('email') is-invalid @enderror" name="email" id="email" value="@if($route == 'users.create'){{old('email')}}@else{{$user->email}}@endif" />
                                    @error('email')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <span class="form-text text-muted" role="alert"><strong class="text-danger email" ></strong></span>
                              </div>
                              <hr>
                              <h5 class="mb-3">Security</h5>
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="pass">Password:</label>
                                    <input type="password" class="form-control form-control-solid @error('password') is-invalid @enderror" name="password" id="password">
                                    @error('password')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                 <div class="form-group col-md-6">
                                    <label for="rpass">Repeat Password:</label>
                                    <input type="password" class="form-control form-control-solid" name="password_confirmation" id="password_confirmation">
                              </div>
                              <button type="submit" class="btn btn-primary">create</button>
                           </form>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>
@endsection
