<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Обратная свзяь</title>
	<link rel="stylesheet" href="css/main.css">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<script src="js/jqmin.js"></script>
</head>
<body>
	<div class="banner">
		<img src="img/bank-home-credit.png" alt="">
	</div>
	<div class="form_feedback">
		<form action="" id="form_feedback" method="post">
			<div class="about_feedback">
					<h3>Заполните форму обратной связи</h3>
					<h5 style="margin-top: 10px"> <i class="fas fa-lock"></i> Ваши данные надежно защищены</h5>
			</div>
			<div class="field_feedbacak">
				
					<input  class="field_margin input_t" type="text" placeholder="Фамилия Имя Отчество " id="name" name="name">  <br>
				
					<input class="field_margin input_t" type="text" placeholder="почта@exemple.ru " id="email" name="email">  <br>
					
					<input class="field_margin input_t" type="tel" id="tel" name="tel"  placeholder="Номер телефона 8(999)-999-99-99 " id="number_phone">  <br>
					<h4 class="field_margin">  Тема вопроса</h4> <br>
					<select    name="questions" id="questions"> 
						<option  value="0"> <p>Выберите пункт</p> </option> 
						<option  value="1">Отдел кадров</option>
						<option  value="2">Взять кредит</option>
						<option  value="3">Другое</option>
					</select> <br>
					<h4 class="field_margin">Опишите свой вопрос</h4> <br>
					<textarea class="textarea_feedbacak" name="textarea" id="" cols="48" rows="10"></textarea> <br>
					<div class="checkbox">
					<label for="accept">Согласие на обработку данных </label>
					<input type="checkbox" name="accept" id="accept"> 
					</div>
					<input class="field_margin" type="submit" value="Отправить" onclick="ajax_sumbit()">
				
				</div>
				
			

		
			</form>
		
	
	</div>



	<div class="tht">
		<h1>Спасибо ваша заявка была прянта <i class="fas fa-check-circle"></i> </h1>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

	<script src="js/feedback.js"></script>

	
</body>
</html>