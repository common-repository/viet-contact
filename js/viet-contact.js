function vcanhien() {
  var x = document.getElementById("vietcontact");
  x.style.display = "block";
  document.getElementById("vc-andi").style.display = "block";
  document.getElementById("vc-anhien").style.display = "none";
}
function vcandi() {
  var x = document.getElementById("vietcontact");
  x.style.display = "none";
  document.getElementById("vc-andi").style.display = "none";
  document.getElementById("vc-anhien").style.display = "block";
}