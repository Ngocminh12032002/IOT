<!doctype html> <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]--> <!--[if IE 7]> <html
    class="no-js lt-ie9 lt-ie8" lang=""> <![endif]--> <!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]--> <!--[if gt IE 8]><!-->
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
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Thông tin dữ liệu</strong>
                            </div>
                            <form action="{{ route('dataseeker', ['pageNumber' => 0]) }}" method="GET">
                                @csrf
                                <div class="input-group col-lg-6" style="margin-top: 0.5em">
                                    <input type="text" name="searchKeyword" class="form-control" placeholder="Nhập từ khóa tìm kiếm" aria-label="Nhập từ khóa tìm kiếm" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>

                            <div class="card-body" style="padding: 0.5em;">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT <a href="{{ route('dataseeker', [$data->pageable->pageNumber, 'id', 'asc']) }}">&#9650;</a> <a href="{{ route('dataseeker', [$data->pageable->pageNumber, 'id', 'desc']) }}">&#9660;</a></th>
                                            <th>Nhiệt độ <a href="{{ route('dataseeker', [$data->pageable->pageNumber, 'temp', 'asc']) }}">&#9650;</a> <a href="{{ route('dataseeker', [$data->pageable->pageNumber, 'temp', 'desc']) }}">&#9660;</a></th>
                                            <th>Ánh sáng <a href="{{route('dataseeker', [$data->pageable->pageNumber, 'light', 'asc']) }}">&#9650;</a> <a href="{{ route('dataseeker', [$data->pageable->pageNumber, 'light', 'desc']) }}">&#9660;</a></th>
                                            <th>Độ ẩm <a href="{{route('dataseeker', [$data->pageable->pageNumber, 'humidity', 'asc']) }}">&#9650;</a> <a href="{{ route('dataseeker', [$data->pageable->pageNumber, 'humidity', 'desc']) }}">&#9660;</a></th>
                                            <th>Độ bụi <a href="{{route('dataseeker', [$data->pageable->pageNumber, 'dust', 'asc']) }}">&#9650;</a> <a href="{{ route('dataseeker', [$data->pageable->pageNumber, 'dust', 'desc']) }}">&#9660;</a></th>
                                            <th>Thời gian <a href="{{route('dataseeker', [$data->pageable->pageNumber, 'created', 'asc']) }}">&#9650;</a> <a href="{{ route('dataseeker', [$data->pageable->pageNumber, 'created', 'desc']) }}">&#9660;</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->content as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td><span>{{ $item->temp }}</span>°C</td>
                                            <td>
                                                <spam>{{ $item->light }}</spam>Lux
                                            </td>
                                            <td><span>{{ $item->humidity }}</span>%</td>
                                            <td><span>{{ $item->dust }}</span></td>
                                            <td><span>{{ \Carbon\Carbon::parse($item->created)->format('Y-m-d h:m:s')}}</span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-8"></div>
                                <nav aria-label="Page navigation example" class="col-lg-4" id="target-pagination">
                                    <ul class="pagination">
                                        @if ($data->totalPages > 1)
                                            <!-- Nút Previous -->
                                            <li class="page-item {{ $data->pageable->pageNumber == 1 ? 'disabled' : '' }}">
                                                <a class="page-link" href="{{ route('dataseeker', ['pageNumber' => $data->pageable->pageNumber - 1]) }}" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <!-- Hiển thị các trang -->
                                            @if ($data->totalPages <= 5)
                                                @for ($index = 0; $index <= $data->totalPages; $index++)
                                                    <li class="page-item {{ $index == $data->pageable->pageNumber ? 'active' : '' }}">
                                                        <a class="page-link" href="{{ route('dataseeker', ['pageNumber' => $index]) }}">
                                                            <span>{{ $index + 1 }}</span>
                                                        </a>
                                                    </li>
                                                @endfor
                                            @else
                                                @for ($index = max(1, $data->pageable->pageNumber - 1); $index <= min($data->totalPages, $data->pageable->pageNumber + 3); $index++)
                                                    <li class="page-item {{ $index == $data->pageable->pageNumber ? 'active' : '' }}">
                                                        <a class="page-link" href="{{ route('dataseeker', ['pageNumber' => $index]) }}">
                                                            <span>{{ $index }}</span>
                                                        </a>
                                                    </li>
                                                @endfor

                                                @if ($data->pageable->pageNumber < $data->totalPages - 2)
                                                    <li class="page-item disabled">
                                                        <span class="page-link" aria-hidden="true">...</span>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ route('dataseeker', ['pageNumber' => $data->totalPages]) }}">
                                                            <span>{{ $data->totalPages }}</span>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endif

                                            <!-- Nút Next -->
                                            <li class="page-item {{ $data->pageable->pageNumber == $data->totalPages ? 'disabled' : '' }}">
                                                <a class="page-link" href="{{ route('dataseeker', ['pageNumber' => $data->pageable->pageNumber + 1]) }}" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
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
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            setInterval(fetchDataAndUpdateTable, 2000);
        });
        $(document).ready(function () {
            $('#data-table th a').click(function (e) {
                e.preventDefault();
                var href = $(this).attr('href');
                var parts = href.split('/');
                var field = parts[parts.length - 2];
                var order = parts[parts.length - 1];
                // Cập nhật biến thông tin sắp xếp
                currentSortField = field;
                currentSortOrder = order;
                // Gọi hàm cập nhật dữ liệu
                fetchDataAndUpdateTable();
            });
            // Gọi hàm cập nhật dữ liệu mỗi 2 giây
            setInterval(fetchDataAndUpdateTable, 2000);
        });


        function fetchDataAndUpdateTable() {
            $.ajax({
                url: 'http://127.0.0.1:8080/findAll?page={{$data->pageable->pageNumber}}&size={{$data->pageable->pageSize}}&sort='+currentSortField+'&order='+currentSortOrder,
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    var tbody = $('#data-table tbody');
                    tbody.empty();
                    $.each(data.content, function (index, item) {
                        var dateString = item.created;
                        var date = new Date(dateString);
                        var year = date.getFullYear();
                        var month = ('0' + (date.getMonth() + 1)).slice(-2);
                        var day = ('0' + date.getDate()).slice(-2);
                        var hours = ('0' + date.getHours()).slice(-2);
                        var minutes = ('0' + date.getMinutes()).slice(-2);
                        var seconds = ('0' + date.getSeconds()).slice(-2);
                        var formattedDate = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
                        var newRow = '<tr>' +
                            '<td>' + item.id + '</td>' +
                            '<td><span>' + item.temp + '</span>°C</td>' +
                            '<td><span>' + item.light + '</span>Lux</td>' +
                            '<td><span>' + item.humidity + '</span>%</td>' +
                            '<td><span>' + item.dust + '</span>%</td>' +
                            '<td><span>' + formattedDate + '</span></td>' +
                            '</tr>';
                        tbody.append(newRow);
                    });
                },
                error: function (error) {
                    console.error('Error fetching data:', error);
                }
            });
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>


</body>

</html>