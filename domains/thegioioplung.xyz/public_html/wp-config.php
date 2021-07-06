<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/thegioio/domains/thegioioplung.xyz/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define('WP_HOME','https://thegioioplung.xyz');
define('WP_SITEURL','https://thegioioplung.xyz');
// END iThemes Security - Do not modify or remove this line
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'thegioio_thegioioplung' );
/** Username của database */
define( 'DB_USER', 'thegioio_thegioioplung' );
/** Mật khẩu của database */
define( 'DB_PASSWORD', 'thegioioplung123$$' );
/** Hostname của database */
define( 'DB_HOST', 'localhost' );
/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );
/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');
/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rFoY4m2}lZM&CYom@vr3[~=}d&.$E.O:8+l-Uxhk&?gHLXeMn{PNm^[ZVzAY1cK=' );
define( 'SECURE_AUTH_KEY',  '1BNzQ}wU|v,#7Asn4.i)]0#mo4*n`6zE-T/~y?mRO$@F*sHf{pzTszA6BNY^jcMv' );
define( 'LOGGED_IN_KEY',    '?*zOpHuym~PZ*}dgkF1 Bt%(0(_fD@<IElO$K*7w*tRu^Y )cw=-E]0P#5  4f,[' );
define( 'NONCE_KEY',        '#8r%Nu5h*Tq5=}7n;J*]n&,Uw=8k_fCc vxz-L%DX2@8cM}yV<q$)5vt5M}`PEjK' );
define( 'AUTH_SALT',        'w9t=KeS8,#<iQ1VZ<*@jp+RTjm]cm:bF7Bfysr)MfCr_;9Mtn9A-?cY595IC)C&@' );
define( 'SECURE_AUTH_SALT', '<1j%(RKTCV{`kTKkCMff?Hu[/ft+?.o3+CCj(r!h1@YoC$e9H+;q5(nl:J%[Tt31' );
define( 'LOGGED_IN_SALT',   'g-l>rTQmj&JuA=8;rUVDn%{]2v7xx Md5Tqh#;Vh}H8dxVYPp E|D<!0hB#gd&L6' );
define( 'NONCE_SALT',       's0:bg2L .REi9]kC>im_H?h@kLgCjCA 1MwvK>.i3bgWM5$R]j2hYdSMG5mB>R2<' );
/**#@-*/
/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';
/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';