window.onload = Pageload;

function Pageload() {
  const datevalue = new Date();
  const currentDate = document.getElementById("date");
  currentDate.placeholder =
    datevalue.getDay() +
    "/" +
    datevalue.getMonth() +
    "/" +
    datevalue.getFullYear();
  getParams();
}
function getParams() {
  var url = window.location.href;
  var url = url.split("?");
  var url = url[1].split("=");
  var params = url[0];
  setDisable(params);
}

function setDisable(params) {
  if (params === "orderId") {
    const select = document.getElementById("selectorder");
    const upload = document.getElementById("uploadslip");
    const name = document.getElementById("name");
    const phone = document.getElementById("phone");
    const comment = document.getElementById("comment");
    const checkout_btn = document.getElementById("checkout_btn");
    upload.disabled = false;
    select.disabled = true;
    name.disabled = false;
    phone.disabled = false;
    comment.disabled = false;
    checkout_btn.disabled = false;
  }
}
