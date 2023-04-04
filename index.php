<!DOCTYPE html>
<html>
<?php
// Token can be found on the "Security" tab of the Stream Library in the dashboard
$securityKey = '04f4a8ba-959a-42a7-9d81-be809d6437ef';

// Video ID
$video_id = 'de372363-1acc-4c41-bad9-0c74fe02b0c6';

// Library ID
$library_id = '101995';

// Validate user inputs
if (!$securityKey || !$video_id || !$library_id) {
    trigger_error('One or more required parameters are missing', E_USER_ERROR);
}

// Set the expiry time to one hour from now
$expires = time() + 3600;

// Generate the token
$hashableBase = $securityKey . $video_id . $expires;
$token = hash('SHA256', $hashableBase);

// Set base URL
$URL_BASE = 'https://vz-161c0043-e2f.b-cdn.net';

// Generate the URL
$url = "{$URL_BASE}/{$library_id}/{$video_id}?token={$token}&expires={$expires}";

?>
<head>
    <link href="/videojs/dist/video-js.min.css" rel="stylesheet">
    <script src="/videojs/dist/video.min.js"></script>
    <link href="/videojs-quality-selector/dist/css/quality-selector.css" rel="stylesheet">
    <script src="/videojs-quality-selector/dist/js/silvermine-videojs-quality-selector.min.js"></script>
    <style>
        .vjs-menu li {
            text-transform: initial;
        }
    </style>
</head>

<body>
    <video id="my-video" class="video-js" controls preload="auto" width="1280" height="720">
        <source src="<?=$url?>" type="application/x-mpegURL" label="HD">
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that supports HTML5 video
        </p>
    </video>
    <script>
        options = {
            errorDisplay: false,
            controlBar: {
                children: [
                    'playToggle',
                    'volumePanel',
                    'progressControl',
                    'subtitlesButton',
                    'qualitySelector',
                    'fullscreenToggle'
                ]
            }
        };
        var player = videojs('my-video', options);
    </script>
</body>

</html>