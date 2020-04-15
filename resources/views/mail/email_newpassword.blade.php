@component('mail::message')
    <h3>Сообщение об изменении Вашего пароля</h3>

    Уважаемый {{$name}}, Вы успешно изменили свой пароль.
    Ваш новый пароль: {{$new_password}}<br>

    Спасибо,<br>
    Всегда Ваш, {{ config('app.name') }}
@endcomponent
