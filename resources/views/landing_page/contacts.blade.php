@extends('layouts.main')

@section('content')
<main class="contacts">
    <section class="contacts_form">
        <div class="container">
            <div class="contacts_form-header">
                <h2 class="contacts_form-header_title">Kirimkan Pertanyaan Anda</h2>

                <p class="contacts_form-header_text text">
                    Jika anda ingin bertanya atau tidak tau kalian ingin memilih apa, kirimkan pertanyaan anda. Dengan
                    senang hati, kami
                    akan membantu anda.
                </p>
            </div>
            <form class="contacts_form-form">
                <div class="contacts_form-form_wrapper d-sm-flex justify-content-between">
                    <input class="field required" type="text" data-type="email" placeholder="Email" />
                    <input class="field required" type="text" placeholder="Name" />
                </div>
                <div class="contacts_form-form_wrapper d-sm-flex justify-content-between">
                    <input class="field required" type="text" data-type="tel" placeholder="Phone number" />
                    <input class="field required" type="text" placeholder="Subject" />
                    <!-- <select class="field required input-group-text" placeholder="Subject">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select> -->
                </div>
                <textarea class="field required" placeholder="Your message here" data-type="message"></textarea>
                <div class="contacts_form-form_footer">
                    <div class="wrapper d-flex flex-wrap align-items-center justify-content-center">
                        <div class="checkbox">
                            <input type="checkbox" name="dataProcessing" id="dataProcessing" checked />
                            <label for="dataProcessing">I agree to the terms of data processing. </label>
                        </div>
                        <a class="link" href="#">Terms and Conditions</a>
                    </div>
                    <button class="btn btn--gradient">
                        <span class="text">Send a Message</span>
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection