var tsoEvents = new Array();
var tsoNews = new Array();

function tsoEvent(date, title, time, location, link, status){
	this.date = date;
	this.title = title;
	this.time = time;
	this.location = location;
	this.link = link;
	this.status = status;
}

function buildEvents(){
	var e1 =  new tsoEvent(
		"2013, 10, 6", 
		"NSO Monthly Manager Call",
		"1-2pm PT",
		"Webex",
		"http://www.google.com",
		true
		);

	var e2 =  new tsoEvent(
		"2013, 10, 8", 
		"CSO Let's Talk Security",
		"3-4pm ET",
		"Live Meeting",
		"http://www.facebook.com",
		true
		);

	var e3 =  new tsoEvent(
		"2013, 10, 22", 
		"P&amp;SCM Townhall",
		"2-3pm PT",
		"Burnaby",
		"http://www.twitter.com",
		true
		);
	tsoEvents=[e1, e2, e3];

	tsoEvents.forEach(addEvent);
}

function addEvent(obj){
	var html = "<tr>";
	for(var property in obj){
		html += "<td>" + obj[property] + "</td>"
	}
	html += "</tr>";
	$("#eventsTable").append(html);
}


function eventSubmit(){
	evndate = $("#eventDate").val();
	evntitle = $("#eventTitle").val();
	evntime = $("#eventTime").val();
	evnplace = $("#eventLocation").val();
	evnlink = $("#eventLink").val();
	evnstatus = false;

	$("#eventDate").val("");
	$("#eventTitle").val("");
	$("#eventTime").val("");
	$("#eventLocation").val("");
	$("#eventLink").val("");

	addEvent(new tsoEvent(evndate, evntitle, evntime, evnplace, evnlink, evnstatus));
}


