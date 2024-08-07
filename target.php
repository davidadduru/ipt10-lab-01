<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
    <style>
        body {
            background-color: Lightskyblue;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .details {
            margin: 10px 0;
        }

        .details label {
            font-weight: bold;
        }

        .details p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Registration Details</h1>
        <div class="details">
            <label>First Name:</label>
            <p><?php echo htmlspecialchars($_POST['firstname']); ?></p>
        </div>
        <div class="details">
            <label>Middle Name:</label>
            <p><?php echo htmlspecialchars($_POST['middlename']); ?></p>
        </div>
        <div class="details">
            <label>Last Name:</label>
            <p><?php echo htmlspecialchars($_POST['lastname']); ?></p>
        </div>
        <div class="details">
            <label>Email:</label>
            <p><?php echo htmlspecialchars($_POST['email']); ?></p>
        </div>
        <div class="details">
            <label>Phone:</label>
            <p><?php echo htmlspecialchars($_POST['country_code']) . htmlspecialchars($_POST['phone_number']); ?></p>
        </div>
        <div class="details">
            <label>Sex:</label>
            <p><?php echo htmlspecialchars($_POST['sex']); ?></p>
        </div>
        <div class="details">
            <label>Birthdate:</label>
            <p><?php echo htmlspecialchars($_POST['birthdate']); ?></p>
        </div>
        <div class="details">
            <label>Program:</label>
            <p><?php echo htmlspecialchars($_POST['program']); ?></p>
        </div>
        <div class="details">
            <label>Address:</label>
            <p><?php echo nl2br(htmlspecialchars($_POST['address'])); ?></p>
        </div>
    </div>

</body>
</html>
