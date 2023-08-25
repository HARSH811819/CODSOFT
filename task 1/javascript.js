

// javascript for slideshow 
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    
}



    // function to open side navbar in mobile view
    function sidenavOpen(e){
        document.getElementById("sidenave-close").style.display = "block";
    document.getElementById("sidenave-open").style.display = "none";
    document.getElementById("sidenav-container").style.width = "100vw";
    document.getElementById("sideLink-box").style.display = "flex";
    
}



// function to open side courses box mobile view
function sidecourseboxOpen(e){
    document.getElementById("sidecourse-box").style.height = "100vh";

    document.getElementById("sideLink-box").style.display = "none";
    document.getElementById("close-btn-side-course").style.display = "block";
    document.getElementById("courses-container").style.display = "flex";
    
}   
// function to close side navbar  mobile view
function sidenavClose(e){
    document.getElementById("sidenave-close").style.display = "none";
    document.getElementById("sidenave-open").style.display = "block";
    document.getElementById("sidenav-container").style.width = "0px";
    document.getElementById("sideLink-box").style.display = "none";
    
    document.getElementById("close-btn-side-course").style.display = "none";
    document.getElementById("sidecourse-box").style.height = "0px";
    document.getElementById("courses-container").style.display = "none";
    
    
}
// document.getElementById("courses-container").style.display = "flex";

// function to close side courses box mobile view
function side_course_box_close(e){
    document.getElementById("close-btn-side-course").style.display = "none";
    document.getElementById("sideLink-box").style.display = "flex";
    document.getElementById("sidecourse-box").style.height = "0px";
    document.getElementById("courses-container").style.display = "none";
    
   }
