<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta property="og:image" content="http://easylogging.org/images/logo-big.png"/>
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
                include_once "$root/github-info.php";
            ?>
            <br/><br/>
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
Single-header only, Easylogging++ wrapper for QML logging
</p><p>
QML logging that wraps Easylogging++ to write logs for QML side in Qt Quick applications. <u>This is project is under early stages of development</u>
</p>
<table width="100%">
<tr>
<td width="50%">
    <?php
        require_once "$root/tools/syntax_highlighter/cppToHtmlSyntaxHighlighter.php";
        $codeBlock="[cpp_code_no_line]:Simple Example;
    #include \"qmllogging.h\"

    _INITIALIZE_QMLLOGGING

    int main(int argv, const char** argc) {
        QGuiApplication app(argc, argv);
        // ...
        el::qml::QMLLogging::registerNew();
        // ...
        // Now use Log.info(\"\") in QML files
        return app.exec();
    }[/cpp_code]";
        $highlighter = new Highlighter();
        $htmlCppCode=$highlighter->findCppCodeInHtmlBlock($codeBlock);
        print $htmlCppCode; 
    ?>
</td>
<td width="50%">
    <a href='latest.zip' class='big-link'><img src='/images/download.png' />&nbsp;Download QML Logging</a><br/>
    <a href='release-notes-latest.txt?v=<?php print $currentVersion; ?>' class='big-link'><img src='/images/notes.png' />&nbsp;Release Notes</a><br/>
    <a href='https://github.com/easylogging/qmllogging/blob/master/README.md' class='big-link'><img src='/images/help.png' />&nbsp;Manual</a><br/>
    <a href='https://github.com/easylogging/qmllogging' class='big-link'><img src='/images/github.png' />&nbsp;Source @ Github</a><br/>
    <a href='https://github.com/easylogging/qmllogging/tree/master/samples' class='big-link'><img src='/images/sample.png' />&nbsp;Samples</a><br/>
</td>
</tr></table>
<br/>
<center>
    <a href='http://www.pledgie.com/campaigns/22070'><img alt='Click here to lend your support to: Easylogging++ and make a donation at www.pledgie.com !' src='http://www.pledgie.com/campaigns/22070.png?skin_name=chrome' border='0' /></a>
    <br/>
    <br/>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="SEBDTM6BJKWZY">
        <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online.">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
    </form>
</center>
<?php
    include_once "$root/footer.php"
?>
