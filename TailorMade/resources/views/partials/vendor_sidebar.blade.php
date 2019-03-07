<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-xs-1 p-l-0 p-r-0 collapse in" id="sidebar">
            <div class="list-group panel">
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
        @yield('inner')
    </div>
</div>