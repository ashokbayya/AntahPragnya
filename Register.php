<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
        <head>
            <title>Registration</title>
            <link rel="stylesheet" type="text/css" href="css/Style_Registration.css">
            <script>
                function validRegister()
                {
                    if(document.Rform.Full_Name.value=== "")
                    {
                        alert("Please enter full name");
                        document.Rform.Full_Name.focus();
                        return false;
                    }
                    if(document.Rform.Gender.value=== "")
                    {
                        alert("Please enter full name");
                        document.Rform.Gender.focus();
                        return false;
                    }
                    if(document.Rform.College.value=== "")
                    {
                        alert("Please enter college full name");
                        document.Rform.College.focus();
                        return false;
                    }
                    var mail_pattern=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    if((document.Rform.Email_Id.value)=== "")
                    {
                        alert("Please enter email id");
                        document.Rform.Email_Id.focus();
                        return false;
                    }
                    if(mail_pattern.test(document.Rform.Email_Id.value)=== false)
                    {
                        alert("Please enter valid email id");
                        document.Rform.Email_Id.focus();
                        return false;
                    }
                    if(document.Rform.Phone.value=== "")
                    {
                        alert("Please enter phone number");
                        document.Rform.Phone.focus();
                        return false;
                    }
                    if(isNaN(document.Rform.Phone.value)||document.Rform.Phone.value.indexOf(" ")!== -1)
                    {
                        alert("Please enter valid mobile number");
                        document.Rform.Phone.focus();
                        return false;
                    }
                    if(document.Rform.Phone.value.length>10||document.Rform.Phone.value.length<10)
                    {
                        alert("Please enter 10 digit mobile number");
                        document.Rform.Phone.focus();
                        return false;
                    }
                    if(!(document.Rform.Phone.value.charAt(0)==="9"||document.Rform.Phone.value.charAt(0)==="8"||document.Rform.Phone.value.charAt(0)==="7"||document.Rform.Phone.value.charAt(0)==="6"))
                    {
                        alert("Please enter mobile number starting with 9 or 8 or 7 or 6(jio)");
                        document.Rform.Phone.focus();
                        return false;
                    }
                    if(document.Rform.Username.value==="")
                    {
                        alert("Please enter Username");
                        document.Rform.Username.focus();
                        return false;
                    }
                    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
                    if(document.Rform.Create_Password.value==="")
                    {
                        alert("Create a password");
                        document.Rform.Create_Password.focus();
                        return false;
                    }
                    if (document.Rform.Create_Password.value.length<6)
                    {
                        alert("Password should be minimum 6 characters");
                        document.Rform.Create_Password.focus();
                        return false;
                    }
                    if(re.test(document.Rform.Create_Password.value))
                    {
                        alert("Password must contain atleast one number, one lower case and one upper case letter");
                        return false;
                    }
                    if((document.Rform.Create_Password.value)!== (document.Rform.Confirm_Password.value))
                    {
                        alert("Passwords doesn't match");
                        return false;
                    }
                return true;
                }
            </script>
        </head>
        <body>
                <div id="head"><h1>Regitration Form</h1></div>
                <div class="backdrop">
                        <div class="form">
                                <form method="POST" action=""  name="Rform" onsubmit= "return validRegister();">
                                        <img class="icons" src="css/images/username_icon.jpg" height="39" width="55">
                                        <input class="bar" type="text" name="Full_Name" placeholder="Enter full name"><br>
                                        <img class="icons" src="css/images/username_icon.jpg" height="39" width="55">
                                        <select class="bar" name="Gender" >
                                                <option value="select gender" disabled selected>Select your Gender</option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                                <option value="O">Other</option>
                                        </select><br>
                                        <img class="icons" src="css/images/username_icon.jpg" height="38" width="55">
                                        <input class="bar" type="text" name="College" placeholder="Enter college full name"><br>
                                        <img class="icons" src="css/images/username_icon.jpg" height="38" width="55">
                                        <input class="bar" type="text" name="Email_Id" placeholder="Enter mail Id"><br>
                                        <img class="icons" src="css/images/username_icon.jpg" height="38" width="55">
                                        <input class="bar" type="text" name="Phone" placeholder="Enter phone number"><br>
                                        <img class="icons" src="css/images/username_icon.jpg" height="38" width="55">
                                        <input class="bar" type="text" name="Username" placeholder="Enter a new username"><br>
                                        <img class="icons" src="css/images/username_icon.jpg" height="38" width="55">
                                        <input class="bar" type="password" name="Create_Password" placeholder="Give a password(not less than 8 charaters)"><br>
                                        <img class="icons" src="css/images/username_icon.jpg" height="38" width="55">
                                        <input class="bar" type="password" name="Confirm_Password" placeholder="Confirm your password"><br>
                                        <input type="checkbox" name="Terms">
                                        I accept<a href="terms&conditons"> Terms & Conditions</a> of AntahPragnya<br>
                                        <input id="submit" type="submit" name ="submit" value="submit">
                                </form>
                        </div>
                </div>
        </body>
</html>
