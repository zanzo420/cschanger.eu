<?
/* $_GET["email"] = "";  ????????????????????? */

$get_email = $_GET["email"];

include "class/mysql.class.php";

$mysql = new mysql();
$mysql->connect();
$mysqli = $mysql->mysqli;

if($mysql->status_DB)
{
	echo "połaczyło z baza danych...";
}
/*
							$dane = "SELECT * FROM `users1` WHERE `email` = ".$_GET['email'];
							$rezult = $mysqli->query($dane);
							if($rezult) { echo "wykonano zapytanie"; }
							
*/

$query = $mysqli->query("SELECT * FROM `users1` WHERE `email` = '$get_email'");	

if ($query->num_rows > 0) {
    // output data of each row
    while($row = $query->fetch_assoc()) {


$encoding = "utf-8";
										$to      = $get_email; /* ADRES EMAILU */
										$subject = 'Account Verify Reminder'; /* TEMAT EMAILU */
										$message = '<div id=":1c3" class="hjdkjyhjddjhgjhgj"><u></u>
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
            <td class="ghjfghjfghjtyj56fghj" style="padding:0 0 12px;text-align:center;font-size:0">
                <div class="fghjfhyjfytjfghjfghjygjghjghjf" style="width:100%;max-width:280px;display:inline-block;vertical-align:top;font-size:14px;text-align:center">
                                          <img src="https://ci3.googleusercontent.com/proxy/feUuXi1lrKylcZIJoLmxMpufIH9EkBCkKIzkyvcRBqkRkikhuvQOZw9VJtOWzJD5u3vPt71W6uBJXRGWPlusIx041DLDSRcpcAUmS-QrdE2DzQ=s0-d-e1-ft#http://files.gamebanana.com/img/ico/sprays/52b78555c046f.png" class="m_-3838586091532981881CToWUd CToWUd a6T" tabindex="0" height="312px" width="312px">
                                    </div>
                <div class="hfgjghjghmty7u765uhgjf" style="width:100%;max-width:360px;display:inline-block;vertical-align:middle;font-size:14px;text-align:left">
                    <h3 style="margin:0;padding:0;margin-bottom:20px;margin-top:10px;font-size:24px;color:#353a42">Hi, '.$row["login"].'</h3>
                    <p style="margin:0;padding:0;margin-bottom:20px;font-size:14px;line-height:20px">
                        <strong style="color:#fd8002">
                            Have you forgotten to activate your account?
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
                        <a href="http://cschanger.eu/register.php?active_account='.$row["email_status"].'&id='.$row["id"].'" style="border:5px solid #5597cd;padding:10px 20px;display:inline-block;background-color:#5597cd;font-size:14px;color:#fff;text-decoration:none" target="_blank">Confirm My Account</a>
						<br><small style="font-size:10px"><b>LINK TO CONFIRM ACCOUNT:</b></small><br><small style="font-size:10px">http://cschanger.eu/register.php?active_account='.$row["email_status"].'&id='.$row["id"].'</small>
					</p>

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
    <img src="https://ci3.googleusercontent.com/proxy/Jx-q5noPiP3FDlt5W7im6k_JLT4MmFlx1iImh26i3UEoyc5G4Kpb9ZbcoejWfe800Wt1aQwELGTMRaGZfV1vtA6kT68fQTKGJ3U1TMrEavk4KnYb0HGKbQFDUtUCT0RKqsW8-w1Zf1nqqyzDpfTaWwAzrWuiW05k7Znm6FTG20Cgqg3D3kYtCCoqHRfrmxfiezx3MkLobu82gjyUgQ8EIG52eRF6m1TJf9-HVuDh6A_4sJpEYi_qJ4XF6RIHBp0ByKloLO9cxA2x8YDG3njNPrGm_gWdI-N7fvLdo6iLxzlOlgyL0C-XzfqbYPyk7Tm5R4y4jIasmB-8xmIlBKSWtX3w5JrSDUM=s0-d-e1-ft#https://api.mixpanel.com/track/?ip=1&amp;img=1&amp;data=eyJldmVudCI6ImRpc2NvdW50X3JlY2VpdmVkX21haWxfdmlldyIsInByb3BlcnRpZXMiOnsiYnVsa19yZXF1ZXN0X2lkIjo1MywiZGlzdGluY3RfaWQiOiI0NzA3ODgwNyIsInRva2VuIjoiYzA0ZjI1NGUxNjY3ZTYwYTJlODRhODVjNjY2NTBlMTYifX0=" class="ghfjghjghjmgfhmghjghjf">
                            
                            
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
</tbody></table><div class="fghjhjhnmhgjmfgyhj"></div><div class="adL">


</div></div><div class="fhgjhgnmfghjfgh">


</div></div>';
										$headers = "Content-type: text/html; charset=".$encoding." \r\n";
										$headers .= 'From: CSChanger@cschanger.eu' . "\r\n" .
											'Reply-To: accounts-noreply@cschanger.eu' . "\r\n";
											
										if($success = mail($to, $subject, $message, $headers))
										{
											echo "<br>success - wysłano (chyba:))<br>";
										}
															    }    }?>