
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $nameErr = "firstname is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lastname"])) {
      $nameErr = "lastname is required";
    } else {
      $lastname = test_input($_POST["lastname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
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
    
  

  if (empty($_POST["password"])) {
    $password = "";
  } else {
    $password = test_input($_POST["password"]);
  }
  if (empty($_POST["repassword"])) {
    $repassword = "";
  } else {
    $repassword = test_input($_POST["repassword"]);
  }}}
$conn = new mysqli('localhost','root','','projectDB');

$stmt = $conn->prepare("insert into signup(firstname,lastname,email,password,repassword) values(?, ?, ?, ?, ?)");
$stmt->bind_param("sssii", $firstname,$lastname,$email,$password,$repassword);
$stmt->execute();

echo "Registration successfully...";
$stmt->close();
$conn->close();



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>