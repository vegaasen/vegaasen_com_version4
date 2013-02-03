jQuery(document).ready(function() {
    jQuery("nav ul.grouped a").click( function(event) {
        jQuery.scrollTo(
            jQuery(this).attr("href"),
            {
                duration: 900,
                offset:{'left':0, 'top':-0.22*jQuery(window).height()}
            }
        );
        jQuery("nav ul.grouped a").each(function(){jQuery(this).removeClass('active')});
        jQuery(this).addClass('active');
    });
    jQuery("#slides").slides({
        container: 'container',
        play: 5000,
        pause: 2500,
        next: 'next',
        prev: 'prev',
        hoverPause: true,
        animationStart: function(current){
            jQuery('.slider .caption').animate({
                bottom:-35
            },100);
        },
        animationComplete: function(current){
            jQuery('.slider .caption').animate({
                bottom:0
            },200);
        },
        slidesLoaded: function() {
            jQuery('.slider .caption').animate({
                bottom:0
            },200);
        }
    });
    jQuery("body > .section").waypoint(function(direction) {
        var active_section;
        active_section = jQuery(this).prev();
        var active_link = jQuery('nav ul.grouped a[href="#' + active_section.attr("id") + '"]');
        jQuery("nav ul.grouped a").removeClass("active");
        active_link.addClass("active");
    }, {
        offset: '1300px' /*Stupid scroller..*/
    });
});