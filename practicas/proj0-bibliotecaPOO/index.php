<?php
    class Llibre {
        public string $titol;
        public string $autor;
        public int $anyPublicacio;
        public string $foto;

        public function __construct(string $titol, string $autor, int $anyPublicacio, string $foto) {
            $this->titol = $titol;
            $this->autor = $autor;
            $this->anyPublicacio = $anyPublicacio;
            $this->foto = $foto;
        }
        public function mostrarDetailes () {
            return $this->titol . ' de ' . $this->autor . ',' . $this->anyPublicacio;
        }
    }

    class Biblioteca {

        public function AfegirLlibre () {
            //  permet afegir un llibre a la col·lecció.

        }
        public function MostrarLlibres () {
            // retorna una llista amb els llibres actuals de la biblioteca.

        }
        public function CercarLlibre ($title) {
            // permet buscar un llibre que contingui un text determinat en el títol (no és necessari que sigui exacte).

        }
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


    <form class="max-w-sm mx-auto">
        <div class="mb-5">
            <label for="title">Título</label>
            <input type="text" id="title" class="block w-full p-2.5 rounded-lg focus:ring-blue-500 bg-gray-50 border border-gray-300 text-gray-900" required> 
        </div>
        <div class="mb-5">
            <label for="author">Nombre del Autor</label>
            <input type="text" id="author" class="block w-full p-2.5 rounded-lg focus:ring-blue-500 bg-gray-50 border border-gray-300 text-gray-900" required> 
        </div>
        <div class="mb-5">
            <label for="year">Año de Publicación</label>
            <input type="number" id="year" class="block w-full p-2.5 rounded-lg focus:ring-blue-500 bg-gray-50 border border-gray-300 text-gray-900" required> 
        </div>
        <div class="mb-5">
            <label for="url">URL Imagen</label>
            <input type="text" id="url" class="block w-full p-2.5 rounded-lg focus:ring-blue-500 bg-gray-50 border border-gray-300 text-gray-900" required> 
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</body>
</html>