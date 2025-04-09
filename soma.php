<?php
if(isset($_GET['number'])){
$resu = $_GET['number'];
}
$verifica =$_GET['number'] ==""?true:false;

function soma($valor){
      for ($i = 1; $i <= 10; $i++) {
         echo "$valor + $i = " . ($valor + $i) . "<br>";
      }
}
function sub($valor){
    for ($i = 1; $i <= 10; $i++) {
        echo "$valor - $i = " . ($valor- $i) . "<br>";
  }
}
function subs($valor){
    for ($i = 1; $i <= 10; $i++) {
        echo "$i - $valor= " . ($i - $valor) . "<br>";
    }
}
function mult($valor){
    for ($i = 1; $i <= 10; $i++) {
        echo "$valor X $i = " . ($valor * $i) . "<br>";
  }
}
function div($valor){
  if($valor!=0){
    for ($i = 1; $i <= 10; $i++) {
        echo "$i / $valor= " . round($i / $valor,2) . "<br>";
      }
  }else{
    echo"nao e divisivel por 0";
    }
  }


function divs($valor){
    for ($i = 1; $i <= 10; $i++) {
        echo "$valor / $i= " . round($valor/ $i,2) . "<br>";
  }
} 
function raizs($raizs){
  $r = $raizs/2;
  do{
    $raiz = $r;
    $r = ($r * $r + $raizs)/(2 * $r);
  }while(-($r - $raiz)>0.0001);
  return round($r,3);
}
function raiz($valor){
    if($valor != 0){
      if($valor>=1 && $valor <= 3){
      echo "1 a 3 não são exatas: ".raizs($valor);
      }else{
        echo raizs($valor);
      }
    }else{
      echo "não e posivel fazer a raiz por 0";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Matemática</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: sans-serif; }
    body { background: #111; color: #fff; padding: 50px 20px; text-align: center; }
    h1 { font-size: 3rem; margin-bottom: 30px; border-bottom: 3px solid #fff; padding-bottom: 10px; text-transform: uppercase; }
    .form { background: #222; padding: 30px; border-radius: 12px; box-shadow: 0 0 20px #000; display: inline-block; margin-bottom: 40px; }
    .forms { display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; margin-bottom: 20px; }
    .cor { display: none; }
    label { background: #444; color: #fff; padding: 12px 24px; border-radius: 8px; cursor: pointer; transition: 0.3s;font-size: 2rem;}
    .cor:checked + label { background: #fff; color: #000; border: 2px solid #fff; }
    .button, .buttons { padding: 12px 30px; border-radius: 8px; font-size: 1.5rem; margin-top: 15px; cursor: pointer; display: inline-block; }
    .button { background: #fff; color: #000; border: none; }
    .buttons { background: transparent; color: #fff; border: 2px solid #fff; text-decoration: none; margin-left: 10px; }
    .buttons:hover { background: #fff; color: #000; }
    .lado { display: flex;flex-wrap: wrap; gap: 20px; justify-content: center; }
    .lado div { background: #333; border: 2px solid #fff; padding: 20px; border-radius: 10px; min-width: 240px; min-height: 180px;flex-direction: column; align-items: flex-start; justify-content: center;text-align: left; }
    .lado h3{ align-items: center; text-align: center;justify-content: flex-start;}
    .lado .top{ align-items: center; text-align: center;justify-content: flex-start;}
    h3 { font-size: 2rem; margin-bottom: 10px; }
    p { font-size: 2rem; white-space: pre-line; }
  @media (max-width: 600px) {
    h1 {
      font-size: 2.2rem;
    }

    .form {
      padding: 20px;
      width: 100%;
    }

    label {
      padding: 10px 18px;
    }

    .button,
    .buttons {
      font-size: 1.2rem;
      padding: 10px 20px;
    }

    h3 {
      font-size: 1.6rem;
    }

    p,label {
      font-size: 1.4rem;
    }
  }
</style>

  </style>
</head>
<body>
  <h1><u>basic math</u></h1>
  <?php
    if(!$verifica){
        ?>
  <div class="form"> 
    <form method="POST" class="forms">
    <?php
        $ops = ["soma" => "Soma", "sub_ver" => "Subt. Ver.", "sub_inv" => "Subt. Inv.","divi_ver" => "Div. Ver.", "divi_inv" => "Div. Inv.", "mult" => "Multiplicação",  "raiz" => "Raiz"];
          foreach ($ops as $id => $label) {
            echo "<input type='checkbox' id='$id' name='$id' class='cor'><label for='$id'>$label</label>";
          }
        ?>
    <input type="submit" name="Enter" value="Start" class="button">
    </form>
    <a href="matema.php" class="buttons" >Return</a> 
  </div>
 <?php }?>
  <div class="lado">
    <?php 
    if($verifica){
    echo "<div class='top'><h3><u>you don't add valor</u></h3> <a href='matema.php' class='buttons'>Return</a>";
}
      if (isset($_POST['soma'])){ echo "<div><h3><u>Soma</u></h3><p>"; soma($resu); echo "</p></div>";}
      if (isset($_POST['sub_ver'])){ echo "<div><h3><u>Subtração</u></h3><p>"; sub($resu); echo "</p></div>";}
      if (isset($_POST['sub_inv'])) {echo "<div><h3><u>Subtração Inversa</u></h3><p>"; subs($resu); echo "</p></div>";}
      if (isset($_POST['mult'])) {echo "<div><h3><u>Multiplicação</u></h3><p>"; mult($resu); echo "</p></div>";}
      if (isset($_POST['divi_ver'])) {echo "<div><h3><u>Divisão Verso</u></h3><p>"; div($resu); echo "</p></div>";}
      if (isset($_POST['divi_inv'])) {echo "<div ><h3><u>Divisão Inversa</u></h3><p>"; divs($resu); echo "</p></div>";}
      if (isset($_POST['raiz'])) {echo "<div class='top'><h3><u>Raiz</u></h3><p>"; raiz($resu); echo "</p></div>";}
    ?>
  </div>
</body>
</html>
