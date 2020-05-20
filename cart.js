window.onload = Pageload;

function Pageload() {
  Calculate();
}
var count = 0;
function Calculate() {
  const Display = document.getElementById("totalnumber");
  Display.innerHTML = count;
  const Minus = document.getElementById("minusbutton");
  const Plus = document.getElementById("plusbutton");
  Minus.onclick = function () {
    if (count > 0) {
      count -= 1;
      Display.innerHTML = count;
    }
  };
  Plus.onclick = function () {
    count += 1;
    Display.innerHTML = count;
  };
}
