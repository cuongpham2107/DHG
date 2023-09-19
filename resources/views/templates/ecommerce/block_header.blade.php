@php
    $rootCategories = $modelCategory->start()->getCategoryRoot()->setSort(['id', 'asc'])->getData();
    
    
    $menuCategories = $modelCategory
    ->start()
    ->getCategoryRoot()
    ->setMoreWhere(['sort', '<>', 0])
    ->setSort(['sort', 'asc'])
    ->setLimit(7)
    ->getData();

    $brands = $modelBrand->start()->getData();
   
@endphp

<div class="container-fluid padding-unset-h" x-data="{ {{Request::path() == '/' ? 'open: true' : 'open: false'}}  }">
 
  <div class="bgcolor-main">
    <div class="container">
      <div class="row header-body flex flex-content-spacebetween">
        <div class="col-md-3 col-9">
          <div class="box-logo">
            <a class="flex flex-items-center" href="{{ sc_route('home') }}">
              <span style="background-image: url({{ sc_file(sc_store('logo')) }})"></span>
            </a>
          </div>
        </div>
        <div class="col-md-5 col-3 box-utilities">
          <div class="flex flex-content-spacearound">
            <div class="box-contact">
              <a href="tel:{{ sc_store('phone', ($storeId ?? null)) }}">
                <b>{{ sc_store('phone', ($storeId ?? null)) }}</b>
                <span>Tư vấn bán hàng</span>
              </a>
            </div>
            <div class="box-location">
              <a href="{{sc_route('contact')}}">
                <b>Liên hệ></b>
                <span>{!! sc_store('time_active', ($storeId ?? null))  !!}</span>
              </a>
            </div>
            <div class="box-cart">

              <div class="cart-badge badge-icons pull-right">
                <a href="{{ sc_route('cart') }}"><i class="fa fa-shopping-cart"></i><span>Giỏ hàng</span></a>
                <span class="badge badge-sea rounded-x">0</span>
                <div class="badge-open">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12 box-search">
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="menuhead-news flex flex-content-right">
                <ul class="login">
                  @guest

                  <li class="nav-item">
                    <a rel="nofollow" class="nav-link" href="{{ sc_route('login') }}">
                      Đăng nhập
                    </a>
                  </li>
                  <li class="nav-item">
                    <a rel="nofollow" class="nav-link" href="{{ sc_route('register') }}">
                      Đăng ký
                    </a>
                  </li>
                  @else
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ sc_route('customer.index') }}"><i class="fa fa-user"></i> {{ sc_language_render('front.my_profile') }}</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ sc_route('logout') }}" rel="nofollow" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ sc_language_render('front.logout') }}</a></li>
                  <form id="logout-form" action="{{ sc_route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  @endguest

                </ul>
                <ul class="list-unstyled">
                  <li class="v-menu-item">
                    <a data-id="481" href="/cms-category/tu-van-tieu-dung" title="Tư vấn">
                      <span>
                        Tư vấn </span>

                      <span class="menu-item-view menu-item-view-481" style="display:none;"></span>
                    </a>

                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-1 col-md-0"></div>
            <div class="col-11 col-md-12">

              <form class="form-inline"  action="{{ sc_route('search') }}"  method="GET">
                <div class="form-group search-input">
                  <input type="text" name="keyword" class="form-control" placeholder="Bạn tìm gì..." id="Key" value="">
                </div>
                <button type="submit" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bgheader-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-0">
          <div class="box-nav">
            <div class="main-nav navbar navbar-expand-lg navbar-default navbar-inverse">
              <button class="navbar-toggler navbar-toggler-always" type="button" x-on:click="open = ! open">
                <span class="navbar-toggler-icon"></span><b>Danh Mục<span> Sản
                    Phẩm</span></b><i></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarMain" x-show.important="open" style="display: none !important;">
                <ul class="navbar-nav">
                  @foreach ($rootCategories as $item)
                    <li class="nav-item dropdown">
                      <span class="nav-link dropdown-toggle" href="javascript:;">
                        <img loading="lazy" src="{{ sc_file($item->getThumb()) }}"
                          alt="Điều hòa nhiệt độ" />
                        <span class="nav-link-text">
                          <span>
                            <span style='color:#ff0000'><a href='{{$item->getUrl()}}'>{{$item->title}}</a></span> </span>
                        </span>
                      </span>
                      <ul class="dropdown-menu dropdown-menu-1">
                        @php
                          $parentCategories = $modelCategory->start()->setParent($item->id)->getData();
                        @endphp
                         @foreach ($parentCategories as $category)
                            <li class="v-menu-item nav-item-1 dropdown-submenu">
                              <a class="nav-link-1 dropdown-toggle" 
                                href="{{$category->getUrl()}}">
                                <span>
                                  {{ $category->title }} </span>
                                <i></i>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-2">
                                @php
                                    $childCategories =  $modelCategory->start()->setParent($category->id)->getData();
                                @endphp
                                @foreach ($childCategories as $child)
                                  <li class="v-menu-item">
                                    <a data-id="409" class="nav-link-2" href="{{$child->getUrl()}}">
                                      {{$child->title}}
                                    
                                    </a>
                                  </li>
                                @endforeach
                                
                              </ul>
                            </li>
                          @endforeach
                        
                      </ul>
                    </li>
                  @endforeach
                 
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-0">
          <div class="box-nav-promotion">
            <ul class="list-unstyled">
              @foreach ($menuCategories as $item)
                <li class="v-menu-item">
                  <a data-id="779" href="{{$item->getUrl()}}" title="Tivi">

                    <span>
                      {{$item->title}} </span>

                    <span class="menu-item-view menu-item-view-779" style="display:none;"></span>
                  </a>

                </li>
              @endforeach
            
              
            </ul>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>