<form action="{{url('tinhtuoi')}}" method = "post">
Nhập năm sinh <input type='text' name='nam_sinh'><br>
<input type='submit' value='Kết quả'>
{{ csrf_field() }}
</form>