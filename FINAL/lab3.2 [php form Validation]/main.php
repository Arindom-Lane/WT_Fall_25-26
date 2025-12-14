<?php
$nameInput = "";
$emailInput = "";
$error = "";
$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // NAME
    if (empty($_POST["nameInput"])) {
        $error = "Name is required";
        $isValid = false;
    } else {
        $nameInput = trim($_POST["nameInput"]);
        if (strlen($nameInput) < 3) {
            $error = "Name must be at least 3 characters";
            $isValid = false;
        } elseif (!preg_match("/^[a-zA-Z\- ]+$/", $nameInput)) {
            $error = "Only letters, space and dash allowed";
            $isValid = false;
        }
    }

    // EMAIL
    if (empty($_POST["email"])) {
        $error = "Email is required";
        $isValid = false;
    } else {
        $emailInput = trim($_POST["email"]);
        if (!filter_var($emailInput, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format";
            $isValid = false;
        }
    }

    // SUCCESS
    if ($isValid) {
        echo "<script>alert('Form submitted successfully');</script>";
    }
}
?>


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

<body>

<form method="post" action="">

    <fieldset>
        <legend>NAME</legend>
        <input type="text" name="nameInput" value="">
    </fieldset>
     

    <fieldset>
        <legend>EMAIL</legend>
        <input type="email" name="email" required value="<?php echo $emailInput ?>">
    </fieldset>

    <fieldset>
        <legend>DATE OF BIRTH</legend>
        <input type="date" name="dob" required>
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
            <option value=""> </option>
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
<div><span class="error"><?php echo $error; ?></span></div>

</body>
</html>
