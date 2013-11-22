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
<title>Installing JBoss 7.1.1.Final on CentOS 6.x  - |opensourcearchitect|</title>

<link rel="stylesheet" href="/application/css/style_002.css" type="text/css" media="screen">
<link rel="alternate" type="application/rss+xml" title="|opensourcearchitect| RSS Feed" href="http://opensourcearchitect.co/feed">
<link rel="alternate" type="application/atom+xml" title="|opensourcearchitect| Atom Feed" href="http://opensourcearchitect.co/feed/atom">
<link rel="pingback" href="http://opensourcearchitect.co/xmlrpc.php">

<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" href="http://opensourcearchitect.co/wp-content/themes/13Floor/css/jie6style.css" />
	<script type="text/javascript" src="http://opensourcearchitect.co/wp-content/themes/13Floor/js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script type="text/javascript">DD_belatedPNG.fix('img#logo,img.featured_image,span.current_arrow, div#search-form, #featured-area, #controls, #feat-content a.readmore, #feat-content a.readmore span, .entry a.readmore, .entry a.readmore span, ul.nav li ul, ul.nav li ul a, div#content-top, #sidebar .widget h3.title, #sidebar .widget .widget_content, #sidebar .widget .wrapper, #sidebar .widget .widget_content ul li a, #sidebar .widget, div#footer-top, div#footer .widget h3.title, #footer .widget .widget_content ul li, #footer .widget .widget_content ul li a, #footer .widget .widget_content ul ul');</script>
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="http://opensourcearchitect.co/wp-content/themes/13Floor/css/ie7style.css" />
<![endif]-->

<script src="/application/js/widgets.js" id="twitter-wjs"></script>
<script src="/application/js/ga.js" async="" type="text/javascript"></script><script type="text/javascript">
	document.documentElement.className = 'js';
</script>

<link rel="alternate" type="application/rss+xml" title="|opensourcearchitect| » Feed" href="http://opensourcearchitect.co/feed">
<link rel="alternate" type="application/rss+xml" title="|opensourcearchitect| » Comments Feed" href="http://opensourcearchitect.co/comments/feed">
<link rel="alternate" type="application/rss+xml" title="|opensourcearchitect| » Installing JBoss 7.1.1.Final on CentOS 6.x Comments Feed" href="http://opensourcearchitect.co/tutorials/installing-jboss-7-1-on-centos-6/feed">
<link rel="stylesheet" id="dkoated-cta-buttons-css" href="/application/css/dkoated-cta-buttons.css" type="text/css" media="screen">
<link rel="stylesheet" id="farbtastic-css" href="/application/css/farbtastic.css" type="text/css" media="all">
<link rel="stylesheet" id="jobman-display-css" href="/application/css/display.css" type="text/css" media="all">
<link rel="stylesheet" id="flick-css" href="/application/css/flick.css" type="text/css" media="all">
<link rel="stylesheet" id="mailchimpSF_main_css-css" href="/application/css/a.css" type="text/css" media="all">
<!--[if IE]>
<link rel='stylesheet' id='mailchimpSF_ie_css-css'  href='http://opensourcearchitect.co/wp-content/plugins/mailchimp/css/ie.css' type='text/css' media='all' />
<![endif]-->
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
<script type="text/javascript">
/* <![CDATA[ */
var mailchimpSF = {"ajax_url":"http:\/\/opensourcearchitect.co\/"};
/* ]]> */
</script>
<script type="text/javascript" src="/application/js/mailchimp.js"></script>
<script type="text/javascript" src="/application/js/datepicker.js"></script>
<script type="text/javascript" src="/application/js/comment-reply.js"></script>
<script type="text/javascript" src="/application/js/jquery_007.js"></script>
<script type="text/javascript" src="/application/js/flexslider-init.js"></script>
<script type="text/javascript" src="/application/js/et_shortcodes_frontend.js"></script>
<script type="text/javascript" src="/application/js/external-tracking.js"></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://opensourcearchitect.co/xmlrpc.php?rsd">
<link rel="prev" title="Installing JBoss 7.1.1.Final on Ubuntu Server 12.04 LTS" href="http://opensourcearchitect.co/tutorials/installing-jboss-7-ubuntu-1204-lts">
<link rel="next" title="Sent!" href="http://opensourcearchitect.co/contact/sent">
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
	<link rel="shortcut icon" href="http://www.opensourcearchitect.com/wp-content/uploads/2012/01/favicon.ico">
<!-- All in One SEO Pack 2.0.2 by Michael Torbert of Semper Fi Web Design[376,452] -->
<meta name="description" content="In this tutorial, we will demonstrate how to download, install, start and stop a JBoss 7.1.1.Final server on CentOS 6.x.">

<meta name="keywords" content="cent os, rhel, management, tutorial, jdk, openjdk, jboss as 7, training, installatino, jboss user,amazon ami,centos ami,centos jboss 7 ami,centos jboss as 7 ami,downloading jboss as 7,installing as 7 on centos 6.x,jboss 7 ami,jboss ami,jboss as 7,jboss as 7 administration,jboss as 7 ami,jboss as 7 centos,jboss as 7 installation,jboss as 7 jdk,jboss as 7 management,jboss as 7 rhel,jboss as 7 standalone,jboss as 7 startup,jboss as 7 tutorials,jboss as 7 user,jboss jdk,jboss tutorial,open source architect amazon,open source architect ami,open source architect jboss training,open source architect jboss tutorial,openjdk jboss,osa tutorials,red hat,startup jboss as 7 standalone instance,test jboss as 7">

