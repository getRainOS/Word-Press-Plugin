<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Fervent_Readability_Ajax {
    public function __construct() {
        add_action( 'wp_ajax_fervent_ro_search_history', array( $this, 'search_history' ) );
    }

    public function search_history() {
        global $wpdb;

        if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['nonce'] ) ), 'fervent_ro_ajax_nonce' ) ) {
            wp_send_json_error( array( 'message' => 'Invalid security token.' ), 403 );
        }

        $query = isset( $_POST['query'] ) ? sanitize_text_field( wp_unslash( $_POST['query'] ) ) : '';
        $table_name = $wpdb->prefix . 'fervent_ro_analysis_history';
        $escaped_table = esc_sql( $table_name );

        $results = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT h.*, p.post_title, p.post_name, p.post_author 
                 FROM {$escaped_table} h 
                 LEFT JOIN {$wpdb->posts} p ON h.post_id = p.ID 
                 WHERE p.post_title LIKE %s OR p.post_name LIKE %s 
                 GROUP BY h.post_id 
                 ORDER BY h.analyzed_at DESC 
                 LIMIT 10",
                '%' . $wpdb->esc_like( $query ) . '%',
                '%' . $wpdb->esc_like( $query ) . '%'
            ),
            ARRAY_A
        );

        wp_send_json_success( $results );
    }
}
