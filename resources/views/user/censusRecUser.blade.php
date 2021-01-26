<!DOCTYPE html>
<html>
<head>
	<title>Verified Record User </title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
	<div style="background: linear-gradient(to bottom, #0099FF, #0099FF); border: 1px solid black;"><img src="Logo.png" style="border-radius:5px; margin-top:20px; margin-bottom:20px; margin-left:20px;"></div>

    <nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background: linear-gradient(to bottom, #0099FF, #0099FF);">
          <!-- Toggler/collapsibe Button -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>

	  <!-- Navbar links -->
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="addRecUser">Add Record</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="censusRecUser">Verified Census Record</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="unverifiedUser">Unverified Census Record</a>
	      </li>
	    </ul>
	  </div>
	</nav>
    <div>
    <h3>Verified Data</h3>
    <form action="searchVerified" method='GET'>
        <input type="text" name='searchVerified' placeholder="Search Record">
        <input type="submit" name='searchVerified'>
    </form>
</body>
</html>