<p class="text-secondary mb-lg"><?php echo LANG_CRON_1; ?></p>

<ul class="requirements-list mb-lg">
    <li>
        <div class="requirement-info">
            <span class="requirement-name"><?php echo LANG_CRON_FILE; ?></span>
            <code class="requirement-version"><?php echo $doc_root . '/cron.php'; ?></code>
        </div>
    </li>
    <li>
        <div class="requirement-info">
            <span class="requirement-name"><?php echo LANG_CRON_INT; ?></span>
        </div>
    </li>
</ul>

<div class="form-group">
    <label class="form-label"><?php echo LANG_CRON_EXAMPLE; ?></label>
    <pre class="form-input" style="background: var(--bg-tertiary); padding: var(--space-md); font-family: monospace;"><?php echo $php_path ? $php_path : 'php'; ?> -f <?php echo $doc_root; ?>/cron.php <?php echo $_SERVER['HTTP_HOST']; ?> > /dev/null</pre>
</div>

<p class="text-secondary mt-lg"><?php echo LANG_CRON_SUPPORT_1; ?> <?php echo LANG_CRON_SUPPORT_2; ?></p>

<div class="mt-xl text-center">
    <button type="button" class="btn btn-primary btn-lg" onclick="nextStep()">
        <?php echo LANG_NEXT; ?>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
    </button>
</div>