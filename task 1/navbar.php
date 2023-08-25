<?php
    echo '
    <nav class="navbar">
    <div class="navlogo">
        <img src="sources/abhinandan white logo.png" alt="cantload" >
        <h2>ABHINANDAN ACADEMY</h2>
    </div>
    <div class="navlinkBox ">
        <a href="index.php" target="_self" class="links" > <i class="fa fa-home" style="font-size:36px"> </i></a>

        <a  target="_self" class="links courses-tag" >Courses
            <div class="coursebox">
                    <h2 class="course-heading">Courses</h2>

                    <div class="course-list">
                        <div class="academics_ course-category">
                            <h3 class="">XI & XII</h3>
                            
                            <div class="XI">

                                <button type="button" class="coursename">Physics</button>
                                <button type="button" class="coursename">Chemistry</button>
                                <button type="button" class="coursename">Maths</button>
                                <button type="button" class="coursename">Accounts</button>
                                <button type="button" class="coursename">Economics</button>
                            </div>
                            <h3>IX & X</h3>
                            <div class="IX">

                                <button type="button" class="coursename">Maths</button>
                                <button type="button" class="coursename">Science</button>
                                <button type="button" class="coursename">English</button>
                            </div>
                            
                        </div>
                        <div class="competetive_ course-category">
                            <h3>Competetive</h3>
                            <div class="IIT">

                                <button type="button" class="coursename">IIT/JEE</button>
                                <button type="button" class="coursename">NEET</button>
                                <button type="button" class="coursename">CUET</button>
                            </div>
                        
                            </div>
                        </div>
                </div>

            </a>

            <a href="AboutUs.php" target="_self" class="links" >About Us</a>
            <a href="contact.php" target="_self" class="links" >Contact Us</a>
            
        </div>

      
        <button type="button" id="sidenave-open" class="sidenav" onclick="sidenavOpen(this)" ><i class="fa fa-bars" style="font-size:30px"></i></button>
        <button type="button" id="sidenave-close" class="sidenav" onclick="sidenavClose(this)" ><i class="fa fa-close" style="font-size:30px"></i></button>
    </nav>
    
    <nav id="sidenav-container" class="sidenav-container">
        <div id="sidecourse-box" class="sidecourse-box">
            <button id="close-btn-side-course" onclick="side_course_box_close(this)" type="button" ><i class="fa fa-times-circle-o" style="font-size:24px"></i></i></button>
            <!-- close button for course box -->

            <div class="courses-container" id="courses-container">
                <div class="side-course-category ">
                    <h3 class="category-heading">IX & X</h3>
                    <div class="courses_">
                        <button class="side-coursename">Science</button>
                        <button class="side-coursename">Maths</button>
                        
                    </div>
                    <h3 class="category-heading">XI & XI</h3>
                    <div class="courses_">
                        <button class="side-coursename">Physics</button>
                        <button class="side-coursename">Chemistry</button>
                        <button class="side-coursename">Maths</button>
                        <button class="side-coursename">Accounts</button>
                        <button class="side-coursename">Economics</button>
                        
                    </div>
                    
                </div>

                <div class="side-course-category competitive">
                    <h3 class="category-heading">Competitive</h3>
                    <div class="courses_">
                        <button class="side-coursename">IIT/JEE</button>
                        <button class="side-coursename">NEET</button>
                        <button class="side-coursename">CUET</button>
                        
                    </div>
                    
                </div>
            </div>

        </div>
        <div id="sideLink-box" class="sideLink-box">
            <a href="index.php" target="_self" class="side-links" ><i class="fa fa-home" style="font-size:36px"></i></a>

            <a onclick="sidecourseboxOpen(this)"  class="side-links courses-tag" >Courses
            </a>

            <a href="AboutUs.php" target="_self" class="side-links" >About Us</a>
            <a href="contact.php" target="_self"  class="side-links" >Contact Us</a>
            
        </div>
    </nav>
    ';
?>