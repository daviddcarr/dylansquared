$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

import Instafeed from 'instafeed.js';

var feed = new Instafeed({
    get: 'tagged',
    tagName: 'dylansquared2020',
    limit: 12,
    resolution: 'low_resolution',
    sortBy: 'random',
    clientId: 'f7f7488dab734676a35b6a1fc1b29071',
    accessToken: '8101246636.f7f7488.27c30f13c2914241a99fb8881d38203b',
    template: '<div class="col-4 col-md-2 px-0"><div class="p-2"><a href="{{link}}" class="d-block" target="_blank"><img src="{{image}}" class="image-fluid w-100" /></a></div></div>'
});
feed.run();
// var feed = new Instafeed({
//     get: 'tagged',
//     tagName: 'blender',
//     limit: 12,
//     clientId: 'a933d892b1f740329fd33d991fca5c32',
//     accessToken: '1485817808.a933d89.f57b0afd1bef46a989d9b5fe3844bbd4',
//     template: '<div class="col-4 col-md-2 px-0"><div class="p-2"><a href="{{link}}" class="d-block" target="_blank"><img src="{{image}}" class="image-fluid w-100" /></a></div></div>'
// });
// feed.run();


// https://www.instagram.com/oauth/authorize/?client_id=f7f7488dab734676a35b6a1fc1b29071&redirect_uri=http://localhost:3000/&response_type=code&scope=basic+public_content
