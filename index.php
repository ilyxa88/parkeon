<!doctype html> <html> <head> <meta charset="utf-8"> <title></title> <meta name="description" content=""> <meta name="viewport" content="width=device-width"> <!-- Place favicon.ico and apple-touch-icon.png in the root directory --> <link rel="stylesheet" href="styles/vendor.e5235dc9.css"> <link rel="stylesheet" href="styles/main.5b90bd7a.css"> </head> <body ng-app="parkeon2App">
<p>Hello world!!!</p>
 <!--[if lte IE 8]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]--> <!-- With animation --> <!-- <div class="page {{ pageClass }}" ng-view></div> --> <!-- <div  ng-view></div> --> <div class="{{ page }} {{ pageClass }}" ui-view> <div class="page-loading-overlay"> <div class="loader-2"></div> </div> </div> <!-- Google Analytics: change UA-XXXXX-X to be your site's ID --> <script>!function(A,n,g,u,l,a,r){A.GoogleAnalyticsObject=l,A[l]=A[l]||function(){
       (A[l].q=A[l].q||[]).push(arguments)},A[l].l=+new Date,a=n.createElement(g),
       r=n.getElementsByTagName(g)[0],a.src=u,r.parentNode.insertBefore(a,r)
       }(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-XXXXX-X');
       ga('send', 'pageview');</script> <script>var public_vars = public_vars || {};</script> <script src="scripts/vendor.59e5adb3.js"></script> <script src="scripts/scripts.782fc27f.js"></script> </body> </html>