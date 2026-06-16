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
                <span class="rain-os-badge"><?php esc_html_e( 'AI Readability', 'fervent-readability-optimizer' ); ?></span>
            </div>
            <div class="rain-os-header-actions">
                <a href="<?php echo esc_url( admin_url( 'admin.php?page=rain-os-aeo' ) ); ?>" class="rain-os-btn rain-os-btn-secondary">
                    <span class="dashicons dashicons-arrow-left-alt"></span>
                    <?php esc_html_e( 'Go to Dashboard', 'fervent-readability-optimizer' ); ?>
                </a>
            </div>
        </div>
    </div>

    <div class="rain-os-content">
        <header class="rain-os-page-header rain-os-center">
            <h1><?php esc_html_e( 'Learn About AI Readability', 'fervent-readability-optimizer' ); ?></h1>
            <p><?php esc_html_e( 'Understand how AI systems read and interpret your content', 'fervent-readability-optimizer' ); ?></p>
        </header>

        <div class="rain-os-learn-grid">
            <div class="rain-os-learn-card">
                <div class="rain-os-learn-card-icon">
                    <span class="dashicons dashicons-welcome-learn-more"></span>
                </div>
                <h3><?php esc_html_e( 'What is AI Readability?', 'fervent-readability-optimizer' ); ?></h3>
                <p><?php esc_html_e( 'AI Readability is a measure of how easily artificial intelligence systems can understand, parse, and extract meaning from your content. It goes beyond traditional readability scores to evaluate semantic clarity, logical structure, and machine interpretability.', 'fervent-readability-optimizer' ); ?></p>
            </div>

            <div class="rain-os-learn-card">
                <div class="rain-os-learn-card-icon rain-os-icon-green">
                    <span class="dashicons dashicons-chart-line"></span>
                </div>
                <h3><?php esc_html_e( 'Why Does It Matter?', 'fervent-readability-optimizer' ); ?></h3>
                <p><?php esc_html_e( 'As AI-powered search engines and answer engines become the primary way users find information, your content must be optimized for machine understanding. Content that AI cannot parse will not appear in AI-generated answers, regardless of its quality or SEO ranking.', 'fervent-readability-optimizer' ); ?></p>
            </div>

            <div class="rain-os-learn-card rain-os-learn-card-full">
                <h3><?php esc_html_e( 'The Five Pillars Explained', 'fervent-readability-optimizer' ); ?></h3>
                <div class="rain-os-learn-pillars-grid">
                    <div class="rain-os-pillar-card rain-os-pillar-cyan">
                        <div class="rain-os-pillar-indicator"></div>
                        <h4><?php esc_html_e( 'AI Readability', 'fervent-readability-optimizer' ); ?></h4>
                        <p><?php esc_html_e( 'Measures semantic clarity, logical structure, and readability. Determines whether AI can understand what you are saying.', 'fervent-readability-optimizer' ); ?></p>
                        <ul>
                            <li><?php esc_html_e( 'Semantic Clarity', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'Readability Score', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'Logical Structure', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'AEO Alignment', 'fervent-readability-optimizer' ); ?></li>
                        </ul>
                    </div>
                    <div class="rain-os-pillar-card rain-os-pillar-green">
                        <div class="rain-os-pillar-indicator"></div>
                        <h4><?php esc_html_e( 'Digital Authority', 'fervent-readability-optimizer' ); ?></h4>
                        <p><?php esc_html_e( 'Evaluates credibility, trust signals, and citation readiness. Determines whether AI should trust and cite your content.', 'fervent-readability-optimizer' ); ?></p>
                        <ul>
                            <li><?php esc_html_e( 'Entity Recognition', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'Citation Readiness', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'Descriptive Metadata', 'fervent-readability-optimizer' ); ?></li>
                        </ul>
                    </div>
                    <div class="rain-os-pillar-card rain-os-pillar-purple">
                        <div class="rain-os-pillar-indicator"></div>
                        <h4><?php esc_html_e( 'Conversion Readiness', 'fervent-readability-optimizer' ); ?></h4>
                        <p><?php esc_html_e( 'Assesses engagement potential and action-driving effectiveness. Determines whether your content drives user action.', 'fervent-readability-optimizer' ); ?></p>
                        <ul>
                            <li><?php esc_html_e( 'Schema Extraction', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'QA-Format Detection', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'Metadata Audit', 'fervent-readability-optimizer' ); ?></li>
                        </ul>
                    </div>
                    <div class="rain-os-pillar-card rain-os-pillar-orange">
                        <div class="rain-os-pillar-indicator"></div>
                        <h4><?php esc_html_e( 'Product Discoverability', 'fervent-readability-optimizer' ); ?></h4>
                        <p><?php esc_html_e( 'Measures how easily your product or service can be found through AI-powered search and recommendation systems.', 'fervent-readability-optimizer' ); ?></p>
                        <ul>
                            <li><?php esc_html_e( 'Schema Completeness', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'Answer Layer Quality', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'Freshness Signals', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'Conversational Query Match', 'fervent-readability-optimizer' ); ?></li>
                        </ul>
                    </div>
                    <div class="rain-os-pillar-card" style="--pillar-color: #ec4899;">
                        <div class="rain-os-pillar-indicator"></div>
                        <h4><?php esc_html_e( 'RAG Readiness', 'fervent-readability-optimizer' ); ?></h4>
                        <p><?php esc_html_e( 'How well your content is structured for AI retrieval systems, vector databases, and embedding-based search.', 'fervent-readability-optimizer' ); ?></p>
                        <ul>
                            <li><?php esc_html_e( 'Information Density', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'Semantic Mapping', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'Hierarchical Formatting', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'Explicit Q&A', 'fervent-readability-optimizer' ); ?></li>
                            <li><?php esc_html_e( 'Authority Signals', 'fervent-readability-optimizer' ); ?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="rain-os-learn-card rain-os-learn-card-full">
                <h3><?php esc_html_e( 'How AI Reads Your Content', 'fervent-readability-optimizer' ); ?></h3>
                <div class="rain-os-process-steps">
                    <div class="rain-os-process-step">
                        <div class="rain-os-step-number">1</div>
                        <div class="rain-os-step-content">
                            <h4><?php esc_html_e( 'Parsing', 'fervent-readability-optimizer' ); ?></h4>
                            <p><?php esc_html_e( 'AI breaks your content into tokens and identifies sentence structure, headings, and formatting elements.', 'fervent-readability-optimizer' ); ?></p>
                        </div>
                    </div>
                    <div class="rain-os-process-step">
                        <div class="rain-os-step-number">2</div>
                        <div class="rain-os-step-content">
                            <h4><?php esc_html_e( 'Understanding', 'fervent-readability-optimizer' ); ?></h4>
                            <p><?php esc_html_e( 'AI analyzes semantic meaning, identifies entities, and maps relationships between concepts.', 'fervent-readability-optimizer' ); ?></p>
                        </div>
                    </div>
                    <div class="rain-os-process-step">
                        <div class="rain-os-step-number">3</div>
                        <div class="rain-os-step-content">
                            <h4><?php esc_html_e( 'Extraction', 'fervent-readability-optimizer' ); ?></h4>
                            <p><?php esc_html_e( 'AI extracts key facts, answers, and quotable content that can be used in responses and citations.', 'fervent-readability-optimizer' ); ?></p>
                        </div>
                    </div>
                    <div class="rain-os-process-step">
                        <div class="rain-os-step-number">4</div>
                        <div class="rain-os-step-content">
                            <h4><?php esc_html_e( 'Ranking', 'fervent-readability-optimizer' ); ?></h4>
                            <p><?php esc_html_e( 'AI ranks your content against alternatives based on clarity, authority, and relevance to user queries.', 'fervent-readability-optimizer' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rain-os-learn-card rain-os-learn-card-full">
                <h3><?php esc_html_e( 'URL Scanner: Analyze Any Public Page', 'fervent-readability-optimizer' ); ?></h3>
                <p><?php esc_html_e( 'The URL Scanner lets you run a full AEO analysis on any publicly accessible web page — no WordPress post required. This is useful for:', 'fervent-readability-optimizer' ); ?></p>
                <ul>
                    <li><?php esc_html_e( 'Auditing competitor pages to see where they score across the five pillars', 'fervent-readability-optimizer' ); ?></li>
                    <li><?php esc_html_e( 'Checking a landing page or microsite that lives outside of WordPress', 'fervent-readability-optimizer' ); ?></li>
                    <li><?php esc_html_e( 'Getting a quick snapshot of a page before writing a competing article', 'fervent-readability-optimizer' ); ?></li>
                </ul>
                <p><?php esc_html_e( 'The scanner returns five pillar scores, 9 technical HTML signal checks (Schema Markup, FAQ Schema, Semantic HTML, Heading Hierarchy, Meta Description, Canonical Tag, Open Graph Tags, llms.txt, JS Rendering risk), and a prioritized list of recommendations.', 'fervent-readability-optimizer' ); ?></p>
                <p><?php printf( wp_kses( __( 'Find it at <a href="%s">Rain OS &rsaquo; URL Scanner</a>.', 'fervent-readability-optimizer' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'admin.php?page=rain-os-aeo-url-scanner' ) ) ); ?></p>
            </div>

            <div class="rain-os-learn-card rain-os-learn-card-full">
                <h3><?php esc_html_e( 'Product Discoverability Mute Toggle', 'fervent-readability-optimizer' ); ?></h3>
                <p><?php esc_html_e( 'Product Discoverability is the fourth analysis pillar, measuring how easily AI search and recommendation systems can surface your product or service. It focuses on Schema Completeness, Answer Layer Quality, Freshness Signals, and Conversational Query Match.', 'fervent-readability-optimizer' ); ?></p>
                <p><?php esc_html_e( 'For some content types — such as editorial articles, news posts, or informational guides — product-focused signals are not relevant. The Mute Toggle lets you exclude this pillar from your overall score so it does not drag down the average for non-product content.', 'fervent-readability-optimizer' ); ?></p>
                <div class="rain-os-concept-callout" style="margin: 12px 0;">
                    <p class="rain-os-callout-quote"><?php esc_html_e( 'When muted, your overall score is calculated as an average of the remaining pillars. The pillar itself is visually dimmed across all dashboards and score displays.', 'fervent-readability-optimizer' ); ?></p>
                </div>
                <p><?php esc_html_e( 'When to mute it:', 'fervent-readability-optimizer' ); ?></p>
                <ul>
                    <li><?php esc_html_e( 'You run a blog, magazine, or news site with no products or services', 'fervent-readability-optimizer' ); ?></li>
                    <li><?php esc_html_e( 'Your content is purely informational and you want scoring focused on clarity and authority', 'fervent-readability-optimizer' ); ?></li>
                </ul>
                <p><?php esc_html_e( 'When to keep it active:', 'fervent-readability-optimizer' ); ?></p>
                <ul>
                    <li><?php esc_html_e( 'You sell products or services and want full visibility into how well AI systems can surface them', 'fervent-readability-optimizer' ); ?></li>
                    <li><?php esc_html_e( 'You run an e-commerce site, SaaS landing page, or any content where product discoverability matters', 'fervent-readability-optimizer' ); ?></li>
                </ul>
                <p><?php printf( wp_kses( __( 'The toggle can be found in <a href="%s">Rain OS &rsaquo; Settings</a> under Analysis Preferences.', 'fervent-readability-optimizer' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'admin.php?page=rain-os-aeo-settings' ) ) ); ?></p>
            </div>

            <div class="rain-os-learn-card rain-os-learn-card-full rain-os-learn-card-highlight">
                <h3><?php esc_html_e( 'AI Readability vs. Answer Engine Optimization', 'fervent-readability-optimizer' ); ?></h3>
                <div class="rain-os-concept-callout">
                    <p class="rain-os-callout-quote"><?php esc_html_e( 'You cannot optimize for answers if AI cannot first understand what you are saying. AI Readability is the premise. AEO is the thesis.', 'fervent-readability-optimizer' ); ?></p>
                </div>
                
                <h4><?php esc_html_e( 'The Translator vs. Interpreter Analogy', 'fervent-readability-optimizer' ); ?></h4>
                <div class="rain-os-analogy-grid">
                    <div class="rain-os-analogy-card rain-os-analogy-cyan">
                        <strong><?php esc_html_e( 'AI Readability = The Interpreter', 'fervent-readability-optimizer' ); ?></strong>
                        <p><?php esc_html_e( 'Ensures AI can understand what you are saying in the first place. If your content is unclear or poorly structured, AI cannot interpret it—making you invisible.', 'fervent-readability-optimizer' ); ?></p>
                    </div>
                    <div class="rain-os-analogy-card rain-os-analogy-purple">
                        <strong><?php esc_html_e( 'AEO = The Translator', 'fervent-readability-optimizer' ); ?></strong>
                        <p><?php esc_html_e( 'Comes after understanding. AI summarizes your ideas, reformats them as answers, and potentially cites your content. Translation cannot happen without interpretation.', 'fervent-readability-optimizer' ); ?></p>
                    </div>
                </div>

                <h4><?php esc_html_e( 'The AI Processing Sequence', 'fervent-readability-optimizer' ); ?></h4>
                <div class="rain-os-sequence-steps">
                    <div class="rain-os-sequence-step">
                        <div class="rain-os-seq-number">1</div>
                        <div class="rain-os-seq-title"><?php esc_html_e( 'Interpretation', 'fervent-readability-optimizer' ); ?></div>
                        <div class="rain-os-seq-desc"><?php esc_html_e( 'AI determines if it understands your content', 'fervent-readability-optimizer' ); ?></div>
                    </div>
                    <div class="rain-os-sequence-step">
                        <div class="rain-os-seq-number">2</div>
                        <div class="rain-os-seq-title"><?php esc_html_e( 'Meaning Mapping', 'fervent-readability-optimizer' ); ?></div>
                        <div class="rain-os-seq-desc"><?php esc_html_e( 'AI converts language into structured representations', 'fervent-readability-optimizer' ); ?></div>
                    </div>
                    <div class="rain-os-sequence-step">
                        <div class="rain-os-seq-number">3</div>
                        <div class="rain-os-seq-title"><?php esc_html_e( 'Answer Generation', 'fervent-readability-optimizer' ); ?></div>
                        <div class="rain-os-seq-desc"><?php esc_html_e( 'AI summarizes and delivers answers—possibly citing you', 'fervent-readability-optimizer' ); ?></div>
                    </div>
                </div>

                <h4><?php esc_html_e( 'The Core Distinction', 'fervent-readability-optimizer' ); ?></h4>
                <div class="rain-os-distinction-grid">
                    <div class="rain-os-distinction-card rain-os-distinction-cyan">
                        <div class="rain-os-dist-label"><?php esc_html_e( 'AI Readability asks:', 'fervent-readability-optimizer' ); ?></div>
                        <div class="rain-os-dist-question"><?php esc_html_e( 'Can an AI understand this content?', 'fervent-readability-optimizer' ); ?></div>
                        <div class="rain-os-dist-note"><?php esc_html_e( 'Determines eligibility', 'fervent-readability-optimizer' ); ?></div>
                    </div>
                    <div class="rain-os-distinction-card rain-os-distinction-purple">
                        <div class="rain-os-dist-label"><?php esc_html_e( 'AEO asks:', 'fervent-readability-optimizer' ); ?></div>
                        <div class="rain-os-dist-question"><?php esc_html_e( 'Can this understood content be selected as the best answer?', 'fervent-readability-optimizer' ); ?></div>
                        <div class="rain-os-dist-note"><?php esc_html_e( 'Determines selection', 'fervent-readability-optimizer' ); ?></div>
                    </div>
                </div>

                <h4><?php esc_html_e( 'A Layered System', 'fervent-readability-optimizer' ); ?></h4>
                <p class="rain-os-system-intro"><?php esc_html_e( 'These are not competing strategies—they are sequential:', 'fervent-readability-optimizer' ); ?></p>
                <div class="rain-os-layer-flow">
                    <span class="rain-os-layer rain-os-layer-seo"><?php esc_html_e( 'SEO helps AI find your content', 'fervent-readability-optimizer' ); ?></span>
                    <span class="rain-os-layer-arrow">→</span>
                    <span class="rain-os-layer rain-os-layer-air"><?php esc_html_e( 'AI Readability ensures AI understands it', 'fervent-readability-optimizer' ); ?></span>
                    <span class="rain-os-layer-arrow">→</span>
                    <span class="rain-os-layer rain-os-layer-aeo"><?php esc_html_e( 'AEO determines if it becomes the answer', 'fervent-readability-optimizer' ); ?></span>
                </div>

                <div class="rain-os-warning-box">
                    <strong><?php esc_html_e( 'Why This Matters', 'fervent-readability-optimizer' ); ?></strong>
                    <p><?php esc_html_e( 'If you are not being interpreted, you are not being paraphrased. If you are not being paraphrased, you are not being mentioned. If you are not being mentioned, you do not exist in AI-generated answers. AI Readability is not optional—it is the cost of being understood.', 'fervent-readability-optimizer' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
