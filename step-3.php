<?php

require "helpers/helper-functions.php";

session_start();


if (empty($_POST['program']) || empty($_POST['address'])) {
    header("Location: step-2.php");
    exit();
}

$fullname = isset($_POST['fullname']) ? $_POST['fullname'] : $_SESSION['fullname'];
$birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : $_SESSION['birthdate'];
$contact_number = isset($_POST['contact_number']) ? $_POST['contact_number'] : $_SESSION['contact_number'];
$sex = isset($_POST['sex']) ? $_POST['sex'] : $_SESSION['sex'];
$program = $_POST['program'];
$address = $_POST['address'];


$_SESSION['fullname'] = $fullname;
$_SESSION['birthdate'] = $birthdate;
$_SESSION['contact_number'] = $contact_number;
$_SESSION['sex'] = $sex;
$_SESSION['program'] = $program;
$_SESSION['address'] = $address;

?>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />   
</head>
<body>

<section class="p-section--hero">
  <div class="row--50-50-on-large">
    <div class="col">
      <div class="p-section--shallow">
        <h1>
          Registration (Step 3/3)
        </h1>
      </div>
      <div class="p-section--shallow">
        <form action="thank-you.php" method="POST">
          <input type="hidden" name="fullname" value="<?php echo htmlspecialchars($fullname); ?>">
          <input type="hidden" name="birthdate" value="<?php echo htmlspecialchars($birthdate); ?>">
          <input type="hidden" name="contact_number" value="<?php echo htmlspecialchars($contact_number); ?>">
          <input type="hidden" name="sex" value="<?php echo htmlspecialchars($sex); ?>">
          <input type="hidden" name="program" value="<?php echo htmlspecialchars($program); ?>">
          <input type="hidden" name="address" value="<?php echo htmlspecialchars($address); ?>">

          <label>Email address</label>
          <input type="email" name="email" placeholder="example@canonical.com" autocomplete="email" required>

          <label>Password</label>
          <input type="password" name="password" placeholder="******" autocomplete="current-password" required>

          <br>
          <label class="p-checkbox--inline">
          <input type="checkbox" name="agree" required>
          </label>
          I agree to the terms and conditions...
          
          <br />
          <br />

          <button type="submit" class="p-button--positive">Finish</button>
          <a href="step-2.php" class="p-button--neutral" style="text-decoration: none; padding: 0.5rem 1rem; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; color: #333;">Back</a>
        </form>
      </div>
    </div>
    <div class="col">
      <div class="p-image-container--3-2 is-cover">
        <img class="p-image-container__image" src="https://www.auf.edu.ph/home/images/ittc.jpg" alt="">
      </div>
    </div>
  </div>
</section>

</body>
</html>
