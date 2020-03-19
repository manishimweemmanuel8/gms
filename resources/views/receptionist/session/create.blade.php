@extends('receptionist.layouts.app')

@section('content')

  <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <ol class="breadcrumb">
                    <li>
                        <a href="">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Session</a>
                    </li>
                    <li>
                        <a href="add_users.html" class="activated">Add Session</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="fa fa-fw fa-user"></i> Add Session
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="add_users_form" method="post" action="{{route('session.store')}}" class="form-horizontal">
                                            {{ csrf_field() }}
                                            <div class="form-body">
                                              
                                                 <div class="form-group">
                                                    <label class="col-md-3 control-label" for="mail">
                                                        Phone
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-envelope text-primary"></i>
                                                            </span>
                                                            <input type="text" placeholder="Phone number" class="form-control" id="mail" name="phone" />
                                                        </div>
                                                    </div>
                                                </div>


                                               
                                               
                                                
                                                
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        
                                                         <button type="submit" class="btn btn-primary">Add</button>
                                                        
                                                        <input type="reset" class="btn btn-white " value="Reset">

                                                            <a href="{{ url('/receptionist/session') }}" class="btn btn-primary ">
                                                            <i ></i>
                                                            <span class="mm-text">View</span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <!-- col-md-6 -->
                <!--row -->
                <!--row ends-->
            </div>
            <!-- /.content -->
        </aside>
        <!-- /.right-side -->

        @endsection