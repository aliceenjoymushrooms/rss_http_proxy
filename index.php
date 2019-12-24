<?php
$url = $_GET['url'];
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
  <title>RSS HTTP PROXY</title>
  <link>' . $url. '</link>
  <description>Free web building tutorials</description>
  <item>
    <title>Response</title>
    <link>' . $url. '</link>
    <description><![CDATA[' . file_get_contents($url) . ']]></description>
  </item>
</channel>
</rss>';