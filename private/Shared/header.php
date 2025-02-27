<!DOCTYPE html>
<html lang="en">
<!--<?php# include(PROJECT_PATH . "/stylesheet/styles2.php") ?>-->
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="" >
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<style>
			
			/* Zoom Make Big */
			
			body {
				zoom: 1.5; 
				-moz-transform: scale(1.5); 
				-moz-transform-origin: 0 0;
			}

			.align{
				padding: 10px 15px 10px 15px;
				display: flex;
				flex-direction: row;
				justify-content: space-evenly;
				}
			.align_single{
				padding: 10px 15px 10px 15px;
				display: flex;
				flex-direction: column;
				align-items: center;
			}
			.align_single > .Space{
				padding: 10px 15px 10px 15px;
			}
			.align_footer{
				display: flex;
				flex-direction: column;
				align-items: center;
			}
			.align_footer2{
				display: flex;
				flex-direction: row;
				align-items: center;
				justify-content: space-evenly;
			}
			/* Size Change Single Card (649) */
       		@media (max-width: 649px){
				.Hide_Br, .Hide_Br_2{
						display: none;
				}
			}
			/* Size Change Double Card (949) */
       		@media (min-width: 650px) and (max-width: 949px){
				.Hide_Br, .Hide_Br_3{
						display: none;
				}
			}
			
			/* Size Change Triple Card (>949) */
       		@media (min-width: 950px){
				.Hide_Br_2, .Hide_Br_3{
						display: none;
				}
			}
			/* Size Change Triple Card (>949) */
			@media (min-width: 1285px){
				.brpl, .brpl3{
						display: none;
				}
			}
			/* Size Change Triple Card (>949) */
			@media (min-width: 690px) and (max-width: 1284px){
				.brpl2, .brpl3{
						display: none;
				}
			}
			/* Size Change Triple Card (>949) */
			@media (max-width: 689px){
				.brpl, .brpl2, .brpl4{
						display: none;
				}
			}
            /*Styles Part2*/
				.align2{
					display: flex;
					align-items: center;
					justify-content: space-evenly;
					height: 100%;
					width: 80%;
					margin: auto;
				}
				.align2 ul{
					display: flex;
					justify-content: space-evenly;
				}
				.align3 td{
					text-align: center;
				}
				.align3 th{
					text-align: left;
				}
				.align4{
					display: flex;
					justify-content: flex-end;
				}
				h1{
					text-align: center;
				}
				h2{
					text-align: center;
				}
				.align5{
					text-align: center;
				}
				.align6{
					display: flex;
					flex-direction: column;
					align-items: center;
				}
					
			.Photos{
				text-align: left;
				padding-right: 10px;
			}
			
			.Name_Staff{
				text-align: left;
			}
			
			.Table_Margin{
				margin-left: auto;
				margin-right: auto;
			}
			
			.Make_Text_Show{
				color:black
			}
			.card-body{
				background-color: #7dc0db;
			}

			/*Id's*/
			
			#Rosmini_Logo{
				width: 85px;
				height: auto;
			}
			#Rosmini_Logo2{
				width: 20%;
				height: auto;
				display: flex;
				align-items: center;
			}
			
			#Div_Modal_Button_Container{
				display: flex;
				justify-content: flex-end;
				flex-direction: column;
				align-items: flex-start;
			}
			
			#Bottom_Text{
				padding-left: 10%;
				text-align: center;
				padding-right: 10%;
			}
			
			
		</style>
		<!--Link To Css-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<!--<link rel="stylesheet" href="<?php# echo WWW_ROOT . "/stylesheet/styles.css";?>">-->
		
				<style>
			:root {
				--bs-body-bg:  #87CEEB;
				--bs-light-rgb: #5ca5bf;
			}
		</style>
		<title><?php echo $title?></title>
	</head>
	
	<body onload="myFunction()">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script src="Javascript.js"></script>
		
		
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
	<img src="<?php echo WWW_ROOT . "/images/rosmini_logo/logo-300x259.png";?>" alt="Rosmini Logo" id="Rosmini_Logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" id="Home" aria-current="page" href="<?php echo WWW_ROOT . "/home//index.php";?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="Staff" href="<?php echo WWW_ROOT . "/home/staff/index.php";?>">Staff</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" id="Sports" href="<?php echo WWW_ROOT . "/home/sports/index.php";?>">Sports</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" id="Contacts" href="<?php echo WWW_ROOT . "/home/contacts/index.php";?>">Contact Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" id="Student_Support" href="<?php echo WWW_ROOT . "/home/student_support/index.php";?>">Student Support</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" id="Learning_Areas" href="<?php echo WWW_ROOT . "/home/learning_areas/index.php";?>">Learning Areas</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" id="News" href="<?php echo WWW_ROOT . "/home/news/index.php";?>">News</a>
        </li>
      </ul>
	  <!-- Trigger/Open The Modal -->
	  <div id="Div_Modal_Button_Container">
		  <button id="myBtn" class="align4">Staff Login</button>
	  </div>	
    </div>
  </div>
</nav>
		<!-- The Modal -->
		<div id="myModal" class="modal">
 			<!-- Modal content -->
  			<div class="modal-content">
    			<span class="close">&times;</span>
    			<form action='<?php echo WWW_ROOT . "/home/staff/staff_login/login.php";?>' method='POST'> 
					<span class='label'>Username</span>
					<input type='text' name='username' placeholder='Enter your username' class='field'><br>
					<span class='label'>Password</span>
					<input class="Inputpass field" type='password' name='password' placeholder='Enter your password'><br>
					<span class='label'></span><input type='submit' value='Login'><br>
				</form>
  			</div>
		</div>
<!-- Modal Script -->
		<script>
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the button that opens the modal
			var btn = document.getElementById("myBtn");

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on the button, open the modal
			btn.onclick = function() {
  				modal.style.display = "block";
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
 				modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
				modal.style.display = "none";
				}
			}
</script>
		
<script>
	// Show Page You On
function myFunction() {
	if ("<?php echo $title ;?>"=="Staffpage" || "<?php echo $title ;?>"=="True Staffpage"){
   var element = document.getElementById("Staff");
   element.classList.add("active");
	}
	else if ("<?php echo $title ;?>"=="Home"){
   var element = document.getElementById("Home");
   element.classList.add("active");
	}	
   else if ("<?php echo $title ;?>"=="Sportpage"){
   var element = document.getElementById("Sports");
   element.classList.add("active");
	}
	else if ("<?php echo $title ;?>"=="Contact Us"){
   var element = document.getElementById("Contacts");
   element.classList.add("active");
	}
	else if ("<?php echo $title ;?>"=="Student Support"){
   var element = document.getElementById("Student_Support");
   element.classList.add("active");
	}
	else if ("<?php echo $title ;?>"=="Learning Areas"){
   var element = document.getElementById("Learning_Areas");
   element.classList.add("active");
	}
	else if ("<?php echo $title ;?>"=="News"){
   var element = document.getElementById("News");
   element.classList.add("active");
	}
}
</script>