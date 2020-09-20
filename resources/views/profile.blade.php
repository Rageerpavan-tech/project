@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Profile ') }}</div>

                <div class="card-body">
                   

            
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
  
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  
        <form action="/profile" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="form-group row">
                 <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('UserName') }}</label>
                 <div class="col-md-6">
                <input type="text" name="username" value={{ Auth::user()->name }} class="form-control">
                 </div>
                @if ($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="form-group row">
                 <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('FirstName') }}</label>
                 <div class="col-md-6">
                <input type="text" name="firstname" class="form-control" placeholder="firstname" required>
                 </div>
                @if ($errors->has('firstname'))
                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                @endif
            </div>
            <div class="form-group row">
                 <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('LastName') }}</label>
                 <div class="col-md-6">
                <input type="text" name="lastname" class="form-control" placeholder="lastname" required>
                 </div>
                @if ($errors->has('lastname'))
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                @endif
            </div>
            <div class="form-group row">
                 <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                 <div class="col-md-6">
                <input type="text" name="email" value={{ Auth::user()->email }} class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                 </div>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
             <div class="form-group row">
                 <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                 <div class="col-md-6">
                 <input type="text" name="role" class="form-control" placeholder="Role"  required>
                 </div>
                @if ($errors->has('role'))
                    <span class="text-danger">{{ $errors->first('role') }}</span>
                @endif
            </div>
            <div class="form-group row">
                 <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
                 <div class="col-md-6">
                <input type="text" name="location" class="form-control" placeholder="location" required>
                 </div>
                @if ($errors->has('location'))
                    <span class="text-danger">{{ $errors->first('location') }}</span>
                @endif
            </div>
            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('image') }}</label>
                 <div class="col-md-6">
                    <input type="file" name="image" class="form-control" required>
                </div>
             </div>
             <div class="form-group row mb-0">
               <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
   
            </div>
        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection