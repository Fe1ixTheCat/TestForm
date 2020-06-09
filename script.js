
function button(i) {
  let buttons = document.getElementsByTagName('button');
  let followers = document.getElementsByClassName('followers');
  if (buttons[i].style.backgroundColor == "rgb(170, 170, 170)") {
    buttons[i].style.backgroundColor = "rgb(0, 170, 0)";
    followers[i].innerHTML = 1;
  } else if (buttons[i].style.backgroundColor = "rgb(0, 170, 0)") {
    buttons[i].style.backgroundColor = "rgb(170, 170, 170)";
    followers[i].innerHTML = 0;
  };


};

function over(i) {
  let buttons = document.getElementsByTagName('button');
  buttons[i].style.width = "70px";
  if (buttons[i].style.backgroundColor == "rgb(170, 170, 170)") {
    buttons[i].style.fontSize = "18px"
    buttons[i].innerHTML = "Follow";
  } else {
    buttons[i].style.fontSize = "16px";
    buttons[i].innerHTML = "Unfollow";
    buttons[i].style.backgroundColor = "rgb(255, 0, 0)"
  }
}

function out(i) {
  let buttons = document.getElementsByTagName('button');
  buttons[i].style.width = "25px";
  buttons[i].style.fontSize = "25px"
  buttons[i].innerHTML = "+";
}
