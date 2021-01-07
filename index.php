<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Cuaderno</title>
</head>
<body>
<div class="gridcont">
  <div class="itemTitle" id="topTitle">
    <h1>Cuaderno</h1>
  </div>
  <div class="itemExplore">
    <h3>Exploration Bar</h3>
    <div class="Buttons">
        <button type="button" onclick="pageReq('ajax',1)">Tutorial de AJAX</button>
        <button type="button" onclick="pageReq('php',1)">Platzi introducción a PHP</button>
        <button type="button" onclick="pageReq('php',2)">Manejos de datos en PHP</button>
        <button type="button" onclick="pageReq('php',3)">POO en PHP</button>
        <button type="button" onclick="pageReq('php',4)">Introducción a frameworks</button>
        <button type="button" onclick="pageReq('SQL',1)">PostgreSQL</button>
    </div>
  </div>
  <div class="itemViewer" id="display">
    <h1> Bienvenido </h1>
  </div>
</div>
<div id="goTop">
  <a href="#topTitle">Go to top</a>
</div>
</body>
         <script src="Request.js"></script>
</html>
