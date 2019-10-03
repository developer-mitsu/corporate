var toggleMenuBtn = document.querySelector('#toggleMenuBtn')
var toggleMenu = document.querySelector('#toggleMenu')

var dots = document.querySelectorAll('.dot')
var DotSecond = 300
var currentDotIndex = 0

toggleMenuBtn.addEventListener('click', function(){
    toggleActive(this, toggleMenu)
})

document.addEventListener('click', function(e){
    var target = e.target
    
    if (!target.classList.contains('scroll')) return;

    e.preventDefault()

    if (target.classList.contains('toggleMenu')) {
        toggleActive(toggleMenu, toggleMenuBtn)
    }
    
    document.querySelector(target.hash).scrollIntoView({
        behavior: 'smooth', 
        block: 'start'
    }) 
})

dots[0].classList.add('active')

setInterval(function() {
    dots[currentDotIndex].classList.remove('active')
    if (currentDotIndex < dots.length - 1) {
        dots[++currentDotIndex].classList.add('active')
    } else {
        dots[currentDotIndex = 0].classList.add('active')
    }
}, 300)

window.onload = function () {
    toggleActive(document.querySelector('.loaded'),
    document.querySelector('.loading'))
    setTimeout(function () {
        document.querySelector('.loading').style = 'display:none'
    }, 1000)
}



function toggleActive() {
    var className = 'active'

    for (var i = 0; i < arguments.length; i++) {
        arguments[i].classList.toggle(className)
    }
}

function toContact() {
    var requiredObjects = [
        { object: document.getElementById("name"), isValid: false },
        { object: document.getElementById("name_how"), isValid: false },
        { object: document.getElementById("email"), isValid: false },
        { object: document.getElementById("phone"), isValid: false },
    ];
    var lastNumOfObjects = requiredObjects.length - 1;
    for (var i = 0; i < requiredObjects.length; ++i) {
        if (!requiredObjects[i].object.value) {
            window.alert("「必須」項目は入力必須です。");
            break;
        } else if (
            i === lastNumOfObjects &&
            requiredObjects[i].object.value
        ) {
            if (document.getElementById("privacy").checked) {
                document.contact.submit();
            } else {
                window.alert(
                    "お問い合わせの送信には、プライバシーポリシーへの同意が必要です。"
                );
            }
        }
    }
}