<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($con,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My second page </title>
        <style>
        body{
            background-image :url("space2.jpeg");
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
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="add_data.php">add data here.</a></th>
    </tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City Name</th>
	<th>Email Address</th>
	<th>Nickname</th>
	<th>Cellphone Number</th>
	<th>Comment</th>

    <th colspan="2">Operations</th>
    </tr>
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