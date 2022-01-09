function mobileMenu() {
    var menu = document.querySelector('.hamburger_menu');

    menu.classList.toggle('open');
}

// ================================= begin::typing text =============================

const text = document.querySelector('.writting-text');
const words = [
    "enerating"
  ];
  
  // start typing effect
  setTyper(text, words);
  
  function setTyper(element, words) {
  
    const LETTER_TYPE_DELAY = 80;
    const WORD_STAY_DELAY = 1500;
  
    const DIRECTION_FORWARDS = 0;
    const DIRECTION_BACKWARDS = 1;
  
    var direction = DIRECTION_FORWARDS;
    var wordIndex = 0;
    var letterIndex = 0;
  
    var wordTypeInterval;
  
    startTyping();
  
    function startTyping() {
      wordTypeInterval = setInterval(typeLetter, LETTER_TYPE_DELAY);
    }
  
    function typeLetter() {
      const word = words[wordIndex];
  
      if (direction == DIRECTION_FORWARDS) {
        letterIndex++;
  
        if (letterIndex == word.length) {
          direction = DIRECTION_BACKWARDS;
          clearInterval(wordTypeInterval);
          setTimeout(startTyping, WORD_STAY_DELAY);
        }
  
      } else if (direction == DIRECTION_BACKWARDS) {
        letterIndex--;
  
        if (letterIndex == 0) {
          nextWord();
        }
      }
  
      const textToType = word.substring(0, letterIndex);
  
      element.textContent = textToType;
    }
  
    function nextWord() {
  
      letterIndex = 0;
      direction = DIRECTION_FORWARDS;
      wordIndex++;
  
      if (wordIndex == words.length) {
        wordIndex = 0;
      }
  
    }
  }
// ================================= end::typing text =============================

// ================================= begin::loader =============================
$(window).on("load", function () {
  $(".loader-wrap").fadeOut(3000);
});
// ================================= end::loader =============================

// ================================= begin::scroll reveal =============================
window.addEventListener('scroll', reveal);

// function reveal() {
//   var reveal = document.querySelectorAll('.reveal');

//   for (var i = 0; i < reveal.length; i++) {
    
//     var windowheight = window.innerHeight;
//     var revealtop = reveal[i].getBoundingClientRect().top;
//     var revealpoint = 150;

//     if (revealtop < windowheight - windowheight) {
//       reveal[i].classList.add('active');
//     } else {
//       reveal[i].classList.remove('active');
//     }
//   }
// }
// ================================= end::scroll reveal =============================

