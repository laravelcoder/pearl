<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pearl Essence Home Parties</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.2/css/fileinput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">

    <link rel="stylesheet" href="{!! asset('/assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('/assets/css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('/assets/css/select2.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('/assets/css/AdminLTE.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('/assets/css/_all-skins.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('/assets/css/_all.css') !!}">

    <link rel="stylesheet" href="{!! asset('/assets/css/summernote.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('/assets/css/fileinput.css') !!}">
    <link rel="stylesheet" href="{!! asset('/assets/css/bootstrap-toggle.css') !!}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="{!! asset('/assets/css/ionicons.min.css') !!}">

    <style type="text/css">
        td .media-body {width: auto; }
        .table > tbody > tr > td.media-middle {vertical-align: middle; font-size: 1.5em }
        @media (min-width: 768px) {.media-left img {max-width: 120px; margin-right: 20px; } }
        .nav>li>a>img {max-width: 30px; }
    </style>

    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <b>PEARLessence</b>
            </a>

            <!-- Header Navbar -->
        @if (Request::path() == '/')
            <nav class="navbar navbar-static-top" role="navigation">
        @else
            <nav class="navbar navbar-default navbar-fixed white bootsnav on no-full" role="navigation">
        @endif
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                @if(Gravatar::exists(Auth::user()->email))
                                    <img src="{{ Gravatar::src(Auth::user()->email, 80) }}" class="img-circle" alt="User Image"/>
                                @else
                                    <img src="https://placehold.it/150x150" class="img-circle" alt="User Image"/>
                                @endif
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    @if(Gravatar::exists(Auth::user()->email))
                                        <img src="{{ Gravatar::src(Auth::user()->email) }}" class="img-circle" alt="User Image"/>
                                    @else
                                        <img src="https://placehold.it/150x150" class="img-circle" alt="User Image"/>
                                    @endif
                                    <p>
                                        {!! Auth::user()->name !!}
                                        {{-- {!! Auth::user()->email !!} --}}

                                        <small>Member since {!! Auth::user()->created_at->format('M. Y') !!}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        {{-- <a href="#" class="btn btn-default btn-flat">Profile</a> --}}
                                    </div>
                                    <div class="pull-right">
                                        <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2016 <a href="#">Order Pearl Essence</a>.</strong> All rights reserved.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{!! url('/') !!}">
                    Order PearlEssence
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{!! url('/home') !!}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{!! url('/login') !!}">Login</a></li>
                    <li><a href="{!! url('/register') !!}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{!! asset('/assets/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('/assets/js/select2.min.js') !!}"></script>
    <script src="{!! asset('/assets/js/icheck.min.js') !!}"></script>

    <!-- AdminLTE App -->
    <script src="{!! asset('/assets/js/app.min.js') !!}"></script>
    <script src="{!! asset('/assets/js/summernote.js') !!}"></script>
    <script src="{!! asset('/assets/js/fileinput.js') !!}"></script>
    <script src="{!! asset('/assets/js/bootstrap2-toggle.min.js') !!}"></script>
    <script>
        if($("#banner").length){
            $("#banner").fileinput({
                uploadUrl: '#', // you must set a valid URL here else you will get an error
                allowedFileExtensions: ['jpg', 'png', 'gif'],
                overwriteInitial: false,
                 initialPreview:
                ($("#banner").attr('data-src'))?jQuery.parseJSON( $("#banner").attr('data-src')):''
                ,
                initialPreviewConfig:
                 ($("#banner").attr('data-config'))?jQuery.parseJSON( $("#banner").attr('data-config')):''
                ,
                initialPreviewAsData: true, // defaults markup
                maxFileSize: 500000,
                maxFilesNum: 4,
                //allowedFileTypes: ['image', 'video', 'flash'],
                slugCallback: function (filename) {
                    return filename.replace('(', '_').replace(']', '_');
                }
            });
        }
        if($("#image").length){
            $("#image").fileinput({
                uploadUrl: $("#image").attr('data-upload'), // you must set a valid URL here else you will get an error
                allowedFileExtensions: ['jpg', 'png', 'gif'],

                overwriteInitial: false,
                initialPreview:
                ($("#image").attr('data-src'))?jQuery.parseJSON( $("#image").attr('data-src')):''
                ,
                initialPreviewConfig:
                 ($("#image").attr('data-config'))?jQuery.parseJSON( $("#image").attr('data-config')):''
                ,
                initialPreviewAsData: true, // defaults markup
                maxFileSize: 500000,
                maxFilesNum: 4,
                //allowedFileTypes: ['image', 'video', 'flash'],
                slugCallback: function (filename) {
                    return filename.replace('(', '_').replace(']', '_');
                }
            });
        }

        $(".btn-warning").on('click', function () {
            var $el = $("#file-4");
            if ($el.attr('disabled')) {
                $el.fileinput('enable');
            } else {
                $el.fileinput('disable');
            }
        });
        $(".btn-info").on('click', function () {
            $("#image").fileinput('refresh', {previewClass: 'bg-info'});
        });

        $('.summernote').summernote({
          height: 300,                 // set editor height
          minHeight: null,             // set minimum height of editor
          maxHeight: null,             // set maximum height of editor
          focus: true                  // set focus to editable area after initializing summernote
        });

        $("input#name").keyup(function(){
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $("input#slug").val(Text);
        });

        $("input#title").keyup(function(){
            var Text = $(this).val();
            $("input#fb_title").val(Text) + ' on FaceBook.';
            $('input#gp_title').val(Text) + ' on GooglePlus.';
            $('input#tw_title').val(Text) + ' on Twitter.';
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $("input#slug").val(Text);
        });
        $("#imagedragoverdrop").on("dragover drop", function(e) {
            e.preventDefault();  // allow dropping and don't navigate to file on drop
            }).on("drop", function(e) {
                var a=$(this);
                var $files=e.originalEvent.dataTransfer.files;
                setTimeout(
                function()
                {
                   a.find("input[type='file']")
                    .prop("files", $files);
                }, 1000);

        });
        function toArray(fileList) {
            return Array.prototype.slice.call(fileList);
        }
        $("#bannerdragoverdrop").on("dragover drop", function(e) {

            e.preventDefault();  // allow dropping and don't navigate to file on drop
            }).on("drop", function(e) {
                 var a=$(this);
                var $files=e.originalEvent.dataTransfer.files;
                setTimeout(
                function()
                {
                   a.find("input[type='file']")
                    .prop("files", $files);
                }, 1000);
        });
    </script>

    @yield('scripts')

</body>
</html>
