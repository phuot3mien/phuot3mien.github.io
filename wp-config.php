<?php
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
define( 'DB_NAME', 'p3m.vn' );

/** Username của database */
define( 'DB_USER', 'p3m.vn' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '1' );

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
define( 'AUTH_KEY',         '@4>rAR=GXh[x$/VAxb3CsDj%7&<!A #l,Ijru)?:E85Wbut0F&{@&j:4wQ,w>Tzw' );
define( 'SECURE_AUTH_KEY',  '@NQ}GXpIu@ )Wk1~`Lb?Cv&N+ZolwAsCpR F?&]hQGtBJ2#9n4PcG{(Yh_M,^3 z' );
define( 'LOGGED_IN_KEY',    'rd})qLra2}{f,-WsVxh|a7#+p0L~UfWdBpz5J1l`v1o gO]!l5KPPGHR/cX.2GY`' );
define( 'NONCE_KEY',        '=!#pI{FnYUf]nR4K80}qq.@n]2#b1muXItc_pUv$J-V#bCQMn6c-25/4I#[7:TB(' );
define( 'AUTH_SALT',        '-a2+e]I*yk #-#UQ2*p/m6:hez>36tmGmidjhNQ7*NDE&a,Ax<J3@d`M:QG7J{^#' );
define( 'SECURE_AUTH_SALT', 'J%MBE)<i:-vcOa$vYbjxWNd:CP6tpbaarVqT$=g{2!:|p<%$${hxL38hckPmtq1+' );
define( 'LOGGED_IN_SALT',   'Ys?Utl_]#/;y/HD,)T!VVVx5nw3!+AB{]#)<rDV!G$g$$iX$CM/8|;!OGl[|gUWP' );
define( 'NONCE_SALT',       '%i?eOV}_;[}ragDo3uQ>*KEZP2r*Z.t._i*m*)F+Z_vr5m;%WdZT0tBm7PA{@+5b' );

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
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
