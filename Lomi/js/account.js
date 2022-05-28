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
    for(const i=0;i<20;i++){
    window.location.replace("index.html");
    return false;
    }
  }
  function logout2(){
    for(const i=0;i<20;i++){
      window.location.replace("../index.html");
    }
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
function addText(ev){
	ev.preventDefault();
	var bubble = document.getElementById("usermsg").value;
	var div = document.createElement("div");
	div.innerHTML = bubble;
	const att = document.createAttribute("class");
	att.value ="box box-right sb1";
	div.setAttributeNode(att);
	var chatBox = document.getElementById("chatbox");
	chatBox.appendChild(div);
	document.querySelector("form").reset();
	automatedResponse();
}
function automatedResponse(){
	var div = document.createElement("div");
	div.innerHTML = "This is an auto-mated Response";
	const att = document.createAttribute("class");
	att.value ="box sb2";
	div.setAttributeNode(att);
	var chatBox = document.getElementById("chatbox");
	chatBox.appendChild(div);
}