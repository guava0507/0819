<?php
    if(isset($_POST["submit"]))
    {
         $firstName = $_POST["firstName"];
         $lastName = $_POST["lastName"];
         $cityId = $_POST["cityId"];
         $sql = <<< add
         insert into employee(firstName, lastName, cityId)
         values('$firstName','$lastName','$cityId')
         add;
         require("connect.php");
         mysqli_query($link,$sql);

         header("location: index.php");

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<form method = "post">
  <div class="form-group row">
    <label for="text" class="col-2">FirstName:</label> 
    <div class="col-4">
      <input id="text" name="firstName" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2">LastName:</label> 
    <div class="col-sm-4">
      <input id="text1" name="lastName" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-1">City</label> 
    <div class="col-4">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="cityId" id="rdocity_0" type="radio" class="custom-control-input" value="2"> 
        <label for="rdocity_0" class="custom-control-label">Zhongli</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="cityId" id="rdocity_1" type="radio" class="custom-control-input" value="4"> 
        <label for="rdocity_1" class="custom-control-label">Taoyuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="cityId" id="rdocity_2" type="radio" class="custom-control-input" value="6"> 
        <label for="rdocity_2" class="custom-control-label">Pingtong</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value ="OK" class="btn btn-primary">寄出</button>
    </div>
  </div>
</form>