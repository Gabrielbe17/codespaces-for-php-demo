<?php
    session_start();

    $_SESSION['libros'] = [
        ["id" => 1, "image" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1348322381i/3450744.jpg", "title" => "Nudge", "author" => "Richard H. Thaler", "description" => "Every day we make choices—about what to buy or eat, about financial investments or our children’s health and education, even about the causes we champion or the planet itself. Unfortunately, we often choose poorly. Nudge is about how we make these choices and how we can make better ones. Using dozens of eye-opening examples and drawing on decades of behavioral science research, Nobel Prize winner Richard H. Thaler and Harvard Law School professor Cass R. Sunstein show that no choice is ever presented to us in a neutral way, and that we are all susceptible to biases that can lead us to make bad decisions. But by knowing how people think, we can use sensible “choice architecture” to nudge people toward the best decisions for ourselves, our families, and our society, without restricting our freedom of choice."],
        ["id" => 2, "image" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1657781256i/61439040.jpg", "title" => "1984", "author" => "George Orwell", "description" => "A masterpiece of rebellion and imprisonment where war is peace freedom is slavery and Big Brother is watching. Thought Police, Big Brother, Orwellian - these words have entered our vocabulary because of George Orwell's classic dystopian novel 1984. The story of one man's Nightmare Odyssey as he pursues a forbidden love affair through a world ruled by warring states and a power structure that controls not only information but also individual thought and memory 1984 is a prophetic haunting tale More relevant than ever before 1984 exposes the worst crimes imaginable the destruction of truth freedom and individuality. With a foreword by Thomas Pynchon. This beautiful paperback edition features deckled edges and french flaps a perfect gift for any occasion"],
        ["id" => 3, "image" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1609035271i/41804.jpg", "title" => "I, Robot", "author" => "Isaac Asimov", "description" => "I, Robot, a collection of nine short stories by science-fiction writer Isaac Asimov that imagines the development of “positronic” (humanlike, with a form of artificial intelligence) robots and wrestles with the moral implications of the technology. The stories originally appeared in science-fiction magazines between 1940 and 1950, the year that they were first published together in book form. Asimov’s treatment of robots as being programmed with ethics rather than as marauding metal monsters was greatly influential in the development of science fiction."],
        ["id" => 4, "image" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1600094749i/51952276.jpg", "title" => "Blue Giant", "author" => "Shinichi Ishizuka", "description" => "The award-winning manga of one young man’s journey to become the greatest saxophone player in the world. Dai lived a normal high school life in a city of hot summer days and rainy nights. Between basketball, part time jobs, and an uncertain future, something was missing. And that thing was music. With his days in senior year running out, Dai swears a heartfelt “I’m gonna be the best jazz player in the world.” But what do you need to be the best? Talent? Effort? A lucky break? Or maybe just a deep, pure love for music, and too much stubbornness to know when to quit. Winner of The Shogakukan Manga Award and the Japan Media Arts Festival Grand Prize for Manga!"],
        ["id" => 5, "image" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1298569792i/72029.jpg", "title" => "La historia interminable", "author" => "Michael Ende", "description" => "A cualquiera le puede ocurrir lo mismo que a Bastián: que entre en un libro y luego no pueda, o no quiera, salir de él. Bastián es un muchacho soñador, para quien la vida cotidiana en general y el colegio en particular constituyen una serie continua de sinsabores. De los que se defienden a copia de imaginación, artículo de primera necesidad. Buen día, los personajes de La historia interminable le piden ayuda. Y Bastián, que está leyendo el emocionante libro, irrumpe la aventura, dispuesto a colaborar en la salvación del reino sin fronteras de Fantasia. Y a echar una mano a Atreyu, el valeroso guerrero piel verde. Y a recorrer aquel mundo fabuloso, a lomos del dragón de la suerte. Y a codearse con silfos, gigantes comerocas, espectros, tortugas, caballos voladores, brujas, magas y mil seres fantásticos. Y a correr los peligros que haga falta correr..."]
    ];



    function editarLibro($id, $titulo, $autor, $imagen, $descripcion){
        //si pasamos un id, estamos editando un libro
        //acceder a la posicion del array del libro seleccionado, por id, y cambiar sus valores
        if (isset($_SESSION['libros'][$id - 1])) {
            $_SESSION['libros'][$id - 1] = ["title" => $titulo, "author" => $autor, "image" => $imagen, "description" => $descripcion];
        }
    }

    function agregarLibro($id, $titulo, $autor, $imagen, $descripcion){
        if (isset($_SESSION['libros'])) {
            //anyadir libro
            $nuevoLibro = ["id" => $id, "image" => $imagen, "title" => $titulo, "author" => $autor, "description" => $descripcion];
            array_push($_SESSION['libros'], $nuevoLibro);
        }
    }
    function eliminarLibro($id){
        if (isset($_SESSION['libros'][$id - 1])) {
            //eliminar libro del array sesion y array values para reindexar el array
            unset($_SESSION['libros'][$id - 1]);
            $_SESSION['libros'] = array_values($_SESSION['libros']);
        }      
    }

    function mostrarRol(){
        return ($_SESSION['role'] == 'admin' ? "<p class='text-muted m-0'><i class='fas fa-user-shield text-success'></i> Admin ✏️</p>" : " <p class='text-muted m-0'>Lector 📚</p>");
    }

?>