<?php 

function renderGreet($greet, $name) {
  if(strlen($greet) >= 5) {
    return "<table style=\"font-size: 11pt;font-family: Calibri, sans-serif;border: 0;color: inherit;font-weight: 400;padding: 0;line-height: 16px;\" border=\"0\">
              <tr>
                <td style=\"font-size: 11pt;font-family: Calibri, sans-serif;border: 0;color: inherit;font-weight: 400;padding: 0;\">$greet</td>
               </tr>
              <tr>
                <td style=\"font-size: 11pt;font-family: Calibri, sans-serif;border: 0;color: inherit;font-weight: 400;padding: 0;\">$name</td>
              </tr>
          </table>";
  }
  return null;
}



function renderPhoneNumber($number) {

  if(strlen($number) <= 5) {
    return null;
  }

  return "<table border=\"0\" style=\"border: 0;\">
  <tr>
    <td border=\"0\" style=\"border: 0;\">
      <span width=\"11\" style=\"width: 11px;\">
          <img width=\"13\" src=\"https://stackfuel.com/signature/phone_icon.png\" style=is \"display: block;\"/>
      </span>
    </td>
    <td border=\"0\" style=\"padding-left: 8px;border: 0;\">
        <span style=\"text-decoration: none;;color: #172144;font-size: 9pt;\">$number</span>
    </td>
  </tr>
</table>
<table>
  <tr>
    <td border=\"0\" style=\"border: 0;\"></td>
  </tr>
</table>";
     
}




