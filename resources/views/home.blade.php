@extends('layouts.app4')

@section('content1')
<div class="main-bar">
                                <h3>
              <i class="fa fa-dashboard"></i>&nbsp;
           Dashboard
          </h3>
</div>
@endsection

@section('content2')
<div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                            {{ session('status') }} 
                            </div>
                        @endif

    <div class="col-lg-12">
        <div class="box">
            <header>
                <div class="icons"><i class="fa fa-music"></i></div>
                <h5>Upcoming Show <i style="color: red">(In 7 days)</i></h5>
            </header>
            <div id="defaultTable" class="body collapse in">
                <table class="table responsive-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Event Name</th>
                            <th>Setlist</th>
                            <th>Status</th>
                            <th>Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <td><?php

                                   $date = $event->event_date;

                                   echo date('j M Y', strtotime($date));

                                ?>       
                            </td>
                            <td>{{ $event -> event_name}}</td>
                            <td>{{ $event -> setlist_id}}</td>
                            <td><span class="label label-success">Confirmed</span></td>
                            <td><span class="label label-danger">Partially Paid</span></td>
                        </tr>
                        @endforeach
                    </tbody>                
                </table>
            </div>
        </div>
    </div>
       <div class="col-lg-12">
        <div class="box">
            <header>
                <div class="icons"><i class="fa fa-calendar"></i></div>
                <h5>Recently Update</h5>
            </header>
            <div id="defaultTable" class="body collapse in">
                <table class="table responsive-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Event/Activities</th>
                            <th>Status</th>
                            <th>Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($update as $up)
                        <tr>
                            <td><?php

                                   $date = $up->event_date;

                                   echo date('j M', strtotime($date));

                                ?>          
                            </td>
                            <td><?php

                                       $time = $up->event_time;

                                       echo date('h:iA', strtotime($time));

                                     ?></td>
                            <td>{{ $up -> event_name}}</td>
                            <td><span class="label label-default">None</span></td>
                            <td><span class="label label-default">None</span></td>
                        </tr>
                        @endforeach
                    </tbody>                
                </table>
            </div>
        </div>
    </div>
    
                    </div>
                 </div>
            </div>
    </div>
</div>
@endsection
