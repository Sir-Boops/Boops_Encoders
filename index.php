<?php

    if($_GET != null){
        
        if(strtolower($_GET["chat"]) == "twitch"){
            
            $chat = '<iframe style="border: hidden; height: 100%; width: 100%;" src="https://www.twitch.tv/' . $_GET["channel"] . '/chat">';

        }
    }   

?>

<html>
    <header>
        <title>Boops Encoders</title>
        <link href="css.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css">
        <link href="//vjs.zencdn.net/5.11/video-js.min.css" rel="stylesheet">
        <script src="//vjs.zencdn.net/5.11/video.min.js"></script>
    </header>
    <body>
        <div id="player_wrapper" class="pure-u-3-4">
            <div id="player">
                <video style="position: absolute; height: 100%; width: 100%;" class="video-js" controls data-setup='{}'>
                    <source src="rtmp://rtmp.boops.me/encode/" type="rtmp/mp4"></source>
                </video>
            </div>
        </div>
        <div id="chat" class="pure-u-1-4">
            <?php echo($chat); ?>
        </div>
    </body>
</html>
