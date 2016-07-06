<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.form {
align:center;
margin:auto;
width:50%;
    background-image: url("images.jpe");
    background-repeat: no-repeat;
background-size:cover;

}
input[type=text] 
{
width:50%;
align:center;
margin:auto;
}
label
{
margin:auto;
color:white;
float:center;
width:100%;
}
</style>
</head>
<body>

<div class="container">
  <h2>My first web form</h2>
<form action="link.php" method="post" role="form" class="form">
    <div class="form-group">
<span>
     &nbsp; <label for="name">Name:</span>
      <input type="text" class="form-control" name="name"  placeholder="Enter name">
   </label></div>
    <div class="form-group">
   &nbsp;   <label for="phone">Phoneno:</label>
      <input type="text" class="form-control" name="phone" placeholder="Enter no">
    </div>
<div class="form-group">
<label for="age">Age:</label>
      <input type="text" class="form-control" name="age" placeholder="Enter age">
</div>    
<div class="checkbox">
      &nbsp;<label><input type="checkbox"> Remember me</label>
    </div>

<center>    <input type="submit" name="button1" class="btn btn-default"/></center>
  </form>
</div>

</body>
</html>

