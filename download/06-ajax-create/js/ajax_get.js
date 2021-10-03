// function for get info
function loadText() {
  // loading
  document.getElementById("demo").innerHTML = "loading...";

  // XMLHttpRequest (ajax)
  const xhttp = new XMLHttpRequest();

  // cargar la info en div
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.open("GET", "./data-get/ajax_info.txt");
  xhttp.send();
}

// btn que llama la información
document.getElementById('btn_pull').onclick = loadText;
