<div class="welcome">
    <div class="welcome__logo">
        <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="80" height="80" rx="16" fill="currentColor" style="color: var(--accent);"/>
            <text x="40" y="52" text-anchor="middle" fill="white" font-family="Arial, sans-serif" font-size="36" font-weight="bold">M</text>
        </svg>
    </div>
    
    <h1 class="welcome__title"><?php echo LANG_STEP_START; ?></h1>
    <p class="welcome__subtitle"><?php echo LANG_STEP_START_1; ?></p>
    <p class="welcome__subtitle"><?php echo LANG_STEP_START_2; ?></p>
    
    <div class="welcome__features">
        <div class="welcome__feature">
            <div class="welcome__feature-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                    <path d="M2 17l10 5 10-5"></path>
                    <path d="M2 12l10 5 10-5"></path>
                </svg>
            </div>
            <div class="welcome__feature-title"><?php echo LANG_FEATURE_MODULAR; ?></div>
            <p class="welcome__feature-desc"><?php echo LANG_FEATURE_MODULAR_DESC; ?></p>
        </div>
        <div class="welcome__feature">
            <div class="welcome__feature-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
            </div>
            <div class="welcome__feature-title"><?php echo LANG_FEATURE_FLEXIBLE; ?></div>
            <p class="welcome__feature-desc"><?php echo LANG_FEATURE_FLEXIBLE_DESC; ?></p>
        </div>
        <div class="welcome__feature">
            <div class="welcome__feature-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
            </div>
            <div class="welcome__feature-title"><?php echo LANG_FEATURE_SECURE; ?></div>
            <p class="welcome__feature-desc"><?php echo LANG_FEATURE_SECURE_DESC; ?></p>
        </div>
    </div>
    
    <p><?php echo LANG_MANUAL; ?></p>
    
    <div class="mt-lg">
        <button type="button" class="btn btn-primary btn-lg" onclick="nextStep()">
            <?php echo LANG_NEXT; ?>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </button>
    </div>
</div>