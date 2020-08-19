<?php
// if (isset($_POST["cancel"])) {
//     die("no update");
//     header("location:index.php");
// }

if (!isset($_GET["id"])) {
    die("id not found");
}

$id = $_GET["id"];

if (!is_numeric($id)) {
    die("id not number");
}

require("connect.php");

if (isset($_POST["okbtn"])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $cityId = $_POST["cityId"];
    $sql = <<<update
    UPDATE employee SET firstName = '$firstName',
    lastName = '$lastName', cityId=$cityId
    where employeeId = $id
    update;

    mysqli_query($link, $sql);
    header("location: index.php");
    exit();
} else {
    $sql = <<<edit
        select * from employee where employeeId =$id
     edit;
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);

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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<form method = "post">
  <div class="form-group row">
    <label for="firstName" class="col-2">FirstName:</label>
    <div class="col-4">
      <input id="firstName" name="firstName" type="text" class="form-control" value="<?=$row["firstName"]?>" >
    </div>
  </div>
  <div class="form-group row">
    <label for="lastName" class="col-2">LastName:</label>
    <div class="col-sm-4">
      <input id="lastName" name="lastName" type="text" class="form-control" value="<?=$row["lastName"]?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-1">City</label>
    <div class="col-4">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="cityId" id="city_2" type="radio" class="custom-control-input" value="2"
        <?= ($row["cityId"] == 2) ? "checked" : ""?>
        >
        <label for="city_2" class="custom-control-label">Zhongli</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="cityId" id="city_4" type="radio" class="custom-control-input" value="4"
        <?= ($row["cityId"] == 4) ? "checked" : ""?>
        >
        <label for="city_4" class="custom-control-label">Taoyuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="cityId" id="city_6" type="radio" class="custom-control-input" value="6"
        <?= ($row["cityId"] == 6) ? "checked" : ""?>
        >
        <label for="city_6" class="custom-control-label">Pingtong</label>
      </div>
    </div>
</div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="okbtn" type="submit" value ="OK" class="btn btn-primary">OK</button>
      <!-- <button name="cancel" type="submit" value ="OK" class="btn btn-primary">Cancel</button> -->
    </div>
  </div>
</form>
</body>
</html>