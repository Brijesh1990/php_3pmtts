function valid()
{
    if(document.myForm.name.value == "")
    {
        alert("Please enter your name.");
        document.myForm.name.focus();
        return false;
    }

    // regular expression to validate alphabetic character only
    var namePattern = /^[a-zA-Z\s]+$/;
    if(!namePattern.test(document.myForm.name.value))
    {
        alert("Name can only contain alphabetic characters and spaces.");
        document.myForm.name.focus();
        return false;
    }
    if(document.myForm.email.value == "")
    {
        alert("Please enter your email.");
        document.myForm.email.focus();
        return false;
    }

    // regular expression to validate email format
    var em= /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if(!em.test(document.myForm.email.value))
    {
        alert("Please enter a valid email address.");
        document.myForm.email.focus();
        return false;
    }

    if(document.myForm.age.value == "")
    {
        alert("Please enter your age.");
        document.myForm.age.focus();
        return false;
    }

    
    // regular expression only for numbers
    var agePattern = /^\d+$/;
    if(!agePattern.test(document.myForm.age.value))
    {
        alert("Age must be a number.");
        document.myForm.age.focus();
        return false;
    }
    return true;
}