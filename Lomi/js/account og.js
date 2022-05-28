function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  function logout(){
    window.location.replace("index.html");
    window.location.replace("index.html");
    window.location.replace("index.html");
    window.location.replace("index.html"); 
    return false;
  }
  function logout2(){
    window.location.replace("../index.html");
    window.location.replace("../index.html");
    window.location.replace("../index.html");
    window.location.replace("../index.html"); 
    return false;
  }
function like1(){
  var contain =document.getElementsByClassName("likeButton1");
  contain.style.add("color:black;");
  document.getElementsByClassName("likeButton2").classList.remove("liked");
}
function like2(){
  var contain =document.getElementsByClassName("likeButton2");
  contain.classList.add("liked");
  document.querySelector("likeButton1").classList.remove("liked");
}