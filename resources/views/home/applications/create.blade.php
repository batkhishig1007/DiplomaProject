@extends('web.customer')

@section('content')
<form action="{{ route('user_applications.store') }}" method="POST" enctype="multipart/form-data"
    style="min-height: 1000px">
    @csrf
    <section class="u-clearfix u-section-1" id="sec-6249">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-form u-form-1">

                <form class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form"
                    style="padding: 10px;">

                    <div class="u-form-group u-form-name">
                        <h1 class="u-text u-text-default u-text-1">Санал, гомдол<br>
                        </h1>
                    </div>
                    <div class="u-form-group u-form-name">
                        <label for="name-9ec1" class="u-form-control-hidden u-label"></label>
                        <input type="text" placeholder="Товч тайлбар." id="name-9ec1" name="title"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-message">
                        <label for="message-9ec1" class="u-form-control-hidden u-label"></label>
                        <textarea placeholder="Санал, гомдолоо бичнэ үү." rows="8" cols="50" id="message-9ec1"
                            name="description" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"
                            required=""></textarea>
                    </div>

                    <div class="u-align-left u-form-group">
                        <div class="form-group">
                            <label for="name-9ec1" class="u-form-control-hidden u-label"></label>
                            <strong>Зураг оруулах:</strong>
                            <br><input type="file" name="image" class="form-control" placeholder="Enter image">
                        </div>
                    </div>
                    <br>
                    <div class="u-align-left u-form-group u-form-submit">
                        <a href="/application" class="u-btn u-btn-submit u-button-style">Оруулах<br>
                        </a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Баярлалаа. Таны санал хүсэлт амжилттай
                        илгээгдлээ.
                    </div>
                    <div class="u-form-send-error u-form-send-message"> Уучлаарай, шаардлагатай талбаруудыг бөглөөгүй
                        эсвэл
                        таны санал хүсэлт алдаатай байна. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                </form>
            </div>
        </div>
    </section>
</form>
@endsection