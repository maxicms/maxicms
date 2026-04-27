<p class="text-secondary mb-lg"><?php echo LANG_DATABASE_INFO; ?></p>

<form id="step-form">
    
    <div class="db-form-grid">
        <div class="form-group">
            <label class="form-label"><?php echo LANG_DATABASE_HOST; ?></label>
            <input type="text" autocomplete="off" class="form-input" name="db[host]" value="<?php echo !empty($cfg['db_host']) ? htmlspecialchars($cfg['db_host']) : 'localhost'; ?>">
        </div>
        
        <div class="form-group">
            <label class="form-label"><?php echo LANG_DATABASE_USER; ?></label>
            <input type="text" autocomplete="off" class="form-input" name="db[user]" value="<?php echo !empty($cfg['db_user']) ? htmlspecialchars($cfg['db_user']) : ''; ?>">
        </div>
        
        <div class="form-group">
            <label class="form-label"><?php echo LANG_DATABASE_PASS; ?></label>
            <input type="password" autocomplete="off" class="form-input" name="db[pass]" value="<?php echo !empty($cfg['db_pass']) ? htmlspecialchars($cfg['db_pass']) : ''; ?>">
        </div>
        
        <div class="form-group">
            <?php if(!$db_list){ ?>
                <div class="form-check mb-sm">
                    <input type="checkbox" class="form-check-input" id="db_create" name="db[create_db]" value="1">
                    <label class="form-check-label" for="db_create"><?php echo LANG_DATABASE_BASE_HINT; ?></label>
                </div>
            <?php } ?>
            
            <label class="form-label"><?php echo LANG_DATABASE_BASE; ?></label>
            <?php if($db_list){ ?>
                <select class="form-select" name="db[base]">
                    <?php foreach ($db_list as $db_name) { ?>
                        <option value="<?php echo $db_name; ?>" <?php if(@$cfg['db_base'] == $db_name){?>selected="selected"<?php } ?>><?php echo $db_name; ?></option>
                    <?php } ?>
                </select>
            <?php } else { ?>
                <input type="text" autocomplete="off" class="form-input" name="db[base]" value="<?php echo !empty($cfg['db_base']) ? htmlspecialchars($cfg['db_base']) : ''; ?>">
            <?php } ?>
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group">
            <label class="form-label"><?php echo LANG_DATABASE_CHARSET; ?></label>
            <select class="form-select" name="db[db_charset]">
                <option value="utf8mb4" <?php if(@$cfg['db_charset'] == 'utf8mb4'){?>selected="selected"<?php } ?>>UTF8mb4</option>
                <option value="utf8mb3" <?php if(@$cfg['db_charset'] == 'utf8mb3'){?>selected="selected"<?php } ?>>UTF8mb3</option>
                <option value="utf8" <?php if(@$cfg['db_charset'] == 'utf8'){?>selected="selected"<?php } ?>>UTF8 [<?php echo LANG_DEPRECATED; ?>]</option>
            </select>
        </div>
        
        <div class="form-group">
            <label class="form-label"><?php echo LANG_DATABASE_ENGINE; ?></label>
            <select class="form-select" name="db[engine]">
                <option value="InnoDB" <?php if(@$cfg['db_engine'] == 'InnoDB'){?>selected="selected"<?php } ?>>InnoDB</option>
                <option value="MyISAM" <?php if(@$cfg['db_engine'] == 'MyISAM'){?>selected="selected"<?php } ?>>MyISAM</option>
            </select>
            <p class="form-hint"><?php echo LANG_DATABASE_ENGINE_HINT; ?></p>
        </div>
    </div>
    
    <div class="form-group">
        <label class="form-label"><?php echo LANG_DATABASE_PREFIX; ?></label>
        <input autocomplete="off" type="text" class="form-input" name="db[prefix]" value="<?php echo !empty($cfg['db_prefix']) ? htmlspecialchars($cfg['db_prefix']) : 'cms_'; ?>">
    </div>
    
    <div class="form-group">
        <label class="form-label"><?php echo LANG_DATABASE_USERS_TABLE; ?></label>
        
        <div class="form-check mb-sm">
            <input type="radio" class="form-check-input" id="users_new" name="db[users_exists]" value="0" checked onclick="$('#users_table').hide()">
            <label class="form-check-label" for="users_new"><?php echo LANG_DATABASE_USERS_TABLE_NEW; ?></label>
        </div>
        
        <div class="form-check mb-md">
            <input type="radio" class="form-check-input" id="users_old" name="db[users_exists]" value="1" onclick="$('#users_table').show()">
            <label class="form-check-label" for="users_old"><?php echo LANG_DATABASE_USERS_TABLE_OLD; ?></label>
        </div>
        
        <input autocomplete="off" type="text" class="form-input" id="users_table" name="db[users_table]" value="cms_users" style="display: none;">
    </div>
    
    <div class="form-group">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="install_demo" name="db[is_install_demo_content]" value="1" checked="true">
            <label class="form-check-label" for="install_demo"><?php echo LANG_DATABASE_INSTALL_DEMO; ?></label>
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