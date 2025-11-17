<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #ece9f4ff;">

<center>
<form onsubmit="return btnClick()">

    <div class="box2">
        <center><h1>Student Registration</h1></center>

        <label id="FullName">Full Name:</label><br>
        <input class="inputBOx" for="FullName" type="text" placeholder="Your answer" id="nameInput" required ><br><br>

        <label id="email">Email:</label><br>
        <input class="inputBOx" for="email" type="text" placeholder="Your answer" id="emailInput" required ><br><br>

        <label id="pass">Password:</label><br>
        <input class="inputBOx" for="pass" type="password" id="passInput" required ><br><br>

        <label id="Cpass">Confirm Password:</label><br>
        <input class="inputBOx" for="Cpass" type="password" id="passInputConfirm" required ><br><br>

        <button type="submit" class="submit-button">
                    Submit
        </button>
        <div id="error"></div>
        <div id="okey"></div>

    </div>
</form>
    <form onsubmit="return addBtnClick()">
    <div class="box2">
        <center><h2>Course Registration</h2></center>

        <label id="courseName">Course Name:</label><br>
        <input class="inputBOx" for="courseName" type="text" placeholder="Your answer" id="courseInput" required ><br><br>

    
        <button type="submit" class="submit-button">
                    Add Course
        </button><br><br>
        
        <div class="lowerBox"> 
            <label id="viewCourse"></label>
            <button class="btnDel">DELETE</button>
        </div>

        <div id="error2"></div>
        <div id="okey2"></div>

    </div>


    

</form>
</center>

<link rel="stylesheet" href="style.css">
    <script src="myJs.js"></script> 
</body>


</html>