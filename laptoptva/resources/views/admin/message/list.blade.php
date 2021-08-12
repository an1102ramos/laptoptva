<table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên người gửi</th>
            <th scope="col">Email</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Lời nhắn</th>
            <th scope="col">Ngày gửi</th>

            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($messages) == 0)
            <tr>
                <td colspan="4">Không có dữ liệu</td>
            </tr>
        @else
            @foreach($messages as $key => $message)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $message->mess_name }}</td>
                    <td>{{ $message->mess_email }}</td>
                    <td>{{ $message->mess_phone }}</td>
                    <td>
{{--                        {{ substr($message->mess_message,0, 20) }}--}}
                        @if(strlen($message->mess_message) >50)
                            {{ substr($message->mess_message, 0, 50) }}...
                        @else
                            {{ $message->mess_message }}
                        @endif
                    </td>
                    <td>{{ $message->created_at }}</td>
                    <td><a class="btn btn-warning" href="{{route('contact.show', $message->mess_id)}}">Xem</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    {{$messages->links()}}


