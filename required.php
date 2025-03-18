<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<?php
    $name=$email=$comment=$gender=$website="";
    $nameErr=$emailErr=$commentErr=$genderErr=$websiteErr="";

    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $nameErr = "*Name is required";
        }else{
            $name = test_input($_POST["name"]);
        }

        if(empty($_POST["email"])){
            $emailErr = "*Email is required";
        }else{
            $email = test_input($_POST["email"]);
        }

        if(empty($_POST["website"])){
            $websiteErr = "";
        }else{
            $website = test_input($_POST["website"]);
        }

        if(empty($_POST["comment"])){
            $commentErr = "";
        }else{
            $comment = test_input($_POST["comment"]);
        }

        if(empty($_POST["gender"])){
            $genderErr = "*Gender is required";
        }else{
            $gender = test_input($_POST["gender"]);
        }

    }

?>

<h2>Form Required</h2>
<p>
<span class="error">* required field</span>
</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    Name: <input type="text" name="name"> <span class="error"> <?php echo $nameErr; ?> </span>
    <br><br>
    Email: <input type="email" name="email"> <span class="error"> <?php echo $emailErr; ?> </span>
    <br><br>
    Website: <input type="text" name="website"> <span class="error"> <?php echo $websiteErr; ?></span>
    <br><br>
    Comment: <textarea name="comment" rows="3" cols="10"></textarea><span class="error"> <?php echo $commentErr ?></span>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Other">Other
    <span class="error"> <?php echo $genderErr; ?> </span>
    <br><br>
    <input type="submit" value="submit">
</form>

<?php
    echo "<br>Your input:<br>";
    echo "Name: ".$name. "<br>";
    echo "Email: ".$email. "<br>";
    echo "Website: ".$website. "<br>";
    echo "Comment: ".$comment. "<br>";
    echo "Gender: ".$gender. "<br>";

?>

</body>
</html>