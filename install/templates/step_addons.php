<div class="alert alert-warning mb-lg">
    <svg class="alert-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
        <line x1="12" y1="9" x2="12" y2="13"></line>
        <line x1="12" y1="17" x2="12.01" y2="17"></line>
    </svg>
    <div class="alert-content">
        <p class="alert-message"><?php echo LANG_STEP_ADDONS_WARN; ?></p>
    </div>
</div>

<p class="text-secondary mb-lg"><?php echo LANG_STEP_ADDONS_HINT; ?></p>

<form id="step-form">
    <ul class="requirements-list">
        <?php foreach ($addons as $addon) { ?>
        <li>
            <div class="requirement-info">
                <span class="requirement-name">
                    <?php echo htmlspecialchars($addon['title']); ?> 
                    <span class="text-muted">v<?php echo htmlspecialchars($addon['version']); ?></span>
                </span>
                <?php if ($addon['author']) { ?>
                    <span class="requirement-version">
                        <?php echo LANG_FROM; ?>
                        <?php if ($addon['url']) { ?>
                            <a href="<?php echo htmlspecialchars($addon['url']); ?>" target="_blank"><?php echo htmlspecialchars($addon['author']); ?></a>
                        <?php } else { ?>
                            <?php echo htmlspecialchars($addon['author']); ?>
                        <?php } ?>
                    </span>
                <?php } ?>
            </div>
        </li>
        <?php } ?>
    </ul>
</form>

<div class="mt-xl text-center">
    <button type="button" class="btn btn-primary btn-lg" onclick="submitStep('steps/addons_install.php')">
        <?php echo LANG_NEXT; ?>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
    </button>
</div>