<?php
/**
 * Production environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment
 * in this file.
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'airvuco_prod');

/** MySQL database username */
define('DB_USER', 'airvuco_proadm');

/** MySQL database password */
define('DB_PASSWORD', 'URkAUSWkt$GesZOaw~');

/** MySQL hostname */
define('DB_HOST', 'localhost');
define('FORCE_SSL_ADMIN', true);

define('WP_MEMORY_LIMIT', '4096M');

define( 'WP_DEBUG', false );
@ini_set('display_errors',0);
@ini_set('error_reporting',0);

define('AUTH_KEY',         'jsdQb)Ud8S-UNT|kevd8JS>I,T}aZfxk;kS@lWf^UlR|>N.X,q -u9PT;}{z`+WL');
define('SECURE_AUTH_KEY',  'Mq4[{g/I2T4s(.Mz-5-j0583iG@KvGkp`,pl8E/Vd;yQ[NzL);fh+`Hy0T|H8>v|');
define('LOGGED_IN_KEY',    'gYn<FXlq{V9v{kr1j} sjp1CQO4DP.~R*+^J=Cbj+vkrx+?4js:u}{AxI-h/H9~X');
define('NONCE_KEY',        'Q-pu~%.|O+R:-vMk,Av7%#7/>3+V{3=||YVA$+`euSB}0VVS24}+Qb{[TNaFP<H*');
define('AUTH_SALT',        'moThZHnE-j7,8B(WJoMNHpEz=NJY%p~9uA*&hnQqBxAMQ+Os-ylGmFSzOw.l+%?8');
define('SECURE_AUTH_SALT', '<k|ve[VfTbANe-YJqB2jm !n+1#>|V67xo,=u[;7sXO<YfQc=}tAp*H7sBb#cLF8');
define('LOGGED_IN_SALT',   'zU[NKT;m,$([zc_Y.Ly4Ufk(mdo= ZhTbo$~=|aA1I}vvM>3I-nyn!#d+~}/{e<u');
define('NONCE_SALT',       'XpYRz$WjO^U9CX,E)Hu:)7k/uK21mXUEqeS17{>.[^m7EFnbr/7MwJH-}kyPv!$G');
