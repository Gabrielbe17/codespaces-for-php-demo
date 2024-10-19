<!-- 
 TODO: 
    1. Crea una nueva página inicio.php que será la primera pantalla que vea el usuario.
    2. Esta pantalla debe incluir un formulario que recoja:
    Nombre
    Teléfono
    URL de la foto de perfil
    3. Cuando el usuario envíe el formulario, debe ser redirigido a index.php 
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Mercadona</title>
    <!-- link css bootrap  -->
    <link href="https: /cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- 1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="container text-center my-5">
          <h1>Bienvenido a Mercadona</h1>
          <p>Por favor, completa el siguiente formulario para continuar tu compra.</p>
        </div>

        <div class="container">
            <!-- AQUÍ PUEDES USAR UN FORM DE BOOTSTRAP 5 SENCILLO PARA PEDIR LOS -->
            <!-- DATOS: -->
            <!-- NOMBRE -->
            <!-- APELLIDOS -->
            <!-- NÚMERO DE TELÉFONO -->
            <!-- DNI -->
            <!-- CÓDIGO DE SOCIO -->
            <!-- CORREO ELECTRÓNICO -->
            <form class="row g-3 needs-validation" novalidate>
              <div class="col-md-4">
                <label for="validationCustom01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Username</label>
                <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    Please choose a username.
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom03" class="form-label">City</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationCustom04" class="form-label">State</label>
                <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Choose...</option>
                  <option>...</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                  </label>
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
              </div>
            </form>
        </div>
    </div>

    <script src="https: /cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>