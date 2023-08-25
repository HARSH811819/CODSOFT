


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

        <!-- Nav bar CSS file -->
        <link rel="stylesheet" href="style.css">

    <title>Abhinandan Academy</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }



        

            /* Nav bar CSS */
          

            .sidenav{
                display: none;
                /* right: 30px; */
                position: absolute;
                /* margin-right: 10px;s  */
            }
            .sidenav:hover{
                border: 1px solid white;
                border-radius: 3px;
            }


          /* Courses List CSS Starts here */
       
            .coursebox{
                display: none;
                border: 1px solid black;
                height: 400px;
                width: 45vw;
                min-width: 300px;
                max-width: 600px;
              
                top: 76px;
                z-index: 10;
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
            /* border: 1px solid red; */

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
          
            width: 100%;
            height: 30px;
            color: black;
          
            display: flex;
            align-items: center;
          }
          
          
   

       
        /* inquery form BOx CSS */
        .formBox{
            border: 1px solid rgb(155, 1, 1);
            width: 100%;
            height:  fit-content;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            /* background-color: black; */
            overflow: hidden;
            flex-direction: column;
        }
        .mapouter{
            border: 1px solid rgb(146, 140, 140);
            border-radius: 2%;
            /* padding: 3px; */
            width: 70vw;
            height: 37vw;
            display: flex;  
            align-items: center;
            box-shadow: 1px 1px 8px 1px;
          
        }
        .queryForm{
            /* border: 3px solid black; */
            width: 70vw;
            min-width: 280px;
            max-width: 800px;
            padding: 30px;
            
            margin-top: 50px;
            border: 1px solid gray;
            border-radius: 5px;
            /* box-shadow: 1px 1px 8px 1px; */
           
        }
        .form-heading{
            /* margin: auto; */
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 3vw;
            width: 100%;
            padding: 3px;
            text-align: center;
            border-bottom: 1px solid rgb(172, 168, 168);
        }
        .gmap_iframe{
            /* border: 2px solid black; */
            border-radius: 30px;
        }
    
        .coursesList{
            display: flex;
            justify-content: start;
            height: fit-content;
            flex-wrap: wrap;
            padding: 15px;
            overflow: hidden;
        }
        .coursefield{
            width: fit-content;
            height: 30px;
            /* border: 1px solid black; */
            padding: 2px;
            margin: 0px 5px 0px 5px;
            font-weight: 600;
        }
        .courseCategoryH{
            width: 100%;
            font-size: 1em;
            font-weight: bold;
        }

         /* responsive code starts here */
         /* media for less than 770px width */
         @media only screen and (min-width:380px) and (max-width: 770px) {
          
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
            /* NAv bar and side nav button CSS */
            .navbar{
                    height: 70px;
            
                    background-color: rgb(14, 14, 71);
                   
                    display: flex;
                    align-items: center;
                    justify-content: start;

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
                font-family:ui-monospace;
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
                    right: 30px;
                    padding: 2px;
                
                }
                

                    /* Form Box Body css */
                    .formBox{
                    /* border: 1px solid rgb(155, 1, 1); */
                    width: 100%;
                    height:  fit-content;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    padding: 10px;
                    /* background-color: black; */
                    overflow: hidden;

                }
                .mapouter{
                    border: 1px solid rgb(146, 140, 140);
                    border-radius: 2%;
                    /* padding: 3px; */
                    width: 95vw;
                    height: 40vh;
                    display: flex;  
                    align-items: center;
                    box-shadow: 1px 1px 8px 1px;
                    margin-bottom: 10px;
                
                }
                .queryForm{
                    /* border: 3px solid black; */
                    width: 95vw;
                    /* min-width: 280px;
                    max-width: 500px; */
                    padding: 30px;
                    margin: 0px;
                    border: 1px solid gray;
                    border-radius: 5px;
                    /* box-shadow: 1px 1px 8px 1px; */
                
                }
                .form-heading{
                    /* margin: auto; */
                    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                    font-size: 5vw;
                    width: 100%;
                    padding: 3px;
                    text-align: center;
                    border-bottom: 1px solid rgb(172, 168, 168);
                }
            
        }


        /* media for less than 380 width */
        @media only screen  and (max-width: 380px){
           
        
          /* Form BOx body CSS */
          .formBox{
            /* border: 1px solid rgb(155, 1, 1); */
            width: 100%;
            height:  fit-content;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 10px;
            overflow: hidden;
            margin-top: 5px;

        }
        .mapouter{
            border: 1px solid rgb(146, 140, 140);
            border-radius: 2%;
            /* padding: 3px; */
            width: 95vw;
            height: 40vh;
            display: flex;  
            align-items: center;
            box-shadow: 1px 1px 8px 1px;
            margin-bottom: 10px;
          
        }
        .queryForm{
            /* border: 3px solid black; */
            width: 95vw;
            /* min-width: 280px;
            max-width: 500px; */
            padding: 30px;
            margin: 0px;
            border: 1px solid gray;
            border-radius: 5px;
            /* box-shadow: 1px 1px 8px 1px; */
           
        }
        .form-heading{
            /* margin: auto; */
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 5vw;
            width: 100%;
            padding: 3px;
            text-align: center;
            border-bottom: 1px solid rgb(172, 168, 168);
        }
    }

      

        /* Sidenav-container CSS */
        /* .sidenav-container{
           
            width: 0px;
            height: 100vh;
            background-color: rgb(255, 255, 255);
      
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            top: 70px;
            transition: width 0.6s ;
        }
        .sideLink-box{
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
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
            background-color: rgb(152, 221, 255);
        }
        #close-btn-side-course{
            float: right;
            margin: 5px;
            border: none;
            display: none;
            background-color: inherit;
            margin: 15px;
        } */
      
    </style>
