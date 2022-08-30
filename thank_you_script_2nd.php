<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127572930-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-127572930-2');
  </script>

<!-- Global site tag (gtag.js) - Google Ads: 774982658 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-774982658"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-774982658'); </script>


<!-- Bing Code -->
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"25048542"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>
<!-- end Bing Code -->


<!-- fullstory code -->
<script>
window['_fs_debug'] = false;
window['_fs_host'] = 'fullstory.com';
window['_fs_script'] = 'edge.fullstory.com/s/fs.js';
window['_fs_org'] = 'KFA6K';
window['_fs_namespace'] = 'FS';
(function(m,n,e,t,l,o,g,y){
    if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
    g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s);};g.q=[];
    o=n.createElement(t);o.async=1;o.crossOrigin='anonymous';o.src='https://'+_fs_script;
    y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
    g.identify=function(i,v,s){g(l,{uid:i},s);if(v)g(l,v,s)};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};
    g.anonymize=function(){g.identify(!!0)};
    g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};
    g.log = function(a,b){g("log",[a,b])};
    g.consent=function(a){g("consent",!arguments.length||a)};
    g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
    g.clearUserCookie=function(){};
    g.setVars=function(n, p){g('setVars',[n,p]);};
    g._w={};y='XMLHttpRequest';g._w[y]=m[y];y='fetch';g._w[y]=m[y];
    if(m[y])m[y]=function(){return g._w[y].apply(this,arguments)};
    g._v="1.3.0";
})(window,document,window['_fs_namespace'],'script','user');
</script>
<!-- end fullstory code -->

<!-- Amplitude -->
<script type="text/javascript">
  (function(e,t){var n=e.amplitude||{_q:[],_iq:{}};var r=t.createElement("script")
  ;r.type="text/javascript";r.async=true
  ;r.src="https://cdn.amplitude.com/libs/amplitude-4.5.2-min.gz.js"
  ;r.onload=function(){if(e.amplitude.runQueuedFunctions){
  e.amplitude.runQueuedFunctions()}else{
  console.log("[Amplitude] Error: could not load SDK")}}
  ;var i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)
  ;function s(e,t){e.prototype[t]=function(){
  this._q.push([t].concat(Array.prototype.slice.call(arguments,0)));return this}}
  var o=function(){this._q=[];return this}
  ;var a=["add","append","clearAll","prepend","set","setOnce","unset"]
  ;for(var u=0;u<a.length;u++){s(o,a[u])}n.Identify=o;var c=function(){this._q=[]
  ;return this}
  ;var l=["setProductId","setQuantity","setPrice","setRevenueType","setEventProperties"]
  ;for(var p=0;p<l.length;p++){s(c,l[p])}n.Revenue=c
  ;var d=["init","logEvent","logRevenue","setUserId","setUserProperties","setOptOut",
  "setVersionName","setDomain","setDeviceId","setGlobalUserProperties","identify",
  "clearUserProperties","setGroup","logRevenueV2","regenerateDeviceId","logEventWithTimestamp",
  "logEventWithGroups","setSessionId","resetSessionId"]
  ;function v(e){function t(t){e[t]=function(){
  e._q.push([t].concat(Array.prototype.slice.call(arguments,0)))}}
  for(var n=0;n<d.length;n++){t(d[n])}}v(n);n.getInstance=function(e){
  e=(!e||e.length===0?"$default_instance":e).toLowerCase()
  ;if(!n._iq.hasOwnProperty(e)){n._iq[e]={_q:[]};v(n._iq[e])}return n._iq[e]}
  ;e.amplitude=n})(window,document);

  var project = amplitude.getInstance();
  project.init("889dd21e252f0ad4badb92b2bb4767ef");

  project.logEvent("Viewed Thank You Page", {
    title: document.title,
    url: document.location.href,
    path: document.location.pathname,
    referrer: document.referrer
  });
 project.logEvent("Viewed Thank You Out-of-market Page", {
    title: document.title,
    url: document.location.href,
    path: document.location.pathname,
    referrer: document.referrer
  });
</script>
<!-- End Amplitude -->