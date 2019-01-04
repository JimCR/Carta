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
    <form class="destino2" action="#" method="post">
      <input type="checkbox" id="checkna<?=$id_cliente?>" name="checkna<?=$id_cliente?>" style="width:30px"  onclick="marcardesmarcar('checkna','<?=$id_cliente?>','check');" > Visita
    </form>
	   <br><br>
  <form class="bdy" action="#" method="post">
    <p class="part1">Recomendamos a Igreja Evangélica Assembleia de Deus em <input type="placeholder"/> </br></br>
     irmão(a) <input class="input2" type="placeholder"/>
    </p>
  </form>
  <form class="membro" method="post">
   <input type="checkbox" id="check<?=$id_cliente?>" name="check<?=$id_cliente?>" style="width:30px"  onclick="marcardesmarcar('check','<?=$id_cliente?>','checkna');"> <p class="text1_mbm">Membro desta Igreja</p>
  </form>
  <form class="congregado" action="#" method="post">
    <input type="checkbox" id="checkna<?=$id_cliente?>" name="checkna<?=$id_cliente?>" style="width:30px"  onclick="marcardesmarcar('checkna','<?=$id_cliente?>','check');" > <p class="text2_mbm">Congregado(a) nesta Igreja</p>
  </form>
  <form class="cargo" action="index.html" method="post">
    <p class="text3_cargo">Cargo </p> <input type="placeholder" name="cargo" >
  </form>
  <form class="estado_civil" action="index.html" method="post">
    <p class="text4_estado">Estado Civil</p> <input type="placeholder" name="estado civil" >
  </form>
  <form class="setor" action="index.html" method="post">
    <p class="text5_setor">Setor</p> <input type="placeholder" name="setor" >
  </form>
  <form class="congregacao" action="index.html" method="post">
    <p class="text6_congreg">Congregação</p> <input type="placeholder" name="congregacao">
  </form>
  <form class="compl" action="index.html" method="post">
    <p>Certo de vosso amor cristão, pedimos que o (a) recebais fraternalmente no Senhor Jesus. </br> No ensejo externamos nosso sincero apreço por essa amada igreja.</p>
  </form>
  <form id="observation">
    <p>Oberservação: </p>
      <textarea class="input3"></textarea>
  </form>

  <div class="data">
    <input type="date"/>
  </div>
  </body>
  <footer class="rodape">
    <div class="assinatura">
      <label>__________________________________________</label>
    </div>
    <div class="ass_pastor">
      <p>Assinatura</p>
    </div>
  </footer>
</html>
