<html>
<body background="<?php echo base_url('Pictures\Background.jpg'); ?>">
<head>
<style>
.nav
{
    border:1px solid #ccc;
    border-width:1px 0;
    list-style:none;
    margin:0;
    padding:0;
    text-align:center;
	background-color: #333;
}
.nav li
{
    display:inline;
}
.nav a
{
    display:inline-block;
    padding:10px;
	color: white;
}
.nav a:hover:not(.active) 
{
    background-color: red;
}
.active 
{
    background-color: red;
}
.box1 
{
    background-color: gray;
    width: 75%;
    padding: 25px;
	border: 1px solid black;
    margin: 25px;
	box-shadow: 5px 5px 5px #000000;
	text-shadow: -1px 6px 3px rgba(163, 150, 150, 0.82);
	margin-left: auto;
	margin-right: auto;
}
.error 
{
	color: #FF0000;
}
form
{
    margin-left:0px;
    width: 400px;
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
	text-align: left;
}
form div + div 
{
    margin-top: 1em;
	text-align: left;
}
textarea
{
    font: 1em sans-serif;
    width: 250px;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border: 1px solid #999;
}
input:focus, textarea:focus 
{  
    border-color: #000;
}
textarea 
{
    vertical-align: top;
    height: 5em;
    resize: vertical;
}
label 
{
    display: inline-block;
    width: 90px;
    text-align: right;
}
.div1
{
   position: absolute;
   left: 57%;
   top: 27%;
}
textarea 
{
    resize: none;
}
.buttonbox
{
    background-color: #f44336;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}
</style>
</head>
<body> 
<center><h1><strong><font color="red">WELCOME TO MY PAGE</font></strong></h1></center>
<hr>
<font size="3.5">
<ul class="nav">
  <li><a href="MyPage.php">Home</a></li>
  <li><a href="MyTrivia.php">Trivia</a></li>
  <li style="float:center"><a class="active" href="test.php">Form</a></li>
</ul>
</ul> 
<h2><center><font color = red>List of Cute girls....and some people too!</center></font></h2>
<div class ="box1">
<center>
<table border="1" width="100%">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Nickname</th>
		<th>Email</th>
		<th>Home Address</th>
		<th>Comment</th>
		<th>Gender</th>
		<th>Cellphone</th>
		<th>Actions</th>
    </tr>
	<?php foreach($data as $m){ ?>
    <tr>
		<td><?php echo $m['id']; ?></td>
		<td><?php echo $m['first_name']; ?></td>
		<td><?php echo $m['last_name']; ?></td>
		<td><?php echo $m['user_city']; ?></td>
		<td><?php echo $m['email']; ?></td>
		<td><?php echo $m['Nickname']; ?></td>
		<td><?php echo $m['Cellphone']; ?></td>
		<td><?php echo $m['comment']; ?></td>
		<td>
            <a href="<?php echo site_url('myreadeditdelete_controller/edit/'.$m['id']); ?>">Edit</a> 
            <a href="<?php echo site_url('myreadeditdelete_controller/remove/'.$m['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
	
</table>
<center><a href="<?php echo base_url('myreadeditdelete_controller/add/'); ?>" class ="buttonbox">Add</a> 
</div>
</font>
</center>
<hr>
<h2><p><center><font color="red"><font size="5px"><strong>Thanks for viewing my page for that have some Japanese girl</strong></font></center></p></h2>
<center><img src="<?php echo base_url('Pictures\Rena Yamazaki.gif'); ?>" width="304px" height="228px"></center>
</body>
</html>