<?php if ($is_external_users) { ?>

<div class="alert alert-info mb-lg">
    <svg class="alert-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <circle cx="12" cy="12" r="10"></circle>
        <line x1="12" y1="16" x2="12" y2="12"></line>
        <line x1="12" y1="8" x2="12.01" y2="8"></line>
    </svg>
    <div class="alert-content">
        <p class="alert-message"><?php echo sprintf(LANG_ADMIN_EXTERNAL, $users_table); ?></p>
    </div>
</div>

<?php } ?>

<?php if (!$is_external_users) { ?>

<p class="text-secondary mb-lg"><?php echo LANG_ADMIN_INFO; ?></p>

<form id="step-form">
    
    <div class="form-group">
        <label class="form-label required"><?php echo LANG_ADMIN_NAME; ?></label>
        <input type="text" class="form-input" autocomplete="off" name="nickname" value="">
    </div>
    
    <div class="form-group">
        <label class="form-label required"><?php echo LANG_ADMIN_EMAIL; ?></label>
        <input type="email" class="form-input" autocomplete="off" name="email" value="">
    </div>
    
    <div class="form-row">
        <div class="form-group">
            <label class="form-label required"><?php echo LANG_ADMIN_PASS; ?></label>
            <input type="password" class="form-input" autocomplete="off" name="pass1" value="">
        </div>
        
        <div class="form-group">
            <label class="form-label required"><?php echo LANG_ADMIN_PASS2; ?></label>
            <input type="password" class="form-input" autocomplete="off" name="pass2" value="">
        </div>
    </div>
    
</form>

<?php } ?>

<div class="mt-xl text-center">
    <button type="button" class="btn btn-primary btn-lg" onclick="submitStep()">
        <?php echo LANG_NEXT; ?>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
    </button>
</div>