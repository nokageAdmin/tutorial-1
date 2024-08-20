<?php
$fName = $mName = $lName = $address = $email = $section = $contact = "";
$fnameErr = $mnameErr = $lnameErr = $addressErr = $emailErr = $sectionErr = $contactErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fName"])) {
        $fnameErr = "First name is required";
    } else {
        $fName = $_POST["fName"];
    }

    if (empty($_POST["mName"])) {
        $mnameErr = "Middle name is required";
    } else {
        $mName = $_POST["mName"];
    }

    if (empty($_POST["lName"])) {
        $lnameErr = "Last name is required";
    } else {
        $lName = $_POST["lName"];
    }

    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = $_POST["address"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["section"])) {
        $sectionErr = "Section is required";
    } else {
        $section = $_POST["section"];
    }

    if (empty($_POST["contact"])) {
        $contactErr = "Contact number is required";
    } else {
        $contact = $_POST["contact"];
    }
}
?>

<!-- HTML form -->
<div class="form-container">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <input type="text" name="fName" placeholder="First Name" value="<?php echo $fName; ?>"> <br>
        <span class="error"><?php echo $fnameErr; ?></span> <br>

        <input type="text" name="mName" placeholder="Middle Name" value="<?php echo $mName; ?>"> <br>
        <span class="error"><?php echo $mnameErr; ?></span> <br>

        <input type="text" name="lName" placeholder="Last Name" value="<?php echo $lName; ?>"> <br>
        <span class="error"><?php echo $lnameErr; ?></span> <br>

        <input type="text" name="section" placeholder="Section" value="<?php echo $section; ?>"> <br>
        <span class="error"><?php echo $sectionErr; ?></span> <br>

        <input type="text" name="address" placeholder="Address" value="<?php echo $address; ?>"> <br>
        <span class="error"><?php echo $addressErr; ?></span> <br>

        <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"> <br>
        <span class="error"><?php echo $emailErr; ?></span> <br>

        <input type="text" name="contact" placeholder="Contact Number" value="<?php echo $contact; ?>"> <br>
        <span class="error"><?php echo $contactErr; ?></span> <br>

        <input type="submit" value="Submit">

    </form>
</div>

<hr>

<?php
include ("connections.php");

    if($fName && $mName && $lName && $address && $email && $section && $contact){
    
        $query = mysqli_query($connections, "INSERT INTO mytbl (fName, mName, lName, section, address, email, contact) VALUES('$fName','$mName','$lName','$section','$address','$email','$contact') ");
?>

    

        <div class="data-display">
            <h2>Submitted Information</h2>
            <p><strong>First Name:</strong> <?php echo htmlspecialchars($fName); ?></p>
            <p><strong>Middle Name:</strong> <?php echo htmlspecialchars($mName); ?></p>
            <p><strong>Last Name:</strong> <?php echo htmlspecialchars($lName); ?></p>
            <p><strong>Section:</strong> <?php echo htmlspecialchars($section); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($address); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Contact Number:</strong> <?php echo htmlspecialchars($contact); ?></p>
        </div>

<?php
    }
?>

<!-- CSS for centering the form -->
<style>
    .form-container {
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .error {
        color: red;
        font-size: 12px;
    }

    body {
        display: center;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .data-display {
        width: 300px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
    }
</style>
