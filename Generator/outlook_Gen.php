<?php 


function renderBanner($checkOutput) {
  if($checkOutput) {
    return "<td>
              <tr>
                <td height=\"20\" style=\"height: 20px\"></td>
              </tr>
               <tr>
                <td><a href=\"https://stackfuel.com/de/trainings/data-awareness/\"><img src=\"./campagne/banner.jpeg\" alt=\"banner\" /></a></td>
              </tr>
          </td>";
  } 
    return null;
  
  
}

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
    return "<tr>
<td colspan=\"2\" height=\"7\" style=\"height: 7px\"></td>
</tr>
<tr>
<td color=\"#172144\" style=\"font-weight: 500;font-size: 9pt;font-family: Arial, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;\">
<img src=\"https://stackfuel.com/signature/phone_icon.png\" width=\"13\" height=\"13\" alt=\"phone-icon\" style=\"width: 13px; height: 13px;\" />
<span>&nbsp;&nbsp;&nbsp;$number</span>
</td>
<td color=\"#172144\" style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">&nbsp;</td>
</tr>";

} 
return null;
    

    
    
}

function renderProfilePicture($name, $number1, $number2, $spacer = true, $spacerHeight = 8) {

    // Wenn Name zu kurz ist, gib Null aus
    if(strlen($name) <= 5) {
        return null;
    } 

    $result = "";

    if($spacer) {
        $result .= "<tr><td colspan=\"3\" height=\"$spacerHeight\" style=\"height: ${spacerHeight}px\"></td></tr>";
        
    }

    
    $result .= "
    <tr>
    <td align=\"left\" style=\"padding: 0cm 0cm 0cm 0cm; text-align: left\">
    <span style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">
    <img border=\"0\" width=\"100\" height=\"100\" src=\"https://stackfuel.com/signature/$name.png\" alt=\"Profile Picture\" style=\"width: 100px; height: 100px;\"/> 
    </span>
    </td>
    <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">&nbsp;</td>
    <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">&nbsp;</td>
    </tr>";

    return $result;
}



