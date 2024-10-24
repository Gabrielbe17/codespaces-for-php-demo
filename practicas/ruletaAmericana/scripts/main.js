console.log('running');

const selectApuesta = document.querySelector('select#selectTipoApuesta');
const selectPosiblesApuestas = document.querySelector('select#selectPosiblesApuestas');

selectApuesta.addEventListener('change', (e) =>{
    // alert(`Has seleccionado ${e.target.value}`);
    //TODO: FUNCION QUE, DEPENDE DEL TIPO DE APUESTA, MUESTRE LAS POSIBLES APUESTAS EN FORMA DE OPTIONS Y LAS INTRODUZCA DENTRO DEL SELECT
    let options = mostrarPosiblesApuestas(e.target.value);
    // console.log(e.target.value);
    // console.log(options);
    selectPosiblesApuestas.innerHTML = options;
});

function mostrarPosiblesApuestas(tipoApuesta){
    let options = '';
    switch (tipoApuesta) {
        case 'Rojo/Negro':
            options = `<option>Rojo</option>
            <option>Negro</option>`
            break;
        default:
            break;
    }
    return options;
}