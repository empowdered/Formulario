/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var indFila = 0;

function agregarFila(colCount) {
    with (document) {
        var table = getElementById('table');
        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);
        for (var i = 0; i < colCount; i++) {
            row.insertCell(i);
        }
    }
}
function agregarColumna(colCount) {
    with (document) {
        var table = getElementById('table');
        var rowCount = table.rows.length;
        for (var i = 0; i < rowCount; i++) {
            var row = table.rows[i];
            row.insertCell(colCount);
        }
    }
}
function eliminaFila(id) {
    with (document) {
        var table = getElementById(id);
        var rowCount = table.rows.length;
        //console.log(rowCount);

        if (rowCount <= 1)
            alert('No se puede eliminar el encabezado');
        else
            table.deleteRow(rowCount - 1);
    }
}
function agregaFila(id) {
    with (document) {
        var table = getElementById(id);
        var largo = table.rows.length;

        var elemento = '<td><input type="text" name="item[]" id="' + indFila + '" value=""/></td>';
        indFila++;
        elemento += '<td><input type="text" name="item[]" id="' + indFila + '" value=""/></td>';
        indFila++;
        elemento += '<td><input type="text" name="item[]" id="' + indFila + '" value=""/></td>';
        indFila++;
        elemento += '<td><input type="text" name="item[]" id="' + indFila + '" value=""/></td>';
        indFila++;
        elemento += '<td><input type="text" name="item[]" id="' + indFila + '" value=""/></td>';

        table.insertRow(largo).innerHTML = elemento;
        indFila++;
    }
}
function addElement(id) {
    with (document) {
        agregaFila(id);
    }
}
function delElement(id) {
    with (document) {
        eliminaFila(id);
    }
}
/*
 var tabla = getElementById(id);
 
 // Create an empty <tr> element and add it to the 1st position of the table:
 var fila = tabla.insertRow(tabla.rows.length);
 
 var col1 = fila.insertCell(0);
 var col2 = fila.insertCell(1);
 var col3 = fila.insertCell(2);
 var col4 =x fila.insertCell(3);
 var col5 = fila.insertCell(4);
 
 col1.innerHTML = '<input type="text" name="item[]" id="" value=""/>';
 col2.innerHTML = '<input type="text" name="item[]" id="" value=""/>';
 col3.innerHTML = '<input type="text" name="item[]" id="" value=""/>';
 col4.innerHTML = '<input type="text" name="item[]" id="" value=""/>';
 col5.innerHTML = '<input type="text" name="item[]" id="" value=""/>';
 */