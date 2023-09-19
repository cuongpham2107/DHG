@php
    /*
$layout_page = shop_about
    **Variables:**
- $page: no paginate
*/

// $category = $modelCmsCategory->start()->getDetail($category_alias, 'alias');
//     $categories = $modelCmsCategory->start()->getCategoryRoot()->getData();
@endphp

@extends($sc_templatePath . '.layout')

@section('block_main')
    
    <div class="body-content bg-page">
        <div class="container">
           <h1>Giới thiệu về chúng tôi</h1>
            <div class="wrap-news">
                <div>
                    <div class="row">
                        {!! sc_html_render($page->content ?? '') !!}
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
