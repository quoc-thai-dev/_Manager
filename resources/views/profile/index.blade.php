@extends('layouts.app')
@section('title',"Hồ sơ cá nhân")
@section('breadcum')
@include('layouts.breadcum',['title'=>"Hồ sơ cá nhân"])
@endsection

@section('body')
<style>
    .form-label {
        font-weight: bold;
    }
</style>
<div class="edit-profile">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Hồ sơ của tôi</h4>
                    <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"
                            data-bs-original-title="" title=""><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove" data-bs-original-title=""
                            title=""><i class="fe fe-x"></i></a></div>
                </div>
                <div class="card-body">
                    <form id="form-update-user">
                        <div class="row mb-2">
                            <div class="profile-title">
                                <div class="media">
                                    <img class="img-70 rounded-circle" alt=""
                                        src="{{asset('assets/images/avtar/avatar.jpg')}}">
                                    <div class="media-body">
                                        <h3 class="mb-1">{{Auth::user()->name}}</h3>
                                        <p>Lập trình viên</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label required">Tên đăng nhập</label>
                            <input class="form-control" placeholder="Tên đăng nhập" id="username" name="username"
                                disabled value="{{Auth::user()->username}}" data-bs-original-title="" title="">
                            <span class="invalid-feedback"></span>

                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Mật khẩu cũ</label>
                            <input class="form-control" type="password" id="_old_password" name="_old_password"
                                value="*****" data-bs-original-title="" title="">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Mật khẩu mới</label>
                            <input class="form-control" type="password" id="_new_password" name="_new_password" value=""
                                data-bs-original-title="" title="">
                            <span class="invalid-feedback"></span>

                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Nhập lại mật khẩu</label>
                            <input class="form-control" type="password" id="_renew_password" name="_renew_password"
                                value="" data-bs-original-title="" title="">
                            <span class="invalid-feedback"></span>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Trang Web</label>
                            <input class="form-control" placeholder="abc.xyz" id="website" name="website"
                                value="{{Auth::user()->website}}" data-bs-original-title="" title="">
                            <span class="invalid-feedback"></span>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mô Tả</label>
                            <textarea class="form-control" name="description" id="description"
                                value="{{Auth::user()->description}}" rows="5">Nhìn cc</textarea>
                            <span class="invalid-feedback"></span>

                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block" data-bs-original-title=""
                                title="">Lưu</button>
                            <label class="form-label pull-right text-danger"> (*) Thông tin bắt buộc</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <form class="card" id="form-update-profile">
                <div class="card-header">
                    <h4 class="card-title mb-0">Chỉnh sửa hồ sơ</h4>
                    <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"
                            data-bs-original-title="" title=""><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove" data-bs-original-title=""
                            title=""><i class="fe fe-x"></i></a></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Tên công ty</label>
                                <input class="form-control" type="text" name="company_name"
                                    value="{{Auth::user()->company_name}}" placeholder="Tên công ty"
                                    data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label required">Địa chỉ Email</label>
                                <input class="form-control" type="email" name="email" readonly
                                    value="{{Auth::user()->email}}" placeholder="Địa chỉ email"
                                    data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Họ tên</label>
                                <input class="form-control" type="text" placeholder="Họ tên" name="name"
                                    value="{{Auth::user()->name}}" data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label required">Số điện thoại</label>
                                <input class="form-control" type="text" placeholder="Số điện thoại" name="phone"
                                    value="{{Auth::user()->phone}}" data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Địa chỉ</label>
                                <input class="form-control" type="text" placeholder="Địa chỉ" name="address"
                                    value="{{Auth::user()->address}}" data-bs-original-title="" title="">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Tỉnh</label>
                                <select class="form-control btn-square" id="province">
                                    <option value="">--- Chọn Tỉnh ---</option>
                                    @foreach ($dataLocation as $lc)
                                    <option value="{{$lc["id"]}}">{{$lc["name"]}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Thành phố / Huyện</label>
                                <select class="form-control btn-square" id="city">
                                    <option value="">--- Chọn Thành phố / Huyện ---</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Phường / Xã</label>
                                <select class="form-control btn-square" id="districts">
                                    <option value="">--- Chọn Phường / Xã ---</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Đường</label>
                                <select class="form-control btn-square" id="streets">
                                    <option value="">--- Chọn Đường ---</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div>
                                <label class="form-label">Thông tin bản thân</label>
                                <textarea class="form-control" rows="5" id="info" name="info"
                                    placeholder="Thông tin bản thân">{{Auth::user()->info}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit" data-bs-original-title="Cập nhật hồ sơ" title="">Cập
                        nhật hồ
                        sơ</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('app/profile/profile.js')}}"></script>
<script>
    var dataLocation={!! json_encode($dataLocation) !!};
    var profile = new Profile();
    profile.dataLocation=dataLocation;
    profile.url={
        url_update:"{{route('update_profile')}}"
    }
    Validator({
        form:'#form-update-user',
        rules:[
            Validator.isRequired('#_old_password','Mật khẩu không được bỏ trống!'),
            Validator.minLength('#_old_password',6,'Mật khẩu không được dưới 6 ký tự!'),
            Validator.minLength('#_new_password',6,'Mật khẩu không được dưới 6 ký tự!'),
            Validator.minLength('#_renew_password',6,'Mật khẩu không được dưới 6 ký tự!'),
            Validator.isWebsite('#website','Địa chỉ website không hợp lệ!')
        ],
        onSubmit:(data)=>{
            // Call Api here
            console.log(data);

        }
    })
    profile.init();
</script>
@endsection
