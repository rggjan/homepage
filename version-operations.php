<select id="verOper">
   <option>v<?php print $currentVersion; ?></option>
<?php
   function getOptions($ver) {
       $res = "<optgroup label='v$ver'>";
       $res .= "<option value='$ver-d'>Download</option>";
       $res .= "<option value='$ver-m'>Manual</option>";
       $res .= "<option value='$ver-r'>Release Notes</option>";
       $res .= "<option value='$ver-s'>Samples</option>";
       $res .= "</optgroup>";
       return $res;
   }
   for ($mj = $major; $mj >= 9; --$mj) {
       for ($mn = $minor; $mn >= 0; --$mn) {
           $minver = str_pad("$mn", 2, "0", STR_PAD_LEFT);
           $ver = "$mj.$minver";
           if ($ver == $currentVersion) continue;
           print getOptions($ver);
       }
   }
   print getOptions("8.91");
?>
</select>
<script type="text/javascript">
$(document).ready(function() {
   $("#verOper").change(function() {
       var v = $("#verOper option:selected").val();
       var ver = v.substr(0, 4);
       var oper = v.substr(5, 1);
       var site = window.location.protocol + "//" + window.location.hostname + "/";
       var link;
       switch (oper) {
       case 'd':
           link = site + "releases/easyloggingpp_v" + ver + ".zip";
           break;
       case 'm':
           link = "https://github.com/easylogging/easyloggingpp/blob/v" + ver + "/README.md";
           break;
       case 'r':
           link = site + "releases/release-notes-v" + ver + ".txt";
           break;
       case 's':
           link = "https://github.com/easylogging/easyloggingpp/blob/v" + ver + "/samples";
           break;
       }
       if (link != undefined) {
           window.location = link;
       }
   });
}); 
</script>
