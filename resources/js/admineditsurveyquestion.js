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
        <div
            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white hover:underline hover:cursor-pointer btn-delete-question">
            Hapus
        </div>
    </div>
</li>
`;
    return wrapper.firstChild;
}

$(() => {
    select2($);

    const optionsContainer = $('#optionContainer');

    var questions = QUESTIONS.map(function(current,index,arr){
        return {'id':current.id, 'text':current.question}
    })

    const inputquestion = $('#inputquestion')

    inputquestion.select2({
        data : questions,
    });

    inputquestion.on('select2:select', function(e){
        var data = e.params.data;
        optionsContainer.append(createEl(optionsContainer.children().length + 1,data.id,data.text))

        inputquestion.empty().trigger('change')
        inputquestion.select2({
            data : questions,
        });
    })

    optionsContainer.on('click','.btn-delete-question',function(e){
        $(e.currentTarget.parentNode.parentNode).remove()

        $('#optionContainer > li > div > div > p.nomortext').each(function(i,obj){
            obj.innerHTML = i + 1;
        })
    })

    JSON5.parse(SURVEY.questions).forEach(function (idx){
        const question = QUESTIONS.find(function(curr, index, arr){
            if(curr.id == idx) return true;
        })
        optionsContainer.append(createEl(optionsContainer.children().length + 1,question.id,question.question))
    });

});


