/**
 * @author PSE Consulting Andreas Pflug <pflug@pse-consulting.de>
 */


"use strict";

(function ($) {

function runCheck(url, infotext)
{
	var startTimestamp=new Date();
	$.ajax(
	{ 
		url: url,
		cache: false,
		success: function()
		{
			var rt=(new Date()-startTimestamp);
			var info=infotext + ": " + rt + "ms";
			$('#results').append($('<li>' + info + "</li>"));
		},
	});
}

$(document).ready(function ()
{
	
	$('#reset').click(function()
	{
		$('#results').empty();
	});
	
	$('#ping').click(function()
	{
		runCheck(location.origin+OC.webroot+"/AUTHORS", "Ping");
	});
	$('#version').click(function()
	{
		runCheck(location.origin+OC.webroot+"/version.php", "Version");
	});
	$('#check').click(function()
	{
		runCheck(OC.generateUrl("apps/ncping/check"), "Check");
	});
});


})(jQuery);
