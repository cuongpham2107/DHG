@php
    /*
$layout_page = shop_product_detail
                **Variables:**
- $product: no paginate
- $productRelation: no paginate
*/
    
    // dd($product);
   $productLatest = $modelProduct->start()->getProductLastView()->setLimit(5)->getData();
@endphp

@extends($sc_templatePath . '.layout')

{{-- block_main --}}
@section('block_main')
    @php
        $countItem = 0;
    @endphp
    <div class="body-content bg-page" x-data='product'>
        <div class="container">

            <div class="wrap-product">
                <div class="row">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ sc_route('home') }}" itemprop="item">
                                    <h2 itemprop="name">Trang chủ</h2>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ Route('shop') }}" itemprop="item">
                                    <span itemprop="name">
                                        Sản phẩm
                                    </span>
                                </a>
                            </li>

                        </ol>
                    </nav>
                </div>

                <div class="owlRespon-1 boxbanner-31">


                    <div class="banner-list">
                        <div class="item banner-item banner-item-1">
                            <a href="javascript:;" data-id="3731">
                                <picture>
                                    <source srcset="https://cdn.mediamart.vn/images/banner/line-1200x1_b510a5d0.png"
                                        type="image/jpeg">

                                    <img src="../assets/cdn/images/banner/line-1200x1_b510a5d0.png" alt="LINE 1200x1"
                                        width="1200" height="1" />
                                </picture>


                                <span class="banner-item-view banner-item-view-3731" style="display:none;"></span>
                            </a>
                        </div>
                    </div>


                </div>
                <div class="product-detail">
                    <div class="row">
                        <div class="col-12">
                        
                            <h1>{{ $product->name }}</h1>
                        
                        </div>
                        <div id="pdetail-images" class="col-12 col-md-7 pdetail-images">
                            <div class="sp-wrap">
                                <div class="pdetail-brand">
                                    @php
                                        $brand = $modelBrand
                                            ->start()
                                            ->setMoreWhere(['id', '=', $product->brand_id])
                                            ->getData();
                                        // dd($brand);
                                    @endphp
                                    @if ($brand->count() > 0)
                                        <img loading="lazy" alt="Samsung" src="{{ sc_file($brand[0]->getThumb()) }}">
                                    @endif
                                </div>
                                <div class="pdetail-slideproduct">
                                    <a href="javascript:;">
                                        <picture>
                                            <source srcset="{{ sc_file($product->getThumb()) }}" type="image/webp">
                                            <source srcset="{{ sc_file($product->getThumb()) }}" type="image/jpeg">
                                            <img src="{{ sc_file($product->getThumb()) }}" alt="{{ $product->name }}" />
                                        </picture>
                                    </a>
                                    @if ($product->images->count() > 0)
                                        @foreach ($product->images as $item)
                                            <a href="javascript:;">
                                                <picture>
                                                    <source srcset="{{ sc_file($item->getThumb()) }}" type="image/webp">
                                                    <source srcset="{{ sc_file($item->getThumb()) }}" type="image/jpeg">
                                                    <img loading="lazy" src="{{ sc_file($item->getThumb()) }}"
                                                        alt="{{ $product->name }}" />
                                                </picture>
                                            </a>
                                        @endforeach
                                    @endif

                                </div>
                            </div>


                            <div class="clearfix"></div>



                            <div class="clearfix"></div>
                            <div class="pdetail-desc">
                                <h3>
                                    Điểm nổi bật
                                </h3>
                                <span style="white-space: pre-wrap">{!! $product->description !!}</span>

                            </div>
                        </div>
                        <div class="col-12 col-md-5 pdetail-des">

                            <form id="buy_block" action="{{ sc_route('cart.add') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="product_id" id="product-detail-id"
                                    value="{{ $product->id }}" />
                                <input type="hidden" name="storeId" id="product-detail-storeId"
                                    value="{{ $product->store_id }}" />
                                <div class="pdetail-info">
                                    <p> Mã hàng: <b>{{ $product->sku }}</b></p>
                                    @if ($brand->count() > 0)
                                        <p>Thương hiệu: <b>{{ $brand[0]->name }}</b></p>
                                    @endif
                                    <p>Danh mục:
                                        @foreach ($product->categories as $category)
                                            <a href="{{ $category->getUrl() }}">{{ $category->getTitle() }}</a>,
                                        @endforeach

                                    </p>
                                </div>
                                @if (sc_config('product_property'))
                                    <div class="pdetail-options" id="product-detail-attr">
                                        @if ($product->attributes())
                                            {!! $product->renderAttributeDetails() !!}
                                        @endif
                                    </div>
                                @endif

                                <div class="pdetail-price">
                                    <div class="pdetail-price-box">
                                        @if ($product->promotionPrice)
                                            <h3 x-text='sale_priceFormat'></h3>
                                            <p class="product-price-regular" x-text='priceFormat'></p>
                                            <p class="product-price-saving" x-text='discount'>
                                            </p>
                                        @else
                                            <h3 x-text='priceFormat'></h3>
                                        @endif
                                    </div>
                                    <div class="product-stepper" style="margin-top: 15px;margin-bottom: 15px;">
                                        <span>Số lượng:</span>
                                        <input class="form-input" name="qty" type="number" data-zeros="true"
                                            value="1" min="1" max="100">
                                    </div>
                                    <div class="pdetail-promotion">
                                        <p class="pdetail-promotion-title"><i class="fa fa-gift"
                                                aria-hidden="true"></i>Khuyến mại</p>
                                        <div class="pdetail-promotion-body">
                                            @if ($product->getCustomFields()->count() > 0)
                                                @foreach ($product->getCustomFields() as $key => $item)
                                                    @if ($key == 'khuyen-mai')
                                                        <p style="white-space: pre-wrap"> {!! $item->text !!}</p>
                                                    @endif
                                                @endforeach
                                            @else
                                                <p>Không có khuyến mãi cho sản phẩm này</p>
                                            @endif
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pdetail-status">
                                    <div class="pdetail-stockavailable">
                                        <span>TÌNH TRẠNG - @if ($product->stock > 0)
                                                còn hàng
                                            @else
                                                hết hàng
                                            @endif
                                        </span>
                                    </div>
                                    <div class="pdetail-add-to-cart add-to-cart">

                                        <form class="inline">

                                            <input type="hidden" name="productId" value="22465" />

                                            <div class="product-quantity">
                                                <input type="text" class="quantity-field" readonly="readonly"
                                                    name="qty" value="1">
                                            </div>
                                            <div>
                                                @php
                                                    $dataButton = [
                                                        'class' => 'btn btn-lg btn-add-cart btn-add-cart redirectCart',
                                                        'id' => 'sc_button-form-process',
                                                        'type_w' => '',
                                                        'type_t' => 'buy',
                                                        'type_a' => '',
                                                        'type' => 'submit',
                                                        'name' => 'MUA NGAY
                                                <br/>(Giao hàng tận nơi - Giá tốt - An toàn)',
                                                        'html' => '',
                                                    ];
                                                @endphp
                                                @include(
                                                    $sc_templatePath . '.common.button.button',
                                                    $dataButton)
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <ul class="pdetail-contact">
                                    <li class="pd-contact-phone"><i></i><span>Hỗ trợ 24/7:<a
                                                href="tel:{{ sc_store('long_phone', $storeId ?? null) }}">
                                                {{ sc_store('long_phone', $storeId ?? null) }}</a></span></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="gioi-thieu-san-pham" class="product-detail-content row">
                    <div class="col-12 col-md-12">
                        <div class="row pd-attribute pd-attribute-seemore pd-seemore">
                            <h3 class="pd-attribute-title">Thông tin chi tiết</h3>
                            <p>
                                {!! $product->content !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="wrapbox-pList">
                            
                            <div class="wrapbox-loadProducts wrapbox-loadProducts-1">
                                <div class="wrapbox-loadProduct wrapbox-loadProduct-1-0">
                                    <h2 class="page-header">Sản phẩm được xem gần đây</h2>
                                    <div class="product-list pList-olwMobile">
                                         @foreach ($productLatest as $product)
                                             <div class="card mb-4">
                                                 <a target=_blank href="{{ $product->getUrl() }}" data-id=22055
                                                     class=product-item>
                                                     <div class=card-img-top>
     
                                                         <picture>
                                                             <source srcset="{{ sc_file($product->getThumb()) }}"
                                                                 type=image/webp>
                                                             <source srcset="{{ sc_file($product->getThumb()) }}"
                                                                 type=image/jpeg>
                                                             <img loading=lazy src="{{ sc_file($product->getThumb()) }}"
                                                                 alt="{{ $product->name }}">
                                                         
                                                         </picture>
                                                     </div>
                                                     <div class=card-body>
                                                         {{-- <p class=product-specialtype-box>
                                                             <img
                                                                 src=assets/cdn/images/catalog/kmt-t8_827d0c63.png width=100%
                                                                 height=100% alt="Khuyến mại"> <span>-45%</span> --}}
                                                         <p class="card-title product-name">{{ $product->name }}</p>
                                                         @if ($product->attributes())
                                                             {!! $product->renderAttributeDetails() !!}
                                                         @endif
                                                         <style>
                                                             .card-text .product-price {
                                                                 color: #C5232B;
                                                                 font-weight: bold;
                                                                 font-size: 1.2rem;
                                                             }
                                                         </style>
                                                         @if ($product->promotionPrice == null)
                                                             <p class="card-text product-price">
                                                                 {{ number_format($product->price) }}đ
                                                             </p>
                                                         @else
                                                             <p class="product-price-regular">
                                                                 <span>{{ number_format($product->price) }}đ</span>
                                                             </p>
                                                             <p class="card-text product-price">
                                                                 {{ number_format($product->promotionPrice->price_promotion) }}đ
                                                             </p>
                                                         @endif
                                                     </div>
                                                 </a>
                                             </div>
                                         @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('product', () => ({

                price: {{ $product->price }},
                sale_price: {{ $product->promotionPrice ? $product->promotionPrice->price_promotion : 0 }},
                priceFormat: '',
                sale_priceFormat: '',
                discount: '',
                parsedAddPriceColor: 0,
                parsedAddPriceSize: 0,

                setActiveOptionColor(valueOption, price) {
                    this.color.activeChooseAtr = valueOption;
                    this.color.add_price = price;
                    if (this.color !== undefined) {
                        parsedAddPriceColor = parseFloat(price);
                    }
                    this.updatePrice();
                },
                setActiveOptionSize(valueOption, price) {
                    this.size.activeChooseAtr = valueOption;
                    this.size.add_price = price;
                    if (this.size !== undefined) {
                        parsedAddPriceSize = parseFloat(price);
                    }
                    this.updatePrice();
                },
                updatePrice() {
                    this.price = this.calculateTotalPrice(parsedAddPriceColor + parsedAddPriceSize);
                    this.sale_price = this.calculateTotalSalePrice(parsedAddPriceColor +
                        parsedAddPriceSize);
                    this.updatePriceFormats();
                },
                calculateTotalPrice(addPrice) {
                    return {{ $product->price }} + addPrice;
                },
                calculateTotalSalePrice(addPrice) {
                    return {{ $product->promotionPrice ? $product->promotionPrice->price_promotion : 0 }} +
                        addPrice;
                },
                updatePriceFormats() {
                    const discountPercentage = ((this.price - this.sale_price) / this.price) * 100;
                    this.discount = `Tiết kiệm ${discountPercentage.toFixed(0)}%`;
                    this.priceFormat = this.price.toLocaleString('vi-VN', {
                        style: 'currency',
                        currency: 'VND'
                    });
                    this.sale_priceFormat = this.sale_price.toLocaleString('vi-VN', {
                        style: 'currency',
                        currency: 'VND'
                    });

                },
                init() {
                    this.updatePriceFormats();
                },
            }))

        })
    </script>
@endsection
{{-- block_main --}}


@push('styles')
    {{-- Your css style --}}
@endpush

@push('scripts')
    {{-- //script here --}}
@endpush
