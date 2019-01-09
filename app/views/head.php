<link rel="apple-touch-icon" sizes="57x57" href="/img/favicom/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/favicom/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/favicom/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/favicom/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/favicom/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/favicom/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/favicom/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/favicom/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/favicom/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/img/favicom/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicom/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/favicom/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicom/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<script type="text/javascript" src="/script/minify/jQuery.3.3.1-min.js"></script>
<script>
  window.prismic = {
    endpoint: '<?= PRISMIC_URL ?>'
  };
  var Cookie = {   

		Create: function (name, value, days) {

		   var expires = "";

		    if (days) {
		       var date = new Date();
		       date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
		       expires = "; expires=" + date.toGMTString();
		   }

		   document.cookie = name + "=" + value + expires + "; path=/";
		},

		Read: function (name) {

		    var nameEQ = name + "=";
		    var ca = document.cookie.split(";");

		    for (var i = 0; i < ca.length; i++) {
		        var c = ca[i];
		        while (c.charAt(0) == " ") c = c.substring(1, c.length);
		        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
		    }

		    return null;
		},

		Erase: function (name) {

		    Cookie.create(name, "", -1);
		}

	};

	if(Cookie.Read('accept') == null) {
		Cookie.Create('accept', 'false', 365);
	}

</script>
<script src="https://static.cdn.prismic.io/prismic.js"></script>