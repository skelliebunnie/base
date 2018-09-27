$(document).ready(function() {
	var d = new Date();
	var date = formatDate(d);
	console.log("Ready " + date);

	getData("imax",date,"#imax");

});

function formatDate(fulldate) {
	// this is the regex to remove the '. ' (and the final '.') after the numbers in the date
	var r = /\.[\s]*/gi;
	// 'ko-KR', Korean date locale, returns year-month-day
	return fulldate.toLocaleDateString('ko-KR', {year: '2-digit', month: '2-digit', day: '2-digit'}).replace(r, '');
}

function getData(type,date,target) {
	// e.g. "180927-imax.json"
	var filename = date + "-" + type + ".json";
	var path = "http://10.0.62.64:4000/data/" + type + "/" + filename;
	console.log(path);

	// check to make sure the file actually exists! If it doesn't, display a message (for now)
	$.ajax({
		url: "./data/imax/180927-imax.json",
		dataType: "json",
		type: 'HEAD',
		crossDomain: true,
		error: function() {
			// file NOT exists
			$(target).html("<p>There are no " + type + " tickets available for " + date + "</p>");
		},
		success: function() {
			// file DOES exist
			buildTable(type,filename,target);
		}
	})
}

function buildTable(type,filename,target) {
	var path = "data/" + type + "/" + filename;

	$.getJSON( path, function( data ) {
		var items = [];

		for($i = 0; $i < data.length; $i++) {
			var item = data[$i];
			
			console.log(item);

			$.each(item, function(key, val) {
				items.push("<td id='" + key + "'>" + val + "</td>");
			});

			$( "<tr/>", {
				//"class": "movie-row",
				html: items.join( "" )
			}).appendTo( target );

			items = [];

		} // end of for loop

	});
}