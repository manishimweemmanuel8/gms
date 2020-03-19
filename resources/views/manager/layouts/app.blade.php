<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Mar 2020 04:21:00 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>{{ config('app.name', 'Laravel') }} :: Manager</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="{{asset('asset/admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{asset('asset/admin/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{asset('asset/admin/css/custom_css/metisMenu.css')}}" rel="stylesheet" />
    <!-- Date picker -->
    <link href="{{asset('asset/admin/vendors/air-datepicker-master/dist/css/datepicker.min.css')}}" rel="stylesheet" type="text/css">
    <!-- end of global css -->
    <!-- page level css -->
    <link type="text/css" href="{{asset('asset/admin/vendors/jquery-circliful/css/jquery.circliful.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="vendors/jquery-plugin-circliful-master/css/jquery.circliful.css"> -->
    <link type="text/css" href="{{asset('asset/admin/vendors/progressbar/css/bootstrap-progressbar.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('asset/admin/vendors/fullcalendar/css/fullcalendar.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('asset/admin/vendors/select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('asset/admin/css/custom_css/calendar_custom.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('asset/admin/vendors/sweetalert/dist/sweetalert2.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('asset/admin/vendors/nvd3chart/nv.d3.min.css')}}">
    <link type="text/css" href="{{asset('asset/admin/css/custom_css/fitness.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{asset('asset/admin/css/custom_css/panel.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{asset('asset/admin/css/custom_css/admin_dashboard.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('asset/admin/vendors/fancyBox/source/jquery.fancybox8cbb.css?v=2.1.5')}}" rel="stylesheet" />

    <link type="text/css" href="{{asset('asset/admin/vendors/fancyBox/source/helpers/jquery.fancybox-buttons3447.css?v=1.0.5')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('asset/admin/vendors/jQuery-File-Upload/css/jquery.fileupload.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/admin/vendors/jQuery-File-Upload/css/jquery.fileupload-ui.css')}}" />
    <!-- end of page level css -->


    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="{{asset('asset/admin/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('asset/admin/vendors/datatables/css/dataTables.bootstrap.css')}}" rel="stylesheet" />

    <link type="text/css" href="{{asset('asset/admin/vendors/datatables/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />

    <link type="text/css" href="{{asset('asset/admin/css/custom_css/users_list.css" rel="stylesheet')}}" />

    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="{{asset('asset/admin/css/custom_css/news.css" rel="stylesheet')}}" />

     <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">

           <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">

             <link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">

