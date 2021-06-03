document.getElementById("submit").addEventListener("click", function (event) {
  let password = document.getElementById("input-password").value;
  let confirmation = document.getElementById("input-confirmation").value;
  if (password != confirmation) {
    document.getElementById("error").innerHTML =
      "les password ne correspondent pas";
    document.getElementById("error").style.color = "red";
    event.preventDefault();
  } else {
  }
});
/* to do : maj.min, nbr min */
