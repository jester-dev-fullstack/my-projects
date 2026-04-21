const getPriorityClass = (priority) => {
    if (!priority) return "";
    return `priority-${priority.toLowerCase().replace(/\s+/g, "-")}`;
};

const getStatusClass = (status) => {
    if (!status) return "";
    return `status-${status.toLowerCase().replace(/\s+/g, "-")}`;
};

const formatText = (text) => {
    if (!text) return "";
    return text.charAt(0).toUpperCase() + text.slice(1);
};

const loadOverview = () => {
    const container = document.getElementById("task-list");

    if (!container) {
        console.error("❌ #task-list not found in DOM");
        return;
    }

    fetch("/ajax/overview")
        .then((res) => res.json())
        .then((data) => {
            container.innerHTML = "";

            if (!data || data.length === 0) {
                container.innerHTML = `<p>No tasks found.</p>`;
                return;
            }

            data.forEach((task) => {
                container.innerHTML += `
                    <div class="table-row">
                        <div class="col-task">
                            <span class="task-name">${task.task_name ?? ""}</span>
                        </div>

                        <div class="col-category">
                            <span class="category-badge">${task.category_name ?? ""}</span>
                        </div>

                        <div class="col-priority">
                            <span class="priority-badge ${getPriorityClass(task.priority_name)}">
                                ${formatText(task.priority_name)}
                            </span>
                        </div>

                        <div class="col-status">
                            <span class="status-badge ${getStatusClass(task.status_name)}">
                                ${task.status_name ?? ""}
                            </span>
                        </div>

                        <div class="col-due">
                            <span>${task.due_date ?? ""}</span>
                        </div>
                    </div>
                `;
            });
        })
        .catch((err) => console.error("Fetch error:", err));
};

document.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("task-list");

    if (!container) return;

    loadOverview();
    setInterval(loadOverview, 3000);
});

//Cards
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

setInterval(loadStats, 3000);

loadStats();
