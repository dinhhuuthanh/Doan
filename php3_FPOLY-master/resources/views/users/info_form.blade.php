<?php
$genderList = [
    [
        'id' => 1,
        'name' => "Nam"
    ],
    [
        'id' => 2,
        'name' => "Nữ"
    ],
    [
        'id' => 3,
        'name' => "Khác"
    ],
]
?>



<form action="{{route('save.info')}}">
    <div>
        <label for="">Ho ten</label>
        <input type="text" name="name" id="">
    </div>
    <div>
        <label for="">Tuổi</label>
        <input type="number" name="age" id="">
    </div>
    <div>
        <label for="">Giới tính</label>
        @foreach($genderList as $item)
        <input type="radio" name="gt" value="{{$item['id']}}" id="" @if($loop->index == 0 ) checked @endif> {{$item['name']}}
        @endforeach
    </div>
    <div>
        <label for="">Hôn nhân</label>
        <input type="checkbox" name="hn" value="1"  id="">
    </div>
    <div>
        <button type="submit">Luu</button>
    </div>
</form>