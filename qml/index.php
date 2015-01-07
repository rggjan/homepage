<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta property="og:image" content="http://easylogging.org/images/logo-big.png"/>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
        <meta name="description" content="Single-header only, Easylogging++ wrapper for QML logging.">
        <meta name="keywords" content="qml, qml logging, qt logging, qt quick, qt quick logging, quick logging, c++ logging">
        <title>QMLLogging - Single-header only, Easylogging++ wrapper for QML logging</title>
        <script type="text/javascript" src="/script/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="/style/layout.css" />
    </head>
    <body>
    <?php
        $root = $_SERVER['DOCUMENT_ROOT'];
        include_once "version.php"; 
        include_once "$root/tools/syntax_highlighter/cppToHtmlSyntaxHighlighter.php";
        include_once "$root/analyticstracking.php";
    ?>
    <div class="contents">
        <span>
            <a href="/"><img src = "/images/banner.png" class="banner" /></a>
        </span>
        <span style="float:right">
            <?php
                include_once "$root/social-media.php";
                include_once "$root/github-info.php";
            ?>
        </span>
<script type="text/javascript">
$(document).ready(function() {
    updateStargazers(1, stargazers, "qmllogging");
}); 
</script>
<br/>
<b><span style="font-size:2em">QMLLogging</span></b>
<pre><span class="vinfo">Current version <?php print "v$currentVersion ($releaseDate)"; ?> </span></pre>
<p>
    Single-header only, Easylogging++ wrapper for advanced logging support for QML applications
</p>
<p>
    Provides functionalities to write logs and provides various other functionalities for your QML applications. You should check out Easylogging++ to see more exciting things you can do.
</p>
<table width="100%">
<tr>
<td width="50%">
    <?php
        require_once "$root/tools/syntax_highlighter/cppToHtmlSyntaxHighlighter.php";
        $codeBlock="[cpp_code_no_line]:Simple Example;
#include \"qmllogging.h\"
_INITIALIZE_QMLLOGGING

int main(int argc, char* argv[]) {
    QGuiApplication app(argc, argv);
    _START_EASYLOGGINGPP(argc, argv);

    // Pass engine's root context to registerNew
    el::qml::QmlLogging::registerNew(engine.rootContext());

    return app.exec();
 }
    [/cpp_code]";
        $highlighter = new Highlighter();
        $htmlCppCode=$highlighter->findCppCodeInHtmlBlock($codeBlock);
        print $htmlCppCode; 
    ?>
</td>
<td width="50%">
    <a href='https://github.com/easylogging/qmllogging/releases/latest' class='big-link'><img src='/images/download.png' />&nbsp;Download QML Logging</a><br/>
    <a href='https://github.com/easylogging/easyloggingpp/releases/download/v9.78/easyloggingpp_v9.78.zip' class='big-link'><img src='/images/download.png' />&nbsp;Download Supported Easylogging++</a><br/>
    <a href='release-notes-latest.txt?v=<?php print $currentVersion; ?>' class='big-link'><img src='/images/notes.png' />&nbsp;Release Notes</a><br/>
    <a href='https://github.com/easylogging/qmllogging/blob/master/README.md' class='big-link'><img src='/images/help.png' />&nbsp;Manual</a><br/>
    <a href='https://github.com/easylogging/qmllogging' class='big-link'><img src='/images/github.png' />&nbsp;Source @ Github</a><br/>
    <a href='https://github.com/easylogging/qmllogging/tree/master/samples' class='big-link'><img src='/images/sample.png' />&nbsp;Samples</a><br/>
</td>
</tr></table>
<hr/>
<center>

    <br/>
    <a class="donate-link" href="http://muflihun.com/donation" target="_blank"><img src="https://www.paypalobjects.com/en_AU/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="Donate using PayPal" title="Donate using PayPal"></a>
</center>
<?php
    include_once "$root/footer.php"
?>
