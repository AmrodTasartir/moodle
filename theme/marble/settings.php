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

/**
 * Moodle's marble theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_marble
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Invert Navbar to dark background.
    

    // Custom CSS file.
    $name = 'theme_marble/customcss';
    $title = get_string('customcss', 'theme_marble');
    $description = get_string('customcssdesc', 'theme_marble');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
	
	// footerline setting
    $name = 'theme_marble/fsize';
    $title = get_string('fsize','theme_marble');
    $description = get_string('fsizedesc', 'theme_marble');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $settings->add($setting);
          
    
    
    $name = 'theme_marble/enableshow';
    	$title = get_string('enableshow', 'theme_marble');
    	$description = get_string('enableshowdesc', 'theme_marble');
    	$default = true;
    	$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    	//$setting->set_updatedcallback('theme_reset_all_caches');
    	 $settings->add($setting);
    	 
    	     	 
    	 //set pictures for frontpage

//set pictures for frontpage
$name = 'theme_marble/p1';
$title = get_string('p1','theme_marble');
$description = get_string('p1desc', 'theme_marble');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

$name = 'theme_marble/p2';
$title = get_string('p2','theme_marble');
$description = get_string('p2desc', 'theme_marble');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

$name = 'theme_marble/p3';
$title = get_string('p3','theme_marble');
$description = get_string('p3desc', 'theme_marble');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

$name = 'theme_marble/p4';
$title = get_string('p4','theme_marble');
$description = get_string('p4desc', 'theme_marble');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);



$name = 'theme_marble/p1cap';
$title = get_string('p1cap','theme_marble');
$description = get_string('p1capdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);

$name = 'theme_marble/p2cap';
$title = get_string('p2cap','theme_marble');
$description = get_string('p2capdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);

$name = 'theme_marble/p3cap';
$title = get_string('p3cap','theme_marble');
$description = get_string('p3capdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);

$name = 'theme_marble/p4cap';
$title = get_string('p4cap','theme_marble');
$description = get_string('p4capdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);

$name = 'theme_marble/p5cap';
$title = get_string('p5cap','theme_marble');
$description = get_string('p5capdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);


$name = 'theme_marble/s1cap';
$title = get_string('s1cap','theme_marble');
$description = get_string('s1capdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);

$name = 'theme_marble/s2cap';
$title = get_string('s2cap','theme_marble');
$description = get_string('s2capdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);

$name = 'theme_marble/s3cap';
$title = get_string('s3cap','theme_marble');
$description = get_string('s3capdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);

$name = 'theme_marble/s4cap';
$title = get_string('s4cap','theme_marble');
$description = get_string('s4capdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);


  $name = 'theme_marble/enablemarket';
    	$title = get_string('enablemarket', 'theme_marble');
    	$description = get_string('enablemarketdesc', 'theme_marble');
    	$default = true;
    	$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    	//$setting->set_updatedcallback('theme_reset_all_caches');
    	 $settings->add($setting);

$name = 'theme_marble/marketcallout';
$title = get_string('marketcallout','theme_marble');
$description = get_string('marketcalloutdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);


$name = 'theme_marble/marketback';
$title = get_string('marketback','theme_marble');
$description = get_string('marketbackdesc', 'theme_marble');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

//marketing spots
$name = 'theme_marble/market1';
$title = get_string('market1','theme_marble');
$description = get_string('market1desc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);

$name = 'theme_marble/market2';
$title = get_string('market2','theme_marble');
$description = get_string('market2desc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);

$name = 'theme_marble/market3';
$title = get_string('market3','theme_marble');
$description = get_string('market3desc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);

$name = 'theme_marble/market4';
$title = get_string('market4','theme_marble');
$description = get_string('market4desc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);


$name = 'theme_marble/callout';
$title = get_string('callout','theme_marble');
$description = get_string('calloutdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);


$name = 'theme_marble/coursecallout';
$title = get_string('coursecallout','theme_marble');
$description = get_string('coursecalloutdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);

$name = 'theme_marble/enableclient';
    	$title = get_string('enableclient', 'theme_marble');
    	$description = get_string('enableclientdesc', 'theme_marble');
    	$default = true;
    	$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    	//$setting->set_updatedcallback('theme_reset_all_caches');
    	 $settings->add($setting);

$name = 'theme_marble/clientcallout';
$title = get_string('clientcallout','theme_marble');
$description = get_string('clientcalloutdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);

$name = 'theme_marble/clientlogos';
$title = get_string('clientlogos','theme_marble');
$description = get_string('clientlogosdesc', 'theme_marble');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$settings->add($setting);


$name = 'theme_marble/internalbanner';
	$title = get_string('internalbanner','theme_marble');
	$description = get_string('internalbannerdesc', 'theme_marble');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

//logo
$name = 'theme_marble/logo';
	$title = get_string('logo','theme_marble');
	$description = get_string('logodesc', 'theme_marble');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);
	
	$name = 'theme_marble/homer';
    $title = get_string('homer','theme_marble');
    $description = get_string('homerdesc', 'theme_marble');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $settings->add($setting);
	
	// Turn on fluid width
    $name = 'theme_marble/headeralign';
    $title = get_string('headeralign', 'theme_marble');
    $description = get_string('headeraligndesc', 'theme_marble');
    $default = '0';
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $settings->add($setting);

// link color setting
	$name = 'theme_marble/linkcolor';
	$title = get_string('linkcolor','theme_marble');
	$description = get_string('linkcolordesc', 'theme_marble');
	$default = '#e74c3c';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);

	// link hover color setting
	$name = 'theme_marble/linkhover';
	$title = get_string('linkhover','theme_marble');
	$description = get_string('linkhoverdesc', 'theme_marble');
	$default = '#666666';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);

	// main color setting
	$name = 'theme_marble/maincolor';
	$title = get_string('maincolor','theme_marble');
	$description = get_string('maincolordesc', 'theme_marble');
	$default = '#e74c3c';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);
	
	// main color setting
	$name = 'theme_marble/secondcolor';
	$title = get_string('secondcolor','theme_marble');
	$description = get_string('secondcolordesc', 'theme_marble');
	$default = '#3a3d41';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);
	

	// Foot note setting
 // footerline setting
    $name = 'theme_marble/footnote';
    $title = get_string('footnote','theme_marble');
    $description = get_string('footnotedesc', 'theme_marble');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $settings->add($setting);
    
    //social settings
    $name = 'theme_marble/socialone';
	$title = get_string('socialone','theme_marble');
	$description = get_string('socialonedesc', 'theme_marble');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);
	
	 $name = 'theme_marble/socialtwo';
	$title = get_string('socialtwo','theme_marble');
	$description = get_string('socialtwodesc', 'theme_marble');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);
	
	 $name = 'theme_marble/socialthree';
	$title = get_string('socialthree','theme_marble');
	$description = get_string('socialthreedesc', 'theme_marble');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);
	
	 $name = 'theme_marble/socialfour';
	$title = get_string('socialfour','theme_marble');
	$description = get_string('socialfourdesc', 'theme_marble');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);
	
	 $name = 'theme_marble/socialfive';
	$title = get_string('socialfive','theme_marble');
	$description = get_string('socialfivedesc', 'theme_marble');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);
	
	 $name = 'theme_marble/socialsix';
	$title = get_string('socialsix','theme_marble');
	$description = get_string('socialsixdesc', 'theme_marble');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);
	
}
