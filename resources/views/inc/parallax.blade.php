@if(Request::is('login','register'))
    <section class="page-banner padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    @if(Request::is('login'))
                        <h1 class="text-uppercase">Welcome Login</h1>
                        <p>Serving you since 2018. Partner with the best housing company.</p>
                    @endif
                    @if(Request::is('register'))
                        <h1 class="text-uppercase">Welcome Register</h1>
                        <p>Serving you since 2018. Partner with the best housing company.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif