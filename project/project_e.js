/**
 * @author Nicholas Favale
 */
var myError = document.getElementById('formerror');

var validationInfo = {
	"name" : {
		required: true;
	},
	"yearInSchool" : {
		required: true;
	},
	"major" : {
		required : true;
	},
	"email" : {
		required: true;
	}
};

document.theform.onsubmit = function() {
	for (key in validationInfo) {
		var myField = document.getElementById(key);
		if ((validationInfo[key].required) && (myField.value = '')) {
			myError.innerHTML="Required field " + key + " not filed";
			myField.select();
			return false;
		}
		
	}
	return false;
}
