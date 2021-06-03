<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back-Office Portfolio</title>
</head>

<body>

    <form action="register-form-handler.php" method="post">
        <div>
            <label for="input-username">nom d'utilisateur</label>
            <input type="name" name="username" id="input-username" required>

        </div>
        <div>
            <label for="input-username">email</label>
            <input type="email" name="email" id="input-email" required>
        </div>
        <div>
            <label for="input-username">password</label>
            <input type="password" name="password" id="input-password" required>
        </div>
        <div>
            <label for="input-username">confirmation</label>
            <input type="password" name="confirmation" id="input-confirmation" required>
        </div>

        <div>

            <input type="submit" id="submit" value="s'inscrire"><span id="error"></span>
            <a href="index.php"></a><button>Retour</button></a>


        </div>
    </form>
    <script src="main.js"></script>
</body>

</html>