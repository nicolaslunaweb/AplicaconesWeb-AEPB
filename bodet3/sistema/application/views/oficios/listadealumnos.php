<html>
<head>
  <meta charset="utf-8" />
  <title></title>
</head>
<body>
<table width="100%">
 <thead>
  <tr>
    <th>Matricula</th>
    <th>Nombre</th>
    <th>Paterno</th>
    <th>Materno</th>
    <th></th>
  </tr>
</thead>
<tbody>
<?php
if($alumnos){
foreach($alumnos as $valor):?>
  <tr>
        <td><?=$valor->matricula ?></td>
        <td><?=$valor->nombre ?></td>
        <td><?=$valor->paterno ?></td>
        <td><?=$valor->materno ?></td>
        <td>________________________________</td>
  </tr>
<?php endforeach; }else{echo "<tr><td colspan=5>No hay Datos</td></tr>";}?>
</tbody>
</table>
</body>
</html>