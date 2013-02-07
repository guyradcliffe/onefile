<?php
include 'onefile-include.php';
$site = new SimpleXMLElement($xmlstr);
?>
<!DOCTYPE html><!-- html 5 doctype -->
<html lang="en">
  <head>
    <title><?php echo $site->sections->{$_GET['section']}->{$_GET['pagename']}->headline ?></title>
    <style type="text/css">
    a:hover {text-decoration:none;}
    ul {margin:0 0 0 5px; padding:0;}
    ul li {margin:0 0 5px 5px; font-weight:bold;}
    ul li ul li {margin:0 0 5px 10px; list-style-type:disc; font-weight:normal;}
    h1 {margin-top:0;}
    </style>
  </head>
  <body style="background:#888; font-family:san-serif, 'Helvetica'">
    <div style='width:1000px; margin:100px auto 0 auto; background:#fff; padding:15px; overflow:hidden;'>
      <div style='width:275px; height:100%; float:left;'><!-- menu div-->
        <ul style='list-style:none;'>
          <li>About ECFMG
            <ul>
              <li><a href='/about/staff/'>Senior Staff</a></li>
            </ul>
          </li>
          <li>ECHO 
            <ul>
              <li><a href='/echo/about/'>About ECHO</a></li>
              <li><a href='/echo/acgme/'>ACGME Core Competencies</a></li>
              <li><a href='/echo/team/'>Health Care Team</a></li>
            </ul>
          </li>
          <li>EICS
            <ul>
              <li><a href='/eics/about/'>About EICS</a></li>
              <li><a href='/eics/credentials/'>Verification of Credentials</a></li>
              <li><a href='/eics/physicians/'>EICS For Physicians</a></li>
              <li><a href='/eics/reports/'>Credentials Verification Reports</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div style='width:725px; float:right;'>
        <?php
        echo "<h1>" . $site->sections->{$_GET['section']}->{$_GET['pagename']}->headline . "</h1>" . PHP_EOL;
        echo "<p>" . $site->sections->{$_GET['section']}->{$_GET['pagename']}->content . "</p>" . PHP_EOL;
        ?>
      </div><!-- close float right div -->
    </div><!-- close 1000px div -->
  </body>
</html>