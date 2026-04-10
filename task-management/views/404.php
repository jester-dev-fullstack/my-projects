<?php require "layout/header.php"; ?>

<div class="error-page">
    <div class="error-container">
        <div class="error-content">
            <div class="error-logo">
                <img src="/images/zendo.png" alt="Zendo Logo" class="error-logo-image">
            </div>

            <h1 class="error-code">404</h1>
            <h2 class="error-title">Page Not Found</h2>
            <p class="error-description">
                Oops! The page you're looking for doesn't exist or has been moved.
                Let's get you back on track.
            </p>

            <div class="error-actions">
                <a href="/dashboard" class="btn-secondary">
                    <span>📊</span> Back to Dashboard
                </a>
            </div>

            <div class="error-footer">
                <p>Need help? <a href="/contact">Contact support</a></p>
            </div>
        </div>

        <div class="error-illustration">
            <div class="floating-object obj-1"></div>
            <div class="floating-object obj-2"></div>
            <div class="floating-object obj-3"></div>
        </div>
    </div>
</div>

<?php require "layout/footer.php"; ?>
