<?php
  include 'config_file.php';
 ?>
  

<!DOCTYPE html>
<html lang="en">
<center>
<head>
<title> remainder records </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<br>
<br>
<br>
<div>
  <h1>Email Reminder Records</h1>
  </div>
<link rel="stylesheet" href="style2.css">
<br>
	
    <style>
        body {
            
           background-color: #fff;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
table {
	border-collapse:collapse;
	width:85%;
	align: center;
	
    border: solid 2px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    border-radius: 20px;
    font: bold 15px Times New Roman, sans-serif;
  }

  th {
	  text-align:center;
    background-color: #DDEFEF;
    border: solid 1px #DDEEEE;
    color: #336B6B;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
  }
	
  table td {
    border: solid 1px #DDEEEE;
    color: #333;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
  }
	.btn{
	 background-color: #fff;  
	 color: green;
	padding: 5px  30px;
	text-decoration: none;

	}
	.btn:hover{
		background: darkgreen;
		color:#fff;
	}
	.btn1{
	 background-color: #fff;  
	 color: darkred;
	padding: 5px  30px;
	text-decoration: none;

	}
	.btn1:hover{
		background: darkred;
		color:#fff;
	}
		
        h1 {
            text-align: center;
            color: #000000;
			font-family: 'Times New Roman', sans-serif;
        }
     
    </style>

	</head>
	<body>
	<br>


	 
  <table  border="1px" cellspacing="0" cellpadding="10px" >
	<thead>
	   <tr>
		  <th> <b> No </b> </th>
		  <th> <b>  Name </b> </th>
		  <th> <b> To_Mail</th>
		  <th> <b> Title </b> </th>
		  <th> <b> Content </b>  </th>
		  <th> <b> Date </b> </th>
		 <th> <b> Time </b>  </th>
		  <th colspan="2"><b> Action </b> </th>
	   </tr>
	   
	</thead>
	
	<tbody>
	
	<?php  
	
	$query="SELECT*FROM email";
	$data=mysqli_query($con,$query);
	$result=mysqli_num_rows($data);
	$i=1;
	
	if($result)
	{
	   while($row=mysqli_fetch_array($data))
	   {
			  ?>
			  <tr id="<?php echo $row["No"]; ?>">
                <td><?php echo $i; ?></td>		                   
				<td> <?php echo $row['Name'];  ?></td>                     
				<td> <?php echo $row['To_Mail'];  ?></td>
				<td> <?php echo $row['Title'];  ?></td>
				<td> <?php echo $row['Content'];  ?></td>
				<td> <?php echo $row['Date'];  ?></td>
				<td> <?php echo $row['Time'];  ?></td>
				<td><a href= 'edit.php?no=<?php echo $row['No'];?>'class='btn'>Edit</a></td>	
				<td><a onclick="return confirm(' delete the form?')" href= "delete_code.php?no=<?php echo $row['No']; ?>"class='btn1'>Delete</a></td>
			</tr>
			
			<?php
		 $i++;
		 }
	   }
	
	else
	{

	  echo "<tr>"; 
		 echo   "<td> no record found </td>";
	  echo  "</tr>"; 
	 
	}
	?>
	
	</table>
	</body>
	
  </center>
 
</html>
