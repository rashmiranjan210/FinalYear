<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<style>
    *{
       margin: 0;
       padding: 0; 
    }
    .signin{
        width: 400px;
        background-color:rgba(0,0,0,.6);
        margin:auto;
        height: 600px;
    }
    form{
        width: 400px;
        padding: 50px;
        
    }
    .form input {
        width: 280px;
        padding: 12px; 
        margin-top: 25px;    
        border-radius: 4px; 
        background-color: #333333;    
        
    } 
    form button{
        width: 305px;
        padding: 15px; 
        margin-top: 25px;    
        border-radius: 4px;     
        background-color: red;
        color: white;
        margin-bottom: 20px;

    }
    #help-text {
        padding:106px
        
    }
    body{
        background-image: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),url("component/bg.jpg");
        background-size: cover;
        background-position: 50%;
        height: 90vh;
    }
    #checkbox {
        transform: scale(1.3); /* Adjust the scale factor as needed */
      }

</style>
<body>
    <img src="./component/logo.svg" style="width: 10%; padding-left:50px; padding-top:30px" alt="">
    <div class="signin">
        <form action="check.php" method="post">
        <h1 style="color: white;">Sign In</h1>
        <div class="form">
            <input type="email" name="email" placeholder="Email or phone number">
            </div>
            <div class="form">
            <input type="password" placeholder="password" name="password">
            </div>
        <button type="submit" name="submit">Sign In</button><br>
        <div id="checkbox-container">
            <input type="checkbox" name="Remember me" id="checkbox" style="color: #B3B3B3; ">
            <span style="color: #B3B3B3">Remember me</span>
            <label id="help-text" style="color:#B3B3B3;">Need help?</label>
          </div>
        <p style="color: #737373;
        font-size: 16px;
        font-weight: 400;
        margin-top: 16px;">New to Netflix?<a><strong style="color: white;">  Sign up now.</strong></a></p>
         <p style="color: #8c8c8c;
         font-size: 13px;
         margin-top: 11px;">
     This page is protected by Google reCAPTCHA to<br> ensure you're not a bot.<strong style="color: rgb(33, 33, 249);"> Learn more</strong> </p>
        </form>
    </div>
</body>
</html>