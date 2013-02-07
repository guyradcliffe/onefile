<!DOCTYPE html><!-- html 5 doctype -->
<html lang="en">
   <head>
    <title>One File Website</title>
    </head>
    <body>
<?php
// this is a one file website


function makePage ($section, $pagename, $pagenumber) {
  if ($_GET['section']==$section) {  
    $pagename = $_GET['pagename'];
    $pagenumber = $_GET['pagenumber'];
     echo "<ul>" . PHP_EOL;
    if(!$site=simplexml_load_file('xml/site.xml')){
      trigger_error('Error reading XML file',E_USER_ERROR);
    }
    echo $pagenumber;
    foreach($site as $siteinfo):
      $sectionname=$siteinfo['sectionname'];
      $content=$siteinfo->page[$pagenumber]->content;
      if ($siteinfo['sectionname']==$section) {
        echo '<li>' . $sectionname . '</li>' . PHP_EOL;
        echo '<li>' . $pagename . '</li>' . PHP_EOL;
        echo '<li>' . $content . '</li>' . PHP_EOL; 
      }
    endforeach;
    echo "</ul>" . PHP_EOL;
    echo "pagenumber is " . $pagenumber . PHP_EOL;
  }
}

// call a new makePage with section and pagename defined
//makePage('echo','resources');
makePage('eics','verification-credentials',$pagenumber);
//makePage('eics','verification-reports');


?>
</body>
</html>