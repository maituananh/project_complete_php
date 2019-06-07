@extends('master.main')

@section('content')
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }

</style>
<section class="ftco-section">
    <div class="container">
        <h1 style="text-align: center"> <i class="fas fa-cart-plus"></i> MY CART </h1>
    </div>
</section>

<table style="width:100%;">
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Carrier</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Remote</th>
    </tr>
    <?php $tongtien = 0;
          $quantity = 0;
    ?>
    @foreach ($cart as $item)
    <tr>
        <div style="display: none">
            <input name="price" value="{{$item->price}}">
        </div>

        <td><img style="width: 100px; height: 100px;" src="{{ asset('images') }}/{{$item->image}}"></td>
        <td>{{$item->name}}</td>
        <td>{{$item->Name}}</td>
        <td>{{$item->price}}.000 VND</td>
        <?php $tongtien = $tongtien + $item->price;
              $quantity = $quantity + $item->quantity;
        ?>
        <td style="width: 20px">{{$item->quantity}}</td>
        <td style="color: red;"><a href="deleteProductInCart/{{$item->id_products}}"><i
                    class="fas fa-trash-alt"></i></a></td>
    </tr>
    @endforeach
    <tr>
        <td>TotalMoney</td>
        <td>.....</td>
        <td>.....</td>
        <td><?php echo $tongtien.".000 VND"?></td>
        <td><?php echo $quantity?></td>
    </tr>
</table>
<span><a style="margin-left: 45%" href="/htdocphp/perfumestore/public/pay/<?php echo $tongtien;?>"
        class="btn btn-primary py-3 px-4">Thanh
        Toán</a></span>
@endsection