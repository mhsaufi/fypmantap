@extends('layouts.app4')

@section('content1')
<div class="main-bar">
                                <h3>
              <i class="fa fa-calendar"></i>&nbsp;
           Schedule
          </h3>
</div>
@endsection

@section('content2')
<div id="content">
  <div class="outer">
    <div class="inner bg-light lter">
        <div class="row">
          <div class="col-xs-1">
              <p style="white-space: normal;"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="box">
                <div id="defaultTable" class="body collapse in">
                    <table class="table responsive-table">
                        <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Venue</th>
                                <th>Type</th>
                                <th>TOP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                            <tr>
                                <td>{{ $event -> event_name }}</td>
                                <td><?php

                                       $date = $event->event_date;

                                       echo date('jS F Y', strtotime($date));

                                     ?>   
                                </td>
                                <td><?php

                                      $time = $event->event_time;

                                      echo date('h:iA', strtotime($time));

                                    ?>
                                </td>
                                <td>{{ $event -> event_venue }}</td>
                                <td>{{ $event -> event_type }}</td>
                                <td>{{ $event -> top }}</td>
                                <td class="dropdown">
                                  <a class="btn btn-default" data-toggle="dropdown">Action</a>
                                  <ul id="contextMenu" class="dropdown-menu" role="menu">
                                    <li><a tabindex="-1" href="#"><font color="green">Update</font></a></li>
                                    <li id="del"><a tabindex="-1" href="#" onClick="delEvent({{$event->id}})"><font color="red">Delete</font></a></li>
                                  </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>              
        <div>
          <button type="button" class="btn btn-metis-5" data-toggle="modal" data-target="#myModal" data-backdrop="">
            <i class="fa fa-plus"></i>&nbsp; Add New Event
          </button>
        </div>   

        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
          <!-- Modal Content -->

            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Event Form</h4>
              </div>
            <div class="modal-body">
              <header>
                <h5>Fill Event Details <i style="color: red"></i></h5>
              </header>
                <div class="body" id="collapse3">
                  <form action="events/add" method="POST" class="form-horizontal" id="inline-validate">
                      {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-lg-4" id="event_type">Event Type</label>

                         <div class="col-lg-8 dropdown">
                             <a class="btn btn-default" data-toggle="dropdown" id="event" name="event_type">
                                Select Event Type
                                <span class="caret"></span>
                            </a>
                            <ul name="event_type" class="dropdown-menu">
                                    <li><a href="#" onClick="selectType('Performance')">Performance</a></li>
                                    <li><a href="#" onClick="eventtype1('Rehearsal')">Rehearsal</a></li>
                                    <li><a href="#" onClick="eventtype2('Appointment')">Appointment</a></li>
                                    <li><a href="#" onClick="eventtype3('Others')">Others</a></li>
                             </ul>
                         </div>
                    </div>
                  
                    <div class="form-group" id="eventname">
                        <!-- <label class="control-label col-lg-4">Event Name</label>

                        <div class="col-lg-8">
                            <input type="text" id="event_name" class="form-control col-lg-6" required>
                        </div> -->
                    </div>

                    <div class="form-group" id="eventdate">
                        <!-- <label class="control-label col-lg-4">Date</label>

                        <div class="col-lg-8">
                            <input type="date" id="event_date" class="form-control col-lg-6" required>
                        </div> -->
                    </div>

                    <div class="form-group" id="eventtime">
                       <!--  <label class="control-label col-lg-4">Time</label><div class="col-lg-8"><input type="time" id="event_time" class="form-control col-lg-6" required></div> -->
                    </div>
                 
                    <div class="form-group" id="eventvenue">
                        <!-- <label class="control-label col-lg-4">Venue</label>

                        <div class="col-lg-8">
                            <input type="Venue" id="event_venue" class="form-control col-lg-6" required>
                        </div> -->
                    </div>   
              
                    <div class="form-group" id="eventsetlist">
                    </div>
                    
                    <div class="form-group" id="eventtop"></div> 

                    <div class="modal-footer">  
                        <div class="form-actions">
                            <div id="fetch">
                                
                            </div>
                            <div class="col-lg-4">
                                <button type="submit" name="Add Event" class="btn btn-primary">Add Event</button>
                            </div>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>   
        <!-- End Modal -->
    </div>                   
  </div>    
</div>  

<script type="text/javascript">

  function selectType(str){

    var string = 'Performance <span class="caret"></span>';

    var string1 ='<label class="control-label col-lg-4">Event Name</label><div class="col-lg-8"><input type="text" name="event_name" class="form-control col-lg-6" required></div>';
    var string2 ='<label class="control-label col-lg-4">Date</label><div class="col-lg-8"><input type="date" name="event_date" class="form-control col-lg-6" required></div>';
    var string3 ='<label class="control-label col-lg-4">Time</label><div class="col-lg-8"><input type="time" name="event_time" class="form-control col-lg-6" required></div>';
    var string4 ='<label class="control-label col-lg-4">Venue</label><div class="col-lg-8"><input type="text" name="event_venue" class="form-control col-lg-6" required></div>';
    var string5 ='<label class="control-label col-lg-4">Setlist</label><div class="col-lg-8 dropdown"><select name="event_setlist">@foreach($setlists as $setlist)<option value="{{ $setlist->id}}">{{ $setlist -> set_title}}</option>@endforeach</select></div>';
    var string6 ='<label class="control-label col-lg-4">Performance Type</label><div class="col-lg-8"><input type="text" name="top" class="form-control col-lg-6" required></div>';

    $('#event').html(string);
    $('#eventname').html(string1);
    $('#eventdate').html(string2);
    $('#eventtime').html(string3);
    $('#eventvenue').html(string4);
    $('#eventsetlist').html(string5);
    $('#eventtop').html(string6);
    $('#fetch').html('<input type="hidden" name="event_type" value="Performance">');
   }

   function eventtype1(str){

    var string = 'Rehearsal <span class="caret"></span>';

    var string1 ='<label class="control-label col-lg-4">Event Name</label><div class="col-lg-8"><input type="text" name="event_name" class="form-control col-lg-6" required></div>';
    var string2 ='<label class="control-label col-lg-4">Date</label><div class="col-lg-8"><input type="date" name="event_date" class="form-control col-lg-6" required></div>';
    var string3 ='<label class="control-label col-lg-4">Time</label><div class="col-lg-8"><input type="time" name="event_time" class="form-control col-lg-6" required></div>';
    var string4 ='<label class="control-label col-lg-4">Venue</label><div class="col-lg-8"><input type="text" name="event_venue" class="form-control col-lg-6" required></div>';

    $('#event').html(string);
    $('#clear').html('')
    $('#eventname').html(string1);
    $('#eventdate').html(string2);
    $('#eventtime').html(string3);
    $('#eventvenue').html(string4);
    $('#eventsetlist').html('');
    $('#eventtop').html('');
    $('#fetch').html('<input type="hidden" name="event_type" value="Rehearsal">');
   }
   function eventtype2(str){

    var string = 'Appointment <span class="caret"></span>';

    var string1 ='<label class="control-label col-lg-4">Event Name</label><div class="col-lg-8"><input type="text" name="event_name" class="form-control col-lg-6" required></div>';
    var string2 ='<label class="control-label col-lg-4">Date</label><div class="col-lg-8"><input type="date" name="event_date" class="form-control col-lg-6" required></div>';
    var string3 ='<label class="control-label col-lg-4">Time</label><div class="col-lg-8"><input type="time" name="event_time" class="form-control col-lg-6" required></div>';
    var string4 ='<label class="control-label col-lg-4">Venue</label><div class="col-lg-8"><input type="text" name="event_venue" class="form-control col-lg-6" required></div>';

    $('#event').html(string);
    $('#clear').html('')
    $('#eventname').html(string1);
    $('#eventdate').html(string2);
    $('#eventtime').html(string3);
    $('#eventvenue').html(string4);
    $('#eventsetlist').html('');
    $('#eventtop').html('');
    $('#fetch').html('<input type="hidden" name="event_type" value="Appointment">');
   }
   function eventtype3(str){

    var string = 'Others <span class="caret"></span>';

    var string1 ='<label class="control-label col-lg-4">Event Name</label><div class="col-lg-8"><input type="text" name="event_name" class="form-control col-lg-6" required></div>';
    var string2 ='<label class="control-label col-lg-4">Date</label><div class="col-lg-8"><input type="date" name="event_date" class="form-control col-lg-6" required></div>';
    var string3 ='<label class="control-label col-lg-4">Time</label><div class="col-lg-8"><input type="time" name="event_time" class="form-control col-lg-6" required></div>';
    var string4 ='<label class="control-label col-lg-4">Venue</label><div class="col-lg-8"><input type="text" name="event_venue" class="form-control col-lg-6" required></div>';

    $('#event').html(string);
    $('#clear').html('')
    $('#eventname').html(string1);
    $('#eventdate').html(string2);
    $('#eventtime').html(string3);
    $('#eventvenue').html(string4);
    $('#eventsetlist').html('');
    $('#eventtop').html('');
    $('#fetch').html('<input type="hidden" name="event_type" value="Others">');
   }

 function delEvent(id){

    var url = '{{url('events/delEvent')}}';
    if (confirm("Are you sure to delete this event?")){        
          $.get(url,{id:id}, function(data){
              window.location.reload();         
          });  
            
        }
        
     else {
        
    }


}


</script>               
@endsection

