<?php
include_once('head.php');
?>

<div style="background: url('imgs/logb.jpg') no-repeat;
	    background-size: cover;">
<div class="container" style="width:400px;height: 500px;">
<div class="card">
<img src="imgs/login.jpg" class="card-img-top">
<div class="card-body">
<form class="form-group" action="func.php" method="POST">
<label>Username:</label>
<input type="text" name="user" class="form-control" placeholder="enter your name"><br>
<label>Password:</label>
<input type="password" name="pass" class="form-control" placeholder="enter your Password"><br>
<input type="submit" name="login" class="btn btn-primary">
</form>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php
include_once('footer.php');
?>