<script type="text/javascript">
    shareOnTwitter = function() {
        window.open("//twitter.com/home?status=" + encodeURIComponent(document.title) + "&url="
                + encodeURIComponent(location.href), "", "toolbar=0,status=0,width=626,height=436");
        return false;
    }

    shareOnGooglePlus = function() {
        window.open("//plus.google.com/share?url=" + encodeURIComponent(location.href), "",
                "menubar=no,toolbar=no,status=no,resizable=yes,scrollbars=yes,width=626,height=600");
        return false;
    }

    shareOnFacebook = function() {
        window.open("//www.facebook.com/sharer.php?u=" + encodeURIComponent(location.href + "?fb=1") + "&t="
                + encodeURIComponent(document.title), "sharer", "toolbar=0,status=0,width=626,height=436");
        return false;
    }

    shareOnPinterest = function() {
        window.open("//pinterest.com/pin/create/button/?url=" + encodeURIComponent(location.href) + "&media=&description="
                + encodeURIComponent(document.title), "", "toolbar=0,status=0,width=700,height=500");
        return false;
    }
</script>
<span class="social-media-buttons">
    <span>
        <a href="//www.facebook.com/share.php" onclick="return shareOnFacebook();" class="social-media-button facebook-button" target="_blank" title="Share on Facebook"></a>
    </span>
    <span>
        <a href="//plus.google.com/share" onclick="return shareOnGooglePlus();" class="social-media-button google-plus-button" target="_blank" title="Share on Google+"></a>
    </span>
    <span>
        <a href="//twitter.com/share" onclick="return shareOnTwitter();" class="social-media-button twitter-button" target="_blank" title="Share on Twitter"></a>
    </span>
    <span>
        <a href="//pinterest.com/pin/create/button" onclick="return shareOnPinterest();" class="social-media-button pinterest-button" target="_blank" title="Share on Pinterest"></a>
    </span>
</span>
