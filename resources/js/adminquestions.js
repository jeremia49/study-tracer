import { Modal } from 'flowbite'
import $ from 'jquery';
import JSON5 from 'json5'

function createEl(angka, val=''){
    let wrapper= document.createElement('div');
    wrapper.innerHTML= `<div class="mb-6">
        <label 
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white nomor-text">Opsi ${angka}</label>
        <div class="flex flex-row gap-x-4">
            <input type="text" 
                class="flex-1 display-flex bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-borderForm focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-borderForm dark:focus:border-blue-500"
                required value="${val}" name="options[]">
            <button type="button"
                class="ml-2  text-red-500 hover:text-red-700 btn-delete-option"
                >
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
            </span>
                </button>
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
        
        dataoptions.forEach(function (item){
            optionsContainer.append(createEl(optionsContainer.children().length + 1,item))
        });

    })

    optionsContainer.on('click','.btn-delete-option',function(e){
        $(e.currentTarget.parentNode.parentNode).remove()

        $('#optionContainer > div > label.nomor-text').each(function(i,obj){
            obj.innerHTML = `Opsi ${i + 1}`;
        })
    })

    $('#btnupdateOptions').on('click', function(){
        optionsEditForm.submit();
    })



});



