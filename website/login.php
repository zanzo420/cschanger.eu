<?php
session_start();
ob_start();
$jezyk = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$jezyk1 = $_GET["l"];
if(isset($jezyk1)){
	$jezyk = $jezyk1;
}
if(isset($_GET["logout"]))
{
	unset($_SESSION["login"]);
    unset($_SESSION["login_login"]);
    unset($_SESSION["login_id"]);
    unset($_SESSION["admin"]);
}

if (file_exists("lang/".$jezyk.".php")) {
    utf8_encode(include("lang/".$jezyk .".php"));
} else {
    include("lang/en.php");
	$jezyk = "en";
}
include "class/mysql.class.php";
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta name="description" content="">
      <meta name="author" content="_nK">
      <title>CSChanger | Color Your Game!</title>
      <link rel="icon" type="image/png" href="assets/images/favicon.png">
      <!-- START: Styles --><!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,700%7cMarcellus+SC" rel="stylesheet">
      <!-- Bootstrap -->
      <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
      <!-- FontAwesome -->
      <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
      <!-- IonIcons -->
      <link rel="stylesheet" href="assets/bower_components/ionicons/css/ionicons.min.css">
      <!-- Revolution Slider -->
      <link rel="stylesheet" type="text/css" href="assets/plugins/revolution/css/settings.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/revolution/css/layers.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/revolution/css/navigation.css">
      <!-- Flickity -->
      <link rel="stylesheet" href="assets/bower_components/flickity/dist/flickity.min.css">
      <!-- Photoswipe -->
      <link rel="stylesheet" type="text/css" href="assets/bower_components/photoswipe/dist/photoswipe.css">
      <link rel="stylesheet" type="text/css" href="assets/bower_components/photoswipe/dist/default-skin/default-skin.css">
      <!-- DateTimePicker -->
      <link rel="stylesheet" type="text/css" href="assets/bower_components/datetimepicker/build/jquery.datetimepicker.min.css">
      <!-- Revolution Slider -->
      <link rel="stylesheet" type="text/css" href="assets/plugins/revolution/css/settings.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/revolution/css/layers.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/revolution/css/navigation.css">
      <!-- Prism -->

      <!-- Summernote -->
      <link rel="stylesheet" type="text/css" href="assets/bower_components/summernote/dist/summernote.css">
      <!-- cschanger -->
      <link rel="stylesheet" href="assets/css/godlike.min.css">
      <!-- Custom Styles -->
      <link rel="stylesheet" href="assets/css/custom.css"><script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
   </head>
   <!--
      Additional Classes:
          .nk-page-boxed
      -->
   <body>
      <!-- START: Page Preloader -->
      <div class="nk-preloader">
         <!--
            Preloader animation
            data-close-... data used for closing preloader
            data-open-...  data used for opening preloader
            -->
         <div class="nk-preloader-bg" style="background-color: #000" data-close-frames="23" data-close-speed="1.2" data-close-sprites="./assets/images/preloader-bg.png" data-open-frames="23" data-open-speed="1.2" data-open-sprites="assets/images/preloader-bg-bw.png"></div>
         <div class="nk-preloader-content">
            <div>
               <img class="nk-img" src="https://i.imgur.com/AsQjUtl.png" alt="CSChanger.eu" width="300">
               <div class="nk-preloader-animation"></div>
            </div>
         </div>
         <div class="nk-preloader-skip"><? echo $skip ?></div>
      </div>
      <!-- END: Page Preloader --><!-- START: Page Background -->
      <div class="nk-page-background op-5" data-bg-mp4="assets/video/bg-2.mp4" data-bg-webm="assets/video/bg-2.webm" data-bg-ogv="assets/video/bg-2.ogv" data-bg-poster="assets/video/bg-2.jpg"></div>
      <!-- END: Page Background --><!-- START: Page Border -->
      <div class="nk-page-border">
         <div class="nk-page-border-t"></div>
         <div class="nk-page-border-r"></div>
         <div class="nk-page-border-b"></div>
         <div class="nk-page-border-l"></div>
      </div>
      <!-- END: Page Border --><!--
         Additional Classes:
             .nk-header-opaque
         -->
      <header class="nk-header nk-header-opaque">
         <!--
            START: Top Contacts
            
            Additional Classes:
                .nk-contacts-top-light
            -->
         <div class="nk-contacts-top">
            <div class="container">
               <div class="nk-contacts-left">
                  <div class="nk-navbar">
                     <ul class="nk-nav">
                        <li class="nk-drop-item">
						<? if($jezyk == "en"){?>
                           <a href="#"><img src="https://i.imgur.com/Qu8nxC2.png">   <? echo $english; ?></a>
                           <ul class="dropdown">
                              <li><a href="?l=en"><img src="https://i.imgur.com/Qu8nxC2.png">   <? echo $english; ?></a></li>
                              <li><a href="?l=pl"><img src="https://i.imgur.com/YoYektZ.png">   <? echo $polish; ?></a></li>
							  <li><a href="?l=de"><img src="https://i.imgur.com/zNcBbtp.png">   <? echo $german; ?></a></li>
                           </ul>
						<?}elseif($jezyk == "pl"){?>
                           <a href="#"><img src="https://i.imgur.com/YoYektZ.png">   <? echo $polish; ?></a>
                           <ul class="dropdown">
                              <li><a href="?l=pl"><img src="https://i.imgur.com/YoYektZ.png">   <? echo $polish; ?></a></li>
                              <li><a href="?l=en"><img src="https://i.imgur.com/Qu8nxC2.png">   <? echo $english; ?></a></li>
							  <li><a href="?l=de"><img src="https://i.imgur.com/zNcBbtp.png">   <? echo $german; ?></a></li>
                           </ul>
						<?}elseif($jezyk == "de"){?>
                           <a href="#"><img src="https://i.imgur.com/zNcBbtp.png">   <? echo $german; ?></a>
                           <ul class="dropdown">
							  <li><a href="?l=de"><img src="https://i.imgur.com/zNcBbtp.png">   <? echo $german; ?></a></li>
                              <li><a href="?l=en"><img src="https://i.imgur.com/Qu8nxC2.png">   <? echo $english; ?></a></li>
                              <li><a href="?l=pl"><img src="https://i.imgur.com/YoYektZ.png">   <? echo $polish; ?></a></li>
                           </ul>
						<?}?>
                        </li>
                        <?
						if(isset($_SESSION["login"])) {
							?>
							<li class="active"><a><? echo $hi; ?><? echo $_SESSION["login_name"]; ?>!</a></li>
							<?
						}else{
						?>
                        <li><a href="login.php<?if(isset($jezyk)){echo "?l=".$jezyk;} ?>"><? echo $login; ?></a></li>
                        <li class="active"><a href="register.php<?if(isset($jezyk)){echo "?l=".$jezyk;} ?>"><? echo $register; ?></a></li>
						<?}?>
                     </ul>
                  </div>
               </div>
               <div class="nk-contacts-right">
                  <div class="nk-navbar">
                     <ul class="nk-nav">
					 <li><a target="_blank" title="TRUSTPILOT - Review CSCHANGER" href="https://pl.trustpilot.com/review/www.cschanger.eu?languages=all"><img src="https://i.imgur.com/N4kwAXr.jpg"></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/cschanger/"><span class="ion-social-facebook"></span></a></li>
                        <li><a target="_blank" href="http://youtube.com/c/tejkuus"><span class="ion-social-youtube"></span></a></li>
                        <li><a target="_blank" href="https://www.reddit.com/r/CSChanger/"><span class="ion-social-reddit"></span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- END: Top Contacts --><!--
            START: Navbar
            
            Additional Classes:
                .nk-navbar-sticky
                .nk-navbar-transparent
                .nk-navbar-autohide
                .nk-navbar-light
                .nk-navbar-no-link-effect
            -->
         <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">
            <div class="container">
               <div class="nk-nav-table">
                  <a href="index.php<?if(isset($jezyk)){echo "?l=".$jezyk;} ?>" class="nk-nav-logo"><img src="https://i.imgur.com/AsQjUtl.png" alt="" width="120"></a>
                  <ul class="nk-nav nk-nav-center hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                     <li>
                        <a href="index.php<?if(isset($jezyk)){echo "?l=".$jezyk;} ?>"><? echo $home; ?></a>
                     </li>
                     <li class="">
                        <a href="premium.php<?if(isset($jezyk)){echo "?l=".$jezyk;} ?>"><? echo $premium; ?></a>
                           </li>
                           <li class="">
                              <a href="credits.php<?if(isset($jezyk)){echo "?l=".$jezyk;} ?>"><? echo $credits; ?></a>
                           </li>
                           <li class="">
                              <a href="faq.php<?if(isset($jezyk)){echo "?l=".$jezyk;} ?>">FAQ</a>
                           </li>
                        </ul>
                  <ul class="nk-nav nk-nav-right nk-nav-icons">
                     <li class="">
                        <a href="/panel/"><? echo $panel; ?></a>
                           </li>
				  </ul>
               </div>
            </div>
         </nav>
         <!-- END: Navbar -->
      </header>
      <!--
         START: Right Navbar
         
         Additional Classes:
             .nk-navbar-right-side
             .nk-navbar-left-side
             .nk-navbar-lg
             .nk-navbar-align-center
             .nk-navbar-align-right
             .nk-navbar-overlay-content
             .nk-navbar-light
             .nk-navbar-no-link-effect
         -->
     
      <!-- END: Right Navbar --><!--
         START: Navbar Mobile
         
         Additional Classes:
             .nk-navbar-left-side
             .nk-navbar-right-side
             .nk-navbar-lg
             .nk-navbar-overlay-content
             .nk-navbar-light
             .nk-navbar-no-link-effect
         -->
      <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content hidden-lg-up">
         <div class="nano">
            <div class="nano-content">
               <a href="index.php<?if(isset($jezyk)){echo "?l=".$jezyk;} ?>">" class="nk-nav-logo"><img src="https://i.imgur.com/AsQjUtl.png" alt="" width="90"></a>
               <div class="nk-navbar-mobile-content">
                  <ul class="nk-nav">
                     <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                  </ul>
               </div>
            </div>
         </div>
      </div>
