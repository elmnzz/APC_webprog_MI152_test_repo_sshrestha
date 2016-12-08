<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
$first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 $email = $_POST['email'];
 $Nickname = $_POST['Nickname'];
 $Cellphone = $_POST['Cellphone'];
 $comment = $_POST['comment'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(first_name,last_name,user_city,email,Nickname,Cellphone,comment) VALUES('$first_name','$last_name','$city_name','$email','$Nickname','$Cellphone','$comment')";
 mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My second page </title>
        <style>
        body{
            background-image :url("space.jpeg");
				background-color : green ;
			background-position: left top;
			background-attachment: fixed:
			 
        }    
        p{
		 background : black; 
            color :rgb(255, 152, 22);
        }
		li{
		 background : black; 
			color : rgb(255, 152, 22);
		}
        h2{
		 background : black; 
           
			color : rgb(151, 0, 154);
        }
        </style>
        
        
        
    </head>
    <body>
        <h2>Shradheya Shrestha</h2>
    
    <ul>
        <li>student number : 2014-300045</li>
        <li>3rd year</li>
        <li>course:Bs computer science</li>
    </ul>
    
 <br /> <p style="color:white; font-family:comic sans ms">Hobbies:</p><br />
		
    
  
<center>

<div id="header">
 <div id="content">
    
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="Address" /></td>
    </tr>
    <tr>
	<td><input type="text" name="email" placeholder="Email Address" required /></td>
    </tr>
    <tr>
	<td><input type="text" name="Nickname" placeholder="Nickname" /></td>
    </tr>
    <tr>
	<td><input type="text" name="Cellphone" placeholder="Cellphone Number" required /></td>
    </tr>
    <tr>
	<td><input type="text" name="comment" placeholder="Comment" /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>