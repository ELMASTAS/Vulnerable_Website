<!DOCTYPE html>
<html>
<head>
    <title>Injection Test</title>
    <meta charset="UTF-8">
    <style>
        /* Genel stiller */
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative;
            font-family: Arial, sans-serif;
        }

        /* Arka plan GIF resmi stilleri */
        #gif-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('s.gif') no-repeat center center fixed;
            background-size: cover;
            z-index: -1;
        }

        /* Başlık stilleri */
        h1 {
            color: #27EE04;
            text-align: center;
        }

        /* Menü stilleri */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: #111111;
            text-align: center;
        }

        li {
            display: inline;
            margin: 0 10px;
        }

        li a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        li a:hover {
            background-color: #F3B416;
        }

        /* Buton stilleri */
        .myButton {
            float: right;
            background: #000;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
        }

        .myButton:hover {
            background: #222;
        }

        /* Metin stilleri */
        p {
            font-size: 17px;
            color: #fff;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div id="gif-container"></div>

    <!-- Ana başlık -->
    <h1>Injection Test</h1>

    <!-- Menü -->
    <ul>
        <li><a href='xss.php'  target='_self' title='şimdilik boş sayfa'>XSS Zaafiyet</a></li>
        <li><a href='injection.php' target='_self' title='şimdilik boş sayfa'>SQL Injection</a></li>
        <li><a href='common_injection.php' target='_self' title='şimdilik boş sayfa'>Command Injection</a></li>
        <li><a href='file.php' target='_self' title='şimdilik boş sayfa'>File Upload</a></li>
        <li><a href='' target='_self' title='şimdilik boş sayfa'>Brute Force</a></li>
        <li><a href='' target='_self' title='şimdilik boş sayfa'>CSRF</a></li>
    </ul>

    <!-- Logout butonu -->
    <?php
    session_start();
    if(isset($_SESSION['user'])) {
        echo '<button class="myButton">LOGOUT</button>';
    } else {
        header("location:login.php");
    }
    ?>

    <!-- Metin içeriği -->
    <p>
        Penetrasyon testi, bir kurumun bilişim sistemlerindeki güvenlik açıklarını üçüncü bir göz tarafından kontrol edilmesi ve raporlanması sürecini ifade eder. Bu test, proaktif güvenliğin temel adımı olup sızma testi olarak da bilinir. Belirlenen bilişim sistemlerine, kurum tarafından belirlenmiş tüm yollar denenerek sızmaya çalışılır. Amacı, sistemdeki güvenlik açıklarını tespit etmek ve yetkisiz erişim sağlamaktır.
    </p>
    <p>
        Penetrasyon testi, güvenlik açığı taraması, uyumluluk denetimi veya güvenlik değerlendirmesi gibi diğer çabalardan farklılık gösterir. Bu test, güvenlik açıklarını tespit etmekle kalmaz; aynı zamanda bir kuruluşun bilişim varlıklarına, verilerine, insanlarına ve/veya fiziksel güvenliğine yönelik gerçek dünya saldırılarını aktif olarak kullanarak kanıtlar veya onaylar.
    </p>
    <p>
        Penetrasyon testi, otomatik araçlarının ve süreç çerçevelerinin kullanımını içerebilir ancak sonuçta test uzmanlarının deneyimi ve yetenekleri ile organizasyonun etkisi belirleyicidir. Gelişmiş karşı önlem teknolojileri kullanan otomatik ve gelişmiş ağlar, insan zekasına karşı savunmasız olabilir.
    </p>
    <p>
        Bu test, mevcut güvenlik kontrollerinin aktif ve yetenekli bir saldırganın gerçek dünyadaki etkinliğini sorgular. Birden fazla saldırı vektörünü araştırarak farklı sistemlerdeki güvenlik açıklarının birleşimini ortaya çıkarabilir.
    </p>
    <p>
        Penetrasyon testi, doğrulanabilir, yorumlanabilir ve tekrar edilebilir bir metodolojiye dayanır. Bu kural seti, başarı için doğru ve eksiksiz bir şekilde uygulandığında güvenilir sonuçlar sağlar.
    </p>

</body>

</html>

