//Laravel
require('./bootstrap');

// Halfmoon
const halfmoon = require('halfmoon');
window.halfmoon = halfmoon;
document.addEventListener('DOMContentLoaded', () => { halfmoon.onDOMContentLoaded(); })

//VueJS
require('./vue')