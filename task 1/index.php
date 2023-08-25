<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Boot strap CDN link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Font awsom icons link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Option 1: Include in HTML -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
        <script src="https://use.fontawesome.com/your-embed-code.js"></script>

           <!-- Font awsom icons link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Option 1: Include in HTML -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script src="https://use.fontawesome.com/your-embed-code.js"></script>

        <!-- website css Style sheet -->
        <!-- <link rel="stylesheet" href="style.css"> -->

        <!-- Slideshow CSS -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <title>Abhinandan Academy</title>
        <style>
         /* Scroll Bar designing */
            /* width */
    
            body{
                /* font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
                /* background-color: red; */
                background-image: url('bg_image.jpg');
    
                /* Full height */
                height: 100%; 
    
                /* Create the parallax scrolling effect */
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
              }
            ::-webkit-scrollbar {
                width: 1px;
                    
                }   
    
                /* Track */
                ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px grey; 
                border-radius: 10px;
                }
                
                /*  */
                /* Handle */
                ::-webkit-scrollbar-thumb {
                background: rgb(32, 100, 195); 
                border-radius: 10px;
                }
    
                /* Handle on hover */
                ::-webkit-scrollbar-thumb:hover {
                background: #000000; 
                }
    
    
                /* Nav bar CSS */
                .navbar{
                    height: 120px;
                    /* border: 1px solid rgb(155, 17, 17); */
                    background-color: rgb(14, 14, 71);
                    /* padding: 0px 10vw 0px 10vw; */
                    display: flex;
                    align-items: center;
                    justify-content: start;
                    position: sticky;
                    top: 0px;
                    z-index: 100;
    
                }
                .navlogo{
                    /* border: 1px solid black; */
                    width: 50%;
                    height: 90%;
                    display: flex;
                    /* border: 1px solid red; */
                    align-items: center;
                    margin-left: 50px;
                }
                .navlogo img{
                    /* border: 1px solid red; */
                    width: 100px;
                    height: 100px;
                }
                .navlogo h2{
                    margin-left: 2vw;
                    color: white;
                /* font-family: ui-monospace; */
                font-family:'Times New Roman', Times, serif !important;
                font-size: 2vw;
                }
                .navlinkBox{
                    /* border: 1px solid red; */
                    width: 35%;
                    display: flex;
                    flex-wrap: wrap;
                    align-items: center;
                    margin-left: 50px;
                }
                .links{
                    text-decoration: none;
                    
                    color: white;
                    margin: 15px;
                    font-size: 1em;
                    padding: 3px;
    
                }
                .links:hover{
                    border: 2px solid white;
                    color: white;
                    border-radius: 3px;
                }
    
                .sidenav{
                    display: none;
                    /* right: 30px; */
                    position: absolute;
                    right: 30px;
                    /* margin-right: 10px;s  */
                }
                .sidenav:hover{
                    border: 1px solid white;
                    border-radius: 3px;
                }
    
    
              /* Courses List Scc Starts here */
           
                .coursebox{
                    display: none;
                        border: 1px solid gray;
                    height: 400px;
                    width: 45vw;
                    min-width: 300px;
                    max-width: 600px;
                    /* margin-right: 20px; */
                    /* right: 10vw; */
                    top: 76px;
                    z-index: 100;
                    background-color: rgba(255, 255, 255, 0.9);
                    border-radius: 3px;
    
              }
              .courses-tag:hover .coursebox{
                  
                display: flex;
                position:absolute;  
                justify-content: start;
                flex-direction: column;
              }
              .course-list{
                display: flex;
                width: 100%;
                height: 80%;
                color: #000000;
    
         
    
              }
              .academics{
                border-right: 1px dotted black;
              }
              .course-category{
                width: 50%;
                height: 100%;
                flex-wrap: wrap;
             
                margin: 3px;
                padding: 3px;
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                justify-content: start;
                align-items: flex-start;
              }
              .XI, .IX, .IIT{
                display: flex;
                flex-wrap: wrap;
                width: 100%;
                height:  fit-content;
          
              }
              .coursename{
                background-color: white;
                border: none;
                margin: 3px;
              }
             .coursename:hover{
                color: red;
             }
              .course-heading{
                border-bottom: 2px dashed black ;
                /* border: 1px solid black; */
                width: 100%;
                height: 30px;
                color: black;
                /* padding: 30px; */
                display: flex;
                align-items: center;
              }
              
              
          
    
             /* Sidenav-container CSS */
             .sidenav-container{
                /* display: none; */
                width: 0px;
                height: 100vh;
                background-color: rgb(255, 255, 255);
                /* position: fixed; */
                position: fixed;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                top: 70px;
                transition: width 0.6s ;
                z-index: 1100;
            }
            .sideLink-box{
                display: none;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                /* border: 1px solid black; */
                height: 70vh;
                width: 80vw;
            }
            #sidenave-close{
                display: none;
            }
            .side-links{
                text-decoration: none;
                font-weight: 800;
                font-size: larger;
                color:  rgb(17, 5, 111);
                margin-bottom:10px;
    
            }
            .sidecourse-box{
                width: 100%;
                height: 0px;
                transition: height 0.6s;
                display: flex;
                flex-direction: column;
                align-items: center;
                background-color: rgb(152, 221, 255);
                z-index: 1500 !important;
            }
            #close-btn-side-course{
                float: left;
                border: 2px solid red;
                margin: 5px;
                border: none;
                display: none;
                background-color: inherit;
                margin: 15px;
                
            }
            .courses-container{
                display: none;
                flex-direction: column;
                align-items: center;
            }
            .side-course-category{
                /* border: 1px solid red; */
                width: 90vw;
                height: fit-content;
                display: flex;
                flex-direction: column;
                align-items: start;
            }
            .category-heading{
                font-weight: 800;
                align-self: flex-start;
                margin-bottom: 10px;
            }
            .side-coursename{
                border: none;
                font-weight: 600;
                color: rgb(15, 15, 108);
                background-color: inherit;
                font-size: large;
                margin-right: 15px;
    
            }
    
            
           
         /* Social Media container */
         .link-container{
            display: flex;
            justify-content: start;
            align-items: center;
                border: 1px solid rgb(203, 202, 202);
                background-color: rgba(202, 197, 197, 0.7);
                height: 50px ;
                width: 120px;
                border-radius: 20px 0px 0px 20px;
                margin: 3px;
                position: fixed;
                /* top: 120px; */
                right: 0px;
                width: 50px;
                transition: width 0.6s;
                z-index: 1000;
                overflow: hidden;
            }
        
            .link-container img{
                width: 40px;
                margin: 0px 3px 0px 5px;
            }
            .link-name{
                font-weight: 700;
            }
            .facebook{
                top: 120px;
            }
            .insta{
                top: 173px;
            }
            .youtube{
                top: 226px;
                
            }
            .link-container:hover{
                width: 120px;
                background-color: rgb(139, 248, 248);
            }
       
                      
             /* banner-container CSS */
             .banner-container{
                display: flex;
                justify-content: space-around;
                align-items: center;
                margin: auto;
               
                /* border: 1px solid rgb(184, 180, 180); */
                width: 100vw;
                max-width: 2000px;
                height: 60vh;
                           
                margin-top: 1px;
                /* background-color: #eec0c6; 
                 background-image: linear-gradient(315deg, #eec0c6 0%, #7ee8fa 74%); */
              
            }
            .banner-side-container{
                width: 25%;
                height: 100%;
                overflow-y: scroll;
                             
            }
            .Event-slides-container{
                width: 50%;
                overflow: hidden;
                display: flex;
                align-items: center;
             
            }
            .banner-inner-container{
            
                height: 100%;
              
            }
            .rightbox{
                /* border: 3px solid red !important; */
            } 
    
    
            
            /* responsive code starts here */
            /* media for less than 770 width */
            @media only screen and (min-width:380px) and (max-width: 770px) {
                .navbar{
                        height: 70px;
                        /* background-color: rgb(14, 14, 71); */
                        display: flex;
                        align-items: center;
                        justify-content: start;
                        
    
                    }
                     /* SocialMedia Links */
                     .facebook{
                        top: 70px;
                    }
                    .insta{
                        top: 122px;
                    }
                    .youtube{
                        top: 174px;
                        
                    }
                    .coursebox{
                        display: none;
                    border: 1px solid black;
                    height: 400px;
                    width: 45vw;
                    min-width: 300px;
                    max-width: 600px;
                    /* margin-right: 20px; */
                    top: 76px;
                    right: 10vw;
                    z-index: 10;
                    background-color: rgba(255, 255, 255, 0.9);
                    border-radius: 3px;
                    
                }
                .navlogo{
                        width: 50%;
                        height: 90%;
                        display: flex;
                        /* border: 1px solid red; */
                        align-items: center;
                        margin-left: 30px;
                    }
                    .navlogo img{
                        width: 60px;
                        height: 60px;
                        /* border: 1px solid red; */
                    }
                    .navlogo h2{
                    /* border: 1px solid red; */
                    color: white;
                    font-size: 100%;
                    margin: 0px 0px 0px 20px;
                    /* font-family:ui-monospace; */
                    font-family:'Times New Roman', Times, serif !important;
                    }
              .navlinkBox{
                display: none;  
              }
              .sidenav{
                border: none;
                background-color: rgba(0, 0, 0, 0);
                color: white;
                display: block;
                position: absolute;
                right: 50px;
                /* margin-right: 20px; */
              }
    
    
               /* Slide container */
               .banner-container{
                width: 100%;
                height: fit-content !important;
                   display: flex;
                    flex-direction: column;
                    /* background-color: aquamarine; */
                    margin-top: 1px;
         
               }
       
                .Event-slides-container{
                width: 100% !important;
                height: fit-content !important;
                overflow: hidden;
                order: 1;
                display: flex;
                align-items: start;
                /* border: 3px solid rgb(255, 11, 11); */
             
            }
    
            .banner-side-container{
                width: 100% !important;
                height: fit-content !important;
                /* overflow-y: scroll; */
                /* border: 1px solid black; */
                order: 2;
                margin-bottom: 10px
            }
          
            
    
               /* Footer Css Starts Here */
               .footer{
              
                background: rgb(2,0,36);
                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,17,59,1) 100%, rgba(178,34,107,1) 100%);
                height: 400px !important;
                min-height: 400px;
                margin-top: 50px;
                width: 100%;
          
            }
                /* Footer Css Starts Here */
                .footer{
              
                background: rgb(2,0,36);
                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,17,59,1) 100%, rgba(178,34,107,1) 100%);
                min-height: 400px !important;
                height: 400px;
                margin-top: 50px;
                width: 100%;
            }
               
            }
    
          
    
    
            /* media for less than 380 width */
            @media only screen  and (max-width: 380px){
               
             
                .navbar{
                        height: 70px;
                        
                        background-color: rgb(14, 14, 71);
                       
                        display: flex;
                        align-items: center;
                        justify-content: start;
    
                    }
    
                    /* SocialMedia Links */
                    
                    .facebook{
                        top: 70px;
                    }
                    .insta{
                        top: 122px;
                    }
                    .youtube{
                        top: 174px;
                        
                    }
                .navlogo{
                  
                  width: 30%;
                  height: 90%;
                  display: flex;
            
                  align-items: center;
                  margin-left: 30px;
              }
              .navlogo img{
                  width: 50px;
                  height: 50px;
              }
    
              .navlogo h2{
                  /* border: 1px solid red; */
                  color: white;
                  font-size: 100%;
                  margin: 0px 0px 0px 10px;
                  /* font-family:ui-monospace; */
                  font-family:'Times New Roman', Times, serif !important;
                  }
    
                .navlinkBox{
                display: none;
                
              }
    
              .sidenav{
                border: none;
                background-color: rgba(0, 0, 0, 0);
                color: white;
                position: absolute;
                display: block;
                right: 30px;
                /* margin-right: 20px; */
              }
    
                 /* Baner Container Css For 380 width */
            .banner-container{
                width: 100%;
                /* max-width: 2000px !important; */
                height: fit-content !important;
                   display: flex;
                    flex-direction: column;
                    /* background-color: aquamarine; */
                    margin-top: 1px;
         
               }
       
                .Event-slides-container{
                width: 100% !important;
                height: fit-content !important;
                overflow: hidden;
                order: 1;
                display: flex;
                align-items: start;
                /* border: 3px solid rgb(255, 11, 11); */
             
            }
    
            .banner-side-container{
                width: 100% !important;
                height: fit-content !important;
                /* overflow-y: scroll; */
                border: 1px solid black;
                order: 2;
                margin-bottom: 10px
            }
          
               .rightbox{
                /* border: 3px solid red !important; */
            }
    
    
               /* Footer Css Starts Here */
               .footer{
            
                background: rgb(2,0,36);
                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,17,59,1) 100%, rgba(178,34,107,1) 100%);
                min-height: 400px !important;
                height: 400px;
                margin-top: 50px;
                width: 100%;
            }
             
            }
    
    
            /* Footer Css Starts Here */
            .footer{
             
                background: rgb(2,0,36);
                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,17,59,1) 100%, rgba(178,34,107,1) 100%);
                height: 300px;
                margin-top: 50px;
                width: 100%;
                display: flex;
                flex-direction: column;
             
                border-radius: 20px 20px 0px 0px;
            }
            .footer-info{
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
                    width: 100%;
                    height: 50%;
                    padding: 5px;
                    /* border: 3px solid red; */
            }
            .fa-courses{
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
            }
            .fa-course-name{
                color: white;
                margin-right: 10px;
            }
    
    
            .footer-contact-box{
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
              
                height: 50%;
            }
            .footer-contactNo{
                /* border: 3px solid rgb(255, 255, 255); */
                display: flex;
                
                justify-content: center;
                flex-wrap: wrap;
                flex-direction: column;
                align-items: center;
                width: fit-content;
                color: white;
            }
            .phoneNo{
                font-size: 1.6em;
                
            }
            .footer-socialmedia{
                display: flex;
                height: fit-content;
                width: fit-content;
                margin-bottom: 5px;
                /* border: 2px solid red; */
            }
            .footer-socialmedia a{
                text-decoration: none;
            }
            .fa-iconbox{
                display: flex;
                align-items: center;
                justify-content: center;
                width: 50px;
                height: 50px;
                border: 1px solid white;
                border-radius: 5px;
                margin: 0px 5px 0px 5px;
            }
    
    

        
       
        
        </style>
    </head>
    <body>      

        <!-- Nav bar -->
        <?php
            require "navbar.php";
        ?>


             <!-- Social Media links -->
        <a href="https://www.facebook.com/search/top?q=abhinandan%20academy%20-%20muzaffarnagar" target="_blank" >

            <div class="link-container facebook">
                <img src="sources/Facebook.png" alt="">
                <span class="link-name">Facebook</span> 
                
            </div>
        </a>
        
        <a class="media-link" href="https://www.instagram.com/abhinandan.academy/" target="_blank" >

            
            <div class="link-container insta">
                <img src="sources/Insta.png" alt=""> 
                <span class="link-name">instagram</span> 
                
            </div>
        </a>
        
        <a class="media-link" href="https://www.youtube.com/@abhinandan.academy" target="_blank" >
            <div class="link-container youtube">
                <img src="sources/Youtube.png" alt=""> 
                <span class="link-name">Youtube</span> 
            </div>
        </a>
        
        <!-- Banner and Information Container -->
        <section class="banner-container">

            <div class="basic-info banner-side-container banner-inner-container">
                <!-- Accordian Starts here -->
                <div class="accordion accordion-flush w-100" id="accordionFlushExample">

                    <!-- Accourdian 1  ClassRoom Programs-->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <!--Heading Accordion Item #1 -->
                          ClassRoom Programs (IX & X)
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"> <code></code> 
                                <h3 style="color: rgb(212, 21, 165); font-weight: 600;">Mathematics </h3>
                                <h3 style="color: rgb(21, 21, 165); font-weight: 600;">Science</h3>
                                <h3 style="color: rgb(21, 21, 165); font-weight: 600;">S.St</h3>
                                <h3 style="color: rgb(21, 21, 165); font-weight: 600;">English</h3>
                            </div>
                        </div>
                    </div>
                
                    <!-- Accourdian 2 Competitive Programs-->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <!-- Heading Accordion Item #2 -->
                                ClassRoom Programs (XI & XII)
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"> <code></code>
                                <h3 style="color: rgb(21, 21, 165); font-weight: 600;">Physics</h3>
                                <h3 style="color: rgb(21, 21, 165); font-weight: 600;">Chemistry</h3>
                                <h3 style="color: rgb(21, 21, 165); font-weight: 600;">Mathematics</h3>
                                <h3 style="color: rgb(21, 21, 165); font-weight: 600;">Accounts</h3>
                                <h3 style="color: rgb(21, 21, 165); font-weight: 600;">Economics & BST</h3>
                                
                            </div>
                        </div>
                        </div>
                        
                        <!-- Accourdian 3 Integrated Programs-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                       <!-- Heading Accordion Item #3 -->
                                    Competitive Programs
                                
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> <code></code> 
                                    <h3 style="color: rgb(21, 21, 165); font-weight: 600;">IIT/JEE</h3>
                                    <h3 style="color: rgb(21, 21, 165); font-weight: 600;">NEET</h3>
                                    <h3 style="color: rgb(21, 21, 165); font-weight: 600;">CUET</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Accourdian 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                       <!-- Heading Accordion Item #4 -->
                                    Integrated Programs
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"><code></code>
                                    <h4 style="font-weight: 700; color: rgb(20, 20, 132);">IIT-JEE & School Integrated Programs</h4>
                                    <span>
                                        <h6 style="font-size: large; color: rgb(46, 83, 148); font-weight: 600;">TWO YEAR INTEGRATED SCHOOL PROGRAM</h6>

                                           <p style="color: rgb(179, 24, 24);">

                                               for JEE Main & Advanced
                                               Transformational Program
                                               <br>
                                               For Students Presently in Class X (going to XI)

                                            </p>
                                               <hr style="color: red;">
                                               <p style="color: red;">

                                                   Synchronized study for JEE Advanced + JEE Main + XII Boards + Other Engineering Entrance Exams + Various International Olympiads and national level scholastic Exam. All Goals are achieved within the school Schedule
                                                </p>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Accourdian 5 -->
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                               <!-- Heading Accordion Item #5 -->
                               <span style="color: rgb(23, 23, 143); font-weight: 600;">

                                   Why ABHINANDAN ACADEMY ?
                                </span>
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"> <code></code>
                            
                            </div>
                        </div>
                        </div>


                  </div>
                  <!-- Accordian ends here -->
            </div>


            <div class="Event-slides-container banner-inner-container">
                <!-- Slides Will be here -->
                <!-- <div class="w3-content w3-section" style="max-width:100%">
                    <img class="mySlides w3-animate-fading" src="galary/flyer.jpg" style="width:100%">
                    <img class="mySlides w3-animate-fading" src="galary/WhatsApp Image 2023-05-19 at 22.16.05.jpg" style="width:100%">
                    <img class="mySlides w3-animate-fading" src="galary/flyer.jpg" style="width:100%">
                    <img class="mySlides w3-animate-fading" src="galary/WhatsApp Image 2023-05-19 at 22.16.053.jpg" style="width:100%">
                    <img class="mySlides w3-animate-fading" src="galary/flyer.jpg" style="width:100%">
                </div> -->
                
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- <img src="..." class="d-block w-100" alt="..."> -->
                            <img class="d-block w-100" src="galary/flyer.jpg" style="width:100%">
                        </div>
                        <div class="carousel-item">
                            <!-- <img src="..." class="d-block w-100" alt="..."> -->
                            <img class="d-block w-100" src="galary/WhatsApp Image 2023-05-19 at 22.16.012.jpg" style="width:100%">
                        </div>
                        <div class="carousel-item">
                            <!-- <img src="..." class="d-block w-100" alt="..."> -->
                            <img class="d-block w-100" src="galary/WhatsApp Image 2023-05-19 at 22.16.053.jpg" style="width:100%">
                        </div>
                     
                        <div class="carousel-item">
                            <!-- <img src="..." class="d-block w-100" alt="..."> -->
                            <img class="d-block w-100" src="galary/WhatsApp Image 2023-05-19 at 22.16.065.jpg" style="width:100%">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0);"></span>
                      <span class="visually-hidden " style="color: brown;background-color: brown; border: 3px solid red;">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>


            </div>


            <div class="rightbox banner-side-container banner-inner-container" style="display: flex; align-items: end; justify-content: center; background-color: rgb(255, 255, 255);">
                
                <img class="" src="sources/vid1.gif" style="width: 100%; " >
                
            </div>
        </section>
    

        <?php
        require "footer.php";
        ?>
        

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <script src="javascript.js"></script>
    <!-- Events Slideshow JavaScript -->
   
</html>