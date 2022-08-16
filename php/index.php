if (isset($_POST ['enviar'])) {
if (isset ($_POST ['name']) && !empty($_POST['asunto'])&& ! empty($_POST['msg']) && !
empty ($_POST)['email'])) {
$name = $_POST ['name'];
$asunto = $_POST ['asunto'];
$msg = $_POST ['msg'];
$email = $_POST ['email'];
$header = "From: giselle_boyko@hotmail.com" . "\r\n";
$header.= "Reply-To: giselle_boyko@hotmail.com" . "\r\n";
$header.="X-Mailer: PHP/".phpversion();
mail($email,$asunto,$msg,$header);
if ($mail) {
echo "<h4> Mail enviado exitosamente!"<h4>";
}
}
}
<?php
    
    require "code-login.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login -ArgPrograma</title>
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>

    <div class="container-all">

        <div class="ctn-form">
            <img src="images/logo-magtimus-small.png" alt="" class="logo">
            <h1 class="title">Iniciar Sesión</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <label for="">Email</label>
                <input type="text" name="email">
                <span class="msg-error"><?php echo $email_err; ?></span>
                <label for="">Contraseña</label>
                <input type="password" name="password">
                <span class="msg-error"><?php echo $password_err; ?></span>

                <input type="submit" value="Iniciar">

            </form>

            <span class="text-footer">¿Aún no te has regsitrado?
                <a href="register.php">Registrate</a>
            </span>
        </div>

        <div class="ctn-text">
            <div class="capa"></div>
            <h1 class="title-description">Lorem ipsum dolor sit amet.</h1>
            <p class="text-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat natus dolore ea dicta molestias totam iusto perspiciatis iste obcaecati quod dolor, eaque qui asperiores? Molestias ad nemo placeat est quidem?</p>
        </div>

    </div>

</body>

</html>