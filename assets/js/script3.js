function stopAllAudios() {
    const allAudios = document.querySelectorAll('audio');
    allAudios.forEach(audio => audio.pause());
}
        const image3 = document.getElementById('Technobots');
        const audio3 = document.getElementById('Techno');
        image3.addEventListener('click', () => {
            stopAllAudios();
            audio3.currentTime=0;
            audio3.play();
            
        });