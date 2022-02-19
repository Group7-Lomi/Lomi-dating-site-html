function validatesignup(){
    var user=document.getElementById("username").value;
    var num=document.getElementById("number").value;
    var email=document.getElementById("email").value;
    var pass=document.getElementById("password").value;
    var pass2=document.getElementById("password2").value;
    var form=document.getElementById("form");
  
    if(user!="" && email!=""&& num !=null && pass!=""&& pass2!=""){
        form.addEventListener('submit', (e)=>{
            if(pass===pass2) 
            {
                e.preventDefault()
                document.location.href = "./setuprofile.html";
            }
            else {
                e.preventDefault()
                alert("Password don't match!");                
            }
        })
       
}
}
function signupparttwo(){
    var gender=document.myform.gender;
    var form=document.getElementById("form");
    var gendercheck=false;
    for(var i=0;i<gender.length;i++)
    {
        if(gender[i].checked){
            gendercheck=true;
            break;
        }
    }
    form.addEventListener('submit', (e)=>{
        if(gendercheck===false)
        {
            e.preventDefault();
            alert("Please choose a gender");
        }
        else{
        e.preventDefault()
        document.location.href = "./desiredpartner.html";
    }
        })
    }
    function signuppartthree(){
        var gender=document.myform.gender;
        var form=document.getElementById("form");
        var gendercheck=false;
        for(var i=0;i<gender.length;i++)
        {
            if(gender[i].checked){
                gendercheck=true;
                break;
            }
        }
        form.addEventListener('submit', (e)=>{
            if(gendercheck===false)
            {
                e.preventDefault();
                alert("Please choose a gender");
            }
            else{
            e.preventDefault()
            document.location.href = "./account.html";
        }
            })
        }
function prevPage(){
    window.history.back();
}
