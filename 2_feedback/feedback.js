$('#send').on('click', function() {
    $name = $('#name').val()
    $adress = $('#adress').val()
    $email = $('#email').val()
    $mobile = $('#mobile').val()
    $comment = $('#comment').val()

    wrongEmail = 'gmail.com'

    if ($name == '' || $mobile == '') {
        console.log('Не заполнены обязательные поля')
    } else {
        console.log('ФИО: ' + (($name.split(' ')).length != 3 ? 'ФИО некорректно' : $name))
        console.log('Адрес: ' + $adress)
        console.log('E-mail: ' + ($email.endsWith(wrongEmail) ? 'E-mail некорректный' : $email))
        console.log('Тел.: ' + $mobile)
        console.log('Комментарий: ' + $comment)
    }
})

