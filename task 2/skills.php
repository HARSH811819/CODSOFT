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

            <!-- navbar css -->
            <link rel="stylesheet" href="style.css">

    <title>About</title>
</head>
<body>
    <?php
        require "navbar.php";
        ?>
        <h1>skills</h1>
        <div class="containerbox">
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
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="script.js"></script>
</html>