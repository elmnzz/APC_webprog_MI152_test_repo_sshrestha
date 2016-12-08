<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];

 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE users SET first_name='$first_name',last_name='$last_name',user_city='$city_name' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
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
    
 <br /> <p style="color:white; font-family:comic sans ms">Visitors Info...</p><br />

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
    <td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="address" placeholder="address" value="<?php echo $fetched_row['user_city']; ?>"/></td>
    </tr>
	 <tr>
    <td><input type="text" name="email_address" placeholder="email" value="<?php echo $fetched_row['email']; ?>" required /></td>
    </tr>
	 <tr>
    <td><input type="text" name="nickname" placeholder="nickname" value="<?php echo $fetched_row['Nickname']; ?>"/></td>
    </tr>
	 <tr>
    <td><input type="text" name="cellphone" placeholder="cellphone" value="<?php echo $fetched_row['Cellphone']; ?>" required /></td>
    </tr>
	 <tr>
    <td><input type="text" name="comment" placeholder="Comment" value="<?php echo $fetched_row['comment']; ?>"/></td>
    </tr>`
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>