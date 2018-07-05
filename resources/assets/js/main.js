$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

import Instafeed from 'instafeed.js';

var feed = new Instafeed({
    get: 'tagged',
    tagName: 'blender',
    limit: 12,
    clientId: 'a933d892b1f740329fd33d991fca5c32',
    accessToken: '1485817808.a933d89.f57b0afd1bef46a989d9b5fe3844bbd4',
    template: '<div class="col-4 col-md-2 px-0"><div class="p-2"><a href="{{link}}" class="d-block" target="_blank"><img src="{{image}}" class="image-fluid w-100" /></a></div></div>'
});
feed.run();
