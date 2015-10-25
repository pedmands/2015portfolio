// Masonry settings to organize footer widgets
jQuery(document).ready(function($){
    var $container = $('#footer-widgets');
    var $masonryOn;
    var $columnWidth = 300;
    
    if ($(document).width() > 879) {;
        $masonryOn = true;
        runMasonry();
    };

    $(window).resize( function() {
        if ($(document).width() < 879) {
            if ($masonryOn){
                $container.masonry('destroy');
                $masonryOn = false;
            }

        } else {
            $masonryOn = true;
            runMasonry();
        }
    });
    
    function runMasonry() {
        // initialize
        $container.masonry({
            columnWidth: $columnWidth,
            itemSelector: '.widget',
            isFitWidth: true,
            isAnimated: true
        });
    };
    
});

// // Masonry settings to organize portfolio
// jQuery(document).ready(function($){
//     var $container = $('#websites');
//     var $masonryOn;
//     var $columnWidth = '.portfolio';
    
//     if ($(document).width() > 879) {
//         $masonryOn = true;
//         runPortfolioMasonry();
//     };

//     $(window).resize( function() {
//         if ($(document).width() < 379) {
//             if ($masonryOn){
//                 $container.masonry('destroy');
//                 $masonryOn = false;
//             }

//         } else {
//             $masonryOn = true;
//             runPortfolioMasonry();
//         }
//     });
    
//     function runPortfolioMasonry() {
//         // initialize
//         $container.masonry({
//             columnWidth: $columnWidth,
//             gutter: 20,
//             itemSelector: '.portfolio',
//             isFitWidth: true,
//             isAnimated: true
//         });
//     };
    
// });
// jQuery(document).ready(function($){
//     var $container = $('#print');
//     var $masonryOn;
//     var $columnWidth = '.portfolio';
    
//     if ($(document).width() > 879) {
//         $masonryOn = true;
//         runPortfolioMasonry();
//     };

//     $(window).resize( function() {
//         if ($(document).width() < 379) {
//             if ($masonryOn){
//                 $container.masonry('destroy');
//                 $masonryOn = false;
//             }

//         } else {
//             $masonryOn = true;
//             runPortfolioMasonry();
//         }
//     });
    
//     function runPortfolioMasonry() {
//         // initialize
//         $container.masonry({
//             columnWidth: $columnWidth,
//             gutter: 20,
//             itemSelector: '.portfolio',
//             isFitWidth: true,
//             isAnimated: true
//         });
//     };
    
// });

jQuery(document).ready(function($){
    var $container = $('.tab');
    var $masonryOn;
    var $columnWidth = '.portfolio';
    
    if ($(document).width() > 879) {
        $masonryOn = true;
        runPortfolioMasonry();
    };

    $(window).resize( function() {
        if ($(document).width() < 379) {
            if ($masonryOn){
                $container.masonry('destroy');
                $masonryOn = false;
            }

        } else {
            $masonryOn = true;
            runPortfolioMasonry();
        }
    });
    
    function runPortfolioMasonry() {
        // initialize
        $container.masonry({
            columnWidth: $columnWidth,
            gutter: 20,
            itemSelector: '.portfolio',
            isFitWidth: true,
            isAnimated: true
        });
    };
    
});
