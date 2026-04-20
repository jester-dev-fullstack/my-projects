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

// Sweet Alert for Task Creation Success
const url = new URL(window.location);

if (url.searchParams.get("success")) {
    Swal.fire({
        icon: "success",
        title: "Task Created!",
        text: "Your task was added successfully.",
    });

    url.searchParams.delete("success");
    window.history.replaceState({}, document.title, url);
}

function loadStats() {
    fetch("/ajax/stats")
        .then((res) => res.json())
        .then((data) => {
            document.getElementById("pending").textContent = data.pending;
            document.getElementById("completed").textContent = data.completed;
            document.getElementById("in_progress").textContent =
                data.in_progress;
            document.getElementById("total").textContent = data.total;
        });
}

// refresh every 5 seconds
setInterval(loadStats, 3000);

// initial load
loadStats();
