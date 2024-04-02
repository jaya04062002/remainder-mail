 <!DOCTYPE html>
<html>
	<head>
	<title> send remainder</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 <link rel="stylesheet" href="style2.css">
	<style>

	.container
		{
			width: 100%;
			background-width: 80%;
			height:100vh;
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
			width: 250%;
			max-width:1000px;
			max-height:100vh;
			border-radius: 10px;
			
		}
 h2{
			color: #000000;
			font-size: 30px;
			font-weight:600;
			margin-bottom: 20px;	
           font-family: Georgia;			
	}
	table {
			align: center;
		width:85%;
		border: solid 3px #000000;
		border-collapse: collapse;
		border-radius: 20px  #000000;
		font: bold Times New Roman, sans-serif;
	  }

	  th {
		  text-align:center;
		background-color: #ccff99;
		border: solid 3px #000000;
		color: #336B6B;
		padding: 10px;
		text-shadow: 1px 1px 1px #fff;
	  }
	
		  table td 
		  {
			border: solid 3px #000000;
			color: #000000;
			padding: 10px;
			text-shadow: 1px 1px 1px #fff;
		  }
			
			.btn{
				 padding: 15px;
				 background: #ff5361;
				 color: #fff;
				 font-size: 18px;
				  border: 0;
				   outline: none;
				   cursor: pointer;	
				   width: 150px;
				   margin: 20px auto 0;
				    border-radius: 30px;
				   }
</style> 	 
</head>

	<body>
		
		<div class="container">

		<form method="post" action="">	
			<center>
		   <h2> Send Reminders</h2>
		  
			 <label><b>Reminder Date:</b></label>
			  <input type="date" name="date" id="date" required><br>
			  <input type="submit" name="search" value="search" class="btn">
			 
		<br>
		<br>
		<div class="input-row">
    <button><a href= "html.html">back</a></button>	
	</div>
		<table  border="2px" cellspacing="0" cellpadding="20px">
		   <tr>
			  <th> name </th>
			  <th> to_email</th>
			  <th> title </th>
			  <th> content </th>
			  <th> date</th>
			  <th> time</th>
		   </tr>
		
		<br>
		
		<?php  
		include 'config_file.php';

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;

		require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
		require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
		require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';
		
	if(isset($_POST['search']))
	{
	$date=$_POST['date'];
	$query="SELECT*FROM email where date='$date'";
	$data_run=mysqli_query($con,$query);
	
	   while($row=mysqli_fetch_array($data_run))
	   {
	$mail = new PHPMailer(true);

	$mail->SMTPDebug = 0;

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Port = 465;

	$mail->mailer = "smtp";

	$mail->Username = 'jayasreevcm23@gmail.com';
	$mail->Password = 'hfcztpteeycjgroi';

	// Sender and recipient address
	$mail->SetFrom('jayasreevcm23@gmail.com', 'jayasree');
	$mail->addAddress($row['To_Mail']);

	// Setting the subject and body
	$mail->IsHTML(true);
	$mail->Subject = $row['Title'];

	$mail->Body = $row['Content'];
			   
			  ?>
			  <tr>  
											
						<td> <?php echo $row['Name'];  ?></td>                     
						<td> <?php echo $row['To_Mail'];  ?></td>
						<td> <?php echo $row['Title'];  ?></td>
						<td> <?php echo $row['Content'];  ?></td>
						<td> <?php echo $row['Date'];  ?></td>
						<td> <?php echo $row['Time'].'  '; 
						if(!$mail->send()) { 
		echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
	} else { 
		echo 'Message has been sent.'; 
	}?></td>
							 
					</tr>
			<?php
			}
	}
		?>
			 </table>
			  </center>
			</form>
			
		  </div>
		  
		</body>
	
</html>
