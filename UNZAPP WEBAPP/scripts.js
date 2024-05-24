document.addEventListener('DOMContentLoaded', function() {
    const timetable = document.getElementById('timetable').getElementsByTagName('tbody')[0];
    
    const timeSlots = [
        '8:00 AM - 9:00 AM', 
        '9:00 AM - 10:00 AM', 
        '10:00 AM - 11:00 AM', 
        '11:00 AM - 12:00 PM', 
        '12:00 PM - 1:00 PM', 
        '1:00 PM - 2:00 PM', 
        '2:00 PM - 3:00 PM', 
        '3:00 PM - 4:00 PM', 
        '4:00 PM - 5:00 PM'
    ];

    // Load timetable from localStorage
    loadTimetable();

    // Create rows for each time slot
    timeSlots.forEach(timeSlot => {
        const row = timetable.insertRow();
        const timeCell = row.insertCell(0);
        timeCell.textContent = timeSlot;
        
        for (let i = 1; i <= 5; i++) {
            const cell = row.insertCell(i);
            cell.contentEditable = true;
            cell.addEventListener('blur', function() {
                saveTimetable();
            });
        }
    });

    function saveTimetable() {
        const timetableData = [];
        for (let row of timetable.rows) {
            const rowData = [];
            for (let cell of row.cells) {
                rowData.push(cell.textContent);
            }
            timetableData.push(rowData);
        }
        localStorage.setItem('timetable', JSON.stringify(timetableData));
    }

    function loadTimetable() {
        const timetableData = JSON.parse(localStorage.getItem('timetable')) || [];
        timetableData.forEach((rowData, rowIndex) => {
            const row = timetable.insertRow(rowIndex);
            rowData.forEach((cellData, cellIndex) => {
                const cell = row.insertCell(cellIndex);
                cell.textContent = cellData;
                if (cellIndex > 0) { // Make cells editable except for the time column
                    cell.contentEditable = true;
                    cell.addEventListener('blur', function() {
                        saveTimetable();
                    });
                }
            });
        });
    }
});