function renderBody($name,$jobTitle ,$department ,$number1 ,$number2 ,$email ,$picture ,$btnLink, $greet) {

  if(strlen($picture) <= 5) {
    return "$greet
    <div class=\"StackFuel - Mail Signature\">
    <table border=\"0\" width=\"450\" style=\"font-size: small;font-family: Arial;padding: 10px;border: 0;\">
        <tr border=\"1\" style=\"vertical-align: top;border: 0;\">
            <td align=\"center\" style=\"padding-top:15px;padding-right:20px;text-align: center;border: 0;\">
                <table border=\"0\" style=\"border: 0;\">
                    <tr>
                      <td border=\"0\" style=\"border: 0;\">
                        <img width=\"130\" alt=\"Stackfuel_Logo\" src=\"https://stackfuel.com/wp-content/uploads/2021/06/Stackfuel_Logo_blue_safe.png\"/>
                      </td>
                    </tr>
                  </table>
                  <table border=\"0\" style=\"margin: 0 auto;border: 0;\">
                    <tr>
                      <td border=\"0\" style=\"padding: 0 5px 0 5px;border:0;\">
                        <a href=\"https://stackfuel.com/to/social/facebook-link\">
                          <img width=\"20\" alt=\"FB\" src=\"https://stackfuel.com/signature/facebook_icon.png\" style=\"width: 20px;\"/>
                        </a>
                      </td>
                      <td border=\"0\" style=\"padding: 0 5px 0 5px;border:0;\">
                        <a href=\"https://stackfuel.com/to/social/linkedin-link\">
                          <img width=\"20\" alt=\"LI\" src=\"https://stackfuel.com/signature/linkedin_icon.png\" style=\"width: 20px;\"/>
                        </a>
                      </td>
                      <td border=\"0\" style=\"padding: 0 5px 0 5px;border:0;\">
                        <a href=\"https://stackfuel.com/to/social/instagram-link\">
                          <img width=\"20\" alt=\"IG\" src=\"https://stackfuel.com/signature/instagram_icon.png\" style=\"width: 20px;\"/>
                        </a>
                      </td>
                    </tr>
                  </table>
            </td>
            <td align=\"left\" border=\"0\" style=\"border: 0;padding-top: 40px;text-align: left;\">
              <table border=\"0\" style=\"border: 0;\">
                <tr>
                  <td border=\"0\" style=\"border: 0;color: #172144;font-size: 12pt;font-weight: bold;font-family: Arial, sans-serif;padding-bottom: 2px;\">
                    <span style=\"color: #172144;font-size: 12pt;font-weight: bold;font-family: Arial, sans-serif;\">$name</span>
                </td>
                  <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
                <tr>
                  <td border=\"0\" style=\"border: 0;padding-bottom: 2px;\">
                    <span style=\"font-weight: 300;font-size: 9pt;font-family: Arial, sans-serif;color: #172144;\">$jobTitle</span>
                </td>
                  <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
                <tr>
                  <td border=\"0\" style=\"border: 0;\">
                    <span style=\"font-weight: 300;font-size: 9pt;font-family: Arial, sans-serif;color: #172144;\">$department&nbsp;|&nbsp;StackFuel GmbH</span>
                </td>
                <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
                <tr>
                  <td border=\"0\" style=\"border: 0;\">
                    <font border=\"2\" color=\"#377dff\" style=\"color: #377dff;width: 100%;\">____________________________________</font>
                  </td>
                  <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
              </table>
            </td>
        </tr>
        <tr> 
            <td border=\"0\" style=\"padding-right: 20px;vertical-align: top;padding-top: 9px;text-align: center;border: 0;\"></td>
            <td border=\"0\" style=\"border: 0;padding-top: 12px;\">
              <table border=\"0\" style=\"border: 0;\">
                <tr>
                  <td border=\"0\" style=\"border: 0;\">
                    <span width=\"11\" style=\"width: 11px;\">
                        <img width=\"13\" src=\"https://stackfuel.com/signature/phone_icon.png\" style=\"display: block;\"/>
                    </span>
                  </td>
                  <td border=\"0\" style=\"padding-left: 8px;border: 0;\">
                      <span style=\"text-decoration: none;;color: #172144;font-size: 9pt;\">$number1</span>
                  </td>
                </tr>
              </table>
              <table>
                <tr>
                  <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
              </table>
              <table border=\"0\" style=\"border: 0;\">
                <tr>
                  <td border=\"0\" style=\"border: 0;\">
                    <span width=\"11\" style=\"width: 11px;\">
                        <img width=\"13\" src=\"https://stackfuel.com/signature/mail_icon.png\" style=\"width: 13px;\"/> 
                    </span>
                    </td>
                    <td border=\"0\" style=\"padding-left: 8px;border: 0;\">
                      <span style=\"text-decoration: none;color: #172144;font-size: 9pt;\">$email</span>
                    </td>
                  </tr>
              </table>
              <table>
                <tr>
                  <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
              </table>
              <table border=\"0\" style=\"border: 0;\">
                <tr>
                  <td border=\"0\" style=\"border: 0;\">
                    <span width=\"11\" style=\"width: 11px;\">
                        <img width=\"13\" src=\"https://stackfuel.com/signature/link_icon.png\" style=\"width: 13px;\"/>   
                    </span>
                  </td>
                  <td border=\"0\" style=\"padding-left: 8px;border: 0;\">
                      <span style=\"text-decoration: none;color: #172144;font-size: 9pt;\">www.stackfuel.com</span>
                  </td>
                </tr>
              </table>
              <table>
                <tr>
                  <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
              </table>
              <table border=\"0\" style=\"border:0;\">
                <tr>
                  <td border=\"0\" style=\"border: 0;\">
                    <span>
                      <img width=\"13\" src=\"https://stackfuel.com/signature/location_icon.png\" style=\"width: 13px;\"/>  
                    </span>
                  </td>
                  <td border=\"0\" style=\"padding-left: 8px;border: 0;\">
                    <span style=\"text-decoration: none;color: #172144;font-size: 9pt;\">Nostitzstraße 20, 10961 Berlin, DE</span>
                  </td>
                </tr>
              </table>
            </td>
        </tr>
        <tr>
            <td border=\"0\" size=\"3\" style=\"border: 0;\">&nbsp;</td>
            <td border=\"0\" size=\"3\" style=\"border: 0;\">&nbsp;</td>
        </tr>
        <tr>
            <td border=\"0\" style=\"border: 0;\"></td>
            <td border=\"0\" style=\"padding-top: 15px;padding-bottom: 15px;border: 0;\">
              <a href=\"$btnLink\" target=\"_blank\" style=\"padding: 12px;border-radius: 3px;background-color: #377dff;font-size: 12px;font-family: Arial, sans-serif;font-weight: 700;color: #ffffff;text-decoration: none;vertical-align: middle;\">
                <span color=\"#ffffff\" style=\"color: #ffffff;font-size: 12px;font-family: Arial, sans-serif;font-weight: 700;\">Jetzt Beratung buchen!</span>
              </a>
            </td>
        </tr>
    </table>
    </div>";
  }

    return "$greet
    <div class=\"StackFuel - Mail Signature\">
    <table border=\"0\" width=\"450\" style=\"font-size: small;font-family: Arial;padding: 10px;border: 0;\">
        <tr border=\"1\" style=\"vertical-align: top;border: 0;\">
            <td align=\"center\" style=\"padding-top:20px;padding-right:20px;text-align: center;border: 0;\">
            <img width=\"100\" alt=\"profile_picture\" src=\"https://stackfuel.com/signature/$picture.png\" style=\"width: 100px;\"/>
            </td>
            <td align=\"left\" border=\"0\" style=\"border: 0;padding-top: 40px;text-align: left;\">
              <table border=\"0\" style=\"border: 0;\">
                <tr>
                  <td border=\"0\" style=\"border: 0;color: #172144;font-size: 12pt;font-weight: bold;font-family: Arial, sans-serif;padding-bottom: 2px;\">
                    <span style=\"color: #172144;font-size: 12pt;font-weight: bold;font-family: Arial, sans-serif;\">$name</span>
                </td>
                  <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
                <tr>
                  <td border=\"0\" style=\"border: 0;padding-bottom: 2px;\">
                    <span style=\"font-weight: 300;font-size: 9pt;font-family: Arial, sans-serif;color: #172144;\">$jobTitle</span>
                </td>
                  <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
                <tr>
                  <td border=\"0\" style=\"border: 0;\">
                    <span style=\"font-weight: 300;font-size: 9pt;font-family: Arial, sans-serif;color: #172144;\">$department&nbsp;|&nbsp;StackFuel GmbH</span>
                </td>
                <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
                <tr>
                  <td border=\"0\" style=\"border: 0;\">
                    <font border=\"2\" color=\"#377dff\" style=\"color: #377dff;width: 100%;\">____________________________________</font>
                  </td>
                  <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
              </table>
            </td>
        </tr>
        <tr> 
        <td border=\"0\" style=\"padding-right: 20px;vertical-align: top;padding-top: 9px;text-align: center;border: 0;\">
        <table border=\"0\" style=\"border: 0;\">
          <tr>
            <td border=\"0\" style=\"border: 0;\">
              <img width=\"130\" alt=\"Stackfuel_Logo\" src=\"https://stackfuel.com/signature/stackfuel_logo.png\"/>
            </td>
          </tr>
        </table>
        <table border=\"0\" style=\"margin: 0 auto;border: 0;\">
          <tr>
            <td border=\"0\" style=\"padding: 0 5px 0 5px;border:0;\">
              <a href=\"https://stackfuel.com/to/social/facebook-link\">
                <img width=\"20\" alt=\"FB\" src=\"https://stackfuel.com/signature/facebook_icon.png\" style=\"width: 20px;\"/>
              </a>
            </td>
            <td border=\"0\" style=\"padding: 0 5px 0 5px;border:0;\">
              <a href=\"https://stackfuel.com/to/social/linkedin-link\">
                <img width=\"20\" alt=\"LI\" src=\"https://stackfuel.com/signature/linkedin_icon.png\" style=\"width: 20px;\"/>
              </a>
            </td>
            <td border=\"0\" style=\"padding: 0 5px 0 5px;border:0;\">
              <a href=\"https://stackfuel.com/to/social/instagram-link\">
                <img width=\"20\" alt=\"IG\" src=\"https://stackfuel.com/signature/instagram_icon.png\" style=\"width: 20px;\"/>
              </a>
            </td>
          </tr>
        </table>
        </td>
            <td border=\"0\" style=\"border: 0;padding-top: 12px;\">
              <table border=\"0\" style=\"border: 0;\">
                <tr>
                  <td border=\"0\" style=\"border: 0;\">
                    <span width=\"11\" style=\"width: 11px;\">
                        <img width=\"13\" src=\"https://stackfuel.com/signature/phone_icon.png\" style=is \"display: block;\"/>
                    </span>
                  </td>
                  <td border=\"0\" style=\"padding-left: 8px;border: 0;\">
                      <span style=\"text-decoration: none;;color: #172144;font-size: 9pt;\">$number1</span>
                  </td>
                </tr>
              </table>
              <table>
                <tr>
                  <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
              </table>
              $number2
              <table border=\"0\" style=\"border: 0;\">
                <tr>
                  <td border=\"0\" style=\"border: 0;\">
                    <span width=\"11\" style=\"width: 11px;\">
                        <img width=\"13\" src=\"https://stackfuel.com/signature/mail_icon.png\" style=\"width: 13px;\"/>  
                    </span>
                    </td>
                    <td border=\"0\" style=\"padding-left: 8px;border: 0;\">
                      <span style=\"text-decoration: none;color: #172144;font-size: 9pt;\">$email</span>
                    </td>
                  </tr>
              </table>
              <table>
                <tr>
                  <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
              </table>
              <table border=\"0\" style=\"border: 0;\">
                <tr>
                  <td border=\"0\" style=\"border: 0;\">
                    <span width=\"11\" style=\"width: 11px;\">
                        <img width=\"13\" src=\"https://stackfuel.com/signature/link_icon.png\" style=\"width: 13px;\"/>   
                    </span>
                  </td>
                  <td border=\"0\" style=\"padding-left: 8px;border: 0;\">
                      <span style=\"text-decoration: none;color: #172144;font-size: 9pt;\">www.stackfuel.com</span>
                  </td>
                </tr>
              </table>
              <table>
                <tr>
                  <td border=\"0\" style=\"border: 0;\"></td>
                </tr>
              </table>
              <table border=\"0\" style=\"border:0;\">
                <tr>
                  <td border=\"0\" style=\"border: 0;\">
                    <span>
                      <img width=\"13\" src=\"https://stackfuel.com/signature/location_icon.png\" style=\"width: 13px;\"/>  
                    </span>
                  </td>
                  <td border=\"0\" style=\"padding-left: 8px;border: 0;\">
                    <span style=\"text-decoration: none;color: #172144;font-size: 9pt;\">Nostitzstraße 20, 10961 Berlin, DE</span>
                  </td>
                </tr>
              </table>
            </td>
        </tr>
        <tr>
            <td border=\"0\" size=\"3\" style=\"border: 0;\">&nbsp;</td>
            <td border=\"0\" size=\"3\" style=\"border: 0;\">&nbsp;</td>
        </tr>
        <tr>
            <td border=\"0\" style=\"border: 0;\"></td>
            <td border=\"0\" style=\"padding-top: 15px;padding-bottom: 15px;border: 0;\">
              <a href=\"$btnLink\" target=\"_blank\" style=\"padding: 12px;border-radius: 3px;background-color: #377dff;font-size: 12px;font-family: Arial, sans-serif;font-weight: 700;color: #ffffff;text-decoration: none;vertical-align: middle;\">
                <span color=\"#ffffff\" style=\"color: #ffffff;font-size: 12px;font-family: Arial, sans-serif;font-weight: 700;\">Jetzt Beratung buchen!</span>
              </a>
            </td>
        </tr>
    </table>
    </div>";
      
}





  $name = $_POST["name"];
  $jobTitel = $_POST["jobtitel"];
  $abteilung = $_POST["abteilung"];
  $profilePicture = $_POST["profilePicture"];
  $handy = $_POST["handy"];
  $telefon = $_POST["telefon"];
  $email = $_POST["email"];
  $btnLink = $_POST["btnLink"];
  $abschiedsGruß = $_POST["abschiedsgruss"];


  $renderBody = renderBody(
    $name, 
    $jobTitel, 
    $abteilung, 
    $handy, 
    renderPhonenumber($telefon), 
    $email, 
    $profilePicture, 
    $btnLink,
    renderGreet($abschiedsGruß, $name)

  );   


  $myfile = fopen("signature.html", "w") or die("Unable to open file!");
  fwrite($myfile, $renderBody);
  fclose($myfile);


    if(isset($name) || isset($jobTitel) || 
    isset($abteilung) || 
    isset($profilePicture) || 
    isset($handy) || 
    isset($telefon) || 
    isset($email)||
    isset($btnLink) ||
    isset($abschiedsGruß)
    ) {
    echo $renderBody;
    echo "<br />";
    echo "<br />";
    echo "<div style=\"width: 500px; height: 500px;text-align: right;\">
                <a style=\"border-radius: 40px;box-shadow: 0px 0px 20px 0px rgb(0 0 0 / 15%);color: #fff;background-color: #172144;padding: 10px;font-family: Arial, sans-serif;text-decoration: none;\" href=\"signature.html\" download>Download</a>
          </div>";

} 

  
?>

