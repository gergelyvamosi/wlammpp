<?php
/**
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define('DB_NAME', 'wordpress2019');

/** MySQL felhasználónév */
define('DB_USER', 'wordpress2019');

/** MySQL jelszó. */
define('DB_PASSWORD', 'Word2019Press');

/** MySQL  kiszolgáló neve */
define('DB_HOST', 'localhost');

/** Az adatbázis karakter kódolása */
define('DB_CHARSET', 'utf8');

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'P.ir vXVdY(-Hw`^ci|rZnM}@qcpvz9BNas)Ir+CbclCn;F;lI^|{zx|5[3w*zl7');
define('SECURE_AUTH_KEY', 'XQ<)Ps|n cxZhGMa>jXG60<9t*9fT3kkZo[jvC]G~IRC(qT{@Ysp|L,LLS9|4qA+');
define('LOGGED_IN_KEY', '?~tP(p-NPIe>@!tBaC0IeA7-.TYs|Zok$G: GM&QSiX7qTTNk98t*r_PNL(Nx{N-');
define('NONCE_KEY', 'l{g+$eW|EX%I2rD[1e`Z [S$)wXK;-M}YH*lF$K}-6!3*?Cp5}-xs5LMa/DkQbiO');
define('AUTH_SALT',        ']c(J|Gj8+A5C0/QkQ}B[_^91!!xqjE4Hu9E|,MpxJDvGbS}$gQ9).Y1z^Y+Qp}!;');
define('SECURE_AUTH_SALT', 't8. r]D`?f!Ldjpw*aEkF!Tf$~NuOvr<]8Ali,mYxl.mRM%iCK}Um^,!+bI40TUI');
define('LOGGED_IN_SALT',   'TM.)?l^:jdf+K:?I|zLV rY2+ubPmcz-~0X|qbc4mguofSU^4!<!b^3T6xF1S%d$');
define('NONCE_SALT',       'DVf4M!n&eln[d1wTE99HQQ8-Rm$7!wxnYcS8P{+h8A.8=r-L;*HphAP~$xC $1I`');

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során.
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
