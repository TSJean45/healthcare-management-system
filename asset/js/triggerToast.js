var option = {
    animation: true,
    delay: 2000
  };

  function Toasty() {
    var toastHTMLElement = document.getElementById("liveToast");

    var toastElement = new bootstrap.Toast(toastHTMLElement, option);
    toastElement.show();
  }