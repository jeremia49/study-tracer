function validations(
    reference,
    placeMessage,
    message,
    validation
  ) {
    console.log(arguments);
    let timeout = null; //global varaible
    reference.addEventListener("keyup", function (e) {
      const preview = "hidden";
      const previewForm = `input-error`;

      e.preventDefault();
      clearInterval(timeout);
      timeout = setTimeout(() => {
        console.log(validation(e.target.value));
        if (validation(e.target.value)) {
          placeMessage.classList.add(preview);
          e.target.classList.remove(previewForm);
        } else {
          placeMessage.classList.remove(preview);
          placeMessage.innerText = message;
          // for btn submit or next
          e.target.classList.add(previewForm);
        }
      }, 350);
    });
  }


export default validations;
//   used regex to check validation form