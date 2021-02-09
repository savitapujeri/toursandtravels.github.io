
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right:16px;
    left: px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: firebrick;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<body>

<button class="open-button" onclick="openForm()">tourestravel@gmail.com</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

   
		
		 
<input type="submit" name="submit" class ="btn btn-primary"
	        href="display.php"  value="login now"> 
		
   
		 
		 
    </form> 
		
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
		 		
<?php
include 'cont.php';

       if(isset($_POST['submit'])) {
	  
	
	$email =  $_POST['email'];
	$pass =  $_POST['pass'];
  
	$cpassword = $_POST['cpassword'];
		   
		  
		
		   $email_search = " select *from ragist where email = '$email' ";
		   $query = mysqli_query($con, $email_search);
	
		   $email_count = mysqli_num_rows($query);
		 
		  
	if( $email_count){
		
		$email_pass= mysqli_fetch_assoc($query);
		$db_pass = $email_pass['pass'];
		
		//$_SESSION['name'] = $email_pass['name'];
		
		$pass_decode = password_verify($pass, $db_pass);

			if($pass_decode){
				echo "login successful";
                header('location.home.php')
				?>

						<script> location.replace("home1.php");</script>

                <?php
						}else {

							echo "password incorrect";


						   }
         }else{
		
		   echo "invalid EMAIL";
	
	   }
	  
	 }

?>

</body>
</html>
