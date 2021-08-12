<table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Email</th>
            <th scope="col">Hotline</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Facebook</th>
            <th scope="col">Logo</th>
            <th scope="col">Banner</th>

            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($configs) == 0)
            <tr>
                <td colspan="4">Không có dữ liệu</td>
            </tr>
        @else
            @foreach($configs as $key => $config)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $config->config_contact }}</td>
                    <td>{{ $config->config_phone }}</td>
                    <td>{{ $config->config_address }}</td>
                    <td>{{ $config->config_url_fb }}</td>
                    <td><img src="{{ asset('storage/images/' .  $config->config_logo ) }}" alt="" width="30px"></td>
                    <td><img src="{{ asset('storage/images/' .  $config->config_banner ) }}" alt="" width="100px"></td>

                    <td><a class="btn btn-warning" href="{{route('config.edit', $config->config_id)}}">Sửa</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    {{$configs->links()}}


