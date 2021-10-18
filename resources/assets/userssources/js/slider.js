

var sliderline = document.querySelector('.homepage__sliderline');
var imgs = sliderline.children;

console.log(imgs);

// var wScr = window.screen.width;
// var offset = 0;
//
// setInterval(function ()  {
//     offset = offset + wScr;
//
//     if (offset >= (5 * wScr)) {
//         offset = 0;
//     }
//
//     sliderline.style.left = -offset + 'px';
//
// }, 5000 );


var opacityImg = 0;

    setInterval(function () {

        for (var i = 0; i < imgs.length; i++) {

            setInterval(function () {
                opacityImg += 10;
                while(opacityImg < 100) {
                    imgs[i].style.opacity = opacityImg + '%';
                }
            }, 100);
        }
    }, 1000);




