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


function renderPhonenumber($number) {

  if(strlen($number) > 10) {
    return "<table border=\"0\" style=\"border: 0;\">
    <tr>
      <td border=\"0\" style=\"border: 0;\">
        <span width=\"11\" style=\"width: 11px;\">
          <img width=\"13\" src=\"https://stackfuel.com/signature/phone_icon.png\" style=\"width: 13px;\"/>
        </span>   
      </td>
      <td border=\"0\" style=\"padding-left: 8px;border: 0;\">
        <span style=\"text-decoration: none;color: #172144;font-size: 12px !important;\">$number</span>
      </td>
    </tr>
  </table>";

} 
return null;
    
    
}




function renderBody($name, $jobTitle, $department, $number1, $number2, $email, $pictureName, $btnLink,$greet) {

    if(strlen($pictureName) <= 5) {
        return "$greet
        <div class=\"StackFuel - Mail Signature\">
        <table width=\"450\" style=\"font-size: small;font-family: Arial;padding: 10px;border: 0;\" border=\"0\">
          <tr>
            <td border=\"0\" style=\"text-align: center; padding-right: 20px;border: 0;padding-bottom: 10px;\">
                <img width=\"130\" src=\"https://stackfuel.com/signature/stackfuel_logo.png\" style=\"width: 130px;\"/> 
                <table border=\"0\" style=\"margin: 0 auto;border: 0;\">
                        <tr>
                            <td border=\"0\" style=\"padding: 0 5px 0 5px;border:0;\">
                                <a href=\"https://stackfuel.com/to/social/facebook-link\" style=\"text-decoration: none;\">
                                    <img width=\"20\" src=\"https://stackfuel.com/signature/facebook_icon.png\" alt=\"facebook\" style=\"width: 20px;\"/> 
                                </a>
                            </td>
                            <td border=\"0\" style=\"padding: 0 5px 0 5px;border:0;\">
                                <a href=\"https://stackfuel.com/to/social/linkedin-link\" style=\"text-decoration: none;\">
                                    <img width=\"20\" alt=\"linkedin\" src=\"https://stackfuel.com/signature/linkedin_icon.png\" style=\"width: 20px;\"/>
                                </a>      
                            </td>
                            <td border=\"0\" style=\"padding: 0 5px 0 5px;border:0;\">
                                <a href=\"https://stackfuel.com/to/social/instagram-link\" style=\"text-decoration: none;\">  
                                <img width=\"20\" alt=\"instagram\" src=\"https://stackfuel.com/signature/instagram_icon.png\" style=\"width: 20px;\"/>
                                </a>    
                             </td>
                        </tr>
                </table>
            </td>
            <td border=\"0\" style=\"border: 0;padding-top: 20px;\">
              <h3 color=\"#172144\" style=\"margin: 0px;font-size: 16px;color: #172144;line-height: 25px\">
                <span>$name</span>
              </h3>
              <p color=\"#172144\" font-size=\"small\" style=\"margin: 0px;color:#172144;font-size: 12px;line-height: 20px;\">
                <span>$jobTitle</span>
              </p>
              <p color=\"#172144\" font-size=\"small\" style=\"margin: 0px;font-weight: 500;color: #172144;font-size: 12px;line-height: 20px;\">
                <span>$department</span><span>&nbsp;|&nbsp;</span><span>StackFuel GmbH</span>
              </p>
              <font border=\"2\" color=\"#377dff\" style=\"color: #377dff;\">_______________________________________</font>
            </td>
          </tr>
            <tr>
            <td border=\"0\" style=\"padding-right: 20px;vertical-align: top;padding-top: 10px;text-align: center;\">
            </td>
              <td border=\"0\" style=\"padding-top: 8px;border: 0;\">
                $number1
                $number2
                <table border=\"0\" style=\"border: 0;\">
                  <tr>
                    <td border=\"0\" style=\"border: 0;\">
                      <span width=\"11\"   style=\"width: 11px;\">
                        <img width=\"13\" src=\"https://stackfuel.com/signature/mail_icon.png\" style=\"display: block;\"/>
                      </span>
                    </td>
                    <td border=\"0\" style=\"padding-left: 8px;border: 0;\">
                      <span style=\"text-decoration: none;color: #172144;font-size: 12px;\">$email</span>
                    </td>
                  </tr>
                </table>
                <table border=\"0\" style=\"border:0;\">
                  <tr>
                    <td border=\"0\" style=\"border: 0;\">
                      <span width=\"11\" style=\"width: 11px;\">
                        <img width=\"13\" src=\"https://stackfuel.com/signature/location_icon.png\" style=\"width: 13px;\"/>
                      </span>
                    </td>
                    <td border=\"0\" style=\"padding-left: 8px;border:0;\">
                      <span color=\"#172144\" style=\"font-size: 12px;color:#172144;text-decoration: none;\">Nostitzstraße 20, 10961 Berlin, DE</span>
                    </td>
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
                      <span style=\"text-decoration: none;color: #172144;font-size: 12px;\">www.stackfuel.com</span>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td border=\"0\" height=\"10\" style=\"padding-right: 20px;border:0;\"></td>
            </tr>
            <tr>
              <td border=\"0\" style=\"border: 0;\"></td>
              <td border=\"0\" style=\"padding-top: 15px;border: 0;padding-bottom: 15px;\">
                <a href=\"$btnLink\" target=\"_blank\" style=\"padding: 12px;border-radius: 3px;background-color: #377dff;font-size: 12px;font-family: Arial, sans-serif;font-weight: 700;color: #ffffff;text-decoration: none;vertical-align: middle;\">Jetzt Beratung buchen!</a>
              </td>
            </tr>
          </table>
        </div> ";
    }

   
    return "$greet
    <div class=\"StackFuel - Mail Signature\">
    <table width=\"450\" style=\"font-size: small;font-family: Arial;padding: 10px;border: 0;\" border=\"0\">
      <tr>
        <td border=\"0\" style=\"text-align: center; padding-right: 20px;border: 0;padding-top: 10px;\">
            <img width=\"100\" src=\"https://stackfuel.com/signature/$pictureName.png\" style=\"width: 100px;\"/>
        </td>
        <td border=\"0\" style=\"border: 0;padding-top: 20px;\">
          <h3 color=\"#172144\" style=\"margin: 0px;font-size: 16px;color: #172144;line-height: 25px\">
            <span>$name</span>
          </h3>
          <p color=\"#172144\" font-size=\"small\" style=\"margin: 0px;color:#172144;font-size: 12px;line-height: 20px;\">
            <span>$jobTitle</span>
          </p>
          <p color=\"#172144\" font-size=\"small\" style=\"margin: 0px;font-weight: 500;color: #172144;font-size: 12px;line-height: 20px;\">
            <span>$department</span><span>&nbsp;|&nbsp;</span><span>StackFuel GmbH</span>
          </p>
          <font border=\"2\" color=\"#377dff\" style=\"color: #377dff;\">_______________________________________</font>
        </td>
      </tr>
        <tr>
        <td border=\"0\" style=\"padding-right: 20px;vertical-align: top;padding-top: 10px;text-align: center;\">
        <img width=\"130\" src=\"https://stackfuel.com/signature/stackfuel_logo.png\" style=\"width: 130px;\"/> 
        <table border=\"0\" style=\"margin: 0 auto;border: 0;\">
            <tr>
                <td border=\"0\" style=\"padding: 0 5px 0 5px;border:0;\">
                    <a href=\"https://stackfuel.com/to/social/facebook-link\" style=\"text-decoration: none;\">
                        <img width=\"20\" src=\"https://stackfuel.com/signature/facebook_icon.png\" alt=\"facebook\" style=\"width: 20px;\"/> 
                    </a>
                </td>
                <td border=\"0\" style=\"padding: 0 5px 0 5px;border:0;\">
                    <a href=\"https://stackfuel.com/to/social/linkedin-link\" style=\"text-decoration: none;\">
                        <img width=\"20\" alt=\"linkedin\" src=\"https://stackfuel.com/signature/linkedin_icon.png\" style=\"width: 20px;\"/>
                    </a>      
                </td>
                <td border=\"0\" style=\"padding: 0 5px 0 5px;border:0;\">
                    <a href=\"https://stackfuel.com/to/social/instagram-link\" style=\"text-decoration: none;\">  
                        <img width=\"20\" alt=\"instagram\" src=\"https://stackfuel.com/signature/instagram_icon.png\" style=\"width: 20px;\"/>
                    </a>    
                </td>
            </tr>
        </table>
        </td>
          <td border=\"0\" style=\"padding-top: 8px;border: 0;\">
            $number1
            $number2
            <table border=\"0\" style=\"border: 0;\">
              <tr>
                <td border=\"0\" style=\"border: 0;\">
                  <span width=\"11\"   style=\"width: 11px;\">
                    <img width=\"13\" src=\"https://stackfuel.com/signature/mail_icon.png\" style=\"display: block;\"/>
                  </span>
                </td>
                <td border=\"0\" style=\"padding-left: 8px;border: 0;\">
                  <span style=\"text-decoration: none;color: #172144;font-size: 12px;\">$email</span>
                </td>
              </tr>
            </table>
            <table border=\"0\" style=\"border:0;\">
              <tr>
                <td border=\"0\" style=\"border: 0;\">
                  <span width=\"11\" style=\"width: 11px;\">
                    <img width=\"13\" src=\"https://stackfuel.com/signature/location_icon.png\" style=\"width: 13px;\"/>
                  </span>
                </td>
                <td border=\"0\" style=\"padding-left: 8px;border:0;\">
                  <span color=\"#172144\" style=\"font-size: 12px;color:#172144;text-decoration: none;\">Nostitzstraße 20, 10961 Berlin, DE</span>
                </td>
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
                  <span style=\"text-decoration: none;color: #172144;font-size: 12px;\">www.stackfuel.com</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td border=\"0\" height=\"10\" style=\"padding-right: 20px;border:0;\"></td>
        </tr>
        <tr>
          <td border=\"0\" style=\"border: 0;\"></td>
          <td border=\"0\" style=\"padding-top: 15px;border: 0;padding-bottom: 15px;\">
            <a href=\"$btnLink\" target=\"_blank\" style=\"padding: 12px;border-radius: 3px;background-color: #377dff;font-size: 12px;font-family: Arial, sans-serif;font-weight: 700;color: #ffffff;text-decoration: none;vertical-align: middle;\">Jetzt Beratung buchen!</a>
          </td>
        </tr>
      </table>
    </div> ";
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
    renderPhonenumber($handy), 
    renderPhonenumber($telefon), 
    $email, 
    $profilePicture, 
    $btnLink,
    renderGreet($abschiedsGruß, $name)

  );

  
     
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

