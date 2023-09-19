@php
    /*
$layout_page = home
*/
    
    $banner_slide = $modelBanner
        ->start()
        ->setMoreWhere(['type', '=', 'background'])
        ->getData();
    $banner_left = $modelBanner
        ->start()
        ->setMoreWhere(['type', '=', 'banner-left'])
        ->getData();
    $banner_all_category = $modelBanner
        ->start()
        ->setMoreWhere(['type', '=', 'banner-tat-ca'])
        ->getData();
    $banner_slide_sp = $modelBanner
        ->start()
        ->setMoreWhere(['type', '=', 'banner-slide-sp'])
        ->getData();
    $banner_do_dien_lanh = $modelBanner
        ->start()
        ->setMoreWhere(['type', '=', 'banner-do-dien-lanh'])
        ->getData();
    $banner_tivi = $modelBanner
        ->start()
        ->setMoreWhere(['type', '=', 'banner-tivi'])
        ->getData();
    $banner_dien_gia_dung = $modelBanner
        ->start()
        ->setMoreWhere(['type', '=', 'banner-dien-gia-dung'])
        ->getData();
    $banner_dien_thoai = $modelBanner
        ->start()
        ->setMoreWhere(['type', '=', 'banner-dien-thoai'])
        ->getData();
    $banner_laptop = $modelBanner
        ->start()
        ->setMoreWhere(['type', '=', 'banner-laptop'])
        ->getData();
    $banner_thiet_bi = $modelBanner
        ->start()
        ->setMoreWhere(['type', '=', 'banner-thiet-bi'])
        ->getData();
    
    $brands = $modelBrand->start()->getData();
    
    $new_promotions = $modelCmsContent
        ->start()
        ->setLimit(6)
        ->getContentToCategory('99f6f319-1e74-4999-92b1-561589665a3f')
        ->getData();
    
    $productPromotion = $modelProduct
        ->start()
        ->getProductPromotion()
        ->setLimit(10)
        ->getData();
    $productLatest = $modelProduct
        ->start()
        ->getProductLatest()
        ->setLimit(25)
        ->getData();
    $categoryParentTivi = $modelCategory
        ->start()
        ->setParent('99f701e9-42ae-43fb-aa3e-e3b276ec9598')
        ->getData();
    $categoryParentTulanh = $modelCategory
        ->start()
        ->setParent('99f702cf-a657-4d2c-ab79-1a9dfb0ae1b0')
        ->getData();
    $categoryParentPhone = $modelCategory
        ->start()
        ->setParent('99f708cb-8984-42bd-ab58-7a84cc2f685a')
        ->getData();
    $categoryParentLaptop = $modelCategory
        ->start()
        ->setParent('99f7087b-1caa-4c91-9cb8-6da3b9ddfec9')
        ->getData();
    $arrayTivi = [];
    $arrayTulanh = [];
    $arrayPhone = [];
    $arrayLaptop = [];
    foreach ($categoryParentTivi as $key => $parent) {
        $childCategory = $modelCategory
            ->start()
            ->setParent($parent->id)
            ->getData();
        foreach ($childCategory as $key => $child) {
            array_push($arrayTivi, $child->id);
        }
    }
    foreach ($categoryParentTulanh as $key => $parent) {
        $childCategoryTulanh = $modelCategory
            ->start()
            ->setParent($parent->id)
            ->getData();
        foreach ($childCategoryTulanh as $key => $child) {
            array_push($arrayTulanh, $child->id);
        }
    }
    if ($categoryParentPhone->count() > 0) {
        foreach ($categoryParentPhone as $key => $parent) {
            $childCategoryPhone = $modelCategory
                ->start()
                ->setParent($parent->id)
                ->getData();
            foreach ($childCategoryPhone as $key => $child) {
                array_push($arrayPhone, $child->id);
            }
        }
        $productPhone = $modelProduct
            ->start()
            ->getProductToCategory($arrayPhone)
            ->setLimit(20)
            ->getData();
    } else {
        $productPhone = $modelProduct
            ->start()
            ->getProductToCategory('99f708cb-8984-42bd-ab58-7a84cc2f685a')
            ->setLimit(20)
            ->getData();
    }
    if ($categoryParentLaptop->count() > 0) {
        foreach ($categoryParentLaptop as $key => $parent) {
            $childCategoryLaptop = $modelCategory
                ->start()
                ->setParent($parent->id)
                ->getData();
            foreach ($childCategoryLaptop as $key => $child) {
                array_push($arrayLaptop, $child->id);
            }
        }
        $productLaptop = $modelProduct
            ->start()
            ->getProductToCategory($arrayLaptop)
            ->setLimit(20)
            ->getData();
    } else {
        $productLaptop = $modelProduct
            ->start()
            ->getProductToCategory('99f7087b-1caa-4c91-9cb8-6da3b9ddfec9')
            ->setLimit(20)
            ->getData();
    }
    
    $productTivi = $modelProduct
        ->start()
        ->getProductToCategory($arrayTivi)
        ->setLimit(20)
        ->getData();
    $productTulanh = $modelProduct
        ->start()
        ->getProductToCategory($arrayTulanh)
        ->setLimit(20)
        ->getData();
    
    $page_chungnhan = $modelPage
        ->start()
        ->setMoreWhere(['alias', '=', 'cac-giay-chung-nhan-cua-cua-hang'])
        ->getData();
    
