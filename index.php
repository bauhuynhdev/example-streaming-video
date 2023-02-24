<!DOCTYPE html>
<html>

<head>
    <link href="//vjs.zencdn.net/7.15.4/video-js.min.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/7.15.4/video.min.js"></script>
</head>

<body>
    <video id="my-video" class="video-js" controls preload="auto" width="1280" height="720">
        <source src="/movie.php?filename=output.m3u8" type="application/x-mpegURL">
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that supports HTML5 video
        </p>
    </video>
    <script>
        var player = videojs('my-video');
    </script>
</body>

</html>