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
                required: true
            },
            first_name: {
                required: true
            },
            people_num: {
                required: true
            }
        },
        messages: {
            todohuken: {
                equalTo: "選択してください"
            },
            family_name: {
                required: "必須項目です"
            },
            first_name: {
                required: "必須項目です"
            },
            people_num: {
                required: "必須項目です"
            }

        },
        errorClass: "error_msg",
        wrapper: "li"
    });
});
