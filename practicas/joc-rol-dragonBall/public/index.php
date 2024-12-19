<!-- Formulario para crear y ver personajes -->
<!-- Mostrar un formulari per introduir les dades del Gormiti:
    Nom.
    Salut.
    Dany.
    URL de la imatge.
    Habilitats (separades per comes).
Quan s’enviï el formulari:
    Crear un nou objecte Gormiti utilitzant la classe.
    Desa l’objecte a $_SESSION['gormitis'] (serialitzat amb serialize).
    Serialize serveix per transformar un objecte a text per poder emmagatzemar-ho dins de la nostra variable de sessió que és un array i que no tinguem cap error.
    Mostrar un botó per anar a la pàgina characters.php, on es poden veure els Gormitis creats. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>