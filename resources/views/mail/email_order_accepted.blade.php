@component('mail::message')
    <h3>Вы сформировали свой заказ на нашем сайте</h3>
    Заказ сфомирован пользователем: {{$user->name}}.
    Дата заказа: {{$date}}
    @component('mail::table')
        <table>
            <tr>
            <th>Бренд</th>
            <th>Номенклатура</th>
            <th>Стоимость, грн</th>
            <th>Кол-во, шт</th>
            <th>Всего</th>
            </tr>
        @foreach ($data as $order_unit)
                <tr>
            <td>{{$order_unit->brand}}</td>
            <td>{{$order_unit->productName}}</td>
            <td>{{$order_unit->price}}</td>
            <td>{{$order_unit->qty}}</td>
            <td>{{$order_unit->amount}}</td>
                </tr>
        @endforeach
        </table>
    @endcomponent
    <p>Сумма заказа: {{$amount}}</p>
    Спасибо,<br>
    {{ config('app.name') }}
@endcomponent
