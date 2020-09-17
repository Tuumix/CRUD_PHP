<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=McLaren&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'McLaren', cursive;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100vh;
            background: rgb(229,142,38);
            background: linear-gradient(90deg, rgba(229,142,38,1) 0%, rgba(246,185,59,1) 100%);
        }
        h1{
            color:#2d3436;
        }
        .form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 25%;
            height: 50vh;
            background-color: #e58e26;
        }
        .image{
            display: flex;
            background-image: url('config/pikachu.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            width: 40%;
            height: 50vh;
            background-color: purple;
        }
        .entradas{
            padding: 5px;
            margin: 10px;
            max-width: 200px;
        }
    </style>
</head>
<body>
        <form class="form" methos="POST" action="Login_controller/login">
            <h1>ポケモン！</h1>
            <?php
                if(isset($_SESSION['authenticated'])): ?>
                    <div>
                        <p>Email or Password is incorrect!</p>
                    </div>
                <?php
                endif;
                unset($_SESSION['authenticated']);
            ?>
            <div class="input-group input-group-sm mb-2" style="max-width: 300px; padding: 5px; margin: 10px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm" style="background-color: #2d3436; color: rgb(229,142,38);">Email</span>
                </div>
                <input type="text" name="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
            </div>
            <div class="input-group input-group-sm mb-2" style="max-width: 300px; padding: 5px; margin: 10px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm" style="background-color: #2d3436; color: rgb(229,142,38);">Password</span>
                </div>
                <input type="password" name="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <button type="submit" class="btn btn-dark" style="color: rgb(229,142,38);">Sign in</button>
        </form>
        <div class="image">
            <img>
        </div>
</body>
</html>