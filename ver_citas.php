<?php

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "citas_medicas");

// Consulta para obtener todas las citas
$sql = "SELECT * FROM citas";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

?>

<h1>Lista de citas médicas</h1>

<table border="1">

<tr>
<th>Paciente</th>
<th>Doctor</th>
<th>Fecha</th>
<th>Hora</th>
</tr>

<?php

// Mostrar las citas en la tabla
while($fila = mysqli_fetch_assoc($resultado)) {

echo "<tr>";
echo "<td>".$fila['paciente']."</td>";
echo "<td>".$fila['doctor']."</td>";
echo "<td>".$fila['fecha']."</td>";
echo "<td>".$fila['hora']."</td>";
echo "</tr>";

}

?>

</table>