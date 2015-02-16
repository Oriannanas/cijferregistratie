<?php
    define ("DS", DEFINE_SEPERATOR);

    define("ROOT", dirname(__DIR__);
           
    if (isset($_GET['url']))
    {
        $url = $_GET['url'];
    }
    else
    {
        $url = "homePage";
    }
?>

    

<?php echo $url; ?>