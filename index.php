<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        body {
            background-color: Lightskyblue;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        img {
            display: block;
            margin: 0 auto;
            padding: 20px 0;
        }

        hr {
            margin: 20px auto;
            width: 80%;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="email"], input[type="date"], input[type="number"], select, textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <img src="https://www.auf.edu.ph/home/images/logo2.png" alt="Logo" />
    <hr />

    <form action="target.php" method="POST">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" size="15" required />

        <label for="middlename">Middle Name</label>
        <input type="text" id="middlename" name="middlename" size="15" />

        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" size="15" required />

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />

        <label for="country_code">Phone</label>
        <input type="text" id="country_code" name="country_code" value="+63" size="2" />
        <input type="number" id="phone_number" name="phone_number" size="10" required />

        <label>Sex</label>
        <input type="radio" id="male" name="sex" value="male" checked="checked" />
        <label for="male">Male</label>
        <input type="radio" id="female" name="sex" value="female" />
        <label for="female">Female</label>

        <label for="birthdate">Birthdate</label>
        <input type="date" id="birthdate" name="birthdate" required />

        <label for="program">Program</label>
        <select id="program" name="program" required>
            <option value="BSA">BS Accountancy</option>
            <option value="BSBA">BS Business Administration</option>
            <option value="BSEE">BS Electronics Engineering</option>
            <option value="BSIT">BS Information Technology</option>
            <option value="BSCS">BS Computer Science</option>
        </select>

        <label for="address">Address</label>
        <textarea id="address" name="address" rows="5" required></textarea>

        <input type="submit" value="Register Now" />
    </form>

</body>
</html>
