jQuery(document).ready(function($) {

var $pArr = $('.coursebox.panel');
	var pArrLen = $pArr.length;
	var pPerDiv = 3;
	for (var i = 0;i < pArrLen;i+=pPerDiv){
		$pArr.filter(':eq('+i+'),:lt('+(i+pPerDiv)+'):gt('+i+')').wrapAll('<div class="row-fluid clearfix" />');
}

//hide animate on small devices
if ($(window).width() > 660) {
 if ($(".animated")[0]) {
            $('.animated').css('opacity', '0');
        }

        $('.triggerAnimation').waypoint(function() {
            var animation = $(this).attr('data-animate');
            $(this).css('opacity', '');
            $(this).addClass("animated " + animation);

        },
                {
                    offset: '75%',
                    triggerOnce: true
                }
        );
} else {
$('.animated').removeClass('animated');
}

$('.sitetopic h2, h2.main, #site-news-forum h2, #frontpage-course-list h2, #frontpage-category-names h2, #frontpage-category-combo h2').wrap( "<div class='headingwrap clearfix'></div>" );

$( ".breadcrumb li" ).last().addClass('lastb');

//$( "#page-site-index" ).addClass('zoomin');
$( ".moodlezoom" ).click(function() {
if ( $("body").hasClass("zoomin") ) {
$('body').removeClass('zoomin');
M.util.set_user_preference('theme_marble_zoom', 'nozoom');
} else {
$('body').addClass('zoomin');
M.util.set_user_preference('theme_marble_zoom', 'zoomin');
}
return false;

});


});





var onZoom = function() {
  var zoomin = Y.one('body').hasClass('zoomin');
  if (zoomin) {
    Y.one('body').removeClass('zoomin');
   // M.util.set_user_preference('theme_bcu_zoom', 'nozoom');
  } else {
    Y.one('body').addClass('zoomin');
   // M.util.set_user_preference('theme_bcu_zoom', 'zoomin');
  }
};

//When the button with class .moodlezoom is clicked fire the onZoom function
M.theme_marble = M.theme_marble || {};
M.theme_marble.zoom =  {
  init: function() {
    Y.one('body').delegate('click', onZoom, '.moodlezoom');
  }
};