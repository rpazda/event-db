$(document).ready( function(){
	
	var options = {
	  valueNames: [ 'eventName', 'eventTime', 'locationName', 'category' ]
	};

	var userList = new List('public-events-list', options);
	
	var options2 = {
	  valueNames: [ 'eventName', 'eventTime', 'locationName', 'category' ]
	};

	var userList2 = new List('private-events-list', options);
	
	var options3 = {
	  valueNames: [ 'eventName', 'rsoName', 'eventTime', 'locationName', 'category' ]
	};

	var userList3 = new List('RSO-events-list', options);
	
});