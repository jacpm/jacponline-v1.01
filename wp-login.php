<!DOCTYPE html>
<html lang="nl">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Jac P Mash Login</title>
	<meta name="robots" content="max-image-preview:large, noindex, noarchive">
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/jquery/jquery.min.js?ver=3.6.3" id="jquery-core-js"></script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0" id="jquery-migrate-js"></script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-content/plugins/buddyboss-platform/bp-core/js/vendor/magnific-popup.js?ver=2.3.2" id="bp-nouveau-magnific-popup-js"></script>
<link rel="stylesheet" id="dashicons-css" href="http://localhost/Jac-P-Mash/wp-includes/css/dashicons.min.css?ver=6.2" type="text/css" media="all">
<link rel="stylesheet" id="buttons-css" href="http://localhost/Jac-P-Mash/wp-includes/css/buttons.min.css?ver=6.2" type="text/css" media="all">
<link rel="stylesheet" id="forms-css" href="http://localhost/Jac-P-Mash/wp-admin/css/forms.min.css?ver=6.2" type="text/css" media="all">
<link rel="stylesheet" id="l10n-css" href="http://localhost/Jac-P-Mash/wp-admin/css/l10n.min.css?ver=6.2" type="text/css" media="all">
<link rel="stylesheet" id="login-css" href="http://localhost/Jac-P-Mash/wp-admin/css/login.min.css?ver=6.2" type="text/css" media="all">
<link rel="stylesheet" id="bp-nouveau-icons-map-css" href="http://localhost/Jac-P-Mash/wp-content/plugins/buddyboss-platform/bp-templates/bp-nouveau/icons/css/icons-map.min.css?ver=2.3.2" type="text/css" media="screen">
<link rel="stylesheet" id="bp-nouveau-bb-icons-css" href="http://localhost/Jac-P-Mash/wp-content/plugins/buddyboss-platform/bp-templates/bp-nouveau/icons/css/bb-icons.min.css?ver=1.0.3" type="text/css" media="screen">
<link rel="stylesheet" id="bp-nouveau-css" href="http://localhost/Jac-P-Mash/wp-content/plugins/buddyboss-platform/bp-templates/bp-nouveau/css/buddypress.min.css?ver=2.3.2" type="text/css" media="screen">
		<script>jQuery( document ).ready( function () {
				if ( jQuery('.popup-modal-register').length ) {
					jQuery('.popup-modal-register').magnificPopup({
						type: 'inline',
						preloader: false,
						fixedContentPos: true,
						modal: true
					});
					jQuery('.popup-modal-dismiss').click(function (e) {
						e.preventDefault();
						$.magnificPopup.close();
					});
				}
				if ( jQuery('.popup-modal-login').length ) {
					jQuery('.popup-modal-login').magnificPopup({
                        type: 'inline',
    					preloader: false,
                        fixedBgPos: true,
    					fixedContentPos: true
					});
					jQuery('.popup-modal-dismiss').click(function (e) {
						e.preventDefault();
						$.magnificPopup.close();
					});
				}
			});</script>
			<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
	<style>.login h1 {
				display: none !important;
			}</style>	</head>
	<body class="login no-js login-action-login wp-core-ui  locale-nl-nl">
	<script type="text/javascript">document.body.className = document.body.className.replace('no-js','js');</script>
		<div id="login">
		<h1><a href="http://localhost/Jac-P-Mash">Jac P Mash</a></h1>
	
		<form name="loginform" id="loginform" action="http://localhost/Jac-P-Mash/wp-login.php" method="post">
			<p>
				<label for="user_login">E-Mail Adres</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Wachtwoord</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password" spellcheck="false">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Wachtwoord tonen">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">Onthoud mij</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Inloggen">
									<input type="hidden" name="redirect_to" value="http://localhost/Jac-P-Mash/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
				<a href="http://localhost/Jac-P-Mash/register/">Registreren</a> | <a href="http://localhost/Jac-P-Mash/wp-login.php?action=lostpassword">Je wachtwoord vergeten?</a>			</p>
					<script type="text/javascript">function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }</script>
				<p id="backtoblog">
			<a href="http://localhost/Jac-P-Mash/">&larr; Ga naar Jac P Mash</a>		</p>
			</div>
				<div class="language-switcher">
				<form id="language-switcher" action="" method="get">

					<label for="language-switcher-locales">
						<span class="dashicons dashicons-translation" aria-hidden="true"></span>
						<span class="screen-reader-text">
							Taal						</span>
					</label>

					<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
