<!DOCTYPE html>
<html>
  <center>
<head>
<title> add remainder</title>
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
			max-height:170vh;
			border-radius: 10px;
			
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
  
    <form method="post" action="insert_code.php">
	<h2>Add User Details</h2>
	<br>
	<input type="hidden" name="no" required>
	
	<div class="input-row">
	 <label> Name:</label>
      <input type="text" name="name" placeholder="Enter your name." required/>
	  <p>
	  </p>
	  </div>
   
   <div class="input-row">
      </label>To Email:</label>
        <input type="to_mail" name="to_mail" id="to_mail" maxlength="64" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="abc3@XXX.com" required>
      </div>	
	  
	  <div class="input-row">
	  </label>Title:</label>
        <input type="text" name="title" id="title" required>
		</div>	
		
	<div class="input-row">
	  </label> Content:</label>
		 <textarea id="content" name="content" rows="4" cols="50" placeholder="enter your content value..."></textarea>
		 </div>	
	 
	 <div class="input-row">
	  </label>Reminder Date:</label>
         <input type="date" name="date" id="date" required><br>
		 </div>	
	
	<div class="input-row">
	  </label>Time: </label>
        <input type="Time" name="time" id="time" required><br>
  </div>	

 <input type="submit" name="submit" value="submit" class="btn">
 
    <div class="input-row">
    <button><a href= "html.html">back</a></button>	
	</div>	
	 </form>	

</div>	
</body>
 </center>
</html>


 

