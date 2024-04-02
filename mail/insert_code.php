<?php
include 'config_file.php';

	$name=$_POST['name'];
	$to_mail=$_POST['to_mail'];
    $title=$_POST['title'];
	$content=$_POST['content'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	

	 if (filter_var($to_mail, FILTER_VALIDATE_EMAIL))
		  {
  
		 
	  $sql="INSERT INTO email VALUES(null,'$name','$to_mail','$title','$content','$date','$time')";
	   
         $result=mysqli_query($con,$sql); 
		 
		   if($result)
			{
				echo '<script type ="text/JavaScript">';  
				echo "Inserted Successfully!"; 				
				echo '</script>'; 
				 header('Location:http://localhost/project/mail/index_form.php');
			}
			else
			{
				echo '<script type ="text/JavaScript">'; 
              echo "try again!<br>enter correct values.";
			  echo '</script>'; 
			}
		 
	
 }
 else {
	
	echo $to_mail . ' is NOT a valid email address.';
 }





?>