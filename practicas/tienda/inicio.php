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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- 1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    *{
      box-sizing: border-box;
    }
    body{
      display: flex;
      align-items: center;
      min-height: 100vh;
    }
    .container-fluid{
      max-width: 75rem;
      padding: 1rem;
      margin: 0 auto;
    }

  </style>

</head>
<body>
    <div class="container-fluid">
        <div class="container text-center my-5">
          <h1>Bienvenido a Mercadona</h1>
          <p>Por favor, completa el siguiente formulario para continuar tu compra.</p>
        </div>

        <div class="container">
            <form class="row g-3 needs-validation d-flex flex-column align-items-center" action="" novalidate>
              <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nombre: </label>
                <input type="text" class="form-control" id="validationCustom01" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-4">
                <label class="form-label" for="typePhone">Número de Teléfono: </label>
                <input type="tel" id="typePhone" class="form-control" required>
              </div>

              <div class="col-md-4">
                <label for="basic-url">URL Foto de Perfil: </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">https://.../img.png</span>
                  </div>
                  <input type="url" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
                </div>
              </div>

              <div class="col-md-4 text-center">
                <button class="btn btn-primary w-100" type="submit">Enviar</button>
              </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      //validacion con bootstrap
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            }, false)
          })
      })()
    </script>
</body>
</html>