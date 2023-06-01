import { Modal } from 'flowbite'
import $ from 'jquery';
import JSON5 from 'json5'

function createEl(angka, val=''){
    let wrapper= document.createElement('div');
    wrapper.innerHTML= `<div class="mb-6">
        <label for="option${angka}"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Opsi ${angka}</label>
        <div class="flex flex-row">
            <input type="text" id="option${angka}"
                class="flex-1 display-flex bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-borderForm focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-borderForm dark:focus:border-blue-500"
                placeholder="Opsi ${angka}" required value="${val}" name="options[]">
            <button type="button"
                class="ml-2 text-right text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 btn-delete-option"
                >Hapus</button>
        </div>
    </div>`;
    return wrapper.firstChild;
}


window.addEventListener("load", (event) => {
    //tampilkan question modal jika ada error di dalamnya
    const modalElement = document.querySelector('#newQuestionModal');
    const modal = new Modal(modalElement);
    if(ERRORCREATEQUESTION) modal.show();

    //untuk opsi
    const optionsEditForm = $('#optionsEditForm');
    const optionsContainer = $('#optionContainer');

    $('#addOptionButton').on('click',function(){
        optionsContainer.append(createEl(optionsContainer.children().length + 1))
    })

    $('.btn-edit-option').on('click',function(e){
        optionsContainer.empty();
        const dataid = e.currentTarget.attributes['data-id'].value
        $('#idQuestion').val(dataid);

        
        const dataoptions = JSON5.parse(QUESTIONS.find(function(curr, index, arr){
            if(curr.id == dataid) return true;
        }).options)
        
        let i = 1
        dataoptions.forEach(function (item){
            optionsContainer.append(createEl(i,item))
            i+=1
        });

    })

    optionsContainer.on('click','.btn-delete-option',function(e){
        $(e.currentTarget.parentNode.parentNode).remove()
    })

    $('#btnupdateOptions').on('click', function(){
        optionsEditForm.submit();
    })



});



