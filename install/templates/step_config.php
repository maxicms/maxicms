<div class="alert alert-info mb-lg">
    <svg class="alert-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <circle cx="12" cy="12" r="10"></circle>
        <line x1="12" y1="16" x2="12" y2="12"></line>
        <line x1="12" y1="8" x2="12.01" y2="8"></line>
    </svg>
    <div class="alert-content">
        <p class="alert-message"><?php echo LANG_CONFIG_INFO; ?></p>
    </div>
</div>

<div class="alert alert-success mb-lg">
    <svg class="alert-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
        <polyline points="22 4 12 14.01 9 11.01"></polyline>
    </svg>
    <div class="alert-content">
        <p class="alert-message">
            <strong><?php echo LANG_CONFIG_PATH; ?></strong><br>
            <code><?php echo $path; ?></code>
        </p>
    </div>
</div>

<p class="text-secondary mb-sm"><?php echo LANG_CONFIG_MUST_WRITABLE; ?></p>
<p class="text-secondary"><?php echo LANG_CONFIG_AFTER; ?></p>

<form id="step-form"></form>

<div class="mt-xl text-center">
    <button type="button" class="btn btn-primary btn-lg" onclick="submitStep()">
        <?php echo LANG_NEXT; ?>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
    </button>
</div>