<?php
// Initialize the database connection
require_once 'db_config.php';

// Function to get the client's IP address
function getClientIP() {
    $ip = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ip = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ip = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ip = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ip = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ip = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ip = getenv('REMOTE_ADDR');
    else
        $ip = 'UNKNOWN';

    return $ip;
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $zipcode = $_POST["zipcode"];
    $option = $_POST["option"];
    $accept = isset($_POST["accept"]) ? 1 : 0;
    $ip_address = getClientIP();

    // Insert data into the database
    $sql = "INSERT INTO form_data (firstname, lastname, phone, zipcode, option, accept, ip_address)
            VALUES ('$firstname', '$lastname', '$phone', '$zipcode', '$option', '$accept', '$ip_address')";

    // Check if the query was successful
    if ($conn->query($sql) === TRUE) {
        echo "Form data saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
