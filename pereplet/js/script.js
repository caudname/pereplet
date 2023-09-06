// Добавляет товар в корзину
const buy = document.querySelectorAll(".good-buy");
buy.forEach(function(b) {
    b.addEventListener("click", function(e) {
        let id = b.getAttribute("id");
        e.preventDefault();

        $.ajax({
         type: "POST",
         url: "/includes/addtocart.php",
         data: "id="+id,
         success: 
            function(data) { 
                alert("Товар добавлен в корзину");
            }
        });

    })
})

// Удаляет товар из корзины
const del = document.querySelectorAll(".cart-button-delete");
del.forEach(function(d) {
    d.addEventListener("click", function(e) {
        let id = d.getAttribute("id");
        e.preventDefault();

        $.ajax({
         type: "POST",
         url: "/includes/deletefromcart.php",
         data: "id="+id,
         success: 
            function(data) {
                d.closest(".cart-item").remove();
                loadcart();
                allprice();
            }
        });

    })
})

// Очищает корзину
const clearcart = document.querySelector("#clear-cart");
const cart = document.querySelector(".cart");
if (clearcart)
clearcart.addEventListener("click", function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "/includes/clearcart.php",
        success: function(data) {
            loadcart();
            allprice();
        }
    });
});

// Окно авторизации
const shadowLink = document.querySelector(".shadow-link");
const authWindowBlock = document.querySelector(".auth-window-block");
const authLogin = document.querySelector(".auth-login");
const authPassword = document.querySelector(".auth-password");

const showAuthWindowBlock = function () {
    const userLink = document.querySelector(".fa-user");
    if(userLink)
    userLink.addEventListener("click", function() {
        authWindowBlock.style.display = "block";
        authLogin.focus();
    });
}
showAuthWindowBlock();

shadowLink.addEventListener("click", function() {
    authWindowBlock.style.display = "none";
});

// Авторизация
const authForm = document.querySelector(".auth-form form");
if (authForm)
authForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const loginText = document.querySelector(".auth-form form .auth-login");
    const passwordText = document.querySelector(".auth-form form .auth-password");
    const authFormData = {
        login: loginText.value,
        password: passwordText.value
    }
    $.ajax({
        type: "POST",
        url: "login.php",
        data: authFormData,
        success: function(data) {
            if (data == "no") {
                alert("Неверный логин или пароль");
                loginText.value = "";
                passwordText.value = "";
                loginText.focus();
            } else {
                authWindowBlock.style.display = "none";
                headerReg.innerHTML = `
                    <a class="header-reg-name">`+ data +`</a>
                        <div class="header-reg-link__block">
                            <a class="header-reg-link" id="logout">Выйти</a>
                        </div>
                `;
                logoutFunction();
                showLogoutButton();
            }
        }
    });
});

// Кнопка Выйти
const showLogoutButton = function () {
    const headerRegName = document.querySelector(".header-reg-name");
    const headerRegLinkBlock = document.querySelector(".header-reg-link__block");
    if (headerRegName && headerRegLinkBlock)
    headerRegName.addEventListener("click", function () {
        if (headerRegLinkBlock.style.display == "block") {
            headerRegLinkBlock.style.display = "none";
        } else {
            headerRegLinkBlock.style.display = "block";
        }
    })
}
showLogoutButton();

// Выход из аккаунта
const headerReg = document.querySelector(".header-reg");
const logoutFunction = function () {
    const logout = document.querySelector("#logout");
    if (logout)
    logout.addEventListener("click", function (e) {
        e.preventDefault();
        $.ajax({
        type: "POST",
        url: "/includes/logout.php",
        success: function(data) {
            if (data == 'logout') {
                headerReg.innerHTML = '<a href="#" class="header-reg-icon"><i class="fa fa-user" aria-hidden="true"></i></a>';
                showAuthWindowBlock();
            }
        }
        });
    });
}
logoutFunction();

// Показывает количество товаров в корзине
const loadcart = function () {
    const cartTitle = document.querySelector(".cart-title");
    if (cartTitle)
    $.ajax({
        type: "POST",
        url: "/includes/loadcart.php",
        success: function(data) {
            if (data == 0) {
                cart.innerHTML = '<h1 align="center">Корзина пуста</h1>';
            } else {
                cartTitle.innerHTML = "Корзина: " + data;
            }
        }
    });
}

// Кнопка плюс в корзине
const plus = document.querySelectorAll(".cart-button-plus");
if (plus)
plus.forEach(function (p) {
    p.addEventListener("click", function(){
        let plusid = p.getAttribute("plusid");
        let price = document.querySelector("#tovar"+plusid+" > h5 > .span-price").innerHTML;
        $.ajax({
            type: "POST",
            url: "/includes/plus.php",
            data: "plusid="+plusid,
            success: function(data) {
                document.querySelector("#tovar"+plusid+" > h5 > .span-count").innerHTML = data;
                document.querySelector("#price"+plusid).innerHTML = price * data;
                p.nextElementSibling.innerHTML = data;
                loadcart();
                allprice();
            }
        });
    })
})

// Кнопка минус в корзине
const minus = document.querySelectorAll(".cart-button-minus");
if (minus)
minus.forEach(function (m) {
    m.addEventListener("click", function(){
        let minusid = m.getAttribute("minusid");
        let price = document.querySelector("#tovar"+minusid+" > h5 > .span-price").innerHTML;
        $.ajax({
            type: "POST",
            url: "/includes/minus.php",
            data: "minusid="+minusid,
            success: function(data) {
                document.querySelector("#tovar"+minusid+" > h5 > .span-count").innerHTML = data;
                document.querySelector("#price"+minusid).innerHTML = price * data;
                m.previousElementSibling.innerHTML = data;
                loadcart();
                allprice();
            }
        });
    })
})

// Итоговая цена
function allprice(){
    $.ajax({
     type: "POST",
     url: "/includes/allprice.php",
     dataType: "html",
     cache: false,
     success: function(data) {
        document.querySelector(".allprice > strong").innerHTML = data;
    }
   });
}