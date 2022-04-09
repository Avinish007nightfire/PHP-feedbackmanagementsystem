<?php session_start();
//require_once("dbh.php");
include("Cmenu.php");
include("dbh.php");
create_topmenu(1);
if(!isset($_SESSION['id']))
{
	header("location:CustomerLogin.php");
}
?> 
<html>
  <head>
    <meta charset="utf-8">
    <title>Feedback Entry Form</title>
    <link rel="stylesheet" type="text/css" href="Styles/Entry.css">
    <link rel="stylesheet" type="text/css" href="Styles/innerstyle.css?version=1.0.1">
    <link rel="stylesheet" type="text/css" href="js/slick.css">    
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <script>
        function toggle(which,group)
        {
            var counter=1;
            var checkbox=document.getElementById(group+counter);
            while(checkbox)
            {
                if(counter==which)
                {}
            else
            {
                checkbox.checked=false;
            }
            counter++;
            checkbox=document.getElementById(group+counter);
            }
        }
    </script>
    <style>
        #gender
        {
            background: #53ACB7;
            color: white;
            height: 30px;
            width: 185px;
        }
    </style>
  </head>
  <body style="background-image: url(Images/6.jpg )">           
    <form class="" action="Feedback1.php" method="POST">
        <div class="loginBox">
            <h2>Feedback Entry Form</h2>
            <p>Name<span style="padding-left: 80px;"><input type="text" name="name">
            <p>Age<span style="padding-left: 95px;"><input type="text" name="age"> 
            <p>Gender<span style="padding-left: 65px;">
            <select id="gender" name="gender">
                <option value="">--Select--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br>
            <br>
            <br>
            Q1) Do you own any smart fitness wearable ( eg: Fitness Wristband)
            <br>
            <p><input type="checkbox" name="q1" value="Yes" id="own1" onClick="toggle(1,'own')"/>a) Yes
            <p><input type="checkbox" name="q1" value="No"  id="own2" onClick="toggle(2,'own')"/>b) No
            <br>
            <br>
            Q2) If any, What wearable devices do you own?
            <br>
            <p><input type="checkbox" name="q2" value="Amazefit"    id="device1" onClick="toggle(1,'device')"/>a) Amazefit
            <p><input type="checkbox" name="q2" value="Fitbit"      id="device2" onClick="toggle(2,'device')"/>b) Fitbit
            <p><input type="checkbox" name="q2" value="Stethoscope" id="device3" onClick="toggle(3,'device')"/>c) Stethoscope
            <p><input type="checkbox" name="q2" value="Smart Watch" id="device4" onClick="toggle(4,'device')"/>d) Smart Watch
            <p><input type="checkbox" name="q2" value="Sugar Meter" id="device5" onClick="toggle(5,'device')"/>e) Sugar Meter
            <p><input type="checkbox" name="q2" value="BP Meter"    id="device6" onClick="toggle(6,'device')"/>f) BP Meter
            <br>
            <br>
            Q3) Is it recommended by your doctor?  
            <br>
            <p><input type="checkbox" name="q3" value="Yes" id="recomend1" onClick="toggle(1,'recomend')"/>a) Yes
            <p><input type="checkbox" name="q3" value="No"  id="recomend2" onClick="toggle(2,'recomend')"/>b) No
            <br>
            <br>
            Q4) How many wearable devices do you own?
            <br>
            <p><input type="checkbox" name="q4" value="1-2 Devices"         id="deviceno1" onClick="toggle(1,'deviceno')"/>a) 1-2 Devices
            <p><input type="checkbox" name="q4" value="3-5 Devices"         id="deviceno2" onClick="toggle(2,'deviceno')"/>b) 3-5 Devices
            <p><input type="checkbox" name="q4" value="More than 5 Devices" id="deviceno3" onClick="toggle(3,'deviceno')"/>c) More than 5 Devices
            <br>
            <br>
            Q5) What information would you personally want your wearable device to tell you?
            <br>
            <p><input type="checkbox" name="q5" value="Exercise Info"        id="info1" onClick="toggle(1,'info')"/>a) Exercise Info
            <p><input type="checkbox" name="q5" value="Medical Info"         id="info2" onClick="toggle(2,'info')"/>b) Medical Info
            <p><input type="checkbox" name="q5" value="Dietary Info"         id="info3" onClick="toggle(3,'info')"/>c) Dietary Info
            <p><input type="checkbox" name="q5" value="Social Media Updates" id="info4" onClick="toggle(4,'info')"/>d) Social Media Updates
            <br>
            <br>
            Q6) What is the source of information for wearable device you are using?
            <p><input type="checkbox" name="q6" value="Television"    id="source1" onClick="toggle(1,'source')"/>a) Television
            <p><input type="checkbox" name="q6" value="Internet"      id="source2" onClick="toggle(2,'source')"/>b) Internet
            <p><input type="checkbox" name="q6" value="Magazine"      id="source3" onClick="toggle(3,'source')"/>c) Magazine
            <p><input type="checkbox" name="q6" value="Medical Shops" id="source4" onClick="toggle(4,'source')"/>d) Medical Shops
            <p><input type="checkbox" name="q6" value="Doctors"       id="source5" onClick="toggle(5,'source')"/>d) Doctors
            <br>
            <br>
            Q7) What is your biggest hesitation with regard to purchasing a wearable technology?
            <p><input type="checkbox" name="q7" value="Price" id="hesitation1" onClick="toggle(1,'device')"/>a) Price
            <p><input type="checkbox" name="q7" value="Size"  id="hesitation2" onClick="toggle(2,'device')"/>b) Size
            <p><input type="checkbox" name="q7" value="Extra device to carry"      id="hesitation3" onClick="toggle(3,'device')"/>c) Extra device to carry
            <p><input type="checkbox" name="q7" value="I'll never actually use it" id="hesitation4" onClick="toggle(4,'device')"/>c) I'll never actually use it
            <br>
            <br>
            Q8) Which feature of the wearable device is the most important for you?
            <p><input type="checkbox" name="q8" value="Quality"       id="feature1" onClick="toggle(1,'feature')"/>a) Quality
            <p><input type="checkbox" name="q8" value="Price"         id="feature2" onClick="toggle(2,'feature')"/>b) Price
            <p><input type="checkbox" name="q8" value="Functionality" id="feature3" onClick="toggle(3,'feature')"/>c) Functionality
            <p><input type="checkbox" name="q8" value="Visual Appeal" id="feature4" onClick="toggle(4,'feature')"/>c) Visual Appeal
            <p><input type="checkbox" name="q8" value="Technology"    id="feature5" onClick="toggle(5,'feature')"/>c) Technology
            <p><input type="checkbox" name="q8" value="Brand"         id="feature6" onClick="toggle(6,'feature')"/>c) Brand
            <br>
            <br>
            Q9) How likely are you to purchase the following wearable device in the future?
            <p><input type="checkbox" name="q9" value="Very Willing"       id="future1" onClick="toggle(1,'future')"/>a) Very Willing
            <p><input type="checkbox" name="q9" value="Moderately Willing" id="future2" onClick="toggle(2,'future')"/>b) Moderately Willing
            <p><input type="checkbox" name="q9" value="Not Willing"        id="future3" onClick="toggle(3,'future')"/>c) Not Willing
            <br>
            
            <input type="submit" value="Submit" name="submit">
        <!--<input type="button" value="Update" name="update">-->
            <input type="reset" value="Reset/Clear">
        </div>        
    </form>
  </body>
</html>