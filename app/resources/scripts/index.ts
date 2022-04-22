// Hello! If you don't want typescript, just rename this file to index.js.
require('bootstrap');
require('../scss/main.scss')

console.log('hello world!')

window.addEventListener('load', async () => {
    const result = await fetch('/api/message');
    const data = await result.json();

    document.getElementById('api-route-payload').innerText = data.message;
});
