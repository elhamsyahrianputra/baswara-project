@include('user.header')

<div class="container bg-light py-5">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <lottie-player src="lottie/loading.json" background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <h3 class="display">Transaksi anda sedang dalam proses konfirmasi</h3>
            <span class="lead">Pastikan telah melakukan pembayaran. Jika dalam 1x24 Jam belum terkonfirmasi</span>
            <span class="lead">Silahkan hubungi CS</span>
        </div>
    </div>
</div>

@include('user.footer')