<?php
$conexion = mysqli_connect("localhost","root","","posts");

$tablas = mysqli_query($conexion,"SELECT * FROM post");

while ($row = mysqli_fetch_array($tablas)){
  echo "<table>
    <tr>
    <form action='delete.php' method='POST'>
    <td class='tdId'><input type='text' value='".$row['id']."' name='id' class='idInput'/></td>
    <td>".$row['titulo']."</td>
    <input type='hidden' value='anillos' name='tabla'/>
    <td><input type='submit' name='delete' class='btn-delete' value='Eliminar'/></td>
    </form>
  </tr>
  </table>";
}
?>
