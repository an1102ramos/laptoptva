<!-- Top Bar -->

<div class="top_bar">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-row">
                <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('client/images/phone.png') }}" alt=""></div>0{{ $contact->config_phone }}</div>
                <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('client/images/mail.png') }}" alt=""></div><a href="mailto:{{ $contact->config_contact }}">{{ $contact->config_contact }}</a></div>
                <div class="top_bar_content ml-auto">
                    <div class="top_bar_menu">
                        <ul class="standard_dropdown top_bar_dropdown">
                            <li>
                                <a href="#">Tiếng Việt<i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">Tiếng Anh</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
