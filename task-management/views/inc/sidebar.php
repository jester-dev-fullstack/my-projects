<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="logo">
            <img src="/images/zendo.png" alt="Zendo Logo" class="logo-image">
        </div>
    </div>

    <nav class="sidebar-nav">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link <?= urlIs('/dashboard') ? 'active' : '' ?>">
                    <span class="nav-icon">📊</span>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/task/add-task" class="nav-link <?= urlIs('/task/add-task') ? 'active' : '' ?>">
                    <span class="nav-icon">➕</span>
                    <span class="nav-label">Add Task</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/tasks" class="nav-link <?= urlIs('/task/view-all') ? 'active' : '' ?>">
                    <span class="nav-icon">📋</span>
                    <span class="nav-label">View All Tasks</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/tasks/archived" class="nav-link <?= urlIs('/task/archived') ? 'active' : '' ?>">
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

<div class="sidebar-overlay" id="sidebarOverlay"></div>
