// Menu
function openMenu() {
    document.getElementById("sideMenu").style.width = "250px";
}

function closeMenu() {
    document.getElementById("sideMenu").style.width = "0";
}

// Tabla 1: Planilla (Fecha y Descripción de Labor)
document.addEventListener('input', function (e) {
    const table1 = document.getElementById('dynamicTable').getElementsByTagName('tbody')[0];
    const lastRow1 = table1.rows[table1.rows.length - 1];
    const lastDateInput1 = lastRow1.querySelector('.table-input-date').value;
    const lastDescriptionInput1 = lastRow1.querySelector('.table-input-description').value;

    // Si la última fila tiene algo escrito en la fecha o en la descripción, añade una nueva fila
    if (lastDateInput1.trim() !== "" || lastDescriptionInput1.trim() !== "") {
        addNewRow1();
    }
});

function addNewRow1() {
    const table1 = document.getElementById('dynamicTable').getElementsByTagName('tbody')[0];
    const lastRow1 = table1.rows[table1.rows.length - 1];
    const lastDateInput1 = lastRow1.querySelector('.table-input-date').value;
    const lastDescriptionInput1 = lastRow1.querySelector('.table-input-description').value;

    // Solo agregar una nueva fila si aún no se ha añadido una nueva fila vacía
    if (lastDateInput1 === "" && lastDescriptionInput1 === "") {
        return; // Ya hay una fila vacía, no agregar otra.
    }

    const newRow = table1.insertRow();

    // Insertar celda para la fecha
    const dateCell = newRow.insertCell(0);
    const dateInput = document.createElement('input');
    dateInput.type = 'date';
    dateInput.name = 'date[]';
    dateInput.className = 'table-input-date';
    dateInput.required = true;
    dateCell.appendChild(dateInput);

    // Insertar celda para la descripción
    const descriptionCell = newRow.insertCell(1);
    const descriptionInput = document.createElement('textarea');
    descriptionInput.name = 'description[]';
    descriptionInput.className = 'table-input-description';
    descriptionInput.required = true;
    descriptionCell.appendChild(descriptionInput);
}


// Tabla 2: Planilla (N/P y Descripción)
document.addEventListener('input', function (e) {
    const table2 = document.getElementById('dynamicTable2').getElementsByTagName('tbody')[0];
    const lastRow2 = table2.rows[table2.rows.length - 1];
    const lastTextInput2 = lastRow2.querySelector('.table-input-text').value;
    const lastDescriptionInput2 = lastRow2.querySelector('.table-input-description').value;

    // Si la última fila tiene algo escrito en N/P o en la descripción, añade una nueva fila
    if (lastTextInput2.trim() !== "" || lastDescriptionInput2.trim() !== "") {
        addNewRow2();
    }
});

function addNewRow2() {
    const table2 = document.getElementById('dynamicTable2').getElementsByTagName('tbody')[0];
    const lastRow2 = table2.rows[table2.rows.length - 1];
    const lastTextInput2 = lastRow2.querySelector('.table-input-text').value;
    const lastDescriptionInput2 = lastRow2.querySelector('.table-input-description').value;

    // Solo agregar una nueva fila si aún no se ha añadido una nueva fila vacía
    if (lastTextInput2 === "" && lastDescriptionInput2 === "") {
        return; // Ya hay una fila vacía, no agregar otra.
    }

    const newRow = table2.insertRow();

    // Insertar celda para N/P
    const textCell = newRow.insertCell(0);
    const textInput = document.createElement('input');
    textInput.type = 'text';
    textInput.name = 'text[]';
    textInput.className = 'table-input-text';
    textInput.required = true;
    textCell.appendChild(textInput);

    // Insertar celda para la descripción
    const descriptionCell = newRow.insertCell(1);
    const descriptionInput = document.createElement('textarea');
    descriptionInput.name = 'description[]';
    descriptionInput.className = 'table-input-description';
    descriptionInput.required = true;
    descriptionCell.appendChild(descriptionInput);
}

// Buscar con radio Button

// Capturar los radio buttons y campos de búsqueda
const radioNit = document.getElementById('radioNit');
const radioTicket = document.getElementById('radioTicket');
const nitInput = document.getElementById('nitInput');
const ticketInput = document.getElementById('ticketInput');

// Escuchar cuando se selecciona un radio button
radioNit.addEventListener('change', function() {
    if (this.checked) {
        nitInput.style.display = 'block';
        ticketInput.style.display = 'none';
    }
});

radioTicket.addEventListener('change', function() {
    if (this.checked) {
        ticketInput.style.display = 'block';
        nitInput.style.display = 'none';
    }
});
