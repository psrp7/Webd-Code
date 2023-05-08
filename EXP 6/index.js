function validateForm() {
    let name = document.forms["myform"]["fname"].value;
    let phno = document.forms["myform"]["phno"].value;
    let adno = document.forms["myform"]["adno"].value;
    let dob = document.forms["myform"]["dob"].value;
    

    
    if (name.length <= 10 || !isNaN(name)|| name=="") {
        alert('Invalid Name');
        return false;
    }
    else if(phno.length>10 || phno.length<10 || isNaN(phno)||phno=="")    
    {
        alert('Invalid Phone Number');
        return false;
    }
    else if(adno.length>12 || adno.length<12 || isNaN(adno)||adno=="")    
    {
        alert('Invalid Aadhar Number');
        return false;
    }
    
    else if(dob=="")
    {
        alert('Invalid Date Of Birth');
        return false;
    }
  
    else
    {
        return true;
    }
}
