<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLOPPY ARCH carrinho</title>
    <link rel="icon" href="img/diskmenu.png"png/png">
    <link rel="stylesheet" type="text/css" href="estilo carrinho.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="menuteste.css">
    <link rel="stylesheet" type="text/js" href="menuteste.js">
    <link href="https://fonts.cdnfonts.com/css/aux-dotbitc" rel="stylesheet">
                

    
    
</head>
<body style="background-image: url(img/Fundo.png);">
    <div class="titulo">
          <img src="img/titulo.png" alt="Título">
        
      </div>
      <?php
        session_start();
        include ("conecta.php");
        $comando = $pdo->prepare("SELECT * FROM carrinho WHERE nick = :user");
        $comando->bindParam(':user', $_SESSION['usuario']);
        $comando->execute();    
    
        $resultado = $comando->execute();

        while( $linhas = $comando->fetch()) 
            {
                $m = $linhas['id_carrinho'];
                $n = $linhas["item"];
                echo "<div style='z-index:1;display:flex;justify-content:space-between;width:10%; background-color:white;'><span onclick='remove($m)' style='width:10%;background-color:red'>x</span>item: $n </div> <br>";
            }
      ?>
    <img src="img/diskmenu.png" alt="Menu" id="menu-botao" class="menu-image">

    <ul id="menu">
      <li class="menu-item"><a href="FLOPPY ARCH comprar.html">comprar</a></li>
      <li class="menu-item"><a href="FLOPPY ARCH carrinho.html">carrinho</a></li>
      <li class="menu-item"><a href="FLOPPY ARCH.html">Inicio</a></li>
      <li class="menu-item"><a href="FLOPPY ARCH entrar.html">entrar</a></li>
      <li class="menu-item"><a href="FLOPPY ARCH contato.html">contato</a></li>
    </ul>
  <head>
   
</body>
<script src="menuteste.js"></script>
<script>
  function remove(x){
    window.open("remover.php?id=" + x, "_self");
  }
</script>
</html>   