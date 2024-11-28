console.log('running');

const selectApuesta = document.querySelector('select#selectTipoApuesta');
const selectPosiblesApuestas = document.querySelector('select#selectPosiblesApuestas');
const historyBtn = document.querySelector('#historyBtn');
const historyContainer = document.querySelector('#history');

const apuestasCaballoHorizontales = [
    '1/2', '2/3', '4/5', '5/6', '7/8', '8/9', '10/11', '11/12', 
    '13/14', '14/15', '16/17', '17/18', '19/20', '20/21', '22/23', '23/24', 
    '25/26', '26/27', '28/29', '29/30', '31/32', '32/33', '34/35', '35/36'
];
  
const apuestasCaballoVerticales = [
    '1/4', '2/5', '3/6', '4/7', '5/8', '6/9', '7/10', '8/11', '9/12', 
    '10/13', '11/14', '12/15', '13/16', '14/17', '15/18', '16/19', '17/20', 
    '18/21', '19/22', '20/23', '21/24', '22/25', '23/26', '24/27', '25/28', 
    '26/29', '27/30', '28/31', '29/32', '30/33', '31/34', '32/35', '33/36'
];
  


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
            for (let i = 1; i <= 11; i++) {
                options += `
                    <option>Seisena ${i}</option>
                `;
            }
            break;
        case 'Cuadro':
            //18 cuadrados
            for (let i = 1; i <= 22; i++) {
                options += `<option> Cuadrado ${i}</option>`;
            }
            break;
        case 'Transversal':
            for (let i = 1; i <= 13; i++) {
                options += `<option> Fila ${i}</option>`;
            }
            break;
        case 'Caballo':
            options += `
            <optgroup label="Horizontales">
               ${
                apuestasCaballoHorizontales.map((apuesta) => `<option>${apuesta}</option>`)
               } 
            </optgroup>
            <optgroup label="Verticales">
                ${
                    apuestasCaballoVerticales.map((apuesta) => `<option>${apuesta}</option>`)
                } 
            </optgroup>
            `;
            break;
        default:
            break;
    }
    return options;
}

historyBtn.addEventListener('click', function(){
    if (historyContainer.style.display == 'none') {
        historyContainer.style.display = 'block';
    }else{
        historyContainer.style.display = 'none';
    }
})