<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="rain-os-wrap rain-os-url-scanner-wrap">
    <div class="rain-os-header">
        <div class="rain-os-header-content">
            <div class="rain-os-logo">
                <span class="rain-os-title"><span class="rain-white">r</span><span class="rain-blue">ai</span><span class="rain-white">n</span></span>
                <span class="rain-os-badge"><?php esc_html_e( 'URL Scanner', 'fervent-readability-optimizer' ); ?></span>
            </div>
            <div class="rain-os-header-actions">
                <a href="<?php echo esc_url( admin_url( 'admin.php?page=rain-os-aeo' ) ); ?>" class="rain-os-btn rain-os-btn-secondary">
                    <span class="dashicons dashicons-arrow-left-alt"></span>
                    <?php esc_html_e( 'Back to Dashboard', 'fervent-readability-optimizer' ); ?>
                </a>
            </div>
        </div>
    </div>

    <div class="rain-os-scanner-content">
        <header class="rain-os-page-header">
            <h1><?php esc_html_e( 'URL Scanner', 'fervent-readability-optimizer' ); ?></h1>
            <p><?php esc_html_e( 'Enter a public URL to analyze its content and technical HTML structure for AEO readiness.', 'fervent-readability-optimizer' ); ?></p>
        </header>

        <div class="rain-os-scanner-card">
            <div class="rain-os-scanner-form">
                <div class="rain-os-scanner-input-row">
                    <div class="rain-os-scanner-url-wrap">
                        <span class="dashicons dashicons-admin-links rain-os-scanner-icon"></span>
                        <input type="text"
                               id="rain-os-scanner-url"
                               class="rain-os-scanner-url-input"
                               value="http://"
                               placeholder="<?php esc_attr_e( 'http://yoursite.com/page-to-scan', 'fervent-readability-optimizer' ); ?>"
                               autocomplete="off" />
                    </div>
                    <select id="rain-os-scanner-industry" class="rain-os-select">
                        <option value=""><?php esc_html_e( 'Any Industry', 'fervent-readability-optimizer' ); ?></option>
                        <option value="technology"><?php esc_html_e( 'Technology', 'fervent-readability-optimizer' ); ?></option>
                        <option value="healthcare"><?php esc_html_e( 'Healthcare', 'fervent-readability-optimizer' ); ?></option>
                        <option value="finance"><?php esc_html_e( 'Finance', 'fervent-readability-optimizer' ); ?></option>
                        <option value="education"><?php esc_html_e( 'Education', 'fervent-readability-optimizer' ); ?></option>
                        <option value="ecommerce"><?php esc_html_e( 'E-Commerce', 'fervent-readability-optimizer' ); ?></option>
                        <option value="marketing"><?php esc_html_e( 'Marketing', 'fervent-readability-optimizer' ); ?></option>
                        <option value="legal"><?php esc_html_e( 'Legal', 'fervent-readability-optimizer' ); ?></option>
                        <option value="real_estate"><?php esc_html_e( 'Real Estate', 'fervent-readability-optimizer' ); ?></option>
                        <option value="travel"><?php esc_html_e( 'Travel', 'fervent-readability-optimizer' ); ?></option>
                    </select>
                    <button type="button" id="rain-os-scan-btn" class="rain-os-btn rain-os-btn-primary">
                        <span class="dashicons dashicons-search"></span>
                        <?php esc_html_e( 'Scan URL', 'fervent-readability-optimizer' ); ?>
                    </button>
                </div>
                <p class="rain-os-form-help">
                    <?php esc_html_e( 'The URL must be publicly accessible. The URL scanner fetches the page and scores both its content and technical HTML structure.', 'fervent-readability-optimizer' ); ?>
                </p>
            </div>
        </div>

        <div id="rain-os-scan-results" style="display:none;">
            <!-- Results injected by url-scanner.js -->
        </div>

        <div id="rain-os-scan-error" class="rain-os-alert rain-os-alert-error" style="display:none;"></div>
    </div>
</div>
