<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Document</title>
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>	

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  This is an alert box.
  
</div>
</head>
<body>
	<?php echo "Hallo Welt!";?>
	<a href = "http://localhost/php/zwei.php?val=1">zwei</a>
	<a href = "http://localhost/php/drei.php">drei</a>

</body>
</html>