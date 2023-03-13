@extends('layouts.main')

@section('content')
<main class="contacts">
    <section class="contacts_form">
        <div class="container">
            <div class="contacts_form-header">
                <h1 class="page_main-header">Narahubung</h1>

                <p class="page_main-text">
                    Jika anda ingin bertanya atau tidak tau kalian ingin memilih apa, kirimkan pertanyaan anda. Dengan
                    senang hati, kami
                    akan membantu anda.
                </p>
            </div>
            <form class="contacts_form-form">
                <div class="contacts_form-form_wrapper d-sm-flex justify-content-between">
                    <input class="field required" type="text" data-type="email" placeholder="Surel" />
                    <input class="field required" type="text" placeholder="Nama" />
                </div>
                <div class="contacts_form-form_wrapper d-sm-flex justify-content-between">
                    <input class="field required" type="text" data-type="tel" placeholder="Nomor Handphone" />
                    <input class="field required" type="text" placeholder="Subjek" />
                </div>
                <textarea class="field required" placeholder="Tulis pesanmu disini" data-type="message"></textarea>
                <div class="contacts_form-form_footer">
                    <button class="btn btn--gradient">
                        <span class="text">Kirim pesan</span>
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection