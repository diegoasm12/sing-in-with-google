<?php
function conexion(){
    $conn = mysqli_connect('localhost', 'root', '', 'user');
    if(!$conn){
        die("Error de conexion: ".mysqli_connect_error());
    }
    return $conn;
}

function getTable($conn ){
    $query = "SELECT * FROM usuarios";
    $result = mysqli_query($conn, $query);
    $table = "<table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody>";
    while($row = mysqli_fetch_array($result)){
        $table .= "<tr>
                        <td>{$row['nombre']}</td>
                        <td>{$row['apellido']}</td>
                        <td>{$row['correo']}</td>
                    </tr>";
    }
    $table .= "</tbody>
            </table>";
    return $table;
}
