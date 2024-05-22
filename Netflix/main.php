<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>


  *{
    margin: 0;
    padding: 0;
  }
    nav img{
        width: 10%;
    }
   header{
    background-image: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),url("component/bg.jpg");
    background-size: cover;
    background-position: 50%;
    height: 90vh;
}
.next {
  text-align: center;
  padding: 50px 0;
}
  
</style>
<body data-bs-theme="dark">
     <header class="position-relative">
            <nav class="navbar navbar-expand">
                <div class="container">
                    <img src="./component/logo.svg" alt="logo">
                    <div class="collapse navbar-collapse justify-content-end">
                    <form action="Signin.php" method="post">
                     <button type="submit" style="background-color: red; width:80px" class="btn btn-danger">Sign In</button>
                    </form>
                    </div>
                </div>
            </nav>
            <div class="next text-light">
              <p class="display-3">Laughter. Tears. Thrills. Find it all on <br>Netflix.</p>
              <p >Endless entertainment starts at just ₹ 149. Cancel anytime.</p>
               <p >Ready to watch? Enter your email to create or restart your membership.</p>
               <div class="">
                <input type="email" placeholder="Email Address" class="rounded-2" style="background:transparent; padding:9px; border:1px solid white; width:350px ">
                <button class="btn btn-danger" style="background-color: red; padding:10px; width:150px;">Get Started ></button>
               </div>
            </div>
   </header>
   <div style="background-color:black;" class="mt-2">
   <div class="container text-center ">
    <div class="row">
      <div class="col-md-6 mx-auto mt-5 " >
        <h1>Enjoy on your TV</h1>
         <h3>Watch on smart TVs, PlayStation, Xbox,<br> Chromecast, Apple TV, Blu-ray players and more.</h>
      </div>
      <div class="col-md-6 mt-5 mb-5">
        <!-- <img src="./component/tv.png" style="width:70%  " alt=""> -->
          <video style="" autoplay="" muted="" loop=""><source src="./component/video-tv-in-0819 (1).m4v" type="video/mp4"></video>
      </div>
    </div>
   </div>
  </div>
  <div style="background-color:black">
  <div class="container text-center mt-2 ">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img  src="./component/st.jpg" alt="">
      </div>
      <div class="col-md-6">
        <h1 class="text-start ">Download your<br> shows to watch <br> offline</h1> <br>
        <h4 class="text-start">Save your favourites easily and always have <br> something to watch.</h4>
      </div>
    </div>
  </div>
</div>

<div style="background-color: black; ">
<div class="container text-center mt-2">
  <div class="row align-items-center">
    <div class="col-md-6 mt-5 mb-5">
     <h1>Watch everywhere</h1>
      <h4>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</h4>
    </div>
    <div class="col-md-6 mt-5 mb-5">
      <video style="" autoplay="" muted="" loop=""><source src="./component/video-devices-in.m4v" type="video/mp4"></video>
    </div>
  </div>
</div>
</div>
<div style="background-color:black">
  <div class="container text-center mt-2 ">
    <div class="row align-items-center">
      <div class="col-md-6 mt-5 mb-5">
        <img  src="./component/child.png" alt="">
      </div>
      <div class="col-md-6 mt-5 mb-5">
        <h1 class="text-start ">Create Profile for<br> Kids <br></h1> <br>
        <h4 class="text-start">Send children on adventures with their favourite<br> characters in a space made just for them—free with<br> your membership.</h4>
      </div>
    </div>
  </div>
</div>
<div class="text-center mt-2" style="background-color: black;">
  <h5 class="pt-5 ">Ready to watch? Enter your email to create or restart your membership.
  </h5>
  <div class="pb-5">
    <input type="email" placeholder="Email Address" class="rounded-2" style="background:transparent; padding:9px; border:1px solid white; width:350px ">
    <button class="btn btn-danger" style="background-color: red; padding:10px; width:150px;">Get Started ></button>
   </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>
</html>