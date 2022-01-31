@php
    $cart = session()->has('saleCart') ? session()->get('saleCart')  : [];
        //$total = array_sum(array_column($cart,'total_price'));
        $i = 1;
    @endphp
    @foreach ($cart as $key => $item)
    <tr>
        <td><label class="form-check-label">#{{ $i++ }}</label></td>
        <td>
            {{ $item['product_name'] }}
            <input type="hidden" name="product_id[]" value="{{ $item['product_id'] }}">
        </td>
        
        <td>
            {{ $item['product_unit'] }}
        </td>
        <td>
            <input name="quantity[]" id="qty-{{ $item['product_id'] }}" data-unit_price="{{ $item['unit_price'] }}" value="{{ $item['quantity'] }}"  type="number" step="any" placeholder=""  class="clickToGet col-xl-8 col-lg-8 col-12 form-control">
        </td>
        <td>
            <input name="sale_unit_price[]" value="{{ $item['unit_price'] }}" type="number"  step="any"  id="utp-{{ $item['product_id'] }}" placeholder="" class="sale_unit_price col-xl-8 col-lg-8 col-12 form-control">
        </td>
        <td>
            <span id="set-{{ $item['product_id'] }}" class="sum">
                {{ $item['total_price'] }}
            </span>
        </td>
        <td style="width: 10%">
            <a  data-id="{{ $item['product_id'] }}" data-url="{{ route('addToCartProductRemoveSingle') }}" class="dropdown-item remove_single_sale_cart btn btn-sm btn-danger" href="#" style="width:100%;text-align: center;"><i class="fas fa-times text-orange-red"></i></a>
        </td>
    </tr>
    @endforeach



