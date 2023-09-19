@php
/*
$layout_page = content_detail
**Variables:**
- $entry_currently: colection
*/
// dd($entry_currently);
    $category = $modelCmsCategory->start()->getDetail($category_alias, 'alias');
    $categories = $modelCmsCategory->start()->getCategoryRoot()->getData();
    
    $childCategories = $modelCmsCategory->start()->setParent($category->parent == "0" ? $category->id : $category->parent)->getData();
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
<div class="body-content bg-page">
  <div class=container>
      <script type=application/ld+json>
        {
          "@context": "https://schema.org",
          "@type": "Article",
          "url": "{{$entry_currently->getUrl()}}",
          "headline": "{{$title}}",
          "alternativeHeadline": "{{$title}}",
          "image": "{{sc_file($entry_currently->getImage())}}",
          "keywords": "{{$entry_currently->description}}",
          "dateCreated": "{{$entry_currently->created_at}}",
          "dateModified": "{{$entry_currently->updated_at}}",
          "description": "{{$entry_currently->description}}"
        }
      </script>
      <div class=wrap-news>
          <div class=wrap-news-head>
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
                        <div class="nav-newscate-item @if($item->id == $category->id || $item->id == $category->parent) active @endif">
                            <a href="{{$item->getUrl()}}"><span>{{$item->title}}</span></a>
                        </div>
                      @endforeach
                  </div>
              </div>
          </div>
          <div>
              <div class=row>
                  <div class="col-12 col-md-3 col-lg-3">
                    <div class="nav-newscate-child">
                      <h2 class="title">{{$category->title}}</h2>


                      <ul class="navbar-nav">
                        @foreach ($childCategories as $item)
                          <li class="nav-item @if($item->id == $category->id) active @endif">
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
                      <div class="news-detail row">
                          <div class="col-12 col-md-12 col-lg-12">
                              <div id=news-content class=content-editor>
                                  <div class=news-item-highlight>
                                      <img src="{{$entry_currently->getImage()}}" alt="{{$entry_currently->title}}">
                                  </div>
                                  <div class=news-item-content-box>
                                      <h1 class="news-title text-color">{{$entry_currently->title}}</h1>
                                      <div class=news-item-description>
                                          <p>
                                              <span style=background-color:transparent;color:#000000>{{$entry_currently->description}}</span>
                                      </div>
                                  </div>
                                  <div class=news-item-content>
                                    {!! sc_html_render($entry_currently->content) !!}
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class=clearfix></div>
</div>
  {{-- Render include view --}}
  @include($sc_templatePath.'.common.include_view')
  {{--// Render include view --}}
@endsection


@push('scripts')
  {{-- Script here --}}
@endpush