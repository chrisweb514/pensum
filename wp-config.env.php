<?php
/**
 * Setup environments
 *
 * Set environment based on the current server hostname, this is stored
 * in the $hostname variable
 *
 *
 * @package    Collective WordPress Multi-Environment Config
 * @version    1.0
 * @author     Collective Ltd  <info@collective.design>
 */

switch ($hostname) {
    case 'airvu.local.collective.design':
        define('WP_ENV', 'development');
        break;

    case 'airvu.staging.collective.design':
        define('WP_ENV', 'staging');
        break;

    case 'airvu.co':
    default:
        define('WP_ENV', 'production');
}
