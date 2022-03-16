var option = {
    animation: true,
  };

  function Toasty() {
    var toastHTMLElement = document.getElementById("liveToast");

    var toastElement = new bootstrap.Toast(toastHTMLElement, option);
    toastElement.show();
  }