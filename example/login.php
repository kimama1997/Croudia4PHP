<?php

//ライブラリ読み込み
require_once("../croudia4php.php");

//セッション開始
session_start();

<<<<<<< HEAD
=======
// コンシューマキー
>>>>>>> 7858c30c6a2941e5f6b916ce7a41318c08884523
$ci = "YOUR_CLIENT_KEY";
$cs = "YOUR_CLIENT_SECRET";

$_SESSION["c4p"] = new Croudia4PHP($ci, $cs);
$c4p = $_SESSION["c4p"];

//認証用URLをリンクとして表示する
$url = $c4p -> getAuthorizeURL();

echo "<a href=\"".$url."\">LOGIN</a>";
