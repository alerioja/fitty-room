<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title></title>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<meta name="keywords" content="virtual fitting room, try on glasses">
		<meta name="description" content="This tool allows you to test how sunglasses will look on your face">
		<link rel="stylesheet" type="text/css" href="ucan.css" />
		<script type="text/javascript" src="mootools.js"></script>
		<script type="text/javascript" src="glass.js"></script>
		<!-- <script src="http://ajax.cdnjs.com/ajax/libs/json2/20110223/json2.js"></script> -->
		<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script> -->
		<script type="text/javascript">
		<!--
			var scriptUrl = 'http://192.168.0.1/glass/';
			window.addEvent('domready', function() {
				UCAN.glass.init();
			})
		//-->

		</script>
		 

         
		<!--[if lt IE 7]>
		<script language="JavaScript">
			function pngFix()
			{
				var arVersion = navigator.appVersion.split("MSIE")
				var version = parseFloat(arVersion[1])
				if ((version >= 5.5) && (document.body.filters))
				{
					for(var j=0; j<document.images.length; j++)
					{
						var img = document.images[j]
						var imgName = img.src.toUpperCase()
						if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
						{
							var imgID = (img.id) ? "id='" + img.id + "' " : ""
							var imgClass = (img.className) ? "class='" + img.className + "' " : ""
							var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
							var imgStyle = "display:inline-block;" + img.style.cssText
							if (img.align == "left") imgStyle = "float:left;" + imgStyle
							if (img.align == "right") imgStyle = "float:right;" + imgStyle
							if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
							var strNewHTML = "<span " + imgID + imgClass + imgTitle
							+ " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
							+ "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
							+ "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>"
							img.outerHTML = strNewHTML
							j = j-1
						}
					}
				}
			}
			window.attachEvent("onload", pngFix);
		</script>
		<![endif]-->
	</head>
	<body>

		<div class="page">
			<br>
			<img src="Fitty.png" width="120" height="120" border="0" title="" style="left:0px;top:0px" />

			<div class="col-1">

				<!-- load user image + frames -->
				<div id="glassFrame" class="glassFrame">
					<div class="drager" id="drager" style="display:hidden">&nbsp;</div>
					<!-- user image -->
					<img src="imgs/m/m_1.jpg" width="403" height="500" border="0" title="" id="glassAvatar" class="glassAvatar" style="left:0px;top:0px" />
					<img width="127" height="52" border="0" title="" class="dragInfo" style="top:82px;left:52px;display:hidden"  id="dragInfo" />
					<!-- sunglasses selection -->
					<div class="sunglass-area" id="sunglass-area" style="display:hidden">
						
					</div>
					<div class="control-area-background" id="control-area-background" style="display:none"></div>
					<div class="avtzoom" id="avatar-zoom" style="display:none">
						<div id="myElement" class="slider">
							<div class="knob">
							</div>
						</div>
					</div>
					<div class="glasszoom" id="glass-zoom" style="display:block">
						<div id="glassSlider" class="slider">
							<div class="knob">
							</div>
						</div>
					</div>
					<!-- control area end -->
				</div>
				<!-- avatar img end -->
				<div class="text-desc"><p><a href="/">Upload a new pic</a></p><p>Powered by Visa and Cyber Source</p></div>
				
			</div>
			<div class="col-2">
				<br>
				<div class="glass-select-container">
					<!-- Frame Selector -->
					<br>
						<h1>Fitty™ - A New Way to Shop Eyewear </h1>
						<br>
						<!-- <p>Shop the latest sunglasses trends </p> -->

					<!-- select area end -->
				</div>
				<br>
				<div>
					<!-- recommend glass area start -->
					<div style="margin:15px 0;" id="glass-container">
						<ul class="thumb" id="glass-list">
							<li><a href="javascript:void 0"><img src="imgs/g/g_1_thumb.jpg" width="120" height="60" border="0" title="" /></a><span>Migos</span></li>
							<li><a href="javascript:void 0"><img src="imgs/g/g_2_thumb.jpg" width="120" height="60" border="0" title="" /></a><span>LL Cool J</span></li>
							<li><a href="javascript:void 0"><img src="imgs/g/g_4_thumb.jpg" width="120" height="60" border="0" title="" /></a><span>Demi</span></li>
							<li><a href="javascript:void 0"><img src="imgs/g/g_3_thumb.jpg" width="120" height="60" border="0" title="" /></a><span>Powerpuff</span></li>


						</ul>
						<!-- <div class="clr"></div> -->
					</div>
					<!-- recommend glass area end -->
					
					<div class="glass-info" id="glass-info" style="display:none"></div>
					
					<p>&nbsp;</p>  
				</div>
				<div>
					<!--control button start-->
					&nbsp;
					<!--control button end -->
				</div>
			</div>
			<div class="clr"></div>
		</div>
	</body>



 

</html>