<link rel="canonical" href="http://opensourcearchitect.co/tutorials/installing-jboss-7-1-on-centos-6">
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
.fbpluginrecommendationsbarright{right:10px}</style></head>
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
			<a href="https://opensourcearchitect.co/about/contact-us/general-sales-contact-form" class="contact-b" title="contact us via phone or email">Contact Us</a><a href="http://www.twitter.com/opensourcearch" title="find us on twitter" target="_blank"><img src="/application/image/twitter.png" alt="twitter" height="30" width="30"></a>					<a href="http://www.facebook.com/pages/Open-Source-Architect/185529624827071" title="find us on facebook" target="_blank"><img src="/application/image/facebook.png" alt="facebook" height="30" width="30"></a><a href="http://www.linkedin.com/company/open-source-architect" title="find us on linkedin" target="_blank"><img src="/application/image/linkedin.png" alt="linkedin" height="30" width="30"></a><a href="http://www.youtube.com/user/opensourcearchitect" title="find us on youtube" target="_blank"><img src="/application/image/youtube.png" alt="youtube" height="30" width="30"></a><a href="http://pinterest.com/opensourcearch/" title="find us on pinterest" target="_blank"><img src="/application/image/pinterest.png" alt="pinterest" height="30" width="30"></a>
            </div>
	<div id="wpsc-social-counts"> 
		<div class="wpcs-share-icons" style="margin-right:-10px;">
			<iframe data-twttr-rendered="true" title="Twitter Tweet Button" style="width: 109px; height: 20px;" class="twitter-share-button twitter-count-horizontal" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/tweet_button.htm" allowtransparency="true" frameborder="0" scrolling="no"></iframe>  <script type="text/javascript" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/twitter-wjs.js"></script>

						</div>
		<div class="wpcs-share-icons" style="padding-right:10px;"><div class=" fb_reset" id="fb-root"><script async="" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/all.js"></script><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/ping.htm" style="display: none;" allowtransparency="true" name="f2ea08e8f840f6" frameborder="0" scrolling="no"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/xd_arbiter.htm" style="border: medium none;" tab-index="-1" title="Facebook Cross Domain Communication Frame" aria-hidden="true" id="fb_xdm_frame_http" allowtransparency="true" name="fb_xdm_frame_http" frameborder="0" scrolling="no"></iframe><iframe src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/xd_arbiter_002.htm" style="border: medium none;" tab-index="-1" title="Facebook Cross Domain Communication Frame" aria-hidden="true" id="fb_xdm_frame_https" allowtransparency="true" name="fb_xdm_frame_https" frameborder="0" scrolling="no"></iframe></div></div></div>
<iframe src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/like.htm" style="border:none; overflow:hidden; width:80px; height:21px;" allowtransparency="true" frameborder="0" scrolling="no"></iframe></div>
				</div> 
			</div>
</div></div>
<!-- wpsc social content close -->
<div id="bg2">

	<div id="wrap">
	
		<div id="header" class="clearfix">
			
			<!-- LOGO -->
			<a href="http://opensourcearchitect.co/">				<img src="/application/image/logo.png" alt="Logo" id="logo"></a>
			
			<!-- TOP MENU -->
			<ul id="menu-main" class="superfish nav clearfix sf-js-enabled"><li id="menu-item-219" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-219"><a class="sf-with-ul" href="http://opensourcearchitect.co/consulting">Consulting Services<span class="sf-sub-indicator"> »</span></a>
<ul style="display: none; visibility: hidden;" class="sub-menu">
	<li id="menu-item-1025" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1025"><a href="http://opensourcearchitect.co/consulting/jboss-consulting-services">JBoss Consulting Services</a></li>
	<li id="menu-item-1081" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1081"><a href="http://opensourcearchitect.co/consulting/hadoop-bigdata">Hadoop &amp; BigData</a></li>
	<li id="menu-item-1080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1080"><a href="http://opensourcearchitect.co/consulting/springsource-vfabric">SpringSource &amp; vFabric</a></li>
</ul>
</li>
<li id="menu-item-3974" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3974"><a class="sf-with-ul" href="http://opensourcearchitect.co/education">Education<span class="sf-sub-indicator"> »</span></a>
<ul style="display: none; visibility: hidden;" class="sub-menu">
	<li id="menu-item-2342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2342"><a class="sf-with-ul" href="http://opensourcearchitect.co/education/red-hat">Red Hat<span class="sf-sub-indicator"> »</span></a>
	<ul style="display: none; visibility: hidden;" class="sub-menu">
		<li id="menu-item-3387" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3387"><a href="http://opensourcearchitect.co/education/red-hat#core-system-administration">Core System Administration</a></li>
		<li id="menu-item-3388" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3388"><a href="http://opensourcearchitect.co/education/red-hat#advanced-system-administration">Advanced System Administration</a></li>
		<li id="menu-item-3390" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3390"><a href="http://opensourcearchitect.co/education/red-hat#cloud-computing-virtualization">Cloud Computing, Virtualization, and Storage</a></li>
		<li id="menu-item-3391" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3391"><a href="http://opensourcearchitect.co/education/red-hat#linux-development">Linux Development</a></li>
		<li id="menu-item-3413" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3413"><a href="http://opensourcearchitect.co/education/certifications">Certifications</a></li>
		<li id="menu-item-3099" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3099"><a href="http://opensourcearchitect.co/education/red-hat">See More</a></li>
	</ul>
</li>
	<li id="menu-item-2681" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2681"><a class="sf-with-ul" href="http://opensourcearchitect.co/education/jboss">JBoss Middleware Training<span class="sf-sub-indicator"> »</span></a>
	<ul style="display: none; visibility: hidden;" class="sub-menu">
		<li id="menu-item-3392" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3392"><a href="http://opensourcearchitect.co/education/jboss#jboss-administration">JBoss Administration</a></li>
		<li id="menu-item-3639" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3639"><a href="http://opensourcearchitect.co/education/jboss#jboss-community">JBoss Community</a></li>
		<li id="menu-item-3393" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3393"><a href="http://opensourcearchitect.co/education/jboss#jboss-middleware-development">JBoss Middleware Development</a></li>
		<li id="menu-item-3098" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3098"><a href="http://opensourcearchitect.co/education/jboss">See More</a></li>
	</ul>
</li>
	<li id="menu-item-2809" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2809"><a class="sf-with-ul" href="http://opensourcearchitect.co/education/hadoop">Hadoop<span class="sf-sub-indicator"> »</span></a>
	<ul style="display: none; visibility: hidden;" class="sub-menu">
		<li id="menu-item-2837" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2837"><a href="http://opensourcearchitect.co/education/hadoop/administering-apache">Administering Apache Hadoop</a></li>
		<li id="menu-item-2836" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2836"><a href="http://opensourcearchitect.co/education/hadoop/developing-solutions">Developing Solutions Using Apache Hadoop</a></li>
		<li id="menu-item-2835" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2835"><a href="http://opensourcearchitect.co/education/hadoop/developing-solutions-windows">Developing Solutions for Apache Hadoop on Windows</a></li>
		<li id="menu-item-2834" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2834"><a href="http://opensourcearchitect.co/education/hadoop/applying-data-science">Applying Data Science using Apache Hadoop</a></li>
		<li id="menu-item-2833" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2833"><a href="http://opensourcearchitect.co/education/hadoop/developing-apache">Developing Apache Hadoop Applications in Java</a></li>
	</ul>
