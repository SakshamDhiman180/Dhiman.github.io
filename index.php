<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saksham Dhiman - Web Developer, Programmer, ML Enthusiast</title>
    <link rel="stylesheet" href="style.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(function() {
        $('a[href*=\\#]:not([href=\\#])').on('click', function() {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        });
    });
    </script>
<body>
    <video autoplay muted loop id="myVideo">
        <source src="img/videos/bg3.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    <div class="container" style=" position: absolute; background:rgba(0, 0, 0, 0.1) ;"  >
        
        <div id="top" class="sidebar sidebarGo">
            
         <nav>    
             <ul>
                 <li><a href="#home">Home</a></li>
                 <li><a href="#Aboutme">About Me</a></li>
                 <li><a href="#projects">Projects</a></li>
                 <li><a href="#roadmap">Road Map</a></li>
                 <li><a href="#contectme">Contect Me</a></li>
             </ul>
         </nav>

        </div>
        <div id="main" class="main ">
            <div class="hamburger">
                <img class="ham" src="img/ham1.png" alt="ham" width="25">
                <img class="cross" src="img/cross.png" alt="cross" width="23">
            </div>

            <script src="script.js"></script>

        <div id="home" class="infoContainer">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <div class="devinfo">
                   <div class="hello">Hi I am</div>
                   <div class="name">Saksham Dhiman</div>
                   <div class="about">Full-Stack Web-Developer, Tech Enthusiast & Creator</div>
                   <div class="buttons">
                       <button >Download CV </button>
                       <button >Download Resume </button>
                   </div>
        
               </div>
               <div class="devimg"><img src="img/p1img.png" alt="Saksham"></div>
        </div>

        <div class="aboutcontainer" style="margin-left: 3%; background:rgba(0, 0, 0, 0.3); border-radius: 20px;">
        <div id="Aboutme" class="Aboutme">
            <H1>ABOUT ME</H1>
            <p>My name is Saksham Dhiman. I belong to Ambala cantt harayana currently i am doing my 
            under-grads from Chandigarh University. I did my Sn. Secondry and Secondry schooling from 
            Nagpur, Maharashtra.  I am a well-organized, creative and goal oriented 
            graduate possessing excellent communication, problem-solving and
            leadership skills with a flair to explore suitable avenues in Computer Science
            Engineering while developing advanced projects with efficiency and quality.
            Apart From academics, I love sing and play Guitar in my spare time. Also i am huge fan 
            of basketball game. 
            
            <h2 style="margin-left: 10px;">TECHNICAL COMPETENCIES</h2>
            <br>
            <ul class="logos">
                <li><img src="img/aboutme_logo/logo1.png" alt="c&c++"></li>
                <li><img src="img/aboutme_logo/logo2.png" alt="java" style="height:65PX; width:fit-content"></li>
                <li><img src="img/aboutme_logo/logo3.png" alt="pyhton"></li>
                <li><img src="img/aboutme_logo/logo4.png" alt="html,css,js"></li>
                <li><img src="img/aboutme_logo/logo5.png" alt="php"></li>
                <li><img src="img/aboutme_logo/logo6.png" alt="android"></li>
            </ul> 
        </p>
        </div>
        <div class="AboutmeImg"><img src="img/AboutmeImg.png" alt="me">
        </div>
    </div>
    <br>
    <div id="projects" class="project" style="margin-left: 3%; background:rgba(0, 0, 0, 0.5); border-radius: 20px;" >
        <h1 style="margin-left:5%; color: white;">PROJECTS</h1>
        <br>
        
        <ul>
        
            <li><div class="projects">
            <div class="aboutPro"> 
                <H2>Facial Recognition System</H2>
                <br>
                <p>
                    This was a project I’d worked during my 2nd year of my Engg. I used
                    Python Machine learning and OpenCV lib to build this project. 
                    The data is provided in jpg or png Format, then our data is processed 
                    using trainning module then the processed data is thenpassed to the Recognition
                    module which then try to recognize the faces in real time.
                </p>
                <br>
                <br>
                <p>Project Git Link :-</p><br><br>
                <a style="margin-left:20px; color: blue;" target="_blank" href="https://github.com/SakshamDhiman180/Facial-recognition-system">github.com/SakshamDhiman180/Facial-recognition-system</a>
            </div>
            <div class="Proimp"><video src="img/videos/p1.mp4" type="video/mp4" autoplay=true loop="true"></video></div>
        </div></li>
        <br>
        
        <li><div class="projects">
            <div class="aboutPro"> 
                <H2>AI enabled B2B Invoice Management System.</H2>
                <br>
                <p>
                    I build this Project during my trainning with a Company called HighRadius. In this project I designed and Developed a AI enabled B2B Invoice Management
                    System. Using Full-stack Web Applications Development Tools. The purpose for this project
                    was to make a user friendly Invoice management System where User can handel their Invoices 
                    and order-slips, Also they can visualize the data on Pie charts or bar graphs.
                    <br>
                    <br>
                    Due to Company's Non disclosure policy, I cannot share the source code for the project.
                </p>
            
            </div>
            <div class="Proimp"><img src="img/P2.png" alt="p2"></div>
        </div></li>
        
        <li><div class="projects">
            <div class="aboutPro"> 
        
                    <br>
                <H2>UNITY MINI GAME</H2>
                <br>
                <p>
                    This was a experimental project. I was explaoring my self in various filds.
                    and tried unity development tool for the first time to  develop minature game like mario,
                    this was the first game that i build in the unity engine. I named this game "Runner". 
                </p>
                <br>
                <br>
                <p>Project Git Link :-</p><br>
                <a style="margin-left:20px; color: blue;" target="_blank" href="https://connect.unity.com/mg/2d/runer-cou">connect.unity.com/mg/2d/runer-cou</a>
            </div>
            <div class="Proimp"><video src="img/videos/P3.mp4" type="video/mp4" autoplay=true loop="true"></video></div>
        </div></li>
        
        <li><div class="projects">
            <div class="aboutPro"> 
                <H2>VOLTOUR APP</H2>
                <br>
                <p>
                    During 2021 Summer break, Igot a chance to do internship with an NGO 
                    called Ladli Foundation where I was a Part of the Core Technical team for 
                    the Development and Testing of Voltour App(Social Media Volunteering App), Designed
                    and developed front-end using Xml and backend using kotlin.
                    <br>
                    <br>
                    Due to Company's Non disclosure policy, I cannot share the source code for the project.
                </p>
            </div>
            <div class="Proimp"><video src="img/videos/P4.mp4" type="video/mp4" autoplay=true loop="true"></video></div>
        </div></li>
    </ul>
    </div>
    
    
    <div id="roadmap"  class="roadmapimg" style="border-radius: 20px; background:rgba(0, 0, 0, 0.5); margin: 0 0 0 3%;">
        <H1 style="margin-left: 5%; color: white; ">ROADMAP</H1>
            <img src="img/Roadmap.png" alt="roadmap">
        </div>
    <?php
    pre_r($_POST)
    ?>
    <br>
    <br>
<div id="contectme" class="container1">
    <h1 style="margin-left: 5px; color: white;">Contact Form</h1>
  <form method="post" action="action_page.php">
      <br>
      <br>
    <label for="fname">Name</label>
    <input type="text" id="fname" name="Firstname" placeholder="Your name..">

    <label for="Emailid">Email ID</label>
    <input type="email" id="Emailid" name="Email" placeholder="Your Email Id...">
    
    <label for="contectno">Contect Number</label>
    <input type="text" id="contectno" name="contect_no" placeholder="Your Work Contect no.">

    <label for="city">City</label>
    <select id="city" name="city">
      <option value="Gurgaon">Gurgaon</option>
      <option value="Delhi">Delhi</option>
      <option value="Noida">Noida</option>
      <option value="Bangalore">Bangalore</option>
      <option value="Hydarabad">Hydarabad</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Mohali">Mohali</option>
      <option value="Panchkula">Panchkula</option>
      <option value="others...">others...</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <button class="formbtn" type="submit" name="submit" >Submit</button>

  </form>

  <?php  
   
 function pre_r( $array ){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
 }

?>
</div> 

         <footer>
         
         </footer>
        </div>
    </div>
    
</body>
</html>