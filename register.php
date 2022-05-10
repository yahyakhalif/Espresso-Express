<?php session_start();
    $_SESSION;
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con)

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Orders</title>
    <link rel="stylesheet" href = "register.css">
</head>
<body>
        <div id='register'>
        <div class = "box">
            <ul type = "none">
                <li><a href="index.html">HOME</a></li>
                <li><a href="products.html">PRODUCTS</a></li>
                <li><a href="store.html">STORE</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="login.php">LOGIN</a></li>
                
                
            </ul>
            </div>
            
            <div class = "head">
                <h2>Espresso Express™</h2>
            </div>
        <div class="form-box">
        <form  method = "post" action = "register.php">
            <div class="heading">
                <h1>Register</h1>
            </div>
            <form id='register' class='input-group-register'>
                <input type='text'class='input-field' placeholder='First Name' value =" <?php echo $firstname;?>">
                <input type='text'class='input-field'placeholder='Last Name' value =" <?php echo $lastname;?>" >
                <input type='email'class='input-field'placeholder='Email Id' value =" <?php echo $email;?>">
                <input type='password'class='input-field'placeholder='Enter Password' value =" <?php echo $userpassword;?>" >
                <input type='password'class='input-field'placeholder='Confirm Password'  required>
                <input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span>
                
                <button type='submit'class='submit-btn'>Register</button>
                </form>



     </form>

    </div>
</body>
</html>


