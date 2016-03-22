$(function()
{
    // Configure responsive videos
    $('#wysiwyg').fitVids({
        customSelector: "iframe[src*='ustream.tv'], iframe[src*='livestream.com']"
    });

    // Automatically line up menu and content columns
    $(window).on('resize', function()
    {
        if ($(window).width() >= 767)
        {
            $('#content').css(
            {
                'min-height': ($('#menu').outerHeight(true)) + 'px'
            });
        }
        else
        {
            $('#content').css(
            {
                'min-height': 0
            });
        }

    }).trigger('resize');

    // Setup mobile menu
    $('#header-menu .show_menu a').click(function(event)
    {
        // Prevent default browser behavior
        event.preventDefault();

        // Cache menu selector
        var menu = $('#menu');

        // Show/hide menu on click
        if (menu.is(':visible'))
        {
            menu.removeClass('show');
        }
        else
        {
            menu.addClass('show').css(
            {
                height: $('body').height()
            });
        }
    });

});