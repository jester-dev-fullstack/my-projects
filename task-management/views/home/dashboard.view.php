<?php require "../views/layout/header.php"; ?>

<div class="dashboard-container">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <img src="/images/zendo.png" alt="Zendo Logo" class="logo-image">
            </div>
        </div>

        <nav class="sidebar-nav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link active">
                        <span class="nav-icon">📊</span>
                        <span class="nav-label">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/task/create" class="nav-link">
                        <span class="nav-icon">➕</span>
                        <span class="nav-label">Add Task</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/tasks" class="nav-link">
                        <span class="nav-icon">📋</span>
                        <span class="nav-label">View All Tasks</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/tasks/archived" class="nav-link">
                        <span class="nav-icon">📦</span>
                        <span class="nav-label">Archived Tasks</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="sidebar-footer">
            <div class="footer-buttons">
                <a href="/profile" class="profile-btn">
                    <span class="nav-icon">👤</span>
                    <span class="nav-label">Profile</span>
                </a>
            </div>
            <form action="/logout" method="POST" class="logout-form">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="logout-btn">
                    <span class="nav-icon">🚪</span>
                    <span class="nav-label">Logout</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <div class="dashboard-header">
            <div class="header-left">
                <h1 class="dashboard-title">Dashboard</h1>
                <p class="dashboard-subtitle">Welcome back <?= $_SESSION['user']['first_name']  ?>. Here's your task overview.</p>
            </div>
            <div class="header-right">
                <div class="current-time">
                    <span class="time-icon">🕐</span>
                    <div class="time-display">
                        <p class="time-value" id="currentTime">--:-- --</p>
                        <p class="time-label">Current Time</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="stats-container">
            <div class="stat-card stat-card-pending">
                <div class="stat-icon">⏳</div>
                <div class="stat-content">
                    <h3 class="stat-label">Pending Tasks</h3>
                    <p class="stat-number">12</p>
                </div>
            </div>

            <div class="stat-card stat-card-progress">
                <div class="stat-icon">🔄</div>
                <div class="stat-content">
                    <h3 class="stat-label">In Progress</h3>
                    <p class="stat-number">5</p>
                </div>
            </div>

            <div class="stat-card stat-card-completed">
                <div class="stat-icon">✅</div>
                <div class="stat-content">
                    <h3 class="stat-label">Completed Tasks</h3>
                    <p class="stat-number">28</p>
                </div>
            </div>

            <div class="stat-card stat-card-total">
                <div class="stat-icon">📊</div>
                <div class="stat-content">
                    <h3 class="stat-label">Total Tasks</h3>
                    <p class="stat-number">45</p>
                </div>
            </div>
        </div>

        <!-- Tasks Status Overview -->
        <div class="status-section">
            <div class="section-header">
                <h2>Tasks Status Overview</h2>
                <a href="/tasks" class="view-all-link">View All →</a>
            </div>

            <div class="status-table">
                <div class="table-header">
                    <div class="col-task">Task Name</div>
                    <div class="col-category">Category</div>
                    <div class="col-priority">Priority</div>
                    <div class="col-status">Status</div>
                    <div class="col-due">Due Date</div>
                </div>

                <div class="table-body">
                    <!-- Row 1 -->
                    <div class="table-row">
                        <div class="col-task">
                            <span class="task-name">Design Dashboard UI</span>
                        </div>
                        <div class="col-category">
                            <span class="category-badge">Design</span>
                        </div>
                        <div class="col-priority">
                            <span class="priority-badge priority-high">High</span>
                        </div>
                        <div class="col-status">
                            <span class="status-badge status-in-progress">In Progress</span>
                        </div>
                        <div class="col-due">2026-04-15</div>
                    </div>

                    <!-- Row 2 -->
                    <div class="table-row">
                        <div class="col-task">
                            <span class="task-name">Setup Database</span>
                        </div>
                        <div class="col-category">
                            <span class="category-badge">Backend</span>
                        </div>
                        <div class="col-priority">
                            <span class="priority-badge priority-high">High</span>
                        </div>
                        <div class="col-status">
                            <span class="status-badge status-completed">Completed</span>
                        </div>
                        <div class="col-due">2026-04-10</div>
                    </div>

                    <!-- Row 3 -->
                    <div class="table-row">
                        <div class="col-task">
                            <span class="task-name">API Documentation</span>
                        </div>
                        <div class="col-category">
                            <span class="category-badge">Documentation</span>
                        </div>
                        <div class="col-priority">
                            <span class="priority-badge priority-medium">Medium</span>
                        </div>
                        <div class="col-status">
                            <span class="status-badge status-pending">Pending</span>
                        </div>
                        <div class="col-due">2026-04-18</div>
                    </div>

                    <!-- Row 4 -->
                    <div class="table-row">
                        <div class="col-task">
                            <span class="task-name">Bug Fixes</span>
                        </div>
                        <div class="col-category">
                            <span class="category-badge">Bug Fix</span>
                        </div>
                        <div class="col-priority">
                            <span class="priority-badge priority-high">High</span>
                        </div>
                        <div class="col-status">
                            <span class="status-badge status-in-progress">In Progress</span>
                        </div>
                        <div class="col-due">2026-04-12</div>
                    </div>

                    <!-- Row 5 -->
                    <div class="table-row">
                        <div class="col-task">
                            <span class="task-name">User Testing</span>
                        </div>
                        <div class="col-category">
                            <span class="category-badge">Testing</span>
                        </div>
                        <div class="col-priority">
                            <span class="priority-badge priority-medium">Medium</span>
                        </div>
                        <div class="col-status">
                            <span class="status-badge status-pending">Pending</span>
                        </div>
                        <div class="col-due">2026-04-20</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php require "../views/layout/footer.php"; ?>
