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
                        <a href=""> Attendance</a>
                    </li>
                    <li>
                        <a href="">Committed Attendance</a>
                    </li>
                </ol>
            </section>


            <!-- Datatables -->

            <!-- /.content -->


            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> Attendances
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
                                            <th class="text-center">Date</th>
                                            <th class="text-center">receptionist</th>
                                            <th class="text-center">Payment</th>
                                            <th class="text-center">Type</th>
                                            <th class="text-center">Delete/Cancel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($individuals as $individual)
                                        <tr>
                                            <td>{{$individual->created_at}}</td>
                                             <td>{{DB::table('receptionists')->where('id',$individual->receptionist_id)->value("name")}}</td>
                                            <td>{{DB::table('customers')->where('id',DB::table('payments')->where('id',$individual->payment_id)->value("customer_id"))->value("names")}}</td>
                                            <td>Session/individual</td>
                                            <td>
                                                <a class="delete btn btn-danger" href="{{route('individual.destroy',['id'=>$individual->id])}}">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                           
                                      </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        @endsection