@endphp

@extends($sc_templatePath . '.layout')

@section('block_main')
    <div class="body-content bg-page">

        <div class="container">
            <div class="page-home">
                <div class="row">
                    <div class="col-12">
                        <div id="home-slide" class="row">
                            <div class="col-md-8 col-12">
                                <div class="home-slide">
                                    <div class="banner-list">
                                        @foreach ($banner_slide as $key => $item)
                                            <div class="item banner-item banner-item-{{ $key }}">
                                                <a href="#" data-id="3927">
                                                    <picture>
                                                        <source srcset="{{ sc_file($item->getThumb()) }}" type="image/jpeg">

                                                        <img src="{{ sc_file($item->getThumb()) }}"
                                                            alt="{{ $item->title }}" width="640" height="450" />
                                                    </picture>


                                                    <span class="banner-item-view banner-item-view-3927"
                                                        style="display:none;"></span>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div id="home-box1" class="col-md-4 col-0">
                                <div class="home-box1 boxbanner-12">
                                    <div class="banner-list">
                                        @foreach ($banner_left as $item)
                                            <div class="item banner-item banner-item-{{ $key + 1 }}">
                                                <a href="back-to-school-sale.html" data-id="3632">

                                                    <img src="{{ sc_file($item->getThumb()) }}" alt="{{ $item->title }}"
                                                        width="310" height="145" />

                                                    <span class="banner-item-view banner-item-view-3632"
                                                        style="display:none;"></span>
                                                </a>
                                            </div>
                                        @endforeach


                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($productPromotion->count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="product-bestseller">
                                <div class="boxbanner-4">

                                    @if ($banner_all_category[0])
                                        <div class="banner-list">
                                            <div class="item banner-item banner-item-1">
                                                <a href="#" data-id="3072">
                                                    <picture>
                                                        <source srcset="{{ sc_file($banner_all_category[0]->getThumb()) }}"
                                                            type="image/jpeg">

                                                        <img src="{{ sc_file($banner_all_category[0]->getThumb()) }}"
                                                            alt="{{ $banner_all_category[0]->title }}" width="1200"
                                                            height="121" />
                                                    </picture>


                                                    <span class="banner-item-view banner-item-view-3072"
                                                        style="display:none;"></span>
                                                </a>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                                <div class="product-list pList-olw-4">
                                    @foreach ($productPromotion as $product)
                                        <div class="card mb-4">
                                            <a href="{{ $product->getUrl() }}" data-id=22055
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
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="wrapbox-pList">
                            <div class="wrapbox-loadProducts wrapbox-loadProducts-1">
                                <div class="wrapbox-loadProduct wrapbox-loadProduct-1-0">
                                    <div class="owlRespon-1 boxbanner-53">

                                        @if ($banner_slide_sp[0])
                                            <div class="banner-list">
                                                <div class="item banner-item banner-item-1">
                                                    <a href="dieu-hoa-sale.html" data-id="2996">
                                                        <picture>
                                                            <source srcset="{{ sc_file($banner_slide_sp[0]->getThumb()) }}"
                                                                type="image/jpeg">
                                                            <img src="{{ sc_file($banner_slide_sp[0]->getThumb()) }}"
                                                                alt="{{ $banner_slide_sp[0]->title }}" width="1200"
                                                                height="120" />
                                                        </picture>
                                                        <span class="banner-item-view banner-item-view-2996"
                                                            style="display:none;"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="product-list pList-olwMobile">
                                        @foreach ($productLatest as $product)
                                            <div class="card mb-4">
                                                <a href="{{ $product->getUrl() }}" data-id=22055
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
                                                                <span class="product-price-saving">
                                                                    {{ round((($product->price - $product->promotionPrice->price_promotion) / $product->price) * 100) }}%
                                                                </span>
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

                        <div class="clearfix"></div>
                        <div class="wrapbox-pList">
                            <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                                <li class="wrapbox-getProducts active" data-w="3" data-cid="1">
                                    <h3>
                                        <a href="javascript:;">Tủ lạnh </a>
                                    </h3>
                                </li>
                            </ul>

                            <div class="wrapbox-loadProducts wrapbox-loadProducts-3">
                                <div class="wrapbox-loadProduct wrapbox-loadProduct-3-17">
                                    <div class="owlRespon-2-10 boxbanner-14">
                                        @if ($banner_do_dien_lanh)
                                            <div class="banner-list">
                                                @foreach ($banner_do_dien_lanh as $key => $item)
                                                    <div class="item banner-item banner-item-{{ $key + 1 }}">
                                                        <a href="sieu-sale-may-giat-may-say.html"
                                                            data-id="3795">


                                                            <picture>
                                                                <source srcset="{{ sc_file($item->getThumb()) }}"
                                                                    type="image/jpeg">

                                                                <img src="{{ sc_file($item->getThumb()) }}"
                                                                    alt=""{{ $item->title }}" width="600"
                                                                    height="180" />
                                                            </picture>


                                                            <span class="banner-item-view banner-item-view-3795"
                                                                style="display:none;"></span>
                                                        </a>
                                                    </div>
                                                @endforeach


                                            </div>
                                        @endif
                                    </div>
                                    <div class="product-list pList-olw">


                                        @foreach ($productTulanh as $product)
                                            <div class="card mb-4">
                                                <a href="{{ $product->getUrl() }}" data-id=22055
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
                                                                <span class="product-price-saving">
                                                                    {{ round((($product->price - $product->promotionPrice->price_promotion) / $product->price) * 100) }}%
                                                                </span>
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
                                    <a class="viewmore viewmorecate" href="category/tu-lanh.html"><span>Xem tất cả Tủ lạnh
                                        </span></a>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="wrapbox-pList">
                            <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                                <li class="wrapbox-getProducts active" data-w="2" data-cid="18">
                                    <h3>
                                        <a href="javascript:;">Tivi</a>
                                    </h3>
                                </li>
                            </ul>

                            <div class="wrapbox-loadProducts wrapbox-loadProducts-2">
                                <div class="wrapbox-loadProduct wrapbox-loadProduct-2-18">
                                    <div class="owlRespon-2-10 boxbanner-14">
                                        @if ($banner_tivi)
                                            <div class="banner-list">
                                                @foreach ($banner_tivi as $key => $item)
                                                    <div class="item banner-item banner-item-{{ $key + 1 }}">
                                                        <a href="tv-oled-qled-bigsize.html"
                                                            data-id="3984">
                                                            <picture>
                                                                <source srcset="{{ sc_file($item->getThumb()) }}"
                                                                    type="image/jpeg">

                                                                <img src="{{ sc_file($item->getThumb()) }}"
                                                                    alt="{{ $item->title }}" width="600"
                                                                    height="180" />
                                                            </picture>
                                                            <span class="banner-item-view banner-item-view-3984"
                                                                style="display:none;"></span>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                    <div class="product-list pList-olw">

                                        @foreach ($productTivi as $product)
                                            <div class="card mb-4">
                                                <a href="{{ $product->getUrl() }}" data-id=22055
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
                                                                <span class="product-price-saving">
                                                                    {{ round((($product->price - $product->promotionPrice->price_promotion) / $product->price) * 100) }}%
                                                                </span>
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

                                    <a class="viewmore viewmorecate" href="category/tivi.html"><span>Xem tất cả
                                            Tivi</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        @php
                            $category_Giadung = $modelCategory
                                ->start()
                                ->setParent('99f7082b-aa21-4a96-b3f5-7546f7f53db3')
                                ->setLimit(7)
                                ->setSort(['id', 'asc'])
                                ->getData();
                        @endphp
                        <div class="wrapbox-pList" x-data="{ open: 0 }">
                            <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                                @php
                                    $check = false;
                                @endphp
                                @foreach ($category_Giadung as $key => $item)
                                    @php
                                        $check_giadung = $modelProduct
                                            ->start()
                                            ->getProductToCategory($item->id)
                                            ->getData();
                                        
                                    @endphp
                                    @if ($check_giadung->count() > 0)
                                        <li class="wrapbox-getProducts"
                                            @if( $check == false) x-init="open = {{$key}}" {{$check = true}} @endif
                                            :class="{{ $key }} == open ? 'active' : ''"
                                            x-on:click="open = {{ $key }}">
                                            <h3>
                                                <a href="javascript:;">{{ $item->title }}</a>
                                            </h3>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>

                            <div class="wrapbox-loadProducts wrapbox-loadProducts-6">
                                <div class="wrapbox-loadProduct wrapbox-loadProduct-6-2">
                                    <div class="owlRespon-2-10 boxbanner-14">
                                        @if ($check_giadung->count() > 0)
                                            @if ($banner_dien_gia_dung)
                                                <div class="banner-list">
                                                    @foreach ($banner_dien_gia_dung as $key => $item)
                                                        <div class="item banner-item banner-item-{{ $key + 1 }}">
                                                            <a href="#" data-id="3314">
                                                                <picture>
                                                                    <source srcset="{{ sc_file($item->getThumb()) }}"
                                                                        type="image/jpeg">

                                                                    <img src="{{ sc_file($item->getThumb()) }}"
                                                                        alt="{{ $item->title }}" width="600"
                                                                        height="180" />
                                                                </picture>
                                                                <span class="banner-item-view banner-item-view-3314"
                                                                    style="display:none;"></span>
                                                            </a>
                                                        </div>
                                                    @endforeach


                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                    @foreach ($category_Giadung as $key => $category)
                                    <div class="product-list pList-olwMobile " x-show='open == {{$key}}' style="display:none">
                                      
                                            @php
                                                $product_giadung = $modelProduct
                                                    ->start()
                                                    ->getProductToCategory($category->id)
                                                    ->getData(); 
                                            @endphp
                                            @if ($product_giadung)
                                                @foreach ($product_giadung as $product)
                                                    <div class="card mb-4">
                                                        <a href="{{ $product->getUrl() }}" data-id="22486"
                                                            class="product-item">
                                                            <div class="card-img-top">
                                                                <picture>
                                                                    <source srcset="{{ sc_file($product->getThumb()) }}"
                                                                        type="image/webp">
                                                                    <source srcset="{{ sc_file($product->getThumb()) }}"
                                                                        type="image/jpeg">
                                                                    <img loading="lazy"
                                                                        src="{{ sc_file($product->getThumb()) }}">

                                                                    <span class="product-item-view product-item-view-22486"
                                                                        style="display:none;"></span>
                                                                </picture>
                                                            </div>
                                                            <div class="card-body">
                                                                <p class="card-title product-name">
                                                                    {{ $product->name }} </p>

                                                                @if ($product->attributes())
                                                                    {!! $product->renderAttributeDetails() !!}
                                                                @endif
                                                                {{-- {!! $product->showPriceDetail() !!} --}}
                                                              
                                                                @if ($product->promotionPrice == null)
                                                                    <p class="card-text product-price">
                                                                        {{ number_format($product->price) }}đ
                                                                    </p>
                                                                @else
                                                                    <p class="product-price-regular">
                                                                        <span>{{ number_format($product->price) }}đ</span>
                                                                        <span class="product-price-saving">
                                                                            {{ round((($product->price - $product->promotionPrice->price_promotion) / $product->price) * 100) }}%
                                                                        </span>
                                                                    </p>
                                                                    <p class="card-text product-price">
                                                                        {{ number_format($product->promotionPrice->price_promotion) }}đ
                                                                    </p>
                                                                @endif


                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @endif
                                       

                                    </div>
                                    @endforeach
                                    @if($product_giadung->count() > 0)
                                    <a class="viewmore viewmorecate" href="category/gia-dung-dung-cu.html"><span>Xem tất
                                            cả Điện gia
                                            dụng</span></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                     
                        <div class="clearfix"></div>
                        @if ($productPhone->count() > 0)
                            <div class="wrapbox-pList">
                                <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                                    <li class="wrapbox-getProducts active" data-w="7" data-cid="47">
                                        <h3>
                                            <a href="javascript:;">Smartphones, Máy tính bảng</a>
                                        </h3>
                                    </li>
                                </ul>

                                <div class="wrapbox-loadProducts wrapbox-loadProducts-7">
                                    <div class="wrapbox-loadProduct wrapbox-loadProduct-7-47">
                                        <div class="owlRespon-2-10 boxbanner-14">

                                            @if ($banner_dien_thoai)
                                                <div class="banner-list">
                                                    @foreach ($banner_dien_thoai as $key => $item)
                                                        <div class="item banner-item banner-item-{{ $key + 1 }}">
                                                            <a href="apple-iphone-14-series.html"
                                                                data-id="3806">
                                                                <picture>
                                                                    <source srcset="{{ sc_file($item->getThumb()) }}"
                                                                        type="image/jpeg">
                                                                    <img src="{{ sc_file($item->getThumb()) }}"
                                                                        alt="{{ $item->title }}" width="600"
                                                                        height="180" />
                                                                </picture>
                                                                <span class="banner-item-view banner-item-view-3806"
                                                                    style="display:none;"></span>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="product-list pList-olw">


                                            @if ($productPhone)
                                                @foreach ($productPhone as $product)
                                                    <div class="card mb-4">
                                                        <a href="{{ $product->getUrl() }}" data-id="22486"
                                                            class="product-item">
                                                            <div class="card-img-top">
                                                                <picture>
                                                                    <source srcset="{{ sc_file($product->getThumb()) }}"
                                                                        type="image/webp">
                                                                    <source srcset="{{ sc_file($product->getThumb()) }}"
                                                                        type="image/jpeg">
                                                                    <img loading="lazy"
                                                                        src="{{ sc_file($product->getThumb()) }}">

                                                                    <span class="product-item-view product-item-view-22486"
                                                                        style="display:none;"></span>
                                                                </picture>
                                                            </div>
                                                            <div class="card-body">
                                                                {{-- <p class="product-specialtype-box">
                                                                <img loading="lazy"
                                                                    src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                                    width="100%" height="100%" alt="Khuyến mại"/>
                                                                <span>-24%</span>
                                                            </p> --}}
                                                                <p class="card-title product-name">
                                                                    {{ $product->name }} </p>

                                                                @if ($product->attributes())
                                                                    {!! $product->renderAttributeDetails() !!}
                                                                @endif
                                                                {{-- {!! $product->showPriceDetail() !!} --}}
                                                                @if ($product->promotionPrice == null)
                                                                    <p class="product-price-regular">
                                                                        <span>{{ number_format($product->price) }}đ</span>
                                                                    </p>
                                                                @else
                                                                    <p class="product-price-regular">
                                                                        <span>{{ number_format($product->price) }}đ</span>
                                                                        <span class="product-price-saving">
                                                                            {{ round((($product->price - $product->promotionPrice->price_promotion) / $product->price) * 100) }}%
                                                                        </span>
                                                                    </p>
                                                                    <p class="card-text product-price">
                                                                        {{ number_format($product->promotionPrice->price_promotion) }}đ
                                                                    </p>
                                                                @endif


                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @endif


                                        </div>
                                        <a class="viewmore viewmorecate"
                                            href="category/smartphone-may-tinh-bang.html"><span>Xem tất cả
                                                Điện thoại</span></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="clearfix"></div>
                        @if ($productLaptop->count() > 0)
                            <div class="wrapbox-pList">
                                <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                                    <li class="wrapbox-getProducts active" data-w="8" data-cid="52">
                                        <h3>
                                            <a href="javascript:;">Laptop</a>
                                        </h3>
                                    </li>
                                </ul>
                                <div class="wrapbox-loadProducts wrapbox-loadProducts-8">
                                    <div class="wrapbox-loadProduct wrapbox-loadProduct-8-52">
                                        <div class="owlRespon-2-10 boxbanner-14">

                                            @if ($banner_laptop)
                                                <div class="banner-list">
                                                    @foreach ($banner_laptop as $key => $item)
                                                        <div class="item banner-item banner-item-{{ $key + 1 }}">
                                                            <a href="laptop-sale-cuoi-thang.html"
                                                                data-id="3979">
                                                                <picture>
                                                                    <source srcset="{{ sc_file($item->getThumb()) }}"
                                                                        type="image/jpeg">

                                                                    <img src="{{ sc_file($item->getThumb()) }}"
                                                                        alt="{{ $item->title }}" width="600"
                                                                        height="180" />
                                                                </picture>
                                                                <span class="banner-item-view banner-item-view-3979"
                                                                    style="display:none;"></span>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="product-list pList-olwMobile">

                                            @if ($productLaptop)
                                                @foreach ($productLaptop as $product)
                                                    <div class="card mb-4">
                                                        <a href="{{ $product->getUrl() }}" data-id="22486"
                                                            class="product-item">
                                                            <div class="card-img-top">
                                                                <picture>
                                                                    <source srcset="{{ sc_file($product->getThumb()) }}"
                                                                        type="image/webp">
                                                                    <source srcset="{{ sc_file($product->getThumb()) }}"
                                                                        type="image/jpeg">
                                                                    <img loading="lazy"
                                                                        src="{{ sc_file($product->getThumb()) }}">

                                                                    <span class="product-item-view product-item-view-22486"
                                                                        style="display:none;"></span>
                                                                </picture>
                                                            </div>
                                                            <div class="card-body">

                                                                <p class="card-title product-name">
                                                                    {{ $product->name }} </p>

                                                                @if ($product->attributes())
                                                                    {!! $product->renderAttributeDetails() !!}
                                                                @endif
                                                                {{-- {!! $product->showPriceDetail() !!} --}}
                                                                @if ($product->promotionPrice == null)
                                                                    <p class="product-price-regular">
                                                                        <span>{{ number_format($product->price) }}đ</span>
                                                                    </p>
                                                                @else
                                                                    <p class="product-price-regular">
                                                                        <span>{{ number_format($product->price) }}đ</span>
                                                                        <span class="product-price-saving">
                                                                            {{ round((($product->price - $product->promotionPrice->price_promotion) / $product->price) * 100) }}%
                                                                        </span>
                                                                    </p>
                                                                    <p class="card-text product-price">
                                                                        {{ number_format($product->promotionPrice->price_promotion) }}đ
                                                                    </p>
                                                                @endif


                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>
                                        <a class="viewmore viewmorecate"
                                            href="category/laptop-laptop-gaming.html"><span>Xem tất cả
                                                Laptop</span></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="clearfix"></div>
                        @php
                            $category_thietbivanphong = $modelCategory
                                ->start()
                                ->setParent('99f7093a-5a15-41ca-b148-ddf6a2739e2f')
                                ->getData();
                        @endphp
                        <div class="wrapbox-pList" x-data="{ open: 0 }">
                            <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                                @php
                                    $check = false;
                                @endphp
                                @foreach ($category_thietbivanphong as $key => $item)
                                    @php
                                        $check_thietbi = $modelProduct
                                            ->start()
                                            ->getProductToCategory($item->id)
                                            ->getData();
                                    @endphp
                                    @if ($check_thietbi->count() > 0)
                                        <li class="wrapbox-getProducts"
                                        @if( $check == false) x-init="open = {{$key}}" {{$check = true}} @endif
                                            :class="{{ $key }} == open ? 'active' : ''"
                                            x-on:click="open = {{ $key }}">
                                            <h3>
                                                <a href="javascript:;">{{ $item->title }}</a>
                                            </h3>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>

                            <div class="wrapbox-loadProducts wrapbox-loadProducts-9">
                                <div class="wrapbox-loadProduct wrapbox-loadProduct-9-59">
                                    <div class="owlRespon-2-10 boxbanner-14">
                                        @if ($banner_thiet_bi)
                                            <div class="banner-list">
                                                @foreach ($banner_thiet_bi as $key => $item)
                                                    <div class="item banner-item banner-item-{{ $key + 1 }}">
                                                        <a href="laptop-sale-cuoi-thang.html"
                                                            data-id="3979">
                                                            <picture>
                                                                <source srcset="{{ sc_file($item->getThumb()) }}"
                                                                    type="image/jpeg">

                                                                <img src="{{ sc_file($item->getThumb()) }}"
                                                                    alt="{{ $item->title }}" width="600"
                                                                    height="180" />
                                                            </picture>
                                                            <span class="banner-item-view banner-item-view-3979"
                                                                style="display:none;"></span>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif

                                    </div>
                                    @foreach ($category_thietbivanphong as $key => $category)
                                    <div class="product-list pList-olw"  x-show='open == {{$key}}' style="display:none">
                                       
                                            @php
                                                $product_thietbi = $modelProduct
                                                    ->start()
                                                    ->getProductToCategory($category->id)
                                                    ->getData();
                                            @endphp
                                            @if ($product_thietbi)
                                                {{-- @dd($product_thietbi[0]->renderAttributeDetails()) --}}
                                                @foreach ($product_thietbi as $product)
                                                    <div class="card mb-4">
                                                        <a href="{{ $product->getUrl() }}" data-id="22486"
                                                            class="product-item">
                                                            <div class="card-img-top">
                                                                <picture>
                                                                    <source srcset="{{ sc_file($product->getThumb()) }}"
                                                                        type="image/webp">
                                                                    <source srcset="{{ sc_file($product->getThumb()) }}"
                                                                        type="image/jpeg">
                                                                    <img loading="lazy"
                                                                        src="{{ sc_file($product->getThumb()) }}">

                                                                    <span class="product-item-view product-item-view-22486"
                                                                        style="display:none;"></span>
                                                                </picture>
                                                            </div>
                                                            <div class="card-body">
                                                                {{-- <p class="product-specialtype-box">
                                                            <img loading="lazy"
                                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                                width="100%" height="100%" alt="Khuyến mại"/>
                                                            <span>-24%</span>
                                                        </p> --}}
                                                                <p class="card-title product-name">
                                                                    {{ $product->name }} </p>

                                                                @if ($product->attributes())
                                                                    {!! $product->renderAttributeDetails() !!}
                                                                @endif
                                                                {{-- {!! $product->showPriceDetail() !!} --}}
                                                                @if ($product->promotionPrice == null)
                                                                    <p class="product-price-regular">
                                                                        <span>{{ number_format($product->price) }}đ</span>
                                                                    </p>
                                                                @else
                                                                    <p class="product-price-regular">
                                                                        <span>{{ number_format($product->price) }}đ</span>
                                                                        <span class="product-price-saving">
                                                                            {{ round((($product->price - $product->promotionPrice->price_promotion) / $product->price) * 100) }}%
                                                                        </span>
                                                                    </p>
                                                                    <p class="card-text product-price">
                                                                        {{ number_format($product->promotionPrice->price_promotion) }}đ
                                                                    </p>
                                                                @endif


                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @endif
                                        

                                    </div>
                                    @endforeach

                                    @if( $product_thietbi->count() > 0)
                                    <a class="viewmore viewmorecate" href="category/thiet-bi-van-phong.html"><span>Xem tất
                                            cả Thiết bị văn
                                            phòng</span></a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @php
                            $category_phukien = $modelCategory
                                ->start()
                                ->setParent('99f70974-44de-4ae5-97b5-25532c155cf7')
                                ->getData();
                        @endphp
                        <div class="wrapbox-pList" x-data="{ open: 0 }">
                            <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                                @foreach ($category_phukien as $key => $item)
                                    @php
                                        $check_phukien = $modelProduct
                                            ->start()
                                            ->getProductToCategory($item->id)
                                            ->getData();
                                    @endphp
                                    @if ($check_phukien->count() > 0)
                                        <li class="wrapbox-getProducts"
                                            :class="{{ $key }} == open ? 'active' : ''"
                                            x-on:click="open = {{ $key }}">
                                            <h3>
                                                <a href="javascript:;">{{ $item->title }}</a>
                                            </h3>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="wrapbox-loadProducts wrapbox-loadProducts-11">
                                <div class="wrapbox-loadProduct wrapbox-loadProduct-11-76">
                                    <div class="owlRespon-2-10 boxbanner-14">


                                    </div>
                                    <div class="product-list pList-olw">

                                        @foreach ($category_phukien as $key => $category)
                                            @php
                                                $product_phukien = $modelProduct
                                                    ->start()
                                                    ->getProductToCategory($category->id)
                                                    ->getData();
                                            @endphp
                                            @if ($product_phukien)
                                                {{-- @dd($product_thietbi[0]->renderAttributeDetails()) --}}
                                                @foreach ($product_phukien as $product)
                                                    <div class="card mb-4">
                                                        <a href="{{ $product->getUrl() }}" data-id="22486"
                                                            class="product-item">
                                                            <div class="card-img-top">
                                                                <picture>
                                                                    <source srcset="{{ sc_file($product->getThumb()) }}"
                                                                        type="image/webp">
                                                                    <source srcset="{{ sc_file($product->getThumb()) }}"
                                                                        type="image/jpeg">
                                                                    <img loading="lazy"
                                                                        src="{{ sc_file($product->getThumb()) }}">

                                                                    <span class="product-item-view product-item-view-22486"
                                                                        style="display:none;"></span>
                                                                </picture>
                                                            </div>
                                                            <div class="card-body">
                                                                {{-- <p class="product-specialtype-box">
                                                        <img loading="lazy"
                                                            src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                            width="100%" height="100%" alt="Khuyến mại"/>
                                                        <span>-24%</span>
                                                    </p> --}}
                                                                <p class="card-title product-name">
                                                                    {{ $product->name }} </p>

                                                                @if ($product->attributes())
                                                                    {!! $product->renderAttributeDetails() !!}
                                                                @endif
                                                                {{-- {!! $product->showPriceDetail() !!} --}}
                                                                @if ($product->promotionPrice == null)
                                                                    <p class="product-price-regular">
                                                                        <span>{{ number_format($product->price) }}đ</span>
                                                                    </p>
                                                                @else
                                                                    <p class="product-price-regular">
                                                                        <span>{{ number_format($product->price) }}đ</span>
                                                                        <span class="product-price-saving">
                                                                            {{ round((($product->price - $product->promotionPrice->price_promotion) / $product->price) * 100) }}%
                                                                        </span>
                                                                    </p>
                                                                    <p class="card-text product-price">
                                                                        {{ number_format($product->promotionPrice->price_promotion) }}đ
                                                                    </p>
                                                                @endif


                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @endif
                                        @endforeach

                                    </div>
                                    @if( $product_phukien->count() > 0)
                                    <a class="viewmore viewmorecate" href="category/phu-kien-sp-thong-minh.html"><span>Xem
                                            tất cả Phụ
                                            kiện</span></a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>
                </div>


                <div class="clearfix pt-3"></div>
                <div class="row home-newsfeatured">
                    <div class="col-md-12">
                        <h4 class="home-news-head">TIN KHUYẾN MẠI <a href="/cms-category/khuyen-mai">Xem thêm</a>
                        </h4>
                        <div class="home-news1">
                            @foreach ($new_promotions as $key => $post)
                                <div class="item news-item news-item-{{ $key + 1 }}">
                                    <div class="img">
                                        <a href="{{ $post->getUrl() }}" title="{{ $post->title }}"
                                            style="width: 100%">
                                            <picture>
                                                <img loading="lazy" src="{{ $post->getImage() }}"
                                                    alt="{{ $post->title }}">
                                                <span class="news-item-view news-item-view-17530"
                                                    style="display:none;"></span>
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="name">
                                        <a href="{{ $post->getUrl() }}" title="{{ $post->title }}">
                                            {{ $post->title }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="clearfix pt-3"></div>
                <div class="row home-newsfeatured">
                    <div class="col-md-12">
                        <h4 class="home-news-head">CHỨNG NHẬN ĐẠI LÝ</h4>
                        <div class="home-news1">
                            <div class="product-list pList-olw-4">
                                @php
                                    $images_chungnhan = explode(',', $page_chungnhan[0]->image);
                                    
                                @endphp
                                @foreach ($images_chungnhan as $key => $item)
                                    <div class="card mb-4" style="height: auto;">
                                        <img src="{{ sc_file($item) }}" alt="">
                                    </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix pt-3"></div>
                <div class="row home-newsfeatured">
                    <div class="col-md-12">
                        <h4 class="home-news-head">THƯƠNG HIỆU</h4>
                        <div class="home-news1">
                            <div class="product-list pList-olw-4">
                                @foreach ($brands as $item)
                                    <div class="card mb-4" style="height: auto;border:none">
                                        <img src="{{ sc_file($item->getThumb()) }}" alt="{{ $item->title }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="clearfix"></div>
    </div>
@endsection

@push('styles')
    {{-- Your css style --}}
@endpush

@push('scripts')
    {{-- //script here --}}
@endpush
