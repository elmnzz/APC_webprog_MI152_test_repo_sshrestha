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
		
    
  
    
   <?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 $email = $_POST['email']
 $Nickname = $_POST['Nickname']
 $Cellphone = $_POST['Cellphone']
 $comment = $_POST['comment']
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(first_name,last_name,user_city) VALUES('$first_name','$last_name','$city_name')";
 mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
  <?php
$sql_query="SELECT * FROM users";
 $result_set=mysqli_query($con,$sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>
 
</center>
    </body>
</html>

