<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


if ( is_user_logged_in() ) {
	require WP_PLUGIN_DIR . '/lifts-examination/protokol/print/index.php';
} else {
	echo '<h2>You have to log in...</h2>';
}
