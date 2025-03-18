<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $name = $email = $gender =$comment = $website = "";

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $comment = test_input($_POST["comment"]);
        $website = test_input($_POST["website"]);
        if(isset($_POST["gender"])){
            $gender = test_input($_POST["gender"]);
        }

    }

?>

<h2>Form Validation Example</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Name: <input type="text" name="name" placeholder="Name"><br><br>
    E-mail: <input type="text" name="email" placeholder="Email"><br><br>
    Website: <input type="text" name="website" placeholder="Website"><br><br>
    Comment: <textarea name="comment" rows=3 cols=10 placeholder="Comment"></textarea><br><br>
    Gender:
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Other">Other
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input: <br></h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
?>




</body>
</html>