<span id="githubStars" style="cursor:default; font-weight: bold">
</span>
&nbsp;
<span style="position:absolute; background: #F8F8F8" id="githubStarsUser">
</span>
<style>
.github_user:hover {
    background-color:lightgreen;
}
.github_avatar {
    vertical-align: middle;
}
</style>
<script type="text/javascript">
var stargazers = new Array();

refreshStargazersSpan = function() {
    $("#githubStars").html("<img src='/images/star.png' style='vertical-align: text-bottom;' />&nbsp;" + stargazers.length + " Stars");
    $("#githubStarsUser").hide();

    var users = ""; 
    users += "<table style='border: 1px darkgreen solid; text-shadow: 0 1px 0 #fff;'><tr>";
    $.each(stargazers, function(i, v) {
        var oneIdx = i + 1;
        users += "<td class='github_user' style='";
        if (oneIdx % 4 != 0) {
            users += "border-right: 1px darkgreen dashed;";
        }
        users += "'>&nbsp;<a href='" + v.html_url + "'><img src='" + v.avatar_url + "' width='28' height='28' class='github_avatar' />&nbsp;" + v.login + "</a>&nbsp;</td>";
       if (oneIdx % 4 == 0) users += "</tr><tr>";
    });
    users += "</tr></table>";
    
    $("#githubStarsUser").html(users);

    var divHiding;
    $("#githubStars, #githubStarsUser").mouseenter(function() {
        clearTimeout(divHiding);
        $("#githubStarsUser").show();
    });

    $("#githubStars, #githubStarsUser").mouseleave(function() {
        divHiding = setTimeout(function() {
            $("#githubStarsUser").hide();
        }, 1000);
    });

    $("#githubStars").click(function() {
        window.location.href = 'https://github.com/easylogging/easyloggingpp/stargazers';
    });
}

updateStargazers = function(page, target, repo) {
    if (page == undefined || page == null) page = 1;
    if (repo == undefined || repo == null) repo = 'easyloggingpp';
    var apiUrl = 'https://api.github.com/repos/easylogging/' + repo + '/stargazers?page=' + page
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
            updateStargazers(page + 1, target, repo);
        }
    });
};
</script>
