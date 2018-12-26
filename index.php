<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Carta de Recomendação</title>
    <link rel="stylesheet" href="_bootstrap/bootstrap.css"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="icon" type="imagem/png" href="_img/logo1.png" />
    <link type="text/javascript" src="_js/bootstrap.js" />
  </head>
  <script type="text/javascript">
  function marcardesmarcar(check,id,check2){
  d = document.form;

  if (document.getElementById(check+id).checked==true){
      document.getElementById(check2+id).checked=false;
  }

}
  </script>
  <body>
    <header class="cabecalho">
        <img src="_img/logo1.png" alt="Belém">
        <h2>Igreja Evangélica Assembléia de Deus<br/> Ministério do Belém</h2>
        <p>Rua: Cuiabá nº 1390 - Dourados/MS - 79802-030 <br/> Fones: (67)3421-0392 / 3421-0256 Caixa Postal 58</p>
        <h3>Carta de Apresentação</h3>
    </header>
    <form class="destino" method="post">
	   <input type="checkbox" id="check<?=$id_cliente?>" name="check<?=$id_cliente?>" style="width:30px"  onclick="marcardesmarcar('check','<?=$id_cliente?>','checkna');"> Mudança
    </form>
    <form class="destino2" action="index.html" method="post">
      <input type="checkbox" id="checkna<?=$id_cliente?>" name="checkna<?=$id_cliente?>" style="width:30px"  onclick="marcardesmarcar('checkna','<?=$id_cliente?>','check');" > Visita
    </form>
	   <br><br>
  <form class="" action="index.html" method="post">

  </form>
  </body>
</html>
