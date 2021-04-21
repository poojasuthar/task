<html>
<head>
<?php include "css.php"; ?>
</head>
<body>  
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $birthErr = $fileErr = "";
$name = $email = $gender = $comment = $birth = $file_type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
if (empty($_POST["bid"])) {
    $birthErr = "Date of Birth is required";
  } else {
    $birth = test_input($_POST["bid"]);

  }
  $file_type = $_FILES['file'];
  $allowed = array("image/jpeg", "image/png");
  if(!in_array($file_type, $allowed)){
    $fileErr = "Only jpg & png files are allowed";
  }else {
    $file_type = test_input($_POST["file"]);

  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="main">
    <div class="register">
      <h2>Register Here</h2>
<p><span class="error">required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <label>Name:</label> <input type="text" name="name" id="name">
  <span class="error"><?php echo $nameErr;?></span>
  <br><br>
  <label>E-mail:</label> <input type="text" name="email" id="mail">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
 <label>DOB   :</label> <input type="date" name="bid" id="bdate">
  <span class="error"><?php echo $birthErr;?></span>
  <br><br>
  <label>Comment:</label> <textarea name="comment" rows="5" cols="40" id="com"></textarea>
  <br><br>
  <label>Gender:</label>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error"><?php echo $genderErr;?></span>
  <br><br>
  <label>Image:</label>
  <input type="file" name="file" id="file1">
  <br><br>
  <label>Aadhar:</label>
  <input type="file" name="file2" id="file2">
  <span class="error"><?php echo $fileErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit" id="submit">  
</form>
</div>
</div>
<div>
  <h1><?php require "data.php";?></h1>
</div>

</body>
</html>