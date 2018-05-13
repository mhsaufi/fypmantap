@extends('layouts.app4')

@section('content1')
	<div class="main-bar">
                                <h3>
              <i class="fa fa-list"></i>&nbsp;
           Setlist
          </h3>
</div>

@endsection

@section('content2')
<div id="content">
	<div class="outer">
		<div class="inner bg-light lter">
			<div class="box">
				<div class="row">

<!-- .col-lg-4  tunjuk list lagu-->
<div class="col-lg-4">

        <div class="box">
            <header>
                <h5>Catalogs</h5>
            </header>
            <div id="defaultTable" class="body collapse in">
                <table class="table responsive-table">
                    <thead>
                        <tr>
                            <th>Song List</th>
                            <th>Time</th>
                            <th><i class="fa fa-check" style="color: green"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($songs as $song)
                        <tr>
                            <td>{{ $song -> song_title}}</td>
                            <td>{{ $song -> duration}}</td>
                            <td><i class="fa fa-check" style="color: green"></i></td>
                        </tr>
                        @endforeach
                    </tbody> 
                </table>
            </div>
        </div>  
        <div>
            <button class="btn btn-primary btn-sm btn-grad" data-toggle="modal" data-target="#SongModal"><i>Add Song to Catalog</i></button>
        </div>
        <!-- Modal -->
<div id="SongModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Add Song to Catalog</h4></center>
      </div>
        <div class="modal-body">
            <div id="collapse3" class="body">
                <form method="POST" action="setlist/song" class="form-horizontal" id="inline-create song">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-lg-4">Song Title</label>
                        <div class="col-lg-8">
                            <input type="text" name="song_title" class="form-control col-lg-6" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Duration</label>
                            <div class="col-lg-8">
                                <input type="text" name="duration" class="form-control col-lg-6" placeholder="HH:MM:SS" pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}" id="24h"/ required>
                            </div>
                    </div>
                    <div class="modal-footer">  
                        <div class="form-actions">
                            <div class="col-lg-4">
                                <input type="submit" name="Create Song" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   </div>
</div>
</div> 

<!-- tunjuk list setlist -->

<div class="col-lg-6">
    <div class="box">
        <header>
            <h5>Setlist</h5>
        </header>
         <div id="defaultTable" class="body collapse in">
            <table class="table responsive-table">
                <thead>
                    <tr>
                        <th class="dropdown">
                            <a class="btn btn-default" data-toggle="dropdown">
                                Select Setlist
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                 {{ csrf_field() }}
                                @foreach( $setlists as $set )
                                    <li><a href="#" onClick="getsongtitle({{ $set -> id}})"> {{ $set -> set_title }} </a></li>
                                @endforeach
                             </ul>    
                        </th>  
                        <th>
                            <div>
            <button class="btn btn-primary btn-sm btn-grad" data-toggle="modal" data-target="#SetlistModal"><i>Create New Setlist</i></button>
        </div>
                        </th>  
                    </tr>
                </thead> 

                <tbody>                   
                       <tr>
                         <td><h3><span id="settitle"></span></h3></td>
                         <td id="addSong"></td>
                       </tr>

                       <tr>
                           <td>
                                <ul id="songlist"></ul>
                           </td>
                       </tr>
                </tbody>
            </table>
        </div>    
    </div>

    <div id="SetlistModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Create New Setlist</h4></center>
      </div>
        <div class="modal-body">
            <div id="collapse3" class="body">
                <form method="POST" action="setlist/createsetlist" class="form-horizontal" id="inline-create song">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-lg-4">Setlist Title</label>
                        <div class="col-lg-8">
                            <input type="text" name="set_title" class="form-control col-lg-6" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Price (RM)</label>
                            <div class="col-lg-8">
                                <input type="text" name="price" class="form-control col-lg-6" required>
                            </div>
                    </div>
                    <div class="modal-footer">  
                        <div class="form-actions">
                            <div class="col-lg-4">
                                <input type="submit" name="Create Setlist" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   </div>
</div> 
</div>



                </div> <!-- row -->
			</div> <!-- box -->
		</div> <!-- inner bg-light -->
	</div> <!-- outer -->
</div> <!-- content -->

<script type="text/javascript">
    function getsongtitle(id)
    {
        var url = '{{url('viewsong')}}';

        $.get(url,{id:id}, function(data){

            var songtitle = data[0];
            var settitle = data[1];

            var string = "";

            $.each(songtitle, function( index, value ) {

                string += "<li>"+value.song_title+"</li>";
                
            });

          
            $('#addSong').html('<h3><ul class="fa fa-plus"></ul><ul class="fa fa-trash"></ul></h3>');
            $('#settitle').html(settitle[0].set_title);
            $('#songlist').html(string);
            $('#delButton').html(delBut);
        });
    }
</script>
@endsection