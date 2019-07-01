
function validateForm() {
  let nameValue = document.forms["myForm"]["name"].value;

  if (nameValue == "") {
    alert("Name must be filled out");
    return false;
}
  else return true;
}