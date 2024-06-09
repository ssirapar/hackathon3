<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('bckimg6.jpg');
            background-size: cover;
            background-position: center;
            font-size: 16px;
            line-height: 1.6;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #ffcc00;
        }

        section {
            padding: 50px 0;
        }

        #hero {
            background-color: rgba(244, 244, 244, 0.8);
            text-align: center;
            border-radius: 10px;
            padding: 50px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .feature {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
        }

        .feature img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .contact-form {
            width: 50%;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        .contact-form input,
        .contact-form textarea,
        .contact-form button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: none;
            box-sizing: border-box;
        }

        .contact-form button {
            background-color: #333;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #ffcc00;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="contact-form">
            <h2>User Login</h2>
            <form action="uslogin.php" method="post">
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <button type="submit">Login</button>
            <a href="http://localhost/internship/usernamech.php" class="login-btn">forget password</a>
            </form>
        </div>
    </div>
</body>
</html>