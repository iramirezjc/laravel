<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos</title>
</head>
<body>
    <div class="equipos-index">
        <div class="row">
            <div class="col-sm-12">
                <h2>Equipos</h2>    
                <div class="panel-body">
                    <form method="post" action="MostrarEquipo.php" >
                        Nombre de equipo: <input type="text" name="filtro_nom" id="filtro_nom" />
                        <button class="btn btn-success">Buscar</button>
                    </form>
                    <a href="create.php"> <button class="btn btn-primary" type="button" value="Agrgar">Agregar equipos</button> </a>
                </div>
            </div>
            <div class="equipos">
                <table class="table table-bordered table-hover alert-light">
            
                <!--<table border="1" id="tablas">-->
                <thead>
                    <tr>
                        <th>Nombre del equipo</th>
                        <th >Cantidad</th>
                        <th>Descripcion</th>
                        <th>Tipo</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
            </div>
        </div>
    </div>
</body>
</html>