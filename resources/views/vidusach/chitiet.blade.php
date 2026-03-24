<x-book-layout>

<x-slot name='title'>
	Chi tiết
</x-slot>

<style>
	.info{ 
		display: grid;
		grid-template-columns: repeat(2, 30% 70%); // tạo ra bốn cột độ rộng xen kẽ hai giá trị trên
	}
</style>

<h4>{{$data->tieu_de}}</h4>
<div class="info">
	<div>
		<img src="{{asset('image/'.$data->file_anh_bia)}}" width='200px' height='200px'>
	</div>
	<div>
		Nhà cung cấp: <b>{{$data->nha_cung_cap}}</b><br>
		Nhà xuất bản: <b>{{$data->nha_xuat_ban}}</b><br>
		Tác giả: <b>{{$data->tac_gia}}</b><br>
		Hình thức bìa: <b>{{$data->hinh_thuc_bia}}</b><br>
	</div>
</div>	
<div class="row">
	<div class="col-sm-12">
		<b>Mô tả:</b><br>
		<p>{{$data->mo_ta}}</p><br>
	</div>
</div>

</x-book-layout>
