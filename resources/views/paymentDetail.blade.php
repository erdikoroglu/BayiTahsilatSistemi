<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Link ile Tahsilat Sayfası | Anka Mühendislik</title>
    <link rel="icon" type="image/png" href="{{ asset('front/assets/vendor/pnr/images/logo/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css" integrity="sha512-6g9IGCc67eh+xK03Z8ILcnKLbJnKBW+qpEdoUVD/4hBa2Ghiq5dQgeNOGWJfGoe9tdCRM4GpJMnsRXa2FDJp9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/pnr/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
</html>
<body>
<header>
    <div class="header__info">
        <span><em class="fas fa-exclamation-triangle"></em></span>
        <span>Bu sayfanın adresinin</span>
        <span class="info__likeButton info__likeButton--pr3">https://pay.ankamuh.com</span>
        <span>ile başlaması ve sol üst köşede</span>
        <span class="info__likeButton"><em class="fas fa-lock"></em></span>
        <span>ikonun bulunması gerekmektedir.</span>
    </div>
    <nav class="navbar navbar-expand">
        <a class="brand" href="#">
            <img src="{{ storage_link($user->pay_logo) }}" alt="{{ $user->company_name }}">
        </a>
        <span class="navbar__brandTitle" href="#">
            Tahsilat Sayfası
        </span>
        <div class="collapse navbar-collapse justify-content-end">

        </div>
    </nav>
</header>
<section>
    <div class="container-fluid">
        <div class="row">
            <!-- sidebar-->
            <div class="col-lg-3" id="purchase-sidebar">
                <div class="stepper__row stepper__row--active">
                    <div class="stepper--vertical">
                        <div class="stepper--vertical__circle">
                            <span class="stepper--vertical__circle__text">1</span>
                        </div>
                        <div class="stepper--vertical__details">
                            <h3 class="heading__three">Bilgi Girişi</h3>
                            <p class="paragraph">Ödeme yapan kişi ve kurum bilgilerinizi doğru bir şekilde doldurunuz.</p>
                        </div>
                    </div>
                </div>
                <div class="stepper__row stepper__row--disabled">
                    <div class="stepper--vertical">
                        <div class="stepper--vertical__circle">
                            <span class="stepper--vertical__circle__text">2</span>
                        </div>
                        <div class="stepper--vertical__details">
                            <h3 class="heading__three">Ödeme</h3>
                            <p class="paragraph">Yapacağınız ödeme detaylarını ve kart bilgilerinizi girerek ödemenizi gerçekleştiriniz.</p>
                        </div>
                    </div>
                </div>
                <div class="stepper__row stepper__row--disabled">
                    <div class="stepper--vertical">
                        <div class="stepper--vertical__circle">
                            <span class="stepper--vertical__circle__text">3</span>
                        </div>
                        <div class="stepper--vertical__details">
                            <h3 class="heading__three">Sonuç</h3>
                            <p class="paragraph">Ödeme işleminizin sonucunu ve tahsilat makbuzunuzu alın.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sidebar - end of block-->
            <!-- main-->
            <main class="col-lg-9" id="purchase-main" role="main">
                <!-- code check-->
                <div class="main__row main__row--active">
                    <form action="" method="POST">

                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <span class="alert alert-danger">{{ $error }}</span>
                            @endforeach
                        @endif
                        @csrf
                        <h3>Ödeme Bilgileriniz</h3>
                        <hr>
                            <style>
                                .fs-2 {
                                    font-size: 2rem !important;
                                    font-weight: bold !important;
                                }
                            </style>
                        <div class="form-group row">
                            <div class="col-12">
                                <label class="col-form-label" for="">Ödeme Yapmak İstediğiniz Tutar</label>
                                <input class="form-control text-center fs-2" id="amount" type="text" name="amount" title="" required="" placeholder="0.00">
                            </div>
                            <div class="col-12">
                                <label class="col-form-label" for="">Kart Üzerindeki İsim</label>
                                <input class="form-control" id="" type="text" name="cc_owner" title="" required="" value="">
                            </div>
                            <div class="col-12">
                                <label class="col-form-label" for="">Kart Numaranız</label>
                                <input class="form-control" id="cd" type="text" name="card_number" title="" required="" value="">
                            </div>
                            <div class="col-4">
                                <label class="col-form-label" for="">SKT. AY</label>
                                <input class="form-control" id="month" type="text" name="expiry_month" title="" required="" maxlength="2" minlength="2" value="">
                            </div>
                            <div class="col-4">
                                <label class="col-form-label" for="">SKT. YIL</label>
                                <input class="form-control" id="year" type="text" name="expiry_year" title="" required="" maxlength="2" minlength="2" value="">
                            </div>
                            <div class="col-4">
                                <label class="col-form-label" for="">CVV Numarası</label>
                                <input class="form-control" id="cvv" type="text" name="cvv" title="" required="" maxlength="3" minlength="3" value="">
                            </div>
                        </div>

                        <div class="button__rectangle d-flex justify-content-end align-items-baseline">
                            <div class="input__information input__information--danger input__information--triangleRight d-none">
                                <span class="input__information__icon--mr21"><em class="fas fa-exclamation-triangle"></em></span>
                                <span class="input__information__text pnrCodeCheck__error"></span>
                            </div>
                            <button id="pnrEntryButton" class="button__rectangle__button button__rectangle__button--default next-step-btn ml-3">ÖDE</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
</section>
<footer class="d-md-block d-lg-none">
    <div class="footer__info">
        <button class="btn btn-dark-50" type="button" data-toggle="collapse" data-target="#footer__info__collapse" aria-expanded="false" aria-controls="footer__info__collapse">
            <span><em class="fas fa-exclamation-triangle"></em></span>
            <span>Güvenlik Kontrolü</span>
            <span class="btn-select-arrow"><em class="fa fa-caret-down" aria-hidden="true"></em></span>
        </button>
        <div class="collapse" id="footer__info__collapse">
            <div class="info__inputButton">https://pay.ankamuh.com</div>
            <div class="info__text">
                <span>Bu sayfanın adresinin yukarıdaki gibi başlaması ve sol üst köşede</span>
                <span><em class="fas fa-lock"></em></span>
                <span>ikonun bulunması gerekmektedir.</span>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('front/assets/vendor/pnr/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/assets/vendor/pnr/js/popper.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha512-I5TkutApDjnWuX+smLIPZNhw+LhTd8WrQhdCKsxCFRSvhFx2km8ZfEpNIhF9nq04msHhOkE8BMOBj5QE07yhMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js" integrity="sha512-jTgBq4+dMYh73dquskmUFEgMY5mptcbqSw2rmhOZZSJjZbD2wMt0H5nhqWtleVkyBEjmzid5nyERPSNBafG4GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('front/assets/vendor/pnr/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('front/assets/vendor/pnr/js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function () {
        app.initializeMessages({
            required: 'Eksik bilgi girdiniz.',
            phoneMin: 'Cep Telefonu numaranızı kontrol ediniz.',
            phoneMax: 'Cep Telefonu numaranız en fazla 15 haneli olabilir.',
        });
        Inputmask({
            "mask" : "999"
        }).mask("#cvv");
        Inputmask({
            "mask" : "99"
        }).mask("#year");
        Inputmask({
            "mask" : "99"
        }).mask("#month");
        Inputmask({
            "mask" : "9999 9999 9999 9999"
        }).mask("#cd");
        Inputmask("decimal").mask("#amount");
    });

</script>
</body>