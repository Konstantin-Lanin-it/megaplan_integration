@extends("layout") 
@section("title") Запрос @endsection

@section("content")
<style>#mpc4ca4238a0b923820dcc509a6f75849b {
    background-color: #FFFFFF;
    width: 100%;
    display: flex;
    justify-content: center;
    font-family: sans-serif;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form{
            width:400px;
    
    padding-left: 24px;
    padding-right: 24px;
    padding-bottom: 16px;
    padding-top: 16px;
}

#mpc4ca4238a0b923820dcc509a6f75849b * {
    box-sizing: border-box;
    font-size: 14px;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item {
    width: 100%;
    padding: 0;
    margin-bottom: 16px;
    min-height: 42px;
}



#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content {
    color: #484848;
    line-height: 1.4;
}}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content ul,
#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content ol {
    padding-left: 32px;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content ul,
#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content ol,
#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content li,
#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content blockquote,
#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content pre {
    margin: 8px 0 0 0;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content ul:first-child,
#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content ol:first-child,
#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content li:first-child,
#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content blockquote:first-child,
#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content pre:first-child {
    margin-top: 0;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content a {
    color: #0D6EFD;
    text-decoration: none;
    font-weight: normal
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content a:hover {
    text-decoration: underline;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content blockquote {
    color: #484848;
    line-height: 1.4;
    font-size: 12px;
    padding: 0 0 0 4px;
    border-left: 2px solid #0D6EFD;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content code {
    background-color: #F7F7F7;
    font-family: monospace;
    font-size: 12px;
    border-radius: 4px;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content p {
    color: #484848;
    margin: 8px 0 0 0;
    line-height: 1.4em;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content p:first-child {
    margin-top: 0;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content p:empty {
    min-height: 1.4em;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content blockquote + p,
#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content ul + p,
#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content ol + p,
#mpc4ca4238a0b923820dcc509a6f75849b .form__item_styled-content pre + p {
    margin-top: 8px;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item_inline {
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item_inline .form__label {
    margin: 0 16px 0 0;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item:last-child {
    margin-bottom: 0;
}

/* кнопка */
#mpc4ca4238a0b923820dcc509a6f75849b .form__button {
    display: block;
    cursor: pointer;
    border: none;
    text-align: center;
    font-weight: 500;
    color: #FFFFFF;
    padding: 11px 16px;
    background: #0D6EFD;
    border-radius: 4px;
    filter: drop-shadow(0px 10px 15px #0D6EFD55) drop-shadow(0px 5px 5px #0D6EFD33) drop-shadow(0px 2px 2px #0D6EFD11);
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__button.form__button_disabled {
    background: #aeaeae;
    filter: drop-shadow(0px 10px 15px rgba(110, 110, 110, 0.3)) drop-shadow(0px 5px 5px rgba(110, 110, 110, 0.2)) drop-shadow(0px 2px 2px rgba(110, 110, 110, 0.2));
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__button_wrap {
    display: flex;
    justify-content: center;
}

/* инпут */
#mpc4ca4238a0b923820dcc509a6f75849b .form__input {
    outline: none;
    width: 100%;
    color: #484848;
    padding: 8px;
    background: #F7F7F7;
    border: 1px solid #D4D4D4;
    border-radius: 4px;
    box-sizing: border-box;
}

/* выпадающий список и все для него */
#mpc4ca4238a0b923820dcc509a6f75849b .form__dropdown {
    position: relative;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__dropdown__header {
    cursor: pointer;
    display: block;
    position: relative;
    width: 100%;
    color: #484848;
    padding: 8px;
    background: #F7F7F7;
    border: 1px solid #D4D4D4;
    border-radius: 4px;
    height: 34px;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__dropdown__header::after {
    display: block;
    content: '';
    border: 5px solid transparent;
    border-top: 5px solid #939393;
    position: absolute;
    top: 14px;
    right: 14px;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__dropdown__header.active::after{
    display: none;
}

#mpc4ca4238a0b923820dcc509a6f75849b .close__icon{
    display: none;
    cursor: pointer;
    position: absolute;
    top: 5px;
    right: 5px;
    width: 24px;
    height: 24px;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__dropdown__header.active + .close__icon{
    display: block;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__dropdown__checkbox_hidden:checked ~ .form__dropdown__header::after {
    transform: rotate(180deg) translateY(5px);
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__dropdown__checkbox_hidden {
    position: absolute;
    visibility: hidden;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__dropdown__content {
    display: none;
    position: absolute;
    width: 100%;
    z-index: 2;
    border: 1px solid #D4D4D4;
    border-radius: 4px;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__dropdown__checkbox_hidden:checked ~ .form__dropdown__content {
    display: block;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__dropdown__option {
    width: 100%;
    color: #484848;
    padding: 8px;
    background: #F7F7F7;
    cursor: pointer;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__dropdown__option:first-child {
    border-radius: 4px 4px 0 0;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__dropdown__option:last-child {
    border-radius: 0 0 4px 4px;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__dropdown__option:hover {
    background: #0D6EFD;
    color: #FFFFFF;
}

/* Чекбокс и все для него */
#mpc4ca4238a0b923820dcc509a6f75849b .form__checkbox_hidden {
    position: absolute;
    visibility: hidden;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__checkbox {
    width: 24px;
    height: 24px;
    display: block;
    position: relative;
    cursor: pointer;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__checkbox__icon {
    display: block;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__checkbox_hidden:checked ~ .form__checkbox .form__checkbox__icon {
    display: none;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__checkbox__icon_checked {
    display: none;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__checkbox_hidden:checked ~ .form__checkbox .form__checkbox__icon_checked {
    display: block;
}

/* лейбл */
#mpc4ca4238a0b923820dcc509a6f75849b .form__label {
    margin: 0;
    margin-bottom: 4px;
    color:#484848;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__label_required::after {
    position: relative;
    content: ' *';
    color: red;
}

/* ошибка */
#mpc4ca4238a0b923820dcc509a6f75849b .form__error {
    color: red;
    display: none;
    text-align: center;
}

/* успешный текст */
#mpc4ca4238a0b923820dcc509a6f75849b .success {
    padding: 20px 24px;
    text-align: center;
    font-size: 32px;
    color:#484848;
    display: none;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item.error input {
    border-color: red;
}

#mpc4ca4238a0b923820dcc509a6f75849b .form__item .form__error {
    font-size: 12px;
    display: none;
    color: red;
    text-align: left;
    margin: 2px 0 0;
}
</style><section id="mpc4ca4238a0b923820dcc509a6f75849b">
    <div class="form">
                                                                                    <div class="form__item item__firstName">
    <p class="form__label form__label_required">Имя</p>
    <input type="text"
           class="form__input"
           placeholder="Имя">
    <p class="form__error"></p>
</div>
                                                                                                                                                                                                                <div class="form__item item__lastName">
    <p class="form__label">Фамилия</p>
    <input type="text"
           class="form__input"
           placeholder="Фамилия">
    <p class="form__error"></p>
</div>
                                                                                                                                                                                                                <div class="form__item item__middleName">
    <p class="form__label">Отчество</p>
    <input type="text"
           class="form__input"
           placeholder="Отчество">
    <p class="form__error"></p>
</div>
                                                                                                                                                                                                                                                <div class="form__item item__phone">
    <p class="form__label">Телефон</p>
    <input type="tel"
           class="form__input"
           placeholder="Телефон">
    <p class="form__error"></p>
</div>
                                                                                                                                                                                                <div class="form__item item__email">
    <p class="form__label">Email</p>
    <input type="email"
           class="form__input"
           placeholder="Email">
    <p class="form__error"></p>
</div>
                                                                                                                                                                                <div class="form__item form__item_styled-content">
    Текст
</div>
                                                                                                                                                                                                                                                                                                                                <div class="form__item">
    <div class="form__button_wrap">
        <button class="form__button">Отправить</button>
    </div>
</div>
                                            <div class="form__item form__error"></div>
        <div class="recapthca"></div>
    </div>
    <div class="success">
        <p></p>
        <div class="form__item">
            <div class="form__button_wrap">
                <button class="form__button form__restart">OK</button>
            </div>
        </div>
    </div>
</section>
<script>
    (function () {
        let isFormLocked = false;

        let reCaptcha
        let isCaptchaReady

        const formType = 'contractor'
        const contractorType = 'human'
        const formId = 'mpc4ca4238a0b923820dcc509a6f75849b'

        const formRootElement = document.querySelector('#' + formId)
        const submitButton = formRootElement.querySelector('.form .form__button')
        const restartButton = formRootElement.querySelector('.form__restart')
        const phoneInputs = formRootElement.querySelectorAll('.form__item [type="tel"]')
        const successText = formRootElement.querySelector('.success')
        const formElement = formRootElement.querySelector('.form')
        const formError = formRootElement.querySelector('.form .form__item.form__error')

        const useCaptcha =  true 
        const formData = {
                                    'firstName': {
                name: 'firstName',
                value: null,
                validators: [
                                            requiredValidator,                                                                                    ],
                type: 'input',
                isLogicField:  false ,
                logicHandler: function() {},
            },
                                                'lastName': {
                name: 'lastName',
                value: null,
                validators: [
                                                                                                                                ],
                type: 'input',
                isLogicField:  false ,
                logicHandler: function() {},
            },
                                                'middleName': {
                name: 'middleName',
                value: null,
                validators: [
                                                                                                                                ],
                type: 'input',
                isLogicField:  false ,
                logicHandler: function() {},
            },
                                                'phone': {
                name: 'phone',
                value: null,
                validators: [
                                                                                            phoneValidator,                                    ],
                type: 'phone',
                isLogicField:  false ,
                logicHandler: function() {},
            },
                                                'email': {
                name: 'email',
                value: null,
                validators: [
                                                                    emailValidator,                                                            ],
                type: 'email',
                isLogicField:  false ,
                logicHandler: function() {},
            },
                                                                                }

        initForm()

        function loadCaptcha(callback) {
            if (!useCaptcha) {
                return
            }

            if (isCaptchaReady) {
                callback()
                return
            }

            if (isCaptchaReady === false) {
                return
            }

            isCaptchaReady = false
            const node = document.createElement('SCRIPT');
            node.setAttribute("type", "text/javascript");
            node.setAttribute("async", "");
            node.setAttribute("src", 'https://www.google.com/recaptcha/api.js');

            node.onload = () => {
                return window.grecaptcha.ready(function () {
                    isCaptchaReady = true
                    callback()
                });
            };

            (document.getElementsByTagName('head')[0] || document.documentElement).appendChild(node);
        }

        function ReCaptcha() {
            let key, shouldUse, token, readyCallback, widgetId, renderTarget;

            return {
                init(options) {
                    if (typeof options.key !== "undefined") {
                        key = options.key
                    }

                    if (typeof options.shouldUse !== "undefined") {
                        shouldUse = options.shouldUse
                    }
                },
                canUse() {
                    return shouldUse || !!key
                },
                isVerified() {
                    return !this.canUse() || !!token
                },
                getToken() {
                    const result = token
                    token = ""
                    window.grecaptcha.reset(widgetId)

                    return result
                },
                verify(callback) {
                    if (!window.grecaptcha) {
                        return;
                    }

                    if (callback) {
                        readyCallback = callback
                    }
                    token = ""
                    window.grecaptcha.execute(widgetId)
                },
                render(target) {
                    if (!window.grecaptcha || !shouldUse) {
                        return
                    }

                    renderTarget = target

                    widgetId = window.grecaptcha.render(
                        target,
                        {
                            sitekey: key,
                            badge: 'inline',
                            size: 'invisible',
                            callback: (_response) => {
                                token = _response

                                if (readyCallback) {
                                    readyCallback()
                                    readyCallback = null
                                }
                            },
                            'error-callback': function errorCallback() {
                                token = ""
                                unLockButton()
                            },
                            'expired-callback': function expiredCallback() {
                                token = ""
                                unLockButton()
                            }
                        }
                    )
                }
            }
        }

        function initForm() {
            phoneInputs.forEach(element => element.addEventListener('input', phoneInputHandler, false))
            restartButton.addEventListener('click', clearForm)
            submitButton.onclick = submitHandler
            initFields();

            reCaptcha = new ReCaptcha()
            reCaptcha.init({key: "6LfxN4EjAAAAAEby56ibrpp24vfjdPOYloEmBv9o", shouldUse: useCaptcha})
            loadCaptcha(() => reCaptcha.render(formRootElement.querySelector(".recapthca")))
        }

        function initFields() {
            Object.values(formData).map(item => {
                if (item.isLogicField) {
                    item.value = item.logicHandler();
                    return;
                }

                switch (item.type) {
                    case 'email':
                    case 'phone':
                        const contactElement = formRootElement.querySelector('.form__item.item__' + item.name.replace('.','_') + ' .form__input')
                        contactElement.oninput = function () {
                            setField(item.name,
                                {
                                    contentType: 'ContactInfo',
                                    type: item.type,
                                    value: contactElement.value.trim()
                                }
                            )
                        }
                        break;
                    case 'input':
                        const inputElement = formRootElement.querySelector('.form__item.item__' + item.name.replace('.','_') + ' .form__input')
                        inputElement.oninput = function () {
                            setField(item.name, inputElement.value)
                        }
                        break;
                    case 'float':
                        const floatElement = formRootElement.querySelector('.form__item.item__' + item.name.replace('.','_') + ' .form__input')
                        floatElement.oninput = function () {
                            setField(item.name, parseFloat(floatElement.value))
                        }
                        break;
                    case 'dropdown':
                        const dropdownElements = formRootElement.querySelectorAll('.form__item.item__' + item.name.replace('.','_') + ' .form__dropdown .form__dropdown__option')
                        dropdownElements.forEach(element => {
                            element.addEventListener('click', function () {
                                addClassActive(element.closest("label").getAttribute("for"))
                                setField(item.name, this.dataset.value)
                            })
                        })
                        const closeIcons = formRootElement.querySelectorAll('.form__item.item__' + item.name.replace('.','_') + ' .form__dropdown .close__icon')
                        closeIcons.forEach(icon => {
                            icon.addEventListener('click', function () {
                                clearDropdown(this.id)
                                setField(item.name, null)
                            })
                        })
                        break;
                    case 'checkbox':
                        const checkboxElement = formRootElement.querySelector('.form__item.item__' + item.name.replace('.','_') + ' .form__checkbox_hidden')
                        checkboxElement.oninput = function () {
                            setField(item.name, checkboxElement.checked)
                        }
                        break;

                }
            })
        }

        function addClassActive(element){
            const dropdownHeader = formRootElement.querySelector(`#${element}__header`)
            if(!!dropdownHeader.innerHTML){
                formRootElement.querySelector(`#${element}__header`).classList.add("active")
            }
        }

        function clearDropdown(id){
            const dropdownHeader = formRootElement.querySelector('#' + id.replace('close__icon','header'))
            dropdownHeader.innerHTML = ''
            dropdownHeader.classList.remove("active")
        }

        function clearForm() {
            successText.style.display = 'none'
            successText.querySelector('p').innerHTML = ''

            formElement.style.display = 'block'

            Object.keys(formData).forEach(key => formData[key].value = null)
            formRootElement.querySelectorAll('.form .form__dropdown__header').forEach((header) => header.innerHTML = '')
            formRootElement.querySelectorAll('.form .form__input').forEach(input => input.value = '')
            formRootElement.querySelectorAll('.form .form__checkbox_hidden').forEach(checkbox => checkbox.checked = false)

            unLockButton()
        }

        function showFormError(text) {
            formError.style.display = 'block'
            formError.innerHTML = text
            unLockButton()
        }

        function showFieldError(field, message){
            if (!field || !formData[field]) {
                showFormError(message)
                return;
            }

            formRootElement.querySelector('.form .item__' + field.replace('.','_'))?.classList.add('error')
            const errField = formRootElement.querySelector('.form .item__' + field.replace('.','_') + ' .form__error');
            if (errField) {
                errField.innerHTML = message
                errField.style.display = 'block'
            } else {
                showFormError(message)
            }
        }

        function handleErrors(errors){
            errors.forEach(err => {
                showFieldError(err.field, err.message)
            })
            unLockButton()
        }

        function hideError() {
            formError.style.display = 'none'

            formRootElement.querySelectorAll('.form .error')
                .forEach(element => element.classList.remove('error'))

            formRootElement.querySelectorAll('.form .form__error')
                .forEach(errorField => {
                    errorField.style.display = 'none';
                    errorField.innerHTML = '';
                })
        }

        function showSuccess(text) {
            formElement.style.display = 'none'
            successText.style.display = 'block'
            successText.querySelector('p').innerHTML = text
            unLockButton()
        }

        function setField(fieldName, value) {
            hideError()
            formData[fieldName].value = value
        }

        function getContentTypeForContractor(contractorType) {
            return contractorType === 'human' ? 'ContractorHuman': 'ContractorCompany'
        }

        async function submitHandler() {
            if (isFormLocked) {
                return
            }

            lockButton()

            const fields = Object.values(formData)

            const isValid = fields.map(
                item => item.validators.map(
                    validator => {
                        const validateError = validator(item.value)
                        if (validateError) {
                            showFieldError(item.name, validateError)
                        }
                        return !validateError
                    }
                ).filter(Boolean).length === item.validators.length
            ).filter(Boolean).length === fields.length


            if (useCaptcha && !reCaptcha.isVerified()) {
                reCaptcha.verify(() => {
                    submitHandler()
                })
                unLockButton()
                return
            }

            const contactInfo = [];

            if (isValid) {
                const request = fields.reduce((dataObj, item) => {
                    if (['email', 'phone'].includes(item.type)) {
                        if (item.value?.value?.trim()) {
                            contactInfo.push(item.value)
                        }
                        return dataObj
                    }

                    if (item.name.startsWith("contractor.")) {
                        if (!dataObj.contractor) {
                            dataObj.contractor = {
                                contentType: getContentTypeForContractor(contractorType)
                            }
                        }

                        dataObj.contractor[item.name.replace("contractor.", "")] = item.value
                    } else {
                        dataObj[item.name] = item.value
                    }
                    return dataObj
                }, {})

                if (formType === 'deal') {
                    request.contentType = 'Deal'
                    if (!!request.contractor) {
                        request.contractor.contactInfo = contactInfo
                    }
                } else {
                    request.contentType = getContentTypeForContractor(contractorType)
                    request.contactInfo = contactInfo
                }
                sendRequest(request);
            } else {
                unLockButton()
            }
        }

        function lockButton() {
            isFormLocked = true;

            submitButton.classList.add('form__button_disabled')
            submitButton.onclick = null
        }

        function unLockButton() {
            isFormLocked = false;
            submitButton.classList.remove('form__button_disabled')
            submitButton.onclick = submitHandler
        }

        function phoneInputHandler(e) {
            e.target.value = e.target.value.replace(/[^\d\()\-\+]/g, '');
        }

        function requiredValidator(value) {
            return !value ? 'Поле обязательно для заполнения' : ''
        }

        function emailValidator(contactInfo) {
            return contactInfo && contactInfo.value && !contactInfo.value.match(
                /.+@.+\..+/i
            ) ? 'Некорректный email' : ''
        }

        function phoneValidator(contactInfo) {
            return contactInfo && contactInfo.value && !contactInfo.value.match(
                /^\+?[\d()\-\s]+$/
            ) ? 'Некорректный номер телефона' : ''
        }

                    function sendRequest(request) {
                const reqParams = useCaptcha ?  '?' + JSON.stringify({token:reCaptcha.getToken()}) : ''

                fetch('https://mp27443114.megaplan.ru/api/v3/customLeadForm/1/process/contractor' + reqParams, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json, text/plain, */*',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(request)
                })
                    .then((response) => response.json())
                    .then(data => {
                        if (data?.meta?.status !== 200) {
                            if (!data?.meta?.errors || data?.meta?.status > 500) {
                                throw new Error()
                            }

                            handleErrors(data.meta.errors)

                            return
                        }

                        showSuccess('Данные успешно отправлены')
                    })
                    .catch(() => {
                        showFormError('При отправке формы произошла ошибка. Попробуйте позже.')
                    })
            }
            })();
</script>

@endsection