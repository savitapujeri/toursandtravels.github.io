
<html>
<head>
		
	
	</head>
<body>
	<h1>tables display data</h1>
	<div class="main-div">
	
		
		
	
	<div class="table-responsive p-5 ">
		<table>
		
<thead>
		<tr>
			<th>id</th>
			<th>name</th>
		
	
			<th>email</th>
			<th>password</th>
	        
			<th>phone no</th>
			<th> message</th>
			
			<th>operation</th>
		</tr>
		
			</thead>
			<tbody>
		<?php
 include 'cont.php';
 
				
  
$selectquery = "select *from  travels";

$query = mysqli_query($con, $selectquery);

$num = mysqli_num_rows($query);

$res = mysqli_fetch_array($query);


while ($res = mysqli_fetch_array($query)){

	
	?>
	
		<tr>
			<td><?php echo $res['id']; ?></td>
				   
					<td><?php echo $res['name']; ?> </td>
					<td><?php echo $res['email']; ?> </td>
					<td><?php echo $res['password']; ?></td>
					<td><?php echo $res['phone']; ?></td>
			<td><?php echo $res['message']; ?></td>
			
	
    <td>
		<a href="updates.php?id=<?php echo $res['id']; ?>"  data-toggle="tooltip" data-placement="bottom" title="UPDATE"> <i class="fa fa-edit"  aria-hidden="true"></i></a>
        </td>
    </tr>
			
	
<?php	
	
   }

?>
				
			</tbody>
		</table>
		</div>
	</div>
	
	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
	
	</body>

</html>
