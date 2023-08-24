<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boot strap CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- Font Awsom Icons CDN Link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
     <!-- navbar css -->
     <link rel="stylesheet" href="navbar.css">

     <!-- website Css -->
     <link rel="stylesheet" href="style.css">

    <title>Harsh Portfolio</title>

    <style>
      

    </style>
</head>
<body>
    <?php
        require "navbar.php";
    ?>
 
  
   
    <div class="header">
        <img src="images/baner.jpg" alt="">
    </div>
    <div class="containerbox">

        <!-- About me  -->

        <div class="aboutMe">
            <h1 class="heading">Welcome to my Profile</h1>
            <h3>Hellow...</h3>
            <br>
            <b>

                <h5 style="line-height: 30px; text-align: justify; margin-bottom: 20px;">
                    My name is HARSH I am a web developer,  I have good knowledge of  HTML, CSS, JAVA, JavaScript, PHP, and MySql. I have working experience in diverse areas like Teaching , Graphic Designing , Administration.
                </h5>   
                <br >
                <h5 style="margin-bottom: 20px; line-height: 30px;">
                    Currently Doing Internship at CodSoft as Web Developer. where I am using the skills HTML JavaScript CSS PHP MySql 
                </h5>
                
                <h5 style="margin-bottom: 20px; line-height: 30px;">
                    
                    I build many projects using HTML, CSS, JavaScript, PHP, MySql, BootStrap some of them are -
                    <br>
                    1. - "Teacher's Arrangement Website".
                    <br>
                    
                    2. -I Developed a Responsive website for education academy which is called  
                    <a href="http://abhinandanacademy.in/">Abinandan Academy</a> 
                </h5>
                
                <h5 style="margin-bottom: 20px; line-height: 30px;">
                    
                    I am Skillful in Java with hands-on experience in web development tools. 
                </h5>
                
          
        </b>

        </div>
        <!-- <hr> -->
        

        <!-- Skills Section -->
        <h1 class="heading">My Skills</h1>
        <div class="skills">
                <div class="skillset">
                    
                    <!-- Skill 1 -->
                    <div class="skillbox">
                        
                            <h5 >JAVA</h5    >
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 70%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                    </div>
                        
                    <!-- Skill 2 -->
                    <div class="skillbox">
                        
                        <h5 >HTML</h5    >
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                            </div>
                    </div>
                    <!-- Skill 2 -->
                    <div class="skillbox">
                        
                        <h5 >CSS</h5 >
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                    </div>

                    <!-- Skill 3 -->
                    <div class="skillbox">
                        
                        <h5 >Java Script</h5  >
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div>
                    </div>

                    <!-- Skill 4 -->
                    <div class="skillbox">
                        
                        <h5 >PHP</h5  >
                        <div class="progress">
                            <div class="progress-bar bg-secondary progress-bar-striped" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>

                    </div>

                    <!-- Skill 5 -->
                    <div class="skillbox">
                        
                        <h5 >MYSQL</h5  >
                        <div class="progress">
                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>


                </div>
                <div class="skillsAnimatio">
                    <img src="images/animation1.gif" alt="">
                </div>

        </div>

               <!-- Experience Section -->
           <h1 class="heading">Experience</h1>

           <div class="experience">

                <!-- badge 1 -->
                <div class="experienceBadge">

                    <div class="badgeheader">
                        <h4>Teaching</h4>
                    </div>
                    <div class="badgebody">
                        <img src="images/teacher.png" alt="">
                    </div>
                    <div class="badgeinfo">
                        <p>I have 1 year of experience as computer teacher at the New Horizon public school Muzaffarnagar</p>
                    </div>

                    <div class="badgefoot" style="color: rgb(223, 137, 39);">
                        <h4>1 Year</h4>
                    </div>
                </div>

                <!-- badge 2 -->
                <div class="experienceBadge">

                    <div class="badgeheader">
                        <h5>Graphics Designer</h5>
                    </div>
                    <div class="badgebody">
                        <img src="images/graphics designer.jpg" alt="">
                    </div>
                    <div class="badgeinfo">
                        <p>I worked as Graphic Designer at the doon valley Public School as a graphics designer </p>
                    </div>

                    <div class="badgefoot" style="color: rgb(223, 137, 39);">
                        <h4>1 Year</h4>
                    </div>
                </div>

                <!-- badge 3 -->
                <div class="experienceBadge">

                    <div class="badgeheader">
                        <h4>Administrator</h4>
                    </div>
                    <div class="badgebody">
                        <img src="images/admin.jpg" alt="">
                    </div>
                    <div class="badgeinfo">
                        <p>I have 6 months of Experience of administration as an administration at the Abhinandan Academy </p>
                    </div>

                    <div class="badgefoot" style="color: rgb(223, 137, 39);">
                        <h4>6 Months</h4>
                    </div>
                </div>
              
            

           </div>


       
        <!-- Experience section ends here -->

    </div>

    <div class="footer">

        <div class="socialmedia" style="border-bottom: 1px solid blue;">
            <a href="https://www.linkedin.com/in/harsh-prajapati-hp/" target="_blank"><i class="fa fa-linkedin "></i></a>

            <a href="https://github.com/HARSH811819/CODSOFT.git" target="_blank"><i class="fa fa-github" target="_blank"></i></a>

            <a href="https://www.facebook.com/harsh.hv.906/"><i class="fa fa-facebook-f"  target="_blank"></i></a>

            <a href="https://www.instagram.com/harsh_prajapati_28039/" target="_blank"><i class="fa fa-instagram"  target="_blank"></i></a>

        </div>
        <div class="phNo">

            <!-- <i class="fa fa-mobile-phone m-1" style="font-size:36px"></i> -->
            <i class="fa fa-whatsapp" style="font-size:36px"></i>
            <h3 class="m-1"> +91-7060392552</h3>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="script.js"></script>

</html>