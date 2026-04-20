<?php require "../views/layout/header.php"; ?>

<div class="dashboard-container">
    <!-- Sidebar -->
    <?php require "../views/inc/sidebar.php"; ?>
    <!-- Main Content -->
    <main class="main-content">
        <!-- Page Header -->
        <div class="dashboard-header">
            <div class="header-left">
                <h1 class="dashboard-title">Create New Task</h1>
                <p class="dashboard-subtitle">Add a new task to your list and stay organized</p>
            </div>
            <?php require "../views/inc/time.php"; ?>
        </div>

        <!-- Add Task Form -->
        <div class="task-form-container">
            <form action="/task/store" method="POST" class="task-form">
                <!-- Basic Information Section -->
                <div class="form-section">
                    <h2 class="form-section-title">📝 Task Details</h2>

                    <!-- Task Title -->
                    <div class="form-group">
                        <label for="title" class="form-label">
                            <span class="label-text">Task Title</span>

                        </label>
                        <input
                            type="text"
                            id="title"
                            name="title"
                            class="form-input"
                            placeholder="Enter task title (e.g., Complete project report)"
                            required>
                        <p class="form-hint">Give your task a clear, descriptive title</p>
                        <?php if (!empty($errors["title"])) : ?>
                            <div class="error-message">
                                <span class="error-icon">⚠️</span>
                                <p class="error-text"><?= htmlspecialchars($errors['title']) ?></p>
                            </div>
                        <?php endif; ?>
                    </div>


                    <!-- Task Description -->
                    <div class="form-group">
                        <label for="description" class="form-label">
                            <span class="label-text">Description</span>
                        </label>
                        <textarea
                            id="description"
                            name="description"
                            class="form-textarea"
                            placeholder="Add detailed information about your task..."
                            rows="5"
                            required></textarea>
                        <p class="form-hint">Provide additional details to help you remember what to do</p>
                        <?php if (!empty($errors["description"])) : ?>
                            <div class="error-message">
                                <span class="error-icon">⚠️</span>
                                <p class="error-text"><?= htmlspecialchars($errors['description']) ?></p>
                            </div>
                        <?php endif; ?>
                    </div>


                </div>

                <!-- Task Metadata Section -->
                <div class="form-section">
                    <h2 class="form-section-title">⚙️ Task Settings</h2>

                    <div class="form-row">
                        <!-- Priority -->
                        <div class="form-group">
                            <label for="priority" class="form-label">
                                <span class="label-text">Priority</span>

                            </label>
                            <select id="priority" name="priority" class="form-select">
                                <option value="" disabled selected>Select priority level</option>
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                                <option value="urgent">Urgent</option>
                            </select>
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label for="status" class="form-label">
                                <span class="label-text">Status</span>

                            </label>
                            <select id="status" name="status" class="form-select">
                                <option value="" disabled selected>Select status</option>
                                <?php foreach ($status as $s): ?>
                                    <option value="<?= $s['id'] ?>"><?= $s['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <!-- Due Date -->
                        <div class="form-group">
                            <label for="due_date" class="form-label">
                                <span class="label-text">Due Date</span>

                            </label>
                            <input
                                type="date"
                                id="due_date"
                                name="due_date"
                                class="form-input">
                            <p class="form-hint">Select when this task needs to be completed</p>
                        </div>

                        <!-- Category -->
                        <div class="form-group">
                            <label for="category" class="form-label">
                                <span class="label-text">Category</span>
                            </label>
                            <select id="category" name="category" class="form-select">
                                <option value="" disabled selected>Choose a category</option>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    <a href="/dashboard" class="btn btn-secondary">
                        <span class="btn-icon">❌</span>
                        <span class="btn-text">Cancel</span>
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <span class="btn-icon">✨</span>
                        <span class="btn-text">Create Task</span>
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>

<?php require "../views/layout/footer.php"; ?>
