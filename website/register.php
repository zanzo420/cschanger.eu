<?
$jezyk = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$jezyk1 = $_GET["l"];
if(isset($jezyk1)){
	$jezyk = $jezyk1;
}

if (file_exists("lang/".$jezyk.".php")) {
    utf8_encode(include("lang/".$jezyk .".php"));
} else {
    include("lang/en.php");
	$jezyk = "en";
}

session_start();
include "class/mysql.class.php";
?>
<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
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
      <link rel="stylesheet" type="text/css" href="assets/bower_components/prism/themes/prism-tomorrow.css">
      <!-- Summernote -->
      <link rel="stylesheet" type="text/css" href="assets/bower_components/summernote/dist/summernote.css">
      <!-- CSCHANGER -->
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
         <div class="nk-preloader-skip"><? echo $skip; ?></div>
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
							<li><a href="login.php?logout=1"><? echo $logout; ?></a></li>
							<?
						}else{
						?>
                        <li><a href="login.php"><? echo $login; ?></a></li>
                        <li class="active"><a href="register.php"><? echo $register; ?></a></li>
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
<h3 class="nk-title-back"><? echo $registerform; ?></h3>
<h2 class="nk-title h1"><? echo $registerformtext; ?></h2>
<div class="nk-gap-4"></div>
</div>

<?
		$mysql = new mysql();
		$mysql->connect();
		$mysqli = $mysql->mysqli;
		if($mysql->status_DB == true)
		{
			function ciag($z){
				return substr(md5(date("d.m.Y.H.i.s").rand(1,1000000)) , 0 , $z);
			}
			$register_status = true;
			if(isset($_POST["register_submit"]))
			{
				$time = time();
				
				//echo 'Now:       '. date('Y-m-d H:i:s', $time) ."\n";
				$r_login = addslashes($_POST["register_login"]);
				$r_email = addslashes($_POST["register_email"]);
				$r_password = addslashes($_POST["register_password"]);
				$r_password2 = addslashes($_POST["register_password2"]);
				if(empty($r_login) || empty($r_email) || empty($r_password) || empty($r_password2))
				{
					echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert1.'</div>';
				}elseif($r_password != $r_password2)
					{
						echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert2.'</div>';
					}elseif(!filter_var($r_email, FILTER_VALIDATE_EMAIL))
						{
							echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert3.'</div>';
						}elseif(($query = $mysqli->query("SELECT * FROM `users1` WHERE `login` = '$r_login'")) && ($query2 = $mysqli->query("SELECT * FROM `users1` WHERE `email` = '$r_email'")) ) {
							if($query->num_rows > 0 || $query2->num_rows > 0)
								{
									echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert4.'</div>';
								}else{
									$ciag = ciag(60);
									$r_password = md5($r_password);
									if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
										$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
									} else {
										$ip_address = $_SERVER['REMOTE_ADDR'];
									}
									if($query3 = $mysqli->query("INSERT INTO `users1` VALUES (NULL, '$r_login', '$r_password', '0', '0', NULL, '$r_email', '1', '$time', '0','0','0', '0', '0', '0', '0', '0', '$ip_address', NULL, NULL, NULL, NULL)")){
										$id = $mysqli->insert_id;
										unset($_POST["register_login"]);
										unset($_POST["register_email"]);
										$register_status = true;
										
										$encoding = "utf-8";
										$to      = $r_email; /* ADRES EMAILU */
										$subject = 'CSChanger - Register'; /* TEMAT EMAILU */
										$message = '<div id=":1c3" class="a3s aXjCH m15fecc491daed169"><u></u>
<div style="margin:0;padding:0;min-width:100%;font-family:Helvetica,Arial,sans-serif;background-color:#f4f4f4">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
    <tbody><tr>
        <td width="4%"></td>
        <td width="92%" align="center">
            <div style="max-width:640px;margin:0 auto">
                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%;max-width:640px;font-family:Helvetica,Arial,sans-serif;color:#7b8391">
                    <tbody><tr>
                        
                        <td>
                            
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Helvetica,Arial,sans-serif">
                                <tbody><tr>
                                    <td style="padding:12px 0" align="center">
                                        <div style="margin-bottom:50px;border-bottom:1px solid #e5e5e5">
                                            <a>
                                                <img src="https://i.imgur.com/pJZfzYU.png" alt="" class="CToWUd">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody></table>
                            
                            
                            
    

    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Helvetica,Arial,sans-serif;height:129px">
        <tbody><tr>
            <td class="m_-5024359709909506438two-columns" style="padding:0 0 12px;text-align:center;font-size:0">
                <div class="m_-5024359709909506438column m_-5024359709909506438hideOnMobile" style="width:100%;max-width:280px;display:inline-block;vertical-align:top;font-size:14px;text-align:center">
                                          <img src="https://ci3.googleusercontent.com/proxy/feUuXi1lrKylcZIJoLmxMpufIH9EkBCkKIzkyvcRBqkRkikhuvQOZw9VJtOWzJD5u3vPt71W6uBJXRGWPlusIx041DLDSRcpcAUmS-QrdE2DzQ=s0-d-e1-ft#http://files.gamebanana.com/img/ico/sprays/52b78555c046f.png" class="m_-3838586091532981881CToWUd CToWUd a6T" tabindex="0" height="312px" width="312px">
                                    </div>
                <div class="m_-5024359709909506438column" style="width:100%;max-width:360px;display:inline-block;vertical-align:middle;font-size:14px;text-align:left">
                    <h3 style="margin:0;padding:0;margin-bottom:20px;margin-top:10px;font-size:24px;color:#353a42">Hi, '.$r_login.'</h3>
                    <p style="margin:0;padding:0;margin-bottom:20px;font-size:14px;line-height:20px">
                        <strong style="color:#fd8002">
                            Thanks for registering on our site.
                        </strong><br>
                        To fully benefit from the features of the site and the program, you must confirm the email with the link below.
                    </p>
                    <p style="margin:0;padding:0;margin-bottom:20px;font-size:14px;line-height:20px">If you have problems activating your account, please write to us on Facebook or Discord!</p>

                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Helvetica,Arial,sans-serif;padding:5px;margin-bottom:20px;border:1px dashed #e0e0e0;background:#fff">
                        <tbody><tr>
                            <td style="padding:5px 15px;font-size:36px;color:#fd8002;white-space:nowrap">
                                                                    <img src="https://camo.githubusercontent.com/5a3b831c5896aa1e9bf719029b2911e9476a6751/687474703a2f2f692e696d6775722e636f6d2f74796f764963652e706e67" width="64" height="64" border="0" alt="" style="display:inline-block;vertical-align:middle" class="CToWUd">
                            </td>
                            <td style="border-left:1px solid #f3f3f3;padding:5px 15px">
                                <strong style="color:#2f2f2f">Join our Discord server!<br><a href="https://discord.gg/a9pjcFk">https://discord.gg/a9pjcFk</a></strong>
                            </td>
                        </tr>
                    </tbody></table>

                    <p style="margin:0;padding:0;margin-bottom:45px">
                        <a href="http://cschanger.eu/register.php?active_account='.$ciag.'&id='.$id.'" style="border:5px solid #5597cd;padding:10px 20px;display:inline-block;background-color:#5597cd;font-size:14px;color:#fff;text-decoration:none" target="_blank">Confirm My Account</a>
                    <br><small style="font-size:10px"><b>LINK TO CONFIRM ACCOUNT:</b></small>
					<br><small style="font-size:10px">http://cschanger.eu/register.php?active_account='.$ciag.'&id='.$id.'</small></p>

                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Helvetica,Arial,sans-serif;margin-bottom:10px">
                        <tbody><tr>
                            <td style="padding-right:18px;vertical-align:top">
                                <img src="https://ci5.googleusercontent.com/proxy/fS8XfRS8kncROIDdW2hANpTzWdPhboM9UXSFaJXbTZQTsVDCVZ8bQW0UI1aJ0crvPqAXSBq3WIWbJkTDr_kO8JnDBKmqqA88dJo1Pxon31ZNtDAR5U0fTYHWOqPjPp5H5gDGuZyeBrKM6zje89RrvCX9x2_bOqSZSNMq714Z3kgliw=s0-d-e1-ft#https://s2.olx.pl/static/olxpl/naspersclassifieds-regional/olxeu-atlas-web/static/img/email/info-icon@2x.png" width="41" height="40" border="0" alt="" class="CToWUd">
                            </td>
                            <td style="vertical-align:top">
                                <p style="margin:0;padding:0;margin-bottom:20px;font-size:14px;line-height:20px;color:#bec1c7">Did you know that we offer premium packages that support the development of our program, and beyond that offer special features not available to other users?</p>
                                                                

                                                            </td>
                        </tr>
                    </tbody></table>
                </div>
            </td>
        </tr>
    </tbody></table>
    <img src="https://ci3.googleusercontent.com/proxy/Jx-q5noPiP3FDlt5W7im6k_JLT4MmFlx1iImh26i3UEoyc5G4Kpb9ZbcoejWfe800Wt1aQwELGTMRaGZfV1vtA6kT68fQTKGJ3U1TMrEavk4KnYb0HGKbQFDUtUCT0RKqsW8-w1Zf1nqqyzDpfTaWwAzrWuiW05k7Znm6FTG20Cgqg3D3kYtCCoqHRfrmxfiezx3MkLobu82gjyUgQ8EIG52eRF6m1TJf9-HVuDh6A_4sJpEYi_qJ4XF6RIHBp0ByKloLO9cxA2x8YDG3njNPrGm_gWdI-N7fvLdo6iLxzlOlgyL0C-XzfqbYPyk7Tm5R4y4jIasmB-8xmIlBKSWtX3w5JrSDUM=s0-d-e1-ft#https://api.mixpanel.com/track/?ip=1&amp;img=1&amp;data=eyJldmVudCI6ImRpc2NvdW50X3JlY2VpdmVkX21haWxfdmlldyIsInByb3BlcnRpZXMiOnsiYnVsa19yZXF1ZXN0X2lkIjo1MywiZGlzdGluY3RfaWQiOiI0NzA3ODgwNyIsInRva2VuIjoiYzA0ZjI1NGUxNjY3ZTYwYTJlODRhODVjNjY2NTBlMTYifX0=" class="CToWUd">
                            
                            
                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Helvetica,Arial,sans-serif">
    <tbody><tr>
        <td style="align:center">
            <div><center>
                     <a href="http://cschanger.eu" style="margin-right:10px;font-size:13px;color:#1899ce;text-decoration:none" target="_blank" >Home</a>
                    <a href="http://cschanger.eu/panel" style="margin-right:10px;font-size:13px;color:#1899ce;text-decoration:none" target="_blank" >User Panel</a>
                    <a href="https://www.facebook.com/cschanger/" style="margin-right:10px;font-size:13px;color:#1899ce;text-decoration:none" target="_blank" >Our Facebook Site</a>                            </div>
       </center><br><br> </td>
    </tr>
    <tr>
        <td style="padding:24px 12px;border-top:1px solid #e5e5e5">
            <p style="margin:0;padding:0;font-size:12px;text-align:center">The message generated automatically, please do not respond to it.</p>
                            </td>
    </tr>
</tbody></table>                                                        
                        </td>

                    </tr>
                </tbody></table>
            </div>
        </td>
        <td width="4%"></td>
    </tr>
</tbody></table><div class="yj6qo"></div><div class="adL">


</div></div><div class="adL">


</div></div>';
										
										$headers = "Content-type: text/html; charset=".$encoding." \r\n";
										$headers .= 'From: CSChanger@cschanger.eu' . "\r\n" .
											'Reply-To: no-reply@cschanger.eu' . "\r\n";
											
										$success = mail($to, $subject, $message, $headers);
										if (!$success) {
											#echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert6.'</div>';
											
											###konto zarejestrowane bez wysylania meila ###
											echo '<div class="nk-info-box bg-success"><div class="nk-info-box-icon"><i class="ion-checkmark"></i></div>'.$alert13.'</div>';
										}
									}else{ 
										echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert7.'</div>';
										}
								}
						}
			}
			
		}else{
			//error blad mysql
		}
		  ?>
		<div class="container">
			<?
				
				if(($register_status == true) && (isset($_GET["active_account"]) == false) && (isset($_SESSION["login"])) == false)
				{
			?>
			
			<form method="POST">
				<div class="form-group row">
					<div class="col-sm-10">
						<input name="register_login" value="<? echo $_POST["register_login"]; ?>" type="text" class="form-control" placeholder="Login" required>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<input name="register_email" value="<? echo $_POST["register_email"]; ?>" type="email" class="form-control" placeholder="Email" required>
					</div>
				</div>
				<div class="form-group row">
				  <div class="col-sm-10">
					<input name="register_password" type="password" class="form-control" placeholder="<? echo $password; ?>" required>
				  </div>
				</div>
				<div class="form-group row">
				  <div class="col-sm-10">
					<input name="register_password2" type="password" class="form-control" placeholder="<? echo $repassword; ?>" required>
				  </div>
				</div>
	
	
				<div class="form-group row">
					<div class="col-2"></div>
				  <div class="col-sm-10">
					<button name="register_submit" type="submit"  class="nk-btn nk-btn-lg link-effect-4 ready"><span class="link-effect-inner"><span class="link-effect-l"><span><? echo $zarejestruj_przycisk; ?></span></span><span class="link-effect-r"><span><? echo $zarejestruj_przycisk; ?></span></span><span class="link-effect-shade"><span><? echo $zarejestruj_przycisk; ?></span></span></span></button>
					</div>
				</div>
				</form>
				<?
				}elseif(isset($_GET["active_account"]) && isset($_GET["id"]) && isset($_SESSION["login"]) == false)
				{	
					if(empty($_GET["active_account"]) || empty($_GET["id"]))
					{
						echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert12.'</div>';
					}else{
						$code = addslashes($_GET["active_account"]);
						$code = htmlspecialchars($code);
						$id = addslashes($_GET["id"]);
						$id = htmlspecialchars($id);
						
						if($mysql->status_DB == true)
						{
							if($query1 = $mysqli->query("SELECT * FROM `users1` WHERE `id` = '$id'"))
							{
								if($query1->num_rows > 0){
									if($query1->fetch_assoc()["email_status"] == 1)
									{
										echo '<div class="nk-info-box bg-success"><div class="nk-info-box-icon"><i class="ion-checkmark"></i></div>'.$alert14.'</div>';
									}else {
										if($query2 = $mysqli->query("SELECT * FROM `users1` WHERE `id` = '$id' AND `email_status` = '$code'"))
										{
												if($query2 = $mysqli->query("UPDATE `users1` SET `email_status` = '1' WHERE `id` = $id;"))
													echo '<div class="nk-info-box bg-success"><div class="nk-info-box-icon"><i class="ion-checkmark"></i></div>'.$alert13.'</div>';
												else 
													echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert12.'</div>';
										}else{
											echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert15.'</div>';
										}
									}
								}else{
									echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert16.'</div>';
								}
							}
						}
					}
				}elseif(isset($_SESSION["login"]))
				{
					echo '<div class="nk-info-box bg-danger"><div class="nk-info-box-icon"><i class="ion-alert-circled"></i></div>'.$alert17.'<br>
					<a href="http://cschanger.eu/panel/" class="nk-btn nk-btn-md link-effect-1 nk-btn-color-main-5 ready"> '.$przejdzdopanelu.'</a></div>';
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

      <!-- END: Sign Form --><!-- START: Scripts --><!-- GSAP --><script src="assets/bower_components/gsap/src/minified/TweenMax.min.js"></script><script src="assets/bower_components/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script><!-- Bootstrap --><script src="assets/bower_components/tether/dist/js/tether.min.js"></script><script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script><!-- Sticky Kit --><script src="assets/bower_components/sticky-kit/dist/sticky-kit.min.js"></script><!-- Jarallax --><script src="assets/bower_components/jarallax/dist/jarallax.min.js"></script><script src="assets/bower_components/jarallax/dist/jarallax-video.min.js"></script><!-- imagesLoaded --><script src="assets/bower_components/imagesloaded/imagesloaded.pkgd.min.js"></script><!-- Flickity --><script src="assets/bower_components/flickity/dist/flickity.pkgd.min.js"></script><!-- Isotope --><script src="assets/bower_components/isotope/dist/isotope.pkgd.min.js"></script><!-- Photoswipe --><script src="assets/bower_components/photoswipe/dist/photoswipe.min.js"></script><script src="assets/bower_components/photoswipe/dist/photoswipe-ui-default.min.js"></script><!-- Typed.js --><script src="assets/bower_components/typed.js/dist/typed.min.js"></script><!-- Jquery Form --><script src="assets/bower_components/jquery-form/dist/jquery.form.min.js"></script><!-- Jquery Validation --><script src="assets/bower_components/jquery-validation/dist/jquery.validate.min.js"></script><!-- Jquery Countdown + Moment --><script src="assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script><script src="assets/bower_components/moment/min/moment.min.js"></script><script src="assets/bower_components/moment-timezone/builds/moment-timezone-with-data.js"></script><!-- Hammer.js --><script src="assets/bower_components/hammer.js/hammer.min.js"></script><!-- NanoSroller --><script src="assets/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script><!-- SoundManager2 --><script src="assets/bower_components/SoundManager2/script/soundmanager2-nodebug-jsmin.js"></script><!-- DateTimePicker --><script src="assets/bower_components/datetimepicker/build/jquery.datetimepicker.full.min.js"></script><!-- Revolution Slider --><script type="text/javascript" src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script><script type="text/javascript" src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script><script type="text/javascript" src="assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script><script type="text/javascript" src="assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script><script type="text/javascript" src="assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script><!-- Keymaster --><script src="assets/bower_components/keymaster/keymaster.js"></script><!-- Summernote --><script src="assets/bower_components/summernote/dist/summernote.min.js"></script><!-- Prism --><script src="assets/bower_components/prism/prism.js"></script><!-- CSCHANGER --><script src="assets/js/cschanger_core.min.js"></script><script src="assets/js/cschanger_core.js"></script><!-- END: Scripts --><script type="text/javascript">var tpj=jQuery;
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