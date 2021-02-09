<!DOCTYPE html>
<html>
    <head>
    <script src="https://kit.fontawesome.com/a076d05399.js">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-----hello----->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>



<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>			
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
        
        
        
        
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		
		
    </head>
    <body>
    <div class="text-success">
        
        <h2 class="p-5">let's talk</h2>
        <div class="container">
            <div class="form-group" style="background-color:lightblue">
                       <form  method="POST"   action="">
                           <label>your-Name:</label>
				<input type="text" name="name"  id="your-name"  placeholder=" your-Name"  class="form-control"  required ><br>
                   
                           <label>your-email:</label>
				<input type="email" name="email" id="your-email"  placeholder="Email"  class="form-control" required><br>
                            
                           <label>your-password:</label>
				<input type="password" name="password" id="your-password"  placeholder="password"  class="form-control" required><br>
                           
                     <label>phone no:</label>
                    <input type="number" name="phone" value=""  placeholder="Phone" id="phone" class="form-control"><br><br>
                 <label>messages:</label>
				<textarea name="message" placeholder="Enter Your Message Min 50 Characters" minlength="50" required rows="5" cols="10" id="Message" class="form-control"></textarea><br><br>
                <input type="submit" name="submit" value="submit" id="submit-btn" class="btn btn-success"> 
				</form>

        </div>
			
 
        </div></div>
      

    </body>
    
    
    
</html>

<?php

include "cont.php";

if(isset( $_POST['submit'])){
    $name =mysqli_real_escape_string($con, $_POST['name']);
      $email =mysqli_real_escape_string($con, $_POST['email']);
      $password = mysqli_real_escape_string($con, $_POST['password']);
      $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $message =mysqli_real_escape_string($con, $_POST['message']);



	
	$insertquery = "insert into travels ( name, email, password, phone, message) values ('$name','$email', '$password', '$phone', '$message') ";
		   
	
$res = mysqli_query($con, $insertquery);
	
	if($res){
		
?>
<script>

alert("data insert properly");
	

</script>
<?php
	}else{
?>	

<script>
alert("data  not insert ");

</script>
	

<?php
	
	
}  

}

		
	?>	








