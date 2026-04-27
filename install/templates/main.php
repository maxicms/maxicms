<!DOCTYPE html>
<html lang="<?php echo LANG; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="MaxiCMS">
    <title><?php echo LANG_PAGE_TITLE; ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%230d6efd'/%3E%3Ctext x='16' y='22' text-anchor='middle' fill='white' font-family='Arial' font-size='16' font-weight='bold'%3EM%3C/text%3E%3C/svg%3E">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/dark-mode.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    
    <!-- JS -->
    <script src="js/jquery.js"></script>
    <script src="js/install.js"></script>
    <script src="js/theme-toggle.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
</head>
<body>
    <div class="install-wrapper">
        
        <!-- Header -->
        <header class="install-header">
            <div class="install-header__logo">
                <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" rx="6" fill="currentColor" style="color: var(--accent);"/>
                    <text x="16" y="22" text-anchor="middle" fill="white" font-family="Arial, sans-serif" font-size="16" font-weight="bold">M</text>
                </svg>
                <span>MaxiCMS</span>
            </div>
            
            <div class="install-header__actions">
                <button type="button" class="theme-toggle" aria-label="Toggle theme" title="Toggle theme">
                    <svg class="icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="5"></circle>
                        <line x1="12" y1="1" x2="12" y2="3"></line>
                        <line x1="12" y1="21" x2="12" y2="23"></line>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                        <line x1="1" y1="12" x2="3" y2="12"></line>
                        <line x1="21" y1="12" x2="23" y2="12"></line>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                    </svg>
                    <svg class="icon-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </button>
                
                <div class="lang-selector">
                    <?php foreach($langs as $id){ ?>
                        <button type="button" class="lang-btn<?php if ($id === $lang) { ?> active<?php } ?>" 
                                onclick="window.location.href='?lang=<?php echo $id; ?>'">
                            <img src="languages/<?php echo $id; ?>/flag.svg" alt="<?php echo strtoupper($id); ?>">
                        </button>
                    <?php } ?>
                </div>
            </div>
        </header>
        
        <!-- Progress Bar -->
        <div class="install-progress">
            <div class="install-progress__inner">
                <div class="install-progress__info">
                    <span class="install-progress__title"><?php echo $steps[$current_step]['title']; ?></span>
                    <span class="install-progress__percent"><?php echo round((($current_step + 1) / count($steps)) * 100); ?>%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width: <?php echo round((($current_step + 1) / count($steps)) * 100); ?>%"></div>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <main class="install-content">
            <div class="install-content__inner">
                <div class="install-card">
                    <div class="install-card__header">
                        <h1 class="install-card__title">
                            <div class="install-card__icon">
                                <?php if ($current_step === 0) { ?>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <?php } else { ?>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <?php } ?>
                            </div>
                            <?php echo $steps[$current_step]['title']; ?>
                        </h1>
                    </div>
                    
                    <div class="install-card__body">
                        <?php echo $step_html; ?>
                    </div>
                    
                    <div class="install-card__footer">
                        <div class="step-nav__info">
                            <?php echo LANG_STEP; ?> <?php echo $current_step + 1; ?> <?php echo LANG_STEP_OF; ?> <?php echo count($steps); ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- Footer -->
        <footer class="install-footer">
            <div class="install-footer__copyright">
                <a href="https://maxicms.ru/" target="_blank">MaxiCMS</a> &copy; 2008 – <?php echo date('Y'); ?>
            </div>
            <div class="install-footer__version">
                v<?php echo get_version(); ?>
            </div>
        </footer>
        
    </div>
    
    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loading-overlay">
        <div class="loading-spinner"></div>
    </div>
    
    <script>
        var current_step = <?php echo $current_step; ?>;
        var LANG_ERROR = '<?php echo LANG_ERROR; ?>';
        var LANG_MANUAL = '<?php echo LANG_MANUAL; ?>';
    </script>
</body>
</html>
