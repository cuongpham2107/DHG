@php
/*
$layout_page = shop_cart
**Variables:**
- $cart: no paginate
- $countries: array
- $attributesGroup: array
*/
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
<section class="section section-xl bg-default text-md-left">
    <div class="container">
        <div class="row order-checkout">
            @if (count($cart) ==0)

            <div class="col-md-12">
             
                <div class="row cart-list ng-scope">
                    <div class="col-12 ng-scope"  style="    margin: 20px;
                    height: 400px;
                    align-items: center;
                    justify-content: center;
                    display: flex;
                    border: 1px solid #fdeded;">
                        <p class="text-center cart-list-notfound">
                        <span>Chưa có sản phẩm nào trong giỏ hàng của bạn</span>
                         <a href="/" class="btn btn-lg btn-light">Đi mua sắm</a>
                        </p>
                    </div>
            </div>

            @else
            @php
                $cartTmp = $cart->groupBy('storeId');
            @endphp

            {{-- Render cart item for earch shop --}}
            @foreach ($cartTmp as $sId => $cartItem)
            <div class="col-md-12" style="margin-top: 30px">
                <h3 style="font-size: 2.2rem;"><i class="fa fa-shopping-bag" aria-hidden="true"></i>  Giỏ hàng</h3>
            </div>

            <div class="col-md-12">
                <form action="{{ sc_route('checkout.prepare') }}" method="POST">
                    <input type="hidden" name="store_id" value="{{ $sId }}">
                    @csrf

                    {{-- Item cart detail --}}
                    @include($sc_templatePath.'.common.cart_list', ['cartItem' => $cartItem])
                    {{-- //Item cart detail --}}
                    
                    {{-- Button checkout --}}
                    <div class="form-group">
                        <div class="text-right">
                            @php
                                $dataButton = [
                                    'class' => 'btn btn-order', 
                                    'id' =>  'btnOrderCheckOutSubmit',
                                    'type_w' => '',
                                    'type_t' => 'buy',
                                    'type_a' => '',
                                    'type' => 'submit',
                                    'name' => ''.sc_language_render('cart.checkout'),
                                    'html' => ''
                                ];
                            @endphp
                            @include($sc_templatePath.'.common.button.button', $dataButton)
                        </div>
                    </div>
                    
                    {{-- Button checkout --}}
                </form>
            </div>
            @endforeach
            {{--// Render cart item for earch shop --}}
            @endif
        </div>
    </div>
</section>
@endsection



@push('scripts')
{{-- //script here --}}
@endpush

@push('styles')
{{-- Your css style --}}
@endpush