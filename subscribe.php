<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Validate the email (you can add more validation here)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Store the email in a file, database, or send it to an email marketing platform
        $file = fopen("subscribers.txt", "a"); // Open the file in append mode
        fwrite($file, $email . "\n"); // Write the email to the file
        fclose($file);

        echo "Thank you for subscribing!";
    } else {
        echo "Invalid email format.";
    }
}
?>
