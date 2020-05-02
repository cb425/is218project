function validateField() {

    var x, text, letter;
    text = "";

    //Email
    var ifFilled, theCount;
    ifFilled=true;
    theCount = 0;
    x = document.getElementById("email").value;


    // If there are more than one @ symbol it is invalid, or if "@" is at the beginning or end of the input
    for (i=1; i < x.length; i++)
    {
        letter = x.charAt(i);
        if (letter == "@")
        {
            if (theCount == 0)
            {
                theCount++;
            }
            else if (theCount > 0)
            {
                text = "Not a valid email address";
            }
        }
    }
    if (x.indexOf("@") == 0 || x.indexOf("@") == x.length-1)
    {

        text = "Not a valid email address";
    }
    var period;
    period = x.indexOf('.');

    alphabet = "abcdefghijklmnopqrstuvwxyz";
    if (x.indexOf(" ") != -1 || period == -1 || period == x.length-1
        || alphabet.indexOf(x.substr(period-1,1)) == -1 || alphabet.indexOf(x.substr(period+1,1)) == -1)
    {
        text = "Not a valid email address";
    }

    //Checks if input is empty
    if(x.length == 0)
    {
        text = "Email must not be empty";
    }

    //Displays any errors of email input if there are any
    document.getElementById("emailvalidate").innerHTML = text;

    //********************************************

    // First name
    x = document.getElementById("name").value;
    text = "";
    // If name contains a number it is not valid
    for (i=0; i < x.length; i++)
    {
        letter = x.charAt(i);
        if("0123456789".indexOf(letter) > -1)
        {
            text = "First Name must not contain a number";
        }

    }
    //Checks if input is empty
    if(x.length == 0)
    {
        ifFilled=false;
    }
    //Displays any errors of first name input if there are any
    document.getElementById("forvalidate").innerHTML = text;

    //*************************************************************************
    // Last name
    x = document.getElementById("lastname").value;
    text = "";
    // If name contains a number it is not valid
    for (i=0; i < x.length; i++)
    {
        letter = x.charAt(i);
        if("0123456789".indexOf(letter) > -1)
        {
            text = "Last Name must not contain a number";
        }

    }

    if(x.length == 0)
    {
        ifFilled=false;
    }
    //Displays any errors of last name input if there are any
    document.getElementById("forlastvalidate").innerHTML = text;

    //************************************************************************
    // Last name
    x = document.getElementById("lastname").value;
    text = "";
    // If name contains a number it is not valid
    for (i=0; i < x.length; i++)
    {
        letter = x.charAt(i);
        if("0123456789".indexOf(letter) > -1)
        {
            text = "Last Name must not contain a number";
        }

    }

    if(x.length == 0)
    {
        ifFilled=false;
    }
    //Displays any errors of last name input if there are any
    document.getElementById("forlastvalidate").innerHTML = text;

    //************************************************************************
    if(ifFilled == false)
    {
        document.getElementById("forlastvalidate").innerHTML = "All text fields must be filled";
    }
}


function reset() {
    //resets form when user clicks cancel button
    document.getElementById("myForm").reset();
}