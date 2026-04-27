/**
 * MaxiCMS Install - Theme Toggle
 * Handles light/dark theme switching with localStorage persistence
 */

(function() {
    'use strict';

    const THEME_KEY = 'maxicms_install_theme';
    const DARK_THEME = 'dark';
    const LIGHT_THEME = 'light';

    /**
     * Get current theme from localStorage or system preference
     */
    function getPreferredTheme() {
        const stored = localStorage.getItem(THEME_KEY);
        if (stored === DARK_THEME || stored === LIGHT_THEME) {
            return stored;
        }
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? DARK_THEME : LIGHT_THEME;
    }

    /**
     * Apply theme to document
     */
    function applyTheme(theme) {
        if (theme === DARK_THEME) {
            document.documentElement.setAttribute('data-theme', DARK_THEME);
        } else {
            document.documentElement.removeAttribute('data-theme');
        }
        localStorage.setItem(THEME_KEY, theme);
    }

    /**
     * Toggle theme
     */
    function toggleTheme() {
        const current = document.documentElement.hasAttribute('data-theme') ? DARK_THEME : LIGHT_THEME;
        const next = current === DARK_THEME ? LIGHT_THEME : DARK_THEME;
        applyTheme(next);
        return next;
    }

    /**
     * Initialize theme toggle
     */
    function init() {
        // Apply saved theme on load
        const theme = getPreferredTheme();
        applyTheme(theme);

        // Bind toggle button
        const toggleBtn = document.querySelector('.theme-toggle');
        if (toggleBtn) {
            toggleBtn.addEventListener('click', function() {
                toggleTheme();
            });
        }

        // Listen for system theme changes
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(e) {
            if (!localStorage.getItem(THEME_KEY)) {
                applyTheme(e.matches ? DARK_THEME : LIGHT_THEME);
            }
        });
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
