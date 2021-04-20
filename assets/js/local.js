document.addEventListener("keypress", function(event) {
    if (event.keyCode == 49) {
        window.location.href = "index.html";
    }else{
        if (event.keyCode == 48) {
            window.location.href = "local.html";
        }
    }
  });