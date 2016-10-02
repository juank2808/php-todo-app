<!DOCTYPE html>
<html>
    <head>
        <!--http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_ref_table-striped&stacked=h -->
        <meta charset = "utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
        crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/estilos2.css" type="text/css" />
    </head>
    <body>
    <?php
    
        require_once('reciDatos.php');
        print "<div class='table table-striped'>";
        print "<table class='table table-striped'>";
        print "<thead><tr>"."<td><strong>ID</strong></td>". "<td><strong>Nombre</strong></td>" . "<td><strong>Descripción</strong></td> "."</tr></thead>";
        print "<tbody>";
        foreach($result as $row){
            
            print "<tr>"."<td>".$row["ID"]."</td>"."<td>".$row["nombre"]."</td>"."<td>".$row["descripcion"]."</td>"."</tr>";
            
        }
        print "</tbody>";
        print "</table>";
        print "</div>";
    ?> 
    </body>
  
</html>
