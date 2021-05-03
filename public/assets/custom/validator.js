function Validator(options){
    let form=document.querySelector(options.form);
    if(form){
        options.rules.forEach(rule => {
            let inputElement= document.querySelector(rule.selector);
            let errorElement=inputElement.parentElement.querySelector('.invalid-feedback');

            if(inputElement){
                inputElement.onblur=()=>{
                    // thẻ lỗi .invalid-feedback
                    let msg_err=rule.test(inputElement.value);
                    if(msg_err){
                        inputElement.parentElement.classList.add('is-invalid');
                        inputElement.classList.add('is-invalid');
                        errorElement.innerText=msg_err;
                    }else{
                        inputElement.parentElement.classList.remove('is-invalid');
                        inputElement.classList.remove('is-invalid');
                        errorElement.innerText="";
                    }
                }
                inputElement.oninput=()=>{
                    inputElement.classList.remove('is-invalid');
                    inputElement.parentElement.classList.remove('is-invalid');
                    errorElement.innerText="";

                    inputElement.classList.add('is-valid');
                    inputElement.parentElement.classList.add('is-valid');

                }
            }
        });
    }
}
// Nguyên tắc 
// Có lỗi trả ra message lỗi
// Không lỗi không trả ra gì hết = undefined
Validator.isRequired=(selector)=>{
    return {
        selector:selector,
        test:(value)=>{
            return value.trim()?undefined:"Vui lòng nhập trường này!";
        }
    }
}

Validator.isPassword=(selector)=>{
    return {
        selector:selector,
        test:()=>{
            
        }
    }
}