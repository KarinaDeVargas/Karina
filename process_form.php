<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Create the email message
    $to = "kavp86@gmail.com";
    $subject = "New Form Submission";
    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Phone: $phone\n";
    $messageBody .= "Message:\n$message";

    // Send email
    mail($to, $subject, $messageBody);

    // Respond to the form submission (you can customize this response)
    echo "Form submission successful!";
} else {
    // Handle non-POST requests (optional)
    echo "Invalid request";
}
?>
