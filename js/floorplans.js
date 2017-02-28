jQuery(window).load(function() {

    jQuery(".view-btn").click(function() {

        if(jQuery(this).hasClass('view')) {

            jQuery(".fp-models-wrapper").slideToggle("slow");
            jQuery(".view-btn").text("hide floor plans");
        } else {

            jQuery(".fp-models-wrapper").slideToggle("slow");
        }

    });

    // var accordion_expand = function() {
    //     var parent = jQuery(this).parent();

    //     if(jQuery(this).hasClass('view')) {
    //         jQuery(parent).closest('.fp-models-wrapper').css('display', 'none');
    //         jQuery(this).removeClass('view');
    //         jQuery(".view-btn").text('view floor plans');
    //     } else {
    //         jQueryclosest('.fp-models-wrapper').css('display', 'block');
    //         jQuery(this).addClass('view');
    //         jQuery(this).text('view floor plans');
    //     }
    // };

    // jQuery('.view-btn').on('click', accordion_expand);
});





// var accordion_expand = function() {
//     var parent = jQuery(this).parent();

//     if(jQuery(this).hasClass('view')) {
//         jQuery(parent).children().not('.fp-models-wrapper').css('display', 'none');
//         jQuery(this).removeClass('view');
//         jQuery(".view-btn").text('floor plans');
//     } else {
//         jQuery(parent).children().css('display', 'block');
//         jQuery(this).addClass('view');
//         jQuery(this).text('view floor plans');
//     }
// };

// jQuery('.view-btn').on('click', accordion_expand);


// jQuery('#custom-archive-widget span.select, #custom-category-widget > span.select').on('click', function() {
//     if(jQuery(this).hasClass('active')) {
//         jQuery(this).removeClass('active');
//         jQuery(this).next().css('display', 'none');
//     } else {
//         jQuery(this).addClass('active');
//         jQuery(this).next().css('display', 'block');
//     }
// });



// // hasClass, takes two params: element and classname
// function hasClass(el, cls) {
//   return el.className && new RegExp("(\\s|^)" + cls + "(\\s|$)").test(el.className);
// }


// /* use like below */
// // Check if an element has class "foo"
// if (hasClass(element, "foo")) {

//   // Show an alert message if it does
//   alert("Element has the class!");
// }






