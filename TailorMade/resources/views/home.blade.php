@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-xs-1 p-l-0 p-r-0 collapse in" id="sidebar">
            <div class="list-group panel">
                <!--<a href="#menu1" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><i class="fa fa-dashboard"></i> <span class="hidden-sm-down">Item 1</span> </a>
                <div class="collapse" id="menu1">
                    <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Subitem 1 </a>
                    <div class="collapse" id="menu1sub1">
                        <a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem 1 a</a>
                        <a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem 2 b</a>
                        <a href="#menu1sub1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Subitem 3 c </a>
                        <div class="collapse" id="menu1sub1sub1">
                            <a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem 3 c.1</a>
                            <a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem 3 c.2</a>
                        </div>
                        <a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem 4 d</a>
                        <a href="#menu1sub1sub2" class="list-group-item" data-toggle="collapse"  aria-expanded="false">Subitem 5 e </a>
                        <div class="collapse" id="menu1sub1sub2">
                            <a href="#" class="list-group-item" data-parent="#menu1sub1sub2">Subitem 5 e.1</a>
                            <a href="#" class="list-group-item" data-parent="#menu1sub1sub2">Subitem 5 e.2</a>
                        </div>
                    </div>
                    <a href="#" class="list-group-item" data-parent="#menu1">Subitem 2</a>
                    <a href="#" class="list-group-item" data-parent="#menu1">Subitem 3</a>
                </div>-->
                <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-dashboard"></i> <span class="hidden-sm-down">Dashboard</span></a>
                <a href="#menu3" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><i class="far fa-images"></i> <span class="hidden-sm-down">Photos </span></a>
                <div class="collapse" id="menu3">
                    <a href="#" class="list-group-item" data-parent="#menu3">View Gallery</a>
                    <a href="#menu3sub2" class="list-group-item" data-toggle="collapse" aria-expanded="false">Images & Albums </a>
                    <div class="collapse" id="menu3sub2">
                        <a href="/upload" class="list-group-item" data-parent="#menu3sub2">Upload Images</a>
                        <a href="#" class="list-group-item" data-parent="#menu3sub2">Manage Photos</a>
                    </div>
                </div>
                <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-cog"></i> <span class="hidden-sm-down">Account Settings</span></a>
                <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fas fa-sign-out-alt"></i> <span class="hidden-sm-down">Logout</span></a>
            </div>
        </div>
        <main class="col-md-9 col-xs-11 p-l-2 p-t-2">
            <a href="#sidebar" data-toggle="collapse"><i class="fa fa-navicon fa-lg"></i></a>
            <hr>
            <div class="page-header">
                <h1>Bootstrap 4 Sidebar Menu</h1>
            </div>
            <p class="lead">A responsive, multi-level vertical accordion.</p>
        </main>
    </div>
</div>
@endsection