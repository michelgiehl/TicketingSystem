/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'Ugunity-Font\'">' + entity + '</span>' + html;
	}
	var icons = {
		'apache-icon': '&#xe908;',
		'nginx-icon': '&#xe909;',
		'anon-logo': '&#xe900;',
		'ereboss-icon': '&#xe901;',
		'ereboss-logo': '&#xe902;',
		'freedom-fighters': '&#xe903;',
		'molo-throw': '&#xe904;',
		'qrcode-ereboss': '&#xe905;',
		'ts-icon': '&#xe906;',
		'ts-icon-inv': '&#xe907;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
