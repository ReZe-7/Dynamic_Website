<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>


<?php include 'menu.php' ?>
<div class="w-50 m-auto pb-4">
	<div class="py-5">
	<h2 class="text-center">Register Now</h2>
	</div>
 	<form action="userinfo.php" method="post">
 		<div class="form-group">
 			<label>Username</label>
 			<input type="text" name="user" autocomplete="off" class="form-control">
 		</div>
 		<div class="form-group">
 			<label>Email ID</label>
 			<input type="email" name="email" autocomplete="off" class="form-control">
 		</div>
 		<div class="form-group">
 			<label>semester</label>
 			<input type="text" name="semester" autocomplete="off" class="form-control">
 		</div>
 		<div class="form-group">
 			<label>Branch</label>
 			<input type="text" name="branch" autocomplete="off" class="form-control">
 		</div>
 		<div class="form-group">
 			<label>Mobile Number</label>
 			<input type="text" name="mobile" autocomplete="off" class="form-control">
 		</div>
 		<button type="submit" class="btn btn-primary">Submit</button>
 	</form>
 </div>
 <footer>
 	<p class="p-3 bg-dark text-white text-center">@pradeep(CSE 3rd sem)</p>
 </footer>
 </body>
</html>