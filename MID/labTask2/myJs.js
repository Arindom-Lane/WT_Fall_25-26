let name = document.getElementById('nameInput');
let email = document.getElementById('emailInput');
let password = document.getElementById('passInput');
let Cpassword = document.getElementById('passInputConfirm');
let okmsg = document.getElementById('okey');



function btnClick(){

if(email.includes('@') && password === Cpassword){
    okmsg.innerHTML = `SUCCESS! <br> your name: ${name.value} and id: ${email.value}`;
}
else{alert("Validation Failed");
}

if 
    

return false;


}