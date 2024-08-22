@include('page.header')

<section class='hero'>
    <div class="container py-3">
        <div class="row align-items-center">
            <div class="column col-md-6">
                <h1 class="text-light">Find your</h1>
                <h2 class="text-light">Best future home</h2>
                <p class="text-light">we have channeled many customer desires in achieving the perfect home with their lifestyle</p>
                <button type="submit" class="btn">Get Started</button>
            </div>
            <div class="column col-md-6 my-2">
                <img src="{{ asset('img/hero-bg.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="about-us">
    <div class="container my-3">
        <h1 class="d-flex mx-auto align-items-center justify-content-center">About us</h1>
        <div class="row align-items-center justify-content-between">
            <div class="column col-md-4">
                <img src="{{ asset('img/about.png') }}" alt="">
            </div>
            <div class="column  col-about col-md-6">
                <p>
                Damudzu Properti, merupakan perusahaan yang bergerak dibidang Agency Property yang berpengalaman dan profesional dalam bidang pemasaran. 
                Telah dipercaya oleh banyak Developer yang bekerja sama, kami yakin dapat menghadirkan perumahan yang berlokasi strategis, harga terjangkau serta berkualitas untuk Anda.
                Dengan komitmen dan konsistensi yang dimiliki, kami menjadi salah satu Agency Property yang berhasil membantu banyak keluarga memiliki rumah idaman mereka.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="service py-3">
    <div class="container my-3">
        <h1 class="d-flex align-items-center justify-content-center">Why choose us?</h1>
        <div class="row my-4">
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Komitmen</h5>
                    <p class="card-text">Kami berkomitmen untuk memberikan yang terbaik kepada anda, serta membantu anda dalam menjalankan proses KPR hingga AKAD.</p>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profesional</h5>
                    <p class="card-text">Dikelola oleh ahli di bidangnya dan berpengalaman, Serta terus berinovasi dan berfokus pada pelayanan yang terbaik untuk anda.</p>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Integritas</h5>
                    <p class="card-text">Menjaga kepercayaan konsumen dan mitra dengan mengedepankan tata kelola perusahaan yang sesuai dengan good corporate governance.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-product"></section>

<section class="workflow py-3">
    <div class="container my-3">
        <h1 class="d-flex align-items-center justify-content-center text-center">Kenapa Anda harus mengajukan KPR
        bersama Damudzu Properti ?</h1>
        <div class="row my-4 justify-content-start ">
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Terlengkap</h5>
                    <p class="card-text">Damudzu Properti menyediakan berbagai jenis properti mulai dari rumah tinggal minimalis hingga ruko untuk usaha.</p>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tercepat</h5>
                    <p class="card-text">Tim Damudzu Properti memiliki dedikasi untuk memberikan pelayan terbaik dengan memastikan semua proses KPR anda diselesaikan dalam waktu yang singkat.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="row my-4 justify-content-end">
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Terpercaya</h5>
                    <p class="card-text">Tim kami terdiri dari orang-orang profesional dalam bidangnya dan seluruh proses KPR dilakukan oleh tim bersama dengan bantuan developer untuk menjamin pelayanan yang cepat dan maksimal.</p>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Termudah</h5>
                    <p class="card-text">Nikmati berbagai kemudahan dalam memiliki rumah dengan memanfaatkan berbagai promo serta fasilitas yang diberikan oleh Damudzu Properti dan Developer.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('page.footer')