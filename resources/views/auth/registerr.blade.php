

<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">
  
<!-- Mirrored from onlinehighschool.stanford.edu/core-division by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2022 19:58:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" /><script type="text/javascript">(window.NREUM||(NREUM={})).init={ajax:{deny_list:["bam.nr-data.net"]}};(window.NREUM||(NREUM={})).loader_config={licenseKey:"f639074655",applicationID:"117349135"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(){}function i(t,e,n,r){return function(){return s.recordSupportability("API/"+e+"/called"),o(t+e,[u.now()].concat(c(arguments)),n?null:this,r),n?void 0:this}}var o=t("handle"),a=t(9),c=t(10),f=t("ee").get("tracer"),u=t("loader"),s=t(4),d=NREUM;"undefined"==typeof window.newrelic&&(newrelic=d);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",v=l+"ixn-";a(p,function(t,e){d[e]=i(l,e,!0,"api")}),d.addPageAction=i(l,"addPageAction",!0),d.setCurrentRouteName=i(l,"routeName",!0),e.exports=newrelic,d.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(v+"tracer",[u.now(),t,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw f.emit("fn-err",[arguments,this,t],n),t}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){m[e]=i(v,e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),s.recordSupportability("API/noticeError/called"),o("err",[t,u.now(),!1,e])}},{}],2:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],3:[function(t,e,n){var r=!1;try{var i=Object.defineProperty({},"passive",{get:function(){r=!0}});window.addEventListener("testPassive",null,i),window.removeEventListener("testPassive",null,i)}catch(o){}e.exports=function(t){return r?{passive:!0,capture:!!t}:!!t}},{}],4:[function(t,e,n){function r(t,e){var n=[a,t,{name:t},e];return o("storeMetric",n,null,"api"),n}function i(t,e){var n=[c,t,{name:t},e];return o("storeEventMetrics",n,null,"api"),n}var o=t("handle"),a="sm",c="cm";e.exports={constants:{SUPPORTABILITY_METRIC:a,CUSTOM_METRIC:c},recordSupportability:r,recordCustom:i}},{}],5:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=t(11);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],6:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?l("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&l("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();if(n.length>0){var r=n[n.length-1];if(u&&u<r.startTime)return;var i=[r],o=a({});o&&i.push(o),l("lcp",i)}}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||l("cls",[t])})}function a(t){var e=navigator.connection||navigator.mozConnection||navigator.webkitConnection;if(e)return e.type&&(t["net-type"]=e.type),e.effectiveType&&(t["net-etype"]=e.effectiveType),e.rtt&&(t["net-rtt"]=e.rtt),e.downlink&&(t["net-dlink"]=e.downlink),t}function c(t){if(t instanceof y&&!w){var e=Math.round(t.timeStamp),n={type:t.type};a(n),e<=v.now()?n.fid=v.now()-e:e>v.offset&&e<=Date.now()?(e-=v.offset,n.fid=v.now()-e):e=v.now(),w=!0,l("timing",["fi",e,n])}}function f(t){"hidden"===t&&(u=v.now(),l("pageHide",[u]))}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var u,s,d,p,l=t("handle"),v=t("loader"),m=t(8),g=t(3),y=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(h){}d=new PerformanceObserver(i);try{d.observe({entryTypes:["largest-contentful-paint"]})}catch(h){}p=new PerformanceObserver(o);try{p.observe({type:"layout-shift",buffered:!0})}catch(h){}}if("addEventListener"in document){var w=!1,b=["click","keydown","mousedown","pointerdown","touchstart"];b.forEach(function(t){document.addEventListener(t,c,g(!1))})}m(f)}},{}],7:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}e.exports={agent:i,version:o,match:r}},{}],8:[function(t,e,n){function r(t){function e(){t(c&&document[c]?document[c]:document[o]?"hidden":"visible")}"addEventListener"in document&&a&&document.addEventListener(a,e,i(!1))}var i=t(3);e.exports=r;var o,a,c;"undefined"!=typeof document.hidden?(o="hidden",a="visibilitychange",c="visibilityState"):"undefined"!=typeof document.msHidden?(o="msHidden",a="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(o="webkitHidden",a="webkitvisibilitychange",c="webkitVisibilityState")},{}],9:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],10:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],11:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?u(t,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){t&&a&&t(n,r,i);for(var c=e(i),f=m(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[w[n]];return p&&p.push([b,n,r,c]),c}}function o(t,e){h[t]=m(t).concat(e)}function v(t,e){var n=h[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return h[t]||[]}function g(t){return p[t]=p[t]||i(n)}function y(t,e){l.aborted||s(t,function(t,n){e=e||"feature",w[n]=e,e in d||(d[e]=[])})}var h={},w={},b={on:o,addEventListener:o,removeEventListener:v,emit:n,get:g,listeners:m,context:e,buffer:y,abort:c,aborted:!1};return b}function o(t){return u(t,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=t("gos"),s=t(9),d={},p={},l=e.exports=i();e.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!M++){var t=T.info=NREUM.info,e=m.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(x,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+T.offset],null,"api"),c("timing",["load",n]);var r=m.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https:///")?r.src=t.agent:r.src=l+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===m.readyState&&o()}function o(){c("mark",["domContent",a()+T.offset],null,"api")}var a=t(5),c=t("handle"),f=t(9),u=t("ee"),s=t(7),d=t(2),p=t(3),l=d.getConfiguration("ssl")===!1?"http":"https",v=window,m=v.document,g="addEventListener",y="attachEvent",h=v.XMLHttpRequest,w=h&&h.prototype,b=!1;NREUM.o={ST:setTimeout,SI:v.setImmediate,CT:clearTimeout,XHR:h,REQ:v.Request,EV:v.Event,PR:v.Promise,MO:v.MutationObserver};var E=""+location,x={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1216.min.js"},O=h&&w&&w[g]&&!/CriOS/.test(navigator.userAgent),T=e.exports={offset:a.getLastTimestamp(),now:a,origin:E,features:{},xhrWrappable:O,userAgent:s,disabled:b};if(!b){t(1),t(6),m[g]?(m[g]("DOMContentLoaded",o,p(!1)),v[g]("load",r,p(!1))):(m[y]("onreadystatechange",i),v[y]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var M=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],t)}c(n+"start",[o,a,f],s,u);try{return p=e.apply(a,o)}catch(v){throw c(n+"err",[o,a,v],s,u),v}finally{c(n+"end",[o,a,p],s,u)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<e.length;u++)f=e[u],c=t[f],a(c)||(t[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!v||e){var c=v;v=!0;try{t.emit(n,r,o,e,a)}catch(f){i([f,n,r,o],t)}v=c}}return t||(t=s),n.inPlace=r,n.flag=p,n}function i(t,e){e||(e=s);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function c(t,e){var n=e(t);return n[p]=t,o(t,n,s),n}function f(t,e,n){var r=t[e];t[e]=c(r,n)}function u(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var s=t("ee"),d=t(10),p="nr@original",l=Object.prototype.hasOwnProperty,v=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=f,e.exports.argsToArray=u},{}]},{},["loader"]);</script>
<noscript><style>form.antibot * :not(.antibot-message) { display: none !important; }</style>
</noscript><script src="sites/default/files/hotjar/hotjar.scriptd1b7.js?rjxjcu"></script>
<link rel="canonical" href="core-division.html" />
<meta name="Generator" content="Drupal 9 (https://www.drupal.org)" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" href="themes/custom/spcs/favicon.ico" type="image/vnd.microsoft.icon" />
<script src="sites/default/files/google_tag/primary/google_tag.scriptd1b7.js?rjxjcu" defer></script>

    <title>Log In</title>
    <link rel="stylesheet" media="all" href="sites/default/files/css/css_XrYzwBofahKbiKATNpFD9OsA8uRplmdJc-_GG4CYSM4.css" />
<link rel="stylesheet" media="all" href="sites/default/files/css/css_x63AVUuowb7M9VtrtavyG0w1yBz88xxmHG7wLFVjWxg.css" />
<link rel="stylesheet" media="all" href="../cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.0/css/lightgallery.min.css" />

    <script src="https://onlinehighschool.stanford.edu/core/assets/vendor/modernizr/modernizr.min.js?v=3.11.7"></script>
<script src="https://onlinehighschool.stanford.edu/core/misc/modernizr-additional-tests.js?v=3.11.7"></script>

  </head>
  <body class="path-node page-node-type-landing-page">
        <!-- <a href="#main-content" class="skip-link">
      Skip to main content
    </a> -->
    <div class="container">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZGGPR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
    <div class="page-wrapper ">
          <header class="header js-header">
  <div class="header-responsive clearfix hidden-on-desktop">
    <div class="branding">  <div class="region region-branding">
      <a href="index.html" title="Home" rel="home" class="logo">
    <img src="sites/default/files/domain-logos/main_ohs/OHS_2Ln_RGB_0.svg" alt="Home" class="hidden-on-mobileTabletOnly" />
          <img src="sites/default/files/domain-logos/main_ohs/OHS_1Ln_WHITE_0.svg" alt="Home" class="hidden-on-desktop" />
      </a>

  </div>
</div>
    <a class="menu-toggle-wrap" href="#">
      <span class="menu-toggle">
        <i></i>
        <i></i>
        <i></i>
      </span>
      <span class="menu-toggle-normal">Menu</span>
      <span class="menu-toggle-close">Close</span>
    </a>
  </div>

  <div class="header-top bg--cardinal-red text--white hidden-on-mobileTabletOnly">
    <div class="container">
      <div class="header-top__content">
        <div class="header-top__help helper-menu-wrap">
            <div class="region region-help-nav">
    <nav role="navigation" aria-labelledby="block-helpnavigation-menu" id="block-helpnavigation" class="block block-menu navigation menu--help-nav">
            
  <h2 class="visually-hidden" id="block-helpnavigation-menu">Help Navigation</h2>
  

        
  <ul class="menu">
                    <li class="menu-item">
        <a href="https://familygateway.ohs.stanford.edu/">Gateway</a>
              </li>
                <li class="menu-item">
        <a href="alumni.html" data-drupal-link-system-path="node/884">Alumni</a>
              </li>
                <li class="menu-item">
        <a href="support-us.html" data-drupal-link-system-path="node/794">Support Us</a>
              </li>
                <li class="menu-item">
        <a href="questions.html" data-drupal-link-system-path="node/717">Questions?</a>
              </li>
                <li class="menu-item">
        <a href="contact-us.html" data-drupal-link-system-path="node/275">Contact Us</a>
              </li>








              @if (Route::has('login'))

                    @auth




                    <x-app-layout>

                    </x-app-layout>
                    @else
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                        @if (Route::has('register'))
                           <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link">Apply/Enroll</a></li>
                        @endif
                    @endauth
          
            @endif








        </ul>


  </nav>

  </div>

        </div>
        <div class="search-box js-search-box">
          <div class="search-box__group js-search-box-group" tabindex="0">
            <span class="search-box__btn"></span>
            <span class="search-box__text">Search</span>
          </div>
          <div class="search-box__inner">
              <div class="region region-search">
    <div data-drupal-selector="spcs-search-block-form" id="block-searchform" class="block block-spcs-search block-spcs-search-form-block">
  
    
      <form action="https://onlinehighschool.stanford.edu/core-division" method="post" id="spcs-search-block-form" accept-charset="UTF-8">
  <div class="js-form-item form-item js-form-type-search form-type-search js-form-item-keys form-item-keys form-no-label">
      <label for="edit-keys" class="visually-hidden">Search</label>
        <input title="Enter the terms you wish to search for." data-drupal-selector="edit-keys" type="search" id="edit-keys" name="keys" value="" size="15" maxlength="128" placeholder="Search..." class="form-search" />

        </div>
<input autocomplete="off" data-drupal-selector="form-do7w-hut1-ibcskrsi-keb3pzex6ozpyoi4phgccowu" type="hidden" name="form_build_id" value="form-DO7w_huT1-IbcSKRsI-keB3PZEx6oZPyoI4pHGCCOWU" />
<input data-drupal-selector="edit-spcs-search-block-form" type="hidden" name="form_id" value="spcs_search_block_form" />
<div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions"><input data-drupal-selector="edit-submit" type="submit" id="edit-submit" value="Search" class="button js-form-submit form-submit" />
</div>

</form>

  </div>

  </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-main js-nav-menu bg--white text--dark">
    <div class="container">
      <div class="header-main__left hidden-on-mobileTabletOnly">
        <div class="branding">
            <div class="region region-branding">
      <a href="index.html" title="Home" rel="home" class="logo">
    <img src="sites/default/files/domain-logos/main_ohs/OHS_2Ln_RGB_0.svg" alt="Home" class="hidden-on-mobileTabletOnly" />
          <img src="sites/default/files/domain-logos/main_ohs/OHS_1Ln_WHITE_0.svg" alt="Home" class="hidden-on-desktop" />
      </a>

  </div>


  @if(session()->has('success_message'))
      <div class="alert alert-success alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">x</button>
        {{session()->get('success_message')}}
      </div>
      @endif


      @if(session()->has('error_message'))
      <div class="alert alert-success alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">x</button>
        {{session()->get('error_message')}}
      </div>
      @endif

        </div>
      </div>

      <div class="header-main__right">

        <div class="search-box hidden-on-desktop">
          
        </div>

        <div class="navigation-menu">
            <div class="region region-main-menu">
    <div id="block-dynamicmainmenublock" class="block block-spcs-domain block-dynamic-main-menu-block">
  
    
      
<div class="main-menu js-expanded-menu ">
                <ul class="menu">
                    <li class="menu-item menu-item--expanded expanded-menu lv-1">
        <a href="about.html" tabindex="-1" data-drupal-link-system-path="node/22">About</a>
                              <div class="expanded-menu__menu-child">
      <ul class="menu">
                    <li class="menu-item">
        <a href="about.html" data-drupal-link-system-path="node/22">About Us</a>
              </li>
                <li class="menu-item">
        <a href="diversity-equity-and-inclusion.html" data-drupal-link-system-path="node/19996">Diversity, Equity, and Inclusion</a>
              </li>
                <li class="menu-item">
        <a href="community-news.html" data-drupal-link-system-path="node/17300">Community News</a>
              </li>
                <li class="menu-item">
        <a href="take-tour.html" data-drupal-link-system-path="node/546">Virtual Tour</a>
              </li>
        </ul>
          </div>
      
              </li>
                <li class="menu-item menu-item--expanded expanded-menu lv-1">
        <a href="admissions.html" tabindex="-1" data-drupal-link-system-path="node/27">Admissions</a>
                              <div class="expanded-menu__menu-child">
      <ul class="menu">
                    <li class="menu-item">
        <a href="admissions.html" data-drupal-link-system-path="node/27">Overview</a>
              </li>
                <li class="menu-item">
        <a href="apply.html" data-drupal-link-system-path="node/606">Apply</a>
              </li>
                <li class="menu-item">
        <a href="admissions-events.html" data-drupal-link-system-path="node/607">Events</a>
              </li>
                <li class="menu-item">
        <a href="enrollment-options.html" data-drupal-link-system-path="node/597">Enrollment Options</a>
              </li>
                <li class="menu-item">
        <a href="tuition.html" data-drupal-link-system-path="node/598">Tuition</a>
              </li>
                <li class="menu-item">
        <a href="financial-aid-scholarships.html" data-drupal-link-system-path="node/599">Financial Aid</a>
              </li>
                <li class="menu-item">
        <a href="criteria.html" data-drupal-link-system-path="node/595">Criteria</a>
              </li>
        </ul>
          </div>
      
              </li>
                <li class="menu-item menu-item--expanded expanded-menu lv-1">
        <a href="academics.html" tabindex="-1" data-drupal-link-system-path="node/545">Academics</a>
                              <div class="expanded-menu__menu-child">
      <ul class="menu">
                    <li class="menu-item">
        <a href="academics.html" title="Overview" data-drupal-link-system-path="node/545">Overview</a>
              </li>
                <li class="menu-item">
        <a href="course-catalog.html" title="Course Catalog" data-drupal-link-system-path="node/800">Course Catalog</a>
              </li>
                <li class="menu-item">
        <a href="middle-school.html" title="Middle School" data-drupal-link-system-path="node/594">Middle School</a>
              </li>
                <li class="menu-item">
        <a href="graduation-requirements.html" title="Graduation Requirements" data-drupal-link-system-path="node/593">Graduation Requirements</a>
              </li>
                <li class="menu-item">
        <a href="college-style-schedule-enrollment.html" data-drupal-link-system-path="node/952">College-Style Schedule</a>
              </li>
                <li class="menu-item">
        <a href="core-division.html" data-drupal-link-system-path="node/5861" class="is-active">Curriculum</a>
              </li>
        </ul>
          </div>
      
              </li>
                <li class="menu-item">
        <a href="student-life.html" tabindex="-1" data-drupal-link-system-path="node/543">Student Life</a>
              </li>
                <li class="menu-item menu-item--expanded expanded-menu lv-1">
        <a href="student-support.html" tabindex="-1" data-drupal-link-system-path="node/547">Student Support</a>
                              <div class="expanded-menu__menu-child">
      <ul class="menu">
                    <li class="menu-item">
        <a href="student-support.html" data-drupal-link-system-path="node/547">Overview</a>
              </li>
                <li class="menu-item">
        <a href="academic-advising.html" data-drupal-link-system-path="node/13482">Academic Advising</a>
              </li>
                <li class="menu-item">
        <a href="college-counseling-page.html" data-drupal-link-system-path="node/956">College Counseling</a>
              </li>
                <li class="menu-item">
        <a href="student-wellness.html" data-drupal-link-system-path="node/15343">Counseling &amp; Wellness</a>
              </li>
                <li class="menu-item">
        <a href="writing-tutoring-center.html" data-drupal-link-system-path="node/13483">Writing &amp; Tutoring Center</a>
              </li>
        </ul>
          </div>
      
              </li>
                <li class="menu-item">
        <a href="how-create-online-classroom.html" tabindex="-1" data-drupal-link-system-path="node/9798">Educator Resources</a>
              </li>
        </ul>
      
</div>


  </div>

  </div>

        </div>

        <div class="helper-menu-wrap hidden-on-desktop">
            <div class="region region-help-nav">
    <nav role="navigation" aria-labelledby="block-helpnavigation-menu" id="block-helpnavigation" class="block block-menu navigation menu--help-nav">
            
  <h2 class="visually-hidden" id="block-helpnavigation-menu">Help Navigation</h2>
  

        
        
  <ul class="menu">
                    <li class="menu-item">
        <a href="https://familygateway.ohs.stanford.edu/">Gateway</a>
              </li>
                <li class="menu-item">
        <a href="alumni.html" data-drupal-link-system-path="node/884">Alumni</a>
              </li>
                <li class="menu-item">
        <a href="support-us.html" data-drupal-link-system-path="node/794">Support Us</a>
              </li>
                <li class="menu-item">
        <a href="questions.html" data-drupal-link-system-path="node/717">Questions?</a>
              </li>
                <li class="menu-item">
        <a href="contact-us.html" data-drupal-link-system-path="node/275">Contact Us</a>
              </li>








              @if (Route::has('login'))

                    @auth




                    <x-app-layout>

                    </x-app-layout>
                    @else
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                        @if (Route::has('register'))
                           <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link">Apply/Enroll</a></li>
                        @endif
                    @endauth
          
            @endif








        </ul>
  


  </nav>

  </div>

        </div>

      </div>

    </div>
  </div>
</header>
  
  <main id="main" class="main">
    <a id="main-content" tabindex="-1"></a>
      <div class="region region-breadcrumb">
    <div data-drupal-messages-fallback class="hidden"></div>

<div id="block-breadcrumbs" class="breadcrumb-block--orange block breadcrumb-block block-system block-system-breadcrumb-block">
  <div class="breadcrumb-block__inner">
    <div class="container">
                <nav class="breadcrumb" role="navigation" aria-labelledby="system-breadcrumb">
    <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
    <ol>
          <li>
                  <a href="{{url('/')}}">Home</a>
              </li>
          <li>
                  <a href="javascript:;">Sign In</a>
              </li>
          <!-- <li>
                  Curriculum
              </li> -->
        </ol>
  </nav>

          </div>
  </div>
</div>

  </div>

        <div class="main-region">
      <div class="region region-content">
    <div id="block-mainpagecontent" class="block block-system block-system-main-block">
  
    
      
<article data-history-node-id="5861" role="article" about="/core-division" class="node node--type-landing-page node--promoted node--view-mode-full">

  
    

  
  
  <div class="node__content">
    
      <div class="field field--name-field-paragraphs field--type-entity-reference-revisions field--label-hidden field__items">
              <div class="field__item" tabindex="0"><div >
    <div class="sidekick-banner bg--fog text--dark">
    <div class="sidekick-banner__content">
    <div class="container">
      <div class="sidekick-banner__content-inner text--center padding-two-sides--large">
                  <h1 class="sidekick-banner__title">
            <div class="field field--name-field-title field--type-string field--label-hidden field__item">Log In<span style="width:80px; font-size:70px"><svg class="field field--name-field-title field--type-string field--label-hidden field__item" style="width:; height:; size:100px; font-size:100%" xmlns="http://www.w3.org/2000/svg" width="60" height="50" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
  <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg></span></div>
      </h1>
                          <div class="sidekick-banner__subtitle">
         
      </div>
              </div>
    </div>
  </div>
</div>
</div>
</div>
              <div class="field__item" tabindex="0">  
          
    
    
    
    
    

              <div class="field__item" tabindex="0">
  
<div >
  <div class="text-columns  bg--white text--dark ">
  <div class="container">
    
    
          
      <div class="text-columns__grid text-columns__grid--1-items">
                  
<div class="text-columns__item ">
  
      <div class="text-columns__body">


  <div class="container">

  <form method="POST" action="{{ route('login') }}">
            @csrf
            <x-jet-validation-errors style="color:red; font-weight:bold; margin-bottom:20px" class="mb-5" />
            @if(session()->has('success_message'))
      <div class="alert alert-success alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">x</button>
        {{session()->get('success_message')}}
      </div>
      @endif


      @if(session()->has('error_message'))
      <div class="alert alert-success alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">x</button>
        {{session()->get('error_message')}}
      </div>
      @endif
            <div>
              <!-- <div classs="d-flex>"  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg><x-jet-label for="email" value="{{ __('Email') }}" /></div> -->
<label for="aaa"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope ml-3" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg>Email</label>
                <x-jet-input id="email" style="width:100%; padding:10px; font-size:22px" class=" ml-3 block p-5 mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div> <br>

            <div class="mt-4">
                <!-- <x-jet-label for="password" value="{{ __('Password') }}" /> -->
                <label for="aa"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2zM3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3z"/>
</svg>Password</label>
                <x-jet-input id="password" style="width:100%; padding:10px; font-size:22px" class=" form-control block p-5 mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div> <br>


            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a style="color:red; font-size:22px" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4 btn btn-success ml-3" style="background:green; border:none; border-radius:13px; margin-left:10px">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
  </div>

              </div>
      </div>
</div>
</div>
</div>
          </div>
  
  </div>

</article>

  </div>

  </div>

  </div>
  </main>

  
      <footer class="footer">
      <section class="footer-panel bg--chocolate text--white">
      <div class="container">
        <div class="footer-panel__top__item">
            <div class="region region-footer-panel-first">
    
<div id="block-dynamicfooterfirstblock" class="block block-spcs-domain block-dynamic-footer-first-block">
  
      <h3 class="footer-panel__title ">
            <div class="field field--name-field-title field--type-string field--label-hidden field__item">Who We Are</div>
      </h3>
    

      <div class="logo-footer branding">
      <a class="logo" href="https://ohs.stanford.edu/">
        <img src="sites/default/files/2018-02/OHS_2Ln_WHITE.svg" alt="Footer logo" width="160" height="34">
      </a>
    </div>
  
  <div class="who-we-are link-has-underline">
    <p></p>
    <a href="https://spcs.stanford.edu/">Explore Stanford Pre-Collegiate Studies</a>
  </div>
</div>

  </div>

        </div>
        <div class="footer-panel__top__item">
            <div class="region region-footer-panel-second">
    
    <div id="block-dynamicfootersecondblock" class="block block-spcs-domain block-dynamic-footer-second-block">
  
      <h3 class="footer-panel__title ">
            <div class="field field--name-field-title field--type-string field--label-hidden field__item">Contact Info</div>
      </h3>
    

  <div class="footer-panel__body">
    
            <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item"><p>Stanford Online High School<br />
Academy Hall  Floor 2 8853<br />
415 Broadway<br />
Redwood City, CA 94063</p>

<p><a href="contact-us.html" target="_blank">Contact Stanford OHS</a></p></div>
      
  </div>

  <div class="social-links icon-bg-white">
    <ul>
                      <li>
          <a class="icon-facebook" href="https://www.facebook.com/stanford.ohs" title="Facebook">Facebook</a>
        </li>
                      <li>
          <a class="icon-camera-2" href="https://www.instagram.com/stanford_ohs/" title="Camera 2">Camera 2</a>
        </li>
          </ul>
  </div>

</div>

  </div>

        </div>
        <div class="footer-panel__top__item">
            <div class="region region-footer-panel-thrid">
    <nav role="navigation" aria-labelledby="block-dynamicfooterthirdblock-menu" id="block-dynamicfooterthirdblock" class="block block-menu navigation menu--">
      
    <h3 id="block-dynamicfooterthirdblock-menu" class="footer-panel__title">Navigate</h3>
  

        <div class="nav-footer">
      
              <ul class="menu">
                    <li class="menu-item">
        <a href="about.html" data-drupal-link-system-path="node/22">About</a>
              </li>
                <li class="menu-item">
        <a href="alumni.html" data-drupal-link-system-path="node/884">Alumni</a>
              </li>
                <li class="menu-item">
        <a href="https://familygateway.ohs.stanford.edu/">Gateway</a>
              </li>
                <li class="menu-item">
        <a href="questions.html" data-drupal-link-system-path="node/717">Questions?</a>
              </li>
        </ul>
  


    </div>
  </nav>

  </div>

        </div>
        <div class="footer-panel__top__item">
            <div class="region region-footer-panel-last">
    <div id="block-dynamicfooterfourthblock" class="block block-spcs-domain block-dynamic-footer-fourth-block">
  
      <h3 class="footer-panel__title ">
            <div class="field field--name-field-title field--type-string field--label-hidden field__item">Support Us</div>
      </h3>
    
  <div class="support-us">
    <p>Your gift to Stanford Online High School benefits instructional and outreach activities.</p>
    <a class="btn btn--small btn--ripe-lemon" href="giving.html">Make a Gift</a>
  </div>

</div>

  </div>

        </div>
      </div>
    </section>
  
  <section class="footer-global bg--cardinal-red text--white">
    <div class="container">
      <div class="footer-global__inner">
          <div class="region region-footer">
    


        
            
<div id="block-copyright" class="block block-block-content block-block-contente1fe857b-e8b5-4803-82f7-b71f368652e9">
  
  
  <div class="footer-global__logo">
    <img src="sites/default/files/2017-10/footer-stanford-logo%402x.png" alt=" Footer logo" width="110" height="51">
  </div>
  <div class="footer-global__nav">
    <ul class="footer-global__links">
            <li>
        <a href="http://www.stanford.edu/">Stanford Home</a>
      </li>
            <li>
        <a href="https://visit.stanford.edu/plan/">Maps &amp; Directions</a>
      </li>
            <li>
        <a href="http://www.stanford.edu/search/">Search Stanford</a>
      </li>
            <li>
        <a href="http://emergency.stanford.edu/">Emergency Info</a>
      </li>
          </ul>
    <ul class="footer-global__policy-links">
              <li>
          <a href="https://www.stanford.edu/site/terms/">Terms of Use</a>
        </li>
              <li>
          <a href="https://www.stanford.edu/site/privacy/">Privacy</a>
        </li>
              <li>
          <a href="https://uit.stanford.edu/security/copyright-infringement">Copyright</a>
        </li>
              <li>
          <a href="https://adminguide.stanford.edu/chapter-1/subchapter-5/policy-1-5-4">Trademarks</a>
        </li>
              <li>
          <a href="http://exploredegrees.stanford.edu/nonacademicregulations/nondiscrimination/">Non-discrimination</a>
        </li>
              <li>
          <a href="https://www.stanford.edu/site/accessibility">Accessibility</a>
        </li>
          </ul>
  </div>
  <div class="footer-global__copyright">
    
            <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item"><p>© Stanford University. Stanford, California 94305.</p></div>
      
  </div>
</div>

  </div>

      </div>
    </div>
  </section>

</footer>
  </div>
      </div>
  </div>

    
    <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"node\/5861","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"en"},"pluralDelimiter":"\u0003","suppressDeprecationErrors":true,"ajaxPageState":{"libraries":"classy\/base,classy\/messages,classy\/node,core\/normalize,core\/picturefill,domain_base_color\/main_ohs,extlink\/drupal.extlink,paragraphs\/drupal.paragraphs.unpublished,spcs\/global-js,spcs\/global-styling,system\/base","theme":"spcs","theme_token":null},"ajaxTrustedUrl":{"form_action_p_pvdeGsVG5zNF_XLGPTvYSKCf43t8qZYSwcfZl2uzM":true},"data":{"extlink":{"extTarget":true,"extTargetNoOverride":false,"extNofollow":false,"extNoreferrer":false,"extFollowNoOverride":false,"extClass":"0","extLabel":"(link is external)","extImgClass":false,"extSubdomains":false,"extExclude":"","extInclude":"","extCssExclude":"","extCssExplicit":"","extAlert":false,"extAlertText":"","mailtoClass":"0","mailtoLabel":"(link sends email)","extUseFontAwesome":false,"extIconPlacement":"append","extFaLinkClasses":"fa fa-external-link","extFaMailtoClasses":"fa fa-envelope-o","whitelistedDomains":null}},"user":{"uid":0,"permissionsHash":"50089a5f011b5b9a54fa8c2bf7a41281b226ce0f84fceddfbe7a1f473fbf38a7"}}</script>
<script src="sites/default/files/js/js_I6SU1J4k2JdQApy174fuSUQmhHQaN1PWcoyFVaY9phk.js"></script>

  <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"f639074655","applicationID":"117349135","transactionName":"ZQAENhRUV0EEB00PV1xKJwESXFZcShRYAV1tBgcBDlA=","queueTime":0,"applicationTime":29,"atts":"SUcHQFxORE8=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>

<!-- Mirrored from onlinehighschool.stanford.edu/core-division by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2022 19:58:59 GMT -->
</html>