</head>
<body>
  
    <!-- Nav bar -->
   <?php
    require "navbar.php";
   ?>




    <!-- Google Map -->
    <div class="formBox">
        <div class="mapouter">

            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3473.2909471212784!2d77.71042437548986!3d29.478708575213396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c1b5f86e970bf%3A0x7046b946d9cad56e!2sAbhinandan%20Academy-%20IIT%2FJEE%20Coaching%20%7C%20CBSE%20Coaching%20%7C%20NTSE%20%7C%20CUET%20Coaching!5e0!3m2!1sen!2sin!4v1684760476035!5m2!1sen!2sin" width="100%" height="100%" style="border:0; border-radius: 2%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>


        <!-- inquery Form Starts here -->
        <form action="" class="queryForm" method="post">
            <h1 class="form-heading">INQUIRY FORM</h1>
            <div class="mb-3 form">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Student's Name" required>
            </div>
            <div class="mb-3 form">
                <label for="name" class="form-label">Ph.No.</label>
                <input type="tel" class="form-control" id="phNo" name="phNo" placeholder="+91-1111111111" maxlength="10" required>
            </div>
            <div class="mb-3 form ">
                <label for="name" class="form-label">Courses You want to apply for</label>
                <div class="coursesList border">
                    <span class="courseCategoryH">For IX and X :</span>
                    <div class="coursefield">
                        
                        <input type="checkbox" id="science9th" name="Science9th" value="9th or 10th science">
                        <label for="science9th">Science</label><br>
                    </div>
                    <div class="coursefield">
                        
                        <input type="checkbox" id="english9th" name="english9th" value="english9th">
                        <label for="english9th">English</label><br>
                    </div>
                    <div class="coursefield">
                        
                        <input type="checkbox" id="maths9th" name="maths9th" value="maths9th">
                        <label for="maths9th">Maths </label><br>
                    </div>

                    <span class="courseCategoryH">For XI and XII :</span>
                    
                    <div class="coursefield">
                        
                        <input type="checkbox" id="physics" name="physics" value="physics">
                        <label for="physics">Physics </label><br>
                    </div>
                    <div class="coursefield">
                        
                        <input type="checkbox" id="chemistry" name="chemistry" value="chemistry">
                        <label for="chemistry">Chemsitry</label><br>
                    </div>
                    <div class="coursefield">
                        
                        <input type="checkbox" id="maths11th" name="maths11th" value="maths11th">
                        <label for="maths11th">Maths </label><br>
                    </div>
                    <div class="coursefield">
                        
                        <input type="checkbox" id="biology" name="biology" value="biology">
                        <label for="biology">Biology </label><br>
                    </div>
                    <div class="coursefield">
                        
                        <input type="checkbox" id="accounts" name="accounts" value="accounts">
                        <label for="accounts">Accounts </label><br>
                    </div>
                    <div class="coursefield">
                        
                        <input type="checkbox" id="economics" name="economics" value="economics">
                        <label for="economics">Economics </label><br>
                    </div>

                    <span class="courseCategoryH">Competitive Exams :</span>
                    
                    <div class="coursefield">
                        
                        <input type="checkbox" id="IIT_JEE" name="IIT_JEE" value="IIT_JEE">
                        <label for="IIT_JEE">IIT/JEE </label><br>
                    </div>
                    <div class="coursefield">
                        
                        <input type="checkbox" id="NEET" name="NEET" value="NEET">
                        <label for="NEET">NEET </label><br>
                    </div>
                    <div class="coursefield">
                        
                        <input type="checkbox" id="CUET" name="CUET" value="CUET">
                        <label for="CUET">CUET</label><br>
                    </div>
                </div>
                
            </div>
            <div class="mb-3">
                <label for="concern" class="form-label">Concern</label>
                <textarea class="form-control" id="concern" rows="3"></textarea>
            </div>
            <button type="button" class="btn btn-outline-info">Submit</button>
        </form>
    </div>


    <?php
    require "footer.php";
    ?>
</body>

<script src="javascript.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>