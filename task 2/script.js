let opennavbtn =  document.getElementById("opennav");
let closenavbtn =  document.getElementById("closenav");

//   function to open side nav
function opennav(e){
  opennavbtn.style.display = "none";
  closenavbtn.style.display = "flex";
  sidenavbox.style.width = "100%";
  
  sidenavLinkbox.style.width = "80%";
  
}
//   function to close side nav
  function closenav(e){
      opennavbtn.style.display = "flex";
      closenavbtn.style.display = "none";
      sidenavbox.style.width = "0px";
     
      sidenavLinkbox.style.width = "0px";
   
      
  }