</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <header class="header">
        <nav class="navbar navbar-static-top">
            <a href="index-2.html" class="logo"> <!-- come back here and do real navigation-->
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                 <img src="{{asset('asset/admin/img/logo.png')}}" height="50" width="170" alt="image not found">
            </a>
            <!-- Header Navbar: style can be found in header-->
            <!-- Sidebar toggle button-->
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i class="fa fa-fw fa-navicon"></i>
                </a>
            </div>

            <div class="navbar-right">
                <ul class="nav navbar-nav">



                    <!-- User Account: style can be found in dropdown-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                            <div class="riot">
                                <div>
                                    {{ Auth::guard('manager')->user()->name }} 
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="user-footer">

                                <div class="pull-right">
                                    <a href="login.html">
                                        <i class="fa fa-fw fa-sign-out"></i> 
                                        <a  href="{{ route('manager.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('manager.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar">
                <div id="menu" role="navigation">

                    <ul class="navigation">
                        <li class="active" id="active">
                            <a href="index-2.html">
                                <i class="text-primary menu-icon fa fa-fw fa-dashboard"></i>
                                <span class="mm-text ">Dashboard</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/manager/corporate/create') }}">
                                <i class="text-success menu-icon fa fa-fw fa-building"></i>
                                <span class="mm-text">Company</span>
                            </a>
                        </li>

                          <li>
                            <a href="{{ url('/manager/customer/create') }}">
                                <i class="text-success menu-icon fa fa-fw fa-users"></i>
                                <span class="mm-text">Customer</span>
                            </a>
                        </li>

                          <li>
                            <a href="{{ url('/manager/payment/create') }}">
                                <i class="text-success menu-icon fa fa-fw fa-shopping-cart"></i>
                                <span class="mm-text">Payment</span>
                            </a>
                        </li>

                           <li>
                            <a href="{{ url('/manager/subscription/create') }}">
                                <i class="text-success menu-icon fa fa-fw fa-check-circle"></i>
                                <span class="mm-text">Subscription</span>
                            </a>
                        </li>


                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-warning menu-icon fa fa-fw fa-flag"></i>
                                <span class="mm-text"> Report</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="/manager/report/daily">
                                        <i class="text-primary fa fa-sun-o"></i>  Daily sales report
                                    </a>
                                </li>
                           
                                
                            </ul>

                            <ul class="sub-menu">
                                <li>
                                    <a href="/manager/report/summary">
                                        <i class="text-primary fa fa-compress "></i>  summary sales report
                                    </a>
                                </li>
                           
                                
                            </ul>
                        </li>
 












                    </ul>
                    <!-- / .navigation -->
                </div>
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        @yield('content')


    </div>

         <!-- global js -->
    <script src="{{asset('asset/admin/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/js/custom_js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/js/custom_js/metisMenu.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/js/custom_js/backstretch.js')}}"></script>
    <!-- end of global level js -->
    <script src="{{asset('asset/admin/vendors/jquery-circliful/js/jquery.circliful.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/vendors/progressbar/bootstrap-progressbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/vendors/countUp/countUp.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/vendors/moment/min/moment.min.js')}}" type="text/javascript"></script>
    <!-- date picker -->
    <script src="{{asset('asset/admin/vendors/air-datepicker-master/dist/js/datepicker.min.js')}}"></script>
    <script src="{{asset('asset/admin/vendors/air-datepicker-master/dist/js/i18n/datepicker.en.js')}}"></script>
    <!-- date picker end -->
    <script src="{{asset('asset/admin/vendors/sweetalert/dist/sweetalert2.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/vendors/fullcalendar/fullcalendar.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/vendors/d3-chart/d3.v3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/vendors/nvd3chart/nv.d3.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('asset/admin/vendors/jquery-easy-ticker-master/jquery.easy-ticker.min.js')}}"></script>
    <script src="{{asset('asset/admin/vendors/inputmask/inputmask/inputmask.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/vendors/inputmask/inputmask/jquery.inputmask.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/vendors/inputmask/inputmask/inputmask.date.extensions.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/js/custom_js/admin_index.js')}}" type="text/javascript"></script>
    <!-- end of page level js -->


    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="{{asset('asset/admin/vendors/datatables/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/vendors/datatables/js/dataTables.bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/js/custom_js/users_list.js')}}" type="text/javascript"></script>


    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="{{asset('asset/admin/js/custom_js/news.js')}}" type="text/javascript"></script>

     <script src="{{asset('asset/admin/vendors/jQuery-File-Upload/js/main.js')}}"></script>
    <script src="{{asset('asset/admin/vendors/jQuery-File-Upload/js/vendor/jquery.ui.widget.js')}}"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="{{asset('asset/admin/vendors/jQuery-File-Upload/js/tmpl.min.js')}}"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="{{asset('asset/admin/vendors/jQuery-File-Upload/js/load-image.min.js')}}"></script>
    <!-- The basic File Upload plugin -->
    <script src="{{asset('asset/admin/vendors/jQuery-File-Upload/js/jquery.fileupload.js')}}"></script>
    <!-- The File Upload processing plugin -->
    <script src="{{asset('asset/admin/vendors/jQuery-File-Upload/js/jquery.fileupload-process.js')}}"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="{{asset('asset/admin/vendors/jQuery-File-Upload/js/jquery.fileupload-image.js')}}"></script>
    <!-- The File Upload user interface plugin -->
    <script src="{{asset('asset/admin/vendors/jQuery-File-Upload/js/jquery.fileupload-ui.js')}}"></script>
    <script src="{{asset('asset/admin/vendors/jQuery-File-Upload/js/jquery.fileupload-validate.js')}}"></script>
    <script src="{{asset('asset/admin/vendors/holder/holder.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/vendors/holder/holder.js')}}" type="text/javascript"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

<script type="text/javascript">
    
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
             'print'
        ]
    } );
} );
</script>



</body>


<!-- Mirrored from demo.lorvent.com/fitness/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Mar 2020 04:21:00 GMT -->

</html>