function openDep(depName) {
    var i;
    var x = document.getElementsByClassName("department");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    document.getElementById(depName).style.display = "block";
  }