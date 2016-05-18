<?php

class CookieBarController extends Page_Controller
{
	const URLSegment = "cookiebar";

	static $allowed_actions = array(
		"accept",
	);

	public function accept() {
		if (!$cookie = Cookie::get('cookiesAccepted')) {
			$cookie = new Cookie();
		}
		//$name, $value, $expiry = 90, $path = null, $domain = null, $secure = false, $httpOnly = false
		$cookie->set('cookiesAccepted', 'true', 365, null, null, null, false); // false so js can read

		if (Director::is_ajax()) {
			echo 'success';
			return;
		} else {
			return $this->redirectBack();
		}
	}
}