</li>
	<li id="menu-item-442" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-442"><a class="sf-with-ul" href="http://opensourcearchitect.co/education/springsource">SpringSource<span class="sf-sub-indicator"> »</span></a>
	<ul style="display: none; visibility: hidden;" class="sub-menu">
		<li id="menu-item-2861" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2861"><a href="http://opensourcearchitect.co/education/springsource/17750">Core Spring Training</a></li>
		<li id="menu-item-2860" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2860"><a href="http://opensourcearchitect.co/education/springsource/33053">Core Spring Web Training</a></li>
		<li id="menu-item-2859" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2859"><a href="http://opensourcearchitect.co/education/springsource/17833">Enterprise Integration with Spring Training</a></li>
		<li id="menu-item-2857" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2857"><a href="http://opensourcearchitect.co/education/springsource/18355">Hibernate with Spring Training</a></li>
		<li id="menu-item-2858" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2858"><a href="http://opensourcearchitect.co/education/springsource/23470">Tomcat Administration</a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-1418" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor menu-item-1418"><a href="http://opensourcearchitect.co/tutorials">Tutorials</a></li>
<li id="menu-item-1672" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1672"><a href="http://opensourcearchitect.co/downloads">Downloads</a></li>
<li id="menu-item-2204" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2204"><a class="sf-with-ul" href="http://opensourcearchitect.co/shop">Shop<span class="sf-sub-indicator"> »</span></a>
<ul style="display: none; visibility: hidden;" class="sub-menu">
	<li id="menu-item-3761" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3761"><a class="sf-with-ul" href="http://opensourcearchitect.co/shop/29-jboss-enterprise-middleware">JBoss Enterprise Middleware<span class="sf-sub-indicator"> »</span></a>
	<ul style="display: none; visibility: hidden;" class="sub-menu">
		<li id="menu-item-4543" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4543"><a href="http://opensourcearchitect.co/shop/69-a-mq">A-MQ</a></li>
		<li id="menu-item-3762" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3762"><a href="http://opensourcearchitect.co/shop/30-application-platform">Application Platform</a></li>
		<li id="menu-item-3770" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3770"><a href="http://opensourcearchitect.co/shop/55-brms-platform">BRMS Platform</a></li>
		<li id="menu-item-3764" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3764"><a href="http://opensourcearchitect.co/shop/16-data-grid">Data Grid</a></li>
		<li id="menu-item-3767" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3767"><a href="http://opensourcearchitect.co/shop/34-data-services-platform">Data Services Platform</a></li>
		<li id="menu-item-4541" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4541"><a href="http://opensourcearchitect.co/shop/68-fuse">Fuse</a></li>
		<li id="menu-item-3769" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3769"><a href="http://opensourcearchitect.co/shop/36-operations-network">Operations Network</a></li>
		<li id="menu-item-3765" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3765"><a href="http://opensourcearchitect.co/shop/32-portal-platform">Portal Platform</a></li>
		<li id="menu-item-3766" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3766"><a href="http://opensourcearchitect.co/shop/33-soa-platform">SOA Platform</a></li>
		<li id="menu-item-3763" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3763"><a href="http://opensourcearchitect.co/shop/17-web-server">Web Server</a></li>
	</ul>
</li>
	<li id="menu-item-3771" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3771"><a class="sf-with-ul" href="http://opensourcearchitect.co/shop/37-red-hat-enterprise-linux">Red Hat Enterprise Linux<span class="sf-sub-indicator"> »</span></a>
	<ul style="display: none; visibility: hidden;" class="sub-menu">
		<li id="menu-item-3772" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3772"><a href="http://opensourcearchitect.co/shop/38-desktop">Desktop</a></li>
		<li id="menu-item-4193" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4193"><a href="http://opensourcearchitect.co/shop/64-ibm-power">IBM Power</a></li>
		<li id="menu-item-4194" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4194"><a href="http://opensourcearchitect.co/shop/67-ibm-system-z">IBM System z</a></li>
		<li id="menu-item-3774" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3774"><a href="http://opensourcearchitect.co/shop/40-management">Management</a></li>
		<li id="menu-item-4195" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4195"><a href="http://opensourcearchitect.co/shop/65-sap-business-applications">SAP Applications</a></li>
		<li id="menu-item-3773" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3773"><a href="http://opensourcearchitect.co/shop/39-server">Server</a></li>
		<li id="menu-item-4196" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4196"><a href="http://opensourcearchitect.co/shop/66-scientific-computing">Scientific Computing</a></li>
	</ul>
</li>
	<li id="menu-item-3776" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3776"><a class="sf-with-ul" href="http://opensourcearchitect.co/shop/41-red-hat-enterprise-virtualization">Red Hat Enterprise Virtualization<span class="sf-sub-indicator"> »</span></a>
	<ul style="display: none; visibility: hidden;" class="sub-menu">
		<li id="menu-item-3777" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3777"><a href="http://opensourcearchitect.co/shop/42-server">Server</a></li>
		<li id="menu-item-3778" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3778"><a href="http://opensourcearchitect.co/shop/43-desktop">Desktop</a></li>
	</ul>
</li>
	<li id="menu-item-3779" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3779"><a class="sf-with-ul" href="http://opensourcearchitect.co/shop/44-red-hat-enterprise-linux-add-ons">Red Hat Enterprise Linux Add-Ons<span class="sf-sub-indicator"> »</span></a>
	<ul style="display: none; visibility: hidden;" class="sub-menu">
		<li id="menu-item-3781" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3781"><a href="http://opensourcearchitect.co/shop/46-high-availiblity">High Availiblity</a></li>
		<li id="menu-item-3782" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3782"><a href="http://opensourcearchitect.co/shop/47-high-performance-network">High Performance Network</a></li>
		<li id="menu-item-3783" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3783"><a href="http://opensourcearchitect.co/shop/48-load-balancer">Load Balancer</a></li>
		<li id="menu-item-3784" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3784"><a href="http://opensourcearchitect.co/shop/49-scalable-file-system">Scalable File System</a></li>
		<li id="menu-item-3785" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3785"><a href="http://opensourcearchitect.co/shop/50-smart-management">Smart Management</a></li>
	</ul>
</li>
	<li id="menu-item-3786" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3786"><a class="sf-with-ul" href="http://opensourcearchitect.co/shop/51-red-hat-enterprise-mrg">Red Hat Enterprise MRG<span class="sf-sub-indicator"> »</span></a>
	<ul style="display: none; visibility: hidden;" class="sub-menu">
		<li id="menu-item-3789" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3789"><a href="http://opensourcearchitect.co/shop/54-grid">Grid</a></li>
		<li id="menu-item-3787" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3787"><a href="http://opensourcearchitect.co/shop/52-messaging">Messaging</a></li>
		<li id="menu-item-3788" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3788"><a href="http://opensourcearchitect.co/shop/53-realtime">Realtime</a></li>
	</ul>
