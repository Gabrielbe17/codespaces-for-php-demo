<?php
    class Biblioteca {
        public $libros = [];
        public function afegirLLibre ($libro) {
            array_push($this->libros, $libro);
        }
        public function mostrarLlibres () {
            // retorna una llista amb els llibres actuals de la biblioteca.
            $cardsLibros = "";
            foreach ($this->libros as $libro) {
                $cardsLibros .= "
                    <div class='max-w-sm rounded overflow-hidden shadow-lg'>
                        <img class='w-full' src='{$libro->foto}' alt='image'>
                        <div class='px-6 py-4'>
                            <div class='font-bold text-xl mb-2 title-book'>{$libro->titol}</div>
                            <p class='text-gray-700 text-base'>
                                Autor: {$libro->autor}
                            </p>
                            <p class='text-gray-700 text-base'>
                                Año: {$libro->anyPublicacio}
                            </p>
                        </div>
                    </div>
                ";
            }
            return $cardsLibros;
        }
        public function cercarLlibre ($title) {
            // permet buscar un llibre que contingui un text determinat en el títol (no és necessari que sigui exacte).
            $resultados = "";
            foreach ($this->libros as $libro) {
                // var_dump($libro->titol);
                if (stripos($libro->titol, $title) !== false) {

                    $resultados .= "
                        <div class='max-w-sm rounded overflow-hidden shadow-lg'>
                            <img class='w-full' src='{$libro->foto}' alt='image'>
                            <div class='px-6 py-4'>
                                <div class='font-bold text-xl mb-2 title-book'>{$libro->titol}</div>
                                <p class='text-gray-700 text-base'>
                                    Autor: {$libro->autor}
                                </p>
                                <p class='text-gray-700 text-base'>
                                    Año: {$libro->anyPublicacio}
                                </p>
                            </div>
                        </div>
                    ";
                }
            }

            return $resultados ? $resultados :  "<p class='text-center border'>No se ha encontrado ningún libro.</p>";
        }
    }
?>