function renderBody($name, $jobTitle, $department, $number1, $number2, $email, $picture, $btnLink,$greet, $banner, $spacerHeight = 12) {

    if(is_null($number1) && is_null($number2) && is_null($picture)) {
        $spacerHeight = 12;
    } elseif(is_null($number1) && is_null($number2)) {
      $spacerHeight = 3;
    }
        

    return "$greet
    <div class=\"Stac6Fuel - Mail Signature\">
    <table align=\"left\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
    <tr>
       <td>
         <hr size=\"1\" align=\"center\" color=\"#ffffff\" style=\"color:#ffffff;text-align: center;\"/>
       </td>
    </tr>
       <tr>
         <td>
           <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"text-align: left;\"> $picture
             <tr>
               <td colspan=\"3\" height=\"${spacerHeight}\" style=\"height:${spacerHeight}px\"></td> 
             </tr>
             <tr>
               <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;\">
                 <span>
                   <img src=\"https://stackfuel.com/signature/stackfuel_logo.png\" width=\"130\" height=\"37\" alt=\"StackFuel Logo\" style=\"width: 130px; height: 37px\"/>
                 </span>          
               </td>
               <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">&nbsp;&nbsp;&nbsp;&nbsp;</td>
               <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">&nbsp;&nbsp;&nbsp;&nbsp;</td>  
             </tr>
             <tr>
               <tr>
                 <td colspan=\"3\" height=\"${spacerHeight}\" style=\"height:${spacerHeight}px\"></td>
               </tr>
             </tr>
             <tr>
               <td>
                 <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"text-align: left;\">
                   <td>&nbsp;&nbsp;</td>
                     <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;width: 20px;height: 20px;\">
                       <a href=\"https://stackfuel.com/to/social/facebook-link\">
                         <img width=\"20\" height=\"20\" src=\"https://stackfuel.com/signature/facebook_icon.png\" alt=\"FB\" style=\"width: 20px; height: 20px;\"/>
                       </a> 
                     </td>
                     <td>&nbsp;&nbsp;</td>
                     <td>&nbsp;&nbsp;</td>
                     <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;width: 20px;height: 20px;\">
                       <a href=\"https://stackfuel.com/to/social/linkedin-link\">
                         <img width=\"20\" height=\"20\" src=\"https://stackfuel.com/signature/linkedin_icon.png\" alt=\"LI\" style=\"width: 20px; height: 20px\">
                       </a> 
                     </td>
                     <td>&nbsp;&nbsp;</td>
                     <td>&nbsp;&nbsp;</td>
                     <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;width: 20px;height: 20px;\">
                       <a href=\"https://stackfuel.com/to/social/instagram-link\">
                         <img width=\"20\" height=\"20\" src=\"https://stackfuel.com/signature/instagram_icon.png\" alt=\"IG\" style=\"width: 20px; height: 20px;\"/>
                       </a> 
                     </td>
                     <td>&nbsp;&nbsp;</td>
                 </table>
               </td>
               <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">&nbsp;&nbsp;&nbsp;&nbsp;</td>  
               <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">&nbsp;&nbsp;&nbsp;&nbsp;</td>  
             </tr>
           </tbody>
           </table>
         <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"40%\" style=\"text-align: left;\">
           <tr>
             <td rowspan=\"23\" style=\"font-size: 6pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\"><font size=\"4\">&nbsp;</font></td>
             <td style=\"font-size: 6pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\"><font size=\"4\">&nbsp;</font></td>
             <td style=\"font-size: 6pt;font-family: Arial, Helvetica, sans-serif;color: #666666;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\" ><font size=\"4\">&nbsp;</font></td>
           </tr>
           <tr>
             <td style=\"font-weight: 600;font-size: 12pt;font-family: Arial, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;\">$name</td>
             <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">&nbsp;</td>
           </tr>
           <tr>
             <td colspan=\"2\" height=\"4\" style=\"height: 4px\"></td>
           </tr>
           <tr>
             <td style=\"font-weight: 300;font-size: 9pt;font-family: Arial, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;\">$jobTitle</td>
             <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">&nbsp;</td>
           </tr>
           <tr>
             <td colspan=\"2\" height=\"4\" style=\"height: 4px\"></td>
           </tr>
           <tr>
             <td style=\"font-weight: 300;font-size: 9pt;font-family: Arial, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;\">$department | StackFuel GmbH</td>
             <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">&nbsp;</td>
           </tr>
           <tr>
             <td colspan=\"2\" height=\"4\" style=\"height: 4px\"></td>
           </tr>
           <tr>
             <td height=\"1\" colspan=\"2\" style=\"font-size: 11px;font-family: Arial, Helvetica, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;height: 1px;\"><font border=\"2\" color=\"#377dff\" style=\"color: #377dff;\">_______________________________________</font></td>
           </tr>
           <tr>
             <td colspan=\"2\" height=\"8\" style=\"height: 8px\"></td>
           </tr>
            $number1
            $number2
           <tr>
             <td colspan=\"2\" height=\"7\" style=\"height: 7px\"></td>
           </tr>
           <tr>
             <td color=\"#172144\" style=\"font-weight: 500;font-size: 9pt;font-family: Arial, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;\">
               <img src=\"https://stackfuel.com/signature/mail_icon.png\" width=\"13\" height=\"13\" alt=\"email-icon\" style=\"width: 13px; height: 13px;\"/>
               <span>&nbsp;&nbsp;&nbsp;$email</span>
             </td>
             <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">&nbsp;</td>
           </tr>
           <tr>
             <td colspan=\"2\" height=\"7\" style=\"height: 7px\"></td>
           </tr>
           <tr>
             <td color=\"#172144\" style=\"font-weight: 500;font-size: 9pt;font-family: Arial, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;\">
               <img src=\"https://stackfuel.com/signature/link_icon.png\" width=\"13\" height=\"13\" style=\"width: 13px; height: 13px;\"/>
               <span>&nbsp;&nbsp;&nbsp;www.stackfuel.com</span>
             </td>
             <td style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">&nbsp;</td>
           </tr>
           <tr>
             <td colspan=\"2\" height=\"7\" style=\"height: 7px\"></td>
           </tr>
           <tr>
             <td color=\"#172144\" style=\"font-weight: 500;font-size: 9pt;font-family: Arial, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;\">
               <img src=\"https://stackfuel.com/signature/location_icon.png\" width=\"13\" height=\"13\" style=\"width: 13px; height: 13px;\"/>
               <span>&nbsp;&nbsp; Nostitzstraße 20, 10961 Berlin, DE</span>
             </td>
             <td color=\"#172144\" style=\"font-size: 8pt;font-family: Arial, Helvetica, sans-serif;color: #172144;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">&nbsp;</td>
           </tr>
           <tr>
             <td colspan=\"2\" height=\"20\" style=\"height: 20px\"></td>
           </tr>
           <tr>
             <td>
               <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#377dff\" style=\"background-color: #377dff;text-align: left;\">
                 <tr>
                   <td colspan=\"3\" height=\"8\" style=\"height: 8px\"></td>
                 </tr>
                 <tr>
                   <td rowspan=\"1\" width=\"8\" style=\"width: 8px\"></td>
                   <td align=\"center\" style=\"vertical-align: middle;text-align: center;\">   
                     <a href=\"$btnLink\" target=\"_blank\" alt=\"button\" style=\"font-weight: 800;font-size: 9pt;font-family: Arial, Helvetica, sans-serif;color: #ffffff;padding: 0cm 0cm 0cm 0cm;white-space: nowrap;text-decoration: none;\">Jetzt Beratung buchen!</a>
                   </td>
                   <td rowspan=\"1\" width=\"8\" style=\"width: 8px\"></td>
                 </tr>
                 <tr>
                   <td colspan=\"3\" height=\"8\" style=\"height: 8px\"></td>
                 </tr>
               </table>
             </td>
           </tr>
         </table>
       </td>
       $banner
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
  $checkYes = $_POST["bannerYes"];
  $checkOutput = isset($checkYes) ? $checkYes : null;
  
  

  
  

  $renderBody = renderBody(
    $name, 
    $jobTitel, 
    $abteilung, 
    renderPhonenumber($handy), 
    renderPhonenumber($telefon), 
    $email, 
    renderProfilePicture($profilePicture, $handy, $telefon), 
    $btnLink,
    renderGreet($abschiedsGruß, $name),
    renderBanner($checkOutput)
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
        isset($abschiedsGruß) ||
        isset($checkOutput)
        ) {
        echo $renderBody;
        echo "<br />";
        echo "<br />";
        echo "<div style=\"width: 500px; height: 500px;text-align: right;\">
                <a style=\"border-radius: 40px;box-shadow: 0px 0px 20px 0px rgb(0 0 0 / 15%);color: #fff;background-color: #172144;padding: 10px;font-family: Arial, sans-serif;text-decoration: none;\" href=\"signature.html\" download>Download</a>
              </div>";
             
    } 
    
  


?>

