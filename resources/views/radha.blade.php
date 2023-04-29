<hr>
<script>function f(){ window.alert("from js ")}</script>
<form>
    <input type="text" name="name" >name:
    <input type="submit" onclick="f()">submit
</form>

<hr>
hii
{{$a}}
{{date('d-m-y')}}
with dollar a {{$a}}
<hr>
with exclamatio {!!$a!!}
@if(5>3)
5>3 is true
@endif
@isset($id)
{{"id is prest"}}
@endisset
<!-- for loop -->
@for ($i=0;$i < 5;$i++)
{{$i}}
@endfor
@php
echo "<br>hi from php" ;
$aray=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
@endphp
@foreach($aray as $b => $a)
<option id={{$b}}>{{$a}}<option>
@endforeach