<option value="nl_NL" lang="nl" selected data-installed="1">Nederlands</option></select>
					
					
					
						<input type="submit" class="button" value="Wijzigen">

					</form>
				</div>
				<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5" id="wp-hooks-js"></script>
<script type="text/javascript" id="heartbeat-js-extra">
/* <![CDATA[ */
var heartbeatSettings = {"ajaxurl":"\/Jac-P-Mash\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/heartbeat.min.js?ver=6.2" id="heartbeat-js"></script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-content/plugins/buddyboss-platform/bp-core/js/vendor/codemirror.min.js?ver=2.3.2" id="bp-nouveau-codemirror-js"></script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-content/plugins/buddyboss-platform/bp-core/js/vendor/css.min.js?ver=2.3.2" id="bp-nouveau-codemirror-css-js"></script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/jquery/ui/menu.min.js?ver=1.13.2" id="jquery-ui-menu-js"></script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/dist/dom-ready.min.js?ver=392bdd43726760d1f3ca" id="wp-dom-ready-js"></script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script type="text/javascript" id="wp-a11y-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2023-03-30 09:54:18+0000","generator":"GlotPress\/4.0.0-alpha.4","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"nl"},"Notifications":["Meldingen"]}},"comment":{"reference":"wp-includes\/js\/dist\/a11y.js"}} );</script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/dist/a11y.min.js?ver=ecce20f002eda4c19664" id="wp-a11y-js"></script>
<script type="text/javascript" id="jquery-ui-autocomplete-js-extra">
/* <![CDATA[ */
var uiAutocompleteL10n = {"noResults":"Niets gevonden.","oneResult":"1 resultaat gevonden. Gebruik de pijltoetsen omhoog en omlaag om te navigeren.","manyResults":"%d resultaten gevonden. Gebruik de pijltoetsen omhoog en omlaag om te navigeren.","itemSelected":"Item geselecteerd."};
/* ]]> */
</script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.13.2" id="jquery-ui-autocomplete-js"></script>
<script type="text/javascript" id="zxcvbn-async-js-extra">
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"http:\/\/localhost\/Jac-P-Mash\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script type="text/javascript" id="password-strength-meter-js-extra">
/* <![CDATA[ */
var pwsL10n = {"unknown":"Sterkte wachtwoord onbekend","short":"Erg zwak","bad":"Zwak","good":"Gemiddeld","strong":"Sterk","mismatch":"Verkeerde combinatie"};
/* ]]> */
</script>
<script type="text/javascript" id="password-strength-meter-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2023-03-30 10:02:03+0000","generator":"GlotPress\/4.0.0-alpha.4","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"nl"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s is verouderd sinds versie %2$s! Gebruik in plaats daarvan %3$s. Overweeg om meer inclusieve code te schrijven."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );</script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-admin/js/password-strength-meter.min.js?ver=6.2" id="password-strength-meter-js"></script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
<script type="text/javascript" id="wp-util-js-extra">
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/Jac-P-Mash\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-includes/js/wp-util.min.js?ver=6.2" id="wp-util-js"></script>
<script type="text/javascript" id="user-profile-js-extra">
/* <![CDATA[ */
var userProfileL10n = {"user_id":"0","nonce":"c83d61f6ba"};
/* ]]> */
</script>
<script type="text/javascript" id="user-profile-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2023-03-30 10:02:03+0000","generator":"GlotPress\/4.0.0-alpha.4","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"nl"},"Your new password has not been saved.":["Je nieuwe wachtwoord is niet opgeslagen."],"Hide":["Verbergen"],"Show":["Tonen"],"Confirm use of weak password":["Bevestig het gebruik van een zwak wachtwoord"],"Hide password":["Wachtwoord verbergen"],"Show password":["Wachtwoord tonen"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );</script>
<script type="text/javascript" src="http://localhost/Jac-P-Mash/wp-admin/js/user-profile.min.js?ver=6.2" id="user-profile-js"></script>
		<script>/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);</script>
			<div class="clear"></div>
	</body>
	</html>