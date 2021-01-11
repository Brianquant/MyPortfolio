// Greeting typeeffect

// Global vars
const txtElement = document.querySelector('.greeting-1');
const words = JSON.parse(txtElement.getAttribute('data-words'));
const wait = txtElement.getAttribute('data-wait');
let txt = '';
let wordIndex = 0;
let isDeleting = false;

// Event listeners
document.addEventListener('DOMContentLoaded', typeEffect);



// Type function

function typeEffect() {
    const current = wordIndex % words.length;
    const fullTxt = words[current];


    if (isDeleting) {
        txt = fullTxt.substring(0, txt.length - 1);
    } else {
        txt = fullTxt.substring(0, txt.length + 1);
    }

    txtElement.innerHTML = `<p class=greeting>${txt}</p>`;

    let typeSpeed = 200;

    if (isDeleting) {
        typeSpeed / 2;
    }

    // If word is complete
    if (!isDeleting && txt === fullTxt) {
        typeSpeed = wait;
        isDeleting = true;
    } else if (isDeleting && txt === '') {
        isDeleting = false;
        wordIndex++
        typeSpeed = 400;
    }

    setTimeout(() => typeEffect(), typeSpeed);
}