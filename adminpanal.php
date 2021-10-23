
<?php
include_once('admin_header.php');
?>

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-3" style="background-color: black;opacity: 1.5;">
	    <div class="list-group">
	     <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;&nbsp;Dashboard
        </a>
        <a href="patientdetails.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;&nbsp;View Appoinment
        </a>
        <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Patient
        </a>
        <a href="psyadd.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Add Psychologist
        </a>
        <a href="viewpsy.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;&nbsp;View Psycologyst
        </a>
        
	</div>
		</div>
	<div class="container col-sm-4 col-md-7 col-lg-4 mt-5">
	<h3>Calender</h3>
      <div class="card">
      	<h3 class="card-header" id="monthandyear">Month And Year</h3>
      	<table class="table table-bordered table-responsive.sm" id="calender">
      		<thead>
      			<tr>
      			<th>Sun</th>
      			<th>Mon</th>
      			<th>Thue</th>
      			<th>Wed</th>
      			<th>Thur</th>
      			<th>Fri</th>
      			<th>Sat</th>
      			</tr>
      		</thead>
      		<tbody id="calender.body"></tbody>
      	</table>
      	<div class="form-inline">
      		<button class="btn btn-outline-primary col-sm-4" onclick="previous()">Previous</button>
      		<button class="btn btn-outline-primary col-sm-4" onclick="next()">Next</button>
      	</div>
      </div>
	</div>
  <script type="text/javascript" src="calender.js"></script>
</div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<?php
include_once('footer.php');
?>