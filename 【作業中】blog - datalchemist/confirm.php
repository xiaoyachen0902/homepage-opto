<?php

$message = “名前：” . $_POST[“name”] . “\n本文：” . $_POST[“content”];

if (!mb_send_mail(“kaku131021@gmail.com”, $_POST[“title”], $message, “From:
” . $_POST[“mail”])) {
exit(“error”);
}

?>
<html>
<head>
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
<title>sample</title>
</head>
<body>
<p>メールが送信されました。</p>
</body>
</html>