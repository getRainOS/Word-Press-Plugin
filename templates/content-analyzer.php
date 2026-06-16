<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="rain-os-wrap rain-os-analyzer-wrap">
    <div class="rain-os-header">
        <div class="rain-os-header-content">
            <div class="rain-os-logo">
                <span class="rain-os-title"><span class="rain-white">r</span><span class="rain-blue">ai</span><span class="rain-white">n</span></span>
                <span class="rain-os-badge"><?php esc_html_e( 'Content Analyzer', 'fervent-readability-optimizer' ); ?></span>
            </div>
            <div class="rain-os-header-actions">
                <a href="<?php echo esc_url( admin_url( 'admin.php?page=rain-os-aeo' ) ); ?>" class="rain-os-btn rain-os-btn-secondary">
                    <span class="dashicons dashicons-arrow-left-alt"></span>
                    <?php esc_html_e( 'Back to Dashboard', 'fervent-readability-optimizer' ); ?>
                </a>
            </div>
        </div>
    </div>

    <div class="rain-os-analyzer-content">
        <div class="rain-os-analyzer-main">
            <header class="rain-os-page-header">
                <h1><?php esc_html_e( 'Content Analyzer', 'fervent-readability-optimizer' ); ?></h1>
                <p><?php esc_html_e( 'Analyze your content for AI readability, digital authority, and conversion readiness', 'fervent-readability-optimizer' ); ?></p>
            </header>

            <div class="rain-os-editor-card">
                <div class="rain-os-scan-mode-toggle">
                    <button type="button" class="rain-os-mode-btn active" data-mode="paste" id="mode-paste">
                        <span class="dashicons dashicons-edit"></span>
                        <?php esc_html_e( 'Paste Content', 'fervent-readability-optimizer' ); ?>
                    </button>
                    <button type="button" class="rain-os-mode-btn" data-mode="url" id="mode-url">
                        <span class="dashicons dashicons-admin-links"></span>
                        <?php esc_html_e( 'Scan URL', 'fervent-readability-optimizer' ); ?>
                    </button>
                </div>

                <div id="rain-os-url-input-area" style="display:none;">
                    <input type="text"
                           id="rain-os-scan-url"
                           class="rain-os-input"
                           value="http://"
                           placeholder="<?php esc_attr_e( 'http://yoursite.com/page-to-scan', 'fervent-readability-optimizer' ); ?>"
                           autocomplete="off" />
                    <p class="rain-os-form-help">
                        <?php esc_html_e( 'Enter a publicly accessible URL. The backend will fetch the page and analyse both its content and technical HTML structure.', 'fervent-readability-optimizer' ); ?>
                    </p>
                </div>

                <div class="rain-os-editor-toolbar">
                    <button type="button" class="rain-os-toolbar-btn" data-command="bold" title="<?php esc_attr_e( 'Bold', 'fervent-readability-optimizer' ); ?>"><strong>B</strong></button>
                    <button type="button" class="rain-os-toolbar-btn" data-command="italic" title="<?php esc_attr_e( 'Italic', 'fervent-readability-optimizer' ); ?>"><em>I</em></button>
                    <button type="button" class="rain-os-toolbar-btn" data-command="underline" title="<?php esc_attr_e( 'Underline', 'fervent-readability-optimizer' ); ?>"><u>U</u></button>
                    <span class="rain-os-toolbar-divider"></span>
                    <button type="button" class="rain-os-toolbar-btn" data-command="formatBlock" data-value="h1" title="<?php esc_attr_e( 'Heading 1', 'fervent-readability-optimizer' ); ?>">H1</button>
                    <button type="button" class="rain-os-toolbar-btn" data-command="formatBlock" data-value="h2" title="<?php esc_attr_e( 'Heading 2', 'fervent-readability-optimizer' ); ?>">H2</button>
                    <button type="button" class="rain-os-toolbar-btn" data-command="formatBlock" data-value="h3" title="<?php esc_attr_e( 'Heading 3', 'fervent-readability-optimizer' ); ?>">H3</button>
                    <span class="rain-os-toolbar-divider"></span>
                    <button type="button" class="rain-os-toolbar-btn" data-command="insertUnorderedList" title="<?php esc_attr_e( 'Bullet List', 'fervent-readability-optimizer' ); ?>">
                        <span class="dashicons dashicons-editor-ul"></span>
                    </button>
                    <button type="button" class="rain-os-toolbar-btn" data-command="createLink" title="<?php esc_attr_e( 'Insert Link', 'fervent-readability-optimizer' ); ?>">
                        <span class="dashicons dashicons-admin-links"></span>
                    </button>
                    <span class="rain-os-toolbar-divider"></span>
                    <button type="button" class="rain-os-toolbar-btn rain-os-heatmap-btn" id="toggle-heatmap" title="<?php esc_attr_e( 'AI Heatmap: Highlights keywords color-coded by pillar category', 'fervent-readability-optimizer' ); ?>">
                        <span class="dashicons dashicons-visibility"></span>
                        <?php esc_html_e( 'AI Heatmap', 'fervent-readability-optimizer' ); ?>
                    </button>
                    <div class="rain-os-toolbar-spacer"></div>
                    <span class="rain-os-word-count">0 <?php esc_html_e( 'words', 'fervent-readability-optimizer' ); ?></span>
                </div>

                <div class="rain-os-editor-title-wrap">
                    <input type="text" id="rain-os-content-title" class="rain-os-editor-title" placeholder="<?php esc_attr_e( 'Enter title...', 'fervent-readability-optimizer' ); ?>" />
                </div>

                <div class="rain-os-editor-separator"></div>

                <div id="rain-os-content-editor" class="rain-os-editor" contenteditable="true" placeholder="<?php esc_attr_e( 'Start writing or paste your content here...', 'fervent-readability-optimizer' ); ?>"></div>

                <div class="rain-os-editor-actions">
                    <button type="button" id="rain-os-analyze-btn" class="rain-os-btn rain-os-btn-primary">
                        <span class="dashicons dashicons-search"></span>
                        <?php esc_html_e( 'Analyze Content', 'fervent-readability-optimizer' ); ?>
                    </button>
                    <button type="button" id="rain-os-clear-btn" class="rain-os-btn rain-os-btn-secondary">
                        <?php esc_html_e( 'Clear', 'fervent-readability-optimizer' ); ?>
                    </button>
                </div>
            </div>

            <div class="rain-os-local-audit">
                <h3><?php esc_html_e( 'Local Content Audit', 'fervent-readability-optimizer' ); ?></h3>
                <div class="rain-os-audit-grid">
                    <div class="rain-os-audit-item" data-check="title">
                        <span class="rain-os-audit-checkbox"></span>
                        <span class="rain-os-audit-label"><?php esc_html_e( 'Title Present', 'fervent-readability-optimizer' ); ?></span>
                    </div>
                    <div class="rain-os-audit-item" data-check="length">
                        <span class="rain-os-audit-checkbox"></span>
                        <span class="rain-os-audit-label"><?php esc_html_e( 'Content Length (300+ words)', 'fervent-readability-optimizer' ); ?></span>
                    </div>
                    <div class="rain-os-audit-item" data-check="headings">
                        <span class="rain-os-audit-checkbox"></span>
                        <span class="rain-os-audit-label"><?php esc_html_e( 'Heading Structure', 'fervent-readability-optimizer' ); ?></span>
                    </div>
                    <div class="rain-os-audit-item" data-check="links">
                        <span class="rain-os-audit-checkbox"></span>
                        <span class="rain-os-audit-label"><?php esc_html_e( 'Internal/External Links', 'fervent-readability-optimizer' ); ?></span>
                    </div>
                    <div class="rain-os-audit-item" data-check="lists">
                        <span class="rain-os-audit-checkbox"></span>
                        <span class="rain-os-audit-label"><?php esc_html_e( 'Lists/Formatting', 'fervent-readability-optimizer' ); ?></span>
                    </div>
                    <div class="rain-os-audit-item" data-check="paragraphs">
                        <span class="rain-os-audit-checkbox"></span>
                        <span class="rain-os-audit-label"><?php esc_html_e( 'Paragraph Structure', 'fervent-readability-optimizer' ); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="rain-os-analyzer-sidebar">
            <div class="rain-os-sidebar-section rain-os-ai-scores-section">
                <h3><?php esc_html_e( 'AI - Powered Readability Analysis', 'fervent-readability-optimizer' ); ?></h3>
                <div id="rain-os-ai-readiness-scores" class="rain-os-ai-readiness-scores">
                    <div class="rain-os-ai-score-row">
                        <span class="rain-os-ai-score-label"><?php esc_html_e( 'Readability', 'fervent-readability-optimizer' ); ?></span>
                        <span class="rain-os-ai-score-value" data-score="readability">--</span>
                    </div>
                    <div class="rain-os-ai-score-row">
                        <span class="rain-os-ai-score-label"><?php esc_html_e( 'Structure', 'fervent-readability-optimizer' ); ?></span>
                        <span class="rain-os-ai-score-value" data-score="structure">--</span>
                    </div>
                    <div class="rain-os-ai-score-row">
                        <span class="rain-os-ai-score-label"><?php esc_html_e( 'Freshness', 'fervent-readability-optimizer' ); ?></span>
                        <span class="rain-os-ai-score-value" data-score="freshness">--</span>
                    </div>
                    <div class="rain-os-ai-score-row">
                        <span class="rain-os-ai-score-label"><?php esc_html_e( 'Citation Readiness', 'fervent-readability-optimizer' ); ?></span>
                        <span class="rain-os-ai-score-value" data-score="citation">--</span>
                    </div>
                    <div class="rain-os-ai-score-row">
                        <span class="rain-os-ai-score-label"><?php esc_html_e( 'AI Visibility', 'fervent-readability-optimizer' ); ?></span>
                        <span class="rain-os-ai-score-value" data-score="visibility">--</span>
                    </div>
                    <div class="rain-os-ai-normalize-wrap">
                        <button type="button" id="rain-os-normalize-btn" class="rain-os-btn rain-os-btn-secondary rain-os-btn-small">
                            <span class="dashicons dashicons-cloud-upload"></span>
                            <?php esc_html_e( 'Normalize Content', 'fervent-readability-optimizer' ); ?>
                        </button>
                        <p class="rain-os-normalize-help"><?php esc_html_e( 'Send content to AI backend for analysis', 'fervent-readability-optimizer' ); ?></p>
                    </div>
                    <div class="rain-os-ai-reanalyze-wrap">
                        <button type="button" id="rain-os-reanalyze-btn" class="rain-os-btn rain-os-btn-primary rain-os-btn-small">
                            <span class="dashicons dashicons-update"></span>
                            <?php esc_html_e( 'Reanalyze Content', 'fervent-readability-optimizer' ); ?>
                        </button>
                    </div>
                </div>
            </div>

            <div class="rain-os-sidebar-section rain-os-recommendations-section">
                <h3><?php esc_html_e( 'Recommendations', 'fervent-readability-optimizer' ); ?></h3>
                <div id="rain-os-recommendations" class="rain-os-recommendations">
                    <p class="rain-os-no-recommendations"><?php esc_html_e( 'No recommendations at this time.', 'fervent-readability-optimizer' ); ?></p>
                </div>
            </div>

            <div class="rain-os-sidebar-section rain-os-about-section">
                <h3><?php esc_html_e( 'About AI Readiness', 'fervent-readability-optimizer' ); ?></h3>
                <p class="rain-os-about-text"><?php esc_html_e( 'AI Readiness scores measure how well your content is optimized for AI-powered search engines and answer engines. The scores reflect readability, structural clarity, freshness signals, citation readiness, and overall visibility to AI systems.', 'fervent-readability-optimizer' ); ?></p>
            </div>

            <div class="rain-os-sidebar-section">
                <h3><?php esc_html_e( 'Analysis Results', 'fervent-readability-optimizer' ); ?></h3>
                <div id="rain-os-analysis-results" class="rain-os-analysis-results">
                    <div class="rain-os-no-results">
                        <span class="dashicons dashicons-analytics"></span>
                        <p><?php esc_html_e( 'Click "Analyze Content" to see your AEO scores', 'fervent-readability-optimizer' ); ?></p>
                    </div>
                </div>
            </div>

            <div class="rain-os-sidebar-section rain-os-quick-tools">
                <h3><?php esc_html_e( 'Quick Tools', 'fervent-readability-optimizer' ); ?></h3>
                <div class="rain-os-quick-tools-grid">
                    <button type="button" class="rain-os-quick-tool" data-tool="title_suggestion">
                        <span class="dashicons dashicons-edit"></span>
                        <?php esc_html_e( 'Title Suggestion', 'fervent-readability-optimizer' ); ?>
                    </button>
                    <button type="button" class="rain-os-quick-tool" data-tool="meta_description">
                        <span class="dashicons dashicons-text"></span>
                        <?php esc_html_e( 'Meta Description', 'fervent-readability-optimizer' ); ?>
                    </button>
                    <button type="button" class="rain-os-quick-tool" data-tool="summarize">
                        <span class="dashicons dashicons-editor-justify"></span>
                        <?php esc_html_e( 'Summarize', 'fervent-readability-optimizer' ); ?>
                    </button>
                    <button type="button" class="rain-os-quick-tool" data-tool="rewrite">
                        <span class="dashicons dashicons-update"></span>
                        <?php esc_html_e( 'Rewrite', 'fervent-readability-optimizer' ); ?>
                    </button>
                </div>
            </div>

            <div class="rain-os-sidebar-section rain-os-heatmap-legend" style="display: none;">
                <h3><?php esc_html_e( 'Heatmap Legend', 'fervent-readability-optimizer' ); ?></h3>
                <div class="rain-os-legend-items">
                    <div class="rain-os-legend-item">
                        <span class="rain-os-legend-color rain-os-legend-cyan"></span>
                        <span><?php esc_html_e( 'AI Readability', 'fervent-readability-optimizer' ); ?></span>
                    </div>
                    <div class="rain-os-legend-item">
                        <span class="rain-os-legend-color rain-os-legend-green"></span>
                        <span><?php esc_html_e( 'Digital Authority', 'fervent-readability-optimizer' ); ?></span>
                    </div>
                    <div class="rain-os-legend-item">
                        <span class="rain-os-legend-color rain-os-legend-purple"></span>
                        <span><?php esc_html_e( 'Conversion Readiness', 'fervent-readability-optimizer' ); ?></span>
                    </div>
                    <div class="rain-os-legend-item">
                        <span class="rain-os-legend-color rain-os-legend-yellow"></span>
                        <span><?php esc_html_e( 'Needs Citation', 'fervent-readability-optimizer' ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
