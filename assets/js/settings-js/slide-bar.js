let slider = document.getElementById("myRange");
let output = document.getElementById("number-input");
output.textContent = slider.value;

slider.oninput = function () {
    output.textContent = `Taille actuelle: ${this.value}px`;
}