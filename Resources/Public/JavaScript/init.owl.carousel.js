/**
 * Created by kapale on 16.04.16.
 */

$(document).ready(function(){
    owlGlobalConfigs.forEach(function(owlGlobalConfig) {
        $( owlGlobalConfig.ident + " .owl-carousel").owlCarousel(owlGlobalConfig.config);
    });
});