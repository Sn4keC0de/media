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