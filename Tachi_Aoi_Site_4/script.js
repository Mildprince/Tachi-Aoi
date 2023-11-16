document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('toggleButton');
    const englishContent = document.getElementsByClassName('englishContent');
    const japaneseContent = document.getElementsByClassName('japaneseContent');

    toggleButton.addEventListener('click', function () {
        if (englishContent[0].style.display === 'none') {
            Array.prototype.forEach.call(
                englishContent, el => {
                el.style.display = 'block'
            });
            Array.prototype.forEach.call(
                japaneseContent, el => {
                el.style.display = 'none'
            });
        } else {
            Array.prototype.forEach.call(
                englishContent, el => {
                el.style.display = 'none'
            });
            Array.prototype.forEach.call(
                japaneseContent, el => {
                el.style.display = 'block'
            });
        }
    });
});