</li>
	<li id="menu-item-3790" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3790"><a class="sf-with-ul" href="http://opensourcearchitect.co/shop/56-rti">Application Root Cause Analysis<span class="sf-sub-indicator"> »</span></a>
	<ul style="display: none; visibility: hidden;" class="sub-menu">
		<li id="menu-item-3791" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3791"><a href="http://opensourcearchitect.co/shop/56-rti">RTI</a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-223" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-223"><a class="sf-with-ul" href="http://opensourcearchitect.co/about">About<span class="sf-sub-indicator"> »</span></a>
<ul style="display: none; visibility: hidden;" class="sub-menu">
	<li id="menu-item-343" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-343"><a class="sf-with-ul" href="http://opensourcearchitect.co/our-people">Our People<span class="sf-sub-indicator"> »</span></a>
	<ul style="display: none; visibility: hidden;" class="sub-menu">
		<li id="menu-item-346" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-346"><a href="http://opensourcearchitect.co/nida">Nida Baweja</a></li>
		<li id="menu-item-1350" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1350"><a href="http://opensourcearchitect.co/shahryar">Shahryar Gilani</a></li>
		<li id="menu-item-345" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-345"><a href="http://opensourcearchitect.co/farhan">Farhan Hussain</a></li>
		<li id="menu-item-414" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-414"><a href="http://opensourcearchitect.co/rocco-saya">Rocco Saya</a></li>
	</ul>
</li>
	<li id="menu-item-225" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-225"><a href="http://opensourcearchitect.co/expertise">Expertise</a></li>
	<li id="menu-item-683" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-683"><a href="http://opensourcearchitect.co/about/charity">Charity</a></li>
	<li id="menu-item-927" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-927"><a href="http://opensourcearchitect.co/about/strategic-partnerships">Strategic Partnerships</a></li>
	<li id="menu-item-4197" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4197"><a href="http://opensourcearchitect.co/careers">Careers</a></li>
	<li id="menu-item-1378" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378"><a href="http://opensourcearchitect.co/about/contact-us">Contact Us</a></li>
</ul>
</li>
</ul>			
			<!-- SEARCH FORM -->
			<div id="search-form">
				<form method="get" id="searchform1" action="http://opensourcearchitect.co/">
					<input value="search this site/application." name="s" id="searchinput" type="text">
					<input id="searchsubmit" value="Search" type="submit">
				</form>
			</div> <!-- end searchform -->
			
		</div> <!-- end #header -->
	
		<div id="content-top"></div>
		
		<div id="contentwrap">
		<div class="breadcrumbs" style="padding-left: 60px;">
    <!-- Breadcrumb NavXT 4.3.0 -->
<a title="Go to |opensourcearchitect|." href="http://opensourcearchitect.co/">|opensourcearchitect|</a> &gt; <a title="Go to Tutorials." href="http://opensourcearchitect.co/tutorials">Tutorials</a> &gt; Installing JBoss 7.1.1.Final on CentOS 6.x</div>
			<div id="content" class="clearfix">
			
				<div id="content-area">
									<div class="entry post clearfix">
<h1 class="title">Installing JBoss 7.1.1.Final on CentOS 6.x</h1>

																
												<div class="addthis_toolbox addthis_default_style " addthis:url="http://opensourcearchitect.co/tutorials/installing-jboss-7-1-on-centos-6" addthis:title="Installing JBoss 7.1.1.Final on CentOS 6.x "><a class="addthis_button_facebook_like at300b" fb:like:layout="button_count"><div fb-xfbml-state="rendered" data-send="false" data-href="http://opensourcearchitect.co/tutorials/installing-jboss-7-1-on-centos-6" data-font="arial" data-width="90" data-action="like" data-show_faces="false" data-layout="button_count" class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-ref=""><span style="height: 20px; width: 72px;"><iframe src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/like_002.htm" class="fb_ltr" title="Like this content on Facebook." style="border: medium none; overflow: hidden; height: 20px; width: 72px;" name="f163b4b3ec1e948" id="f38376421db9ccc" scrolling="no"></iframe></span></div></a><a class="addthis_button_tweet at300b"><iframe data-twttr-rendered="true" title="Twitter Tweet Button" style="width: 109px; height: 20px;" class="twitter-share-button twitter-count-horizontal" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/tweet_button_002.htm" allowtransparency="true" frameborder="0" scrolling="no"></iframe></a><a class="addthis_button_pinterest_pinit at300b"><span class="at_PinItButton"></span></a><a href="#" style="display: block;" class="addthis_counter addthis_pill_style addthis_nonzero"><a class="atc_s addthis_button_compact"><span></span></a><a href="#" title="View more services" target="_blank" class="addthis_button_expanded">2</a></a><div class="atclear"></div></div><h3>Introduction</h3>
<p>In this tutorial, we will demonstrate how to download, install, start
 and stop a JBoss 7.1.1.Final server on CentOS 6.x. We use OpenJDK 6 for
 this tutorial. This is the same installation procedure we use to create
 our Open Source Architect JBoss 7.1.1.Final CentOS ami.</p>
<h3>This tutorial consists of the following steps</h3>
<ul>
<li><nobr><a href="#" class="FAtxtL" id="FALINK_2_0_1">Step</a></nobr> 1: JDK installation and verification</li>
<li>Step 2: Download JBoss and the installation procedure</li>
<li>Step 3: Create the appropriate user</li>
<li>Step 4: Start our new JBoss server and verify that the server has started properly</li>
<li>Step 5: Stop the new JBoss server and verify that the server has shutdown properly</li>
</ul>
<h3>Step 1: JDK Installation and verification</h3>
<p>The first step before installing JBoss AS 7, is to install a JDK. Any
 JDK can be used, such as Sun JDK, OpenJDK, IBM JDK, or JRocket etc. We 
chose Open JDK 6 for this tutorial, because it is the new <nobr><a href="#" class="FAtxtL" id="FALINK_1_0_0">Java</a></nobr> reference implementation starting with Java 7.</p>
<p>NOTE: JDK 7 and above can also be used with JBoss. A JRE is also 
sufficient to run JBoss 7, however a JRE does not include some of the 
additional feature of a JDK.<br>
Installing OpenJDK:<br>
Issue the following command to install the JDK:<br>
<code>$ su -c "yum install java-1.6.0-openjdk-devel"</code><br>
Confirming the install:<br>
Issue the following command to confirm that the proper version of the JDK is on your classpath:<br>
<code>$ java -version</code><br>
NOTE: For our installation, we are not defining a explicit JAVA_HOME for
 JBoss AS 7. The default works in this situation, because we don’t have 
