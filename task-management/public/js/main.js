function updateTime() {
    const now = new Date();

    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();
    let ampm = hours >= 12 ? "PM" : "AM";

    hours = hours % 12;
    hours = hours ? hours : 12;

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    const timeString = hours + ":" + minutes + ":" + seconds + " " + ampm;

    const timeElement = document.getElementById("currentTime");
    if (timeElement) {
        timeElement.textContent = timeString;
    }
}

document.addEventListener("DOMContentLoaded", function () {
    updateTime();
    setInterval(updateTime, 1000);
});
