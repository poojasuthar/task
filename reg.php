
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$adresdo = "info@takelake.com";
$temat = "Newsletter signup";
$zawartosc = "Imie: " . $_POST['name'] . "\n"
    . "Email: " . $_POST['email'] . "\n"
    . "Selected" . implode($_POST['checkbox'], ",");

// if the url field is empty
if (isset($_POST['url']) && $_POST['url'] == '') {
    // then send the form to your email
    mail('you@yoursite.com', 'Contact Form', print_r($_POST, true));

    if (!$_POST['name'] || !$_POST['email']) {
        header("Location: error.html");
    }
    if (preg_match('~[0-9]~', $_POST['name'])) {
        header("Location: error.html");
        exit();
    }

    $email = $_POST['email'];
    if (mail($adresdo, $temat, $zawartosc, 'From: Subskrybent <' . $email . '>')) {
        header("Location: ok.html");
    }
}
?>
<h2>PHP Form Validation Example</h2>
<p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" pattern="[a-zA-Z]{1,}" required>
  
  <input type="submit" name="submit" value="Submit">  
</form>


</body>
</html>