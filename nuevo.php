<html>
    <head>
        <title>Nuevo Usuario</title>
        <meta charset="utf-8">
    </head>
    
    <body>
    
        <h1 style="background-color:purple;">Ingresar Nuevo Donante</h1>
        
        <form action="new_respuesta.php" method="post">
        <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombre">
            </div>
            <div class="mb-3">
                <label for="Apellido" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="Apellido">
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" name="Email">
            </div>
            <div class="mb-3">
                <label for="Telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="Telefono">
            </div>    
            <div class="mb-3">
                <label for="Cantidad" class="form-label">Cantidad de arboles</label>
                <input type="number" class="form-control" name="Cantidad">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            
        </form>
    
    </body>

</html>