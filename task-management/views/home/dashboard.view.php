<?php require "../views/layout/header.php"; ?>

<div class="dashboard-container">
    <!-- Sidebar -->
    <?php require "../views/inc/sidebar.php"; ?>

    <!-- Main Content -->
    <main class="main-content">
        <div class="dashboard-header">
            <div class="header-left">
                <h1 class="dashboard-title">Dashboard</h1>
                <p class="dashboard-subtitle">Welcome back <?= $_SESSION['user']['first_name']  ?>. Here's your task overview.</p>
            </div>
            <?php require "../views/inc/time.php"; ?>
        </div>

        <!-- Statistics Cards -->
        <div class="stats-container">
            <div class="stat-card stat-card-pending">
                <div class="stat-icon">⏳</div>
                <div class="stat-content">
                    <h3 class="stat-label">Pending Tasks</h3>
                    <p class="stat-number"><span id="pending"></span></p>
                </div>
            </div>

            <div class="stat-card stat-card-progress">
                <div class="stat-icon">🔄</div>
                <div class="stat-content">
                    <h3 class="stat-label">In Progress</h3>
                    <p class="stat-number"><span id="in_progress"></span></p>
                </div>
            </div>

            <div class="stat-card stat-card-completed">
                <div class="stat-icon">✅</div>
                <div class="stat-content">
                    <h3 class="stat-label">Completed Tasks</h3>
                    <p class="stat-number"><span id="completed"></span></p>
                </div>
            </div>

            <div class="stat-card stat-card-total">
                <div class="stat-icon">📊</div>
                <div class="stat-content">
                    <h3 class="stat-label">Total Tasks</h3>
                    <p class="stat-number"><span id="total"></span></p>
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
