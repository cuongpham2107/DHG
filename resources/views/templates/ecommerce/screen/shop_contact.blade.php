@php
/*
$layout_page = shop_contact
*/
@endphp

@extends($sc_templatePath.'.layout')

@push('styles')
    <style>
        .custom-logo {
            filter: invert(16%) sepia(50%) saturate(5360%) hue-rotate(343deg) brightness(93%) contrast(93%);
        }

        .section .container {
            margin: 4rem auto;
        }
        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            max-width: initial;
        }

        form .col-form-label {
            margin-right: 1rem;
        }

        h6 {
            display: none;
        }

        .row {
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
            padding-right: 15px;
            padding-left: 15px;
        }

        .label {
            font-weight: bold;
            padding-right: 3rem;
        }
    </style>
@endpush

@section('block_main')
<section class="section section-sm section-first bg-default text-md-left">
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 contact_content">
            <img class="custom-logo" src="{{ sc_file(sc_store('logo')) }}">
            <address>
                {{-- <p>{{ sc_store('title') }}</p> --}}
                <table style="margin-top: 2rem">
                    <tr>
                        <td><span class="label">Địa chỉ: </span></td>
                        <td>{{ sc_store('address') }}</td>
                    </tr>
                    <tr>
                        <td><span class="label">Số điện thoại: </span></td>
                        <td>{{ sc_store('long_phone') }}</td>
                    </tr>
                    <tr>
                        <td><span class="label">Email: </span></td>
                        <td>{{ sc_store('email') }}</td>
                    </tr>
                </table>
            </address>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <h5 style="text-align: center; font-size: 22px; font-weight: bold; margin-bottom: 2rem">Liên hệ</h5>
            <form method="post" action="{{ sc_route('contact.post') }}" class="contact-form" id="sc_form-process">
                {{ csrf_field() }}
                <div id="contactFormWrapper">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>{{ sc_language_render('contact.name') }}:</label>
                            <input type="text" class="form-control {{ ($errors->has('name'))?"input-error":"" }}"
                                name="name" placeholder="{{ sc_language_render('contact.name') }}" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            <span class="help-block">
                                {{ $errors->first('name') }}
                            </span>
                            @endif
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>{{ sc_language_render('contact.email') }}:</label>
                            <input type="email" class="form-control {{ ($errors->has('email'))?"input-error":"" }}"
                                name="email" placeholder="{{ sc_language_render('contact.email') }}" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                {{ $errors->first('email') }}
                            </span>
                            @endif
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label>{{ sc_language_render('contact.phone') }}:</label>
                            <input type="telephone" class="form-control {{ ($errors->has('phone'))?"input-error":"" }}"
                                name="phone" placeholder="{{ sc_language_render('contact.phone') }}" value="{{ old('phone') }}">
                            @if ($errors->has('phone'))
                            <span class="help-block">
                                {{ $errors->first('phone') }}
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="control-label">{{ sc_language_render('contact.subject') }}:</label>
                            <input type="text" class="form-control {{ ($errors->has('title'))?"input-error":"" }}"
                                name="title" placeholder="{{ sc_language_render('contact.subject') }}" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                            <span class="help-block">
                                {{ $errors->first('title') }}
                            </span>
                            @endif
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                            <label class="control-label">{{ sc_language_render('contact.content') }}:</label>
                            <textarea class="form-control {{ ($errors->has('content'))?"input-error":"" }}" rows="5"
                                cols="75" name="content" placeholder="{{ sc_language_render('contact.content') }}">{{ old('content') }}</textarea>
                            @if ($errors->has('content'))
                            <span class="help-block">
                                {{ $errors->first('content') }}
                            </span>
                            @endif

                        </div>
                    </div>

                    {!! $viewCaptcha?? '' !!}

                    {{-- Button submit --}}
                    <div class="btn-toolbar form-group">
                        @php
                        $dataButton = [
                                'class' => '', 
                                'id' =>  'sc_button-form-process',
                                'type_w' => '',
                                'type_t' => 'buy2',
                                'type_a' => '',
                                'type' => 'submit',
                                'name' => ''.sc_language_render('action.submit'),
                                'html' => ''
                            ];
                        @endphp
                        @include($sc_templatePath.'.common.button.button', $dataButton)

                    </div>
                    {{--// Button submit --}}
                </div>
            </form>
        </div>
    </div>
</div>
</section>

@endsection


@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush