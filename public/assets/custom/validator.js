var rulesList={};
function Validator(options){
    let form=document.querySelector(options.form);
    if(form){
        // Sự kiện on submit 
        form.onsubmit=(e)=>{
            e.preventDefault();
            options.rules.forEach(rule => {
                let inputElement= document.querySelector(rule.selector);
                let errorElement=inputElement.parentElement.querySelector('.invalid-feedback');
                validate(inputElement,rule,errorElement);
            })
        }
        options.rules.forEach(rule => {
            // Lưu lại rule cho mỗi input
            if(Array.isArray(rulesList[rule.selector]))
                rulesList[rule.selector].push(rule.test); 
            else
                rulesList[rule.selector]=[rule.test];
            let inputElement= document.querySelector(rule.selector);
            let errorElement=inputElement.parentElement.querySelector('.invalid-feedback');
            if(inputElement){
                inputElement.onblur=()=>{
                    // thẻ lỗi .invalid-feedback
                    validate(inputElement,rule,errorElement);
                }
                inputElement.oninput=()=>{
                    // Xoá css đỏ
                    inputElement.classList.remove('is-invalid');
                    inputElement.parentElement.classList.remove('is-invalid');
                    errorElement.innerText="";
                    // Thêm css xanh
                    inputElement.classList.add('is-valid');
                    inputElement.parentElement.classList.add('is-valid');

                }
            }
        });
    }
}
function validate(inputElement,rule,errorElement){
    var msg_err;
    let rules =rulesList[rule.selector];
    for (let i = 0; i < rules.length; i++) {
        msg_err=rules[i](inputElement.value);
        if(msg_err) break;
    }
    if(msg_err){
        // Thêm css đỏ
        inputElement.parentElement.classList.add('is-invalid');
        inputElement.classList.add('is-invalid');
        errorElement.innerText=msg_err;
    }else{
        // bỏ css đỏ 
        inputElement.parentElement.classList.remove('is-invalid');
        inputElement.classList.remove('is-invalid');
        errorElement.innerText="";
    }
    console.log(!msg_err);
}
// Nguyên tắc 
// Có lỗi trả ra message lỗi
// Không lỗi không trả ra gì hết = undefined
Validator.isRequired=(selector,msg)=>{
    return {
        selector:selector,
        test:(value)=>{
            return value.trim()?undefined:msg||"Vui lòng nhập trường này!";
        }
    }
}
Validator.isEmail=(selector)=>{
    return {
        selector:selector,
        test:(value)=>{
            let regex=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            return regex.test(value.trim())?undefined:"Email không đúng định dạng vui lòng kiểm tra lại!"
        }
    }
}

Validator.minLength=(selector,length,msg)=>{
    return {
        selector:selector,
        test:(value)=>{
           return value.length>=length?undefined:msg||`Trường này ít nhất phải có ${length} ký tự!`
        }
    }
}
Validator.maxLength=(selector,length,msg)=>{
    return {
        selector:selector,
        test:(value)=>{
            return value.length<=length?undefined:msg||`Trường này không được quá ${length} ký tự!`
        }
    }
}
Validator.isConfirm=(selector,fncGetVal,msg)=>{
    return {
        selector:selector,
        test:(value)=>{
            return value+""==fncGetVal()?undefined:msg||'Giá trị nhập vào không chính xác!'
        }
    }
}