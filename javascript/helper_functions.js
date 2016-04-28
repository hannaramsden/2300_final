//inspiratition from http://www.webdeveloper.com/forum/showthread.php?218226-hide-show-or-expand-collapse-DIV-need-a-simple-code

function showMore(div_id, text_id) {
	var div_id = document.getElementById(div_id);
	var text_id = document.getElementById(text_id)
	if(div_id.style.display != "block") {
		div_id.style.display = "block";
		text_id.innerHTML = "Collapse content.";
	}
	else {
		div_id.style.display = "none";
		text_id.innerHTML = "Read more about our projects.";
	}
}

function showResearchForm(div_id, text_id) {
	var div_id = document.getElementById(div_id);
	var text_id = document.getElementById(text_id);
	if (div_id.style.display != "block") {
		div_id.style.display = "block";
		text_id.innerHTML = "Hide form";
	}
	else {
		div_id.style.display = "none";
		text_id.innerHTML = "Add a new post";
	}
}

function showNewsForm(div_id, text_id) {
	var div_id = document.getElementById(div_id);
	var text_id = document.getElementById(text_id);
	if (div_id.style.display != "block") {
		div_id.style.display = "block";
		text_id.innerHTML = "Hide form";
	}
	else {
		div_id.style.display = "none";
		text_id.innerHTML = "Add a new post";
	}
}


function showTeamForm(div_id, text_id) {
	var div_id = document.getElementById(div_id);
	var text_id = document.getElementById(text_id);
	if (div_id.style.display != "block") {
		div_id.style.display = "block";
		text_id.innerHTML = "Hide form";
	}
	else {
		div_id.style.display = "none";
		text_id.innerHTML = "Add profile";
	}
}