
<!-- //-beg- concat_js -->

<script>
	Modernizr.load([
		{
			load: '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
			complete: function() {
				if ( !window.jQuery ) {Modernizr.load('js/vendor/jquery-1.10.2.min.js')}
			}
		},
		{
			test: Modernizr.cssremunit,
			nope: 'js/conditional/js/rem.min.js'
		}
	]);
</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- //-end- concat_js -->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>