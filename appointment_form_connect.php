<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $date = $_POST["date"];
  $time = $_POST["time"];
  $service = $_POST["service"];
  
  // Set up email parameters
  $to = "michaelcee2000@gmail.com"; // Change this to your email address
  $subject = "Appointment Request";
  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Date: $date\n";
  $message .= "Time: $time\n";
  $message .= "Service: $service\n";
  
  // Send email
  mail($to, $subject, $message);
  
  // Redirect back to the appointment form with a success message
  header("Location: appointment_form.html?success=true");
  exit();
}
?>
