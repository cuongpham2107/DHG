@if (Request::path() == '/' || strpos(Request::path(), 'shop') !== false || strpos(Request::path(), 'product') !== false|| strpos(Request::path(), 'category') !== false || strpos(Request::path(), 'brand') !== false)
    @if (!empty($details) && count($details))
        @foreach ($details as $groupId => $detailsGroup)
            <ul class="list-inline product-attributes">
                @foreach ($detailsGroup as $k => $detail)
                    @php
                        $valueOption = $detail->name . '__' . $detail->add_price;
                    @endphp
                    {{-- <label class="radio-inline"><input {{ (($k == 0) ? "checked" : "") }} type="radio" name="form_attr[{{ $groupId }}]" value="{{ $valueOption }}"> --}}
                    <li>{{ $detail->name }}</li>
                @endforeach

            </ul>
        @endforeach
    @endif
@else
    @if (!empty($details) && count($details))
        @if (isset($details[1]))
            @php
                $defaultColor = $details[1][0]->name.'__'.$details[1][0]->add_price;
            @endphp
           
            <div x-data="{
                color: {
                    add_price: '{{ $details[1][0]->add_price }}',
                    activeChooseAtr: '{{ $defaultColor }}',
                   
                },
            }">
                <input type="hidden" name="form_attr[1]" x-model="color.activeChooseAtr">
                @foreach ($details[1] as $k => $detail)
                    @php
                        $valueOptionColor = $detail->name.'__'.$detail->add_price;
                    @endphp

                    <a href="#" class="option-item"
                        :class="{ 'active': color.activeChooseAtr === '{{ $valueOptionColor }}' }"
                        x-on:click.prevent="setActiveOptionColor('{{ $valueOptionColor }}', '{{ $detail->add_price }}')">{{ $detail->name }}</a>
                @endforeach

            </div>
        @endif

        @if (isset($details[2]))
            @php
                $defaultSize = $details[2][0]->name.'__'.$details[2][0]->add_price;
            @endphp

            <div x-data="{
                size: {
                    add_price: '{{ $details[2][0]->add_price }}',
                    activeChooseAtr: '{{ $defaultSize }}',
                    
                },
            }">
                <input type="hidden" name="form_attr[2]" x-model="size.activeChooseAtr">
                @foreach ($details[2] as $k => $detail)
                    @php
                        $valueOptionSize = $detail->name.'__'.$detail->add_price;
                    @endphp

                    <a href="#" class="option-item"
                        :class="{ 'active': size.activeChooseAtr === '{{ $valueOptionSize }}' }"
                        x-on:click.prevent="setActiveOptionSize('{{ $valueOptionSize }}', '{{ $detail->add_price }}')">{{ $detail->name }}</a>
                @endforeach

            </div>
        @endif




    @endif
@endif
