<!doctype html> <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]--> <!--[if IE 7]> <html
    class="no-js lt-ie9 lt-ie8" lang=""> <![endif]--> <!--[if IE 8]> <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IOT</title>
    <meta name="description" content="IOT">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('index') }}"><i class="menu-icon fa fa-laptop"></i>Trang chủ</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('profile') }}"><i class="menu-icon fa fa-male"></i>Trang cá nhân</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('dataseeker', 0) }}"><i class="menu-icon fa fa-table"></i>Thông tin dữ liệu</a>
                    </li>
                    <li class="active">
                    <a href="{{ route('history', 0) }}"><i class="menu-icon fa fa-th"></i>Lịch sử hoạt động</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- Left Panel -->


    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="{{ route('profile') }}" class="dropdown-toggle active" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="https://cdn4.iconfinder.com/data/icons/avatars-xmas-giveaway/128/batman_hero_avatar_comics-512.png" alt="User Avatar">
                        </a>
                    </div>

                    <div class="header-left">
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header-->
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Nguyễn Ngọc Minh</strong> <small> B20DCCN437</small>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Ngày sinh</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control" type="date" value="2002-03-12" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Số điện thoại</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" value="09812345689" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                        <input class="form-control" value="nguyenngocminh2003@gmail.com" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Github</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                        <input class="form-control" value="https://github.com/" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Trường học</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input class="form-control" value="Học viện Công nghệ Bưu chính viễn thông"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Số tài khoản tín dụng</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                        <input class="form-control" value="999 9999 9999 9999" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Quốc tịch</strong>
                            </div>
                            <div class="card-body">
                                <input class="form-control" value="Việt Nam" disabled>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Quê quán</strong>
                            </div>
                            <div class="card-body">
                                <input class="form-control" value="Thái Bình" disabled>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Sở thích</strong>
                            </div>
                            <div class="card-body">
                                <input class="form-control" value="Sáng tạo" disabled>
                            </div>
                        </div>
                    </div>
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2023 MinhNNg
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">MinhNNg</a>
                    </div>
                </div>
            </div>
        </footer>


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script>
        jQuery(document).ready(function () {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>

</body>

</html>