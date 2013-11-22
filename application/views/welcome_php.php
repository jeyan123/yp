<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="js" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" xmlns:addthis="http://www.addthis.com/help/api-spec" lang="en-US">
<head profile="">
<script src="/application/json/shares.json" type="text/javascript"></script>
<script src="/application/js//auth014.js" type="text/javascript"></script>
<script src="/application/js/client.js" async="" type="text/javascript" id="LR1"></script>
<script src="/application/js/counter016.js" type="text/javascript"></script>
<link media="all" href="/application/css/counter013.css" type="text/css" rel="stylesheet">
<script src="/application/js/widgets.js" type="text/javascript"></script>
<link media="all" href="/application/css/widget115.css" type="text/css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Installing JBoss 7.1.1.final</title>

<link rel="stylesheet" href="/application/css/style_002.css" type="text/css" media="screen">


<script src="/application/js/widgets.js" id="twitter-wjs"></script>
<script src="/application/js/ga.js" async="" type="text/javascript"></script><script type="text/javascript">
	document.documentElement.className = 'js';
</script>

<link rel="stylesheet" id="dkoated-cta-buttons-css" href="/application/css/dkoated-cta-buttons.css" type="text/css" media="screen">
<link rel="stylesheet" id="farbtastic-css" href="/application/css/farbtastic.css" type="text/css" media="all">
<link rel="stylesheet" id="jobman-display-css" href="/application/css/display.css" type="text/css" media="all">
<link rel="stylesheet" id="flick-css" href="/application/css/flick.css" type="text/css" media="all">
<link rel="stylesheet" id="mailchimpSF_main_css-css" href="/application/css/a.css" type="text/css" media="all">

<link rel="stylesheet" id="output-css" href="/application/css/output.css" type="text/css" media="all">
<link rel="stylesheet" id="flexslider-css" href="/application/css/flexslider.css" type="text/css" media="all">
<link rel="stylesheet" id="tablepress-default-css" href="/application/css/default.css" type="text/css" media="all">
<link rel="stylesheet" id="et-shortcodes-css-css" href="/application/css/shortcodes.css" type="text/css" media="all">
<link rel="stylesheet" id="lightboxStyle-css" href="/application/css/colorbox.css" type="text/css" media="screen">
<link rel="stylesheet" id="riva-slider-pro-dynamic-css-css" href="/application/css/abc4a36c7b1fa873843b9a43ff31418c.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-pagenavi-css" href="/application/css/pagenavi-css.css" type="text/css" media="all">
<link rel="stylesheet" id="fancybox-css" href="/application/css/jquery.css" type="text/css" media="screen">
<link rel="stylesheet" id="et_page_templates-css" href="/application/css/page_templates.css" type="text/css" media="screen">
<script type="text/javascript" src="/application/js/jquery_010.js"></script>
<script type="text/javascript" src="/application/js/jquery_005.js"></script>
<script type="text/javascript" src="/application/js/display.js"></script>
<script type="text/javascript" src="/application/js/scrollTo.js"></script>
<script type="text/javascript" src="/application/js/jquery.js"></script>
<script type="text/javascript" src="/application/js/mailchimp.js"></script>
<script type="text/javascript" src="/application/js/datepicker.js"></script>
<script type="text/javascript" src="/application/js/comment-reply.js"></script>
<script type="text/javascript" src="/application/js/jquery_007.js"></script>
<script type="text/javascript" src="/application/js/flexslider-init.js"></script>
<script type="text/javascript" src="/application/js/et_shortcodes_frontend.js"></script>
<script type="text/javascript" src="/application/js/external-tracking.js"></script>
<link rel="prev" title="Installing JBoss 7.1.1.Final Install on CentOS" href="http://76.102.117.217/">
	<script type="text/javascript">
		jQuery(function($) {
			$('.date-pick').datepicker({
				autoFocusNextInput: true,
				constrainInput: false,
				changeMonth: true,
				changeYear: true,
				beforeShow: function(input, inst) { $('#ui-datepicker-div').addClass('show'); },
				dateFormat: 'yy/mm/dd',
			});			
			
			d = new Date();
			$('.birthdate-pick').datepicker({
				autoFocusNextInput: true,
				constrainInput: false,
				changeMonth: true,
				changeYear: false,
				minDate: new Date(d.getFullYear(), 1-1, 1),
				maxDate: new Date(d.getFullYear(), 12-1, 31),
				beforeShow: function(input, inst) { $('#ui-datepicker-div').removeClass('show'); },
				dateFormat: 'mm/dd',
			});
			
				
		});
	</script>
<!-- All in One SEO Pack 2.0.2 by Michael Torbert of Semper Fi Web Design[376,452] -->
<meta name="description" content="In this tutorial, we will demonstrate how to download, install, start and stop a JBoss 7.1.1.Final server on CentOS 6.x.">

<link rel="canonical" href="http://76.102.117.217/">
<!-- /all in one seo pack -->
<!-- Google Analytics Tracking by Google Analyticator 6.4.4.3: http://www.videousermanuals.com/google-analyticator/ -->
<script type="text/javascript">
	var analyticsFileTypes = [''];
	var analyticsEventTracking = 'enabled';
