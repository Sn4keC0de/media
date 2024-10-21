var loader;

// Loading animation

function loadNow(opacity) {
    if (opacity <= 0) {
        displayContent();
    }
    else
    {
        loader.style.opacity = opacity;
        window.setTimeout(function() {
            loadNow(opacity - 0.05)
        }, 150);
    }
}

function displayContent() {
    loader.style.display = 'none';
    document.getElementById('content').style.display = 'block';
}

document.addEventListener("DOMContentLoaded", function() {
    loader = document.getElementById('loader');
    loadNow(1);
});

// Secreto link effect

const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

let interval = null;

document.querySelector(".secretoLink").onmouseenter = event => {  
  let iteration = 0;
  
  clearInterval(interval);
  
  interval = setInterval(() => {
    event.target.innerText = event.target.innerText
      .split("")
      .map((letter, index) => {
        if(index < iteration) {
          return event.target.dataset.value[index];
        }
      
        return letters[Math.floor(Math.random() * 26)]
      })
      .join("");
    
      
      // iteration += 3 / 1;
    }, 40);
}

document.querySelector(".secretoLink").onmouseleave = event => {
    clearInterval(interval);
    event.target.innerText = event.target.dataset.value;
}
