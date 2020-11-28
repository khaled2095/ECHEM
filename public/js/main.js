$(document).ready(() => {
    if (window.innerWidth < 430) {
        var elm = document.querySelectorAll("#fix-nav");
        var brand = document.querySelector('.navbar-brand')
        var mainNav = document.querySelector('#logo')
        mainNav.append(brand)
        document.querySelector('#desk-logo').remove()
        elm.forEach(elm => {
            elm.classList.remove("flex-row");
            elm.classList.add("flex-folumn");
            elm.classList.remove("justify-content-between");
            elm.classList.remove("justify-content-start");
            elm.classList.add("justify-content-center");
        });
        var btn = document.querySelector("#search-btn");
        btn.classList.add("w-100");
    }

    if (window.innerWidth <= 768) {
        document.querySelector("#mega-fix-mobile").classList.remove('w-100');
        document.querySelectorAll('.cat-sub').forEach(elm => elm.remove())
    }
    var gift_selector = document.querySelectorAll('#gift-card-method');
    gift_selector.forEach(elm => {
        elm.addEventListener('click', () => {
            if (elm.value === 'gift_card') {
                var gift_code = document.querySelector('#gift-code');
                gift_code.classList.remove('display-none')
                gift_code.classList.add('display-block')
            } else {
                var gift_code = document.querySelector('#gift-code');
                gift_code.classList.remove('display-block')
                gift_code.classList.add('display-none')
            }
        })
    })
});

$(document).on("click", ".dropdown-menu", function (e) {
    e.stopPropagation();
});

$(document).ready(() => {
    var elm = document.getElementById('auth-nav');
    var elm2 = document.querySelectorAll('#mobile');
    
    if (window.innerWidth <= 768) {
        elm.classList.add('float-left')
        elm.classList.remove('float-right')
        elm2.forEach(elm => elm.classList.remove('d-none'))
    } else {
        elm.classList.remove('float-left')
        elm.classList.add('float-right')
        elm2.forEach(elm => elm.classList.add('d-none'))
    }
})

$(document).ready(function () {
    // Check Radio-box
    $(".rating input:radio").attr("checked", false);

    $('.rating input').click(function () {
        $(".rating span").removeClass('checked');
        $(this).parent().addClass('checked');
    });


    $('#carouselExampleIndicators').carousel()
});


const val = (data) => {
    var x = data.split(',')
    document.getElementById('prod-price').innerHTML = 'Starting @' + '  ' + x[0] + '  /-';
}
