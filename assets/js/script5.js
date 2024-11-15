const button = document.getElementById('go');
const audio = document.getElementById('laser');

button.addEventListener('click', () => {
    audio.play();
});