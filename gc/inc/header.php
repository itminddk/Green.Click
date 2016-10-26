<!doctype html>
<?php
include_once('inc/config.php');
include_once('inc/function.php');
$hashCode = "";

## simpel tjeck for hashcode
    if(isset($_GET["id"]))
        $hashCode = $_GET["id"];
    else
        $hashCode = FALSE;
?>
<html>
<head>
    <title>Payment</title>
    <meta charset="utf-8">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-11429366-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body id="payment-page">
<div id="payment-topbar">
    <a href="/"><img src="graphics/logo.svg" alt=""></a>
</div>
