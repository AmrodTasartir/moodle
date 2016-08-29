<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

// Get the HTML for the settings bits.
//$html = theme_allyou_get_html_for_settings($OUTPUT, $PAGE);

$left = (!right_to_left());  // To know if to add 'pull-right' and 'desktop-first-column' classes in the layout for LTR.

$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$haslogo = (!empty($PAGE->theme->settings->logo));

$hasmarketcallout = (!empty($PAGE->theme->settings->marketcallout));

$hasmarket1 = (!empty($PAGE->theme->settings->market1));
$hasmarket2 = (!empty($PAGE->theme->settings->market2));
$hasmarket3 = (!empty($PAGE->theme->settings->market3));
$hasmarket4 = (!empty($PAGE->theme->settings->market4));


$hasp1 = (!empty($PAGE->theme->settings->p1));
$hasp2 = (!empty($PAGE->theme->settings->p2));
$hasp3 = (!empty($PAGE->theme->settings->p3));
$hasp4 = (!empty($PAGE->theme->settings->p4));
$hasp5 = (!empty($PAGE->theme->settings->p5));

$haspcap1 = (!empty($PAGE->theme->settings->p1cap));
$haspcap2 = (!empty($PAGE->theme->settings->p2cap));
$haspcap3 = (!empty($PAGE->theme->settings->p3cap));
$haspcap4 = (!empty($PAGE->theme->settings->p4cap));

$hasscap1 = (!empty($PAGE->theme->settings->s1cap));
$hasscap2 = (!empty($PAGE->theme->settings->s2cap));
$hasscap3 = (!empty($PAGE->theme->settings->s3cap));
$hasscap4 = (!empty($PAGE->theme->settings->s4cap));


$enableshow = (!empty($PAGE->theme->settings->enableshow));
$enablemarket = (!empty($PAGE->theme->settings->enablemarket));
$enableclient = (!empty($PAGE->theme->settings->enableclient));


//headeralignment
if (empty($PAGE->theme->settings->headeralign)) {
	$headeralign = "0";
} else {
$headeralign = $PAGE->theme->settings->headeralign;
}

if ($headeralign == 1) {
	$headerclass = "lalign";
} else {
	$headerclass = " ";
}

if (empty($PAGE->theme->settings->p1)) {
	$slideback1 = "http://placehold.it/1920x1080";
} else {
	$slideback1 = $PAGE->theme->settings->p1;
}

if (empty($PAGE->theme->settings->p2)) {
	$slideback2 = "http://placehold.it/1920x1080";
} else {
	$slideback2 = $PAGE->theme->settings->p2;
}

if (empty($PAGE->theme->settings->p3)) {
	$slideback3 = "http://placehold.it/1920x1080";
} else {
	$slideback3 = $PAGE->theme->settings->p3;
}

if (empty($PAGE->theme->settings->p4)) {
	$slideback4 = "http://placehold.it/1920x1080";
} else {
	$slideback4 = $PAGE->theme->settings->p4;
}

function Truncate($string, $length, $stopanywhere=false) {
    //truncates a string to a certain char length, stopping on a word if not specified otherwise.
    $string = strip_tags($string);
    if (strlen($string) > $length) {
        //limit hit!
        $string = substr($string,0,($length -3));
        if ($stopanywhere) {
            //stop anywhere
            $string .= '...';
        } else{
            //stop on a word.
            $string = substr($string,0,strrpos($string,' ')).'...';
        }
    }
    return $string;
}

//set hide blocks user pref
theme_marble_initialise_zoom($PAGE);
$setzoom = theme_marble_get_zoom();

