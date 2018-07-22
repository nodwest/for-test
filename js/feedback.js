jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});

$('#form_feedback').validate({
	rules: {
		name: {
			required: true,
			minlength: 3
		},
		email: {
			required: true,
			email: true
			
		},
		tel:{
			required: true,
			digits: true,
			rangelength: [11,11]
		},
		textarea:{
			required: true,
			rangelength: [10, 500]
		},
		questions: {
			required: true,
			range: [1, 5]
		},
		accept:{
			required: true
		}
	},
		messages: {
			name: {
				required: 'Поле обезательно для заполнения',
				minlength: 'Поле должно содержать больше 3 букв'
			},
			email: {
				required: 'Поле обезательно для заполнения',
				email : 'Введите коректный email'
				
			},
			tel: {
				required: 'Поле обезательно для заполнения',
				digits : 'Поле не должно содержать буквы',
				rangelength: '11 цифр начиная c 8'
			},
			textarea:{
				required: 'Поле обезательно для заполнения',
				rangelength: "Поле должно содержать не меньше 10 и не больше 500 символов"
			},
			questions: {
				required: 'Поле обезательно для заполнения',
				range: "Выберите вопрос"
			},
			accept: {
				required: "Согласитесь на обработку данных ваших персональных данных"
			}
		}
	});

function ajax_sumbit(){

	var validator = $( "#form_feedback" ).validate();
	valid = validator.form();
if(valid == true) {
	alert("Succses");

	var danie = $("#form_feedback").serialize();

	$("#form_feedback").click(function(){
		$.ajax({
			url: "/include/functions.php",
			type: "POST",
			data:danie,
			success: function(data) {
			}
	});
	});

	$('.form_feedback').hide();
	$('.tht').css({
		'display': 'flex'
	});
}




}
