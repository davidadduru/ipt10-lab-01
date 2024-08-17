<?php
session_start();


function calculate_age($birthdate) {
    $birthDate = new DateTime($birthdate);
    $today = new DateTime('today');
    $age = $birthDate->diff($today)->y; 
    return $age;
}


function format_birthdate($birthdate) {
    $date = new DateTime($birthdate);
    return $date->format('F j, Y'); 
}

$fullname = $_SESSION['fullname'];
$birthdate = $_SESSION['birthdate'];
$contact_number = $_SESSION['contact_number'];
$sex = $_SESSION['sex'];
$program = $_SESSION['program'];
$address = $_SESSION['address'];
$email = $_POST['email']; 
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$agree = isset($_POST['agree']) ? 'Yes' : 'No'; 


$age = calculate_age($birthdate);

$formatted_birthdate = format_birthdate($birthdate);
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Thank You for Registering</title>
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />
</head>
<body>
<section class="p-section--hero">
    <div class="row--50-50-on-large">
        <div class="col">
            <div class="p-section--shallow">
                <h1>Thank You for Registering!</h1>
            </div>
            <div class="p-section--shallow">
                <h2>Here are your submitted details:</h2>
                <table aria-label="User Data">
                    <thead>
                        <tr>
                            <th>Field</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><th>Full Name:</th><td><?php echo htmlspecialchars($fullname); ?></td></tr>
                        <tr><th>Birthdate:</th><td><?php echo htmlspecialchars($formatted_birthdate); ?></td></tr> 
                        <tr><th>Age:</th><td><?php echo $age; ?> years old</td></tr> 
                        <tr><th>Contact Number:</th><td><?php echo htmlspecialchars($contact_number); ?></td></tr>
                        <tr><th>Sex:</th><td><?php echo htmlspecialchars($sex); ?></td></tr>
                        <tr><th>Program:</th><td><?php echo htmlspecialchars($program); ?></td></tr>
                        <tr><th>Complete Address:</th><td><?php echo htmlspecialchars($address); ?></td></tr>
                        <tr><th>Email Address:</th><td><?php echo htmlspecialchars($email); ?></td></tr>
                        <tr><th>Agree to Terms:</th><td><?php echo $agree; ?></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>
