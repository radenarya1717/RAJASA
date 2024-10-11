<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Klinik Mental Health</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 1200px;
            width: 100%;
            padding: 2rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }

        .row {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .col-md-6 {
            flex: 1;
            max-width: 100%;
        }

        .text-center {
            text-align: center;
        }

        .text-title {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1rem;
            font-weight: 600;
            animation: slideIn 0.5s ease-in-out;
        }

        .form-group {
            margin-bottom: 1rem;
            position: relative;
        }

        .v-text-field {
            position: relative;
            width: 100%;
            padding: 0.75rem;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-sizing: border-box;
            font-size: 1rem;
            color: #333;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .v-text-field:focus-within {
            border-color: #007bff;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
        }

        .v-text-field__slot {
            position: relative;
        }

        .v-text-field__slot label {
            position: absolute;
            top: 50%;
            left: 0.75rem;
            transform: translateY(-50%);
            color: #666;
            font-size: 0.875rem;
            pointer-events: none;
            transition: 0.3s ease;
        }

        .v-text-field__slot input {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            color: #333;
        }

        .v-text-field__slot input:focus + label,
        .v-text-field__slot input:not(:placeholder-shown) + label {
            top: -0.75rem;
            left: 0.5rem;
            font-size: 0.75rem;
            color: #007bff;
        }

        .v-btn {
            display: block;
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 8px;
            background-color: #007bff;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
            animation: pulse 1s infinite;
        }

        .v-btn:hover {
            background-color: #0056b3;
        }

        .link {
            color: #007bff;
            text-decoration: none;
            font-size: 0.875rem;
            display: block;
            margin: 1rem 0;
            text-align: center;
            transition: color 0.3s ease;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <div class="text-center">
                <h2 class="text-title">Login</h2>
                <form id="loginForm" method="POST" action="proses_login.php">
                    <div class="form-group">
                        <div class="v-text-field">
                            <div class="v-text-field__slot">
                                <input id="username" name="username" type="text" required placeholder=" ">
                                <label for="username">Username</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="v-text-field">
                            <div class="v-text-field__slot">
                                <input id="password" name="password" type="password" required placeholder=" ">
                                <label for="password">Password</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="v-btn">Login</button>
                    <p><a href="register.php" class="link">Belum punya akun? Daftar</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
