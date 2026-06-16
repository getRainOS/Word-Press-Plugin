<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="rain-os-wrap">
    <div class="rain-os-header">
        <div class="rain-os-header-content">
            <div class="rain-os-logo">
                <span class="rain-os-title"><span class="rain-white">r</span><span class="rain-blue">ai</span><span class="rain-white">n</span></span>
                <span class="rain-os-badge"><?php esc_html_e( 'Upgrade', 'fervent-readability-optimizer' ); ?></span>
            </div>
            <div class="rain-os-header-actions">
                <a href="<?php echo esc_url( admin_url( 'admin.php?page=rain-os-aeo' ) ); ?>" class="rain-os-btn rain-os-btn-secondary">
                    <span class="dashicons dashicons-arrow-left-alt"></span>
                    <?php esc_html_e( 'Back to Dashboard', 'fervent-readability-optimizer' ); ?>
                </a>
            </div>
        </div>
    </div>

    <div class="rain-os-content rain-os-upgrade-content">
        <header class="rain-os-page-header rain-os-center">
            <h1><?php esc_html_e( 'Upgrade Your Plan', 'fervent-readability-optimizer' ); ?></h1>
            <p><?php esc_html_e( 'Optimize for Gemini, Perplexity, Claude and the emerging ChatGPT shopping experience', 'fervent-readability-optimizer' ); ?></p>
        </header>

        <div class="rain-os-pricing-grid">
            <div class="rain-os-pricing-card rain-os-pricing-recommended">
                <span class="rain-os-recommended-badge"><?php esc_html_e( 'RECOMMENDED', 'fervent-readability-optimizer' ); ?></span>
                <h3 class="rain-os-pricing-title"><?php esc_html_e( 'Business', 'fervent-readability-optimizer' ); ?></h3>
                <div class="rain-os-pricing-price">
                    <span class="rain-os-price-amount">$29.99</span>
                    <span class="rain-os-price-period">/<?php esc_html_e( 'month', 'fervent-readability-optimizer' ); ?></span>
                </div>
                <p class="rain-os-pricing-desc"><?php esc_html_e( 'Perfect for local businesses, early-stage startups, product teams and solo-creators', 'fervent-readability-optimizer' ); ?></p>
                
                <ul class="rain-os-pricing-features">
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( '100 AI Optimizations', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Semantic Clarity: Precision & ambiguity check', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Readability Score: AI & human processing ease', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Metadata Audit: Schema & HTML verification', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Logical Structure: Heading hierarchy analysis', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Entity Recognition: Knowledge graph linking', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Citation Readiness: Quotable snippet detection', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'AEO Alignment: Answer engine optimization scoring', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Descriptive Metadata: Meta tags and content indexing', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Schema Extraction: Structured data opportunities', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'QA-Format Detection: Question/Answer optimization', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Schema Completeness: Structured data coverage', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Answer Layer Quality: AI-extractable answers', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Freshness Signals: Content currency indicators', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Conversational Query Match: Voice search alignment', 'fervent-readability-optimizer' ); ?></li>
                </ul>

                <button type="button"
                        class="rain-os-btn rain-os-btn-primary rain-os-btn-full rain-os-checkout-btn"
                        data-price-id="price_1SeCJH3NMjs4uYdgpi0xB0XN">
                    <span class="dashicons dashicons-cloud"></span>
                    <?php esc_html_e( 'Upgrade to Business', 'fervent-readability-optimizer' ); ?>
                </button>
            </div>

            <div class="rain-os-pricing-card">
                <h3 class="rain-os-pricing-title"><?php esc_html_e( 'Pro', 'fervent-readability-optimizer' ); ?></h3>
                <div class="rain-os-pricing-price">
                    <span class="rain-os-price-amount">$99.99</span>
                    <span class="rain-os-price-period">/<?php esc_html_e( 'month', 'fervent-readability-optimizer' ); ?></span>
                </div>
                <p class="rain-os-pricing-desc"><?php esc_html_e( 'Ideal for enterprises, agencies, scaling SaaS brands, product teams and other power users', 'fervent-readability-optimizer' ); ?></p>
                
                <ul class="rain-os-pricing-features">
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Everything in Business +', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( '500 AI Optimizations (400 additional)', 'fervent-readability-optimizer' ); ?></li>
                    <li><span class="rain-os-check">✓</span> <?php esc_html_e( 'Priority e-mail Support', 'fervent-readability-optimizer' ); ?></li>
                </ul>

                <button type="button"
                        class="rain-os-btn rain-os-btn-primary rain-os-btn-full rain-os-checkout-btn"
                        data-price-id="price_1SeCKM3NMjs4uYdgcBRhgIhD">
                    <span class="dashicons dashicons-star-filled"></span>
                    <?php esc_html_e( 'Upgrade to Pro', 'fervent-readability-optimizer' ); ?>
                </button>
            </div>
        </div>

        <div id="rain-os-checkout-message" class="rain-os-connection-status" style="display:none; text-align:center; margin-top:16px;"></div>
    </div>
</div>
