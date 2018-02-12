var validationSuccess = false;
$(document).ready(function () {
    $('#tel').blur(function () {
        var pattern = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/i;
        if (pattern.test($(this).val())) {
            $(this).css({'border': '1px solid #569b44'});
            $('#valid').text('Верно');
            validationSuccess = true;
        } else {
            $(this).css({'border': '1px solid #ff0000'});
            $('#valid').text('Пожалуйста, введите Ваш настоящий телефон');
            $('#tel').focus();
            validationSuccess = false;
        }
    });
});

function checkSubmitStatus() {
    return validationSuccess
}
