@php
    /*
$layout_page = shop_product_list
            **Variables:**
- $subCategory: paginate
Use paginate: $subCategory->appends(request()->except(['page','_token']))->links()
- $products: paginate
Use paginate: $products->appends(request()->except(['page','_token']))->links()
*/
// dd($layout_page->title);
@endphp

@extends($sc_templatePath . '.layout')


@section('block_main')
    <div class="body-content bg-page">
        <div class=container>
            <div class=wrap-product>
                <div class=row>
                    <div class=col-12>
                        {{-- <h1 class=breadcrumb-highlight>Tivi giá rẻ, Smart TV 4K 8K OLED QLED Trả góp 0%</h1> --}}
                        <nav>
                            <ol class=breadcrumb >
                                <li class=breadcrumb-item >
                                    <a href="{{ sc_route('home') }}"> 
                                        <span> Trang chủ </span>
                                           
                                    </a>
                                <li class="breadcrumb-item active"><span>Tìm kiếm</span>
                            </ol>
                        </nav>
                    </div>
                </div>
                @if(isset($subCategory) && $subCategory->count() > 0 )
                @if ($subCategory[0]->image != null)
                <div class=row>
                    <div class=col-12>
                        <div class="owlRespon-3 boxbanner-21">
                            <div class=banner-list>
                                @foreach (explode(',', $subCategory[0]->image) as $banner)
                                    <div class="item banner-item banner-item-1">
                                        <a href=# data-id=3983>
                                            <picture>
                                                <source srcset="{{ sc_file($banner) }}" type=image/jpeg>
                                                <img src="{{ sc_file($banner) }}" alt="" width=396 height=185>
                                            </picture>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif     
                @endif
                <div class="row" style="margin-top: 30px">
                    <div class="col-12 col-md-9">
                        <div class=row>
                            <div class="col-12 col-md-12">
                                <ul id=sort-by-full class=list-unstyled>
                                    <li><b>Sắp xếp theo:</b>
                                    <li>
                                        <!-- Render include filter sort -->
                                        @include($sc_templatePath . '.common.product_filter_sort', [
                                            'filterSort' => $filter_sort,
                                        ])
                                        <!--// Render include filter sort -->
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class=row>
                            <div id=getproducts class="col-12 col-md-12">
                                <div class="row product-list product-list-bycate ">
                                    @if($products->count() > 0)
                                    @foreach ($products as $product)
                                        <div class="col-6 col-md-3 col-lg-3">
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
                                        </div>
                                    @endforeach
                                    @else
                                        <p>Không tồn tài sản phẩm </p>
                                    @endif


                                    {{-- <div style="display: flex; align-items: center;justify-content: center">
                                        {{$products->appends(request()->except(['page','_token']))->links()}}
                                    </div>             --}}
                                    
                                </div>
                                <style>
                                    .page-item.active .page-link{
                                        background-color: #e3007b;
                                        border-color:#e3007b; 
                                    }
                                    .page-link:hover{
                                        color:#e3007b;
                                    }
                                    .page-link{
                                        color:black;
                                    }
                                </style>
                                <div style="display: flex;align-items: center;justify-content: center;margin-top: 20px">
                                    {{$products->appends(request()->except(['page','_token']))->links()}}

                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        a .checkbox-filters {
                            justify-content: center;
                            align-items: center;
                            display: flex;
                        }

                        .checkbox-filters input {
                            float: left;
                            width: 16px;
                            margin-top: 2px;
                            margin-right: 2px;
                            border: 1px solid #fff;
                            background: #fff;
                        }

                        .checkbox-filters img {
                            float: left;
                            max-width: 75%;
                            max-height: 24px;
                            vertical-align: middle;
                        }

                        .checkbox-filters span {
                            font-size: 13px;
                            text-transform: capitalize;
                            color: #333;
                        }
                    </style>
                    <div class="col-0 col-md-3">
                        <div class="pl-filters pl-filters-deD">
                            <div class="accordion-collapse pl-filterBox">
                                <div class=card>
                                    <div class=card-header id=cardHeaderBrand>
                                        <h5><a href=#collapseBrand aria-controls=collapseBrand data-toggle=collapse
                                                aria-expanded=true class=collapsed> Hãng <i class="fa fa-angle-down"></i>
                                            </a></h5>
                                    </div>
                                    <div class="collapse show" id=collapseBrand aria-labelledby=cardHeaderBrand>
                                        <div class=card-body>
                                            @php
                                                $brands = $modelBrand->start()->getData();
                                            @endphp
                                            <ul class=list-unstyled>
                                                @foreach ($brands as $brand)
                                                    <li>
                                                        <a class="pa-filter pa-filter-fast pa-filter-brand pa-filter-brand-782"
                                                            href="{{$brand->getUrl()}}">
                                                            <label class="checkbox-filters">
                                                                <img src="{{ $brand->getThumb() }}"
                                                                    alt="{{ $brand->name }}" />
                                                            </label>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="" method="get" id="filter_price">
                                @php
                                    $queries = request()->except(['filter_sort','page']);
                                    @endphp
                                    @foreach ($queries as $key => $query)
                                    <input type="hidden" name="{{ $key }}" value="{{ $query }}">
                                    @endforeach
                                <div class="accordion-collapse pl-filterBox">
                                    <div class=card>
                                        <div class=card-header id=cardHeaderPriceRange>
                                            <h5><a href=#collapsePricerange aria-controls=collapsePricerange
                                                    data-toggle=collapse aria-expanded=true class=collapsed> Chọn mức giá <i
                                                        class="fa fa-angle-down"></i> </a></h5>
                                        </div>
                                        <div class="collapse show" id=collapsePricerange aria-labelledby=cardHeaderPriceRange>
                                            <div class=card-body>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <input type="radio" name="filter_price" id="" value="5">
                                                        <label for="">Dưới 5 triệu</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="filter_price" id="" value="5-10">
                                                        <label for=""> Từ 5 - 10 triệu</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="filter_price" id="" value="10-15">
                                                        <label for="">Từ 10 - 15 triệu</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="filter_price" id="" value="15-20">
                                                        <label for="">Từ 15 - 20 triệu</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="filter_price" id="" value="20-30">
                                                        <label for="">Từ 20 - 30 triệu </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="filter_price" id="" value="30-50">
                                                        <label for="">Từ 30 - 50 triệu</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="filter_price" id="" value="50">
                                                        <label for="">Trên 50 triệu</label>
                                                    </li>
                                                </ul>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                            </form>
                               
                           
                            
                            @if(isset($subCategory) && $subCategory->count() > 0 )
                            <div class="accordion-collapse pl-filterBox">
                                <div class=card>
                                    <div class=card-header id=cardHeaderAttr-2>
                                        <h5><a href=#cardCollapseAttr-2 aria-controls=cardCollapseAttr-2
                                                data-toggle=collapse aria-expanded=true class=collapsed> Loại <i
                                                    class="fa fa-angle-down"></i> </a></h5>
                                    </div>
                                    <div class="collapse show" id=cardCollapseAttr-2 aria-labelledby=cardHeaderAttr-2>
                                        <div class=card-body>
                                            <ul class=list-unstyled>
                                           @foreach ($subCategory as $sub)
                                               @php
                                                    $childCategory = $modelCategory->start()->setParent($sub->id)->getData();
                                               @endphp
                                               @foreach ($childCategory as $child)
                                               <li>
                                                    <a class="pa-filter pa-filter-fast pa-filter-attr pa-filter-attr-6"
                                                    href="{{$child->getUrl()}}" data-href=qled-tv data-id=6
                                                    data-exist=0 data-slug=0> 
                                                        <label class=checkbox> 
                                                            <span>{{$child->title}} </span>
                                                        </label> 
                                                    </a>
                                               </li>
                                               @endforeach
                                           @endforeach
                                               
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                           
                            
                           
                           
                        </div>
                    </div>
                </div>
               
              
            </div>
        </div>
        <div class=clearfix></div>
    </div>
@endsection


@push('styles')
    {{-- Your css style --}}
@endpush

@push('scripts')
    <script type="text/javascript">
    $('[name="filter_price"]').change(function(event) {
        $('#filter_price').submit();
    });
    </script>
@endpush
