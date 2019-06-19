<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <title>Login com certificado digital</title>

    <style>
    body {
        background-image: url(img/back.jpg);
        background-size: cover;
        color: #fff;
    }
    .login {
        margin-top:100px;
    }
    .login .card {
        background: rgba(0,0,0,.6);
    }

    .login label {
        font-size: 16px;
        color: #ccc;
    }

    .login input {
        font-size: 22px !important;
        color: #fff;

    }

    .login button:hover {
        padding: 0px 40px;
    }

    </style>
</head>
<body>

    <div class="row">
        <div class="col s6 offset-s3 login">
            <div class="card center-align">
                <div class="card-action red white-text">
                    <h3>Login</h3>
                </div>

                <div class="card-content">
                <form enctype="multipart/form-data" action="send.php"  method="POST">
                    <div class="input-field col s12">
                        <label for="cpf" class="active">CPF</label>
                        <input type="text" id="cpf" name="cpf" class="validate" placeholder="000.000.000-00">
                    </div>
<br>
<br>
<br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <div class="file-field input-field">
                        <div class="btn">
                            <span for="file">CERTIFICADO</span>
                            <input type="file" id="file" name="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                
                    <div class="form-field center-align">
                        <button class="btn-large red"> Login </button>
                    </div>
                </form>
                </div>

            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>