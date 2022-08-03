@extends('layouts.admin')
@section('admin.css')
    <title>Laravel | Edit User</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
@endsection
@section('admin.content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="icon fa fa-check"></i>{{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br/>
                    @endforeach
                </div>
            @endif
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <form method="POST" action="{{route('resume.update',$user->id)}}"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="card-body">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-8">

                                                        <img
                                                            src="{{ \Illuminate\Support\Facades\Storage::url($user->image) }}"
                                                            alt="profile Pic" height="200" width="200">
                                                    </div>

                                                    <div class="col-sm-6">

                                                        <label class="custom-file-label"
                                                               for="exampleInputFile">{{$user->image}}</label>
                                                        <div class="form-group">
                                                            <input type="file"
                                                                   class="custom-file-input @error('image') is-invalid @enderror"
                                                                   name="image" value="{{$user->image}}">
                                                            @if ($errors->has('image'))
                                                                <span
                                                                    class="text-danger">{{ $errors->first('image') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="custom-file-label"
                                                               for="exampleInputFile">{{$user->file}}</label>
                                                        <div class="form-group">
                                                            <input type="file"
                                                                   class="custom-file-input @error('file') is-invalid @enderror"
                                                                   name="file" value="{{ $user->file }}">
                                                            @if ($errors->has('file'))
                                                                <span
                                                                    class="text-danger">{{ $errors->first('file') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text"
                                                                   class="form-control @error('name') is-invalid @enderror"
                                                                   name="name" value="{{ $user->name  }}"
                                                                   placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>SurName</label>
                                                            <input type="text"
                                                                   class="form-control @error('surname') is-invalid @enderror"
                                                                   name="surname" value="{{ $user->surname }}"
                                                                   placeholder="Surname">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>E-mail</label>
                                                            <input type="text"
                                                                   class="form-control @error('email') is-invalid @enderror"
                                                                   name="email" value="{{ $user->email }}"
                                                                   placeholder="info@payapar.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <input type="text"
                                                                   class="form-control @error('phone') is-invalid @enderror"
                                                                   name="phone" value="{{ $user->phone }}"
                                                                   placeholder="+99450 000 00 00">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password"
                                                                   class="form-control @error('password') is-invalid @enderror"
                                                                   name="password" value="{{ old('password') }}"
                                                                   placeholder="********">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Password Confirm</label>
                                                            <input type="password"
                                                                   class="form-control @error('password-check') is-invalid @enderror"
                                                                   name="password-check"
                                                                   value="{{ old('password-check') }}"
                                                                   placeholder="********">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                    <textarea name="note" class="form-control @error('note') is-invalid @enderror"
                                              rows="7" cols="25"
                                              placeholder="Message">{{ $user->note }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <a href="{{ route('user.index') }}" class="btn btn-secondary">Cancel</a>
                                        <button type="submit" class="btn btn-success float-right">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('admin.js')
    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin//dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin//dist/js/demo.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
