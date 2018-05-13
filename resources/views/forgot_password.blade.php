 <!doctype HTML> 
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes--> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/app.css" >
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="assets/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">

</head>

<body class="register" style="background-image: url('assets/img/pattern/irongrip.png');">

    <style type="text/css">
        .form-register {
            position: absolute;
            margin-left: 34%;
            margin-right: 50%;
            margin-top: 5%;
            top: 0;
            bottom: 1;
            width: 30%;
            border-radius: 2%;
            box-shadow: 1px 1px #888888;
            background: white;
        }
    </style>

    <div class="form-register">
        <div class="text-center">
            <img src="assets/img/muger.png" alt="Muger Logo" height="100" width="150" id="logo" style="cursor: pointer;">
        
        <hr>

        <div class="tab-content">
            <div id="register" class="tab-pane active">
                <!-- <form method="POST" action="{{ route('register') }}"> -->
                    @csrf

                    <div class="row">
                    <label class="text-center">Email   
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    </label>
                    <p id="errorMsg" style="color: red;opacity: 0.6;"></p>
                    </div>
                    <br>
                    <div class="row">
                        <button class="btn btn-primary" id="sendBtn">Send New Password</button> 
                    </div>      
                 <!-- </form>    -->
            </div>
            <div class="text-center">
                <ul class="list-inline">
                    <li><a class="btn btn-link" href="{{ route('register') }}">Register</a></li>
                    <li><a class="btn btn-link" href="{{ route('login') }}">Log In</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--jQuery -->
<script src="assets/lib/jquery/jquery.js"></script>

<!--Bootstrap -->
<script src="assets/lib/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
    
    $('#logo').click(function(){

        window.location.replace('{{ url('/') }}');

    });

    $('#sendBtn').click(function(){

        var email = $('#email').val();

        var status = isEmail(email);

        if(status == false){

            alert("WRONG");

        }

        if(status == true){

            var url = "{{ url('/checkemail') }}";

            $.get(url + "?email=" + email, function(data){

                alert(data);

                if(data == 1){

                }

                if(data == 0){
                    $('#errorMsg').val("This email is not registered");
                }

            });

        }

    });

    function isEmail(email) {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
    }

</script>
</body>

</html>
