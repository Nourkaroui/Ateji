<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Bootstrap 3 Control Panel</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<!-- Style-->
<style>
    navbar-static-top {
        margin-bottom:20px;
    }

    i {
        font-size:18px;
    }

    footer {
        margin-top:20px;
        padding-top:20px;
        padding-bottom:20px;
        background-color:#efefef;
    }

    .nav>li .count {
        position: absolute;
        top: 10%;
        right: 25%;
        font-size: 10px;
        font-weight: normal;
        background: rgba(41,200,41,0.75);
        color: rgb(255,255,255);
        line-height: 1em;
        padding: 2px 4px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
        border-radius: 10px;
    }
</style>

<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-toggle"></span>
            </button>
            <a class="navbar-brand" href="#">Ateji Administration </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i> {{auth()->guard('admin')->user()->name}} <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">

                        <li><a href="{{ url('/admin/login ') }}"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container">
    <div class="row">
        @yield('contentAdmin')

    </div>
</div><!--/container-->
<!-- /Main -->


<footer class="text-center">This Bootstrap 3 dashboard layout is compliments of <a href="http://www.bootply.com/85861"><strong>Bootply.com</strong></a></footer>


<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Widget</h4>
            </div>
            <div class="modal-body">
                <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dalog -->
</div><!-- /.modal -->




<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>