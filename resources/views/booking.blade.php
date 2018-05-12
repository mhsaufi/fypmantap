@extends('layouts.app4')

@section('content1')
	<div class="main-bar">
                                <h3>
              <i class="fa fa-book"></i>&nbsp;
           Booking List
          </h3>
</div>
@endsection

@section('content2')
<div id="content">
	<div class="outer">
		<div class="inner bg-light lter">
			<div class="box">
				<div class="row">
    <div class="col-xs-1">
        <p style="white-space: normal;"></p>
    </div>
</div>
<!-- Trigger the modal with a button -->
<div>
<button type="button" class="btn btn-metis-5" data-toggle="modal" data-target="#mModal"><i class="fa fa-filter"></i>&nbsp;Filter</button>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Booking Form</h4>
      </div>
      <div class="modal-body">
       <header>
            <h5>Fill In New Booking Details <i style="color: red"> **(Required) </i></h5>
        </header>
            <div id="collapse3" class="body">
                <form action="#" class="form-horizontal" id="inline-validate">
                    <div class="form-group">
                        <label class="control-label col-lg-4">Event Name</label>

                        <div class="col-lg-8">
                            <input type="text" id="required" name="required" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Date</label>

                        <div class="col-lg-8">
                            <input type="date" id="date" name="date" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Time</label>

                        <div class="col-lg-8">
                            <input type="time" id="time" name="time" class="form-control col-lg-6">
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="control-label col-lg-4">Venue</label>

                        <div class="col-lg-8">
                            <input type="Venue" id="Venue" name="Venue" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Select Setlist</label>

                         <div class="col-lg-8">
                             <select class="form-control">
                                    <option>Traditional</option>
                                     <option>Rock</option>
                             </select>
                         </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Description</label>

                        <div class="col-lg-8">
                            <textarea type="text" rows="10" id="description" name="description" class="form-control col-lg-6"></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" value="Validate" class="btn btn-primary">
                    </div>
                </form>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>
 <div class="col-lg-6"><div class="box">
            <header>
                <h5>Bookings</h5>
            </header> 
        <div class="body clearfix">
            @foreach($bookings as $booking)
            <blockquote>
            <p>{{ $booking -> event_name }}</p>
            </blockquote>
            @endforeach
        </div>
    </div>
</div> 
</div>

			</div>
		</div>
	</div>
</div>				
@endsection