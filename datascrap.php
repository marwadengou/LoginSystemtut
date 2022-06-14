<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataScrap</title>
    <link rel = "icon" href ="images/logo.jpg" type = "image/x-icon">
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header class="main">
        <nav>
            <a href="datascrap.php" class="logo">
                <img  class="logo" src="images/logo.jpg"/>
            </a>
            <ul class="menu">
                <li><a href="datascrap.php" class="active">Home</a></li>
                <li><a href="#about">About</a></li>                
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>DataScrap where the annotation become easier</h1>
            <p class="p1"><b>For starting choose your role:</b></p>
            <a class="main-btn" href="login.php">Teacher</a><br>

            <a class="main-btn" href="loginapp.php">Student</a>
        </div>
    </header>
    <section class="features">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/teaching.png"/>
                </div>
                <div class="f-text">
                    <h4 class="tea">Teacher's annotations</h4>
                    <p>This environment allows teachers to interact more easily with their students thanks to the scraper.</p>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/searching-data.png"/>
                </div>
                <div class="f-text">
                    <h4>Student's search</h4>
                    <p>Any student who has study in the university of technology could find algorithms lessons with properties that they make the revision to fast and efficace.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about-img" id="about">
            <img src="images/about.png">
        </div>
        <div class="about-text">
            <h2>How do the plateform work?</h2>
            <p>Gathering information across the web is web scraping, also known as Web Data Extraction & Web Harvesting. Nowadays data is like oxygen for startups & freelancers who want to start a business or a project in any domain.<span id="dots1"></span><span id="more1">JavaScript is a popular programming language and it runs in any web browser. Node JS is an interpreter and provides an environment for JavaScript with some specific useful libraries.In short, Node JS adds several functionality & features to JavaScript in terms of libraries & make it more powerful.</span></p>
<button  class ="main-btn" onclick="myFunction()" id="myBtn">Read less</button>

<script>
function myFunction() {
  var dots = document.getElementById("dots1");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

        </div>
    </section>
    <footer class="contact">
        <div class="contact-heading" id="contact">
            <h1>Contact Us</h1>
            <p>For more questions contact us here</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </footer>
</body>
</html>