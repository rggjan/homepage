<script type="text/javascript">
    twitterShareClick = function() {
        window.open("//twitter.com/home?status=" + encodeURIComponent(document.title) + "&url="
                + encodeURIComponent(location.href), "", "toolbar=0,status=0,width=626,height=436");
        return false;
    }

    googlePlusShareClick = function() {
        window.open("//plus.google.com/share?url=" + encodeURIComponent(location.href), "",
                "menubar=no,toolbar=no,status=no,resizable=yes,scrollbars=yes,width=626,height=600");
        return false;
    }

    facebookShareClick = function() {
        window.open("//www.facebook.com/sharer.php?u=" + encodeURIComponent(location.href + "&fb=1") + "&t="
                + encodeURIComponent(document.title), "sharer", "toolbar=0,status=0,width=626,height=436");
        return false;
    }

    pinterestShareClick = function() {
        window.open("//pinterest.com/pin/create/button/?url=" + encodeURIComponent(location.href) + "&media=&description="
                + encodeURIComponent(document.title), "", "toolbar=0,status=0,width=700,height=500");
        return false;
    }
</script>
<span class="social-media-buttons">
    <a href="//twitter.com/share" onclick="return twitterShareClick();" class="social-media-button twitter-button" target="_blank" title="Share on Twitter">
    </a>
    <a href="//plus.google.com/share" onclick="return googlePlusShareClick();" class="social-media-button google-plus-button" target="_blank" title="Share on Google+">
    </a>
    <a href="//www.facebook.com/share.php" onclick="return facebookShareClick();" class="social-media-button facebook-button" target="_blank" title="Share on Facebook">
    </a>
    <a href="//pinterest.com/pin/create/button" onclick="return pinterestShareClick();" class="social-media-button pinterest-button" target="_blank" title="Share on Pinterest">
    </a>
</span>