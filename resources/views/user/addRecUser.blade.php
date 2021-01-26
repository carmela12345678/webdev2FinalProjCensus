<!DOCTYPE html>
<html>
<head>
	<title>User Add Record </title>
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
    <div style="background:#44CCFF; border: 1px solid black;">
    <h1>New Census Record</h1>
    </div>

    <div>
        <form action="new-rec-user" method='POST'>
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="number" name="age" placeholder="Age"><br>
        <input type="radio"  name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio"  name="single" value="male">
        <label for="male">Single</label><br>
        <input type="radio" name="married" value="female">
        <label for="female">Married</label><br>
        <input type="radio" name="widow" value="female">
        <label for="female">Widow</label><br>
        Date of Birth:
        <input type="date" name="dateOfBirthe">
        <input type="text" name="Educational" placeholder="Ediucational Attainment">
        <input type="number" name="sourceOfIncome" placeholder="Source of Income">
        <input type="text" name="add" placeholder="Address">
        <input type="submit" name="newRecSubmit" class="btn btn-primary">
        </form>
    </div>

</body>
</html>
