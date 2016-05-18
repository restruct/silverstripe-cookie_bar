<?php

class CookiePageExtension extends DataExtension {
	
	/**
	 * insert javascript into the requirements & output the cookiebar markup
	 */
	public function CookieBar() {
		
		Requirements::customScript("
			
			jQuery(document).ready(function(){
//					jQuery('#cookieBar a.more').click(function(e){
//						e.preventDefault();
//						
//						if(jQuery(this).hasClass('open'))
//						{
//							jQuery(this).html('Show more').removeClass('open');
//							jQuery('.content').slideUp();
//						}
//						else 
//						{
//							jQuery(this).html('Show less').addClass('open');
//							jQuery('.content').slideDown();
//						}
//
//						return false;
//					});

				// check if we should show
				if(document.cookie.indexOf('cookiesAccepted=true')==-1){
					//jQuery('#cookiebar').show();
					jQuery('body').prepend(jQuery('#cookiebar'));
				}
				
				// accept action
				jQuery('#acceptcookies').click(function(e){
					e.preventDefault();
					jQuery.ajax({
						url: '" . $this->getAcceptCookiesLink() . "',
						success: function(data, textStatus) {
							if(data === 'success') {
								jQuery('#cookiebar').slideUp(500);
							}
						}
					});				

				});
				
			});
		", "cookiebar-script");
		
		return $this->owner->renderWith('CookieBar');
		
		// return
//		if(SiteConfig::current_site_config()->CookieBarEnable && 
//				(!Cookie::get('cookiesAccepted') || Cookie::get('cookiesAccepted') != 'true')) {
//			return 'show-cookie-bar';
//		}
	}

	/**
	 * Generate link to accept cookies 
	 * 
	 * @return String
	 */
	public function getAcceptCookiesLink()
	{
		return Director::baseURL() . CookieBarController::URLSegment . '/accept';
	}
}