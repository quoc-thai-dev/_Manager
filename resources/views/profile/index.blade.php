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
                    <form>
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
                            <label class="form-label">Email</label>
                            <input class="form-control" placeholder="your-email@domain.com" data-bs-original-title=""
                                title="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mật khẩu</label>
                            <input class="form-control" type="password" value="password" data-bs-original-title=""
                                title="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nhập lại mật khẩu</label>
                            <input class="form-control" type="password" value="password" data-bs-original-title=""
                                title="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Trang Web</label>
                            <input class="form-control" placeholder="http://Uplor .com" data-bs-original-title=""
                                title="">
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
                    <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"
                            data-bs-original-title="" title=""><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove" data-bs-original-title=""
                            title=""><i class="fe fe-x"></i></a></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label class="form-label">Tên công ty</label>
                                <input class="form-control" type="text" placeholder="Tên công ty"
                                    data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Tên tài khoản</label>
                                <input class="form-control" type="text" placeholder="Tên tài khoản"
                                    data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Địa chỉ Email</label>
                                <input class="form-control" type="email" placeholder="Địa chỉ email"
                                    data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Tên</label>
                                <input class="form-control" type="text" placeholder="Tên" data-bs-original-title=""
                                    title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Họ</label>
                                <input class="form-control" type="text" placeholder="Họ" data-bs-original-title=""
                                    title="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Địa chỉ</label>
                                <input class="form-control" type="text" placeholder="Địa chỉ" data-bs-original-title=""
                                    title="">
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
                                    {{-- <option value="0">--Chọn--</option>
                                    <option value="1">Germany</option>
                                    <option value="2">Canada</option>
                                    <option value="3">Usa</option>
                                    <option value="4">Aus</option> --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Thành phố / Huyện</label>
                                <select class="form-control btn-square" id="city">

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Phường / Xã</label>
                                <select class="form-control btn-square" id="districts">

                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Đường</label>
                                <select class="form-control btn-square" id="streets">
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div>
                                <label class="form-label">Thông tin bản thân</label>
                                <textarea class="form-control" rows="5" placeholder="Thông tin bản thân"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Cập nhật hồ
                        sơ</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    var dataLocation={!! json_encode($dataLocation) !!};
    // console.log(dataLocation);
    var cityArr=[];
    var districtsArr=[];
    var streetsArr=[];
    var provinceObj=$('#province');
    var cityObj=$('#city');
    var districtsObj=$('#districts');
    var streetObj=$('#streets');

    var provinceSelect = '14';
    var citySelect = '185';
    var districtsSelect = '2597';
    var streetsSelect = '20927';

    $(document).ready(function(){
        // provinceObj.val(provinceSelect);
        // var cityObj = '';
        // var thanhPho = Array();
        // $.each(dataLocation,function(index,item){
        //     if(item.id==$(provinceObj).val()){
        //         thanhPho.push(item.districts);
        //     }
        // });
        // var cityHTML = '';
        // var provinceObjArray = Array();
        // var duongArray = Array();
        // $.each(thanhPho[0],function(index,item){
        //     cityHTML+=`<option  value="`+item.id+`">`+item.name+`</option>`;
        //     if(item.id==citySelect){
        //         provinceObjArray.push(item.wards);
        //         duongArray.push(item.streets);
        //     }
        // });
        // var wardsHTML = '';
        // $.each(provinceObjArray[0],function(index,item){
        //     wardsHTML+=`<option value="`+item.id+`">`+item.name+`</option>`;
        // });
        // var duongHTML = '';
        // $.each(duongArray[0],function(index,item){
        //     duongHTML+=`<option value="`+item.id+`">`+item.name+`</option>`;
        // });
        // $('#city').html(cityHTML);
        // $('#city').val(citySelect);
        // $('#districts').html(wardsHTML);
        // $('#districts').val(districtsSelect);
        // $('#streets').html(duongHTML);
        // $('#streets').val(streetsSelect);v
                provinceObj.val('7');
        $.when(provinceObj.trigger('change')).done(function(){
            cityObj.val('101');
            $.when(cityObj.trigger('change')).done(function(){
                districtsObj.val('1506');
                $.when(districtsObj.trigger('change')).done(function(){
                    streetObj.val('17110');
            });
            });
        });
    })
    // cityObj.change();
    provinceObj.on('change',function(){
        // Delete city and province and street
        cityObj.val("");
        districtsObj.val("");
        streetObj.val('');

        //
        let provinceID=$(this).val();
        cityArr=dataLocation.find(x => x.id === provinceID)?.districts;
        let html=cityArr.map(city=>`<option value="${city["id"]}">${city["name"]}</option>`).join('');
        html='<option value="">--- Chọn Thành phố / Huyện ---</option>'+html;
        cityObj.html(html);
    })
    cityObj.on('change',function(){
        // Delete province and street
        districtsObj.val('');
        streetObj.val('');

        districtsArr=cityArr.find(x => x.id === $(this).val())?.wards;
        let html =districtsArr.map(dis=>`<option value="${dis["id"]}">${dis["prefix"]} ${dis["name"]}</option>`).join('');
        html='<option value="">--- Chọn Chọn phường / Xã ---</option>'+html;
        districtsObj.html(html);
    })
    districtsObj.on('change',function(){
        // Delete street and districts
        streetObj.val('');
        streetsArr=cityArr.find(x => x.id === cityObj.val())?.streets;
        let html =streetsArr.map(str=>`<option value="${str["id"]}">${str["prefix"]} ${str["name"]}</option>`).join('');
        html='<option value="">--- Chọn đường ---</option>'+html;
        streetObj.html(html);
    })
</script>
@endsection