if ($setzoom == "") {
	$setzoom = "zoomin";
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
 <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300,100,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes("$setzoom "); ?>>
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page" class="container-fluid">


<div id="page-header-wrapper" class="">
    <header id="page-header" class="clearfix <?php echo "$headerclass"; ?> lalign">
    	<a href="<?php p($CFG->wwwroot) ?>">
    	<?php if ($haslogo) {
                        echo "<img src='".$PAGE->theme->settings->logo."' alt='logo' id='logo' />";
                    } else { ?>
			<img src="<?php echo $OUTPUT->pix_url('logo', 'theme')?>" id="logo">
			<?php } ?>
		</a>
         
         
<div id="navwrap">         
	<div class="navbar">
    	<nav role="navigation" class="navbar-inner">
       	 <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
           
             	<ul class="nav pull-right">
                <li class="hbl"><a href="#" class="moodlezoom" title="<?php echo get_string('hideblocks', 'theme_marble'); ?>"><i class="fa fa-indent"></i></a></li>
                 <li class="sbl"><a href="#" class="moodlezoom" title="<?php echo get_string('showblocks', 'theme_marble'); ?>"><i class="fa fa-outdent"></i></a></li>
			 	</ul>
           
            	<div class="pull-left">
                <?php echo $OUTPUT->custom_menu(); ?>
                </div>
                
            </div>
        	</div>
    	</nav>
	</div>
</div>
                  
         <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>            
        
    </header>
</div>    



<?php if ($enableshow == 1) { ?>

<div id="slider" class="slider1">
			<!--
			#################################
				- THEMEPUNCH BANNER -
			#################################
			-->
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>	<!-- SLIDE  -->
						<li data-transition="3dcurtain-horizontal" data-slotamount="7" data-masterspeed="500" >
							<!-- MAIN IMAGE -->
							<img src="<?php echo $slideback1; ?>"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS  -->
							
							<?php if ($haspcap1) { echo $PAGE->theme->settings->p1cap; } ?>
							
						</li>
						<!-- SLIDE  -->
						<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
							<!-- MAIN IMAGE -->
							<img src="<?php echo $slideback2; ?>"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->
							<!-- LAYER NR. 1 -->
							<?php if ($haspcap2) { echo $PAGE->theme->settings->p2cap; } ?>
						</li>
						<!-- SLIDE  -->
						<li data-transition="curtain-1" data-slotamount="7" data-masterspeed="600" >
							<!-- MAIN IMAGE -->
							<img src="<?php echo $slideback3; ?>" style='background-color:#b2c4cc' alt=""  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->
							<?php if ($haspcap3) { echo $PAGE->theme->settings->p3cap; } ?>
					    </li>
						
						<!-- SLIDE  -->
						<li data-transition="flyin" data-slotamount="7" data-masterspeed="800" >
							<!-- MAIN IMAGE -->
							<img src="<?php echo $slideback4; ?>" style='background-color:#b2c4cc' alt=""  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->
							<?php if ($haspcap4) { echo $PAGE->theme->settings->p4cap; } ?>
							
						</li>
					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</div>
			<div class="banner-thumbs">
				<div class="container triggerAnimation animated" data-animate="slideInUp">
					<!-- slide-buttons -->
					<ul class="slider-thumbnails">
						<li class="active">
							<a href="#" class="btn slide-thumbs" id="slidethumb1" data-slide="1">
								<?php if ($hasscap1) { echo $PAGE->theme->settings->s1cap; } ?>
							</a>
						</li>
						<li>
							<a href="#" class="btn slide-thumbs" id="slidethumb2" data-slide="2">
								<?php if ($hasscap2) { echo $PAGE->theme->settings->s2cap; } ?>
							</a>
						</li>
						<li>
							<a href="#" class="btn slide-thumbs" id="slidethumb3" data-slide="3">
								<?php if ($hasscap3) { echo $PAGE->theme->settings->s3cap; } ?>
							</a>
						</li>
						<li>
							<a href="#" class="btn slide-thumbs" id="slidethumb4" data-slide="4">
							<?php if ($hasscap4) { echo $PAGE->theme->settings->s4cap; } ?>
							</a>
						</li>
					</ul>
					
				</div>
			</div>
		</div>
		<!-- End slider -->

<?php  } ?>

     
<?php if ($enablemarket == 1) { ?>     
     	<!-- sevices-section section
				================================================== -->
		    <?php if(!empty($PAGE->theme->settings->marketcallout)) { ?>
			<div class="section-content services-section">
				<div class="title-section">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						
						<?php echo $PAGE->theme->settings->marketcallout; ?>
					</div>
				</div>
			<?php } ?>	
				
				
				<?php if ($hasmarket1) { ?>
				<div class="services-box parallax" data-stellar-background-ratio="0">
					<div class="container">
						<div class="row-fluid">
						
						<div class="span3">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
								<?php echo $PAGE->theme->settings->market1;?>
								</div>
							</div>
					
					<?php if ($hasmarket2) { ?>
							<div class="span3">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
								<?php echo $PAGE->theme->settings->market2;?>
								</div>
							</div>
					<?php } ?>
					
					<?php if ($hasmarket3) { ?>
							<div class="span3">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
								<?php echo $PAGE->theme->settings->market3;?>
								</div>
							</div>
					<?php } ?>
					
					<?php if ($hasmarket4) { ?>
							<div class="span3">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
								<?php echo $PAGE->theme->settings->market4;?>
								</div>
							</div>
					<?php } ?>
				
						</div>
					</div>
				</div>
				<?php } else { ?>
				<div class="services-box parallax" data-stellar-background-ratio="0">
					<div class="container">
						<div class="row-fluid">
							<div class="span3">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
									<div class="services-head">
										<a href="#" class="icon"><i class="fa fa-thumbs-o-up"></i></a>
										<h2>High Quality</h2>
										<span>Vestibulum auctor dapibus neque.</span>
									</div>
									<p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis  </p>
									<a href="#" class="button-one">Read More</a>
								</div>
							</div>
							<div class="span3">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
									<div class="services-head">
										<a href="#" class="icon"><i class="fa fa-tablet"></i></a>
										<h2>Responsive Design</h2>
										<span>Etetur adipiscing elit. </span>
									</div>
									<p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis  </p>
									<a href="#" class="button-one">Read More</a>
								</div>
							</div>
							<div class="span3">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
									<div class="services-head">
										<a href="#" class="icon"><i class="fa fa-eye"></i></a>
										<h2>Retina Ready</h2>
										<span>Cum sociis natoque penatibus et </span>
									</div>
									<p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis  </p>
									<a href="#" class="button-one">Read More</a>
								</div>
							</div>
							<div class="span3">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
									<div class="services-head">
										<a href="#" class="icon"><i class="fa fa-stethoscope"></i></a>
										<h2>Sales &amp; Support</h2>
										<span>Integer posuere erat a ante</span>
									</div>
									<p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis  </p>
									<a href="#" class="button-one">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
  <!-- end sevices-section section
				================================================== -->   
			<?php } ?>
				

<?php if(!empty($PAGE->theme->settings->callout)) { ?>
		<!-- banner-section 
				================================================== -->
			<div class="section-content banner-section">
				<div class="container triggerAnimation animated" data-animate="bounceIn">
					<?php echo $PAGE->theme->settings->callout; ?>
				</div>
			</div>
<!-- end banner-section section
			================================================== -->  
<?php } ?>

<?php if(!empty($PAGE->theme->settings->coursecallout)) { ?>
<!-- start courses-section section
				================================================== -->  			
			<div class="section-content portfolio-section">
				<div class="title-section">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<?php echo $PAGE->theme->settings->coursecallout; ?>
					</div>
				</div>
			</div>	
<!-- end courses-section section
				================================================== -->  
<?php } ?>   

 <div id="page-content" class="row-fluid">
    <div id="padder" class="clearfix">
         <section id="region-main" class="span9 desktop-first-column">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
        <?php
        $classextra = '';
        if ($left) {
            $classextra = ' 2desktop';
        }
        echo $OUTPUT->blocks('side-pre', 'span3'.$classextra);
        ?>
    </div> 
 </div>

</div>


<?php if ($enableclient == 1) { ?>
	<!-- client-section 
				================================================== -->
			<div class="section-content client-section">
			<?php if(!empty($PAGE->theme->settings->clientcallout)) { ?>
				<div class="title-section">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<?php echo $PAGE->theme->settings->clientcallout; ?>
					</div>
				</div>
			<?php } ?>	
				
				 <?php if(!empty($PAGE->theme->settings->clientlogos)) { ?>
				<div class="container triggerAnimation animated" data-animate="shake">
					<ul class="bxslider">
						<li>
							<ul class="client-list">
							<?php echo $PAGE->theme->settings->clientlogos; ?>
							</ul>
						</li>
					
					</ul>
				</div>
				<?php } ?>
				
			</div>

		</div>
		<!-- End content -->
<?php } ?>		


<div class="social-section">
	<ul class="social-icons" data-animate="tada">				
				
				<?php 
if (!empty($PAGE->theme->settings->socialone)) {
echo '<li><a href="'.$PAGE->theme->settings->socialone.'" alt="facebook"><i class="fa fa-facebook"></i></a></li>';
}

if (!empty($PAGE->theme->settings->socialtwo)) {
echo '<li><a href="'.$PAGE->theme->settings->socialtwo.'" alt="facebook"><i class="fa fa-twitter"></i></a></li>';
}

if (!empty($PAGE->theme->settings->socialthree)) {
echo '<li><a href="'.$PAGE->theme->settings->socialthree.'" alt="facebook"><i class="fa fa-youtube"></i></a></li>';
}

if (!empty($PAGE->theme->settings->socialfour)) {
echo '<li><a href="'.$PAGE->theme->settings->socialfour.'" alt="facebook"><i class="fa fa-instagram"></i></a></li>';
}
if (!empty($PAGE->theme->settings->socialfive)) {
echo '<li><a href="'.$PAGE->theme->settings->socialfive.'" alt="facebook"><i class="fa fa-pinterest"></i></a></li>';
}
if (!empty($PAGE->theme->settings->socialsix)) {
echo '<li><a href="'.$PAGE->theme->settings->socialsix.'" alt="facebook"><i class="fa fa-rss"></i></a></li>';
}
?>				
	</ul>
</div>

<div id="footer-wrap" class="clearfix">
 <footer id="page-footer" class="container">
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
       
        <?php
        //echo $html->footnote;
        echo $OUTPUT->login_info();
       // echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();
        ?>
        
        <div class="info container2 clearfix">
        <ul class="copyright">

<?php if ($hasfootnote) {
echo "<li>".$PAGE->theme->settings->footnote."</li>";
} else { ?>

<li>&copy; Your Company - Footer Info Here</li>
<?php } ?>
</ul>
</div>
        
    </footer>
</div>
    <?php echo $OUTPUT->standard_end_of_body_html() ?>



<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="<?php p($CFG->wwwroot) ?>/theme/marble/javascript/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php p($CFG->wwwroot) ?>/theme/marble/javascript/jquery.themepunch.revolution.min.js"></script>
	

	<!-- THE SCRIPT INITIALISATION -->
	<!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
	<script type="text/javascript">

		var revapi;

		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-banner').revolution(
				{
					delay:9000,
					startwidth:1170,
					startheight:738,
					hideThumbs:10,
					fullWidth:"on",
					forceFullWidth:"on",
					navigationType:"none",
					navigationArrows:"none",
					onHoverStop:"off"
				});

			   var slideThumb = $('.slide-thumbs');

				slideThumb.on('click', function(){
					var btn = $(this);
					revapi.revshowslide(btn.data('slide'));

				});
				revapi.bind("revolution.slide.onchange", function (e,data) {
					slideThumb.parent('li').removeClass('active');
					$('#slidethumb' + data.slideIndex).parent('li').addClass('active');
				});

		});	//ready

	</script>

	<!-- END REVOLUTION SLIDER -->

</body>
</html>
