@php
    $type_w = $type_w ?? ''; //weight
    $type_t = $type_t ?? ''; //type
    $type_a = $type_a ?? ''; //arrow
    $class ?? '';
@endphp

@if ($type_w == 'auto')
    @php
        $class = $class.' ';
    @endphp
@endif

@if ($type_t == 'cart')
    @php
        $class = $class.' btn-zakaria add-to-cart-list';
    @endphp
@elseif ($type_t == 'buy')
    @php
    $class = $class.' btn-zakaria';
    @endphp
@elseif ($type_t == 'buy2')
    @php
    $class = $class.' btn-primary';
    @endphp
@endif

@if ($type_a == 'back')
    @php
        $class = $class.' ';
    @endphp
@elseif ($type_a == 'next')
    @php
    $class = $class.' ';
    @endphp
@endif

@php
    $class = " btn btn-secondary ".$class;
@endphp

<a {!! $html ?? '' !!} style="{!! $css ?? '' !!}" class="{!! $class ?? '' !!}" {!! !empty($href) ? 'href= "'.$href.'"' : '' !!} {!! !empty($id) ? 'id= "'.$id.'"' : '' !!}>{!! $name ?? 'Button Link' !!}</a>