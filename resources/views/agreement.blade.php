@extends('layouts.app4')

@section('content1')
	<div class="main-bar">
                                <h3>
              <i class="fa fa-handshake-o"></i>&nbsp;
           Agreement List
          </h3>
</div>
@endsection

@section('content2')
<div id="content">
	<div class="outer">
		<div class="inner bg-light lter">
			<div class="box">
				<div class="row">
    <!-- .col-lg-6 -->
    <div class="col-lg-12">
        <div class="box">
            <div id="optionalTable" class="body collapse in">
                <table class="table responsive-table">
                    <thead>
                        <tr>
                            <th>Agreement ID</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Type of Performances</th>
                            <th>Setlist</th>
                            <th>Location</th>
                            <th>Fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agreements as $agree)
                        <tr>
                            <td>{{ $agree -> agreement_id}}</td>
                            <td>{{ $agree -> agree_date}}</td>
                            <td>{{ $agree -> agree_time}}</td> 
                            <td><span class="label label-success">{{ $agree -> status}}</span></td>  
                            <td>{{ $agree -> TOP}}</td>
                            <td>{{ $agree -> setlist_name}}</td>
                            <td>{{ $agree -> location}}</td>
                            <td>RM {{ $agree -> fee}}</td>
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
@endsection