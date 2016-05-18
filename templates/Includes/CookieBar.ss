<% with SiteConfig %>
<div id="cookiebarholder" style="display: none;">
	<div id="cookiebar">
		<div class="container">
			<div class="description typography">
				<% if CookieImage %>
					$CookieImage.SetHeight(80)
				<% end_if %>

				<p class="notification">$CookieBarTitle
					<a href="$CookiePage.Link" class="more">$CookieMoreText</a>
				</p>

				<div class="content">
				   $CookieBarContent
				</div>
			</div>
			<div class="links">
				<a id="acceptcookies" href="$Top.AcceptCookiesLink">
					<i class="glyphicon glyphicon-ok">
						<span class="icon-fallback">✔</span></i> $CookieCloseText
				</a>
				<% if CookiePage %>
					<a href="$CookiePage.Link" class="infolink">
						<i class="glyphicon glyphicon-info-sign">
						<span class="icon-fallback">ℹ</span></i> $CookieMoreText
					</a>
				<% end_if %>
			</div>
			<div class="clear"><!-- --></div>
		</div>
	</div>
</div>
<% end_with %>

