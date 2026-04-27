<h2><?php echo LANG_PHP_VERSION; ?></h2>
<p class="text-secondary mb-lg"><?php echo LANG_PHP_VERSION_REQ ?></p>

<ul class="requirements-list">
    <li>
        <div class="requirement-info">
            <span class="requirement-name">PHP</span>
            <span class="requirement-version"><?php echo $info['php']['version']; ?></span>
        </div>
        <div class="requirement-status">
            <?php if ($info['php']['valid']) { ?>
                <span class="status-icon success">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </span>
                <span class="text-success"><?php echo LANG_PHP_EXT_INSTALLED; ?></span>
            <?php } else { ?>
                <span class="status-icon error">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </span>
                <span class="text-danger"><?php echo LANG_PHP_EXT_NOT_INSTALLED; ?></span>
            <?php } ?>
        </div>
    </li>
</ul>

<h2 class="mt-xl"><?php echo LANG_PHP_EXTENSIONS; ?></h2>
<p class="text-secondary mb-lg"><?php echo LANG_PHP_EXTENSIONS_REQ ?></p>

<ul class="requirements-list">
    <?php foreach($info['ext'] as $name => $valid) { ?>
    <li>
        <div class="requirement-info">
            <span class="requirement-name"><?php echo $name; ?></span>
        </div>
        <div class="requirement-status">
            <?php if ($valid) { ?>
                <span class="status-icon success">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </span>
                <span class="text-success"><?php echo LANG_PHP_EXT_INSTALLED; ?></span>
            <?php } else { ?>
                <span class="status-icon error">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </span>
                <span class="text-danger"><?php echo LANG_PHP_EXT_NOT_INSTALLED; ?></span>
            <?php } ?>
        </div>
    </li>
    <?php } ?>
</ul>

<h2 class="mt-xl"><?php echo LANG_PHP_EXTENSIONS_EXTRA; ?></h2>
<p class="text-secondary mb-lg"><?php echo LANG_PHP_EXTENSIONS_EXTRA_REQ ?></p>

<ul class="requirements-list">
    <?php foreach($info['ext_extra'] as $name => $valid) { ?>
    <li>
        <div class="requirement-info">
            <span class="requirement-name"><?php echo $name; ?></span>
        </div>
        <div class="requirement-status">
            <?php if ($valid) { ?>
                <span class="status-icon success">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </span>
                <span class="text-success"><?php echo LANG_PHP_EXT_INSTALLED; ?></span>
            <?php } else { ?>
                <span class="status-icon warning">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                </span>
                <span class="text-muted"><?php echo LANG_PHP_EXT_NOT_INSTALLED; ?></span>
            <?php } ?>
        </div>
    </li>
    <?php } ?>
</ul>

<?php if($info['valid']){ ?>
    <div class="mt-xl text-center">
        <button type="button" class="btn btn-primary btn-lg" onclick="nextStep()">
            <?php echo LANG_NEXT; ?>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </button>
    </div>
<?php } else { ?>
    <div class="alert alert-danger mt-xl">
        <svg class="alert-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="15" y1="9" x2="9" y2="15"></line>
            <line x1="9" y1="9" x2="15" y2="15"></line>
        </svg>
        <div class="alert-content">
            <div class="alert-title"><?php echo LANG_ERROR; ?></div>
            <p class="alert-message"><?php echo LANG_PHP_CHECK_ERROR; ?> <?php echo LANG_PHP_CHECK_ERROR_HINT; ?></p>
        </div>
    </div>
<?php } ?>