<!DOCTYPE html>
<html>
<body>

<div>Nama saya : {{ $myname }}</div>
<br/>
@foreach($mycustomers as $mycustomer)
    <div>
        <span>Nama customer : {{$mycustomer->name}}</span>
        <br />
        <span>Alamat : {{$mycustomer->address}}</span>
        <br />
        <br />
    </div>
@endforeach

</body>
</html>