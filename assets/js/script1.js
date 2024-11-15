function stopAllAudios() {
    const allaudios = document.querySelectorAll('audio')
    allaudios.forEach(audio => audio.pause());
}
        const image1 = document.getElementById('Nightmare');
        const audio1 = document.getElementById('Nirvana');
        image1.addEventListener('click', () => {
            stopAllAudios();
            audio1.currentTime = 0;
            audio1.play();
        });
       
       

