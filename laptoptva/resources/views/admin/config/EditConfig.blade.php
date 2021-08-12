@extends('admin.index')
@section('title', 'Cập nhật config web')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Cập nhật config web</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('config.update', $config->config_id)}}">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="config_contact" value="{{ $config->config_contact }}" required>
                    </div>
                    <div class="form-group">
                        <label>Hotline</label>
                        <input type="text" class="form-control" name="config_phone" value="{{ $config->config_phone }}" required>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="config_address" value="{{ $config->config_address }}" required>
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" class="form-control" name="config_url_fb" value="{{ $config->config_url_fb }}" required>
                    </div>

                    <div class="form-group">
                        <label for="inputFileName">Logo</label>
                        <input type="text" hidden name="config_old_logo"  value = {{$config->config_logo}}>
                        <input type="file" name="inputFileLogo" id = "upload" >
                        <br>
                        <div>
                            <img src="{{ asset('storage/images/' .  $config->config_logo ) }}" width = "200px" id = "img_upload">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputFileName">Banner</label>
                        <input type="text" hidden name="config_old_banner"  value = {{$config->config_banner}}>
                        <input type="file" name="inputFileBanner" id = "upload" >
                        <br>
                        <div>
                            <img src="{{ asset('storage/images/' .  $config->config_banner ) }}" width = "200px" id = "img_upload">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
