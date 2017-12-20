(function ($) {
    $.fn.slideShow = function (options) {

//           Supplying default options

        options = $.extend({
            timeOut: 3000,
            showNavigation: true,
            pauseOnHover: true,
            swipeNavigation: true
        }, options);


//        Variables
        var intervals = [],
            slideshowImgs = [],
            originalSrc,
            img,
            cont,
            width,
            height,

//        Creates an object with all the elements with a 'data-slideshow' attribute

            container = this.filter(function () {
                return $(this).data('slideshow');
            });

//        Cycle through all the elements from the container object
//        Later on we'll use the "i" variable to distinguish the separate slideshows from one another

        for (var i = 0; i < container.length; i++) {

            cont = $(container[i]);

            width = container.eq(i).outerWidth(true);
            height = container.eq(i).outerHeight(true);

//            For every separate slideshow, create a helper <div>, each with its own ID.
//            In those we'll store the images for our slides.

            var helpdiv = $('<div id="slideshow-container-' + i + '" class="slideshow" >');

            helpdiv.height(height);
            helpdiv.width(width);

//            If this option is enabled, call a function that appends buttons

            if (options.showNavigation) {
                createNavigation();
            }

//            Append the original image to the helper <div>

            originalSrc = cont.attr('src');
            img = $('<div class="slide" style="background-image: url(' + originalSrc + ')">');
            img.appendTo(helpdiv);

//            Append the images from the data-slideshow attribute

            slideshowImgs[i] = cont.attr('data-slideshow').split("|");

            for (var j = 0; j < slideshowImgs[i].length; j++) {

                img = $('<div class="slide"  ' +  'index='+ j + ' style="background-image: url(' + slideshowImgs[i][j] + ')">');
                img.appendTo(helpdiv);

            }

//            Replace the original element with the helper <div>

            cont.replaceWith(helpdiv);

//            Activate the slideshow

            automaticSlide(i)

        }


        // Functions

//          Slideshow auto switch

        function automaticSlide(index) {

            // Hide all the images except the first one
            $('#slideshow-container-' + index + ' .slide:gt(0)').hide();

            // Every few seconds fade out the first image, fade in the next one,
            // then take the first and append it to the container again, where it becomes last

            intervals[index] = setInterval(function () {
                    $('#slideshow-container-' + index + ' .slide:first').fadeOut("slow")
                        .next('.slide').fadeIn("slow")
                        .end().appendTo('#slideshow-container-' + index + '');
                },
                options.timeOut);
        }


//           Pause on hover and resume on mouse leave

        if (options.pauseOnHover) {
            (function hoverPause() {
                $('.slideshow').on({
                    'mouseenter.hover': function () {
                        clearInterval(intervals[($(this).attr('id').split('-')[2])])
                    },
                    'mouseleave.hover': function () {
                        automaticSlide($(this).attr('id').split('-')[2])
                    }
                });
            })()
        }


//          We use this to prevent the slideshow from resuming once we've stopped it

        function hoverStop(id) {
            $('#' + id + '').off('mouseenter.hover mouseleave.hover');
        }


//          Create the navigation buttons

        function createNavigation() {

//            The buttons themselves
            var leftArrow = $('<div class="leftBtn slideBtn hide1">');
            var rightArrow = $('<div class="rightBtn slideBtn hide1">');
//            Arrows for the buttons
            var nextPointer = $('<span class="pointer next"></span>');
            var prevPointer = $('<span class="pointer previous"></span>');

            prevPointer.appendTo(leftArrow);
            nextPointer.appendTo(rightArrow);

            leftArrow.appendTo(helpdiv);
            rightArrow.appendTo(helpdiv);
        }

//          Slideshow manual switch

        if (options.showNavigation) {

//            This shows the navigation when the mouse enters the slideshow
//            and hides it again when it leaves it

            $('.slideshow').on({
                'mouseenter': function () {
                    $(this).find('.leftBtn, .rightBtn').removeClass('hide1')
                },
                'mouseleave': function () {
                    $(this).find('.leftBtn, .rightBtn').addClass('hide1')
                }
            });

//            Upon click, stop the automatic slideshow and change the slide

            $('.leftBtn').on('click', function () {

                // Clear the corresponding interval to stop the slideshow
                // (intervals is an array, so we give it the number of the slideshow container)

                clearInterval(intervals[($(this).parent().attr('id').split('-')[2])]);

                // Make the last slide visible and set it as first in the slideshow container

                $(this).parent().find('.slide:last').fadeIn("slow")
                    .insertBefore($(this).parent().find('.slide:first').fadeOut("slow"));

                hoverStop($(this).parent().attr('id'));
            });

            $('.rightBtn').on('click', function () {

                // Clear the corresponding interval to stop the slideshow
                clearInterval(intervals[($(this).parent().attr('id').split('-')[2])]);

                // Fade out the current image and append it to the parent, making it last
                // Fade in the next one

                $(this).parent().find('.slide:first').fadeOut("slow")
                    .next('.slide').fadeIn("slow")
                    .end().appendTo($(this).parent());

                hoverStop($(this).parent().attr('id'));
            });
        }

//              Change slide on swipe

        // Same as the 'on click' functions, but we use hammer.js this time

        if (options.swipeNavigation) {
            $('.slideshow').hammer().on({
                "swiperight": function () {
                    clearInterval(intervals[($(this).attr('id').split('-')[2])]);

                    $(this).find('.slide:last').fadeIn("slow")
                        .insertBefore($(this).find('.slide:first').fadeOut("slow"))

                },
                "swipeleft": function () {
                    clearInterval(intervals[($(this).attr('id').split('-')[2])]);

                    $(this).find('.slide:first').fadeOut("slow")
                        .next('.slide').fadeIn("slow")
                        .end().appendTo($(this));
                }
            })
        }

    }
}(jQuery)
    )
