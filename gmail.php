<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"])); // Remove HTML tags and whitespace
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL); // Sanitize email input

    if(empty($name) OR empty($email)) {
        // Handle error here: One or more fields are empty
        header("Location: https://juneng2108.github.io/Thailandgoodies321/"); // Replace with your website URL
        exit;
    }

    $recipient = "Inuyashayt2004@gmail.com"; 
    $subject = "New message from $name";
    $message_content = "Name: $name\nEmail: $email";

    $headers = "From: $name <$email>";

    if(mail($recipient, $subject, $message_content, $headers)) {
        // Success: Redirect to a thank-you page
        header("Location: https://juneng2108.github.io/Thailandgoodies321/"); // Replace with your website URL
    } else {
        // Fail: Redirect to an error page
        header("Location: https://juneng2108.github.io/Thailandgoodies321/"); // Replace with your website URL
    }
}
?>
