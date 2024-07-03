<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect form data
    $comment1 = $_POST["comment1"];
    $comment2 = $_POST["comment2"];
    $comment3 = $_POST["comment3"];
    $comment4 = $_POST["comment4"];
    $comment5 = $_POST["comment5"];
    $comment6 = $_POST["comment6"];
    $comment7 = $_POST["comment7"];
    $comment8 = $_POST["comment8"];

    // Build email message
    $subject = "Self Test Response";
    $message = "comment Area 1:\n$comment1\n\n";
    $message = "comment Area 2:\n$comment2\n\n";
    $message = "comment Area 3:\n$comment3\n\n";
    $message = "comment Area 4:\n$comment4\n\n";
    $message = "comment Area 5:\n$comment5\n\n";
    $message = "comment Area 6:\n$comment6\n\n";
    $message = "comment Area 7:\n$comment7\n\n";
    $message = "comment Area 8:\n$comment8\n\n";

    // Set up email headers
    $headers = "From: survey@example.com" . "\r\n" .
               "Reply-To: kim.ruk254@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Set recipient email address
    $to = "kim.ruk254@gmail.com"; // Replace with your actual email address

    // Send email
    $mailSuccess = mail($to, $subject, $message, $headers);

    // Check if the email was sent successfully
    if ($mailSuccess) {
        echo "Thank you for your feedback! Your response has been submitted.";
    } else {
        echo "Oops! Something went wrong, and we couldn't submit your response.";
    }
} else {
    // Redirect to the form if accessed directly
    header("Location: booking.php");
    exit();
}
?>
