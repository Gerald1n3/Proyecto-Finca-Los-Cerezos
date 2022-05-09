
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
    <script src="https://kit.fontawesome.com/496c472379.js" crossorigin="anonymous"></script>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #ff6b00;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./imagenes/sena.png" alt="" width="30" height="24">
              </a>
          <a class="navbar-brand" href="#">Finca los cerezos</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
          </div>
        </div>
      </nav>
      <br>
      <br>
      <br>
      <br>
      <center>
        <form action="validar.php" method="post">
        <div class="card" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title">Iniciar sesión</h5>
              <table>
                <tr>
                    <td>
                        <br>
                        <i class="fa-solid fa-user-group"></i>
                    </td>
                    <td>
                      <div class="form-group">
                          <div class="col-md-12">
                              <label class="control-label" for="rol"></label>
                              <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-gbp"></span></span>
                                  <select class="form-control"  name="rol">
                                      <option>Escoja un perfil</option>
                                      <option>Administrador</option>
                                      <option>Aprendiz</option>
                                      <option>Jornalero</option>
                                  </select>
                              </div>
                          </div>
                    </td>
                </tr>
                  <tr>
                      <td>
                        <i class="fa-solid fa-user"></i>
                      </td>
                      <td>
                        <input class="form-control form-control-sm" type="text" name="usuario" aria-label=".form-control-sm example" required placeholder="Ingrese su usuario">
                      </td>
                  </tr>
                  <tr>
                      <td>
                        <i class="fa-solid fa-unlock-keyhole"></i>
                      </td>
                      <td>
                        <input class="form-control form-control-sm" type="password" name="contraseña" aria-label=".form-control-sm example" required placeholder="Ingrese su contraseña">
                      </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                            <tr>
                                <td colspan="2">
                                  <div class="alert"><?php echo isset($alert)? $alert:''?></div>
                                    <div class="d-grid gap-1">
                                    
                                      <button class="btn btn-ligth" style="background-color: rgb(228, 121, 34);">Acceder</button><br>
                                      </div>
                                      
                                      <button class="btn btn-ligth" style="background-color: rgb(211, 211, 211);" type="submit">¿Olvidó su contraseña?</button>
              
                                      <a href="registrar.html" class="btn btn-ligth" style="background-color: rgb(211, 211, 211)">Registrarse</a>
                                </td>
                            </tr>
                       
                    </td>
                </tr>
              </table>
              <br>
              
               
              
            </div>
          </div>
        </form>
      </center>
      <br>
      <br>
      <br>
      <br><br><br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  </body>
  <br>

  <div class="b-example-divider"></div>
<div class="container">
<footer class="py-3 my-4">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
  </ul>
<p class="text-center text-muted">&copy; 2022 Finca Agrosena 4.0</p>
<div>
<center>
    <img src="./imagenes/portada.jpeg" alt="" width="561" height="110">
    <img src="./imagenes/sennova.jpeg" alt="" width="561" height="138">
</center>
</footer>
</div>
</html>