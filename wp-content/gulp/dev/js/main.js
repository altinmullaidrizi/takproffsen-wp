jQuery(document).ready(function () {

    //init AOS effects
    AOS.init({
        delay: 50,
        duration: 800,
    });

    jQuery(".nav-link").on('click', function (){
        var _this = $(this);
        var id = _this.attr('id');
        jQuery('#pills-tabContent .tab-pane').removeClass('show').removeClass('active');
        console.log(id);
        jQuery("div[aria-labelledby="+ id +"]").addClass('show').addClass('active');
    });


    jQuery('.hamburger').on('click', function () {
        jQuery(this).toggleClass('is-active');
    });

    //Module Add On First Window
    var allModules = jQuery('.module');
    allModules.each(function (i, elm) {
        if (jQuery(elm).visible(true)) {
            jQuery(elm).addClass('module-ready');
        }
    });

    //Module Add Scroll
    var allModules = jQuery('.module');
    jQuery(document).on('scroll', function () {
        var scroll = jQuery(document).scrollTop();
        allModules.each(function (i, elm) {
            if (jQuery(elm).visible(true)) {
                jQuery(elm).addClass('module-ready');
            }
        })

        // console.log(scroll);
    });

    var swiper = new Swiper('.swiper-container', {
        centeredSlides: true,

        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    
    $(window).on( "load", function() {
       setTimeout(function (){
           $('.loader').addClass('loaded');
       }, 3000);
    });
});


jQuery('.tab-click').on('click', function () {
    var _this = jQuery(this);
    jQuery('.tab-click').removeClass('active');
    _this.addClass('active');
    var index = _this.attr('data-index');

    jQuery('.bkg-image').removeClass('active');
    jQuery('.bkg-image[data-index="' + index + '"]').addClass('active');
});


jQuery(document).ready(function () {
    var lg = document.getElementById('lightgallery');

    lightGallery(lg, {
        hideBarsDelay: 0,
        autoplayFirstVideo: true,
        selector: 'a',
        download: false,
        autoplayVideoOnSlide: true,
        nextHtml: '<span class="lg-nav lg-nav-next"></span>',
        prevHtml: '<span class="lg-nav lg-nav-prev"></span>',
    });
});

new BeerSlider(document.getElementById('slider'));
new BeerSlider(document.getElementById('slider2'));


// **************** //
//   color picker  //
// *************** //


var svgname = ('Siding-shape');


var sec = document.getElementsByClassName("section");
for (var i = 0; i < sec.length; i++) {
    sec[i].onclick = changeSection;
}


function changeSection(e) {
    var secname = e.target.getAttribute("data-text");
    svgname = secname;
}


function overlay() {
    return document.getElementById(svgname)
};
var el = document.getElementsByClassName("color");
for (var i = 0; i < el.length; i++) {
    el[i].onclick = changeColor;
}


function changeColor(e) {
    // get the hex color
    var hex = e.target.getAttribute("data-hex");
    // set the hex color
    overlay().style.fill = hex;
    // var color = e.target.getAttribute('data-name')
    // var div = document.getElementById('wallSelected').innerHTML = 'Väggfärg: ' + color;
    // var colortwo = e.target.getAttribute('data-name')
    // var divOne = document.getElementById('roofSelected').innerHTML = 'Takfärg: ' + colortwo;
}

var header = document.getElementById("pills-tab");
var btns = header.getElementsByClassName("section");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active", "");
        }

        this.className += " active";
    });
}
var activeclass = document.querySelectorAll('.color-one');
for (var i = 0; i < activeclass.length; i++) {
    activeclass[i].addEventListener('click', activateClass);
}

function activateClass(e) {
    for (var i = 0; i < activeclass.length; i++) {
        activeclass[i].classList.remove('active');
    }
    e.target.classList.add('active');
}


var activeclasse = document.querySelectorAll('.color-two');
for (var i = 0; i < activeclasse.length; i++) {
    activeclasse[i].addEventListener('click', activateClasse);
}

function activateClasse(e) {
    for (var i = 0; i < activeclasse.length; i++) {
        activeclasse[i].classList.remove('active-class');
    }
    e.target.classList.add('active-class');
}


var roofColor = document.getElementById('roofColor');
var roofFormInput = jQuery('#roofColorInput');
var btn1 = document.getElementById('btn1');
var btn2 = document.getElementById('btn2');
var btn3 = document.getElementById('btn3');
var btn4 = document.getElementById('btn4');
var btn5 = document.getElementById('btn5');
var btn6 = document.getElementById('btn6');
var btn7 = document.getElementById('btn7');
var btn8 = document.getElementById('btn8');
var btn9 = document.getElementById('btn9');
var btn10 = document.getElementById('btn10');
var btn11 = document.getElementById('btn11');
var btn12 = document.getElementById('btn12');

var wallColor = document.getElementById('wallColor');
var wallFormInput = jQuery('#wallColorInput');
var btn13 = document.getElementById('btn13');
var btn14 = document.getElementById('btn14');
var btn15 = document.getElementById('btn15');
var btn16 = document.getElementById('btn16');
var btn17 = document.getElementById('btn17');
var btn18 = document.getElementById('btn18');
var btn19 = document.getElementById('btn19');
var btn20 = document.getElementById('btn20');
// var btn21 = document.getElementById('btn21');
var btn22 = document.getElementById('btn22');
var btn23 = document.getElementById('btn23');
var btn24 = document.getElementById('btn24');


