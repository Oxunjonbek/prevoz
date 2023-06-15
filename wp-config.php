<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'wordpressintegrasiyon' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6m])KW[~3df(8;*w6`!R#!@^;_(wcg_SxZkEeSiZP1UZ/1ZKij&J K2[D%7wp_RX' );
define( 'SECURE_AUTH_KEY',  'y#@)&Hx#T3~^woTd>jMEf NOw{Vp] F9H[GX(^Fp7@i3Ypfy)~xpi.b}l1_G@<_6' );
define( 'LOGGED_IN_KEY',    'n`[z`o3SbtzuGzzWmP2fU:0d5783kEXxjF2cONM&VPh,IzLvR6e[<6DSDE{|{_gP' );
define( 'NONCE_KEY',        'e3|[E5.`*.vFFZrPFyZS4or8_mfTNbb!DJ$M-J!2mR!+Jp!UQ( cgzgPMAA$~=f1' );
define( 'AUTH_SALT',        'EAhfwD((L>,CFr3g{t;O;K__/gK>DTt~yeLwN{i/r3 <Gl~Tu(t4&@fL=%LlukEn' );
define( 'SECURE_AUTH_SALT', 'v2)2XT:q cFH}fJcV)(Kt_psw8e-&DA&cKGyE(5ccG!`x20zGPEN=@P5e(+u!:c3' );
define( 'LOGGED_IN_SALT',   '[&g}@fdz4}&A>He]>5_Ya vd*x~b%~{ei7bl*?}am}myM7V2X01OjG QR!!U8}Uj' );
define( 'NONCE_SALT',       'f&.iS+GRqY|z[CE|:2%Ac%GeYwsID[2zJ|!5m~|A}WeW&<Pay)y|;(]>OfHjz60+' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';