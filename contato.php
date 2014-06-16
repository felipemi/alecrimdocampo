<?php
require_once("header.php");

function anti_injection($sql) {
    // remove palavras que contenham sintaxe sql
    $sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $sql);
    $sql = trim($sql); //limpa espaços vazio
    $sql = strip_tags($sql); //tira tags html e php
    $sql = addslashes($sql); //Adiciona barras invertidas a uma string
    return $sql;
}

if ($_POST['acao'] == 'contato') {
    $nome = strip_tags(trim($_POST['nome']));
    $email = strip_tags(trim($_POST['email']));
    $telefone = strip_tags(trim($_POST['telefone']));
    $assunto = strip_tags(trim($_POST['assunto']));
    $mensagem = strip_tags(trim($_POST['mensagem']));

    $nome = anti_injection($nome);
    $email = anti_injection($email);
    $telefone = anti_injection($telefone);
    $assunto = anti_injection($assunto);
    $mensagem = anti_injection($mensagem);

    if (empty($nome)) {
        echo "<script>alert('O campo Nome não pode estar vazio');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else
    if (empty($email)) {
        echo "<script>alert('O campo E-mail não pode estar vazio');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else
    if (empty($telefone)) {
        echo "<script>alert('O campo Telefone não pode estar vazio');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else
    if (empty($assunto)) {
        echo "<script>alert('O campo Assunto não pode estar vazio');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else
    if (empty($mensagem)) {
        echo "<script>alert('O campo Mensagem não pode ficar em branco');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else {
        require("phpMailer/class.phpmailer.php");
        // Inicia a classe PHPMailer
        $mail = new PHPMailer();

        // Define os dados do servidor e tipo de conexão
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsSMTP(); // Define que a mensagem será SMTP
        //$mail->Host = "localhost"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
        $mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
        $mail->Username = 'contato@clubealiancapu.com.br'; // Usuário do servidor SMTP (endereço de email)
        $mail->Password = 'CLUB*/Ai89azI'; // Senha do servidor SMTP (senha do email usado)
        // Define o remetente
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->From = $email; // Seu e-mail
        $mail->Sender = $email; // Seu e-mail
        $mail->FromName = "Fale Conosco. Web-Site Clube Aliança"; // Seu nome
        // Define os destinatário(s)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->AddAddress('contato@clubealiancapu.com.br', 'Clube Aliança');
        $mail->AddAddress('contato@clubealiancapu.com.br');
        //$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
        //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
        // Define os dados técnicos da Mensagem
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
        //$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
        // Define a mensagem (Texto e Assunto)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->Subject = $assunto; // Assunto da mensagem
        $mail->Body = $mensagem;

        // Define os anexos (opcional)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        //$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo
        // Envia o e-mail
        $enviado = $mail->Send();

        // Limpa os destinatários e os anexos
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();

        // Exibe uma mensagem de resultado
        if ($enviado) {
            echo "<script>alert('E-mail enviado com sucesso. Em Breve entraremos em contato para melhores informações.');</script>";
            echo "<script>history.back();</script>";
        } else {
            echo "<script>alert('Não foi possível enviar. Tente novamente mais tarde.');</script>";
            echo "<script>history.back();</script>";
            echo "Informações do erro: 
" . $mail->ErrorInfo;
        }
    }
}
?>

<!-- Content -->
<section id="content"><div class="ic"></div>
    <div class="container_12">
        <article class="a2">
            <div class="wrapper">
                <div class="left-mapa">
                    <h2 class="h2 top-3">Estamos Aqui!</h2>
                    <div class="map_container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d447.35883948184505!2d-51.08504009999999!3d-26.233389999999762!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e661e529f3e1cb%3A0xf38ea538622fd30b!2sRua+Matos+Costa%2C+62+-+Centro!5e0!3m2!1spt-BR!2s!4v1401297583212" width="450" height="430" frameborder="0" style="border:0"></iframe>
                    </div>
                    <div class="left-contato">
                        <h3>Mande uma mensagem:</h3>
                            <form id="contact-form" method="post" name="frm">
                                <input type="hidden" name="acao" value="contato"/>
                                <fieldset>
                                    <ul>
                                        <li>
                                            <label class="nome">*Seu Nome:</label>
                                            <input id="nome" name="nome" type="text" class="input-type" placeholder="Seu Nome"/>
                                        </li>
                                        <li>
                                            <label class="telefone">*Seu Telefone:</label>
                                            <input id="telefone" name="telefone" class="input-type" type="text" placeholder="Digite o seu Telefone" maxlength="14"/>
                                        </li>
                                        <li>
                                            <label class="email">*Seu e-mail:</label>
                                            <input id="email" name="email" type="email" class="input-type" placeholder="E-mail"/>
                                        </li>
                                        <li>
                                            <label class="assunto">*Seu Assunto:</label>
                                            <input id="assunto" name="assunto" type="text" class="input-type" placeholder="Assunto"/>
                                        </li>
                                        <li>
                                            <label class="mensagem">*Sua mensagem:</label>
                                            <textarea name="mensagem" id="mensagem" class="input-type"></textarea>
                                        </li>
                                    </ul>
                                    <div class="btns">
                                        <input type="submit" name="enviar" class="button" value="Enviar"/> <input type="reset" class="button" name="limpar" id="limpar" value="Limpar"/>
                                    </div>
                                </fieldset>
                            </form>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
</div>
<?php
require_once("footer.php");
?>