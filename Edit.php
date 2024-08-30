<?php
$user_id = $_REQUEST["id"];



include("connections.php");

$get_record =mysqli_query($connections,"SELECT * FROM mytbl WHERE id='$user_id'");

while ($row_edit = mysqli_fetch_assoc($get_record)) {

    $fName = $row_edit["fName"];
    $mName = $row_edit["mName"];
    $lName = $row_edit["lName"];
    $section = $row_edit["section"];
    $address = $row_edit["address"];
    $email = $row_edit["email"];
    $contact= $row_edit["contact"];

}
?>
<form method="POST" action="Update_Record.php">

<input type="hidden" name="id" value="<?php echo $user_id; ?>">
<input type="text" name="new_fName" value="<?php echo $fName; ?>">
<Br>
<input type="text" name="new_mName" value="<?php echo $mName ?>">
<Br>
<input type="text" name="new_lName" value="<?php echo $lName ?>">
<Br>
<input type="text" name="new_section" value="<?php echo $section ?>">
<Br>
<input type="text" name="new_address" value="<?php echo $address ?>">
<Br>
<input type="text" name="new_email" value="<?php echo $email ?>">
<Br>
<input type="text" name="new_contact" value="<?php echo $contact ?>">
<Br>

<input type="submit" value="Update">

</form>