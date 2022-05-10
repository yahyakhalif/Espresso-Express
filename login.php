<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/loginstyles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
  <form  method = "post" action = "login.php">
    <div class = "box">
        <ul type = "none">
            <li><a href="index.html">HOME</a></li>
            <li><a href="products.html">PRODUCTS</a></li>
            <li><a href="store.html">STORE</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="login.html">LOGIN</a></li>
        </ul>
        </div>
    <div class = "head">
        <h2>Espresso Express™</h2>
    </div>
        
    <div id='login-form'class='login-page'>
        <div class="form-box">
            <div class='button-box'>
                <div id='btn'></div>
                <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                <button type='button'onclick='register()'class='toggle-btn'>Register</button>
            </div>
            <form id='login' class='input-group-login'>
                <input type='text'class='input-field'placeholder='Email Id' required >
        <input type='password'class='input-field'placeholder='Enter Password' required>
        <input type='checkbox'class='check-box'><span>Remember Password</span>
        <button type='submit'class='submit-btn'>Log in</button>
     </form>
     <form id='register' class='input-group-register'>
         <input type='text'class='input-field'placeholder='First Name' required>
         <input type='text'class='input-field'placeholder='Last Name ' required>
         <input type='email'class='input-field'placeholder='Email Id' required>
         <input type='password'class='input-field'placeholder='Enter Password' required>
         <input type='password'class='input-field'placeholder='Confirm Password'  required>
         <input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span>
                <button type='submit'class='submit-btn'>Register</button>
         </form>
        </div>
    </div>
</div>
<script>
    var x=document.getElementById('login');
    var y=document.getElementById('register');
    var z=document.getElementById('btn');
    function register()
    {
        x.style.left='-400px';
        y.style.left='50px';
        z.style.left='110px';
    }
    function login()
    {
        x.style.left='50px';
        y.style.left='450px';
        z.style.left='0px';
    }
</script>
<script>
    var modal = document.getElementById('login-form');
    window.onclick = function(event) 
    {
        if (event.target == modal) 
        {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>