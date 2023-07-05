const hours = new Date().getHours();
let str;
if (hours < 12) str = "Good Morning";
if (hours >= 12 && hours <= 16) str = "Good Afternoon";
if (hours >= 16 && hours <= 24) str = "Good Evening";

document.getElementById("greeting").textContent = str;

setInterval(() => {
  document.getElementById("time").textContent = new Date().toString();
}, 1000);

greetings();