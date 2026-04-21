<?php require "../views/layout/header.php"; ?>

<div class="dashboard-container">
    <!-- Sidebar -->
    <?php require "../views/inc/sidebar.php"; ?>

    <!-- Main Content -->
    <main class="main-content">
        <div class="dashboard-header">
            <div class="header-left">
                <button class="burger-menu-btn" id="burgerMenuBtn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <h1 class="dashboard-title">Overview</h1>
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
                    <div id="task-list">
                        <!-- AJAX Implementation Here -->
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php require "../views/layout/footer.php"; ?>
