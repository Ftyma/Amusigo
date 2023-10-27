<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Amusigo</title>
<link rel="stylesheet" href="default.css">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>

<body>
    <div id="nav">
        <img id="logo" src="image/logo.svg">
        <h1 id="nav-title">Amusigo.</h1>
        <div id="nav-menu">
            <a href="#about" class="nav-menu-list"><p>About Us</p></a>
            <a href="#faq" class="nav-menu-list"><p style="margin-inline: 2rem;">Faq</p></a>
            <a href="#contact" class="nav-menu-list"><p>Contact Us</p></a>
        </div>
        <button type="submit" id="nav-button">Sign In</button>
    </div>

    <div  id="nav-body">
        <div id="body1">
            <h1 id="title">Find your <span style="color: #8d2182">music soulmate</span> today</h1>
            <p style="color: #480034; font-size: 1.2rem;">Your music mate is right around the corner!</p>
            <button id="btn-join">Join Now</button>
            <img style="margin: 6.3rem;" src="image/landing2.svg"/>
        </div>
        <div id="body2"  >
            <img src="image/bg-landing1.svg"/>
            <img class="img1"  src="image/landing1.svg"/>
        </div>
        
    </div>

    <hr/>


    <!-- About -->
    <div id="about">
        <div class="about-1">
            <div style="color:#5F0099; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            <h1 style="font-size: 3.5rem;">Welcome to Amusigo</h1>
            <p style="font-size: 1.3rem; ">An overview of Amusigo benefits</p>
            </div>
           
            <div class="about-box1">
                <p class="about-text1">We focus on what is more important to you</p>
                <img class="cassette" src="image/cassette.svg">
            </div>
           
        </div>
        <div class="about-box2">
            <div style="display:flex; justify-content: center;">
                <h1 class="about-text2">WITH US YOU COULD...</h1>
                <img style="margin-top:1.5rem" src="image/headphone.svg">

            </div>
            
            <ul class="about-list2">
                <li>Organize playlists seperately</li>
                <li style="margin-block:1.5rem">Find people with same music taste as you</li>
                <li>Link with music mates through Line</li>
            </ul>
        </div>
    </div>

    <hr/>
    <!-- FAQ -->
    <div id="faq">
        <img src="image/faq.svg"/>
        <div>
          
        </div>

    </div>

    <hr/>
    <!-- Contact -->
    <div id="contact">
        <div>
            <h1 style="color:#843e71; font-size:3.5rem">Get in touch...</h1>
            <form>
                <div class="contact-form">
                    <label>NAME</label>
                    <input type="text" placeholder="Enter your username">

                    <label style="margin-top:3rem">EMAIL</label>
                    <input style="margin-bottom:3rem" type="text" placeholder="Enter your email">

                    <label>MESSAGE</label>
                    <input type="text" placeholder="Send us a message">
                </div>
            

            <button id="btn-join" style="margin-top:4rem"> Submit</button>
            </form>
            
        </div>
        <img src="image/contact.svg"/>
    </div>
</body>


<!-- Footer -->
<div id="footer">
        <div style="margin-left:5rem">
            <ul>
                <p>Home</p>
                <p>About Us</p>
                <p>Contact Us</p>
                <p>FAQ</p>
            </ul>
        </div>
        <div>
            <p>Address </p>
            <p>Sirindhorn International Institute of Technology, Thammasat University, Rangsit Campus, Pathum Thani, 12120</p>
            <p>View on map</p>
        </div>
        <div style="margin-left:5rem">
            <p>Inquiries</p>
            <p>00-000-000</p>
            <p>Amusigo@emai.com</p>
        </div>
        <div>
           <p> Follow us on</p>
           <div style="font-size:1.5rem;">
           <i class="fa-brands fa-facebook"></i>
           <i class="fa-brands fa-instagram"></i>
           <i class="fa-brands fa-line"></i>
           </div>
          
        </div>

    </div>
</html>
