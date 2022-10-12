<html>
<head>
<meta charset="utf-8">
    <title>Php Dynamic Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png">
            </a>
            <ul calss="main">
            <li><a href="website.php">Home </a></li>
            <li><a href="#" >Features</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1> Create a page with virtual Reality</h1>
            <p>Line is a freeware app for instant communications on electronic devices such as smartphones, tablet computers and personal computers. Line users exchange: texts, images, video and audio and conduct free VoIP conversations and video conferences</p>
<a class="main-btn" href="#">Contract us</a>
        </div>
        
    </section>
    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>On-demand assistant for food and messenger delivery services in Bangkok..</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
</div>
<div class="feature-container">

<div class="feature-box">
    <div class="f-img">
        <img src="images/info-icon2.png"/>
    </div>
    <div class="f-text">
        <h4>Software Development</h4>
        <p>A video on demand service operating in Taiwan and Thailand..</p>
        <a href="#" class="main-btn">Check</a>
    </div>
</div>
</div>
<div class="feature-container">

<div class="feature-box">
    <div class="f-img">
        <img src="images/info-icon3.png"/>
    </div>
    <div class="f-text">
        <h4>App Development</h4>
        <p>Line Friends are featured characters that are shown in stickers of the application.</p>
        <a href="#" class="main-btn">Check</a>
    </div>
</div>
</div>
           
    </section>
<section class="about">
    <div class="about-img">
        <img src="images/about.png">
</div>

<div class="about-text">
    <h2>Start Tracking Statistics</h2>
    <p> A referral program for online shopping. Customers get extra discount or earn Line Points by purchasing through the Line Shopping service</p>
    <button class="main-btn">Read me</button>

</div>
</section>
<section class="contact">
    <div class="contact-heading">
        <h1>Contact Us</h1>
    <p>On-demand assistant for food and messenger delivery services in Bangkok.</p>
 </div>
 <form action="user.php" method="post">
    <input type="text" name="user" placeholder="Enter your Name"/>
    <input type="email" name="email" placeholder="Enter your Email"/>
    <textarea name="message" placeholder="Type Your Message Here................"></textarea>

    <button class="main-btn" type="submit">Continue</button>
</form>
</section>
</body>
</html>