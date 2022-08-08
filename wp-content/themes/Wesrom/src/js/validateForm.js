function validateForm() {
  let x = document.forms["contactForm"]["fullName"].value;
  if (x == "") {
    console.log("Please enter your full name.");
    return false;
  }

  let y = document.forms["contactForm"]["email"].value;
  if (y == "") {
    console.log("Please enter an email address.");
    return false;
  }

  var validEmail =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (!y.match(validEmail)) {
    console.log("Please enter a valid email address.");
  }

  let z = document.forms["contactForm"]["phoneNumber"].value;
  var phone = /^\d{10}$/;
  if (!z.match(phone)) {
    console.log("Please enter a 10 digit phone number.");
    return false;
  }
}
