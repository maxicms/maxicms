<p class="text-secondary mb-lg"><?php echo LANG_LICENSE_NOTE; ?></p>

<div class="alert alert-info mb-lg">
    <svg class="alert-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <circle cx="12" cy="12" r="10"></circle>
        <line x1="12" y1="16" x2="12" y2="12"></line>
        <line x1="12" y1="8" x2="12.01" y2="8"></line>
    </svg>
    <div class="alert-content">
        <p class="alert-message"><?php echo LANG_LICENSE_AGREE_HINT; ?></p>
    </div>
</div>

<form id="step-form" class="mb-lg">
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="agree" name="agree" value="1">
        <label class="form-check-label" for="agree"><?php echo LANG_LICENSE_AGREE; ?></label>
    </div>
</form>

<div class="text-center">
    <button type="button" class="btn btn-primary btn-lg" onclick="submitStep()" <?php if (!$is_agree) { ?>disabled<?php } ?>>
        <?php echo LANG_NEXT; ?>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
    </button>
</div>

<style>
.license-text {
    width: 100%;
    height: 280px;
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: var(--space-md);
    font-family: "SF Mono", Monaco, "Cascadia Code", monospace;
    font-size: var(--font-size-xs);
    color: var(--text-secondary);
    background: var(--bg-secondary);
    resize: vertical;
    margin-bottom: var(--space-lg);
}
</style>