<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
<link rel="stylesheet" href="./style.css">

</head>
<body>

<h1> hyy</h1>

<div class="container">

<form action="connect.php" method="post">

<div>

<label >Name</label>
<input  type="text" name="name" placeholder="Enter your name">
</div>

<div >

<label >Email</label>
<input  type="text" name="email" placeholder="Enter your Email">
</div>

<div class="genderContainer">

<label >Gender</label>
<input class="gender1" type="radio" name="gender"  value="m" >Male
<input class="gender1" type="radio" name="gender"  value="f">Female
<input class="gender1" type="radio" name="gender" value="o" >other
</div>


<div>

<label>Mobile</label>
<input  type="text" name="mobile" placeholder="Enter your mobile">
</div>

<div>

<label >Password</label>
<input  type="password" name="password" placeholder="Enter your password">
</div>

<div class="btn">


<button type="submit">plz submit</button>
</div>
</form>
</div>
    
</body>
</html>