<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <style>
        label{
            color: white;
        }
        input{
            border-radius: 5px;
            border-color: none;
        }
        div.card{
            margin-left: 350px;
            margin-top: 175px;
        }
        body{
            background-color: darkslategray;
        }
        img{
            width: 50px;
            border-color: black;
        }
        div.card{
            border-radius: 20px;
        }
    </style>
</head>

<body>
<form action="proses-login.php" method="POST">
    <div class="container">
        <div class="card col-sm-4">
            <div class="card-header bg-none">
                <center>
                    <img src="logo.png">
                </center>
            </div>
            <div class="card-body bg-light text-dark">
                    <center>
                           <font face = "Berlin Sans FB"><h4>Username</h4></font>
                            <input type="text" name="username" id="" placeholder="Masukan Username">
                            <br>
                            <br>
                           <font face = "Berlin Sans FB"><h4>Password</h4></font>
                            <input type="password" name="password" id="" placeholder="Masukan Password">
                     </center>
            </div>
            <div class="card-footer bg-light text-black">
                <center><button type="submit" name="btnlogin" class="btn btn-info"><font face="Berlin Sans FB"><h6>Login</h6></font></button></center>
            </div>
        </div>
    </div>
</form>
</body>