$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$(".slug-source").keyup(function(){
    var slug = $(this).val().replace(/\s+/g, '-').toLowerCase();
    $(".slug-output").val(slug);
});

import Instafeed from 'instafeed.js';

var homeFeed = new Instafeed({
    target: 'homeFeed',
    get: 'tagged',
    tagName: 'dylansquared2020',
    limit: 12,
    resolution: 'low_resolution',
    sortBy: 'random',
    clientId: 'f7f7488dab734676a35b6a1fc1b29071',
    accessToken: '8101246636.f7f7488.27c30f13c2914241a99fb8881d38203b',
    template: '<div class="col-4 col-md-2 px-0"><div class="p-2"><a href="{{link}}" class="d-block" target="_blank"><img src="{{image}}" class="image-fluid w-100" /></a></div></div>'
});

homeFeed.run();
