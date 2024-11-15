function stopAllAudios() {
    const allAudios = document.querySelectorAll('audio');
    allAudios.forEach(audio => audio.pause());
}
const image4 = document.getElementById('Lions');
const audio4 = document.getElementById('Lion');
image4.addEventListener('click', () => {
    stopAllAudios();
    audio4.currentTime = 0;
    audio4.play();
});