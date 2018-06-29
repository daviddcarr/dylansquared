<?php
    // IG Feed : https://github.com/pgrimaud/instagram-user-feed
    $cache = new Instagram\Storage\CacheManager('../storage/cache/');
    $api = new Instagram\Api($cache);
    $api->setUserName('gayweddings');
    $feed = $api->getFeed();
    $posts = $feed->medias;
?>

<div class="row p-2">
    @foreach (array_slice($posts, 0, 12) as $post)
        <div class="col-4 col-md-2 px-0">
            <div class="p-2">
                <a href="{{ $post->link }}" class="d-block" target="_blank">
                    <img src="{{ $post->thumbnailSrc }}" class="image-fluid w-100" />
                </a>
            </div>
        </div>
    @endforeach
</div>
