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
define( 'DB_NAME', 'mltrip' );

/** Username của database */
define( 'DB_USER', 'mltrip' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'M%>nBf^t8%[f/i 8rYQA66&u-ywff`L49!?/`2X.}|A7/r?:zXhO|mi9d9jhy}#x' );
define( 'SECURE_AUTH_KEY',  '#b,r93x5JHL/g(E d(*y_[A|B#V$H(j_K1/$]vY#aS$=g7IF:-*z g*{6#7UG.OP' );
define( 'LOGGED_IN_KEY',    'HU-q %Y} JU4B|1+zwke4m!DZP2[io%BiKTjvq{7K+riEkCC$}!WJ$3X.1S627,%' );
define( 'NONCE_KEY',        '(]3&>t<yysT{,iX#?.8{PqhsdabT,q=P4TT8,u#oUS :|V`6gM^l[f#5Sg jK8-%' );
define( 'AUTH_SALT',        'f^]k{M7t1_d)L=Z^~xYG{}XF4nFvX]T@t=m3!haJG  VS<72$s9HLzp8QvTj]l1+' );
define( 'SECURE_AUTH_SALT', 'Japg*]f|53up51RM 0e0#VI[|[PaG]{x+Tn)U;xz{g`Pc-4&:ol@^66Rj)]f4C#!' );
define( 'LOGGED_IN_SALT',   ':Gg1Pem&%3U~Iz_,f?D%$4U-^h`rD~.#tW0}[A3nR%7?M*poxXXuJR8haw][C%j}' );
define( 'NONCE_SALT',       '$jho]je/-1*{9fTp=0&XG,0mZ|%*|;og<^N+3#)VXJ7zy>&0HFqYu6RK[a8.t0De' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'ml_';

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
