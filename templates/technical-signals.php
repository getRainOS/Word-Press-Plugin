<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! isset( $analysis['technical_signals'] ) || empty( $analysis['technical_signals'] ) ) {
    return;
}
?>

<div class="rain-os-card rain-os-technical-signals">
    <div class="rain-os-card-header">
        <h3><?php esc_html_e( 'Technical HTML Signals', 'fervent-readability-optimizer' ); ?></h3>
        <span class="rain-os-badge rain-os-badge-info">
            <?php esc_html_e( 'URL Scan Only', 'fervent-readability-optimizer' ); ?>
        </span>
    </div>
    <div class="rain-os-card-body">
        <?php
        $signals = $analysis['technical_signals'];
        $signal_labels = array(
            'hasSchemaMarkup'           => array( __( 'Schema Markup', 'fervent-readability-optimizer' ), 'positive' ),
            'hasFaqSchema'              => array( __( 'FAQ Schema', 'fervent-readability-optimizer' ), 'positive' ),
            'hasSemanticHtml'           => array( __( 'Semantic HTML', 'fervent-readability-optimizer' ), 'positive' ),
            'hasProperHeadingHierarchy' => array( __( 'Heading Hierarchy', 'fervent-readability-optimizer' ), 'positive' ),
            'hasMetaDescription'        => array( __( 'Meta Description', 'fervent-readability-optimizer' ), 'positive' ),
            'hasCanonicalTag'           => array( __( 'Canonical Tag', 'fervent-readability-optimizer' ), 'positive' ),
            'hasOpenGraphTags'          => array( __( 'Open Graph Tags', 'fervent-readability-optimizer' ), 'positive' ),
            'hasLlmsTxt'                => array( __( 'llms.txt Present', 'fervent-readability-optimizer' ), 'positive' ),
            'isJsRendered'              => array( __( 'JS Rendering (AI Risk)', 'fervent-readability-optimizer' ), 'negative' ),
        );
        ?>

        <div class="rain-os-signals-grid">
        <?php foreach ( $signal_labels as $key => $data ) :
            if ( ! array_key_exists( $key, $signals ) ) continue;
            $value     = $signals[ $key ];
            $label     = $data[0];
            $type      = $data[1];
            $is_good   = ( 'positive' === $type ) ? (bool) $value : ! (bool) $value;
            $icon      = $is_good ? '✓' : '✗';
            $css_class = $is_good ? 'rain-os-signal-pass' : 'rain-os-signal-fail';
        ?>
            <div class="rain-os-signal-item <?php echo esc_attr( $css_class ); ?>">
                <span class="rain-os-signal-icon"><?php echo esc_html( $icon ); ?></span>
                <span class="rain-os-signal-label"><?php echo esc_html( $label ); ?></span>
            </div>
        <?php endforeach; ?>
        </div>

        <?php if ( ! empty( $signals['jsRenderingWarning'] ) ) : ?>
        <div class="rain-os-alert rain-os-alert-warning">
            <?php echo esc_html( $signals['jsRenderingWarning'] ); ?>
        </div>
        <?php endif; ?>
    </div>
</div>
