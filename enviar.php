<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="js/script.js"></script>
        <title>Envio de Desktop</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container-fluid mt-3">
            
            <center><img src="images/totvs-logo.png" width="200"></center>
            <p>&nbsp; Sistema de Gestão de Desktops</p>


            <nav>
                <ul id="menu-navegacao" class="menu" class="menu-formatacao">
                        <li class="menu-item"><a href="index.php" class="menu-formatacao-item">Home</a></li>
                        <li class="menu-item"><a href="enviar.php" class="menu-formatacao-item" class="selecionado">Enviar</a></li>
                        <li class="menu-item"><a href="manutencao.php" class="menu-formatacao-item">Manutenção</a></li>
                        <li class="menu-item"><a href="relatorios.php" class="menu-formatacao-item" >Relátorios</a></li>
                        <li class="menu-item"><a href="sobre.php" class="menu-formatacao-item" >Sobre</a></li>
                </ul>
            </nav>
            <br>
            <h2>Upload de Arquivo</h2>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="functions/envia.php"  enctype="multipart/form-data" onsubmit="return check_form()" >
                        
                        <label class="form">Nome do desktop:</label><input type="text" class="text required" value="" placeholder="Nome da Atividade" name="name" > <br>
                        <label class="form">Squad:</label><input type="text" class="text required" value="" name="squad"> <br>
                        <label class="descript"> &nbsp;&nbsp;&nbsp;&nbsp;    Descrição   </label><br>
                        <label class="descript"> <textarea name=descript cols=50 rows=6 class="required"></textarea></label><br>
                        <label class="form"> <input type="file"  name="arquivo" class="required" > </label><br><br>
                        <label class="form"><input type="submit" value="[ Enviar ]"> </label><br>

                    </form>
                </div>
            </div>

            <!-- <h6 class="mt-3"> Arquivo Enviado </h6> -->

        </div>
    </body>
</html>