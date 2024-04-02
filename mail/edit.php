<?php
include_once 'config_file.php';

if(isset($_GET['no']))
{

$no=$_GET['no'];
$result=mysqli_query($con,"SELECT*FROM email where no='$no'");

$numrow=mysqli_num_rows($result);

if($numrow==1)
 { 
    $row=mysqli_fetch_assoc($result);
 ?>
	
<!DOCTYPE html>
<html>
  <center>
<head>
<title> edit remainder</title>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" href="style2.css">
<style>
	.container
		{
			width: 100%;
			background-width: 80%;
			height:200vh;
			background: #001660;
			display: flex;
			align-items: center;
			justify-content: center;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
			form{
			background: #ccff99;
			display: flex;
			flex-direction: column;
			padding: 2vw 4vw;
			width: 200%;
			max-width:600px;
			max-height:160vh;
			border-radius: 10px;
			
		}
	
 h2{
			color: #000000;
			font-size: 30px;
			font-weight:600;
			margin-bottom: 20px;	
           font-family: Georgia;			
	}
</style>
</head>

<body>
 <div class="container">	
 
   <form  action="update.php" method="post">
    <h2>Edit and Update User Details</h2>
	<br>
 
       <input  type="hidden"  name="No" value="<?php echo $row['No'];?>">
	  <div class="input-row">
	 <label> Name:</label>
      <input value="<?php echo $row['Name'];?>"  type="text"  name="Name">
	  </div>
	  
	 <div class="input-row">
   <label> To_email:  <label>
      <input  type="to_mail" name="To_Mail" value="<?php echo $row['To_Mail'];?>" > 
	</div>
	
	<div class="input-row">
	   <label> Title: <label>
     <input value="<?php echo $row['Title'];?>"  type="text"  name="Title"> 
</div>

<div class="input-row">
   <label> Content:  <label>
      <input value="<?php echo $row['Content'];?>"  type="text"  name="Content">
	</div>
	
	<div class="input-row">
   <label> Remainder Date: <label> 
     <input value="<?php echo $row['Date'];?>"  type="date"  name="Date">
	 </div>
	 
	 <div class="input-row">
	  <label> Time: <label>
    <input value="<?php echo $row['Time'];?>"  type="time"  name="Time"> 
	 </div>
	 
	  <button  type="submit"> update </button>

	  <div class="input-row">
	   <button ><a href="view.php">Back</a></button>
</div>
	 </form>

</div>	
</body>
  </center>
</html>


<?php
   }
	else
	{
		echo "not found";
	}

 }
else
{
	echo "not allowed";
}

?>



