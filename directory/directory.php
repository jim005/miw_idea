<html>
<body>


<?php


$peoples =  json_decode(file_get_contents('collectExtraInfos/peoplesWithExtratData.json'));

foreach ($peoples as $people) {

    // Students Current
    // HTML table

     ?>

    <div class="student">
        <img class="avatar" src="" alt="" />
        <p class="bio"></p>
        <div class="name"></div>
        <div class="company"></div>
        <ul>
            <li><a href="">Github</a></li>
            <li><a href="">LinkedIn</a></li>
            <li><a href="">Site Web</a></li>
            </ul>
    </div>





<?php


    //  Teachers
    // HTML table


    // Alumni
    // HTML table //




}

?>

</body>
</html>