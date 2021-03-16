<table border="3">
    <tr>
        @foreach($product as $item)
            <td>Продукт: {{ $item['name'] }};</td>
            <td>Дата: {{ $item['date'] }};</td>
            <td>@if(strtotime($item['date']) > strtotime(date('d.m.Y')))
                Испорчен: 0
            @else
                Испорчен: 1
            @endif
                </td>
    </tr>
    @endforeach
</table>

