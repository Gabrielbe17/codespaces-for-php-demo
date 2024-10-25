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

//TODO: FUNCION mostrarPosiblesApuestas
function mostrarPosiblesApuestas(tipoApuesta){
    let options = '';
    switch (tipoApuesta) {
        case 'Rojo/Negro':
            options = `<option>Rojo</option>
            <option>Negro</option>`
            break;
        case 'Par/Impar':
            options = `<option>Par</option>
            <option>Impar</option>`
            break;
        case 'Pasa/Falta':
            options = `<option>Pasa</option>
            <option>Falta</option>`
            break;
        case 'Pleno':
            for (let i = 0; i < 36; i++) {
                options += `<option>${i+1}</option>`;
            }
            break;
        case 'Docena':
            options = `<option>1a docena</option>
            <option>2a docena</option>
            <option>3a docena</option>`
            break;
        case 'Columna':
            options = `<option>1a columna</option>
            <option>2a columna</option>
            <option>3a columna</option>`
            break;
        case 'Dos docenas':
            options = `<option>1a y 2a dozena</option>
            <option>2a y 3a dozena</option>`
            break;
        case 'Dos columnas':
            options =`<option>1a y 2a columna</option>
            <option>2a y 3a columna</option>`
            break;
        case 'Seisena':
            options = `<option></option>
            <option></option>`
            break;
        case 'Cuadro':
            options = `<option></option>
            <option></option>`
            break;
        case 'Transversal':
            options = `<option></option>
            <option></option>`
            break;
        case 'Caballo':
            options = `<option></option>
            <option></option>`
            break;
        default:
            break;
    }
    return options;
}

