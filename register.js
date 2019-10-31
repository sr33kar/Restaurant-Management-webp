function cust_reg(){
  var x = document.forms["custForm"]["pass1"].value;
  var y = document.forms["custForm"]["pass2"].value;
    if (x === y) {
      alert("BOTH the passwords must be same!!");

    }
}
