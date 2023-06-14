<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Respiro | Login</title>

</head>

<body>
    <div class="box">
        <div class="container">

            <div class="top">
                <h1>RESPIRO</h1>
                <header>LOGIN</header>
            </div>
            <form action="/login-form" method="POST">
                @csrf
                <div class="input-field">
                    <input type="text" class="input" placeholder="username" name="username" autofocus required>
                    <i class='bx bx-user'></i>
                </div>

                <div class="input-field">
                    <input type="Password" class="input" placeholder="Password" name="password" required>
                    <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                    <button class="submit">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="login/js/jquery.min.js"></script>
    <script src="login/js/popper.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>
</body>

</html>
