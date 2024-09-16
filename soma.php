<?php $valor = $_GET['numero'];
function soma($som){
  if($som==""){
    echo"valor vazio";
  }else{
    for ($i = 1; $i <= 10; $i++) {
        echo "$som + $i = " . ($som + $i) . "<br>";
    }
  }
}
function sub($sub){
  if($sub ==""){
  echo"valor vazio";
  }else{
    for ($i = 1; $i <= 10; $i++) {
        echo "$sub - $i = " . ($sub - $i) . "<br>";
   }
  }
}
function subs($subs){
  if($subs==""){
    echo "valor vazio";
  }
    for ($i = 1; $i <= 10; $i++) {
        echo "$i - $subs = " . ($i - $subs) . "<br>";
    }
}
function mult($mult){
  if($mult ==""){
    echo"valor vazio";
  }else{
    for ($i = 1; $i <= 10; $i++) {
        echo "$mult X $i = " . ($mult * $i) . "<br>";
    }
  }
}
function div($div){
  if($div == ""){
    echo "valor vazio";
  }else{
  if($div!=0){
    for ($i = 1; $i <= 10; $i++) {
        echo "$i / $div= " . round($i / $div,2) . "<br>";
      }
  }else{
    echo"nao e divisivel por 0";
    }
  }
}

function divs($divs){
  if($divs ==""){
    echo"valor vazio";
  }else{
    for ($i = 1; $i <= 10; $i++) {
        echo "$divs / $i= " . round($divs / $i,2) . "<br>";
    }
  }
} 
function raizs($rai){
  $r = $rai/2;
  do{
    $rais = $r;
    $r = ($r * $r + $rai)/(2 * $r);
  }while(-($r - $rais)>0.0001);
  return round($r,3);
}
function raiz($raiz){
  if($raiz == ""){
    echo "valor vazio";
  }else{
    if($raiz != 0){
      if($raiz >=1 && $raiz <= 3){
      echo "1 a 3 não são exatas: ".raizs($raiz);
      }else{
        echo raizs($raiz);
      }
    }else{
      echo "não e posivel fazer a raiz por 0";
    }
  }
}
?>
<html>
<head>
    <title>Matematica</title>
    <style>
        body,.forms, .form, .button,h3,.lado {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        body {
            flex-direction: column;
            background: black;
            width: 100%;
        }
        h1, .form {
           /* flex-direction: row;*/
            padding: 0 25% 0 25%;
        }
        .forms {
            margin: 0 0 0 10px;
        }
        h1,label,.cor,.buttons,.button,h3, p {
            font-size: 35px;
            padding: 5px;
            margin: 5px;
        }
        .cor {
            display: none;
        }
        label, .cor {
            user-select: none;
            background: blue;
        }

        h1, h3, p, label, .cor, .buttons {
            color: white;
        }
        .cor:checked+label, .buttons {
            background: black;
            border: 2px solid white;
        }
        .button {
            color: black;
            background: white;
        }
        .buttons, .button {
            border-radius: 5px;
            border: none;
        }
        a {
            text-decoration: none;
        }
        h3,p {
            border: 2px solid white;
        }
        h3, .form {
            background: gray;
        }
    </style>
</head>
<body>
    <h1><u>matematica basica</u></h1>
    <div class="form">
        <form method="POST" action="" class="forms">
            <input type="checkbox" id="soma" name="soma" class="cor">
            <label for="soma">soma</label>
            <input type="checkbox" id="sub_ver" name="sub_ver" class="cor">
            <label for="sub_ver">subt_ver</label>
            <input type="checkbox" id="sub_inv" name="sub_inv" class="cor">
            <label for="sub_inv">subt_inv</label>
            <input type="checkbox" id="mult" name="mult" class="cor">
            <label for="mult">multiplicação</label>
            <input type="checkbox" id="divi_ver" name="divi_ver" class="cor">
            <label for="divi_ver">divi_ver</label>
            <input type="checkbox" id="divi_inv" name="divi_inv" class="cor">
            <label for="divi_inv">divi_inv</label>
            <input type="checkbox" id="raiz" name="raiz" class="cor">
            <label for="raiz">raiz</label>
            <input type="submit" value="Enter" name="Enter" class="button">
        </form>
        <a href="matema.php"><input type="submit" value="sair" name="sair" class="buttons"></a>
    </div>
    <div class="lado">
        <?php 
            if (isset($_POST['soma'])) { ?><div>
                    <h3><u>soma</u></h3>
                    <p><?php echo soma($valor); ?></p>
                </div><?php }
                    if (isset($_POST['sub_ver'])) { ?><div>
                    <h3><u>subtração_inverso</u></h3>
                    <p><?php echo sub($valor); ?></p>
                </div><?php }
                    if (isset($_POST['sub_inv'])) { ?><div>
                    <h3><u>subtração_inverso</u></h3>
                    <p><?php echo subs($valor); ?></p>
                </div><?php }
                    if (isset($_POST['mult'])) { ?><div>
                    <h3><u>multiplicação</u></h3>
                    <p><?php echo mult($valor); ?></p>
                </div><?php }
                    if (isset($_POST['divi_ver'])){ 
                    ?> 
                          <div>
                             <h3><u>divisão-verso</u></h3>
                             <p><?php echo div($valor); ?></p>
                          </div>
                    <?php } if (isset($_POST['divi_inv'])) { ?>
                       <div>
                        <h3><u>divisão-inverso</u></h3>
                        <p><?php echo divs($valor); ?></p>
                    </div><?php } 
                    if(isset($_POST['raiz'])){?>
                    <div>
                        <h3><u>raiz</u></h3>
                        <p><?php echo raiz($valor); ?></p>
                    </div><?php } ?>
</body>
</html>