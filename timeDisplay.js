const dateTerminal = document.querySelector('.timeDisplay');

const timer = setInterval( () => {
    const now = new Date();
    dateTerminal.innerText = now.toLocaleString();
},1000);

window.$ = window.jquery = require('./node_modules/jquery');
window.dt = require('./node_modules/datatables.net')();
window.$('#table_id').DataTable();




