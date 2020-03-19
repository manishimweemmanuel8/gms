@extends('receptionist.layouts.app')

@section('content')
<aside class="right-side right-padding">
            <section class="content-header">
                <!--section starts-->
                <ol class="breadcrumb">
                    <li>
                        <a href="index-2.html">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#"> Handover </a>
                    </li>
                    <li>
                        <a href="news.html">Summary Sales</a>
                    </li>
                </ol>
            </section>


            <!-- Datatables -->
 
            
                

               


            <div class="container-fluid">


                


                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> Sales
                            </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered text-center" id="example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Event Time</th>
                                            <th class="text-center">Session</th>
                                            <th class="text-center">Month</th>
                                            <th class="text-center"> Three Month</th>
                                            <th class="text-center"> six Month</th>
                                            <th class="text-center"> 12 Month</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                          <td>{{$todayDate}}</td>
                                          <td >{{number_format($cashSession)}}</td>
                                          <td >{{number_format($cashMonth)}}</td>
                                            <td>{{number_format($cashthreeMonth)}}</td>
                                            <td>{{number_format($cashsexMonth)}}</td>
                                            <td>{{number_format($cashtwelveMonth)}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        @endsection