const email = document.querySelector("#_email"),
    sub = document.querySelector("#_sub"),
    des = document.querySelector("#_des"),
    sub_btn = document.querySelector(".btn-submit-form")

const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/

const err = function (f, m) {
    f.parentElement.querySelector(".err").textContent = m
}

const remErr = function (f) {
    f.parentElement.querySelector(".err").textContent = ''
}

sub_btn.addEventListener("click", function () {
    let formValid = true


    //  is email valid
    if (email.value == '') {
        err(email, 'email address cannot be empty !')
        formValid = false
    }
    else if (!emailRegex.test(email.value)) {
        err(email, 'please enter a valid email address')
        formValid = false
    }
    else remErr(email)

    // is subject added
    if (sub.value == '') {
        err(sub, 'subject cannot be empty')
        formValid = false
    }
    else if (sub.value.length > 60) {
        err(sub, 'subject cannot be greater than 60')
        formValid = false
    }
    else remErr(sub)

    // is discription exceeded limit
    if (des.value.length > 999) {
        err(des, 'description cannot be greather than 999')
        formValid = false
    }
    else remErr(des)


    if (formValid) {
        addContactInfo(email.value, sub.value, des.value);
    }
})

const addContactInfo = async function (e, s, d) {
    sub_btn.setAttribute("disabled", true)
    const data = { e, s, d }

    const response = await fetch("php/contact.php", {
        method: "POST",
        body: `e=${e}&s=${s}&d=${d}`,
        headers: {
            'Content-Type': "application/x-www-form-urlencoded"
        }
    })

    if (response.ok) {
        const result = await response.text()

        if (result === 'success') location.replace("success.php");
        else {
            const errBlock = document.querySelector('.contact-err'),
                errText = document.querySelector(".contact-err-text")

            errBlock.classList.add('show')
            errText.textContent = result
        }
    } else alert('something went wrong');

    sub_btn.setAttribute("disabled", false)
}