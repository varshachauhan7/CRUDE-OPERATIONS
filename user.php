<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql= "INSERT INTO `can-do-it` (name,email,mobile,password)
  values('$name','$email',' $mobile','$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }

}
?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>will</title>
  </head>
  <body>
    <div class="container my-5" >
    <form method="post">
  <div class="form-group">
    <label for>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off"> 
  </div>
  <div class="form-group">
    <label for>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name= "email" autocomplete="off"> 
  </div>
  <div class="form-group"> 
    <label for>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off"> 
  </div>
  <div class="form-group">
    <label for>Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off"> 
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
  <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>