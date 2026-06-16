<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Rain_OS_Assets {

    public function __construct() {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_assets' ) );
    }

    public function enqueue_admin_assets( $hook ) {
        if ( strpos( $hook, 'rain-os-aeo' ) === false ) {
            return;
        }

        wp_enqueue_style(
            'rain-os-admin',
            RAIN_OS_AEO_PLUGIN_URL . 'assets/css/admin.css',
            array(),
            RAIN_OS_AEO_VERSION
        );

        wp_enqueue_script(
            'rain-os-admin',
            RAIN_OS_AEO_PLUGIN_URL . 'assets/js/admin.js',
            array( 'jquery' ),
            RAIN_OS_AEO_VERSION,
            true
        );

        wp_enqueue_script(
            'chartjs',
            RAIN_OS_AEO_PLUGIN_URL . 'assets/js/chart.min.js',
            array(),
            '4.5.1',
            true
        );

        wp_enqueue_script(
            'rain-os-charts',
            RAIN_OS_AEO_PLUGIN_URL . 'assets/js/charts.js',
            array( 'jquery', 'chartjs' ),
            RAIN_OS_AEO_VERSION,
            true
        );

        wp_localize_script(
            'rain-os-admin',
            'rainOsAeo',
            array(
                'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
                'nonce'     => wp_create_nonce( 'rain_os_aeo_nonce' ),
                'pluginUrl' => RAIN_OS_AEO_PLUGIN_URL,
                'pdEnabled' => Rain_OS_Settings::is_pd_enabled(),
                'i18n'      => array(
                    'analyzing'        => __( 'Analyzing...', 'fervent-readability-optimizer' ),
                    'scanning'         => __( 'Scanning URL…', 'fervent-readability-optimizer' ),
                    'error'            => __( 'An error occurred. Please try again.', 'fervent-readability-optimizer' ),
                    'success'          => __( 'Analysis complete!', 'fervent-readability-optimizer' ),
                    'noApiKey'         => __( 'Please configure your API key in Settings.', 'fervent-readability-optimizer' ),
                    'confirm'          => __( 'Are you sure?', 'fervent-readability-optimizer' ),
                    'urlRequired'      => __( 'Please enter a URL to scan.', 'fervent-readability-optimizer' ),
                    'urlInvalid'       => __( 'Please enter a valid URL including http:// or https://', 'fervent-readability-optimizer' ),
                    'hide'             => __( 'Hide', 'fervent-readability-optimizer' ),
                    'view'             => __( 'View', 'fervent-readability-optimizer' ),
                    'connectionFailed' => __( 'Connection failed. Please check your API key.', 'fervent-readability-optimizer' ),
                ),
            )
        );

        $separator_css = '
            #adminmenu li a[href$="page=rain-os-aeo-sep-analyze"],
            #adminmenu li a[href$="page=rain-os-aeo-sep-reports"],
            #adminmenu li a[href$="page=rain-os-aeo-sep-learn"],
            #adminmenu li a[href$="page=rain-os-aeo-sep-account"] {
                pointer-events: none;
                cursor: default;
                font-size: 10px !important;
                font-weight: 700 !important;
                text-transform: uppercase !important;
                letter-spacing: 0.8px !important;
                color: rgba(255,255,255,0.3) !important;
                padding-top: 14px !important;
                padding-bottom: 2px !important;
                margin-top: 4px;
            }
            #adminmenu li a[href$="page=rain-os-aeo-sep-analyze"]:hover,
            #adminmenu li a[href$="page=rain-os-aeo-sep-reports"]:hover,
            #adminmenu li a[href$="page=rain-os-aeo-sep-learn"]:hover,
            #adminmenu li a[href$="page=rain-os-aeo-sep-account"]:hover {
                background: transparent !important;
                color: rgba(255,255,255,0.3) !important;
            }
        ';
        wp_add_inline_style( 'rain-os-admin', $separator_css );

        // Settings page — dedicated stylesheet
        if ( strpos( $hook, 'rain-os-aeo-settings' ) !== false ) {
            wp_enqueue_style(
                'rain-os-settings',
                RAIN_OS_AEO_PLUGIN_URL . 'assets/css/settings.css',
                array( 'rain-os-admin' ),
                RAIN_OS_AEO_VERSION
            );
        }

        // Upgrade & Settings — Stripe checkout / portal / key regen
        if ( strpos( $hook, 'rain-os-aeo-upgrade' ) !== false || strpos( $hook, 'rain-os-aeo-settings' ) !== false ) {
            wp_enqueue_script(
                'rain-os-upgrade',
                RAIN_OS_AEO_PLUGIN_URL . 'assets/js/upgrade.js',
                array( 'jquery' ),
                RAIN_OS_AEO_VERSION,
                true
            );

            wp_localize_script(
                'rain-os-upgrade',
                'rainOsUpgrade',
                array(
                    'ajaxUrl' => admin_url( 'admin-ajax.php' ),
                    'nonce'   => wp_create_nonce( 'rain_os_aeo_nonce' ),
                    'i18n'    => array(
                        'redirecting'  => __( 'Redirecting to checkout…', 'fervent-readability-optimizer' ),
                        'opening'      => __( 'Opening billing portal…', 'fervent-readability-optimizer' ),
                        'regenerating' => __( 'Regenerating key…', 'fervent-readability-optimizer' ),
                        'regenConfirm' => __( 'Regenerate your API key? Your current key will stop working immediately.', 'fervent-readability-optimizer' ),
                        'error'        => __( 'An error occurred. Please try again.', 'fervent-readability-optimizer' ),
                    ),
                )
            );
        }

        // URL Scanner assets — only on the URL scanner page
        if ( strpos( $hook, 'rain-os-aeo-url-scanner' ) !== false ) {
            wp_enqueue_style(
                'rain-os-url-scanner',
                RAIN_OS_AEO_PLUGIN_URL . 'assets/css/url-scanner.css',
                array( 'rain-os-admin' ),
                RAIN_OS_AEO_VERSION
            );

            wp_enqueue_script(
                'rain-os-url-scanner',
                RAIN_OS_AEO_PLUGIN_URL . 'assets/js/url-scanner.js',
                array( 'jquery', 'rain-os-admin' ),
                RAIN_OS_AEO_VERSION,
                true
            );

            wp_localize_script(
                'rain-os-url-scanner',
                'rainOsScanner',
                array(
                    'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
                    'nonce'     => wp_create_nonce( 'rain_os_aeo_nonce' ),
                    'pdEnabled' => Rain_OS_Settings::is_pd_enabled(),
                    'i18n'    => array(
                        'urlRequired'              => __( 'Please enter a URL to scan.', 'fervent-readability-optimizer' ),
                        'urlInvalid'               => __( 'Please enter a valid URL including http:// or https://', 'fervent-readability-optimizer' ),
                        'scanning'                 => __( 'Scanning URL…', 'fervent-readability-optimizer' ),
                        'scan'                     => __( 'Scan URL', 'fervent-readability-optimizer' ),
                        'error'                    => __( 'An error occurred. Please try again.', 'fervent-readability-optimizer' ),
                        'networkError'             => __( 'Network error. Please try again.', 'fervent-readability-optimizer' ),
                        'overallScore'             => __( 'Overall Score', 'fervent-readability-optimizer' ),
                        'technicalSignals'         => __( 'Technical HTML Signals', 'fervent-readability-optimizer' ),
                        'technicalRecommendations' => __( 'Technical Recommendations', 'fervent-readability-optimizer' ),
                        'recommendations'          => __( 'Recommendations', 'fervent-readability-optimizer' ),
                        'urlScanOnly'              => __( 'URL Scan Only', 'fervent-readability-optimizer' ),
                        'usageInfo'                => __( 'API Usage', 'fervent-readability-optimizer' ),
                    ),
                )
            );
        }
    }
}
