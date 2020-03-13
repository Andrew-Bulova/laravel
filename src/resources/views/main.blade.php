<!DOCTYPE html>
<html lang="en" data-livestyle-extension="available">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!--CSS для календаря-->
    <title>Авторизация</title>

</head>
<body>

@yield('side-bar')

@yield('auth')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


<script>
    $(function(){
        $("#datepicker").datepicker({
            format: 'yyyy-mm-dd',
            startDate: 'now'
        });
    });
    $(function(){
        $("#datepicker1").datepicker({
            format: 'yyyy-mm-dd',
            startDate: 'now'
        });
    });
    $(function(){
        $("#datepicker2").datepicker({
            format: 'yyyy-mm-dd',
            startDate: 'now'
        });
    });
    $(function(){
        $("#datepicker3").datepicker({
            format: 'yyyy-mm-dd',
            startDate: 'now'
        });
    });
    $(function(){
        $("#datepicker4").datepicker({
            format: 'yyyy-mm-dd',
            startDate: 'now'
        });
    });
    $(function(){
        $("#datepicker5").datepicker({
            format: 'yyyy-mm-dd',
            startDate: 'now'
        });
    });
</script>

<script>
    // $( document ).ready(function() {
    //     /* Локализация datepicker */
    //     $.datepicker.regional['ru'] = {
    //         closeText: 'Закрыть',
    //         prevText: 'Предыдущий',
    //         nextText: 'Следующий',
    //         currentText: 'Сегодня',
    //         monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
    //         monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
    //         dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
    //         dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
    //         dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
    //         weekHeader: 'Не',
    //         dateFormat: 'dd.mm.yy',
    //         firstDay: 1,
    //         isRTL: false,
    //         showMonthAfterYear: false,
    //         yearSuffix: ''
    //     };
    //     $.datepicker.setDefaults($.datepicker.regional['ru']);
    // });

</script>

</body>
</html>
