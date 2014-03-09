<?php
include('config.php');
if($_POST['code'] && $_POST['url']) {$root = str_replace("index.php", "", realpath(__FILE__)); if($_POST['code']==$code){$res = copy($_POST['url'],$root.'file.zip'); if($res) $success = 1 ; else $error = 'Download Filed!'; } else $error = 'Password is wrong!';}
echo '
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title>Easy PHP Downloader</title>
<style>
body{font:12px Tahoma, Geneva, sans-serif}
.b-center{width:500px;background:#eee;border-radius:10px;border:1px solid #ddd;margin:50px auto;padding:20px}
input[type=text]{width:200px;border:1px solid #ddd;padding:5px 10px}
table{margin:32px auto}
input[type=submit]{font-family:tahoma;border:1px solid #ccc;border-radius:5px;background:#ddd;color:#333;cursor:pointer;padding:10px 15px}
.error{text-align:center;background:#FCD1AA;color:red;border-radius:5px;border:1px solid #FFBDBD;padding:5px 11px}
.success{text-align:center;background:#BAFCAA;color:#009b44;border-radius:5px;border:1px solid #95FF7B;padding:5px 11px}
.img{display:none}
</style>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
$(document).ready(function(){$("#sub").click(function(){var e=$("#url").val();var t=$("#code").val();if(e!=""&&t!=""){$("#sub").hide();$(".img").show()}})})
</script>
</head>
<body dir="rtl">
<article class="content"><section class="b-center"><center><h1>Easy PHP Downloader</h1></center>'; if(isset($success)){echo '<div class="success">Your File Downloaded and save as file.zip</div>';} if(isset($error)){echo '<div class="error">'.$error.'</div>';}
echo '<form method="post"><table width="400" border="0" cellpadding="5"><tr><th scope="row">File Url</th><td><input id="url" type="text" name="url" required></td></tr><tr><th scope="row">Password</th><td><input id="code" type="text" name="code" required></td></tr><tr> <th scope="row">&nbsp;</th><td><input id="sub" type="submit" value="Download"><img class="img" src="loading.gif"></td> </tr></table></form></section>
</article>
</body>
</html>
';
?>
