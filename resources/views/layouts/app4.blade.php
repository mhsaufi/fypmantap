<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Muger</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="assets/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">


    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

</head>
  <body class="  ">
      <div class="bg-dark dk" id="wrap">
          <div id="top">
              <!-- .navbar -->
              <nav class="navbar navbar-inverse navbar-static-top">
                  <div class="container-fluid">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <header class="navbar-header">
            
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.html" class="navbar-brand"><img src="assets/img/muger.png" height="50" width="150" alt=""></a>
            
                    </header>

                      <div class="topnav">
                          <div class="btn-group">
                              <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                 class="btn btn-default btn-sm" id="toggleFullScreen">
                                  <i class="glyphicon glyphicon-fullscreen"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                                 class="btn btn-default btn-sm">
                                  <i class="fa fa-envelope"></i>
                                  <span class="label label-warning">5</span>
                              </a>
                              <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                                 class="btn btn-default btn-sm">
                                  <i class="fa fa-comments"></i>
                                  <span class="label label-danger">4</span>
                              </a>
                              <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                 class="btn btn-default btn-sm"
                                 href="#helpModal">
                                  <i class="fa fa-question"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                 class="btn btn-metis-1 btn-sm">
                                  <i class="fa fa-power-off"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                                 class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                                  <i class="fa fa-bars"></i>
                              </a>
                              <a href="#right" data-toggle="onoffcanvas" class="btn btn-default btn-sm" aria-expanded="false">
                                  <span class="fa fa-fw fa-comment"></span>
                              </a>
                          </div>
              
                      </div>

                      <div class="collapse navbar-collapse navbar-ex1-collapse">
              
                          <!-- .nav -->
                          <ul class="nav navbar-nav">
                              <li><a href="">Dashboard</a></li>
                              <li><a href="">Account Settings</a></li>
                           </ul>

                      </div>

                  </div>
                  <!-- /.container-fluid -->
              </nav>
              <!-- /.navbar -->
              <header class="head">
                      <div class="search-bar">
                          <form class="main-search" action="">
                              <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Live Search ...">
                                  <span class="input-group-btn">
                                      <button class="btn btn-primary btn-sm text-muted" type="button">
                                          <i class="fa fa-search"></i>
                                      </button>
                                  </span>
                              </div>
                          </form>
                          <!-- /.main-search -->                                </div>
                      <!-- /.search-bar -->
                      @yield('content1')
                  <!-- /.main-bar -->
              </header>
                  <!-- /.head -->
          </div>
          <!-- /#top -->
              <div id="left">
                  <div class="media user-media bg-dark dker">
                      <div class="user-media-toggleHover">
                          <span class="fa fa-user"></span>
                      </div>
                      <div class="user-wrapper bg-dark">
                          <a class="user-link" href="">
                              <img class="media-object img-thumbnail user-img" height="64" width="64" alt="User Picture" src="assets/img/aiman.png">
                          </a>
                  
                          <div class="media-body">
                              <h5 class="media-heading">{!! Auth::user()->name !!}</h5>
                              <ul class="list-unstyled user-info">
                                  <li><a href="">Musician</a></li>
                                  <li>Last Access : <br>
                                      <small><i class="fa fa-calendar"></i>&nbsp;
                                        <?php

                                          $date = date_create(Auth::user()->updated_at);
                                          echo $date->format('D, d M h:iA ');

                                         ?>
                                      </small>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <!-- #menu -->
                  <ul id="menu" class="bg-blue dker">
                      <li class="nav-header">Menu</li>
                      <li class="nav-divider"></li>
                      <li class="">
                        <a href="{{ ('home') }}">
                          <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <i class="fa fa-calendar"></i>
                          <span class="link-title">Scheduling</span><span class="fa arrow">
                          </span>
                          </a>
                              <ul class="collapse">
                                <li>
                                  <a href="{{ ('events') }}">
                                  <span class="link-title">Manage Scheduling</span></a>
                                </li>
                                <li>
                                  <a href="{{ ('setlist') }}">
                                  <span class="link-title">Manage Setlist</span></a>
                                </li>
                              </ul>
                      </li>
                      <li>
                        <a href="">
                          <i class="fa fa-book"></i>
                          <span class="link-title">Booking</span><span class="fa arrow">
                          </span>
                          </a>
                              <ul class="collapse">
                                <li>
                                  <a href="{{ ('booking') }}">
                                  <span class="link-title">Booking List</span></a>
                                </li>
                                <li>
                                  <a href="{{ ('agreement') }}">
                                  <span class="link-title">Manage Agreement</span></a>
                                </li>
                                 <li>
                                  <a href="{{ ('invoices') }}">
                                  <span class="link-title">Manage Invoices</span></a>
                                </li>
                              </ul>
                      </li>
                      <li class="">
                        <a href="{{ ('reporting') }}">
                          <i class="fa fa-bar-chart" aria-hidden="true"></i>
                          <span class="link-title">Reporting</span>
                        </a>
                      </li>
                      <li class="nav-divider"></li>
                      <li class="">
                          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" aria-hidden="true">
                        			<i class="fa fa-sign-out" aria-hidden="true"> </i>
                            <span class="link-title">
                    			Logout
                    		</span>		
                        	 </a>                   
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
   						 	          </form>
                      </li>
                  </ul>
                  <!-- /#menu -->
              </div>

              <!-- /#left -->
@yield('content2')

</div>
      <!-- /#wrap -->
      
      <!-- /#footer -->
      <footer class="Footer bg-dark dker">
          <p>2018 &copy; MUGER</p>
      </footer>
      <!-- #helpModal -->
      <div id="helpModal" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                      <p>
                          
                      </p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- /#helpModal -->
      <!--jQuery -->
      <script src="assets/lib/jquery/jquery.js"></script>

              <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
              <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
              <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
              <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
              <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
              <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
              <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
              <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

      <!--Bootstrap -->
      <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
      <!-- MetisMenu -->
      <script src="assets/lib/metismenu/metisMenu.js"></script>
      <!-- onoffcanvas -->
      <script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>
      <!-- Screenfull -->
      <script src="assets/lib/screenfull/screenfull.js"></script>


      <!-- Metis core scripts -->
      <script src="assets/js/core.js"></script>
      <!-- Metis demo scripts -->
      <script src="assets/js/app.js"></script>

      <script src="js/jqBootstrapValidation.js"></script>
        
          <script>
              $(function() {
                Metis.dashboard();
              });
          </script>

          

      <script src="assets/js/style-switcher.js"></script>
  </body>
</html>

