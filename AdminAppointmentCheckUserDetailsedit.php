<?php

session_start();
if (!empty($_SESSION["username"])){
	echo '<br>Admin IC: ' . $_SESSION["username"];
} else{
	echo ' <br>Welcome Guest,';
}
?>
<?php
include 'dbconnection.php';
$id1=$_GET['id'];
echo $id1;
    
if (isset($_POST['btnUpdate'])){
    $fname = $_POST['txtFname'];
    $lname = $_POST['txtLname'];
    $ic = $_POST['txtIc'];
    $gender= $_POST['gender'];
    $password= $_POST['txtPassword'];
    $email = $_POST['txtEmail'];
    $address= $_POST['txtAddress'];
    $UpdateQuery = "UPDATE `customer_table` SET `First Name`='$fname',`Last Name`='$lname',`Ic`='$ic',`Gender`='$gender',`Password`='$password',`Email`='$email',`Address`='$address' WHERE `Customer_ID`='$id1'";
    if(mysqli_query($connection, $UpdateQuery)){
            echo 'Successfully Updated! ';
            header('Location: list.php');
        }else{
            echo'Failed to update';
        }
    
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elder Rumah Appointment</title>
    <link rel="shortcut icon" href="logo.png"/>
	<link href="website_settings.css" rel="stylesheet" type="text/css"/>
	<script src="aa06e83e4b.js"></script>
    <link rel="stylesheet" href="ionicons.min.css"/>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <style>
	#wrapper
	{
	width:1500px;
	margin:0,auto;
	margin-left:200px;
	text-decoration:none;
	}
	

#wrapper1
	{
	width:1500px;
	margin:0,auto;
	margin-left:200px;
	text-decoration:none;
	}


#header1
	{
	width:1500px;
	height:30px;
	background-color:#56A5EC;
	clear:both;
	padding-top:-50px;
	}

#word1
	{
	margin-top:-12px;
	margin-left:1000px;
	padding-left:20px;
	}

#header2
	{
	width:1500px;
	height:120px;
	background-color:#5CB3FF;
	}

.square
	{
	height:120px;
	width:180px;
	float:left;
    border-radius:50%
	}

.square1
	{
	height:120px;
	width:300px;
	object-fit: contain;
	margin-left: 350px;
	}
	
.square2
	{
	width: 300px;
	height:120px;
	float:right;
	margin-top:40px;
    margin-left: 350px;
	word-spacing:1px;
	}
/*navigation*/ 
	#nav
	{
	height:50px;
	width:1500px;
	background-color:gray;
	position:absolute;
    text-align:center;
	}

	#nav li 
	{
	display:inline;
	float: left;
	}
	
	#nav li a
	{
	display: block;
  	color: #333;
  	text-align:justify;
  	text-decoration:none;
	}
	
	#nav li a:hover 
	{
  	background-color: gray;
	}
	
	#nav a 
	{
  	display: block;
  	padding:16px;
 	background-color: gray;
	}
	
	#nav ul
	{
	list-style-type: none;
  	margin: 0;
  	padding: 0;
 	margin: 0;
  	padding: 0;
  	background-color: gray;
	}

/*navigation*/

.title{
	position:absolute;
	top:50%;
	left:50%;
	transform: translate(-50%,-50%); 
	color:white;
	font-size:30px;
	}	
	
.button{
	position:absolute;
	top: 61%;
	left:50%;
	transform: translate(-50%,-50%);
}

.body1
{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(old_man_bg.jpg);
	background-size: cover;

}

.footer-dark {
  height:250px;
  width:1500px;
  margin-top: 0px;
  margin-left: 0px;
  padding:50px 0;
  color:#f0f9ff;
  background-color:black;
  padding:25px;
  text-decoration:none;
  padding:20px 20px;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}

#content1{
    height:700px;
    width: 1500px;
    float:center;
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(bg.jpg);
	background-size: cover;
}

#innercontent{
    width:1500px;
    height:300px;
    text-align:center;
}

#box1{
    width:500px;
    height:300px;
    background-color:orange;
    margin-top:50px;
    text-align:center;
}

#box2{
    width:500px;
    height:300px;
    background-color:green;
    margin-left:500px;
    margin-top:-320px;
    text-align:center;
}

#box3{
    width:500px;
    height:300px;
    background-color:blue;
    float:right;
    margin-top: -300px;
    text-align:center;
}

#box4{
    width:500px;
    height:300px;
    background-color:yellow;
    float:left;
    text-align:center;
}
</style>

</head>

<body class="body1">
   
	<div id="wrapper">
		<div id="header1">
			<br/>
				<div id="word1">	
				<i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Contact us 60+ 18 7703883               
				</div>
		</div>
		<div id="header2">
    <a href="index.php"><img class="square" src="old_man_logo.jpg" alt="old_man_logo" title="elder_rumah_system"/>
			<img class="square1" src="text.png" alt="best_price" title="best_price"/>
			<div class="square2">
			<?php if (!empty($_SESSION["username"])){?>
      
				<a href="Admindetails.php"><img height="80px" src="profile.jpg" width="99px" class="auto-style1" /></a>
                <a href="adminlogout.php"><img height="80px" src="logout.png" width="99px" class="auto-style1" /></a> 
			</div>
            
		
			<?php } else {?>
			<div class="square3">
				<a href="AdminLogin.php"><img height="80px" src="login1.png" width="99px" class="auto-style1" /></a>
                <a href="AdminSignup.php"><img height="80px" src="signup.png" width="99px" class="auto-style1" /></a> 
			</div>
			<?php }?>	
		</div>
		
				<h2>Check User Details Edit</h2>
			
       
        <div id = "backbutton">
            <a href="AdminHome.php"><input type="submit" value="Back" name="back"></a>
        </div>
        <div id = "content1">
        <?php
        $query = "SELECT * FROM customer_table WHERE Customer_ID = '$id1'";
        $result = mysqli_query($connection,$query) or die(mysqli_error());
        $row = mysqli_fetch_assoc($result);
        ?>
    <form action = "#" method ="post">
        First Name: <input type="text" name="txtFname" value="<?php echo $row['First Name']; ?>"><br>
        Last Name: <input type="text" name="txtLname" value="<?php echo $row['Last Name']; ?>"><br>
        Email Address: <input type="email" name="txtEmail"value="<?php echo $row['Email']; ?>"><br>
        Gender <br>
        <label>
            <?php $gender = $row['Gender'];?>
            <input type="radio" name="gender" value="Male" <?php if ($gender != "Female") echo "checked";?>> Male
        </label><br>
        <label>
            <input type="radio" name="gender" value="Female"<?php if ($gender != "Male") echo "checked";?>> Female
        </label><br>
        Password: <input type="text" name="txtPassword" value="<?php echo $row['Password']; ?>"><br>
        Email: <input type="email" name="txtEmail"value="<?php echo $row['Email']; ?>"><br>
        Address: <input type="text" name="txtAddress"value="<?php echo $row['Address']; ?>"><br>
        <input type="submit" value="Update" name="btnUpdate">
    </form>


<?php mysqli_close($connection); ?>
    
</body>
</html>