<?php
// Get the user ID from the request
$user_id = $_REQUEST["id"];

// Include the database connection file
include("connections.php");

// Fetch the user record based on the provided user ID
$get_record = mysqli_query($connections, "SELECT * FROM mytbl WHERE id='$user_id'");

// Initialize variables to store user information
$fName = $mName = $lName = $section = $address = $email = $contact = "";

// Check if a record was found and populate the variables
if ($row_edit = mysqli_fetch_assoc($get_record)) {
    $fName = $row_edit["fName"];
    $mName = $row_edit["mName"];
    $lName = $row_edit["lName"];
    $section = $row_edit["section"];
    $address = $row_edit["address"];
    $email = $row_edit["email"];
    $contact = $row_edit["contact"];
} else {
    // Handle the case where no record was found for the given ID
    echo "Record not found!";
    exit; // Stop further execution
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: #e9ecef;
        }

        .form-container {
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
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
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 12px;
        }

        .data-display {
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            font-size: 14px;
            text-align: left;
        }

        th, td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<div class="form-container">
    <!-- HTML form for editing user information -->
    <form method="POST" action="Update_Record.php">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($user_id); ?>">
        <input type="text" name="fName" value="<?php echo htmlspecialchars($fName); ?>" placeholder="First Name">
        <br>
        <input type="text" name="mName" value="<?php echo htmlspecialchars($mName); ?>" placeholder="Middle Name">
        <br>
        <input type="text" name="lName" value="<?php echo htmlspecialchars($lName); ?>" placeholder="Last Name">
        <br>
        <input type="text" name="section" value="<?php echo htmlspecialchars($section); ?>" placeholder="Section">
        <br>
        <input type="text" name="address" value="<?php echo htmlspecialchars($address); ?>" placeholder="Address">
        <br>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Email">
        <br>
        <input type="text" name="contact" value="<?php echo htmlspecialchars($contact); ?>" placeholder="Contact Number">
        <br>
        <input type="submit" value="Update">
    </form>
</div>

</body>
</html>
