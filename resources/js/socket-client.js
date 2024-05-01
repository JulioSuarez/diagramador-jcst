const { io } = require('socket.io-client');

const socket = io('http://3.15.228.59:3000', {
    transports: ['websocket'],
});

socket.on('connect', function () {
    console.log('Conectado con el servidor');
    socket.emit('getGuestCount');
});

socket.on('guestCount', (count) => {
    console.log('Número de invitados en la sala:', count);
    // Pasar count a la vista
    // document.getElementById('guestCount').innerText = count;
});

// Suponiendo que 'id_user' está definido previamente
const user = 'id_user'; // Simplemente para fines de prueba
socket.emit('saludo', user);

// Recibo el saludo del servidor y lo muestro en consola
socket.on('saludo_respuesta', (respuesta) => {
    console.log(respuesta);
});
