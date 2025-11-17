let name = document.getElementById('nameInput');
let email = document.getElementById('emailInput');
let password = document.getElementById('passInput');
let Cpassword = document.getElementById('passInputConfirm');
let okmsg = document.getElementById('okey');



function btnClick(){

if(email.value.includes('@') && password.value === Cpassword.value){
    okmsg.innerHTML = `SUCCESS! <br> your name: ${name.value} and id: ${email.value}`;
    return false;
}
else{
    
    alert("Validation Failed");
    return false;
}

}