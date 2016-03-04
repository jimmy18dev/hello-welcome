<?php
$page_title 		= 'Prachindaily ปราจีนเดลี่ ค้นหาข้อมูล จังหวัดปราจีนบุรี';
$page_url 			= 'http://'.$_SERVER['SERVER_NAME'].'/index.php';
$page_image 		= 'http://'.$_SERVER['SERVER_NAME'].'/images/cover.jpg';
$page_description 	= 'เว็บอันดับหนึ่งของปราจีนบุรี คุณสามารถ ค้นหา ร้านอาหาร ท่องเที่ยว ที่พัก หอพัก เบอร์โทรศัพท์หรือสอบถามเส้นทาง หนึ่งในความร่วมมือของคนปราจีนบุรี';
?>
<!doctype html>
<html lang="en-US" itemscope itemtype="http://schema.org/Blog" prefix="og: http://ogp.me/ns#">
<head>

<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->

<!-- Meta Tag -->
<meta charset="utf-8">

<!-- Viewport (Responsive) -->
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="user-scalable=no">
<meta name="viewport" content="initial-scale=1,maximum-scale=1">

<?php include'favicon.php';?>
<title><?php echo $page_title;?></title>

<!-- Meta Tag Main -->
<link rel="canonical" href="<?php echo $page_url;?>">
<meta name="description" content="<?php echo $page_description;?>"/>
<meta name="keywords" content="<?php echo $metadata['keywords'];?>"/>
<meta property="og:title" content="<?php echo $page_title;?>"/>
<meta property="og:description" content="<?php echo strip_tags($page_description);?>"/>
<meta property="og:url" content="<?php echo $page_url;?>"/>
<meta property="og:image" content="<?php echo $page_image;?>"/>
<meta property="og:type" content="website"/>

<meta property="og:site_name" content="Prachindaily"/>
<meta property="fb:app_id" content="218590748331719"/>
<meta property="fb:admins" content="1818320188"/>

<meta name="author" content="Prachindaily">
<meta name="generator" content="landing 1.0"/>

<meta itemprop="name" content="<?php echo $page_title;?>">
<meta itemprop="description" content="<?php echo $page_description;?>">
<meta itemprop="image" content="<?php echo $page_image;?>">

<!-- CSS -->
<link rel="stylesheet" href="css/reset.css" type="text/css"/>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/style4.css" />

</head>
<body id="page">
	<ul class="cb-slideshow">
		<li><span>Image 01</span><!-- <div><h3>se·ren·i·ty</h3></div> --></li>
        <li><span>Image 02</span><!-- <div><h3>com·po·sure</h3></div> --></li>
        <li><span>Image 03</span><!-- <div><h3>e·qua·nim·i·ty</h3></div> --></li>
        <li><span>Image 04</span><!-- <div><h3>bal·ance</h3></div> --></li>
        <li><span>Image 05</span><!-- <div><h3>qui·e·tude</h3></div> --></li>
        <li><span>Image 06</span><!-- <div><h3>re·lax·a·tion</h3></div> --></li>
    </ul>

    <div class="filter">
    	<div class="container">
    		<h1>Prachindaily</h1>
    		<p>The Power of People. หนึ่งในความร่วมมือของคนปราจีนบุรี</p>
    		<p class="link">
    			<a href="https://www.facebook.com/prachindaily" target="_blank" title="ติดตามเรื่องต่างๆ ที่เกิดขึ้นในแต่ละวัน">Facebook Page</a>
    			<a href="http://report.prachindaily.com" target="_blank" title="Report เป็นเว็บไซต์ที่จะรวบรวมเรื่องราวความเดือดร้อน">ร้องทุกข์</a>
    			<a href="https://www.facebook.com/messages/prachindaily" target="_blank" title="ติดต่อปราจีนเดลี่ทาง inbox">ติดต่อเรา</a>
    		</p>
    	</div>
    </div>

    <div class="credit">Design by <a href="http://tympanus.net/codrops/2012/01/02/fullscreen-background-image-slideshow-with-css3" target="_blank" title="Fullscreen Background Image Slideshow with CSS3">Mary Lou</a></div>

<script type="text/javascript" src="js/modernizr.js"></script>
</body>
</html>