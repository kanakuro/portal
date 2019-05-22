<?php
// http://ginpro.winofsql.jp/article/419510275.htmlより引用
header( "Content-Type: application/json; Charset=utf-8" );
header( "pragma: no-cache" );
header( "Expires: Wed, 9 Feb 2100 14:59:58 GMT" );
header( "Cache-control: no-cache" );
header( "Access-Control-Allow-Origin: *" );

$work = file_get_contents( "https://newsapi.org/v2/top-headlines?country=jp&apiKey=681d3e89369a40faa04aca3e3a35f822" );
$obj = json_decode( $work );
$work = json_encode( $obj, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );

print $work;
?>