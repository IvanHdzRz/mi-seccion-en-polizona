
<?PHP
    $hostname_localhost ="68.70.164.26";
	$database_localhost ="polizona_in5";
	$username_localhost ="polizona_22";
    $password_localhost ="EL-22-me-toca";
    
    
    $conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
    $resultado=mysqli_query($conexion,'SELECT idEmpresa, industria,clientes FROM balances');
    if($conexion){
        echo "<table>";
        echo "<th> Boleta</th>";
        echo "<th> Industria</th>";
        echo "<th> Materia</th>";
        echo "<th> Liquidez</th>";
        echo "<th> Evaluacion</th>";
        while($registro=mysqli_fetch_array($resultado)){
            $result["Boleta"]=$registro['boleta'];
            $result["Industria"]=$registro['industria'];
            $result["Materia"]=$registro['materia'];
            $result["Liquidez"]=$registro['liquidez'];
            $result["Evaluacion"]=$registro['evaluacion'];
            $json['Clasificador'][]=$result;
            
            echo "<tr>";
                echo "<td>".$registro['boleta']." </td>";
                echo "<td>".$registro['industria']." </td>";
                echo "<td>".$registro['materia']." </td>";
                echo "<td>".$registro['liquidez']." </td>";
                echo "<td>".$registro['evaluacion']." </td>";
            echo "</tr>";
        }
        
        echo "</table>";
        
        json_encode($json);
        mysqli_close($conexion);
    }
    else{
        echo "error";
    }
    
        
?>


?>