<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <title>CRUD TEST</title>
</head>
<body>
        
        <div class="d-flex p-2 justify-content-center mx-auto">
        <div class=" card" style="width: 18rem;">
            <form method="POST" action="controllers/auth.controller.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                    <input type="text" name="usuario" class="form-control" id="usuario" aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                
                <button type="submit" class="btn btn-success">Log in</button>
                
            </form>


            </div>
        </div>

            
        
    
</body>
</html>