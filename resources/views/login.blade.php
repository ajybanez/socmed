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

        <section class="vh-100">
            <div class="container py-5 h-100">
              <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                  <img src="images/login_photo.jpg" class="img-fluid" alt="log in photo">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                    <form method="post" action="{{route('students.login')}}">
                    @if(Session::get('success'))
                       <div class="alert alert-success">{{Session::get('success') }}</div>
                    @endif

                    @if(Session::get('fail'))
                       <div class="alert alert-danger">{{Session::get('fail') }}</div>
                    @endif

                    @csrf

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
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="/signup"
                            style="color: #393f81;">Register here</a></p>

                    </form>
                </div>
              </div>
            </div>
        </section>
    </body>
</html>

