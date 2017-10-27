<!DOCTYPE html>
<html>
<head>
    <title>-Pragnya'15-</title>
    <link rel="shortcut icon" href="images\p.png">
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    })
    </script>
</script>
</head>
<body>
<div id="hidethisone"></div>
        <div class="loader" align="center">
        <video width="100%" height="700" autoplay loop muted>
            <source src="pragnya.mp4" type="video/mp4">
            Annual technical symposium of Gokaraju Rangaraju Institute of Engineering and Technology.
        </video>
    </div>
    <div id="main_div">
        <section id="main_head">
            <p style="position:absolute;left:1%;padding:20px;font-family:Eras Light ITC;font-size:16px;">8th, 9th and 10th</p>
            <a href="menu.html" style="text-decoration:none;color:white;"><img src="images/pragnya.png" style="width:180px;height60px;position:absolute;left:42%;"></a>
            <img src="images\wifi_net.png" width="54" height="28" style="position:absolute;right:1%;padding:14px;">
        </section>
        <section id="main_section">
            <div id="ba"></div>
            <a href="about.html"><img src="images\about.png" id="imageabt" class="image1"></a>
            <a href="hospitality.html"><img src="images\hospitality.png" id="imagehos" class="image2"></a>
            <a href="sponsor.html"><img src="images\sponsor.png" id="imagespo" class="image3" style="position:absolute;left:44%;"></a>
            <a href="culturals.html"><img src="images\cul.png" id="imagecul" class="image2" style=""></a>
            <a href="videos.html"><img src="images\video.png" id="imagevid" class="image1" style=""></a>
            <a href="regi.html"><img src="images\registration.png" id="imagereg" class="image1" style="position:absolute;top:45%"></a>
            <a href="workshops.html"><img src="images\workshop1.png" id="imagework" class="image2" style=""></a>
            <a href="index.html"><img src="images\home.png" id="imagehome" class="image4" style="position:absolute;top:36%;left:42%;"></a>
            <a href="events.html"><img src="images\events.png" id="imageeve" class="image2" style=""></a>
            <a href="https://www.facebook.com/pragnya4griet?fref=ts"><img src="images\facebook.png" id="imagefb" class="image1" style="position:absolute;top:45%;"></a>
            <a href="https://www.youtube.com/channel/UCu827K0w2VutNCt9ayD9Dmg"><img src="images\youtube.png" id="imageyou" class="image1" style="position:absolute;"></a>
            <a href="gal.html"><img src="images\gallery.png" id="imagegal" class="image2" style=""></a>
            <a href="ppt.html"><img src="images\ppt.png" id="imageppt" class="image3" style="position:absolute;left:44%;"></a>
            <a href="contact.html"><img src="images\contact.png" id="imagecon" class="image2" style=""></a>
            <a href="faq.html"><img src="images\faq.png" id="imagefaq" class="image1" style=""></a>
        </section>
        <footer id="main_footer">
            <p style="padding:6px;padding-left:1.5%;font-size:22px;">Visitors:</p>
            <p style="padding:3px 6px;font-size:25px;">
            <?php
                $myfile = fopen("counter.txt", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("counter.txt"));
                fclose($myfile);
            ?>
            </p>
            <a href="index.html"><img src="images\hom.png" id="home_icon" style="padding-left:2%;"></a>
            <p id="copyrights">&copy; <span id="headings">PRAGNYA-GRIET</span><br><span>(Apps Theme)</span></p>
        </footer>
    </div>
</body>
</html>
<?php
    $filename='counter.txt';
    $ip_filename='ip.txt';
    function int_cout(){
        $ip=$_SERVER['REMOTE_ADDR'];
        global $filename, $ip_filename;
        if(!in_array($ip, file($ip_filename,FILE_IGNORE_NEW_LINES))){
        $current_value = (file_exists($filename))?file_get_contents($filename):0;
        file_put_contents($ip_filename, $ip."\n",FILE_APPEND);
        file_put_contents($filename, ++$current_value);}
    }   
    int_cout();
?> 