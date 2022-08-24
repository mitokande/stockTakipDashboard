<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="assets/images/favicon.ico">

    <title>Jotstocks | Stocklist</title>

    <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/neon-core.css">
    <link rel="stylesheet" href="assets/css/neon-theme.css">
    <link rel="stylesheet" href="assets/css/neon-forms.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <script src="assets/js/jquery-1.11.3.min.js"></script>

    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body  " data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    <div class="sidebar-menu">

        <div class="sidebar-menu-inner">

            <header class="logo-env">

                <!-- logo -->
                <div class="logo">
                    <a href="/dashboard">
                        <img src="assets/images/jotstocks2.svg" width="120" alt="" />
                    </a>
                </div>

                <!-- logo collapse icon -->
                <div class="sidebar-collapse">
                    <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>


                <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                <div class="sidebar-mobile-menu visible-xs">
                    <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>

            </header>


            <ul id="main-menu" class="main-menu">
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                <li class="active ">
                    <a href="dashboard">
                        <span class="title">Dashboard</span>
                        {{-- <span class="badge badge-success badge-roundless">v2.0</span> --}}
                    </a>
                </li>
                <li class="has sub">
                    <a href="">Stocks</a>
                    <ul class="visible">
                        <li >
                            <a href="checkbarcode">
                                <span class="title">Add Stock</span>
                                {{-- <span class="badge badge-success badge-roundless">v2.0</span> --}}
                            </a>
                        </li><li>
                            <a href="liststocks">
                                <span class="title">List Stocks</span>
                                {{-- <span class="badge badge-success badge-roundless">v2.0</span> --}}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has sub">
                    <a href="">Orders</a>
                    <ul class="visible">
                        <li >
                            <a href="checkbarcode?add=order">
                                <span class="title">Add Order</span>
                                {{-- <span class="badge badge-success badge-roundless">v2.0</span> --}}
                            </a>
                        </li><li>
                            <a href="listorders">
                                <span class="title">List Orders</span>
                                {{-- <span class="badge badge-success badge-roundless">v2.0</span> --}}
                            </a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href="/addbarcode">Add Barcode</a>

                </li>
            </ul>

        </div>


    </div>

    <div class="main-content">

        <div class="row">

            <!-- Profile Info and Notifications -->
            <div class="col-md-6 col-sm-8 clearfix">

                <ul class="user-info pull-left pull-none-xsm">

                    <!-- Profile Info -->
                    <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/images/jotform-icon-dark.svg" alt="" class="img-circle" width="44" />
                            {{$user->shopName}}
                        </a>
                        <ul class="dropdown-menu">

                            <!-- Reverse Caret -->
                            <li class="caret"></li>

                            <!-- Profile sub-links -->
                            <li>
                                <a href="extra-timeline.html">
                                    <i class="entypo-user"></i>
                                    Edit Profile
                                </a>
                            </li>

                            <li>
                                <a href="mailbox.html">
                                    <i class="entypo-mail"></i>
                                    Inbox
                                </a>
                            </li>

                            <li>
                                <a href="extra-calendar.html">
                                    <i class="entypo-calendar"></i>
                                    Calendar
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="entypo-clipboard"></i>
                                    Tasks
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

                {{-- <ul class="user-info pull-left pull-right-xs pull-none-xsm">

                    <!-- Raw Notifications -->
                    <li class="notifications dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="entypo-attention"></i>
                            <span class="badge badge-info">6</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="top">
                                <p class="small">
                                    <a href="#" class="pull-right">Mark all Read</a>
                                    You have <strong>3</strong> new notifications.
                                </p>
                            </li>

                            <li>
                                <ul class="dropdown-menu-list scroller">
                                    <li class="unread notification-success">
                                        <a href="#">
                                            <i class="entypo-user-add pull-right"></i>

                                            <span class="line">
                                                <strong>New user registered</strong>
                                            </span>

                                            <span class="line small">
                                                30 seconds ago
                                            </span>
                                        </a>
                                    </li>

                                    <li class="unread notification-secondary">
                                        <a href="#">
                                            <i class="entypo-heart pull-right"></i>

                                            <span class="line">
                                                <strong>Someone special liked this</strong>
                                            </span>

                                            <span class="line small">
                                                2 minutes ago
                                            </span>
                                        </a>
                                    </li>

                                    <li class="notification-primary">
                                        <a href="#">
                                            <i class="entypo-user pull-right"></i>

                                            <span class="line">
                                                <strong>Privacy settings have been changed</strong>
                                            </span>

                                            <span class="line small">
                                                3 hours ago
                                            </span>
                                        </a>
                                    </li>

                                    <li class="notification-danger">
                                        <a href="#">
                                            <i class="entypo-cancel-circled pull-right"></i>

                                            <span class="line">
                                                John cancelled the event
                                            </span>

                                            <span class="line small">
                                                9 hours ago
                                            </span>
                                        </a>
                                    </li>

                                    <li class="notification-info">
                                        <a href="#">
                                            <i class="entypo-info pull-right"></i>

                                            <span class="line">
                                                The server is status is stable
                                            </span>

                                            <span class="line small">
                                                yesterday at 10:30am
                                            </span>
                                        </a>
                                    </li>

                                    <li class="notification-warning">
                                        <a href="#">
                                            <i class="entypo-rss pull-right"></i>

                                            <span class="line">
                                                New comments waiting approval
                                            </span>

                                            <span class="line small">
                                                last week
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="external">
                                <a href="#">View all notifications</a>
                            </li>
                        </ul>

                    </li>




                </ul> --}}

            </div>
            <!-- Raw Links -->
            <div class="col-md-6 col-sm-4 clearfix hidden-xs">

                <ul class="list-inline links-list pull-right">
                    <li>
                        <a href="{{route('logout')}}">
                            Log Out <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>

            </div>



        </div>

        <hr />






        <br />

        <h3>Exporting Table Data</h3>
        <br />

        <script type="text/javascript">
            jQuery( document ).ready( function( $ ) {
                var $table4 = jQuery( "#table-4" );

                $table4.DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                    ]
                } );
            } );
        </script>

        <table class="table table-bordered datatable" id="table-4">
            <thead>
            <tr>
                <th>Product Name</th>
                <th>Barcode</th>
                <th>Stock Amount</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Date</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($stocks->data as $stock)
                <tr class="odd gradeX">
                    <td>{{$stock->urunAdi}}</td>
                    <td>{{$stock->barcode}}</td>
                    <td>{{$stock->adet}}</td>
                    <td>{{$stock->fiyat}}</td>
                    <td>{{$stock->fiyat*$stock->adet}}</td>
                    <td>{{$stock->date}}</td>

                </tr>
            @endforeach
            </tbody>

        </table>


        <!-- Footer -->
        <footer class="main">

            &copy; 2022 <strong>Jotstock</strong> Dashboard Theme by <a href="http://laborator.co" target="_blank">Mobile Team</a>

        </footer>
    </div>









    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="assets/js/datatables/datatables.css">
    <!-- Bottom scripts (common) -->
    <script src="assets/js/gsap/TweenMax.min.js"></script>
    <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/resizeable.js"></script>
    <script src="assets/js/neon-api.js"></script>
    <script src="assets/js/datatables/datatables.js"></script>


    <!-- Imported scripts on this page -->

    <script src="assets/js/raphael-min.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/toastr.js"></script>


    <!-- JavaScripts initializations and stuff -->
    <script src="assets/js/neon-custom.js"></script>


    <!-- Demo Settings -->
    <script src="assets/js/neon-demo.js"></script>

</body>
</html>
