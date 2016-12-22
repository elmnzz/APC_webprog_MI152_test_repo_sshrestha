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
<h2><center><font color = red>Is there something wrong with your Information?</center></font></h2>
<div class ="box1">
<center>

<?php echo validation_errors(); ?>

<?php echo form_open('myreadeditdelete_controller/edit/'.$myinput2['id']); ?>
	<div><center>Name : <input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $myinput2['name']); ?>" /></div>
	<div><center>Nickname : <input type="text" name="nickname" value="<?php echo ($this->input->post('nickname') ? $this->input->post('nickname') : $myinput2['nickname']); ?>" /></div>
	<div><center>Email : <input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $myinput2['email']); ?>" /></div>
	<div><center>Home Address : <input type="text" name="home_address" value="<?php echo ($this->input->post('home_address') ? $this->input->post('home_address') : $myinput2['home_address']); ?>" /></div>
	<div><center>Comment : <textarea name="comment"><?php echo ($this->input->post('comment') ? $this->input->post('comment') : $myinput2['comment']); ?></textarea></div>
	<div><center>Gender : <input type="text" name="gender" value="<?php echo ($this->input->post('gender') ? $this->input->post('gender') : $myinput2['gender']); ?>" /></div>
	<div><center>Cellphone : <input type="text" name="cellphone" value="<?php echo ($this->input->post('cellphone') ? $this->input->post('cellphone') : $myinput2['cellphone']); ?>" /></div>
	<button type="submit">Save</button>
<?php echo form_close(); ?>
</div>
</font>
</center>
<hr>
<h2><p><center><font color="red"><font size="5px"><strong>Thanks for viewing my page for that have some Japanese girl</strong></font></center></p></h2>
<center><img src="<?php echo base_url('Pictures\Rena Yamazaki.gif'); ?>" width="304px" height="228px"></center>
</body>
</html>