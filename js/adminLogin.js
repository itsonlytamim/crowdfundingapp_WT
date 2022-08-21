function get(id) {
  return document.getElementById(id);
}

function validate() {
  refresh();
  if (get("userid").value == "") {
    hasError = true;
    get("idErr").innerHTML = "User id Requred";
  }

  if (get("pass").value == "") {
    hasError = true;
    get("passErr").innerHTML = "Password Requred";
  }
  return !hasError;
}
function refresh() {
  hasError = false;
  get("idErr").innerHTML = "";
  get("passErr").innerHTML = "";
}