multiple java versions installed. For most production environments with 
multiple versions of Java, it is recommended to set the JAVA_HOME in the
 standalone.conf or domain.conf files.</p>
<h3>Step 2: Download JBoss and the installation procedure</h3>
<p>The next step is to download the appropriate version of JBoss AS 7. 
We will download the .zip version of JBoss AS 7, and install it using 
the <nobr><a href="#" class="FAtxtL" id="FALINK_3_0_2">unzip</a></nobr> utility.</p>
<h5>Downloading JBoss AS 7.1.1.Final:</h5>
<p>Issue the following wget to download jboss-as-7.1.1.Final.zip:<br>
<code>wget http://download.jboss.org/jbossas/7.1/jboss-as-7.1.1.Final/jboss-as-7.1.1.Final.zip</code><br>
NOTE: jboss-as-7.1.1.Final.zip can also be downloaded with your favorite
 browser from the http://www.jboss.org/jbossas/downloads/ page.</p>
<h5>Installing JBoss AS 7.1.1.Final:</h5>
<p>Next, we issue the following unzip command to finally install jboss-as-7.1.1.Final in the /usr/share directory:</p>
<p><code>$ unzip jboss-as-7.1.1.Final.zip -d /usr/share</code></p>
<p>Alternatively, any directory can be chosen for the JBoss 7 installation.</p>
<h3>Step 3: Create the appropriate user</h3>
<p>Now that JBoss AS 7, is installed, we need to make sure that we 
create a user with the appropriate privileges. It is never a good idea 
to run JBoss as root for various reasons.</p>
<h5>Create the new user:</h5>
<p>We create a new user called jboss by issuing the following command:</p>
<p><code>$ adduser jboss</code></p>
<p>Alternatively, any username can be used.</p>
<h5>Change ownership of the installation directory:</h5>
<p>We need to assign the appropriate ownership to the installation 
directory for the newly created jboss user by issuing the command:</p>
<p><code>$ chown -fR jboss.jboss /usr/share/jboss-as-7.1.1.Final/</code></p>
<h5>Switch user to the jboss user:</h5>
<p>We switch to the jBoss user, so that this new installation can be 
administered properly. It is not recommended to administer JBoss as 
root.</p>
<p><code>$ su jboss</code></p>
<h5>Change directory to the jboss bin directory:</h5>
<p>Now, lets change directories to the JBoss bin directory. This 
dorectory contains the necessary scripts to start, stop and manage your 
JBoss installation.</p>
<p><code>$ cd /usr/share/jboss-as-7.1.1.<wbr>Final/bin/</code></p>
<h5>Add a jboss management user:</h5>
<p>The final step before we start JBoss, is to add a management user. 
This is an internal JBoss management user, necessary to access the new 
JBoss management console.</p>
<p><code>$ ./add-user.sh</code><br>
You should see the following message on the console after executing the command:</p>
<p><code>What type of user do you wish to add?<br>
a) Management User (mgmt-users.properties)<br>
b) Application User (application-users.properties)<br>
(a): a</code></p>
<p>We select “a”, next you should see the following message:</p>
<p>Enter the details of the new user to add.<br>
Realm (ManagementRealm) :<br>
Username : jboss<br>
Password :<br>
Re-enter Password :<br>
* hit enter for Realm to use default, then provide a username and password</p>
<p>We select the default value for the Realm (ManagementRealm), by 
hitting enter, and select “jboss” as our username. By default, we supply
 “jb0ss” as our password, of course, you can provide any password you 
prefer here.</p>
<h3>Step 4: Start the JBoss AS 7 server:</h3>
<p>Once the appropriate JBoss users are created, we are now ready to 
start our new JBoss AS 7 server. With JBoss AS 7, a new standalone and 
domain model has been introduced. In this tutorial, we focus on starting
 up a standalone server. The domain server will be part of a future 
tutorial.</p>
<h5>Startup a JBoss 7, standalone instance:</h5>
<p>A standalone instance of JBoss 7 can be starting by executing:</p>
<p><code>$ ./standalone.sh -Djboss.bind.address=0.0.0.0 -Djboss.bind.address.management=0.0.0.0&amp;</code><br>
NOTE: By default, JBoss 7 will only bind to localhost. This does not 
allow any remote access to your jboss server. For our amazon aws 
installation, we define the jboss.bind.address property as 0.0.0.0 and 
jboss.bin.address.management property to 0.0.0.0 as well. This allows us
 to access the remote JBoss amazon instance over the internet. We could 
