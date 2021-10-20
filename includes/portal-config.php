<?php

/*
portal-config.php

Used to store all of our IT162 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){

    case 'index.php':
        $title = "Jinhee's IT162 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case 'aia.php':
        $title = "Jinhee's IT162 Title Page";
        $logo = 'fa-universal-access';
        $logo_color = ' style="color:#00f"';
        $PageID = 'AIA';
    break;

    case 'contact.php':
        $title = "Jinhee's IT162 Contact Page";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Contact';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
        $PageID = 'Welcome';
}

//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "WELCOME";
    $nav1['big/index.php'] = "BIG";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "FLOWCHART";
    $nav1['fp/index.php'] = "FINAL PROJECT";
    $nav1['contact.php'] = "CONTACT";
    
/*
here we're creating a function to generate links and keep
the highlight on the current page

      <li><a href="index.php" class="selected">WELCOME</a></li>
      <li><a href="big/index.php">BIG</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">FLOWCHART/LAYOUT</a></li>
      <li><a href="fp/index.php">FINAL PROJECT</a></li>
      <li><a href="contact.php">CONTACT ME</a></li>
*/

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($nav1)
{
    $myReturn = '';

    foreach($nav1 as $url => $text){

        if($url == THIS_PAGE){
            $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
        }else{
            $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
        }
        

    }
  
      
    return $myReturn;    
}


?>
