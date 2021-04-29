@extends('layouts.app')
@section('title',"Hồ sơ cá nhân")
@section('breadcum')
    @include('layouts.breadcum',['title'=>"Hồ sơ cá nhân"])
@endsection

@section('body')
<style>
    .form-label{
        font-weight: bold;
    }
</style>
<div class="edit-profile">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Hồ sơ của tôi</h4>
                    <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse" data-bs-original-title="" title=""><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove" data-bs-original-title="" title=""><i class="fe fe-x"></i></a></div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-2">
                            <div class="profile-title">
                                <div class="media">
                                    <img class="img-70 rounded-circle" alt="" src="{{asset('assets/images/avtar/avatar.jpg')}}">
                                    <div class="media-body">
                                        <h3 class="mb-1">{{Auth::user()->name}}</h3>
                                        <p>Lập trình viên</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" placeholder="your-email@domain.com" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mật khẩu</label>
                            <input class="form-control" type="password" value="password" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nhập lại mật khẩu</label>
                            <input class="form-control" type="password" value="password" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Trang Web</label>
                            <input class="form-control" placeholder="http://Uplor .com" data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mô tả</label>
                            <textarea class="form-control" rows="5">Nhìn cc</textarea>
                        </div>
                        <div class="form-footer">
                            <button class="btn btn-primary btn-block" data-bs-original-title="" title="">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <form class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Chỉnh sửa hồ sơ</h4>
                    <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse" data-bs-original-title="" title=""><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove" data-bs-original-title="" title=""><i class="fe fe-x"></i></a></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label class="form-label">Tên công ty</label>
                                <input class="form-control" type="text" placeholder="Tên công ty" data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Tên tài khoản</label>
                                <input class="form-control" type="text" placeholder="Tên tài khoản" data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Địa chỉ Email</label>
                                <input class="form-control" type="email" placeholder="Địa chỉ email" data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Tên</label>
                                <input class="form-control" type="text" placeholder="Tên" data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Họ</label>
                                <input class="form-control" type="text" placeholder="Họ" data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Địa chỉ</label>
                                <input class="form-control" type="text" placeholder="Địa chỉ" data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Tỉnh</label>
                                <select class="form-control btn-square">
                                    <option value="0">--Chọn--</option>
                                    <option value="1">Germany</option>
                                    <option value="2">Canada</option>
                                    <option value="3">Usa</option>
                                    <option value="4">Aus</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Thành phố</label>
                                <select class="form-control btn-square">
                                    <option value="0">--Chọn--</option>
                                    <option value="1">Germany</option>
                                    <option value="2">Canada</option>
                                    <option value="3">Usa</option>
                                    <option value="4">Aus</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Thành phố</label>
                                <select class="form-control btn-square">
                                    <option value="0">--Chọn--</option>
                                    <option value="1">Germany</option>
                                    <option value="2">Canada</option>
                                    <option value="3">Usa</option>
                                    <option value="4">Aus</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                <label class="form-label">Thông tin bản thân</label>
                                <textarea class="form-control" rows="5" placeholder="Thích chơi game"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Cập nhật hồ sơ</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
