
<link rel="stylesheet" href="/css/styles.css" />
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
/>

@if (App::getLocale() == 'ar')
    <html dir="rtl">
    @else
        <html>
@endif


<nav class="firstNavbar">
    <div class="logoSection">
        <div class="logo"><img src="imgs/logo.jfif" alt="logo" /></div>
        <div class="logoName">{{trans('nav_trans.ez-market')}}</div>
    </div>
    <div class="searchSection">
        <i class="fa-solid fa-magnifying-glass icon"></i>
        <input type="text" placeholder="Search products..." />
    </div>
    <div class="userSection">
        <a href="#">
            <div class="userInfo">
                <i class="fa-solid fa-circle-user"></i>
                <p>my account</p>
            </div>
        </a>
        <a href="#">
            <div class="userInfo">
                <i class="fa-solid fa-circle-question"></i>
                <p>customer help</p>
            </div>
        </a>
        <a href="#">
            <div class="userInfo">
                <i class="fa-solid fa-cart-shopping"></i>
                <p>cart</p>
            </div>
        </a>
    </div>
</nav>
</html>
