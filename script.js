function validateForm() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const vmodel = document.getElementById("vmodel").value;
  const bookdate = document.getElementById("bookdate").value;
  const tadvance = document.getElementById("tadvance").value;

  // Basic validation
  if (name === "") {
    alert("Please enter your name.");
    return false;
  }

  if (email === "") {
    alert("Please enter your email address.");
    return false;
  }

  if (!isValidEmail(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  if (phone === "") {
    alert("Please enter your phone number.");
    return false;
  }

  if (vmodel === "") {
    alert("Please select a vehicle model.");
    return false;
  }

  if (bookdate === "") {
    alert("Please select a booking date.");
    return false;
  }

  if (tadvance === "") {
    alert("Please enter the advance amount.");
    return false;
  }

  // Additional validation (e.g., date range, room availability) can be added here

  return true;
}

function isValidEmail(email) {
  // Regular expression for email validation
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}