have also defined the hostname of the ami or the ip address. However, 
unless an elastic ip is used, this value can change. This is why we 
opted for 0.0.0.0.</p>
<p>You should see the following messages on the console after executing the command for a successful startup:</p>
<p><code><br>
=========================================================================</code></p>
<p>JBoss Bootstrap Environment</p>
<p>JBOSS_HOME: /usr/share/jboss-as-7.1.1.Final</p>
<p>JAVA: java</p>
<p>JAVA_OPTS: -server -XX:+UseCompressedOops -XX:+TieredCompilation 
-Xms64m -Xmx512m -XX:MaxPermSize=256m -Djava.net.preferIPv4Stack=true 
-Dorg.jboss.resolver.warning=true 
-Dsun.rmi.dgc.client.gcInterval=3600000 
-Dsun.rmi.dgc.server.gcInterval=3600000 
-Djboss.modules.system.pkgs=org.jboss.byteman -Djava.awt.headless=true 
-Djboss.server.default.config=standalone.xml</p>
<p>=========================================================================</p>
<p>17:51:31,102 INFO [org.jboss.modules] JBoss Modules version 1.1.1.GA<br>
17:51:31,501 INFO [org.jboss.msc] JBoss MSC version 1.0.2.GA<br>
17:51:31,602 INFO [org.jboss.as] JBAS015899: JBoss AS 7.1.1.Final “Brontes” starting<br>
17:51:33,705 INFO [org.xnio] XNIO Version 3.0.3.GA<br>
17:51:33,721 INFO [org.jboss.as.server] JBAS015888: Creating http management service using socket-binding (management-http)<br>
17:51:33,755 INFO [org.xnio.nio] XNIO NIO Implementation Version 3.0.3.GA<br>
17:51:33,795 INFO [org.jboss.remoting] JBoss Remoting version 3.2.3.GA<br>
17:51:33,891 INFO [org.jboss.as.logging] JBAS011502: Removing bootstrap log handlers<br>
17:51:33,914 INFO [org.jboss.as.configadmin] (ServerService Thread Pool — 26) JBAS016200: Activating ConfigAdmin Subsystem<br>
17:51:33,949 INFO [org.jboss.as.clustering.infinispan] (ServerService 
Thread Pool — 31) JBAS010280: Activating Infinispan subsystem.<br>
17:51:34,077 INFO [org.jboss.as.webservices] (ServerService Thread Pool — 48) JBAS015537: Activating WebServices Extension<br>
17:51:34,081 INFO [org.jboss.as.security] (ServerService Thread Pool — 44) JBAS013101: Activating Security Subsystem<br>
17:51:34,105 INFO [org.jboss.as.security] (MSC service thread 1-1) JBAS013100: Current PicketBox version=4.0.7.Final<br>
17:51:34,121 INFO [org.jboss.as.osgi] (ServerService Thread Pool — 39) JBAS011940: Activating OSGi Subsystem<br>
17:51:34,128 INFO [org.jboss.as.naming] (ServerService Thread Pool — 38) JBAS011800: Activating Naming Subsystem<br>
17:51:34,501 INFO [org.jboss.as.connector] (MSC service thread 1-1) 
JBAS010408: Starting JCA Subsystem (JBoss IronJacamar 1.0.9.Final)<br>
17:51:34,583 INFO [org.jboss.as.connector.subsystems.datasources] 
(ServerService Thread Pool — 27) JBAS010403: Deploying JDBC-compliant 
driver class org.h2.Driver (version 1.3)<br>
17:51:34,944 INFO [org.jboss.as.naming] (MSC service thread 1-2) JBAS011802: Starting Naming Service<br>
17:51:35,043 INFO [org.jboss.ws.common.management.AbstractServerConfig] 
(MSC service thread 1-1) JBoss Web Services – Stack CXF Server 4.0.2.GA<br>
17:51:35,844 INFO [org.apache.coyote.http11.Http11Protocol] (MSC service
 thread 1-1) Starting Coyote HTTP/1.1 on http–0.0.0.0-8080<br>
17:51:35,886 INFO [org.jboss.as.mail.extension] (MSC service thread 1-2)
 JBAS015400: Bound mail session [java:jboss/mail/Default]<br>
