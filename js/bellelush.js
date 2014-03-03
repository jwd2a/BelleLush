/* Signup */
console.log("exec js");

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
		urlRoot: apiURL + "/users",
		idAttribute: "_id"
	});


	/* Signup Function */


	$("#signupBtn").click(function(e){
		var mUser = new UserModel({
			"username": $("#username").val(),
			"email": $("#email").val(),
			"password": $("#password").val()
		});

		mUser.save(null, {
			beforeSend: sendAuthentication,
			success : function(){
				localStorage.setItem("bl_user", JSON.stringify(mUser));	
				window.location.href = $("#signupBtn").attr("data-target");	
			},
			error: function(xhr,status,err){
				console.log(err);
			}

		});
		e.preventDefault();
	});

	$("#faceTypes div").click(function(e){
	
		var currentUser = new UserModel(JSON.parse(localStorage.getItem("bl_user")));

		var token = btoa(currentUser.get("accessToken")+":X");

		currentUser.save({
			"faceType": $(e.currentTarget).attr("data-faceTypeId")
		},{
			beforeSend: function(xhr){
				xhr.setRequestHeader("Authorization", "Basic "+ token);
			},
			success: function(){
				//no-op
			},
			error: function(){
				//display error message and disable next button
				$('a[href="#tone"]').preventDefault();
			}
		});
		
	});	
});
