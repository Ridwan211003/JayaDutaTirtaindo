<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    .desktop {
        background-color: #d4cdcd;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .desktop .div {
        background-color: #d4cdcd;
        width: 1440px;
        height: 1395px;
        position: relative;
    }

    .desktop .water {
        position: absolute;
        width: 87px;
        height: 107px;
        top: 21px;
        left: 47px;
        object-fit: cover;
    }

    .desktop .JAYA-DUTA-TIRTAINDO {
        position: absolute;
        width: 255px;
        top: 20px;
        left: 148px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-weight: 400;
        color: #000000;
        font-size: 32px;
        letter-spacing: 0;
        line-height: normal;
    }

    .desktop .overlap {
        position: absolute;
        width: 783px;
        height: 56px;
        top: 78px;
        left: 573px;
    }

    .desktop .rectangle {
        position: absolute;
        width: 197px;
        height: 56px;
        top: 0;
        left: 444px;
        background-color: #46e8ff;
    }

    .desktop .group {
        position: absolute;
        width: 783px;
        height: 52px;
        top: 4px;
        left: 0;
    }

    .desktop .overlap-group {
        position: absolute;
        width: 301px;
        height: 52px;
        top: 0;
        left: 133px;
    }

    .desktop .text-wrapper {
        position: absolute;
        width: 182px;
        top: 0;
        left: 119px;
        font-family: "Mplus 1p Bold-Bold", Helvetica;
        font-weight: 700;
        color: #000000;
        font-size: 28px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .desktop .text-wrapper-2 {
        position: absolute;
        width: 128px;
        top: 0;
        left: 0;
        font-family: "Mplus 1p Bold-Bold", Helvetica;
        font-weight: 700;
        color: #000000;
        font-size: 28px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .desktop .overlap-group-2 {
        position: absolute;
        width: 339px;
        height: 52px;
        top: 0;
        left: 434px;
    }

    .desktop .text-wrapper-3 {
        position: absolute;
        width: 226px;
        top: 0;
        left: 0;
        font-family: "Mplus 1p Bold-Bold", Helvetica;
        font-weight: 700;
        color: #000000;
        font-size: 28px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .desktop .text-wrapper-4 {
        position: absolute;
        width: 128px;
        top: 0;
        left: 211px;
        font-family: "Mplus 1p Bold-Bold", Helvetica;
        font-weight: 700;
        color: #000000;
        font-size: 28px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .desktop .overlap-2 {
        position: absolute;
        width: 1440px;
        height: 251px;
        top: 1144px;
        left: 0;
        background-color: #1c1919;
    }

    .desktop .text-wrapper-5 {
        position: absolute;
        width: 288px;
        top: 6px;
        left: 576px;
        font-family: "Moul-Regular", Helvetica;
        font-weight: 400;
        color: #ffffff;
        font-size: 24px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .desktop .text-wrapper-6 {
        position: absolute;
        width: 288px;
        top: 5px;
        left: 1048px;
        font-family: "Moul-Regular", Helvetica;
        font-weight: 400;
        color: #ffffff;
        font-size: 24px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .desktop .text-wrapper-7 {
        position: absolute;
        width: 288px;
        top: 6px;
        left: 88px;
        font-family: "Moul-Regular", Helvetica;
        font-weight: 400;
        color: #ffffff;
        font-size: 24px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .desktop .instagram {
        position: absolute;
        width: 87px;
        height: 87px;
        top: 53px;
        left: 622px;
        object-fit: cover;
    }

    .desktop .facebook {
        position: absolute;
        width: 77px;
        height: 77px;
        top: 56px;
        left: 730px;
        object-fit: cover;
    }

    .desktop .line {
        position: absolute;
        width: 1439px;
        height: 2px;
        top: 161px;
        left: 1px;
    }

    .desktop .overlap-3 {
        position: absolute;
        width: 425px;
        height: 58px;
        top: 175px;
        left: 526px;
    }

    .desktop .copyright {
        position: absolute;
        width: 45px;
        height: 58px;
        top: 0;
        left: 0;
        object-fit: cover;
    }

    .desktop .p {
        position: absolute;
        width: 403px;
        top: 9px;
        left: 22px;
        font-family: "Metrophobic-Regular", Helvetica;
        font-weight: 400;
        color: #ffffff;
        font-size: 26px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .desktop .phone-call {
        position: absolute;
        width: 78px;
        height: 78px;
        top: 56px;
        left: 70px;
        object-fit: cover;
    }

    .desktop .text-wrapper-8 {
        position: absolute;
        width: 236px;
        top: 75px;
        left: 148px;
        font-family: "Inria Sans-Regular", Helvetica;
        font-weight: 400;
        color: #ffffff;
        font-size: 32px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
    }

    .desktop .text-wrapper-9 {
        position: absolute;
        width: 445px;
        top: 55px;
        left: 969px;
        font-family: "Inria Sans-Regular", Helvetica;
        font-weight: 400;
        color: #ffffff;
        font-size: 32px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .desktop .overlap-4 {
        position: absolute;
        width: 1440px;
        height: 982px;
        top: 162px;
        left: 0;
        background-color: #fffdfd;
        border-radius: 51px;
    }

    .desktop .solar-power-power {
        position: absolute;
        width: 378px;
        height: 274px;
        top: 89px;
        left: 60px;
        object-fit: cover;
    }

    .desktop .text-wrapper-10 {
        position: absolute;
        width: 876px;
        top: 13px;
        left: 261px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-weight: 400;
        color: #000000;
        font-size: 40px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
        text-decoration: underline;
    }

    .desktop .image {
        width: 373px;
        height: 271px;
        top: 89px;
        left: 973px;
        position: absolute;
        object-fit: cover;
    }

    .desktop .img {
        width: 378px;
        height: 276px;
        top: 406px;
        left: 60px;
        position: absolute;
        object-fit: cover;
    }

    .desktop .image-2 {
        width: 389px;
        height: 276px;
        top: 407px;
        left: 502px;
        position: absolute;
        object-fit: cover;
    }

    .desktop .image-3 {
        width: 379px;
        height: 275px;
        top: 411px;
        left: 971px;
        position: absolute;
        object-fit: cover;
    }

    .desktop .image-4 {
        width: 389px;
        height: 241px;
        top: 725px;
        left: 502px;
        position: absolute;
        object-fit: cover;
    }

    .desktop .image-5 {
        width: 383px;
        height: 241px;
        top: 725px;
        left: 969px;
        position: absolute;
        object-fit: cover;
    }

    .desktop .image-6 {
        width: 392px;
        height: 268px;
        top: 91px;
        left: 504px;
        position: absolute;
        object-fit: cover;
    }

    .desktop .image-7 {
        width: 378px;
        height: 241px;
        top: 725px;
        left: 60px;
        position: absolute;
        object-fit: cover;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img width="107" height="107" src="img/logo.png" />
        <a class="navbar-brand text-dark" href="home.php">JAYA DUTA TIRTAINDO</a>

        <div class="collapse navbar-collapse pl-5">
            <ul class="navbar-nav me-auto mb-lg-0 ">
                <li class="nav-item h4">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item h4">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item h4">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item h4">
                    <a href="https://www.tokopedia.com/jayadutaindonesia" class="nav-link" href="#">Toko Online</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="desktop">


        <div class="overlap-2">
            <div class="text-wrapper-5">SOSIAL MEDIA</div>
            <div class="text-wrapper-6">LOKASI</div>
            <div class="text-wrapper-7">KONTAK KAMI</div>
            <a href="https://www.instagram.com/jayadutaindonesia_official" target="_blank">
                <img class="instagram" src="img/instagram.png" alt="Instagram">
            </a>
            <a href="https://www.facebook.com/jayafresshop" target="_blank">
                <img class="facebook" src="img/facebook.png" alt="Facebook">
            </a>
            <img class="line" src="img/garis.png" />
            <div class="overlap-3">
                <img class="copyright" src="img/copyright.png" />
                <p class="p">2023 CV Jaya Duta Tirtaindo</p>
            </div>
            <img class="phone-call" src="img/telephone.png" />
            <div class="text-wrapper-8">: (021) 5845120</div>
            <p class="text-wrapper-9">Lokasi  Jl. Raya Karya Utama No. 23 Kebon Jeruk, Jakarta Barat</p>
        </div>
        <div class="overlap-4">
            <img class="solar-power-power" src="img/galeri1.png" />
            <div class="text-wrapper-10">Galeri</div>
            <img class="image" src="img/galeri3.png" />
            <img class="img" src="img/galeri4.png" />
            <img class="image-2" src="img/water_treatment.png" />
            <img class="image-3" src="img/galeri4.png" />
            <img class="image-4" src="img/galeri8.png" />
            <img class="image-5" src="img/galeri9.png" />
            <img class="image-6" src="img/galeri2.png" />
            <img class="image-7" src="img/galeri7.png" />
        </div>
    </div>
    </div>
</body>

</html>