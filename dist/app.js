function getScrollPosition(){var t=window.pageYOffset+window.innerHeight,e=document.querySelector(".trigger"),s=e.offsetTop+parseInt(window.getComputedStyle(e).height);t>s-200&&e.classList.add("go")}void 0!=document.querySelector(".trigger")&&(window.onscroll=getScrollPosition);var tools={siteUrl:"",url:"url",postRequest:function(t,e){var s=new XMLHttpRequest;return new Promise(function(n,o){s.open("POST",t,e),s.onload=function(){this.status>199&&this.status<300?n(this.response):o({status:this.status,statusText:s.statusText})},s.onError=function(){o({status:this.status,statusText:s.statusText})},s.send(t,e)})},getRequest:function(t){return this.x.onreadystatechange=function(t){},this.x.open("GET",t||null),this.x.send(null),this.x}};!function(){var t=window.navigator.userAgent.indexOf("MSIE ");return t>0||navigator.userAgent.match(/Trident.*rv\:11\./)?void document.querySelector("html").classList.add("ie"):(console.log("thank you for not using ie"),!1)}(),navigator.userAgent.toLowerCase().indexOf("firefox")>-1&&document.querySelector("html").classList.add("firefox");