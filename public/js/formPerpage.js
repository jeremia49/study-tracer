(() => {
    // get length pages
    const n = document.getElementsByClassName("pages").length;
    const containerDPagination = document.getElementById("dotPaginate");
    // create dot-pagination as much n
    for (let i = 0; i < n; i++) {
        const createLi = document.createElement("li");
        // createLi.class
        const createSpan = document.createElement("span");
        createLi.appendChild(createSpan);
        // push to containerPagination
        containerDPagination.appendChild(createLi);
    }
})();

let currentTab = 0;
let validateInput = {};
showTab(currentTab);

function nextPreview(n, e) {

    e.preventDefault();
    // this.preventDefault();
    // chcek valadate when got error
    const pages = document.getElementsByClassName("pages");
    if ((n === 1 || n === 0) && !validationForms()) return false;

    pages[currentTab].style.display = "none";
    currentTab += n;
    showTab(currentTab);

}

function showTab(currentIndex) {
    // get elements
    const getPages = document.getElementsByClassName("pages");
    const btnPrevious = document.getElementById("btnPrevious");
    const btnNext = document.getElementById("btnNext");
    const btnSubmit = document.getElementById("btnSubmit");
    const btnCheck = document.getElementById("btnChecked");


    // handle show page
    getPages[currentIndex].style.display = "block";
    // add validaton for each pages
    // handle show btn prev or next
    currentIndex === 0 ?
        (btnPrevious.style.display = "none") :
        (btnPrevious.style.display = "block");
    // handle submit or next

    if (currentIndex === getPages.length - 1) {
        btnSubmit.style.display = "block";
        btnCheck.style.display = "block";
        btnNext.style.display = "none";
    } else {
        btnNext.style.display = "block";
        btnSubmit.style.display = "none";
        btnCheck.style.display = "none";

    }
    getFormPage(getPages[currentIndex]);
    fixInStepIndicator(currentIndex);
}

function getFormPage(sectionForm) {
    const forms = sectionForm.getElementsByTagName("input");
    //  added for default check value
    const defaultValidate = (e) => e.trim().length > 2;
    // loop all object forms
    for (const form of forms) {
        // create validate
        validateInput[form.getAttribute("id")] = defaultValidate;
        // createElementSpan and added message error
        const newSpan = createElementSpan(form, "afterend");
        addedEventAndMessage(form, newSpan)

    }
}

function addedEventAndMessage(inputForm, PlaceMessage, message = "character must more than  2") {
    const cleanInput = inputForm.value.trim();
    inputForm.addEventListener("keyup", delay(function(e) {
        const validate = validateInput[inputForm.getAttribute("id")](e.target.value);
        if (validate) {
            e.target.setAttribute("class", "style-input bg-gray-50 bg-gray-50");
            PlaceMessage.classList.add("hidden");
        } else {

            e.target.classList.add("input-error");
            PlaceMessage.classList.remove("hidden");
            PlaceMessage.innerHTML = message;
        }
    }, 500));
}

function delay(callback, ms) {
    var timer = 0;
    return function() {
        var context = this,
            args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function() {
            callback.apply(context, args);
        }, ms || 0);
    };
}

function validationForms() {
    // get tab of page
    const tab = document.getElementsByClassName("pages")[currentTab];
    const inputs = tab.getElementsByTagName("input");
    // this variable using for result validate
    let result = true;
    // loop trought input
    for (const input of inputs) {
        const checkInput = validateInput[input.getAttribute('id')](input.value);
        if (!checkInput) {
            input.classList.add('input-error');
            result = false;
        }
    }
    // step dot done
    if (result) {
        const containerDPagination = document.getElementById("dotPaginate");
        containerDPagination.getElementsByTagName("li")[currentTab].classList.add("done");
    }
    return result;
}

function createElementSpan(element, position) {
    const createSpan = document.createElement("span");
    createSpan.classList.add("d-message-error");
    createSpan.classList.add("hidden");
    // create id with addtional the begining text
    createSpan.setAttribute("id", `me-${element.getAttribute("id")}`);
    return element.insertAdjacentElement(position, createSpan);
}

function fixInStepIndicator(currentStep) {
    // get element li at the container ul
    const containerStep = document.getElementById("dotPaginate");
    const allStep = containerStep.getElementsByTagName("li");
    // get data as object
    for (let i = 0; i < allStep.length; i++) {
        allStep[i].classList.remove("active");
    }
    // after fix all active to none set which current active
    allStep[currentStep].classList.add("active");
}