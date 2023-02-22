<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/dist/file2/bootstrap.css" rel="stylesheet">
        <link href="/dist/file2/font-awesome.css" rel="stylesheet">
        <link href="/dist/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/dist/icon/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="/dist/icon/css/font-awesome.min.css">
        <style type="text/css">
            .rotate90 {
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                transform: rotate(90deg);
            }

            * {
                margin: 0;
                padding: 0;
            }

            ul li p {
                cursor: pointer;
            }
            
            .sidebar-collapse .nav > li.active-menu > a {
                background-color: #C90000!important;
            }

        </style>  
    </head>
    <body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="/admin">Admin Page</a> 
            </div>
            <div style="color: white;padding: 15px 50px 0px 50px;float: right;font-size: 16px;margin-top: -5px;">
                <div class="btn-group" style="float:left;width: 100%;text-align: center;">
					<button class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-user" style="padding-right: 7.5px;"></i>
							Welcome, Austin
						<i class="fa fa-caret-down" style="padding-left: 7.5px;"></i>
					</button>
					<ul class="dropdown-menu">
						<!-- <li role="separator" class="divider"></li> -->
						<li><a href="#" style="color: red;"><i class="fa fa-sign-out"></i> Sign - Out</a></li>
					</ul>
                </div>
            </div>
        </nav>   
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="{{ (request()->is('admin/user*')) ? 'active-menu' : '' }}"><a href="/admin/user" class="menu"><i class="fa fa-users"></i> User</a></li>
                    <li class="{{ (request()->is('admin/contact*')) ? 'active-menu' : '' }}"><a href="/admin/contact" class="menu"><i class="fa fa-envelope"></i> Contact</a></li>
                    <li class="{{ (request()->is('admin/ekskul*')) ? 'active-menu' : '' }}"><a href="/admin/ekskul" class="menu"><i class="fa fa-tasks"></i> Ekskul</a></li>
                    <li class="{{ (request()->is('admin/historysiswa*')) ? 'active-menu' : '' }}"><a href="/admin/historysiswa" class="menu"><i class="fa fa-history"></i> History Siswa</a></li>
                    <li class="{{ (request()->is('admin/jurusan*')) ? 'active-menu' : '' }}"><a href="/admin/jurusan" class="menu"><i class="fa fa-graduation-cap"></i> Jurusan</a></li>
                    <li class="{{ (request()->is('admin/karyasiswa*')) ? 'active-menu' : '' }}"><a href="/admin/karyasiswa" class="menu"><i class="fa fa-file"></i> Karya Siswa</a></li>
                    <li class="{{ (request()->is('admin/news*')) ? 'active-menu' : '' }}"><a href="/admin/news" class="menu"><i class="fa fa-newspaper-o"></i> News</a></li>
                    <li class="{{ (request()->is('admin/mapel*')) ? 'active-menu' : '' }}"><a href="/admin/mapel" class="menu"><i class="fa fa-book"></i> Mapel</a></li>
                    <li class="{{ (request()->is('admin/download*')) ? 'active-menu' : '' }}"><a href="/admin/download" class="menu"><i class="fa fa-download"></i> Download</a></li>
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">       
            <div id="page-inner">
                @section('content')
                    <h1 class="text-center">WELCOME TO ADMIN PAGE</h1>
                @endsection

                @yield('content')
            </div>
        </div>
    </div>

<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<div class="modal hide fade" id="myModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
  </div>
</div>
</body>
    <script src="/dist/js/jquery-3.5.1.js"></script>
    <script src="/dist/js/jquery.min.js"></script>
    <script src="/dist/js/bootstrap.js"></script>
    <script src="/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/dist/js/all.js"></script>
</html>