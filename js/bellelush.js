/* Signup */

$(document).ready(function(){

	var apiURL = "http://localhost:3000";
	var idToken = "21jdai1290sdasdfjklf930r2wadsfjl212er903k";

	sendAuthentication = function (xhr) {
		var user = idToken;
	  	var pass = "X";
	  	var token = user.concat(":", pass);
	    xhr.setRequestHeader('Authorization', ("Basic ".concat(btoa(token))));
	}

	/* Models */

	var UserModel = Backbone.Model.extend({
		url: apiURL + "/users",
		idAttribute: "_id"
	});


	$("#signupBtn").click(function(e){
		var mUser = new UserModel({
			"username": $("#username").val(),
			"email": $("#email").val(),
			"password": $("#password").val()
		});

		mUser.save(null, {
			beforeSend: sendAuthentication,
			success : function(){
				window.location.href = $("#signupBtn").attr("data-target");	
			},
			error: function(xhr,status,err){
				console.log(err);
			}

		});
		e.preventDefault();
	});
});
