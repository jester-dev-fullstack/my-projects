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

    // Burger Menu Toggle
    const burgerBtn = document.getElementById("burgerMenuBtn");
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("sidebarOverlay");
    const dashboardContainer = document.querySelector(".dashboard-container");

    if (burgerBtn && sidebar) {
        burgerBtn.addEventListener("click", function () {
            burgerBtn.classList.toggle("active");
            sidebar.classList.toggle("active");
            if (overlay) {
                overlay.classList.toggle("active");
            }
            if (dashboardContainer) {
                dashboardContainer.classList.toggle("menu-active");
            }
        });

        // Close sidebar when clicking on a nav link
        const navLinks = sidebar.querySelectorAll(".nav-link");
        navLinks.forEach((link) => {
            link.addEventListener("click", function () {
                burgerBtn.classList.remove("active");
                sidebar.classList.remove("active");
                if (overlay) {
                    overlay.classList.remove("active");
                }
                if (dashboardContainer) {
                    dashboardContainer.classList.remove("menu-active");
                }
            });
        });

        // Close sidebar when clicking on overlay
        if (overlay) {
            overlay.addEventListener("click", function () {
                burgerBtn.classList.remove("active");
                sidebar.classList.remove("active");
                overlay.classList.remove("active");
                if (dashboardContainer) {
                    dashboardContainer.classList.remove("menu-active");
                }
            });
        }

        // Close sidebar when clicking outside
        document.addEventListener("click", function (event) {
            if (
                !sidebar.contains(event.target) &&
                !burgerBtn.contains(event.target) &&
                !overlay.contains(event.target)
            ) {
                burgerBtn.classList.remove("active");
                sidebar.classList.remove("active");
                if (overlay) {
                    overlay.classList.remove("active");
                }
                if (dashboardContainer) {
                    dashboardContainer.classList.remove("menu-active");
                }
            }
        });
    }
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
