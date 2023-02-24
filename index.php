<!DOCTYPE html>
<html>

<head>
    <link href="/videojs/dist/video-js.min.css" rel="stylesheet">
    <script src="/videojs/dist/video.min.js"></script>
    <link href="/videojs-quality-selector/dist/css/quality-selector.css" rel="stylesheet">
    <script src="/videojs-quality-selector/dist/js/silvermine-videojs-quality-selector.min.js"></script>
</head>

<body>
    <video id="my-video" class="video-js" controls preload="auto" width="1280" height="720">
        <source src="/movie.php?filename=output.m3u8&quality=720p" type="application/x-mpegURL" label="720p">
        <source src="/movie.php?filename=output.m3u8&quality=360p" type="application/x-mpegURL" label="360p">
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that supports HTML5 video
        </p>
    </video>
    <script>
        options = {
            controlBar: {
                children: [
                    'playToggle',
                    'progressControl',
                    'volumePanel',
                    'qualitySelector',
                    'fullscreenToggle',
                ],
            },
        };
        var player = videojs('my-video', options);
        player.controlBar.addChild('QualitySelector');
    </script>
</body>

</html>