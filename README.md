# Cookiebar Module #

## Overview ##

This module provides a configurable notice about cookies, a link to a page about them and an 'accept' link to close the notice. It's based on the cookiebar module by Aram Balakjian & Steve Heyes, adapted to be cache-able.

## Requirements

 * SilverStripe 3 or newer

## Installation

Unpack and copy the cookiebar folder into your SilverStripe project (You can call the folder whatever you like).

Now add $CookieBar just before the closing body tag

	...

		$CookieBar
	</body>

	...


Run "dev/build" in your browser, for example: "http://www.mysite.com/dev/build?flush=all"
