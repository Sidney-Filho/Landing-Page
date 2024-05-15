<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegue o e-mail do formulário
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Verifique se o e-mail é válido
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Defina os detalhes do e-mail
        $to = "flaviagoncalvesdesigner351@gmail.com"; // Substitua pelo seu e-mail
        $subject = "Novo e-mail recebido do formulário";
        $message = "Você recebeu um novo e-mail: $email";
        $headers = "From: no-reply@seusite.com\r\n";

        // Envie o e-mail
        if (mail($to, $subject, $message, $headers)) {
            echo "E-mail enviado com sucesso!";
        } else {
            echo "Erro ao enviar o e-mail.";
        }
    } else {
        echo "Endereço de e-mail inválido.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
