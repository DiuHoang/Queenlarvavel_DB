<div>
	<div>
		<h1>Cảm ơn bạn đã đặt hàng tại QueenParty!</h1>
		<h3>Xin chào {{ $data['receiver_name'] }}</h3>
		<h4>Queen Party đã nhận được yêu cầu đặt hàng của bạn và đang xử lý nhé.</h4>
	</div>
  	<hr></hr>
	<div>
		<h2>{{ $data['recevier_infor'] }}</h2>
		<pre>Tên người nhận:              <b style="font-size: 15px">{{ $data['receiver_name'] }}</b> </pre>
		<pre>Số điện thoại người nhận:    <b style="font-size: 15px">{{ $data['receiver_phone'] }}</b> </pre>
		<pre>Địa chỉ người nhận:          <b style="font-size: 15px">{{ $data['receiver_address'] }}</b> </pre>
		<pre>Đặt hàng ngày:               <b style="font-size: 15px">{{ $data['created_time'] }}</b> </pre>
		<pre>Giao hàng ngày:              <b style="font-size: 15px">{{ $data['order_time'] }}</b> </pre>
	</div>
  	<hr></hr>
	<div>
		<h2>{{ $data['list_infor'] }}</h2>
		<table>
			<tr>
				<td>{{ $data['item_productName'] }}</td>
				<td>{{ $data['item_quantity'] }}</td>
				<td>{{ $data['item_price'] }}</td>
				<td>{{ $data['item_vendorName'] }}</td>
			</tr>
		</table>
	</div>
</div>
