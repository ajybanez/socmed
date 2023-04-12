@extends('layouts.base')
@section('title','posts')
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
        <li>
            <a href="/home" class="nav-link">Studentslist</a>
        </li>
        <li>
            <a href="/logout" class="nav-link">logout</a>
        </li>
    </ul>


    </div>
</nav>

<div class="container text-center">
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="images/profile.jpg">My Profile</a></p>
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile Image" class="img-circle" height="65" width="65" alt="Avatar">
      </div>
      <div class="well">
        <p><a href="#">Interests</a></p>
        <p>
          <span class="label label-default">News</span>
          <span class="label label-primary">Sports</span>
          <span class="label label-success">Music</span>
          <span class="label label-info">Football</span>
          <span class="label label-warning">Gaming</span>
          <span class="label label-danger">Friends</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        People are looking at your profile. Find out who.
      </div>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-7">

      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <p contenteditable="true">Status: Feeling Karne nga Blue</p>
              <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Pablo</p>
           <img src="{{ asset('images/example.jpg') }}" alt="Example Image" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Job</p>
           <img src="{{ asset('images/example.jpg') }}" alt="Example Image" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Labasmo</p>
           <img src="{{ asset('images/example.jpg') }}" alt="Example Image" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Thetimo</p>
           <img src="{{ asset('images/example.jpg') }}" alt="Example Image" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Upcoming Events:</p>
        <p><a href="images/loadslip.jpg">My loadslip</a></p>
        {{-- <img src="{{ asset('images/loadslip.jpg') }}" alt="Example Image" width="400" height="300"> --}}
        <p><strong>Class CSC305</strong></p>
        <p>Sat. 14 March 2023</p>
        <p>Current date and time: {{ now() }}</p>
        <p><a href="images/loadslip.jpg">Info</a></p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>




</body>

</html>
