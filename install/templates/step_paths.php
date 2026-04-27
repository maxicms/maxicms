<p class="text-secondary mb-lg">
    <?php printf(LANG_PATHS_ROOT_INFO, $doc_root); ?>
</p>

<form id="step-form">
    
    <fieldset class="mb-lg">
        <legend class="mb-md"><?php echo LANG_PATHS_ROOT; ?></legend>
        
        <div class="form-group">
            <label class="form-label"><?php echo LANG_PATHS_ROOT_PATH; ?></label>
            <input autocomplete="off" type="text" class="form-input" name="paths[root]" value="<?php echo htmlspecialchars($paths['root']); ?>">
        </div>
        
        <div class="form-group">
            <label class="form-label"><?php echo LANG_PATHS_ROOT_HOST; ?></label>
            <input autocomplete="off" type="text" class="form-input" name="hosts[root]" value="<?php echo htmlspecialchars($hosts['root']); ?>">
        </div>
    </fieldset>
    
    <fieldset class="mb-lg">
        <legend class="mb-md"><?php echo LANG_PATHS_UPLOAD; ?></legend>
        
        <div class="form-group">
            <label class="form-label"><?php echo LANG_PATHS_UPLOAD_PATH; ?></label>
            <input autocomplete="off" type="text" class="form-input" name="paths[upload]" value="<?php echo htmlspecialchars($paths['upload']); ?>">
            <p class="form-hint"><?php echo LANG_PATHS_MUST_WRITABLE; ?></p>
        </div>
        
        <div class="form-group">
            <label class="form-label"><?php echo LANG_PATHS_UPLOAD_HOST; ?></label>
            <input autocomplete="off" type="text" class="form-input" name="hosts[upload]" value="<?php echo htmlspecialchars($hosts['upload']); ?>">
        </div>
    </fieldset>
    
    <fieldset class="mb-lg">
        <legend class="mb-md"><?php echo LANG_PATHS_CACHE; ?></legend>
        
        <div class="form-group">
            <label class="form-label"><?php echo LANG_PATHS_CACHE_PATH; ?></label>
            <input autocomplete="off" type="text" class="form-input" name="paths[cache]" value="<?php echo htmlspecialchars($paths['cache']); ?>">
            <p class="form-hint"><?php echo LANG_PATHS_MUST_WRITABLE; ?></p>
        </div>
    </fieldset>
    
    <fieldset class="mb-lg">
        <legend class="mb-md"><?php echo LANG_PATHS_SESSION; ?></legend>
        
        <div class="form-group">
            <label class="form-label"><?php echo LANG_PATHS_SESSION_PATH; ?></label>
            <input autocomplete="off" type="text" class="form-input" name="paths[session_save_path]" value="<?php echo htmlspecialchars($paths['session_save_path']); ?>">
            <?php if($open_basedir_hint){ ?>
                <p class="form-hint"><?php echo $open_basedir_hint; ?></p>
            <?php } ?>
            <p class="form-hint"><?php echo LANG_PATHS_MUST_WRITABLE; ?></p>
        </div>
    </fieldset>
    
</form>

<p class="text-secondary mb-lg"><?php echo LANG_PATHS_CHANGE_INFO ?></p>

<div class="text-center">
    <button type="button" class="btn btn-primary btn-lg" onclick="submitStep()">
        <?php echo LANG_NEXT; ?>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
    </button>
</div>

<style>
fieldset {
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: var(--space-lg);
    margin-bottom: var(--space-lg);
}
legend {
    font-weight: 600;
    color: var(--text-primary);
    padding: 0 var(--space-sm);
}
</style>