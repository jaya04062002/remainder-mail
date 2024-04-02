<?php
include 'config_file.php';


	$No=$_POST['No'];
	$Name=$_POST['Name'];
	$To_Mail=$_POST['To_Mail'];
	$Title=$_POST['Title'];
	$Content=$_POST['Content'];
	$Date=$_POST['Date'];
	$Time=$_POST['Time'];	
	
	 if($_POST['No']){
		  $query = "UPDATE email SET Name='$Name',To_Mail='$To_Mail',Title='$Title',Content='$Content',Date='$Date',Time='$Time' WHERE No='$No'"; 
	 }
    $result = mysqli_query($con, $query);
 
    if($result) 
	{
 
               echo '<script type ="text/JavaScript">';  
				echo 'alert("Data updated Successfully!")'; 				
				echo '</script>'; 
				 header('Location:http://localhost/project/mail/view.php');
 
    } 
	else 
	{
  
		 echo '<script type ="text/JavaScript">';  
		 echo "Error! ";
		  echo '</script>'; 
    }
?>

