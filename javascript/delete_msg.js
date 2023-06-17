function delete_msg_fun(delete_msg_fun) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("results").innerHTML += this.responseText; 
        // note '+=', adds result to the existing paragraph, remove the '+' to replace.
      }
    };
    xmlhttp.open("GET", "php/delete_msg.php?delete_msg_id=" + delete_msg_fun, true);
    xmlhttp.send();
  }