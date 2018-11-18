<?php

define('DB_NAME', 'hello_db');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_COLLATE', '');

define('AUTH_KEY',         'w$Kb~~R?6{J<KLUbjWaq`)D}LyofGB6_S3T.C[=/I-;ZzKTrH0V5bFUz4m`Vg<$q');
define('SECURE_AUTH_KEY',  'L]jF_|g2Z Q8*Kg,%i[D_Vq!=xEr_Is80Pn]sVPor= Q/EydfTE5d#DKRUE<Cj^(');
define('LOGGED_IN_KEY',    'u(3.W0(~+qx]{7nTb&<~k]!8(92<nyW_.DKH!zrHMJ0-Q`%88~7w&%DG$+g}dEN.');
define('NONCE_KEY',        ':_BwKmgf{PsUOMEB{+G<ie3vrNyte|DsxWGh/fCu&7Rf@urE+cmjWi+jvb?u[iJ[');
define('AUTH_SALT',        'V`Y.|oY}`dhnxzsm.}SP+:tx)x=>W9q yVt:[sk[zmgqO!457cM?%,)ph@N%/>0.');
define('SECURE_AUTH_SALT', '~lj;P:VSWK,fsZ1X`akOu$$7gfHn2m#N>GD.hZpsNOo^~ 3}r`$zqzZ4oQ02yJi.');
define('LOGGED_IN_SALT',   'h9-G_XGba]rzT0gy^4FgHrVgSM0<(YW8?]lG$-:62ORhcmZlR51U2~>m4Q}0&.gs');
define('NONCE_SALT',       '`_m5aG#Pymp,Gf/_G!|Be2=>{>BR75S&Mk!/F}f@TOit *>#(w;Ff.(9v 5%c;iN');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
