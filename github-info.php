<span id="githubStars" style="cursor:default; font-weight: bold">
</span>
&nbsp;
<span style="position:absolute; background: #F8F8F8" id="githubStarsUser">
</span>
<script type="text/javascript">
var stargazers = new Array();

refreshStargazersSpan = function() {
    $("#githubStars").html("<img src='/images/star.png' style='vertical-align: text-bottom;' />&nbsp;" + stargazers.length + " Stars");
    $("#githubStarsUser").hide();

    var users = ""; 
    users += "<table style='border: 1px darkgreen solid; text-shadow: 0 1px 0 #fff;'><tr>";
    $.each(stargazers, function(i, v) {
        users += "<td>" + v.login + "</td>";
        if (i != 0 && i % 2 == 0) users += "</tr><tr>";
    });
    users += "</tr></table>";
    $("#githubStarsUser").html(users);

    $("#githubStars").mouseenter(function() {
        $("#githubStarsUser").show();
    });

    $("#githubStars").mouseleave(function() {
        $("#githubStarsUser").hide();
    });

    $("#githubStars").click(function() {
        window.location.href = 'https://github.com/easylogging/easyloggingpp/stargazers';
    });
}

updateStargazers = function(page, target) {
    if (page == undefined || page == null) page = 1;
    var apiUrl = 'https://api.github.com/repos/easylogging/easyloggingpp/stargazers?page=' + page
    var total = 0;
    
    $.ajax({
        url : apiUrl
    }).done(function(data) {
        $.each(data, function(i, v) {
            target.push(v);
        });
        if (data.length == 0) {
            refreshStargazersSpan();
        } else {
            updateStargazers(page + 1, target);
        }
    });
};

$(document).ready(function() {
    updateStargazers(1, stargazers);
}); 
</script>
