<!DOCTYPE html>
<html>
<head>
	<title>saja saja</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>

<!-- <form> -->
	<input id="satu" type="text" name="ggwp">
	<input id="dua" type="text" name="email">
	<input id="tiga" type="password" name="password">

	<button onclick="test()">Submit</button>
<!-- </form> -->
	<script>
		function test(){
			var gg = $('#satu').val();
			var wp = $('#dua').val();
			var hf = $('#tiga').val();
 
			var url = '{{ url('ggwp2') }}';

			$.post(url,{name:gg,email:wp,password:hf},function(data){
				alert(data);
			});

		}
	</script>
</body>
</html> 

3 parameter, url, data, function.