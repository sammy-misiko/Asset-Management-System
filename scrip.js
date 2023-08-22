// script.js

function printTableContent() {
    const tables = document.getElementsByTagName('table');
    for (let i = 0; i < tables.length; i++) {
      const table = tables[i];
      const rows = table.getElementsByTagName('tr');
      for (let j = 0; j < rows.length; j++) {
        const row = rows[j];
        const cells = row.getElementsByTagName('td');
        let rowContent = '';
        for (let k = 0; k < cells.length; k++) {
          rowContent += cells[k].textContent + ' ';
        }
        console.log(rowContent.trim());
      }
    }
  }
  