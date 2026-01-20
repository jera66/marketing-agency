<?php
/**
 * Index Template
 *
 * This file is the ultimate fallback template for the MarketingAgency theme.
 * WordPress will use this file when no more specific template is available.
 *
 * @package MarketingAgency
 */

defined( 'ABSPATH' ) || exit;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <main>
    <h1>MarketingAgency Theme is Active</h1>
    <p>If you can see this message, WordPress is successfully rendering your custom theme.</p>
  </main>

  <?php wp_footer(); ?>
</body>
</html>
