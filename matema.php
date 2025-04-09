<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Adiciona</title>
  <style>
    * { margin: 0; box-sizing: border-box; }

    body {
      height: 100vh;
      background: black;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: sans-serif;
    }

    form {
      background: white;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
    }

    label,input {
      font-size: 40px;
      padding: 10px 20px;
      border-radius: 10px;
      margin-top: 10px;
    }

    input[type="number"] {
      border:2px solid black;
      text-align: center;
      -moz-appearance: textfield;
    }

    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
    }

    input[type="number"]:focus {
      outline: none;
      border-color: blue;
      box-shadow: 0 0 5px blue;
    }

    input[type="submit"] {
      background: black;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <form method="GET" action="soma.php">
    <label for="number">add a value</label><br><hr>
    <input id="number" name="number" type="number" placeholder="number"><br>
    <input type="submit" value="Start">
  </form>
</body>
</html>
