<?php
session_start();

    $name = $_GET['name'] ?? null;
    $email = $_GET['email'] ?? null;
    $nick = $_GET['nick'] ?? null;
    $password = $_GET['password'] ?? null;

    if($_GET['login-form'] !== 'true') {
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
    }

    var_dump($_SESSION);


    function showForm() {
        return '<form action="profile.php" method="get">
                    <label>
                        <span>Username</span>
                        <input type="text" name="name" value="' . $_SESSION['name'] . '" pattern="[a-zA-Z-Яа-я][a-zA-Z-Яа-я0-9-_\.]{5,20}$" disabled required>
                    </label>
                    <label>
                        <span>Nickname</span>
                        <input type="text" name="nick" value="' . $_SESSION['nick'] . '" pattern="[a-zA-Z-Яа-я][a-zA-Z-Яа-я0-9-_\.]{3,20}" disabled required>
                    </label>
                    <label>
                        <span>E-mail</span>
                        <input type="email" name="email" value="' . $_SESSION['email'] . '" disabled required>
                    </label>
                    <label>
                        <span>Password</span>
                        <input type="password" name="password" id="password" value="' . $_SESSION['password'] . '" min="6" disabled required>
                    </label>
                    <label class="show-pass">
                        <input type="checkbox" onclick="checkClick()">
                        <span>Show password</span>
                    </label>
                    <div style="display: flex; justify-content: space-between">
                        <button type="button" class="submit-btn" onclick="activationForm()">Edit profile</button>
                        <button type="submit" class="disabled">Save</button>
                    </div>
                </form>';
    };

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

        .disabled {
            pointer-events: none;
            color: gray;
            border: 3px solid gray;
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

                if($_GET['login-form'] === 'true') {
                    if ($password === $_SESSION['password'] && $name === $_SESSION['nick']) {

                        echo showForm();

                    } elseif ($password === $_SESSION['password'] && $name === $_SESSION['email']) {

                        echo showForm();

                    } else {

                        echo '<p style="margin: 0 0 50px; font-size: 1.5rem">Login or password is not valid</p><a href="index.php">Return to Login form</a>';

                    }
                } else {
					echo '<p style="margin: 0 0 50px; font-size: 1.5rem">Your changes are saved!</p>';
                    echo showForm();
                }

            ?>
        </div>

        <script>

          'use strict';

          var passInput = document.querySelector('#password'),
              checkInput = document.querySelector('.show-pass input'),
              submitBtn = document.querySelector('.submit-btn'),
              inputsAll = document.querySelectorAll('input');

          function checkClick() {
            if(checkInput.checked) {
              passInput.setAttribute('type', 'text')
            } else {
              passInput.setAttribute('type', 'password')
            }
          }

          function activationForm() {
            document.querySelector('button[type="submit"]').classList.remove('disabled');

            for(var i = 0; i < inputsAll.length; i++) {
              inputsAll[i].removeAttribute('disabled');
            }
          }

        </script>

    </body>
</html>
