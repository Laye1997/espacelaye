<?Php

if (!defined('APP_NAME'))                       define('APP_NAME', 'Espace laye');
if (!defined('APP_ORGANIZATION'))               define('APP_ORGANIZATION', 'Dit1');
if (!defined('APP_OWNER'))                      define('APP_OWNER', 'Layelaye');
if (!defined('APP_DESCRIPTION'))                define('APP_DESCRIPTION', 'Laye DIT');

if (!defined('ALLOWED_INACTIVITY_TIME'))        define('ALLOWED_INACTIVITY_TIME', time()+1*60);

if (!defined('DB_DATABASE'))                    define('DB_DATABASE', 'mydb');
if (!defined('DB_HOST'))                        define('DB_HOST','127.0.0.1');
if (!defined('DB_USERNAME'))                    define('DB_USERNAME','root');
if (!defined('DB_PASSWORD'))                    define('DB_PASSWORD' ,'');
if (!defined('DB_PORT'))                        define('DB_PORT' ,'');

$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}
