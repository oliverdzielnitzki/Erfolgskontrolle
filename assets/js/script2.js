
function stopAllAudios() {
    const allaudios = document.querySelectorAll('audio')
    allaudios.forEach(audio => audio.pause());
}
        const image2 = document.getElementById('Astronauts');
        const audio2 = document.getElementById('Astro');
        image2.addEventListener('click', () => {
            stopAllAudios();
            audio2.currentTime = 0;
            audio2.play();
        });
   