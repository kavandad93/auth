<?php
declare(strict_types=1);

$config = require dirname(__DIR__) . '/config/config.php';

header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= htmlspecialchars($config['app']['name'], ENT_QUOTES, 'UTF-8') ?></title>
</head>
<body>
  <main>
    <h1>ورود با کاداد</h1>
    <p>مرکز احراز هویت کاداد</p>
  </main>
</body>
</html>
