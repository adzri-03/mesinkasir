<div>
    @if(Auth::user()->peran=='admin')
    <div class="container mt-3">
        Dashboard admin
    </div>
    @endif
    @if(Auth::user()->peran=='kasir')
    <div class="container mt-3">
        Dashboard Kasir
    </div>
    @endif
    @if(Auth::user()->peran=='manager')
    <div class="container mt-3">
        Dashboard manager
    </div>
    @endif
</div>
