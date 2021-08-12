@extends('client.index')

@section('title', 'Chi tiết sản phẩm')
@section('content')

    <link href="{{ asset('client/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/styles/contact_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/styles/contact_responsive.css') }}">
    <!-- Contact Info -->

    <div class="contact_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="{{ asset('client/images/contact_1.png') }}" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Số điện thoại</div>
                                <div class="contact_info_text">0{{ $contact->config_phone }}</div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="{{ asset('client/images/contact_2.png') }}" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Email</div>
                                <div class="contact_info_text">{{ $contact->config_contact }}</div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="{{ asset('client/images/contact_3.png') }}" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Địa chỉ</div>
                                <div class="contact_info_text">{{ $contact->config_address }}</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form -->

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Liên lạc với chúng tôi</div>

                        <form action="{{ route('contact.store') }}" method="post" id="contact_form">
                            @csrf
                            <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                <input type="text" id="contact_form_name" name="mess_name" class="contact_form_name input_field" placeholder="Họ tên" required="required" data-error="Bạn cần nhập tên.">
                                <input type="text" id="contact_form_email" name="mess_email" class="contact_form_email input_field" placeholder="Email" required="required" data-error="Bạn cần nhập Email.">
                                <input type="text" id="contact_form_phone" name="mess_phone" class="contact_form_phone input_field" placeholder="Số điện thoại">
                            </div>
                            <div class="contact_form_text">
                                <textarea id="contact_form_message" class="text_field contact_form_message" name="mess_message" rows="4" placeholder="Lời nhắn" required="required" data-error="Vui lòng nhập lời nhắn."></textarea>
                            </div>
                            <div class="contact_form_button">
                                <button type="submit" class="button contact_submit_button">Gửi tin nhắn</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>

    <!-- Map -->
    <div class="contact_map">
        <div id="google_map" class="google_map">
            <div class="map_container">
{{--                <div id="map"></div>--}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.9911062570964!2d105.76537422918666!3d21.03410939912473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b96a98eadb%3A0x4fd8060e636faa5!2zUGjhu5EgTmd1eeG7hW4gQ8ahIFRo4bqhY2gsIE3hu7kgxJDDrG5oLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1628427552891!5m2!1svi!2s"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>
        </div>
    </div>



    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="{{ asset('client/js/contact_custom.js') }}"></script>
@endsection