btn1.addEventListener('click', function () {
    roofColor.style.backgroundColor = "#ffffff";
    roofColor.innerHTML = '<p>Takfärg: Vit</p>';
    roofFormInput.val("Vit");
});

btn2.addEventListener('click', function () {
    roofColor.style.backgroundColor = "#493228";
    roofColor.innerHTML = '<p>Takfärg: Mörkbrun</p>';
    roofFormInput.val("Mörkbrun");
});

btn3.addEventListener('click', function () {
    roofColor.style.backgroundColor = "#774515";
    roofColor.innerHTML = '<p>Takfärg: Rödbrun</p>';
    roofFormInput.val("Rödbrun");
});

btn4.addEventListener('click', function () {
    roofColor.style.backgroundColor = "#AA6829";
    roofColor.innerHTML = '<p>Takfärg: Tegelröd</p>';
    roofFormInput.val("Tegelröd");

});

btn5.addEventListener('click', function () {
    roofColor.style.backgroundColor = "#E5E0D9";
    roofColor.innerHTML = '<p>Takfärg: Ljusgrå</p>';
    roofFormInput.val("Ljusgrå");

});

btn6.addEventListener('click', function () {
    roofColor.style.backgroundColor = "#706F73";
    roofColor.innerHTML = '<p>Takfärg: Skifergå</p>';
    roofFormInput.val("Skifergå");

});
btn7.addEventListener('click', function () {
    roofColor.style.backgroundColor = "#242729";
    roofColor.innerHTML = '<p>Takfärg: Antracit</p>';
    roofFormInput.val("Antracit");

});
btn8.addEventListener('click', function () {
    roofColor.style.backgroundColor = "#522F2D";
    roofColor.innerHTML = '<p>Takfärg: Bordeaux</p>';
    roofFormInput.val("Bordeaux");

});
btn9.addEventListener('click', function () {
    roofColor.style.backgroundColor = "#7C2917";
    roofColor.innerHTML = '<p>Takfärg: Oxydröd</p>';
    roofFormInput.val("Oxydröd");

});
btn10.addEventListener('click', function () {
    roofColor.style.backgroundColor = "#1C473B";
    roofColor.innerHTML = '<p>Takfärg: Grön</p>';
    roofFormInput.val("Grön");

});
btn11.addEventListener('click', function () {
    roofColor.style.backgroundColor = "#0E205C";
    roofColor.innerHTML = '<p>Takfärg: Blå</p>';
    roofFormInput.val("Blå");

});
btn12.addEventListener('click', function () {
    roofColor.style.backgroundColor = "#000000";
    roofColor.innerHTML = '<p>Takfärg: Svart</p>';
    roofFormInput.val("Svart");

});
btn13.addEventListener('click', function () {
    wallColor.style.backgroundColor = "#ffffff";
    wallColor.innerHTML = '<p>Väggfärg: Vit</p>';
    wallFormInput.val("Vit");
});

btn14.addEventListener('click', function () {
    wallColor.style.backgroundColor = "#493228";
    wallColor.innerHTML = '<p>Väggfärg: Mörkbrun</p>';
    wallFormInput.val("Mörkbrun");
});

btn15.addEventListener('click', function () {
    wallColor.style.backgroundColor = "#774515";
    wallColor.innerHTML = '<p>Väggfärg: Rödbrun</p>';
    wallFormInput.val("Rödbrun");
});

btn16.addEventListener('click', function () {
    wallColor.style.backgroundColor = "#AA6829";
    wallColor.innerHTML = '<p>Väggfärg: Tegelröd</p>';
    wallFormInput.val("Tegelröd");

});

btn17.addEventListener('click', function () {
    wallColor.style.backgroundColor = "#E5E0D9";
    wallColor.innerHTML = '<p>Väggfärg: Ljusgrå</p>';
    wallFormInput.val("Ljusgrå");

});

btn18.addEventListener('click', function () {
    wallColor.style.backgroundColor = "#706F73";
    wallColor.innerHTML = '<p>Väggfärg: Skifergå</p>';
    wallFormInput.val("Skifergå");

});
btn19.addEventListener('click', function () {
    wallColor.style.backgroundColor = "#242729";
    wallColor.innerHTML = '<p>Väggfärg: Antracit</p>';
    wallFormInput.val("Antracit");

});
btn20.addEventListener('click', function () {
    wallColor.style.backgroundColor = "#522F2D";
    wallColor.innerHTML = '<p>Väggfärg: Bordeaux</p>';
    wallFormInput.val("Bordeaux");

});
// btn21.addEventListener('click', function () {
//     wallColor.style.backgroundColor = "#7C2917";
//     wallColor.innerHTML = '<p>Väggfärg: Oxydröd</p>';
//     wallFormInput.val("Oxydröd");

// });
btn22.addEventListener('click', function () {
    wallColor.style.backgroundColor = "#1C473B";
    wallColor.innerHTML = '<p>Väggfärg: Grön</p>';
    wallFormInput.val("Grön");

});
btn23.addEventListener('click', function () {
    wallColor.style.backgroundColor = "#0E205C";
    wallColor.innerHTML = '<p>Väggfärg: Blå</p>';
    wallFormInput.val("Blå");

});
btn24.addEventListener('click', function () {
    wallColor.style.backgroundColor = "#000000";
    wallColor.innerHTML = '<p>Väggfärg: Svart</p>';
    wallFormInput.val("Svart");

});

$(function () {
    $('[data-toggle="popover"]').tooltip()
});

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
})
//color picker end