<?
		if(isset($_GET["logout"])){
			
		?>
	  <div class="nk-box bg-dark-1 text-white">
<div class="nk-gap-4"></div>
<div class="container">
<div class="text-left">
<h3 class="nk-title-back"><? echo $wylogowywanie; ?></h3>
<h2 class="nk-title h1"><? echo $zostaleswylogowany; ?></h2>
<div class="nk-gap-4"></div>
</div>
<?
			echo '<br><Br><div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$wylogowany;
					
		header("Refresh: 3; url=index.php");			
?>
					
			</div></div>
			<?
			
		  }else{
		  ?>
      <!-- END: Navbar Mobile -->
      <div class="nk-main">
         <!-- START: Header Title --><!--
            Additional Classes:
                .nk-header-title-sm
                .nk-header-title-md
                .nk-header-title-lg
                .nk-header-title-xl
                .nk-header-title-full
                .nk-header-title-parallax
                .nk-header-title-parallax-opacity
                .nk-header-title-boxed
            -->
<div class="nk-box bg-dark-1 text-white">
<div class="nk-gap-4"></div>
<div class="container">
<div class="text-left">
<h3 class="nk-title-back"><? echo $loginform; ?></h3>
<h2 class="nk-title h1"><? echo $loginformtext; ?></h2>
<div class="nk-gap-4"></div>
</div>

<?
		$mysql = new mysql();
		$mysql->connect();
		$mysqli = $mysql->mysqli;
		if($mysql->status_DB == true)
		{
			$login_status = false;
			if(isset($_POST["login_submit"]))
			{
				
				$l_login = addslashes($_POST["login_login"]);
				$l_login = htmlspecialchars($l_login);
				$l_password = addslashes($_POST["login_password"]);
				$l_password = htmlspecialchars($l_password);
				$l_password = md5($l_password);
				if(empty($l_login) || empty($l_password))
				{
					echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert1.'</div>';
				}elseif($query = $mysqli->query("SELECT * FROM `users1` WHERE `login` = '$l_login' AND `password` = '$l_password'"))
				{
					if($query->num_rows > 0)
					{
						$row = $query->fetch_assoc();
						if(empty($row["ip"]))
						{
							if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
								$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
							} else {
								$ip_address = $_SERVER['REMOTE_ADDR'];
							}
							$mysqli->query("UPDATE `users1` SET `ip` = '$ip_address' WHERE `id` = '".$row["id"]."' ");
						}
						if($row["email_status"] != "1")
						{
							echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>>'.$alert8.'</div>';
						}else{
							if($row["ban"] == "1"){
								header('Refresh: 0; url=banned.php?w=1&log='.$l_login);
							}elseif($row["ban"] == "2"){
								header('Refresh: 0; url=banned.php?w=2&log='.$l_login);
							}elseif($row["ban"] == "3"){
								header('Refresh: 0; url=banned.php?w=3&log='.$l_login);
							}elseif($row["ban"] == "4"){
							header('Refresh: 0; url=banned.php?w=4&log='.$l_login);
							}else{
								$login_status = false;
								$login_status2 = true;
								
								$_SESSION["login"] = true;
								$_SESSION["login_name"] = $row["login"];
								$_SESSION["login_id"] = $row["id"];
								if($row["admin"] == 1)
									$_SESSION["admin"] = true;
								echo '<div class="nk-info-box bg-success"><div class="nk-info-box-icon"><i class="ion-checkmark"></i></div>'.$alert9.'
				<br></div>';
								header('Refresh: 2; url=/panel/');
						}
					}}else{
						echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert10.'</div>';
					}
				}
			}
			
		}else{
			//error blad mysql
		}
		  ?>
		<div class="container">
			<?
			if($login_status == true || isset($_SESSION["login"]) == false) {
			?>
			<form method="POST">
				<div class="form-group row">
					<div class="col-sm-10">
						<input name="login_login" value="<? echo $_POST["login_login"]; ?>" type="text" class="form-control" placeholder="Login" required>
					</div>
				</div>
				<div class="form-group row">
				  <div class="col-sm-10">
					<input name="login_password" type="password" class="form-control" placeholder="<? echo $password; ?>" required>
				  </div>
				</div>
	
	
				<div class="form-group row">
					<div class="col-2"></div>
				  <div class="col-sm-10">
					<button name="login_submit" type="submit"  class="nk-btn nk-btn-lg link-effect-4 ready"><span class="link-effect-inner"><span class="link-effect-l"><span><? echo $zaloguj_przycisk; ?></span></span><span class="link-effect-r"><span><? echo $zaloguj_przycisk; ?></span></span><span class="link-effect-shade"><span><? echo $zaloguj_przycisk; ?></span></span></span></button>
				  
				  </div>
				</div>
			</form>
			<?
			}if((isset($login_status2) == false && isset($_SESSION["login"]) == true) ) {
				echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert11.'
			<br>';
				//header('Refresh: 2; url=http://cschanger.eu/panel/');
			}
			?>
