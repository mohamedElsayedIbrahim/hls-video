<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/browse/tailwindcss@2.2.19/dist/tailwind.css">
    <link href="https://vjs.zencdn.net/8.16.1/video-js.css" rel="stylesheet" />
</head>
<body>
    
<video id="my_video_1" class="vjs-default-skin vjs-big-play-centered" controls preload="auto"  data-setuo='{"fluid:true"}'>
    <source src="{{ asset('storage/10.m3u8') }}" type='application/x-mpegURL'>
</video>

<script src="https://vjs.zencdn.net/8.16.1/video.min.js"></script>
<script src="https://unpkg.com/browse/@videojs/http-streaming@3.10.0/dist/videojs-http-streaming-sync-workers.js"></script>

<script>
    var player = videojs('my_video_1');
</script>
</body>
</html>