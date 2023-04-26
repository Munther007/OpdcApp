require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


fetch('/weather/London')
  .then(response => response.json())
  .then(data => console.log(data))
  .catch(error => console.error(error));
