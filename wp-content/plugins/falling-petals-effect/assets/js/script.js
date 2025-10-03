document.addEventListener("DOMContentLoaded", function () {
    const fallingPetalsContainer = document.querySelector('.falling-petals');
    const numberOfPetals1 = 20; // Số lượng cánh hoa

    for (let i = 0; i < numberOfPetals1; i++) {
        const petal = document.createElement('div');
        petal.className = 'petal petal1';

        petal.style.left = Math.random() * 100 + 'vw';

        const fallDuration = Math.random() * 5 + 5;
        petal.style.animationDuration = fallDuration + 's';

        const windStrength = (Math.random() * 50 - 25); 
        petal.style.setProperty('--wind', windStrength + 'vw');

        const rotateStrength = (Math.random() * 360);
        petal.style.setProperty('--rotate', rotateStrength + 'deg');

        fallingPetalsContainer.appendChild(petal);
    }
});