function verifyProperty() {
	var errorMessage = "";
	var title = document.getElementById("title").value;
	var house_number = document.getElementById("house_number").value;
	var unit_flat = document.getElementById("unit_flat").value;
	var street_name = document.getElementById("street_name").value;
	var price = document.getElementById("price").value;
	var bedrooms = document.getElementById("bedrooms").value;
	var floor_area = document.getElementById("floor_area").value;
	var land_area = document.getElementById("land_area").value;
	var details = document.getElementById("details").value;
	var parking_garage = document.getElementById("parking_garage").value;
	var amenities = document.getElementById("amenities").value;
	var contact_phone_email = document.getElementById("contact_phone_email").value;
	
	if(title.length == 0) {
		errorMessage += "Please Enter Listing Title \n";
		document.getElementById("title").value = title;
	}
	if(house_number.length == 0) {
		errorMessage += "Please Enter House Number \n";
		document.getElementById("house_number").value = house_number;
	}
	if(street_name.length == 0) {
		errorMessage += "Please Enter Street Name \n";
		document.getElementById("street_name").value = street_name;
	}
	if(price.length == 0) {
		errorMessage += "Please Enter Price \n";
		document.getElementById("price").value = price;
	}
	if(bathrooms.length == 0) {
		errorMessage += "Please Enter Bathrooms \n";
		document.getElementById("bathrooms").value = bathrooms;
	}
	if(floor_area.length == 0) {
		errorMessage += "Please Enter Floor Area \n";
		document.getElementById("floor_area").value = floor_area;
	}
	if(land_area.length == 0) {
		errorMessage += "Please Enter Land Area \n";
		document.getElementById("land_area").value = land_area;
	}
	if(details.length == 0) {
		errorMessage += "Please Enter Details \n";
		document.getElementById("details").value = details;
	}
	if(contact_phone_email.length == 0) {
		errorMessage += "Please Enter Contact Phone/Email \n";
		document.getElementById("contact_phone_email").value = contact_phone_email;
	}
	 if(errorMessage.length > 0) {
		 alert(errorMessage);
		 return false;
     } else {
		 return true; 
	 }
}
function verifyRegister() {
	var errorMessage = "";
	var first_name = document.getElementById("first_name").value;
	var last_name = document.getElementById("last_name").value;
	var address = document.getElementById("address").value;
	var phone = document.getElementById("phone").value;
	var email = document.getElementById("email").value;
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var confirm_password = document.getElementById("confirm_password").value;
	if(document.getElementById("myErrors")==null) {
		error_box = document.createElement("div");
		error_box.setAttribute("id","myErrors");
	}
	error_box.innerHTML = errorMessage;
	if(first_name.length == 0) {
		errorMessage += "Please Enter First Name <br /> ";
		document.getElementById("first_name").value = first_name;
	}
	if(last_name.length == 0) {
		errorMessage += "Please Enter Last Name <br /> ";
		document.getElementById("last_name").value = last_name;
	}
	if(address.length == 0) {
		errorMessage += "Please Enter Address <br /> ";
		document.getElementById("address").value = address;
	}
	if(phone.length == 0) {
		errorMessage += "Please Enter Phone Number <br /> ";
		document.getElementById("phone").value = phone;
	}
	if(email.length == 0) {
		errorMessage += "Please Enter Email Address <br /> ";
		document.getElementById("email").value = email;
	}
	if(username.length == 0) {
		errorMessage += "Please Enter Username <br /> ";
		document.getElementById("username").value = username;
	}
	if(password.length == 0) {
		errorMessage += "Please Enter password <br /> ";
		document.getElementById("password").value = password;
	}
	if(password != confirm_password) {
		errorMessage += "Please confirm your password <br /> ";
		document.getElementById("confirm_password").value = "";
	}
	if(phone.length < 9 || phone.length > 10) {
		errorMessage += "Phone Number should have 9-10 digits <br /> ";
		document.getElementById("phone").value = phone;
	}
	email_regex = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.(com)|(net)|(edu)$/;
	if(!email_regex.test(email)) {
		errorMessage += "Invalid Email Address<br /> ";
		document.getElementById("email").value = email;
	}
	phone_regex = /^02[0-9]+$/;
	if(!phone_regex.test(phone)) {
		errorMessage += "Invalid Phone Number<br /> ";
		document.getElementById("phone").value = phone;
	}
	var regTest = /^[a-zA-Z0-9]{6,}/;
	if(!regTest.test(username.value)) {
		errorMessage += "Username should have at least 6 alphanumeric <br />";
		document.getElementById("username").value = username;
	}
	if(!regTest.test(password.value)) {
		errorMessage += "Password should have at least 6 alphanumeric <br />";
		document.getElementById("password").value = password;
	}
	
	if(errorMessage.length > 0) {
		error_box.className = "errorMsg";
		error_box.innerHTML = errorMessage;
		var main_content = document.getElementById("content");
        main_content.appendChild(error_box);
		return false;
	} else {
		return true;	
	}
}
function verifyLogin() {
	if(document.getElementById("myErrors")==null) {
		error_box = document.createElement("div");
		error_box.setAttribute("id","myErrors");
	}
	errorMessage = "";
	error_box.innerHTML = errorMessage;
	var myUsername = document.getElementById("username");
	var myPassword = document.getElementById("password");
	if(myUsername.value.length == 0) {
		errorMessage += "Please Enter Username <br />";
	}
	if(myPassword.value.length == 0) {
		errorMessage += "Please Enter password <br />";
	}
	var regTest = /^[a-zA-Z0-9]+$/;
	//var regTest = /^[a-zA-Z0-9]{6,}/;
	if(!regTest.test(myUsername.value)) {
		errorMessage += "Username should have at least 6 alphanumeric <br />";
		//document.getElementById("username").value = myUsername;
	}
	if(!regTest.test(myPassword.value)) {
		errorMessage += "Password should have at least 6 alphanumeric <br />";
		//document.getElementById("password").value = myPassword;
	}
	
	if(errorMessage.length > 0) {
		error_box.className = "errorMsg";
		error_box.innerHTML = errorMessage;
		var main_content = document.getElementById("content");
        main_content.appendChild(error_box);
		return false;
	} else {
		return true;
	}
}
function verifyPrice() {
	var minPrice = document.getElementById("search_min_price");
	var maxPrice = document.getElementById("search_max_price");
	if(minPrice.value > maxPrice.value) {
		document.getElementById("search_max_price").value = minPrice.value;	
	}
}
function verifyRooms() {
	var minRooms = document.getElementById("search_min_rooms");
	var maxRooms = document.getElementById("search_max_rooms");
	if(minRooms.value > maxRooms.value) {
		document.getElementById("search_max_rooms").value = minRooms.value;	
	}
}
function verifyBath() {
	var minBath = document.getElementById("search_min_bath");
	var maxBath = document.getElementById("search_max_bath");
	if(minBath.value > maxBath.value) {
		document.getElementById("search_max_bath").value = minBath.value;	
	}
}