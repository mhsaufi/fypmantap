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

                            @if($event->status === NULL)
                                <td><a href="{{$event->id}}" data-toggle="modal" data-target="#StatusModal"><span class="label label-danger">Pending</span></a></td>
                                <td><span class="label label-danger">Partially Paid</span></td>
                            @else
                                <td><span class="label label-success">Confirmed</span></td>
                                <td><span class="label label-danger">Partially Paid</span></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>                
                </table>
<div id="StatusModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Change Status</h4></center>
      </div>
        <div class="modal-body">
            <div id="collapse3" class="body">
                <form method="POST" action="agreement/status" class="form-horizontal" id="inline-create song">
                    {{ csrf_field() }}
                    <div>
                        <p><strong><i>If the organizer has confirmed the event, please change the status to proceed with the payment.</i></strong></p>
                    </div>
                    <div class="form-group">
                        <center>
                            <input type="hidden" value="{{$event->id}}"> 
                            <button class="btn btn-primary" type="submit">Confirmed</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
   </div>
</div>
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
