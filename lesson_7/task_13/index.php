<?php

    session_start();

    $name = $_GET['name'] ?? null;
    $nick = $_GET['nick'] ?? null;
    $email = $_GET['email'] ?? null;
    $password = $_GET['password'] ?? null;

    if ($name) {
        $_SESSION['name'] = $name;
    }
    if ($nick) {
        $_SESSION['nick'] = $nick;
    }
    if ($email) {
        $_SESSION['email'] = $email;
    }
    if ($password) {
        $_SESSION['password'] = $password;
    }


    var_dump($_SESSION);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        .wrap {
            width: 320px;
            margin: 0 auto;
            padding: 25px;
        }

        label {
            display: block;
            margin-bottom: 30px;
            color: #55e;
        }

        label span {
            display: block;
            margin-bottom: 5px;
        }

        input {
            display: block;
            width: 100%;
            padding: 5px 10px;
            border: 1px solid #c8c2c2;
            border-radius: 3px;
            color: gray;
            font-size: 1.5rem;
            box-sizing: border-box;
        }

        button  {
            outline: none;
            border: none;
            border: 3px solid #55e;
            border-radius: 8px;
            text-transform: uppercase;
            color: #55e;
            background: none;
            font-size: 1.2rem;
            padding: 10px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 0 auto;
            display: block;
        }

        a {
            font-size: 1.2rem;
            margin-bottom: 25px;
            display: block;
        }

        a:hover {
            text-decoration: none;
        }

        .show-pass {
            display: flex;
        }

        .show-pass input {
            width: unset;
            margin-right: 10px;
        }

        .show-pass span {
            margin: 0;
        }
    </style>
</head>
    <body>

        <div class="wrap">

            <?php
                if ($name && $nick && $email && $password) {
                    echo '<p style="margin: 0 0 50px; font-size: 1.5rem">You are registered</p>';
                }
            ?>

            <form action="profile.php" method="get">
                <input type="text" name="login-form" value="true" style="display: none">
                <label>
                    <span>Nickname or E-mail</span>
                    <input type="text" name="name" value="<?php echo $nick ?>" required>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" id="password" value="<?php echo $password ?>" min="6" required>
                </label>
                <label class="show-pass">
                    <input type="checkbox" onclick="checkClick()">
                    <span>Show password</span>
                </label>
                <a href="form.php">Registration</a>
                <button type="submit">Login</button>
            </form>

        </div>

        <script>

            'use strict';

            var passInput = document.querySelector('#password'),
                checkInput = document.querySelector('.show-pass input');

            console.log(passInput);
            function checkClick() {
              if(checkInput.checked) {
                passInput.setAttribute('type', 'text')
              } else {
                passInput.setAttribute('type', 'password')
              }
            }

        </script>

    </body>
</html>



