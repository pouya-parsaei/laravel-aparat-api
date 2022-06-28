<?php

return [
    'categoryVideosUrl' => 'https://www.aparat.com/etc/api/categoryVideos/cat/7/perpage/10',
    'loginUrl' => 'https://www.aparat.com/etc/api/login/luser/{user}/lpass/{password}',
    'formUploadUrl' => 'https://www.aparat.com/etc/api/uploadform/luser/{user}/ltoken/{token}',
    'deleteVideoUrl' => 'https://www.aparat.com/etc/api/deletevideolink/videohash/{uid}/luser/{user}/ltoken/{token}',
    'showVideoUrl' => 'https://www.aparat.com/etc/api/video/videohash/{uid}',

    'username' => env('APARAT_USERNAME',''),
    'password' => env('APARAT_PASSWORD','')

];
