/**
 *  * Created by PhpStorm.
 * User: Philipp Dippel Inf | DMS - M
 * For Project: X-tended Editor
 * Date: 04.10.17
 * Copyright: Philipp Dippel
 */

jQuery(document).ready(() => {

    let timer;

    jQuery(document).mouseup(function (event) {
        setTimeout(() => {
            if (jQuery('.cs-text-editor-switcher').length > 0)
            {
                jQuery('.cs-preview-frame-container iframe').css('height', '70vh');

                let iframe = jQuery('.mce-container iframe').contents().find("head");
                let mycss  = '<style type="text/css"> body { background-color: #444; color: white;}  a {color: lightblue;}   </style>';

                console.info(iframe);
                iframe.append(mycss);

                jQuery('.cs-preview-frame-container iframe').contents().find('[data-cs-observeable!=""]').on('click', () => {
                    jQuery('.cs-preview-frame-container iframe').css('height', '100vh');
                });

                jQuery('.cs-text-editor-switcher').off('mouseover');

                jQuery('.cs-text-editor-switcher').mouseover(() => {
                    fadeTextSwitch();
                });

            }
            else
            {
                jQuery('.cs-preview-frame-container iframe').css('height', '100vh');
            }
        }, 100);

    });

    jQuery(document).on('hover', '.cs-text-editor', () => {
        fadeTextSwitch();
    });

    function fadeTextSwitch()
    {
        jQuery('.cs-text-editor-switcher').fadeTo(500, 1);

        clearTimeout(timer);
        timer = setTimeout(() => {
            jQuery('.cs-text-editor-switcher').fadeTo("slow", 0);
        }, 3000);
    }

});