;
/*input value 文字提示*/
function inputTipText(){    
$("input[class*=grayTips]") //所有样式名中含有grayTips的input   
.each(function(){   
   var oldVal=$(this).val();   //默认的提示性文本   
   $(this)   
   .css({"color":"#fff"})  //灰色   
   .focus(function(){   
    if($(this).val()!=oldVal){$(this).css({"color":"#fff"})}else{$(this).val("").css({"color":"#fff"})}   
   })   
   .blur(function(){   
    if($(this).val()==""){$(this).val(oldVal).css({"color":"#fff"})}   
   })   
   .keydown(function(){$(this).css({"color":"#fff"})})   
     
})   
}   
  
$(function(){   
inputTipText();  //直接调用就OK了   
})   



//图片滚动列表
var Speed = 30;//速度(毫秒)
var Space = 10;//每次移动(px)
var PageWidth = 699;//翻页宽度
var fill = 0;//整体移位
var MoveLock = false;
var MoveTimeObj;
var Comp = 0;
var AutoPlayObj = null;
GetObj("List2").innerHTML = GetObj("List1").innerHTML;
GetObj('ISL_Cont').scrollLeft = fill;
GetObj("ISL_Cont").onmouseover = function(){
	clearInterval(AutoPlayObj);
}
GetObj("ISL_Cont").onmouseout = function(){
	AutoPlay();
}

AutoPlay();

function GetObj(objName){
	if(document.getElementById){
		return eval('document.getElementById("'+objName+'")')
	}else{
		return eval('document.all.'+objName)
	}
}

function AutoPlay(){ //自动滚动
	clearInterval(AutoPlayObj);
	AutoPlayObj = setInterval('ISL_GoDown();ISL_StopDown();',10000);//间隔时间
}

function ISL_GoUp(){ //上翻开始
	if(MoveLock) return;
	clearInterval(AutoPlayObj);
	MoveLock = true;
	MoveTimeObj = setInterval('ISL_ScrUp();',Speed);
}

function ISL_StopUp(){ //上翻停止
	clearInterval(MoveTimeObj);
	if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0){
		Comp = fill - (GetObj('ISL_Cont').scrollLeft % PageWidth);
		CompScr();
	}else{
		MoveLock = false;
	}
	AutoPlay();
}

function ISL_ScrUp(){ //上翻动作
	if(GetObj('ISL_Cont').scrollLeft <= 0){
		GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft + GetObj('List1').offsetWidth
	}
		GetObj('ISL_Cont').scrollLeft -= Space ;
}

function ISL_GoDown(){ //下翻
	clearInterval(MoveTimeObj);
	if(MoveLock) return;
	clearInterval(AutoPlayObj);
	MoveLock = true;
	ISL_ScrDown();
	MoveTimeObj = setInterval('ISL_ScrDown()',Speed);
}
function ISL_StopDown(){ //下翻停止
	clearInterval(MoveTimeObj);
	if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0 ){
		Comp = PageWidth - GetObj('ISL_Cont').scrollLeft % PageWidth + fill;
		CompScr();
	}else{
		MoveLock = false;
	}
	AutoPlay();
}

function ISL_ScrDown(){ //下翻动作
	if(GetObj('ISL_Cont').scrollLeft >= GetObj('List1').scrollWidth){
		GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft - GetObj('List1').scrollWidth;
	}
	GetObj('ISL_Cont').scrollLeft += Space ;
}

function CompScr(){
	var num;
	if(Comp == 0){
		MoveLock = false;return;
	}
	if(Comp < 0){ //上翻
		if(Comp < -Space){
			Comp += Space;
			num = Space;
		}else{
			num = -Comp;
			Comp = 0;
		}
		GetObj('ISL_Cont').scrollLeft -= num;
		setTimeout('CompScr()',Speed);
	}else{ //下翻
		if(Comp > Space){
			Comp -= Space;
			num = Space;
		}else{
			num = Comp;
			Comp = 0;
		}
		GetObj('ISL_Cont').scrollLeft += num;
		setTimeout('CompScr()',Speed);
	}
}