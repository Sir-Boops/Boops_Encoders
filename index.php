<?php



?>

<html>
    <header>
        <title>Boops Encoders</title>
        <link href="css.css" rel="stylesheet">
        <link href="//vjs.zencdn.net/5.11/video-js.min.css" rel="stylesheet">
        <script src="//vjs.zencdn.net/5.11/video.min.js"></script>
    </header>
    <body>
        <div id="player">
            <video style="position: absolute; height: 100%; width: 100%;" class="video-js" controls data-setup='{}'>
                <source src="rtmp://rtmp.boops.me/encode/" type="rtmp/mp4"></source>
            </video>
        </div>
    </body>
</html>