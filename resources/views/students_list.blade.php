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
            <li>
                <a href="/posts" class="nav-link">Profile</a>
            </li>
            <li>
                <a href="/logout" class="nav-link">logout</a>
            </li>

        </ul>


        </div>
    </nav>




    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="table-responsive"></div>
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>LNAME</th>
                        <th>FNAME</th>
                        <th>MNAME</th>
                        <th>COURSE</th>
                        <th>ACTION</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($std_list as $sl)
                        <tr>
                            <td>{{$sl->sn}}</td>
                            <td>{{$sl->lname}}</td>
                            <td>{{$sl->fname}}</td>
                            <td>{{$sl->mname}}</td>
                            <td>{{$sl->course}}</td>
                            <td>


                                {{-- <a href="{{route('student_updateView',$sl->sn)}}"class="btn btn-primary">Update</a> --}}
                                <button class="btn btn-danger">Delete</button>

                            </td>

                        </tr>


                    @endforeach
                </tbody>
            </table>






        </div>
    </div>
