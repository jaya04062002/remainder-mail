<?php  

include 'config_file.php'; 
$no=$_GET['no'];
$query="delete from Email where no='$no'";
$data=mysqli_query($con,$query);
if($data)
	{ 

      echo '<script type ="text/JavaScript">';  
				echo 'alert("Data deleted Successfully!")'; 			
				echo '</script>'; 
        header('Location:http://localhost/project/mail/view.php');
	}

?>