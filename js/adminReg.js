function validateGender() {
  var gn = document.querySelector('input[name="gender"]:checked');
  if (gn == null) {
    return false;
  }
  return true;
}
function validateUserType() {
  var gn = document.querySelector('input[name="UserType"]:checked');
  if (gn == null) {
    return false;
  }
  return true;
}
function validateAdmin() {
  //alert("OK");
  refresh();

  if (get("adname").value == "") {
    hasError = true;
    get("nameErr").innerHTML =
      "<span style='color: red;'> Name required js.</span>";
  } else if (get("adname").value.length <= 2) {
    hasError = true;
    get("nameErr").innerHTML =
      "<span style='color: red;'> Name must be greater than 2 characters js.</span>";
  }

  if (get("userid").value == "") {
    hasError = true;
    get("idErr").innerHTML =
      "<span style='color: red;'> user id required js.</span>";
  } else if (get("userid").value.length <= 2) {
    hasError = true;
    get("idErr").innerHTML =
      "<span style='color: red;'>  User Id must be greater than 2 characters js.</span>";
  }

 if (get("email").value == "") {
   hasError = true;
   get("emailErr").innerHTML =
     "<span style='color: red;'>  Email required.</span>";
 }
  if (get("pass").value == "") {
    hasError = true;
    get("passErr").innerHTML =
      "<span style='color: red;'> Password required.</span>";
  } else if (get("pass").value.length < 8) {
    hasError = true;
    get("passErr").innerHTML =
      "<span style='color: red;'>  password must be greater than 8 characters js.</span>";
  }

  if (get("conpass").value == "") {
    hasError = true;
    get("conpassErr").innerHTML =
      "<span style='color: red;'>  ConfirmPassword required.</span>";
  } else if (get("conpass").value.length < 8) {
    hasError = true;
    get("conpassErr").innerHTML =
      "<span style='color: red;'> ConfirmPassword password must be greater than 8 characters js.</span>";
  }
  if (!validateGender()) {
    hasError = true;
    get("genderErr").innerHTML =
      "<span style='color: red;'>  Gender required js.</span>";
  }
if (get("dob").selectedIndex == 0) {
  hasError = true;
  get("dobErr").innerHTML =
    "<span style='color: red;'>  Age required js.</span>";
}
if (!validateUserType()) {
  hasError = true;
  get("usertypeErr").innerHTML =
    "<span style='color: red;'>  Gender required js.</span>";
}
  return !hasError;
}


function checkId(e) {
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "controller/checkUserId.php?userid=" + e.value, true);
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (checkId($userid)) {
        hasError = true;
        get("idErr").innerHTML =
          "<span style='color: red;'>  Username Exists js.</span>";
      } else {
        get("idErr").innerHTML = "";
      }
    }
  };
  xhttp.send();
}

function refresh() {
  hasError = false;

  get("nameErr").innerHTML = "";
  get("idErr").innerHTML = "";
  get("emailErr").innerHTML = "";
  get("passErr").innerHTML = "";
  get("conpassErr").innerHTML = "";
  get("genderErr").innerHTML = "";
  get("dobErr").innerHTML = "";
  get("usertypeErr").innerHTML = "";
}