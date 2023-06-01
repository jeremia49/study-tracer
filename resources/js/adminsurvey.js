import { Modal } from 'flowbite'

window.addEventListener("load", (event) => {
    const $modalElement = document.querySelector('#newSurveyModal');
    const modal = new Modal($modalElement);

    if(ERROR) modal.show();
});