17:51:36,543 INFO [org.jboss.as.remoting] (MSC service thread 1-1) JBAS017100: Listening on /0.0.0.0:9999<br>
17:51:36,637 INFO [org.jboss.as.server.deployment.scanner] (MSC service 
thread 1-1) JBAS015012: Started FileSystemDeploymentService for 
directory /usr/share/jboss-as-7.1.1.Final/standalone/deployments<br>
17:51:36,791 INFO [org.jboss.as.remoting] (MSC service thread 1-1) JBAS017100: Listening on /0.0.0.0:4447<br>
17:51:36,811 INFO [org.jboss.as.connector.subsystems.datasources] (MSC 
service thread 1-2) JBAS010400: Bound data source 
[java:jboss/datasources/ExampleDS]<br>
17:51:36,895 INFO [org.jboss.as] (Controller Boot Thread) JBAS015951: Admin console listening on http://0.0.0.0:9990<br>
17:51:36,896 INFO [org.jboss.as] (Controller Boot Thread) JBAS015874: 
JBoss AS 7.1.1.Final “Brontes” started in 6182ms – Started 133 of 208 
services (74 services are passive or on-demand)</p>
<h5>Test your JBoss 7 installation:</h5>
<p>A good indication of a successful startup is that you can login to 
the JBoss admin console. Type in the following in your browser window, 
where yourip should be replaced with the address of your amazon ami:<br>
<code>http://yourip::9990/</code><br>
This should provide you access to the new admin console, which will be the topic of a future tutorial.</p>
<h3>Step 5: Stop the JBoss AS 7 server:</h3>
<p>After successfully starting up JBoss 7, lets demonstrate how to shut your JBoss server down in this section.</p>
<h5>Shutdown a JBoss 7 instance:</h5>
<p>To shutdown your JBoss 7 server, execute the following command:</p>
<p><code>$ ./jboss-cli.sh --connect command=:shutdown</code></p>
<h3>Step 6: Deploy a heloworld servlet</h3>
<p><a href="https://192.168.20.5/jboss/hello.zip">download the sample helloword servlet</a></p>
<p>
The example code may be downloaded and extracted locally. To deploy the example code, first modify the build.properties file in the project root and set deploy.dir to a deployable location on the filesystem (i.e. JBOSS_HOME/standalone/deployments//). Once deploy.dir is defined, start your JBoss instance, and issue: ant deploy. You may test the servlet by opening a browser, and visiting: http://localhost:8080/servlet-example/hello.<br><br>
<h3>Step 7: Create WAR</h3>
<p>Install ant -> yum install ant<br>
run ant clean -> ant clean<br>
run  ant -> ant <br>
run ant deploy -> any deploy<br> 
</p>
<p>Just like most of our tutorials, if you want to test the final result
 of this tutorial, |opensourcearchitect| has provided a complete JBoss 7
 installation as an ami here:<br>
us-east-1 ebs 64bit <a href="https://console.aws.amazon.com/ec2/home?region=us-east-1#launchAmi=ami-5de44e34">ami-5de44e34</a></p>
<p>This ami was created following this tutorial, and serves as the end result for your reference or use.</p>
<div class="rhf">
<p>JBoss® is a registered trademark of Red Hat, Inc. in the U.S. and other countries. <span style="color: #a30008;">|</span>opensourcearchitect<strong><span style="color: #a30008;">|</span></strong> is a Red Hat Advanced Partner.</p>
</div>
																	
					</div> <!-- end .post -->
			
													</div> <!-- end #content-area -->
	
	<div id="sidebar">
	<div id="nav_menu-10" class="clearfix widget widget_nav_menu"><h3 class="title">Consulting Offerings</h3><div class="wrapper clearfix"><div class="widget_content"><div class="menu-consulting-container"><ul id="menu-consulting" class="menu"><li id="menu-item-1244" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1244"><a href="http://opensourcearchitect.co/consulting/jboss-consulting-services">JBoss Consulting Services</a>
<ul class="sub-menu">
	<li id="menu-item-1245" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1245"><a href="http://opensourcearchitect.co/consulting/jboss-consulting-services/migrate-to-jboss">Migrate to JBoss</a></li>
</ul>
</li>
<li id="menu-item-1243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1243"><a href="http://opensourcearchitect.co/consulting/hadoop-bigdata">Hadoop &amp; BigData</a></li>
<li id="menu-item-1345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1345"><a href="http://opensourcearchitect.co/consulting/springsource-vfabric">SpringSource &amp; vFabric</a></li>
</ul></div></div> <!-- end .widget_content -->
						</div> <!-- end .wrapper -->
					</div> <!-- end .widget --><div id="text-72" class="clearfix widget widget_text"><h3 class="title">product search</h3><div class="wrapper clearfix"><div class="widget_content">			<div class="textwidget">	<form method="get" action="/shop/search" id="searchbox">
			<div class="ctr_search">
			<input name="orderby" value="position" type="hidden">
			<input name="controller" value="search" type="hidden">
			<input name="orderway" value="desc" type="hidden">
			<input class="search_query txt_livesearch ac_input_2" id="search_query_block" name="search_query" type="text">
			<input id="search_button" class=" bt_search" value="go" type="submit">
			</div>
	</form>
</div>
		</div> <!-- end .widget_content -->
						</div> <!-- end .wrapper -->
					</div> <!-- end .widget --><div id="nav_menu-9" class="clearfix widget widget_nav_menu"><h3 class="title">Curriculums</h3><div class="wrapper clearfix"><div class="widget_content"><div class="menu-curriculums-container"><ul id="menu-curriculums" class="menu"><li id="menu-item-3298" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3298"><a href="http://opensourcearchitect.co/education/red-hat">Red Hat</a></li>
<li id="menu-item-3556" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3556"><a href="http://opensourcearchitect.co/education/jboss">JBoss</a></li>
<li id="menu-item-1344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1344"><a href="http://opensourcearchitect.co/education/hadoop">Hadoop</a></li>
<li id="menu-item-436" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-436"><a href="http://opensourcearchitect.co/education/springsource">SpringSource</a></li>
</ul></div></div> <!-- end .widget_content -->
						</div> <!-- end .wrapper -->
					</div> <!-- end .widget --></div> <!-- end sidebar -->							</div> <!-- end #content -->	
			</div> <!-- end #contentwrap -->
			
			<div id="content-bottom"></div>
			
			<div id="footer-top"></div>
			<div id="footer" class="clearfix">
				 
				
<!-- TOP MENU -->
			<ul id="menu-footer" class="superfish nav footernav clearfix sf-js-enabled"><li id="menu-item-265" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-265"><a href="http://opensourcearchitect.co/consulting">Consulting Services</a></li>
<li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266"><a href="http://opensourcearchitect.co/education">Education</a></li>
<li id="menu-item-271" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-271"><a href="http://opensourcearchitect.co/expertise">Expertise</a></li>
<li id="menu-item-988" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-988"><a href="http://opensourcearchitect.co/about/strategic-partnerships">Strategic Partnerships</a></li>
<li id="menu-item-269" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-269"><a href="http://opensourcearchitect.co/about">About</a></li>
<li id="menu-item-990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-990"><a href="http://opensourcearchitect.co/our-people">Our People</a></li>
<li id="menu-item-4006" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4006"><a href="http://opensourcearchitect.co/careers">Careers</a></li>
<li id="menu-item-268" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-268"><a href="http://opensourcearchitect.co/about/contact-us">Contact Us</a></li>
</ul>			
			</div> <!-- end #footer -->
				<div id="copyright" class="clearfix">
		   <p>
<a href="http://opensourcearchitect.co/terms-and-conditions">Terms and Conditions</a> | <a href="http://opensourcearchitect.co/privacy-policy">Privacy Policy</a> | 
Copyright ©2013 |opensourcearchitect|®</p>
		</div> <!-- end #copyright --
			
	</div> <!-- end #wrap -->
	
	
	<script type="text/javascript" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/jquery-ui.js"></script>
	<script type="text/javascript" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/jquery_008.js"></script>
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
</script><script type="text/javascript" src="/application/js/addthis_widget.js"></script><div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; z-index: 100000;"><iframe src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/sh136.htm" style="height: 1px; width: 1px; position: absolute; z-index: 100000; border: 0px none; left: 0px; top: 0px;" title="AddThis utility frame" id="_atssh970"></iframe></div><script src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/core098.js" type="text/javascript"></script><script type="text/javascript" src="/application/js/jquery_006.js"></script>
<script type="text/javascript" src="/application/js/jquery_009.js"></script>
<script type="text/javascript" src="/application/js/jquery_002.js"></script>
<script type="text/javascript" src="/application/js/jquery_003.js"></script>
<script type="text/javascript" src="/application/js/et-ptemplates-frontend.js"></script>
<!--wp_footer-->	
</div>
</div>


</div><div style="display: none;" id="cboxOverlay"></div><div style="padding-bottom: 20px; padding-right: 0px; display: none;" class="" id="colorbox"><div id="cboxWrapper"><div><div style="float: left;" id="cboxTopLeft"></div><div style="float: left;" id="cboxTopCenter"></div><div style="float: left;" id="cboxTopRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxMiddleLeft"></div><div style="float: left;" id="cboxContent"><div style="width: 0px; height: 0px; overflow: hidden; float: left;" id="cboxLoadedContent"></div><div style="float: left;" id="cboxLoadingOverlay"></div><div style="float: left;" id="cboxLoadingGraphic"></div><div style="float: left;" id="cboxTitle"></div><div style="float: left;" id="cboxCurrent"></div><div style="float: left;" id="cboxNext"></div><div style="float: left;" id="cboxPrevious"></div><div style="float: left;" id="cboxSlideshow"></div><div style="float: left;" id="cboxClose"></div></div><div style="float: left;" id="cboxMiddleRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxBottomLeft"></div><div style="float: left;" id="cboxBottomCenter"></div><div style="float: left;" id="cboxBottomRight"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><div id="fancybox-tmp"></div><div id="fancybox-loading"><div></div></div><div id="fancybox-overlay"></div><div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div><div id="fancybox-content"></div><a id="fancybox-close"></a><div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a></div></div><div id="getAdsDiv"><object id="getAdsFl" data="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/ga.swf" type="application/x-shockwave-flash" height="1" width="1"><param name="quality" value="high"><param name="wmode" value="transparent"><param name="allowScriptAccess" value="always"><param name="flashVars" value="keywordsURL=http%3A//partners.cltrda.com/ca%3Fp%3DYTM5NjY4NDUyMTjaDfi3jkS11HMqV7hyulaI5Q16M2npuK4RYsgSP9hkmYVWrz%252BF9OcTD%252FReJzDelHEGcTte5mJkZEWSIvQOZH5WYtj0EDQzTRKcJDEqrOfZ237bW6cKzvyAZ0YWPhHB%252BrWRe9zO8qXotOFuDXd4wfsIchnB5AJ27sq5%252F%252FMVsWgdsw%253D%253D%26ver%3D7%26iso%3DUTF-8%26size%3D51684%26d%3D0&amp;keywords=http%3A%2F%2Fopensourcearchitect.co%2Ftutorials%2Finstalling-jboss-7-1-on-centos-6%7C%7Cinstalling%20jboss%7Cfinal%20on%20centos%7Cin%20this%20tutorial%7Cwe%20will%20demonstrate%20how%20to%20download%7Cinstall%7Cstart%20and%20stop%20a%20jboss%7Cfinal%20server%20on%20centos%7Cwe%20use%20openjdk%7Cfor%20this%20tutorial%7Cthe%20same%20installation%20procedure%20we%20use%20to%20create%20our%20open%20source%20architect%20jboss%7Cfinal%20centos%20ami%7Cstep%7Cjdk%20installation%20and%20verification%7Cdownload%20jboss%20and%20the%20installation%20procedure%7Ccreate%20the%20appropriate%20user%7Cstart%20our%20new%20jboss%20server%20and%20verify%20that%20the%20server%20has%20started%20properly%7Cstop%20the%20new%20jboss%20server%20and%20verify%20that%20the%20server%20has%20shutdown%20properly%7Cthe%20first%20step%20before%20installing%20jboss%20as%7Cto%20install%20a%20jdk%7Cany%20jdk%20can%20be%20used%7Csuch%20as%20sun%20jdk%7Cibm%20jdk%7Cor%20jrocket%20etc%7Cwe%20chose%20open%20jdk%7Cbecause%7Cthe%20new%20java%20reference%20implementation%20starting%20with%20java%7Cnote%7Cand%20above%20can%20also%20be%20used%20with%20jboss%7Ca%20jre%7Calso%20sufficient%20to%20run%20jboss%7Chowever%20a%20jre%20does%20not%20include%20some%20of%20the%20additional%20feature%20of%20a%20jdk%7Cinstalling%20openjdk%7Cissue%20the%20following%20command%20to%20install%20the%20jdk%7Cconfirming%20the%20install%7Cissue%20the%20following%20command%20to%20confirm%20that%20the%20proper%20version%20of%20the%20jdk%7Con%20your%20classpath%7Cfor%20our%20installation%7Cwe%20are%20not%20defining%20a%20explicit%20java_home%20for%20jboss%20as%7Cthe%20default%20works%20in%20this%20situation%7Cbecause%20we%7Chave%20multiple%20java%20versions%20installed%7Cfor%20most%20production%20environments%20with%20multiple%20versions%20of%20java%7Crecommended%20to%20set%20the%20java_home%20in%20the%20standalone%7Cconf%20or%20domain%7Cconf%20files%7Cthe%20next%20step%7Cto%20download%20the%20appropriate%20version%20of%20jboss%20as%7Cwe%20will%20download%20the%7Czip%20version%20of%20jboss%20as%7Cand%20install%7Cusing%20the%20unzip%20utility%7Cissue%20the%20following%20wget%20to%20download%7Cwget%20http%7Czip%20can%20also%20be%20downloaded%20with%20your%20favorite%20browser%20from%20the%20http%7Cpage%7Cwe%20issue%20the%20following%20unzip%20command%20to%20finally%20install%7Cfinal%20in%20the%7Cdirectory%7Calternatively%7Cany%20directory%20can%20be%20chosen%20for%20the%20jboss%7Cnow%20that%20jboss%20as%7Cwe%20need%20to%20make%20sure%20that%20we%20create%20a%20user%20with%20the%20appropriate%20privileges%7Cnever%20a%20good%20idea%20to%20run%20jboss%20as%20root%20for%20various%20reasons%7Cwe%20create%20a%20new%20user%20called%20jboss%20by%20issuing%20the%20following%20command%7Cadduser%20jboss%7Cany%20username%20can%20be%20used%7Cwe%20need%20to%20assign%20the%20appropriate%20ownership%20to%20the%20installation%20directory%20for%20the%20newly%20created%20jboss%20user%20by%20issuing%20the%20command%7Cchown%7Cwe%20switch%20to%20the%20jboss%20user%7Cso%20that%20this%20new%20installation%20can%20be%20administered%20properly%7Cnot%20recommended%20to%20administer%20jboss%20as%20root%7Clets%20change%20directories%20to%20the%20jboss%20bin%20directory%7Cthis%20dorectory%20contains%20the%20necessary%20scripts%20to%20start%7Cstop%20and%20manage%20your%20jboss%20installation%7Ccd%7Cthe%20final%20step%20before%20we%20start%20jboss%7Cto%20add%20a%20management%20user%7Can%20internal%20jboss%20management%20user%7Cnecessary%20to%20access%20the%20new%20jboss%20management%20console%7Cyou%20should%20see%20the%20following%20message%20on%20the%20console%20after%20executing%20the%20command"></object></div><img src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/1x1.gif" id="fixStatusImg" height="1" width="1"><div style="width: 1px; height: 1px; left: 10px; top: 10px;" classname="FAAdDiv" class="FAAdDiv"><embed id="faUnit1" name="faUnit1" type="application/x-shockwave-flash" src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/tah.swf" quality="best" wmode="transparent" allowscriptaccess="always" flashvars="banners=http://aa.static.facdn.com/tv/upload/e/e/d/2/eed2e6c7d6bdf38323452cfe6d3566ef9557a312|http://aa.static.facdn.com/tv/upload/b/a/4/4/ba446c29e2196897ac4f3b7b5e7a719a967a43bc|http://aa.static.facdn.com/tv/upload/e/e/d/2/eed2e6c7d6bdf38323452cfe6d3566ef9557a312&amp;showExpanded=1" height="100%" width="100%"></div><img src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/hks.gif" height="1" width="1"><img src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/acttr_002.gif" height="1" width="1"><img src="Installing%20JBoss%207.1.1.Final%20on%20CentOS%206.x%20-%20_opensourcearchitect__files/acttr.gif" height="1" width="1"></body></html>
<!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/

Page Caching using disk: enhanced
Database Caching 1/54 queries in 0.056 seconds using disk

 Served from: opensourcearchitect.co @ 2013-09-19 17:37:20 by W3 Total Cache -->
