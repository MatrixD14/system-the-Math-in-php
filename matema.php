<html>
  <head>
    <title>adiciona number</title>
    <style>
        input,
        body,
        form,
        #numero {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
        }

        body,
        #but {
            background: black;
            margin: 2px;
            color: white;
        }

        #for,
        #numero,
        #but {
            border-radius: 10px;
            padding: 10px;
            border: 3px solid black;
        }

        #for {
            background: white;
        }
    </style>
</head>
<body>
    <form method="GET" action="soma.php" id="for">
      <input valor="" name="numero" id="numero" type="number" placeholder="numero"><br>
      <input type="submit" value="Enter" id="but"></form>
</body>

</html>