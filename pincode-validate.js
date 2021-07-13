function myFunction() {
  // Get the value of the input field with id="numb"
  let x = document.getElementById("pincode").value;
  // If x is Not a Number or less than one or greater than 10
  let text;
  if (x == "00001" || x == "00002") {
    text = "Input OK";
  } else {
    text = "Input invalid";
  }
  alert(text);
}