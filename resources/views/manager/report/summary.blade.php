@extends('manager.layouts.app')

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
                        <a href="#">Corporate</a>
                    </li>
                    <li>
                        <a href="news.html">Sales Summary</a>
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
                                    <i class="fa fa-fw fa-file-text-o"></i> Sales Summary From 
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="courseschedule_form" method="post" action="{{route('report.between')}}" class="form-horizontal">
                                                            {{ csrf_field() }}

                 
                                            <div class="form-body">
                                                
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="from">
                                                        From
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-3">
                                                        <div class='input-group date' id='datetimepicker4'>
                                                            <input type='date' class="form-control" name="from" id="from" />
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <label class="col-md-1 control-label" for="to">
                                                        To
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-3">
                                                        <div class='input-group date' id='datetimepicker5'>
                                                            <input type='date' class="form-control" name="to" id="to" />
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                               
                                              
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-7">
                                                        <input type="submit" class="btn btn-primary" value="Search"> &nbsp;
                                                        <input type="reset" class="btn btn-white add-news-reset-editable" value="Reset">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> Sales Summary
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