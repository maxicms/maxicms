<form id="step-form">
    
    <div class="form-group">
        <label class="form-label"><?php echo LANG_SITE_SITENAME; ?></label>
        <input autocomplete="off" type="text" class="form-input" name="sitename" value="<?php echo LANG_CFG_SITENAME; ?>">
    </div>
    
    <div class="form-group">
        <label class="form-label"><?php echo LANG_SITE_HOMETITLE; ?></label>
        <input autocomplete="off" type="text" class="form-input" name="hometitle" value="<?php echo LANG_CFG_SITENAME; ?>">
    </div>
    
    <div class="form-group">
        <label class="form-label"><?php echo LANG_SITE_METAKEYS; ?></label>
        <input autocomplete="off" type="text" class="form-input" name="metakeys" value="<?php echo LANG_CFG_METAKEYS; ?>">
    </div>
    
    <div class="form-group">
        <label class="form-label"><?php echo LANG_SITE_METADESC; ?></label>
        <textarea name="metadesc" rows="3" class="form-textarea"><?php echo LANG_CFG_METADESC; ?></textarea>
    </div>
    
    <div class="form-row">
        <div class="form-group">
            <label class="form-label"><?php echo LANG_SITE_TEMPLATE; ?></label>
            <select class="form-select" name="template">
                <?php foreach ($site_tpls as $tpl) { ?>
                    <option value="<?php echo $tpl; ?>" <?php if($default_template == $tpl){?>selected="selected"<?php } ?>><?php echo $tpl; ?></option>
                <?php } ?>
            </select>
        </div>
        
        <div class="form-group">
            <label class="form-label"><?php echo LANG_SITE_TEMPLATE_ADMIN; ?></label>
            <select class="form-select" name="template_admin">
                <?php foreach ($admin_tpls as $tpl) { ?>
                    <option value="<?php echo $tpl; ?>" <?php if($default_atemplate == $tpl){?>selected="selected"<?php } ?>><?php echo $tpl; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    
    <div class="form-group">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="is_check_updates" name="is_check_updates" value="1" checked="checked">
            <label class="form-check-label" for="is_check_updates"><?php echo LANG_SITE_CHECK_UPDATE; ?></label>
        </div>
    </div>
    
</form>

<div class="mt-xl text-center">
    <button type="button" class="btn btn-primary btn-lg" onclick="submitStep()">
        <?php echo LANG_NEXT; ?>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
    </button>
</div>