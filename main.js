function hover_on() {
  document.getElementById("btn_hover").style.backgroundColor = "#99f771";
}

function hover_off() {
  document.getElementById("btn_hover").style.backgroundColor = "#f14872";
}

function click_on() {
  document.body.style.backgroundColor = "#000";
}

function click_off() {
  document.body.style.backgroundColor = "#FFF";
}

document.getElementById("btn_hover").addEventListener("mouseover", hover_on);
document.getElementById("btn_hover").addEventListener("mouseout", hover_off);

let dark = false;
document.getElementById("btn_hover").addEventListener("click", () => {
  if (!dark) {
    click_on();
    dark = true;
  } else {
    click_off();
    dark = false;
  }
});