import $ from 'jquery';

window.$ = $;

function createErrorElement(error){
    let wrapper= document.createElement('div');
    wrapper.innerHTML= `<div class="p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 js-error"
    role="alert">
    <span class="font-medium">${error}</span>
    </div>`;
    return wrapper.firstChild;
}


function checkboxRequired(){
    let state = true;
    $('.checkbox-required').each(function(idx, obj){
        if(!$(obj).find('> div > input[type=checkbox]:checked').length){
            state = false;
            $(obj).append(createErrorElement("Pilih salah satu atau lebih checkbox"))
        }
    })
    return state;
}

function rateRequired(){
    let state = true;
    $('.rate-required').each(function(idx, obj){
        if(!$(obj).find('> div > input[type=radio]:checked').length){
            state = false;
            $(obj).append(createErrorElement("Pilih salah satu rating"))
        }
    })
    return state;
}

function radioRequired(){
    let state = true;
    $('.radio-required').each(function(idx, obj){
        if(!$(obj).find('> div > input[type=radio]:checked').length){
            state = false;
            $(obj).append(createErrorElement("Pilih salah satu opsi"))
        }
    })
    return state;
}

function radioothersRequired(){
    let state = true;
    $('.radioothers-required').each(function(idx, obj){
        if(!$(obj).find('> div > input[type=radio]:checked').length){
            state = false;
            $(obj).append(createErrorElement("Pilih salah satu opsi"))
        }
    })
    return state;
}

function textRequired(){
    let state = true;
    $('.text-required').each(function(idx, obj){
        if(!$(obj).find('> input[type=text]').val().trim()){
            state = false;
            $(obj).append(createErrorElement("Silahkan masukkan isian"))
        }
    })
    return state;
}

function deleteAllError(){
    $('.js-error').each(function(idx, obj){
        $(obj).remove();
    })
}


function check(){
    let a = checkboxRequired() 
    let b = rateRequired()
    let c = radioRequired()
    let d = textRequired()
    let e = radioothersRequired()
    if(
        a
        && 
        b
        &&
        c
        &&
        d
        &&
        e
        ) return true
    return false
}

$(() => {

    $('#btnSubmit').on('click',function(e){
        deleteAllError()
        if(check()) return true
        window.scrollTo(0, 0);
        e.preventDefault()
    })

    $('.radioothers-required').on('change', 'input[type=text]', function(e){
        $(e.target).siblings('input[type=radio]').val($(e.target).val())
        $(e.target).siblings('input[type=radio]').prop('checked', true);
    })

});





