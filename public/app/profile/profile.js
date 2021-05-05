function Profile() {
	this.init = () => {
		let cityArr = [];
		let districtsArr = [];
		let streetsArr = [];
		let provinceObj = $("#province");
		let cityObj = $("#city");
		let districtsObj = $("#districts");
		let streetObj = $("#streets");

        // varriable out side
		let dataLocation=this.dataLocation;
		let url=this.url;

		provinceObj.val("");
		// var provinceSelect = '14';
		// var citySelect = '185';
		// var districtsSelect = '2597';
		// var streetsSelect = '20927';

		$(function () {
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
			// $('#streets').val(streetsSelect);

			provinceObj.val("14");
			$.when(provinceObj.trigger("change")).done(function () {
				cityObj.val("185");
				$.when(cityObj.trigger("change")).done(function () {
					districtsObj.val("2597");
					$.when(districtsObj.trigger("change")).done(function () {
						streetObj.val("20927");
					});
				});
			});
		});
        // Event
        $('#form-update-profile').off().on('submit',function(e){
            e.preventDefault();
            // var dataString = $(this).serialize();
            var formData = new FormData($(this)[0]);
            formData.set('info',$('textarea[name="info"]').val());
            $.ajax({
                url: url?.url_update,
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(res){
                    showNotify(res);
                }
            });
        })
		// cityObj.change();
		provinceObj.on("change", function () {
			// Delete city and province and street
			cityObj.val("");
			districtsObj.val("");
			streetObj.val("");
			//
			let provinceID = $(this).val();
			cityArr = dataLocation.find((x) => x?.id === provinceID)?.districts;
			let html = cityArr
				.map((city) => `<option value="${city?.id}">${city?.name}</option>`)
				.join("");
			html = '<option value="">--- Chọn Thành phố / Huyện ---</option>' + html;
			cityObj.html(html);
		});
		cityObj.on("change", function () {
			// Delete province and street
			districtsObj.val("");
			streetObj.val("");
			//
			districtsArr = cityArr.find((x) => x?.id === $(this).val())?.wards;
			let html = districtsArr
				.map((dis) => `<option value="${dis?.id}">${dis?.prefix} ${dis?.name}</option>`)
				.join("");
			html = '<option value="">--- Chọn Chọn phường / Xã ---</option>' + html;
			districtsObj.html(html);
		});
		districtsObj.on("change", function () {
			// Delete street and districts
			streetObj.val("");
			//
			streetsArr = cityArr.find((x) => x?.id === cityObj.val())?.streets;
			let html = streetsArr
				.map((str) => `<option value="${str?.id}">${str["prefix"]} ${str?.name}</option>`)
				.join("");
			html = '<option value="">--- Chọn đường ---</option>' + html;
			streetObj.html(html);
		});

	};
}
