<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel = "icon" href ="images/logo.jpg" type = "image/x-icon">
    <link rel="stylesheet" href="css/signup.css">
    </head>

    <body>
   <main>
       <div class="wrapper-main">
           <section class="section-default">
               <h1> &#128272; Signup  &#128272;</h1>
               <?php
            
               if (isset($_GET["error"])) {
                   if ($_GET["error"]=="emptyfields") {
                      echo '<p class="signuperror">Fill in all fields </p>';
                   }
                   else if($_GET["error"]=="invaliduidmail"){
                    echo '<p class="signuperror">Fill in all fields </p>';
                   }
                   else if($_GET["error"]=="invaliduid"){
                    echo '<p class="signuperror">Invalid username </p>';
                   }
                   else if($_GET["error"]=="invalidmail"){
                    echo '<p class="signuperror">Invalid email </p>';
                   }
                   else if($_GET["error"]=="passwordcheck"){
                    echo '<p class="signuperror">Your password do not match </p>';
                   }
                   else if($_GET["error"]=="usertaken"){
                    echo '<p class="signuperror">User already taken</p>';
                   }
               }
               else if (isset($_GET['signup'])) {
                  echo '<a href="indexJdid.html">';
               }
               ?>
               <div class="container">
                  <div class="row justify-content-center">
                       <div class="col-md-5">
                           <img class="avatar" alt="avatar" src="images/avatar(1).png">
                           <div class="card">                               
                           <div class="card-body py-md-4">
              <form class="form-signup" action="includes/signup.inc.php"method="post">
              <div class="form-group">
                  <input type="text" name="uid"placeholder="Username"></div>
                  <div class="form-group">
                  <input type="text" name="mail"placeholder="E-mail"></div>
                  <div class="form-group">
                  <input type="password" name="pwd"placeholder="Password"></div>
                  <div class="form-group">
                  <input type="password" name="pwd-repeat"placeholder="Confirm password"></div>
                  <div class="d-flex flex-row align-items-center justify-content-between">
                  <a href="#">Login</a>
                  <button type="submit" name="signup-submit" class="btn btnn">Create Account</button>
                  </div>
              </form>
                            </div>
                            </div>
                        </div>
                    </div>
               </div>
           </section>
       </div> 
   </main>
  </body>
</html>
