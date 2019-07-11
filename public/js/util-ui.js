$(function () {

    $.validator.addMethod("valueNotEquals", function(value, element, arg){
        return arg != value;
    }, "選択してください");


    $("#nameForm").validate({
        rules: {
            todohuken: {
                valueNotEquals: "msg"
            },
            family_name: {
                required: true,
                maxlength: 50
            },
            first_name: {
                required: true,
                maxlength: 50
            },
            people_num: {
                required: true,
                number: true
            }
        },
        messages: {
            todohuken: {
                equalTo: "選択してください"
            },
            family_name: {
                required: "必須項目です",
                maxlength: "50文字以下で入力してください"
            },
            first_name: {
                required: "必須項目です",
                maxlength: "50文字以下で入力してください"
            },
            people_num: {
                required: "必須項目です",
                number: "数字のみ入力してください"
            }
        },
        errorClass: "error_msg",
        wrapper: "li"
    });
});
