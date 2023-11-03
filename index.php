<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-image: url('image/background1.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            border-radius: 15px;
            box-shadow: 3px 3px 13px black;
        }

        .custom-label {
            color: #3366ff;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            margin-top: 7px;
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4d79ff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0040ff;
        }

        #message {
            color: #f00;
        }

        img {
            width: 100%;
            border-radius: 4px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h2>Form Login</h2>
    <form id="loginForm">
        <img src="https://img.freepik.com/free-photo/blossom-floral-bouquet-decoration-colorful-beautiful-flowers-background-garden-flowers-plant-pattern-wallpapers-greeting-cards-postcards-design-wedding-invites_90220-1103.jpg?w=2000" alt="">
        <label for="username" class="custom-label">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password" class="custom-label">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>

    <p id="message"></p>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();

            // Mengganti dengan username dan password yang benar
            const validUsername = "admin";
            const validPassword = "admin123";

            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            if (username === validUsername && password === validPassword) {
                // Redirect ke halaman lain (ganti URL sesuai kebutuhan)
                window.location.href = "home.php";
            } else {
                document.getElementById("message").innerHTML = "Username atau password salah. Silakan coba lagi.";
            }
        });
    </script>
</body>
</html>