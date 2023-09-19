@php
    /*
    $layout_page = content_list
                **Variables:**
    - $entries: paginate
    Use paginate: $entries->appends(request()->except(['page','_token']))->links()
    */
    
    $categories = $modelCmsCategory->start()->getCategoryRoot()->getData();

    $childCategories = $modelCmsCategory->start()->setParent($parent == "0" ? $id : $parent)->getData();

    $rightSideContents = $modelCmsContent->start()->setLimit(5)->getData();
@endphp

@extends($sc_templatePath . '.layout')

@section('block_main')
    <div class="body-content bg-page">

        <div class="container">
            <div id="catenews-content" class="wrap-news">
                <div class="wrap-news-head">
                    <div class="row wrap-news-breadcrumb">
                        <nav>
                            <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                                <li class="breadcrumb-item" itemprop="itemListElement" itemscope
                                    itemtype="https://schema.org/ListItem">
                                    <a href=""{{ sc_route('home') }}" itemprop="item">
                                        <span itemprop="name">{{ sc_store('title', ($storeId ?? null)) }}</span>
                                        <meta itemprop="position" content="1" />
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" itemprop="itemListElement" itemscope
                                    itemtype="https://schema.org/ListItem">
                                    <h1 itemprop="name">{{$title}}</h1>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row wrap-news-nav">
                        <div class="nav-newscate owl-newscate owl-nav-small">
                            <div class="nav-newscate-item">
                                <a href="/" class="fa fa-home"></a>
                            </div>
                            @foreach ($categories as $item)
                              <div class="nav-newscate-item @if($item->id == $id || $item->id == $parent) active @endif">
                                  <a href="{{$item->getUrl()}}"><span>{{$item->title}}</span></a>
                              </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-9 col-lg-9">
                        <div class="row">
                            <div class="col-12 col-md-3 col-lg-3">
                                <div class="nav-newscate-child">
                                    <h2 class="title">{{$title}}</h2>


                                    <ul class="navbar-nav">
                                      @foreach ($childCategories as $item)
                                        <li class="nav-item @if($item->id == $id) active @endif">
                                            <a class="nav-link" href="{{$item->getUrl()}}"><span>{{$item->title}}</span></a>
                                        </li>
                                      @endforeach
                                        <li class="nav-item fLimitMenu_Collapse" style="display:none;"><a
                                                href="javascript:"><span>Thu gọn</span>
                                                <div class="circle"></div>
                                            </a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="news-category-detail row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <ul id="newslist-api" class="newscate-list list-unstyled ">
                                            @if ($entries->count())
                                                @foreach ($entries as $entryDetail)
                                                    <li>
                                                        @include(
                                                            $sc_templatePath . '.common.entry_single',
                                                            ['entry' => $entryDetail]
                                                        )
                                                    </li>
                                                @endforeach

                                                {{-- Render pagination --}}
                                                @include($sc_templatePath . '.common.pagination', [
                                                    'items' => $entries,
                                                ])
                                                {{-- // Render pagination --}}
                                            @else
                                                {{-- {!! sc_language_render('front.no_item') !!} --}}
                                                <p>Không tìm thấy bài viết nào</p>
                                            @endif

                                            {{-- <a class="newscate-list-loadmore" href="javascript:;"
                                          onclick="fApiNewList('121', '2', '', false)"
                                          title="Xem thêm Khuyến mại">
                                          Xem thêm Khuyến mại
                                      </a> --}}

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">

                        <div class="news-option">
                            <p class="text-color-news">Tin mới nhất</p>
                            @foreach ($rightSideContents as $key => $item)
                              <div class="item news-item news-item-{{$key}}">
                                  <div class="img">
                                      <a href="{{$item->getUrl()}}"
                                          title="{{$item->title}}">
                                          <picture>
                                              <img loading="lazy"
                                                  src="{{$item->getImage()}}"
                                                  alt="{{$item->title}}">
                                              <span class="news-item-view news-item-view-17695"
                                                  style="display:none;"></span>
                                          </picture>
                                      </a>
                                  </div>
                                  <div class="name">
                                      <a href="{{$item->getUrl()}}"
                                          title="{{$item->title}}">
                                          {{$item->title}}
                                      </a>
                                  </div>
                              </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="clearfix"> </div>
    </div>

    {{-- Render include view --}}
    @include($sc_templatePath . '.common.include_view')
    {{-- // Render include view --}}

@endsection


@push('scripts')
    {{-- Script here --}}
@endpush
