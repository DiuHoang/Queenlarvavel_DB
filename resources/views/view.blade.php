<div>


	<div>
		<h1>Cảm ơn bạn đã đặt hàng tại QueenParty!</h1>
		<h3>Xin chào {{ $data[0]["receiver_name"] }}</h3>
		<h4>Queen Party đã nhận được yêu cầu đặt hàng của bạn và đang xử lý nhé.</h4>
	</div>
  	<hr></hr>
	<div>
		<h2>{{ $data[0]['recevier_infor'] }}</h2>
		<pre>Tên người nhận:              <b style="font-size: 15px">{{ $data[0]['receiver_name'] }}</b> </pre>
		<pre>Số điện thoại người nhận:    <b style="font-size: 15px">{{ $data[0]['receiver_phone'] }}</b> </pre>
		<pre>Địa chỉ người nhận:          <b style="font-size: 15px">{{ $data[0]['receiver_address'] }}</b> </pre>
		<pre>Đặt hàng ngày:               <b style="font-size: 15px">{{ $data[0]['created_time'] }}</b> </pre>
		<pre>Giao hàng ngày:              <b style="font-size: 15px">{{ $data[0]['order_time'] }}</b> </pre>
	</div>
  	<hr></hr>
	<div>
  
		<h2>{{ $data[1]['list_infor'] }}</h2>
		<table style="border-collapse: collapse; width: 100%;">
			<tr>
        <td style="border: 1px solid #dddddd; text-align: left; padding: 5px;"><pre>Tên sản phẩm:    <b>{{ $data[1]['item_productName'] }}</b></pre></td>
				<td style="border: 1px solid #dddddd; text-align: left; padding: 5px;"><pre>Số lương:        <b>{{ $data[1]['item_quantity'] }}</b></pre></td>
				<td style="border: 1px solid #dddddd; text-align: left; padding: 5px;"><pre>Giá sản phẩm:    <b style="color: red">{{ $data[1]['item_price'] }}</b></pre></td>
				<td style="border: 1px solid #dddddd; text-align: left; padding: 5px;"><pre>Tên nhà hàng:    <b>{{ $data[1]['item_vendorName'] }}</b></pre></td>
			</tr>
			<tr>
        <td style="border: 1px solid #dddddd; text-align: left; padding: 5px;"><pre>Tên sản phẩm:    <b>{{ $data[2]['item_productName'] }}</b></pre></td>
				<td style="border: 1px solid #dddddd; text-align: left; padding: 5px;"><pre>Số lương:        <b>{{ $data[2]['item_quantity'] }}</b></pre></td>
				<td style="border: 1px solid #dddddd; text-align: left; padding: 5px;"><pre>Giá sản phẩm:    <b style="color: red">{{ $data[2]['item_price'] }}</b></pre></td>
				<td style="border: 1px solid #dddddd; text-align: left; padding: 5px;"><pre>Tên nhà hàng:    <b>{{ $data[2]['item_vendorName'] }}</b></pre></td>
			</tr>
		</table>
	</div>
</div>


