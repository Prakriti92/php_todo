const form = document.getElementById('form');
form.addEventListener("submit",(e)=>
{
    e.preventDefault();
    if(validateInputs())
    {
        form.submit();
    }
    else
    {
        console.log("Your form has error");
    }     
})

function validateInputs(){
    let errors = 0;
     name1 = document.getElementById('name');
     email = document.getElementById('email');
     password = document.getElementById('password');
     contact = document.getElementById('contact');
     confirm_password = document.getElementById('confirm_password');

     email_error = document.getElementById('email_error');
     password_error = document.getElementById('password_error');
     confirm_password_error = document.getElementById('confirm_password_error');
     name_error = document.getElementById('name_error');

    var email_check = /^([A-Za-z0-9_\-\.])+@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (name1.value == null || name1.value === '')
    {
        errors++;
        name_error.innerHTML ="Name is required";
    } 
    if (!email.value.match( email_check))
    {
        errors++;
        email_error.innerHTML ="Email  is required";

    }  
    if (password.value.length <= 5)
    {
        errors++;
        password_error.innerHTML ="Password must be more than 6 characters";
    }

    if (confirm_password.value != password.value)
        {
            errors++;
            confirm_password_error.innerHTML ="Password and confirm password donot match";
        }
    if (contact.value.length != 10)
        {
            errors++;
            number_error.innerHTML ="Contact must be equal than 10 characters";
        }





    if(errors <= 0){
        return true;
    }
    else{
        return false;
    }
}