</script>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-40611189-1']);
        _gaq.push(['_addDevId', 'i9k95']); // Google Analyticator App ID with Google 
        
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
	<style type="text/css">
		#et_pt_portfolio_gallery { margin-left: -15px; }
		.et_pt_portfolio_item { margin-left: 9px; }
		.et_portfolio_small { margin-left: -55px !important; }
		.et_portfolio_small .et_pt_portfolio_item { margin-left: 25px !important; }
		.et_portfolio_large { margin-left: -8px !important; }
		.et_portfolio_large .et_pt_portfolio_item { margin-left: 6px !important; }
		.et_pt_portfolio_item h2 { color: #fff; }
		.et_portfolio_large .et_pt_portfolio_item { width: 412px; }
		.et_portfolio_large .et_portfolio_more_icon { left: 168px; }
		.et_portfolio_large .et_portfolio_zoom_icon { left: 208px; }
	</style>

<script type="text/javascript" src="/application/js/redirection_mobile_0.min"></script>
<script type="text/javascript">
SA.redirection_mobile ({param:"isDefault", mobile_prefix : "m", cookie_hours : "1" });
</script>


<link rel="stylesheet" type="text/css" href="/application/css/wp_social_toolbar.css">
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="/wp-content/plugins/wp-social-toolbar-pro/css/ie.css" />
<![endif]-->
<script type="text/javascript">jQuery.noConflict();(function($){$(document).ready(function(){$(".slidingDiv").hide();$(".show_hide").show();$('.show_hide').click(function(){$(".slidingDiv").slideToggle()})})})(jQuery);</script>
<script src="/application/js/jquery_004.js" type="text/javascript"></script>
<script src="/application/js/355713640436989952" type="text/javascript"></script><script src="/application/js/cmn.js" charset="UTF-8" type="text/javascript"></script><link media="screen" href="/application/css/style.css" rel="stylesheet" type="text/css"><script id="FACommonScript" type="text/javascript" src="/application/js/facommon2.js"></script><style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}
.fb_invisible{display:none}
.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}
.fb_reset > div{overflow:hidden}
.fb_link img{border:none}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}
.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}
.fb_dialog_content{background:#fff;color:#333}
.fb_dialog_close_icon{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px;top:8px\9;right:7px\9}
.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}
.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}
.fb_dialog_close_icon:hover{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}
.fb_dialog_close_icon:active{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}
.fb_dialog_loader{background-color:#f2f2f2;border:1px solid #606060;font-size:24px;padding:20px}
.fb_dialog_top_left,
.fb_dialog_top_right,
.fb_dialog_bottom_left,
.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}
.fb_dialog_top_left{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}
.fb_dialog_top_right{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}
.fb_dialog_bottom_left{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}
.fb_dialog_bottom_right{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}
.fb_dialog_vert_left,
.fb_dialog_vert_right,
.fb_dialog_horiz_top,
.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}
.fb_dialog_vert_left,
.fb_dialog_vert_right{width:10px;height:100%}
.fb_dialog_vert_left{margin-left:-10px}
.fb_dialog_vert_right{right:0;margin-right:-10px}
.fb_dialog_horiz_top,
.fb_dialog_horiz_bottom{width:100%;height:10px}
.fb_dialog_horiz_top{margin-top:-10px}
.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}
.fb_dialog_iframe{line-height:0}
.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #3b5998;color:#fff;font-size:14px;font-weight:bold;margin:0}
.fb_dialog_content .dialog_title > span{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif)
no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}
body.fb_hidden{-webkit-transform:none;height:100%;margin:0;left:-10000px;overflow:visible;position:absolute;top:-10000px;width:100%
}
.fb_dialog.fb_dialog_mobile.loading{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif)
white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}
.fb_dialog.fb_dialog_mobile.loading.centered{max-height:590px;min-height:590px;max-width:500px;min-width:500px}
#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;left:0;top:0;width:100%;min-height:100%;z-index:10000}
#fb-root #fb_dialog_ipad_overlay.hidden{display:none}
.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}
.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0 0, 0 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}
.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%
}
.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px
}
.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px
}
.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0 0, 0 100%, from(#4966A6),
color-stop(0.5, #355492), to(#2A4887));border:1px solid #29447e;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset,
rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}
.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}
.fb_dialog_content .dialog_content{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}
.fb_dialog_content .dialog_footer{background:#f2f2f2;border:1px solid #555;border-top-color:#ccc;height:40px}
#fb_dialog_loader_close{float:left}
.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}
.fb_iframe_widget{display:inline-block;position:relative}
.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}
.fb_iframe_widget iframe{position:absolute}
.fb_iframe_widget_lift{z-index:1}
.fb_hide_iframes iframe{position:relative;left:-10000px}
.fb_iframe_widget_loader{position:relative;display:inline-block}
.fb_iframe_widget_fluid{display:inline}
.fb_iframe_widget_fluid span{width:100%}
.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}
.fb_iframe_widget_loader .FB_Loader{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}
.fb_connect_bar_container div,
.fb_connect_bar_container span,
.fb_connect_bar_container a,
.fb_connect_bar_container img,
.fb_connect_bar_container strong{background:none;border-spacing:0;border:0;direction:ltr;font-style:normal;font-variant:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal;vertical-align:baseline}
.fb_connect_bar_container{position:fixed;left:0 !important;right:0 !important;height:42px !important;padding:0 25px !important;margin:0 !important;vertical-align:middle !important;border-bottom:1px solid #333 !important;background:#3b5998 !important;z-index:99999999 !important;overflow:hidden !important}
.fb_connect_bar_container_ie6{position:absolute;top:expression(document.compatMode=="CSS1Compat"? document.documentElement.scrollTop+"px":body.scrollTop+"px")}
.fb_connect_bar{position:relative;margin:auto;height:100%;width:100%;padding:6px 0 0 0 !important;background:none;color:#fff !important;font-family:"lucida grande", tahoma, verdana, arial, sans-serif !important;font-size:13px !important;font-style:normal !important;font-variant:normal !important;font-weight:normal !important;letter-spacing:normal !important;line-height:1 !important;text-decoration:none !important;text-indent:0 !important;text-shadow:none !important;text-transform:none !important;white-space:normal !important;word-spacing:normal !important}
.fb_connect_bar a:hover{color:#fff}
.fb_connect_bar .fb_profile img{height:30px;width:30px;vertical-align:middle;margin:0 6px 5px 0}
.fb_connect_bar div a,
.fb_connect_bar span,
.fb_connect_bar span a{color:#bac6da;font-size:11px;text-decoration:none}
.fb_connect_bar .fb_buttons{float:right;margin-top:7px}
.fb_edge_widget_with_comment{position:relative;*z-index:1000}
.fb_edge_widget_with_comment span.fb_edge_comment_widget{position:absolute}
.fb_edge_widget_with_comment span.fb_send_button_form_widget{z-index:1}
.fb_edge_widget_with_comment span.fb_send_button_form_widget .FB_Loader{left:0;top:1px;margin-top:6px;margin-left:0;background-position:50% 50%;background-color:#fff;height:150px;width:394px;border:1px #666 solid;border-bottom:2px solid #283e6c;z-index:1}
.fb_edge_widget_with_comment span.fb_send_button_form_widget.dark .FB_Loader{background-color:#000;border-bottom:2px solid #ccc}
.fb_edge_widget_with_comment span.fb_send_button_form_widget.siderender
.FB_Loader{margin-top:0}
.fbpluginrecommendationsbarleft,
.fbpluginrecommendationsbarright{position:fixed !important;bottom:0;z-index:999}
.fbpluginrecommendationsbarleft{left:10px}
.fbpluginrecommendationsbarright{right:10px}</style>
<style>
ul.a {list-style-type:circle;}
ul.b {list-style-type:square;}
ol.c {list-style-type:upper-roman;}
ol.d {list-style-type:lower-alpha;}
</style>
</head>
<body data-twttr-rendered="true" class="page page-id-1547 page-child parent-pageid-921 page-template-default gecko">
<div id="bg1">
<!-- wp social toolbar show box start -->
<div id="wp-social-toolbar" class="wp-social-toolbar-	 wpst_bar_small_bottom" style="display: block;">
			<div id="wp-social-toolbar-show-box">
				<div id="wps-toolbar-show">
				<img src="/application/js/white.png" class="wpsc_show_button">
				</div>    
			</div>
			<div class="wpcs-border">&nbsp;</div>
    <div id="wps-toolbar-content">
    	<div id="wps-toolbar-top">
			<div id="wps-twitter-status"><a href="http://www.twitter.com/opensourcearch" target="_blank"><div id="twitter-feed"><ul><li><p class="tweet">Indian companies opt for open-source softwares to cut costs - The Economic Times <a href="http://t.co/I8Fyjf3RrG" data-expanded-url="http://economictimes.indiatimes.com/tech/ites/indian-companies-opt-for-open-source-softwares-to-cut-costs/articleshow/22424175.cms" target="_blank" title="http://economictimes.indiatimes.com/tech/ites/indian-companies-opt-for-open-source-softwares-to-cut-costs/articleshow/22424175.cms"><span>http://</span><span>economictimes.indiatimes.com/tech/ites/indi</span><span>an-companies-opt-for-open-source-softwares-to-cut-costs/articleshow/22424175.cms</span><span><span>&nbsp;</span>…</span></a></p><p class="timePosted">Posted on 09 Sep</p></li></ul></div></a></div></div>
    <script type="text/javascript" src="/application/js/twitterFetcher_v9_min.js"></script>
    <script>
twitterFetcher.fetch('355713640436989952', '', 1, true, false, true, '', false, handleTweets);

function handleTweets(tweets){
    var x = tweets.length;
    var n = 0;
    var element = document.getElementById('twitter-feed');
    var html = '<ul>';
    while(n < x) {
      html += '<li>' + tweets[n] + '</li>';
      n++;
    }
    html += '</ul>';
    element.innerHTML = html;
}
    </script>
	<div id="wps-toolbar-bottom">
        <div id="wpsc-social-accounts">
			<a href="https://76.102.117.217/about/contact-us/general-sales-contact-form" class="contact-b" title="contact us via phone or email">Contact Us</a><a href="http://www.twitter.com/opensourcearch" title="find us on twitter" target="_blank"><img src="/application/image/twitter.png" alt="twitter" height="30" width="30"></a>					<a href="http://www.facebook.com/pages/Open-Source-Architect/185529624827071" title="find us on facebook" target="_blank"><img src="/application/image/facebook.png" alt="facebook" height="30" width="30"></a><a href="http://www.linkedin.com/company/open-source-architect" title="find us on linkedin" target="_blank"><img src="/application/image/linkedin.png" alt="linkedin" height="30" width="30"></a><a href="http://www.youtube.com/user/learning center" title="find us on youtube" target="_blank"><img src="/application/image/youtube.png" alt="youtube" height="30" width="30"></a><a href="http://pinterest.com/opensourcearch/" title="find us on pinterest" target="_blank"><img src="/application/image/pinterest.png" alt="pinterest" height="30" width="30"></a>
            </div>
	<div id="wpsc-social-counts"> 
		<div class="wpcs-share-icons" style="margin-right:-10px;">
			<iframe data-twttr-rendered="true" title="Twitter Tweet Button" style="width: 109px; height: 20px;" class="twitter-share-button twitter-count-horizontal" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/tweet_button.htm" allowtransparency="true" frameborder="0" scrolling="no"></iframe>  <script type="text/javascript" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/twitter-wjs.js"></script>

						</div>
		<div class="wpcs-share-icons" style="padding-right:10px;"><div class=" fb_reset" id="fb-root"><script async="" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/all.js"></script><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/ping.htm" style="display: none;" allowtransparency="true" name="f2ea08e8f840f6" frameborder="0" scrolling="no"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/xd_arbiter.htm" style="border: medium none;" tab-index="-1" title="Facebook Cross Domain Communication Frame" aria-hidden="true" id="fb_xdm_frame_http" allowtransparency="true" name="fb_xdm_frame_http" frameborder="0" scrolling="no"></iframe><iframe src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/xd_arbiter_002.htm" style="border: medium none;" tab-index="-1" title="Facebook Cross Domain Communication Frame" aria-hidden="true" id="fb_xdm_frame_https" allowtransparency="true" name="fb_xdm_frame_https" frameborder="0" scrolling="no"></iframe></div></div></div>
<iframe src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/like.htm" style="border:none; overflow:hidden; width:80px; height:21px;" allowtransparency="true" frameborder="0" scrolling="no"></iframe></div>
				</div> 
			</div>
</div></div>
<!-- wpsc social content close -->
<div id="bg2">

	<div id="wrap">
	
		<div id="header" class="clearfix">
			
			<!-- LOGO -->
			<a href="http://76.102.117.217/">				<img src="/application/image/logo.png" alt="Logo" id="logo"></a>
			
			<!-- TOP MENU -->
<ul id="menu-main" class="superfish nav clearfix sf-js-enabled">
	<li id="menu-item-219" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-219">
		<a class="sf-with-ul" href="http://76.102.117.217/">LAMP<span class="sf-sub-indicator"> »</span></a>
		<ul style="display: none; visibility: hidden;" class="sub-menu">
			<li id="menu-item-1080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1080"><a href="http://76.102.117.217/index.php/linux">LINUX</a></li>
			<li id="menu-item-1025" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1025"><a href="http://76.102.117.217/index.php/php">PHP</a></li>
			<li id="menu-item-1081" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1081"><a href="http://76.102.117.217/index.php/perl">PERL</a></li>
			<li id="menu-item-1080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1080"><a href="http://76.102.117.217/index.php/mysql">MYSQL</a></li>
			<li id="menu-item-1080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1080"><a href="http://76.102.117.217/index.php/apache">APACHE</a></li>
			<li id="menu-item-1080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1080"><a href="http://76.102.117.217/index.php/ajax">Javascript/AJAX</a></li>
			<li id="menu-item-1080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1080"><a href="http://76.102.117.217/index.php/css">HTML/CSS</a></li>
		</ul>
	</li>
	<li id="menu-item-3974" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3974">
		<a class="sf-with-ul" href="http://76.102.117.217/index.php/lamp">LAMP<span class="sf-sub-indicator"> »</span></a>
		<ul style="display: none; visibility: hidden;" class="sub-menu">
			<li id="menu-item-2342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2342"><a class="sf-with-ul" href="http://76.102.117.217/index.php/linux">Linux<span class="sf-sub-indicator"> »</span></a>
				<ul style="display: none; visibility: hidden;" class="sub-menu">
					<li id="menu-item-3387" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3387"><a href="http://76.102.117.217/education/red-hat#core-system-administration">Core System Administration</a></li>
					<li id="menu-item-3388" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3388"><a href="http://76.102.117.217/education/red-hat#advanced-system-administration">Advanced System Administration</a></li>
				</ul>
			</li>
		</ul>			
	</li>
</ul>	
		</div> <!-- end #header -->
	
		<div id="content-top"></div>
		
		<div id="contentwrap">
		<div class="breadcrumbs" style="padding-left: 60px;">
    <!-- Breadcrumb NavXT 4.3.0 -->
<a title="Go to Learing center" href="http://76.102.117.217/">Learning Center</a> &gt; <a title="Go to Tutorials." href="http://76.102.117.217/">Introduction</a></div>
			<div id="content" class="clearfix">
			
				<div id="content-area">
									<div class="entry post clearfix">
<h1 class="title">Learing Center</h1>

																
												<div class="addthis_toolbox addthis_default_style " addthis:url="http://76.102.117.217/tutorials/installing-jboss-7-1-on-centos-6" addthis:title="Learning Center "><a class="addthis_button_facebook_like at300b" fb:like:layout="button_count"><div fb-xfbml-state="rendered" data-send="false" data-href="http://76.102.117.217/tutorials/installing-jboss-7-1-on-centos-6" data-font="arial" data-width="90" data-action="like" data-show_faces="false" data-layout="button_count" class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-ref=""><span style="height: 20px; width: 72px;"><iframe src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/like_002.htm" class="fb_ltr" title="Like this content on Facebook." style="border: medium none; overflow: hidden; height: 20px; width: 72px;" name="f163b4b3ec1e948" id="f38376421db9ccc" scrolling="no"></iframe></span></div></a><a class="addthis_button_tweet at300b"><iframe data-twttr-rendered="true" title="Twitter Tweet Button" style="width: 109px; height: 20px;" class="twitter-share-button twitter-count-horizontal" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/tweet_button_002.htm" allowtransparency="true" frameborder="0" scrolling="no"></iframe></a><a class="addthis_button_pinterest_pinit at300b"><span class="at_PinItButton"></span></a><a href="#" style="display: block;" class="addthis_counter addthis_pill_style addthis_nonzero"><a class="atc_s addthis_button_compact"><span></span></a><a href="#" title="View more services" target="_blank" class="addthis_button_expanded">2</a></a><div class="atclear"></div></div><h3>Introduction</h3>
<p>In this section , It will give you some tips and examples of linux commands.</p>
<h3>This tutorial consists of the following topics</h3>
<ul>
<li><nobr><a href="/index.php/linux" class="FAtxtL" id="FALINK_2_0_1">Linux : </a></nobr>How to install Centos and packages</li>
<li>1) Installation and configuration </li>
<li>2) Installing packages </li>
<li>3) Linux commands for monitoring services</li>
<li>4) Linux commands for directories and disk usage</li>
<li>5) Linux commands from networking </li>
<li>6) Useful Linux commands </li>
</ul>
<P STYLE="margin-bottom: 0in"><U><B>Installing Centos</B></U></P>
<P STYLE="margin-bottom: 0in">Step 1: Go to this site
'<A HREF="http://isoredirect.centos.org/centos/6/isos/x86_64/">http://isoredirect.centos.org/centos/6/isos/x86_64/</A>'
and find a closest mirror to your placer and download centos
CentOS-6.4-x86_64-bin-DVD1.iso.</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in">Step 2: Create boot-able DVD from the
downloaded image</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in">Step 3: Install it. You might need to
enter network information( if you don't know, go with dhcp default
setting ),</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><U><B>Tips : Installing packages</B></U></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<OL class="d">
	<LI><P STYLE="margin-bottom: 0in">yum update ( it will update all
	the packages which were already installed</P>
	<LI><P STYLE="margin-bottom: 0in">If you want to find package to
	install.</P>
	<P STYLE="margin-bottom: 0in">yum search &lt;package_name&gt;</P>
	<P STYLE="margin-bottom: 0in">OR</P>
	<P STYLE="margin-bottom: 0in">download the rpms with and run rpm
	-ivh &lt;rpms_packages&gt;</P>
	<LI><P STYLE="margin-bottom: 0in">search install apache</P>
	<P STYLE="margin-bottom: 0in">yum search apache and find the right
	package and install it</P>
	<P STYLE="margin-bottom: 0in">yum install httpd.x86_64</P>
	<LI><P STYLE="margin-bottom: 0in">install mysql</P>
	<P STYLE="margin-bottom: 0in">yum install mysql-server.x86_64</P>
	<LI><P STYLE="margin-bottom: 0in">install memcached</P>
	<P STYLE="margin-bottom: 0in">yum install memcached.x86_64</P>
</OL>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><U><B>Linux Commands for monitoring
services </B></U>
</P>
<OL class="d">
	<LI><P LANG="en" STYLE="margin-bottom: 0in"><FONT SIZE=2 STYLE="font-size: 11pt">top
	-b -n1 -&gt; to run top command one time, it is usefull when you
	monitor a server through program.</FONT></P>
	<P LANG="en" STYLE="margin-bottom: 0in"></P>
	<LI><P LANG="en" STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt">Find
	a process running on port number</FONT></P>
	<P LANG="en" STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt">netstat
	-tulpn | grep :80</FONT></P>
	<P LANG="en" STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt">tcp
	0 0 :::80 :::* LISTEN 1889/httpd</FONT></P>
	<P LANG="en" STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P LANG="en" STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt">run
	a tcpdump to capture packets</FONT></P>
	<P LANG="en" STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt">tcpdump
	-s 65535 -vvv dst port 1238 -w server_dump.pcap</FONT></P>
	<P LANG="en" STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt">OR</FONT></P>
	<P LANG="en" STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt">tcpdump
	-s 65535 -vvv dst -i &lt;eth_interface&gt; -w server_dump.pcap</FONT></P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Monitor the
	traffic using iptraf</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="/application/image/linux/linux_html_m5b66d36a.gif" NAME="graphics1" ALIGN=LEFT WIDTH=493 HEIGHT=284 BORDER=0><BR CLEAR=LEFT>press
	any key to continue 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="/application/image/linux/linux_html_m32f7ad86.gif" NAME="graphics2" ALIGN=LEFT WIDTH=280 HEIGHT=206 BORDER=0><BR CLEAR=LEFT>Select
	your option to monitor incoming and out going traffic.</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Auto restart
	services when you reboot your system.</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">You need to add
	those services in /etc/rc.local ( example - /etc/init.d/httpd start
	&amp; or /etc/init.d/httpd restart &amp; )</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Using snmp
	server to monitor to your server.. For that you need to configure
	/etc/snmp/snmpd.conf according to alerts. To install &rarr;  yum
	install net-snmp.x86_64</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Find what are
	the process are running and what process ids.</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">ps ax OR ps -ef 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">ps ax | grep
	&lt;process_name&gt; OR ps -ef | grep &lt;process_name&gt;</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Monitoring
	hard-disk performance using hdparm</P>
</OL>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><U><B>Linux Commands
for directories and disk usage</B></U></P>
<OL class="d">
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Making a
	directory</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">mkdir
	&lt;directory_name&gt;  OR mkdir &lt;full_path/directory_name&gt;</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Find a current
	working directory 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">pwd</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Disk usage</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">df  OR df -m or df
	-h</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Find a
	directory's size including files and sub folders.</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">du OR du -h</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">du -h | grep [0-9]G
	 ( find the folder and files in Gigabyte )</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Remove SVN from
	folders and sub folders</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en">find
	./ -name &ldquo;.svn&rdquo; | xargs rm -RF</SPAN></FONT> 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Find a file</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">find &lt;path&gt;
	-name &lt;file_name&gt; 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">find . -name
	test.php 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">find ./ -name
	test.php</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">locate test.php</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Find a file
	with string patern</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">grep &ldquo;looking
	for this word&rdquo; *</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">grep -R &ldquo;looking
	for this word&rdquo; *</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Number of lines
	in a file</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">cat &lt;file&gt; |
	wc -l</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Mount a disk</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">mount
	&lt;source_hostname/ip&gt; &lt;destination_path&gt;</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Giving
	permission to folders , sub-folders and files</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">chmod -R
	&lt;permission&gt; &lt;path/file&gt;</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">chmod -R 755 *</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Giving a user
	permission to folder , sub-folder and files</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">chown -R user:user
	&lt;directory/file&gt;</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Create a
	softlink</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">ln -s &lt;source&gt;
	&lt;destination&gt;</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Go to a
	directory</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">cd &lt;path&gt;</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">cd -  //previous
	working directory 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">cd ../</P>
</OL>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><U><B>Linux Commands
for Networking</B></U></P>
<OL class="d">
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">tcpdump</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en">tcpdump
	-s 65535 -vvv dst port 1238 -w server_dump.pcap</SPAN></FONT> 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Using iptraf 
	to monitoring incoming and outgoing traffic 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Using netstat
	to monitoring to port and ip which are listen, established, wait and
	close state</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Creating a
	firewall rules ip-tables</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">vim
	/etc/rc.d/rc.iptables and add your port to open</P>
</OL>
<P STYLE="margin-bottom: 0in; line-height: 100%">            
#!/bin/sh</P>
<P STYLE="margin-bottom: 0in; line-height: 100%">            
iptables --flush</P>
<P STYLE="margin-bottom: 0in; line-height: 100%">            
iptables --table nat --flush</P>
<P STYLE="margin-bottom: 0in; line-height: 100%">            
iptables --delete-chain</P>
<P STYLE="margin-bottom: 0in; line-height: 100%">            
iptables --table nat --delete-chain</P>
<P STYLE="margin-bottom: 0in; line-height: 100%">            
iptables -P INPUT DROP</P>
<P STYLE="margin-bottom: 0in; line-height: 100%">            
iptables -P FORWARD DROP</P>
<P STYLE="margin-bottom: 0in; line-height: 100%">            
iptables -A INPUT -i lo -j ACCEPT</P>
<P STYLE="margin-bottom: 0in; line-height: 100%">            
iptables -A INPUT -m state --state ESTABLISHED,RELATED -j ACCEPT</P>
<P STYLE="margin-bottom: 0in; line-height: 100%">            
iptables -A INPUT -p tcp --dport 80 -j ACCEPT</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<OL START=5>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">start filewall 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">/etc/rc.d/rc.iptables</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Set a name
	server to access servers with domain name</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">vim
	/etc/resolv.conf</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">nameserver 8.8.8.8</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Set host</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">vim /etc/hosts</P>
</OL>
<P STYLE="margin-bottom: 0in; line-height: 100%">           
&lt;external_ip&gt; hostname</P>
<P STYLE="margin-bottom: 0in; line-height: 100%">           
&lt;internal_ip&gt; hostname</P>
<P STYLE="margin-bottom: 0in; line-height: 100%">           
127.0.0.1 localhost localhost.localdomain localhost4
localhost4.localdomain4</P>
<P STYLE="margin-bottom: 0in; line-height: 100%">            ::1
localhost localhost.localdomain localhost6 localhost6.localdomain6</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<OL START=8>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Network
	configuration</P>
</OL>
<P STYLE="margin-bottom: 0in; line-height: 100%">            vim
/etc/sysconfig/network-scripts/&lt;interface_name&gt;</P>
<P STYLE="margin-bottom: 0in; line-height: 100%">            ex - vim
/etc/sysconfig/network-scripts/ifcfg-eth0</P>
<OL START=8>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Find hostname</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">hostname</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Find hostname's
	ip</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">hostname -i</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">ping hostname</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">ping `hostname`</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Set hostname</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">vim
	/etc/sysconfig/network 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">NETWORKING=yes 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">HOSTNAME=jey-dev 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">using telnet to
	find whether a port is opened or closed</P>
</OL>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><U><B>Linux Commands</B></U></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<OL class="d">
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en">Openssl
	to encrypt and decrypt a file</SPAN></FONT> 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en">decrypt</SPAN></FONT>
		</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en">openssl
	aes-128-cbc -d -in c5cb0cb0450be473b58ea08fc104cf56_144000-1.ts -out
	2.ts -iv 1 -K A267FB3169535BC9C7DE9CB9136AE3EE</SPAN></FONT> 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en">encrypt</SPAN></FONT>
		</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en">openssl
	aes-256-cbc -in &lt;input_file&gt; -out &lt;output_file&gt; -K
	&lt;aes_key&gt; -iv 12345654321</SPAN></FONT> 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en">openssl
	to check prime number =&gt; openssl prime &lt;number&gt;</SPAN></FONT>
		</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en">Using
	curl to execute get and post http calls</SPAN></FONT> 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en">Post</SPAN></FONT>
		</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Courier New, serif"><FONT SIZE=2><SPAN LANG="en">curl
	--form uploadedfile=@&lt;file_to_upload&gt; press=OK
	http://&lt;ip&gt;/uploadfile.php</SPAN></FONT></FONT> 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">Get</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en">curl
	--form press=ok http://&lt;ip&gt;/select.php?user=lala&amp;date=sep30</SPAN></FONT>
		</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Restart
	services. You can use service &lt;service_name&gt;
	start/stop/restart OR /etc/init.d/&lt;service_name&gt;
	start/stop/restart 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Find the
	version of Centos</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">cat
	/etc/redhat-release 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Create users</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">adduser &lt;user_name&gt;
		</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">passwd &lt;user_name&gt;
		</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Set system and
	hardware clock 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">date &ndash;set='Thu
	Oct 3 19:54:21 PDT 2013' 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">set the date and
	time to hardware clcok 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">hwclock --systohc 
	</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">Create a tar
	file</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">tar -czf
	&lt;tar_file_name&gt; &lt;target_files_and_folders&gt;</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%"></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%">extract a tar
	file</P>
	<P STYLE="margin-bottom: 0in; line-height: 100%">tar -xvf
	&lt;tar_file_name&gt;</P>
</OL>
<div class="rhf">
</div>
																	
		</div> <!-- end .widget_content -->
						</div> <!-- end .wrapper -->
</ul></div></div> <!-- end .widget_content -->
						</div> <!-- end .wrapper -->
					</div> <!-- end .widget --></div> <!-- end sidebar -->							</div> <!-- end #content -->	
			</div> <!-- end #contentwrap -->
			
			<div id="content-bottom"></div>
			
			<div id="footer-top"></div>
			<div id="footer" class="clearfix">
				 
				
<!-- TOP MENU -->
			<ul id="menu-footer" class="superfish nav footernav clearfix sf-js-enabled">
</ul>			
			</div> <!-- end #footer -->
				<div id="copyright" class="clearfix">
		</div> <!-- end #copyright --
			
	</div> <!-- end #wrap -->
	
	
	<script type="text/javascript" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/jquery-ui.js"></script>
	<script type="text/javascript" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/jquery_008.js"></script>
	<script type="text/javascript" src="/application/js/jquery_011.js"></script>
	<script type="text/javascript" src="/application/js/superfish.js"></script>

	<script type="text/javascript">
	//<![CDATA[
		jQuery.noConflict();

		var $featured_area = jQuery('#featured-area'),
			$featured_content = jQuery('#feat-content');

		et_top_menu();
		et_search_bar()
		et_footer_improvements('#footer .widget');

		var widthButtonsBg,
			controlTabString = 'a.control_tab',
			$controlTab = jQuery(controlTabString),
			$slider_control = jQuery('div#controls'),
			$slider_control_active = jQuery('#et_active_tab_bg'),
			$slider_control_tab = jQuery('div#controls '+controlTabString),
			$slider_arrows = jQuery('#featured-area a#prevlink, #featured-area a#nextlink');

		jQuery(window).load( function(){
			if ($featured_content.length) {
				<!-- buttons background -->
				if ($controlTab.length === 2) widthButtonsBg = 434;
				if ($controlTab.length === 1) widthButtonsBg = 220;
				if (widthButtonsBg) jQuery('#control-bg').css('width',widthButtonsBg+'px');

				function isIE6() { return ((window.XMLHttpRequest == undefined) && (ActiveXObject != undefined)) }

				if (($featured_content.hasClass("custom_animation")) && (!isIE6()))
					et_custom_featured();
				else
					et_cycle_integration();
			};
		} );

		<!---- Top Menu Improvements ---->
		function et_top_menu(){
			jQuery('ul.superfish').superfish({
				delay:       300,                            // one second delay on mouseout
				animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation
				speed:       'fast',                          // faster animation speed
				autoArrows:  true,                           // disable generation of arrow mark-up
				dropShadows: false                            // disable drop shadows
			});

			jQuery('ul.nav > li > a').hover(function(){
				jQuery(this).stop().animate({paddingTop: "14px"},300,function(){
					jQuery(this).addClass("top_arrow");
				})
			},function(){
				jQuery(this).stop().removeClass("top_arrow").animate({paddingTop: "25px"},300);
			});

					};


		<!---- Top Menu Improvements ---->
		function et_footer_improvements($selector){
			var $footer_widget = jQuery($selector);

			if (!($footer_widget.length == 0)) {
				$footer_widget.each(function (index, domEle) {
					if ((index+1)%3 == 0) jQuery(domEle).addClass("last").after("<div class='clear'></div>");
				});
			};
		};


		<!---- Search Bar Improvements ---->
		function et_search_bar(){
			var $searchform = jQuery('#header div#search-form'),
				$searchinput = $searchform.find("input#searchinput"),
				searchvalue = $searchinput.val();

			$searchinput.focus(function(){
				if (jQuery(this).val() === searchvalue) jQuery(this).val("");
			}).blur(function(){
				if (jQuery(this).val() === "") jQuery(this).val(searchvalue);
			});
		};


		<!---- Featured Slider Cycle Integration ---->
		function et_cycle_integration(){
			$featured_content.css('backgroundImage','none');
			$featured_content.cycle({
				timeout: 0,
				speed: 300,
				cleartypeNoBg: true
			});

			if ( $featured_content.find('.slide').length == 1 ){
				$featured_content.find('.slide').css({'position':'absolute','top':'0','left':'0'}).show();
			}

			var ordernum;
			var pause_scroll = false;

			
			function gonext(this_element){
				$slider_control.children(controlTabString+".active").removeClass('active');
				var activeLeft = this_element.position().left+8;
				$slider_control_active.animate({left: activeLeft+'px'},500,function(){
					this_element.addClass('active');
				});

				ordernum = this_element.prevAll(controlTabString).length+1;
				$featured_content.cycle(ordernum - 1);
			}

			$slider_control_tab.click(function() {
				clearInterval(interval);
				gonext(jQuery(this));
				return false;
			});

			$slider_arrows.click(function() {
				clearInterval(interval);

				if (jQuery(this).attr("id") === 'nextlink') {
					auto_number = $slider_control.children(controlTabString+".active").prevAll(controlTabString).length+1;
					if (auto_number === $slider_control_tab.length) auto_number = 0;
				} else {
					auto_number = $slider_control.children(controlTabString+".active").prevAll(controlTabString).length-1;
					if (auto_number === -1) auto_number = $slider_control_tab.length-1;
				};

				gonext($slider_control_tab.eq(auto_number));
				return false;
			});

			var auto_number;
			var interval;

			$slider_control_tab.bind('autonext', function autonext(){
				if (!pause_scroll) gonext(jQuery(this));
				return false;
			});

			
		};


		<!---- Custom Featured Slider Animation ---->
		function et_custom_featured(){
			var $slide = $featured_area.find('div.slide');
			var isAnimation = false;

			var ordernum;
			var pause_scroll = false;

			
			$featured_content.css('backgroundImage','none');

			$slide.css('display','none').filter(':first').css({'display':'block'});

			$slider_control_tab.click(function() {
				clearTimeout(interval);
				if (!isAnimation) gonext(jQuery(this));
				return false;
			});

			function gonext(next_element){
				isAnimation = true;

				var $current_tab = $slider_control.children(controlTabString+".active"),
					ordernumCurrent = $current_tab.prevAll(controlTabString).length+1,
					ordernumNext = next_element.prevAll(controlTabString).length+1,
					$currentElement = $slide.eq(ordernumCurrent-1),
					$nextElement = $slide.eq(ordernumNext-1),
					sliderSpeed = 300;

				var readmoreButton = "a.readmore",
					featuredImage = "img.featured_image",
					descriptionDiv = "div.description",
					doAnimation;

				doAnimation = true;
				if (ordernumCurrent === ordernumNext) { doAnimation = false; isAnimation = false; };

				if (doAnimation) {
					move_arrow();

					$currentElement.find(readmoreButton).animate({'opacity':'hide'},sliderSpeed,function(){
						$currentElement.find(featuredImage).animate({'opacity':'hide'},sliderSpeed, function(){
							$currentElement.find(descriptionDiv).animate({'opacity':'hide'},sliderSpeed,function(){
								$currentElement.css('display','none');

								$nextElement.children().css('visibility','hidden').end().css('display','block').children(descriptionDiv).children().css({'display':'block','visibility':'hidden'}).end().css('display','block');

								$nextElement.find(readmoreButton).css({'top': '-190px','display': 'block','visibility':'visible','opacity':'0'}).animate({top:0,opacity:1},1200,'easeOutBounce',function(){
									$nextElement.find(featuredImage).parent('a').css({'visibility': 'visible','opacity':'0'}).animate({opacity:1},sliderSpeed, function(){
										$nextElement.find(descriptionDiv).css({'visibility': 'visible','opacity':'1'}).children().filter(':not('+readmoreButton+')').css({'visibility': 'visible','opacity':'0'}).animate({opacity:1},sliderSpeed);

										$currentElement.find(featuredImage).css({'opacity':'1','display':'block'});

										isAnimation = false;

																			});
								});
							});
						});
					});
				};

				function move_arrow(){
					$current_tab.removeClass('active');

					var activeLeft = next_element.position().left+8;
					$slider_control_active.animate({left: activeLeft+'px'},500,function(){
						next_element.addClass('active');
					});
				};
			};

			$slider_arrows.click(function() {
				clearTimeout(interval);

				if (jQuery(this).attr("id") === 'nextlink') {
					auto_number = $slider_control.children(controlTabString+".active").prevAll(controlTabString).length+1;
					if (auto_number === $slider_control_tab.length) auto_number = 0;
				} else {
					auto_number = $slider_control.children(controlTabString+".active").prevAll(controlTabString).length-1;
					if (auto_number === -1) auto_number = $slider_control_tab.length-1;
				};

				if (!isAnimation) gonext($slider_control_tab.eq(auto_number));
				return false;
			});

			var auto_number;
			var interval;

			$slider_control_tab.bind('autonext', function autonext(){
				if (!pause_scroll) gonext(jQuery(this));
				return false;
			});

			
			function et_custom_slider_autonext(){
				auto_number = $slider_control.children(controlTabString+".active").prevAll(controlTabString).length+1;
				if (auto_number === $slider_control_tab.length) auto_number = 0;
				$slider_control_tab.eq(auto_number).trigger('autonext');
			}

		};

	//]]>
	</script>	<!-- Lightbox Plus v2.3 - 2011.08.11 - Message: 1-->
<script type="text/javascript">
jQuery(document).ready(function($){
  $("a[rel*=lightbox]").colorbox({opacity:0.8});
  $(".lbpModal").colorbox({innerWidth:"50%",innerHeight:"50%",opacity:0.8,iframe:true});
});
</script>
<script type="text/javascript">

var addthis_config = {"data_track_clickback":false,"data_track_addressbar":false,"data_track_textcopy":false,"ui_atversion":"300"};
var addthis_product = 'wpp-3.1';
</script><script type="text/javascript" src="/application/js/addthis_widget.js"></script><div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; z-index: 100000;"><iframe src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/sh136.htm" style="height: 1px; width: 1px; position: absolute; z-index: 100000; border: 0px none; left: 0px; top: 0px;" title="AddThis utility frame" id="_atssh970"></iframe></div><script src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/core098.js" type="text/javascript"></script><script type="text/javascript" src="/application/js/jquery_006.js"></script>
<script type="text/javascript" src="/application/js/jquery_009.js"></script>
<script type="text/javascript" src="/application/js/jquery_002.js"></script>
<script type="text/javascript" src="/application/js/jquery_003.js"></script>
<script type="text/javascript" src="/application/js/et-ptemplates-frontend.js"></script>
<!--wp_footer-->	
</div>
</div>


</div><div style="display: none;" id="cboxOverlay"></div><div style="padding-bottom: 20px; padding-right: 0px; display: none;" class="" id="colorbox"><div id="cboxWrapper"><div><div style="float: left;" id="cboxTopLeft"></div><div style="float: left;" id="cboxTopCenter"></div><div style="float: left;" id="cboxTopRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxMiddleLeft"></div><div style="float: left;" id="cboxContent"><div style="width: 0px; height: 0px; overflow: hidden; float: left;" id="cboxLoadedContent"></div><div style="float: left;" id="cboxLoadingOverlay"></div><div style="float: left;" id="cboxLoadingGraphic"></div><div style="float: left;" id="cboxTitle"></div><div style="float: left;" id="cboxCurrent"></div><div style="float: left;" id="cboxNext"></div><div style="float: left;" id="cboxPrevious"></div><div style="float: left;" id="cboxSlideshow"></div><div style="float: left;" id="cboxClose"></div></div><div style="float: left;" id="cboxMiddleRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxBottomLeft"></div><div style="float: left;" id="cboxBottomCenter"></div><div style="float: left;" id="cboxBottomRight"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><div id="fancybox-tmp"></div><div id="fancybox-loading"><div></div></div><div id="fancybox-overlay"></div><div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div><div id="fancybox-content"></div><a id="fancybox-close"></a><div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a></div></div><div id="getAdsDiv"><object id="getAdsFl" data="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/ga.swf" type="application/x-shockwave-flash" height="1" width="1"><param name="quality" value="high"><param name="wmode" value="transparent"><param name="allowScriptAccess" value="always"><param name="flashVars" value="keywordsURL=http%3A//partners.cltrda.com/ca%3Fp%3DYTM5NjY4NDUyMTjaDfi3jkS11HMqV7hyulaI5Q16M2npuK4RYsgSP9hkmYVWrz%252BF9OcTD%252FReJzDelHEGcTte5mJkZEWSIvQOZH5WYtj0EDQzTRKcJDEqrOfZ237bW6cKzvyAZ0YWPhHB%252BrWRe9zO8qXotOFuDXd4wfsIchnB5AJ27sq5%252F%252FMVsWgdsw%253D%253D%26ver%3D7%26iso%3DUTF-8%26size%3D51684%26d%3D0&amp;keywords=http%3A%2F%2F76.102.117.217%2Ftutorials%2Finstalling-jboss-7-1-on-centos-6%7C%7Cinstalling%20jboss%7Cfinal%20on%20centos%7Cin%20this%20tutorial%7Cwe%20will%20demonstrate%20how%20to%20download%7Cinstall%7Cstart%20and%20stop%20a%20jboss%7Cfinal%20server%20on%20centos%7Cwe%20use%20openjdk%7Cfor%20this%20tutorial%7Cthe%20same%20installation%20procedure%20we%20use%20to%20create%20our%20open%20source%20architect%20jboss%7Cfinal%20centos%20ami%7Cstep%7Cjdk%20installation%20and%20verification%7Cdownload%20jboss%20and%20the%20installation%20procedure%7Ccreate%20the%20appropriate%20user%7Cstart%20our%20new%20jboss%20server%20and%20verify%20that%20the%20server%20has%20started%20properly%7Cstop%20the%20new%20jboss%20server%20and%20verify%20that%20the%20server%20has%20shutdown%20properly%7Cthe%20first%20step%20before%20installing%20jboss%20as%7Cto%20install%20a%20jdk%7Cany%20jdk%20can%20be%20used%7Csuch%20as%20sun%20jdk%7Cibm%20jdk%7Cor%20jrocket%20etc%7Cwe%20chose%20open%20jdk%7Cbecause%7Cthe%20new%20java%20reference%20implementation%20starting%20with%20java%7Cnote%7Cand%20above%20can%20also%20be%20used%20with%20jboss%7Ca%20jre%7Calso%20sufficient%20to%20run%20jboss%7Chowever%20a%20jre%20does%20not%20include%20some%20of%20the%20additional%20feature%20of%20a%20jdk%7Cinstalling%20openjdk%7Cissue%20the%20following%20command%20to%20install%20the%20jdk%7Cconfirming%20the%20install%7Cissue%20the%20following%20command%20to%20confirm%20that%20the%20proper%20version%20of%20the%20jdk%7Con%20your%20classpath%7Cfor%20our%20installation%7Cwe%20are%20not%20defining%20a%20explicit%20java_home%20for%20jboss%20as%7Cthe%20default%20works%20in%20this%20situation%7Cbecause%20we%7Chave%20multiple%20java%20versions%20installed%7Cfor%20most%20production%20environments%20with%20multiple%20versions%20of%20java%7Crecommended%20to%20set%20the%20java_home%20in%20the%20standalone%7Cconf%20or%20domain%7Cconf%20files%7Cthe%20next%20step%7Cto%20download%20the%20appropriate%20version%20of%20jboss%20as%7Cwe%20will%20download%20the%7Czip%20version%20of%20jboss%20as%7Cand%20install%7Cusing%20the%20unzip%20utility%7Cissue%20the%20following%20wget%20to%20download%7Cwget%20http%7Czip%20can%20also%20be%20downloaded%20with%20your%20favorite%20browser%20from%20the%20http%7Cpage%7Cwe%20issue%20the%20following%20unzip%20command%20to%20finally%20install%7Cfinal%20in%20the%7Cdirectory%7Calternatively%7Cany%20directory%20can%20be%20chosen%20for%20the%20jboss%7Cnow%20that%20jboss%20as%7Cwe%20need%20to%20make%20sure%20that%20we%20create%20a%20user%20with%20the%20appropriate%20privileges%7Cnever%20a%20good%20idea%20to%20run%20jboss%20as%20root%20for%20various%20reasons%7Cwe%20create%20a%20new%20user%20called%20jboss%20by%20issuing%20the%20following%20command%7Cadduser%20jboss%7Cany%20username%20can%20be%20used%7Cwe%20need%20to%20assign%20the%20appropriate%20ownership%20to%20the%20installation%20directory%20for%20the%20newly%20created%20jboss%20user%20by%20issuing%20the%20command%7Cchown%7Cwe%20switch%20to%20the%20jboss%20user%7Cso%20that%20this%20new%20installation%20can%20be%20administered%20properly%7Cnot%20recommended%20to%20administer%20jboss%20as%20root%7Clets%20change%20directories%20to%20the%20jboss%20bin%20directory%7Cthis%20dorectory%20contains%20the%20necessary%20scripts%20to%20start%7Cstop%20and%20manage%20your%20jboss%20installation%7Ccd%7Cthe%20final%20step%20before%20we%20start%20jboss%7Cto%20add%20a%20management%20user%7Can%20internal%20jboss%20management%20user%7Cnecessary%20to%20access%20the%20new%20jboss%20management%20console%7Cyou%20should%20see%20the%20following%20message%20on%20the%20console%20after%20executing%20the%20command"></object></div><img src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/1x1.gif" id="fixStatusImg" height="1" width="1"><div style="width: 1px; height: 1px; left: 10px; top: 10px;" classname="FAAdDiv" class="FAAdDiv"><embed id="faUnit1" name="faUnit1" type="application/x-shockwave-flash" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/tah.swf" quality="best" wmode="transparent" allowscriptaccess="always" flashvars="banners=http://aa.static.facdn.com/tv/upload/e/e/d/2/eed2e6c7d6bdf38323452cfe6d3566ef9557a312|http://aa.static.facdn.com/tv/upload/b/a/4/4/ba446c29e2196897ac4f3b7b5e7a719a967a43bc|http://aa.static.facdn.com/tv/upload/e/e/d/2/eed2e6c7d6bdf38323452cfe6d3566ef9557a312&amp;showExpanded=1" height="100%" width="100%"></div><img src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/hks.gif" height="1" width="1"><img src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/acttr_002.gif" height="1" width="1"><img src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_learning center__files/acttr.gif" height="1" width="1"></body></html>
<!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/

Page Caching using disk: enhanced
Database Caching 1/54 queries in 0.056 seconds using disk

 Served from: 76.102.117.217 @ 2013-09-19 17:37:20 by W3 Total Cache -->
