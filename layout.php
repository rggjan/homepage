<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta property="og:image" content="http://easylogging.org/images/logo-big.png"/>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
        <meta name="description" content="Single header only, extremely light-weight high performance logging library for C++ applications">
        <meta name="keywords" content="fast c++ logging,easy c++ logging,qt logging,c++ logging">
        <title>Easylogging++ - Single header only, cross-platform logging library for C++ applications</title>
        <script type="text/javascript" src="/script/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="/style/layout.css" />
    </head>
    <body>
    <?php
        include_once "version.php";
        include_once "tools/syntax_highlighter/cppToHtmlSyntaxHighlighter.php";
        include_once "analyticstracking.php";
    ?>
    <div class="contents">
        <span>
            <a href="/"><img src = "/images/banner.png" class="banner" /></a>
        </span>
        <span style="float:right">
            <?php
                include_once "social-media.php";
                include_once "github-info.php";
                include_once "version-operations.php";
            ?>
            <br/><br/>
            <a href="https://travis-ci.org/easylogging/easyloggingpp"><img class="travis-build" src="https://travis-ci.org/easylogging/easyloggingpp.png?branch=develop" /></a>
            <br/><br/>
			<?php
				$loggedInUserName = null;
				if (!isset($_SESSION)){
					$mufglobsess = session_name("mufglobsess");
					session_set_cookie_params(3600, '/', '.muflihun.com');
				    session_start();
				}
				if (isset($_SESSION["login_name"])) {
					$loggedInUserName = $_SESSION["login_name"];
				}
				if ($loggedInUserName != null) {
            		echo '<span style="float:right">Assalaamu `alaykum, ' . $loggedInUserName . ' [<a href="http://muflihun.com/signout?redr=http%3A%2F%2Feasylogging.muflihun.com">sign out</a>]</span><br/>';
				}
			?>
            <span style="float:right">Looking for <a href="/qml">QML Logging</a>?</span>
        </span>
<script type="text/javascript">
$(document).ready(function() {
    updateStargazers(1, stargazers, "easyloggingpp");
}); 
</script>
