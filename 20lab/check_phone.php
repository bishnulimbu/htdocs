
<?php
$phone = $_POST['phone'];

// Dummy database check (you would normally query your database here)
$availablePhones = ['1234567890', '0987654321'];
if (in_array($phone, $availablePhones)) {
    echo "Phone number is available.";
} else {
    echo "Phone number is not available.";
}
?>
