<html>
<body>


<?php
// GET basecamp/peoples.json
$peoples = file_get_content('basecamp/peoples.php';

// Add ExtraInfo on this json : avatar, bio, tags, links, emails, etc.
include "collectExtraInfos.inc";
$peoples = addExtraInfo($peoples, "GitHub", "LinkedIn", "Gravatar");

// Cache data for 1 hours in flat file
// $peoples ==> peoplesWithExtratData.json

// Loop for display

foreach ($peoples as $key => $people)  {

    // Students Current
    // HTML table


    //  Teachers
    // HTML table


    // Alumni
    // HTML table

}


?>

</body>
</html>