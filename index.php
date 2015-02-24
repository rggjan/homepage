<?php
    include_once "layout.php";
?>
<pre><span class="vinfo">Current version <?php print "v$currentVersion ($releaseDate)"; ?> </span></pre>
<p>
Single header only, extremely light-weight high performance logging library for C++11 (or higher) applications.<br/>For lower version of C++ (non-C++11), please consider using <a href='https://github.com/easylogging/easyloggingpp/tree/v8.91' target='_blank'>Easylogging++ v8.91</a>.
</p><p>
The strengths of Easylogging++ are its speed and simplicity. It is extremely light-weight, robust, fast performing, thread and type safe and consists of many built-in features. It fits in small to medium sized projects, it provides ability to write logs in your own customized format and also provide support for logging your classes, third-party libraries, STL and third-party containers etc.
</p>
<p>
You may wish to have a look at <a href='http://easylogging.org/sample.log'>sample log file</a> generated from a project.
</p>
<table width="100%">
<tr>
<td width="50%">
    <?php
        require_once "tools/syntax_highlighter/cppToHtmlSyntaxHighlighter.php";
        $codeBlock="[cpp_code_no_line]:Simple Example;
    #include \"easylogging++.h\"

    INITIALIZE_EASYLOGGINGPP

    int main(int argc, const char** argv) {
        LOG(INFO) << \"Hello, world\";
        return 0;
    }[/cpp_code]";
        $highlighter = new Highlighter();
        $htmlCppCode=$highlighter->findCppCodeInHtmlBlock($codeBlock);
        print $htmlCppCode; 
    ?>
</td>
<td width="50%">
    <a href='https://github.com/easylogging/easyloggingpp/releases/latest' class='big-link'><img src='/images/download.png' />&nbsp;Download Easylogging++</a><br/>
    <a href='/release-notes-latest.txt?v=<?php print $currentVersion; ?>' class='big-link'><img src='/images/notes.png' />&nbsp;Release Notes</a><br/>
    <a href='https://github.com/easylogging/easyloggingpp/blob/master/README.md' class='big-link'><img src='/images/help.png' />&nbsp;Manual</a><br/>
    <a href='https://github.com/easylogging/easyloggingpp' class='big-link'><img src='/images/github.png' />&nbsp;Source @ Github</a><br/>
    <a href='https://github.com/easylogging/easyloggingpp/tree/master/samples' class='big-link'><img src='/images/sample.png' />&nbsp;Samples</a><br/>
</td>
</tr>
<tr>
<td width="100%" colspan="2">
    <hr />
    <div style='text-align:center;'>
        <img src='/images/icons/windows8.png?v=2' alt="Windows 8" title="Windows 8" style='margin-left: 1.5em' />
        <img src='/images/icons/windows7.png?v=2' alt="Windows 7" title="Windows 7" style='margin-left: 1.5em' />
        <img src='/images/icons/windowsxp.png?v=2' alt="Windows XP" title="Windows XP" style='margin-left: 1.5em' />
        <img src='/images/icons/ubuntu.png?v=2' alt="Ubuntu" title="Ubuntu" style='margin-left: 1.5em' />
        <img src='/images/icons/mac-osx.png?v=2' alt="Mac OSX" title="Mac OSX" style='margin-left: 1.5em' />
        <img src='/images/icons/android.png?v=2' alt="Android" title="Android" style='margin-left: 1.5em' />
        <img src='/images/icons/raspberry-pi.png?v=2' alt="RaspberryPi" title="RaspberryPi" style='margin-left: 1.5em' />
        <img src='/images/icons/free-bsd.png?v=2' alt="FreeBSD" title="FreeBSD" style='margin-left: 1.5em' />
        <img src='/images/icons/linux-mint.png?v=2' alt="Linux Mint" title="Linux Mint" style='margin-left: 1.5em' />
        <img src='/images/icons/scientific-linux.png?v=2' alt="Scientific Linux" title="Scientific Linux" style='margin-left: 1.5em' />
        <img src='/images/icons/fedora.png?v=2' alt="Fedora" title="Fedora" style='margin-left: 1.5em' />
        <img src='/images/icons/solaris.png?v=2' alt="Solaris" title="Solaris" style='margin-left: 1.5em' />
    </div>
    <div style='text-align:center;color:#666666;font-size:0.85em;'>
        It's very likely that other platforms, that are not listed above, are also supported.<br/>Please let us know (via github) if you find library to work on other platforms.
    </div>
    <hr />
</td>
</tr></table>
<br/>
<center>
    <br/>
    <a class="donate-link" href="http://muflihun.com/donation" target="_blank"><img src="https://www.paypalobjects.com/en_AU/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="Donate using PayPal" title="Donate using PayPal"></a>
</center>
<?php
    include_once "footer.php"
?>
