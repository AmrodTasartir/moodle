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

$hasinternal = (!empty($PAGE->theme->settings->internalbanner));

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

if (empty($PAGE->theme->settings->internalbanner)) {
	$slideback1 = "http://placehold.it/1920x156";
} else {
	$slideback1 = $PAGE->theme->settings->internalbanner;
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
	$setzoom = "";
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
  

<div class="section-content page-banner blog-page-banner" style="background-image: url(<?php echo $slideback1; ?>);">
 <div id="page-navbar" class="container">
 <?php echo $OUTPUT->page_heading(); ?>
            <nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
            <?php echo $OUTPUT->navbar(); ?>
            <div id="usermens"><?php echo $OUTPUT->user_menu(); ?></div>
 </div>
</div>


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




</body>
</html>
