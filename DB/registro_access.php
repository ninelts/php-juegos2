<?php
require("conecta.php");
$con=conectar();
 
  $usr_nombre = $_POST ['txt_nombre'];
  $usr_password =$_POST ['txt_password'];
  $usr_correo =$_POST ['txt_email'];
  $usr_genero = $_POST ['txt_genero'];
  $usr_telefono = $_POST ['txt_telefono'];
  $usr_fecha = $_POST ['txt_fecha'];
  
 $sql = "INSERT INTO USUARIO(usr_nombre,usr_password,usr_fecha,usr_genero,usr_telefono,usr_correo) VALUES ('$usr_nombre','$usr_password','$usr_fecha','$usr_genero','$usr_telefono','$usr_correo')";
  
  
      if (mysqli_query($con,$sql)){ echo "grabo";}else{echo "error
      ". mysqli_error($con);}

      $sqlSel = "select * from USUARIO ";

      $result = mysqli_query($con,$sql);
  ?>
  <head>
     <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script> 
    <script> $(document).ready( function () {
    $('#table_id').DataTable();
} ); </script>  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  
  </head>
  <body>
    <table border=1  id="table_id" class="display">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido .P</th>
            <th>Apellido .M</th>
            <th>Correo</th>
            <th>strongRut</th>
        </tr>
    </thead>
    <?php
       while($row= mysqli_fetch_array($result))
       {
       	 $Nombre = $row['usr_nombre'];
       	 $Apepri = $row['usr_apellido1'];
       	 $Apeseg = $row['usr_apellido2'];
       	 $Email = $row['usr_correo'];
       	 $RUT = $row['usr_rut'];
?>




     
    <tbody>
        
         <tr>
            <td><?php echo $Nombre ?></td>
            <td><?php echo $Apepri ?></td>
            <td><?php echo $Apeseg ?></td>
            <td><?php echo $Email ?></td>
            <td><?php echo $RUT ?></td>
        </tr>   
        
    </tbody>
    <?php
       }
    ?>
</table>

</body>
 