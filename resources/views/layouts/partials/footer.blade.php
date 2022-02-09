@if(Route::currentRouteName() == 'login'
|| Route::currentRouteName() == 'register'
|| Route::currentRouteName() == 'home'
)
{{--    || Route::currentRouteName() == 'contacts'--}}


    @php($fixed = 'fixed-bottom')
<div class="container">
    <footer class="py-3 {{ $fixed }}">
        <hr>
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="{{ route('index') }}" class="nav-link px-2 " style="color: black">Головна</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 " style="color: black">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 " style="color: black">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 " style="color: black">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 " style="color: black">About</a></li>
        </ul>
        <p class="text-center " style="color: black">© 2022 Чаплинські майстерні</p>
    </footer>
</div>
@else
    <div class="container-fluid">
        <footer class="py-3 mt-5">
            <hr>
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="{{ route('index') }}" class="nav-link px-2 text-muted">Головна</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="{{ route('contacts') }}" class="nav-link px-2 text-muted">Контакти</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Про нас</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 Чаплинські майстерні</p>
        </footer>
    </div>
@endif
