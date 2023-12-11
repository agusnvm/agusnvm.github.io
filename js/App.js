const layer = document.getElementById("layer");
const layer2 = document.getElementById("layer2");
const layer3 = document.getElementById("layer3");
const hoverBtn = document.getElementById("headerBtn");

function layerAnimationIn() {
  layer.style.top = "60%";
  layer.style.opacity = ".7";
}
function layerAnimationIn2() {
  layer2.style.top = "60%";
  layer2.style.opacity = ".7";
}
function layerAnimationIn3() {
  layer3.style.top = "60%";
  layer3.style.opacity = ".7";
}

function layerAnimationOut() {
  layer.style.top = "100%";
  layer.style.opacity = "1";
}

function layerAnimationOut2() {
  layer2.style.top = "100%";
  layer2.style.opacity = "1";
}

function layerAnimationOut3() {
  layer3.style.top = "100%";
  layer3.style.opacity = "1";
}

// Profile User

function profileUser() {
  const profile = document.getElementById("profile");
  if (profile.style.display === "block") {
    profile.style.display = "none";
  } else {
    profile.style.display = "block";
  }
}

function loginAsGuest() {
  let isLoggedInAsGuest = true; 

  if (isLoggedInAsGuest) {
    document.getElementById('profile').innerHTML = '<a href="#">Hello Guest</a>';
  } else {
    alert("Redirect to user profile or show user-specific content");
  }
  
}



function menuListBar() {
  const menu = document.getElementById("nav");
  if (menu.style.left == "-200px") {
    menu.style.left = "0";
  } else {
    menu.style.left = "-200px";
  }
}

// more Function

let statusUser1 = document.getElementById("activeUser1");
let statusUser2 = document.getElementById("activeUser2");
let statusUser3 = document.getElementById("activeUser3");
let defaultUser = document.getElementById("testimonias");

let user1 = document.getElementById("user1");
let user2 = document.getElementById("user2");
let user3 = document.getElementById("user3");
let defaultTextbox = document.getElementById("defaultTextBox");

//User Testimoni function

statusUser1.onclick = function () {
  statusUser1.style.transform = "scale(1.1)";
  statusUser2.style.transform = "scale(1)";
  statusUser3.style.transform = "scale(1)";
  user1.style.display = "block";
  user2.style.display = "none";
  user3.style.display = "none";
  defaultTextbox.style.display = "none";
};

statusUser2.onclick = function () {
  statusUser2.style.transform = "scale(1.1)";
  statusUser1.style.transform = "scale(1)";
  statusUser3.style.transform = "scale(1)";
  user1.style.display = "none";
  user2.style.display = "block";
  user3.style.display = "none";
  defaultTextbox.style.display = "none";
};

statusUser3.onclick = function () {
  statusUser3.style.transform = "scale(1.1)";
  statusUser2.style.transform = "scale(1)";
  statusUser1.style.transform = "scale(1)";
  user1.style.display = "none";
  user2.style.display = "none";
  user3.style.display = "block";
  defaultTextbox.style.display = "none";
};

// default function

defaultUser.onmouseleave = function () {
  statusUser3.style.transform = "scale(1)";
  statusUser2.style.transform = "scale(1)";
  statusUser1.style.transform = "scale(1)";
  defaultTextbox.style.display = "block";
  user1.style.display = "none";
  user2.style.display = "none";
  user3.style.display = "none";
};