<?
		  }
?>

</div>
<div class="nk-gap-4"></div>
</div>
        
         <!-- END: Subscribe --><!-- START: Footer --><!--
            Additional Classes:
                .nk-footer-parallax
                .nk-footer-parallax-opacity
            -->
         <footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity">
            <img class="nk-footer-top-corner" src="assets/images/footer-corner.png" alt="">
            <div class="container">
			<center><script type="text/javascript">
    google_ad_client = "ca-pub-7558311523320339";
    google_ad_slot = "7017596156";
    google_ad_width = 970;
    google_ad_height = 90;
</script>
<!-- Csc_1 -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script></center>
               <div class="nk-gap-2"></div>
               <div class="nk-footer-logos"><a href="#" target="_blank"><img class="nk-img" src="https://i.imgur.com/AsQjUtl.png" alt="" width="120"></a> <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img" src="assets/images/footer-logo-nk-team.png" alt="" width="150"></a></div>
               <div class="nk-gap"></div>
               <p>&copy; 2017 nK Group Inc. Developed in association with LoremInc. IpsumCompany, SitAmmetGroup, CumSit and related logos are registered trademarks. All other trademarks or trade names are the property of their respective owners. All Rights Reserved.</p>
               <p>&copy; 2017 CSChanger Europe | All Rights Reserved!</p>
               <div class="nk-footer-links"><a href="tos.php" class="link-effect"><? echo $tos; ?></a> <span>|</span> <a href="privacy.php" class="link-effect"><? echo $privacy; ?></a></div>
               <div class="nk-gap-4"></div>
            </div>
         </footer>
         <!-- END: Footer -->
      </div>
      <!--
         START: Share Buttons
             .nk-share-buttons-left
         -->
      <div class="nk-share-buttons nk-share-buttons-left hidden-sm-down">
         <ul>
            <li><a style="color:#fff" target="_blank" href="https://www.facebook.com/cschanger/"><span class="nk-share-icon" title="Check our Facebook page!" data-share="facebook"><span class="icon fa fa-facebook"></span></span> <span class="nk-share-name">Facebook</span></a></li>
            <li><a style="color:#fff" target="_blank" href="https://www.youtube.com/c/tejkuus"><span class="nk-share-icon" title="Check TeJk's YouTube channel!" data-share="youtube"><span class="icon fa fa-youtube"></span></span> <span class="nk-share-name">YouTube</span></a></li>
			<!--
               <li>
                   <span class="nk-share-icon" title="Share page on Pinterest" data-share="pinterest">
                       <span class="icon fa fa-pinterest"></span>
                   </span>
                   <span class="nk-share-name">Pinterest</span>
               </li>
               <li>
                   <span class="nk-share-icon" title="Share page on LinkedIn" data-share="linkedin">
                       <span class="icon fa fa-linkedin"></span>
                   </span>
                   <span class="nk-share-name">LinkedIn</span>
               </li>
               <li>
                   <span class="nk-share-icon" title="Share page on VK" data-share="vk">
                       <span class="icon fa fa-vk"></span>
                   </span>
                   <span class="nk-share-name">Vkontakte</span>
               </li>
               -->
         </ul>
      </div>
      <!--

      <!-- END: Sign Form --><!-- START: Scripts --><!-- GSAP --><script src="assets/bower_components/gsap/src/minified/TweenMax.min.js"></script><script src="assets/bower_components/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script><!-- Bootstrap --><script src="assets/bower_components/tether/dist/js/tether.min.js"></script><script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script><!-- Sticky Kit --><script src="assets/bower_components/sticky-kit/dist/sticky-kit.min.js"></script><!-- Jarallax --><script src="assets/bower_components/jarallax/dist/jarallax.min.js"></script><script src="assets/bower_components/jarallax/dist/jarallax-video.min.js"></script><!-- imagesLoaded --><script src="assets/bower_components/imagesloaded/imagesloaded.pkgd.min.js"></script><!-- Flickity --><script src="assets/bower_components/flickity/dist/flickity.pkgd.min.js"></script><!-- Isotope --><script src="assets/bower_components/isotope/dist/isotope.pkgd.min.js"></script><!-- Photoswipe --><script src="assets/bower_components/photoswipe/dist/photoswipe.min.js"></script><script src="assets/bower_components/photoswipe/dist/photoswipe-ui-default.min.js"></script><!-- Typed.js --><script src="assets/bower_components/typed.js/dist/typed.min.js"></script><!-- Jquery Form --><script src="assets/bower_components/jquery-form/dist/jquery.form.min.js"></script><!-- Jquery Validation --><script src="assets/bower_components/jquery-validation/dist/jquery.validate.min.js"></script><!-- Jquery Countdown + Moment --><script src="assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script><script src="assets/bower_components/moment/min/moment.min.js"></script><script src="assets/bower_components/moment-timezone/builds/moment-timezone-with-data.js"></script><!-- Hammer.js --><script src="assets/bower_components/hammer.js/hammer.min.js"></script><!-- NanoSroller --><script src="assets/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script><!-- SoundManager2 --><script src="assets/bower_components/SoundManager2/script/soundmanager2-nodebug-jsmin.js"></script><!-- DateTimePicker --><script src="assets/bower_components/datetimepicker/build/jquery.datetimepicker.full.min.js"></script><!-- Revolution Slider --><script type="text/javascript" src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script><script type="text/javascript" src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script><script type="text/javascript" src="assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script><script type="text/javascript" src="assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script><script type="text/javascript" src="assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script><!-- Keymaster --><script src="assets/bower_components/keymaster/keymaster.js"></script><!-- Summernote --><script src="assets/bower_components/summernote/dist/summernote.min.js"></script><!-- Prism --><script src="assets/bower_components/prism/prism.js"></script><!-- cschanger --><script src="assets/js/cschanger_core.min.js"></script><script src="assets/js/cschanger_core.js"></script><!-- END: Scripts --><script type="text/javascript">var tpj=jQuery;
         var revapi50;
         tpj(document).ready(function() {
             if(tpj("#rev_slider_50_1").revolution == undefined){
                 revslider_showDoubleJqueryError("#rev_slider_50_1");
             }else{
                 revapi50 = tpj("#rev_slider_50_1").show().revolution({
                     sliderType:"carousel",
                     jsFileLocation:"assets/plugins/revolution/js/",
                     sliderLayout:"auto",
                     dottedOverlay:"none",
                     delay:9000,
                     navigation: {
                         keyboardNavigation:"off",
                         keyboard_direction: "horizontal",
                         onHoverStop:"off",
                     },
                     carousel: {
                         maxRotation: 8,
                         vary_rotation: "off",
                         minScale: 20,
                         vary_scale: "off",
                         horizontal_align: "center",
                         vertical_align: "center",
                         fadeout: "off",
                         vary_fade: "off",
                         maxVisibleItems: 3,
                         infinity: "on",
                         space: -90,
                         stretch: "off"
                     },
                     responsiveLevels:[1240,1024,778,480],
                     gridwidth:[800,600,400,320],
                     gridheight:[600,400,320,280],
                     lazyType:"none",
                     shadow:0,
                     spinner:"off",
                     stopLoop:"on",
                     stopAfterLoops:0,
                     stopAtSlide:0,
                     shuffle:"off",
                     autoHeight:"off",
                     fullScreenAlignForce:"off",
                     fullScreenOffsetContainer: "",
                     fullScreenOffset: "",
                     disableProgressBar:"on",
                     hideThumbsOnMobile:"off",
                     hideSliderAtLimit:0,
                     hideCaptionAtLimit:0,
                     hideAllCaptionAtLilmit:0,
                     debugMode:false,
                     fallbacks: {
                         simplifyAll:"off",
                         nextSlideOnWindowFocus:"off",
                         disableFocusListener:false,
                     }
                 });
             }
         });
      </script>
   </body>
</html>
<?
ob_end_flush();
?>