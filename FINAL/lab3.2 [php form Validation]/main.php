<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Validation</title>
    <style>
        fieldset{
            width: 300px;
            margin-bottom: 10px;
        }
    </style>
</head>

<?php
$nameInput = "";
$error="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["nameInput"])) {
        echo "<script>alert('Input your name');</script>";
    }
    else {
        $nameInput = trim($_POST["nameInput"]);

        if (strlen($nameInput) < 1) {
            echo "<script>alert('Input a valid name');</script>";
        }
        elseif (!preg_match("/^[a-zA-Z\- ]+$/", $nameInput)) {
            echo "<script>alert('Name must contain only letters, space or dash');</script>";
        }
        else {
            echo "<script>alert('Form submitted successfully');</script>";
        }
    }
}
?>

<body>

<form method="post" action="">

    <fieldset>
        <legend>NAME</legend>
        <input type="text" name="nameInput" value="<?php echo $nameInput;?>">
    </fieldset>
    <span class="error"></span>

    <fieldset>
        <legend>EMAIL</legend>
        <input type="email" name="email" >
    </fieldset>

    <fieldset>
        <legend>DATE OF BIRTH</legend>
        <input type="date" name="dob" >
    </fieldset>

    <fieldset>
        <legend>GENDER</legend>
        <input type="radio" name="gender" value="Male" > Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other
    </fieldset>

    <fieldset>
        <legend>DEGREE</legend>
        <input type="checkbox" name="degree[]" value="SSC"> SSC
        <input type="checkbox" name="degree[]" value="HSC"> HSC
        <input type="checkbox" name="degree[]" value="BSc"> BSc
        <input type="checkbox" name="degree[]" value="MSc"> MSc
    </fieldset>

    <fieldset>
        <legend>BLOOD GROUP</legend>
        <select name="blood">
            <option value="">Select</option>
            <option>A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>AB+</option>
            <option>AB-</option>
            <option>O+</option>
            <option>O-</option>
        </select>
        <br><br>
        <input type="submit">
    </fieldset>

</form>

</body>
</html>
