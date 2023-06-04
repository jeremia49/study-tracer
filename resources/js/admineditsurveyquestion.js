import $ from 'jquery';
import select2 from 'select2';
import 'select2/dist/css/select2.css'; 

import JSON5 from 'json5';

window.$ = $;


function createEl(angka, id, val=''){
    let wrapper= document.createElement('div');
    wrapper.innerHTML= `<li class="pb-3 sm:pb-4 p-5">
    <div class="flex items-center space-x-4">
        <div class="flex-shrink-0">
            <p class="text-sm font-medium text-gray-900 truncate dark:text-white mr-3 nomortext">
                ${angka}
            </p>
        </div>
        <input type="hidden" name="idquestion[]" class="style-input bg-gray-50"
        placeholder="" required value="${id}" />
        <textarea name="question[]" cols="30" rows="2" class="style-input bg-gray-50 hover:cursor-no-drop" readonly>${val}</textarea>
       

        <div>
         <a href="#"
             data-tooltip-target="hp1" data-tooltip-trigger="hover"
             class="btn-delete-question flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-red-600 dark:text-red-500 hover:underline">
             <span>
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     class="w-5 h-5">
                     <path stroke-linecap="round" stroke-linejoin="round"
                         d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                 </svg>
             </span>
         </a>
         <div id="hp1" role="tooltip"
             class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Delete
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
    </div>
</li>
`;
    return wrapper.firstChild;
}

function getData(form) {
    var formData = new FormData(form);
    console.log(Object.fromEntries(formData));
}


$(() => {
    select2($);

    const optionsContainer = $('#optionContainer');

    //konversi ke tipe data yang bisa diolah select2
    var questions = QUESTIONS.map(function(current,index,arr){
        return {'id':current.id, 'text':current.question}
    })

    const inputquestion = $('#inputquestion')

    //load data
    JSON5.parse(SURVEY.questions).forEach(function (idx){
        const question = QUESTIONS.find(function(curr, index, arr){
            if(curr.id == idx) return true;
        })
        optionsContainer.append(createEl(optionsContainer.children().length + 1,question.id,question.question))
    });


    function refreshQuestions(){
        //konversi ke tipe data yang bisa diolah select2
        questions = QUESTIONS.map(function(current,index,arr){
            return {'id':current.id, 'text':current.question}
        })

        //dapatkan semua id dari pertanyaan dari form
        let idquestion = $('#formSurveyQuestion').serializeArray().filter(function(val,idx,arr){
            if(val.name == "idquestion[]") return true
        }).map(function(val,idx,arr){
            return val.value
        })

        //filter question yang tersisa
        questions = questions.filter(function(item) {
            if(idquestion.includes(item.id.toString())) return false
            return true
        })
    }
    
    refreshQuestions();
    //inisialisasi select2
    inputquestion.select2({
        data : questions,
    });

    inputquestion.on('select2:select', function(e){
        var data = e.params.data;

        const idquestion = $('#formSurveyQuestion').serializeArray().filter(function(val,idx,arr){
            if(val.name == "idquestion[]") return true
        }).map(function(val,idx,arr){
            return val.value
        })

        if(idquestion.includes(data.id)){
            alert('Tidak dapat menambah pertanyaan dengan id yang sama !')
        }else{
            optionsContainer.append(createEl(optionsContainer.children().length + 1,data.id,data.text))
        }

        inputquestion.empty().trigger('change')
        refreshQuestions();
        inputquestion.select2({
            data : questions,
        });
    })

    optionsContainer.on('click','.btn-delete-question',function(e){
        $(e.currentTarget.parentNode.parentNode).remove()

        $('#optionContainer > li > div > div > p.nomortext').each(function(i,obj){
            obj.innerHTML = i + 1;
        })

        refreshQuestions();
        inputquestion.select2({
            data : questions,
        });
    })

});





