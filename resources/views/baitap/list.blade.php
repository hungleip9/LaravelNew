@foreach($list as $items)
<div>
    <p>{{$items['name']}}</p>
    @if($items['status']==0)
        <p>Chua hoan thanh</p>
    @elseif($items['status']==1)
        <p>Da hoan thanh</p>
        @else
        <p>Khong thuc hien</p>
    @endif
</div>
@endforeach
