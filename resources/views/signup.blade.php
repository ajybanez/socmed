@extends('layouts.base')
@section('title','students_list')

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="home">iBlog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ml auto" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            {{-- <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li> --}}
        </ul>
        </div>
    </nav>

        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="{{ asset('images/signup_photo2.jpg') }}" class="img-fluid" alt="signup/photo" >
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                    <form method="post" action="{{route('students.add')}}">
                       @if(Session::get('success'))
                       <div class="alert alert-success">{{Session::get('success') }}</div>
                       @endif

                       @if(Session::get('fail'))
                       <div class="alert alert-danger">{{Session::get('fail') }}</div>
                       @endif

                        @csrf
                        <div class="mb-3">
                          <label for="sn" class="form-label">Student ID</label>
                          <input type="text" class="form-control" id="sn" name="sn" value="{{old('sn')}}">

                        @error('sn')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        </div>
                        <div class="mb-3">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" value="{{old('fname')}}">

                            @error('fname')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                          <div class="mb-3">
                            <label for="mname" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="mname" name="mname" value="{{old('mname')}}">
                          </div>

                          <div class="mb-3">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" value="{{old('lname')}}">

                            @error('lname')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                          <div class="mb-3">
                            <label for="course" class="form-label">Course</label>
                            <input type="text" class="form-control" id="course" name="course" value="{{old('course')}}">

                            @error('course')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>


                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">

                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">

                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>




                        <button type="submit" class="btn btn-primary">Submit</button>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="/"
                        style="color: #393f81;">Login here</a></p>

                    </form>
                </div>
              </div>
           </div>

