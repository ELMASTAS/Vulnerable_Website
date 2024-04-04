
<!DOCTYPE html>
<html>
<head>
<title>Injection test</title>
<meta charset="UTF-8">
<style>


.aciklama{
	color:black;
	
}

        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative;
        }

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

.myButton {
	float: right;
	box-shadow: -2px 1px 0px 0px #fafafa;
	background:linear-gradient(to bottom, #000000 5%, #000000 100%);
	background-color:#000000;
	border-radius:12px;
	display:inline-block;
	cursor:pointer;
	color:white;
	font-family:Arial;
	font-size:24px;
	font-weight:bold;
	padding:10px 28px;
	text-decoration:none;
	text-shadow:0px 0px 0px #080808;
}
.myButton:hover {
	background:linear-gradient(to bottom, #000000 5%, #000000 100%);
	background-color:#000000;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>


  

   
</head>
<style>

ul{
list-style-type:none;
margin: 0;
padding: 0;
overflow: hidden;
background:#111111;
}
li{
float:left;
}
li a{
display:table;
color:white;
text-align:center;
padding:16px;
text-decoration:none;
}
li a:hover{
background-color:#F3B416;	
}
p{
font-size:17px;
color:#27EE04;;
text-align:center;
}
h1{
color:#27EE04;
text-align:center;
}
.aligncenter {
    text-align: center;
}
</style>

<body >

<div id="gif-container"></div>

<p class="aligncenter">
    
</p>

<div class="tuslar">
<ul>
 <li><a href='xss.php'  target='_self' title='şimdilik boş sayfa'>XSS Zaafiyet</a> </li>
  <li><a href='injection.php' target='_self' title='şimdilik boş sayfa'>SQL Injection </a> </li>
  <li><a href='common_injection.php' target='_self' title='şimdilik boş sayfa'>Command Injection</a></li>
  <li><a href='file.php' target='_self' title='şimdilik boş sayfa'>File Upload</a></li>
  <li><a href='' target='_self' title='şimdilik boş sayfa'>Brute Force </a></li>
  <li><a href='' target='_self' title='şimdilik boş sayfa'>CSRF </a></li
</ul>

  
   <!--
   
   
   <a href="#" class="myButton">Logout</a>



        
   
   -->
  
<?php
session_start();
if(isset($_SESSION['user']))
{
	echo '<a href="logout.php?logout" class="myButton">LOGOUT</a>';
	
}
else {
	
	header("location:login.php");
}

?>
</div>


<p style="text-align:center;color:white">Penetrasyon testi, bir kurumun bili&#351;im sistemlerindeki g&uuml;venlik a&ccedil;&#305;klar&#305;n&#305; &uuml;&ccedil;&uuml;nc&uuml; bir g&ouml;z taraf&#305;ndan kontrol edilmesi ve raporlanmas&#305; s&uuml;recini ifade eder. Bu test, proaktif g&uuml;venli&#287;in temel ad&#305;m&#305; olup s&#305;zma testi olarak da bilinir. Belirlenen bili&#351;im sistemlerine, kurum taraf&#305;ndan belirlenmi&#351; t&uuml;m yollar denenerek s&#305;zmaya &ccedil;al&#305;&#351;&#305;l&#305;r. Amac&#305;, sistemdeki g&uuml;venlik a&ccedil;&#305;klar&#305;n&#305; tespit etmek ve yetkisiz eri&#351;im sa&#287;lamakt&#305;r.</p>

<p style="text-align:center;color:white">Penetrasyon testi, g&uuml;venlik a&ccedil;&#305;&#287;&#305; taramas&#305;, uyumluluk denetimi veya g&uuml;venlik de&#287;erlendirmesi gibi di&#287;er &ccedil;abalardan farkl&#305;l&#305;k g&ouml;sterir. Bu test, g&uuml;venlik a&ccedil;&#305;klar&#305;n&#305; tespit etmekle kalmaz; ayn&#305; zamanda bir kurulu&#351;un bili&#351;im varl&#305;klar&#305;na, verilerine, insanlar&#305;na ve/veya fiziksel g&uuml;venli&#287;ine y&ouml;nelik ger&ccedil;ek d&uuml;nya sald&#305;r&#305;lar&#305;n&#305; aktif olarak kullanarak kan&#305;tlar veya onaylar.</p>

<p style="text-align:center;color:white">Penetrasyon testi, otomatik ara&ccedil;lar&#305;n ve s&uuml;re&ccedil; &ccedil;er&ccedil;evelerinin kullan&#305;m&#305;n&#305; i&ccedil;erebilir ancak sonu&ccedil;ta test uzmanlar&#305;n&#305;n deneyimi ve yetenekleri ile organizasyonun etkisi belirleyicidir. Geli&#351;mi&#351; kar&#351;&#305; &ouml;nlem teknolojileri kullanan otomatik ve geli&#351;mi&#351; a&#287;lar, insan zekas&#305;na kar&#351;&#305; savunmas&#305;z olabilir.</p>

<p style="text-align:center;color:white">Bu test, mevcut g&uuml;venlik kontrollerinin aktif ve yetenekli bir sald&#305;rgan&#305;n ger&ccedil;ek d&uuml;nyadaki etkinli&#287;ini sorgular. Birden fazla sald&#305;r&#305; vekt&ouml;r&uuml;n&uuml; ara&#351;t&#305;rarak farkl&#305; sistemlerdeki g&uuml;venlik a&ccedil;&#305;klar&#305;n&#305;n birle&#351;imini ortaya &ccedil;&#305;karabilir.</p>

<p style="text-align:center;color:white">Penetrasyon testi, do&#287;rulanabilir, yorumlanabilir ve tekrar edilebilir bir metodolojiye dayan&#305;r. Bu kural seti, ba&#351;ar&#305; i&ccedil;in do&#287;ru ve eksiksiz bir &#351;ekilde uyguland&#305;&#287;&#305;nda g&uuml;venilir sonu&ccedil;lar sa&#287;lar.</p>

<p style="text-align:center;color:white">Bizim Penetrasyon Testi hizmetimiz, g&uuml;venli&#287;inizin denetlenmesi ve ba&#351;ar&#305;l&#305; sonu&ccedil;lar elde edilmesi amac&#305;yla tasarlanm&#305;&#351;t&#305;r. Web Uygulama Penetrasyon Testi, A&#287; Penetrasyon Testi, Bulut Penetrasyon Testi, DDoS Penetrasyon Testi, Kablosuz A&#287; Penetrasyon Testi gibi &ccedil;e&#351;itlerimizle, kurumunuza en uygun olan&#305; se&ccedil;erek etkin bir test ger&ccedil;ekle&#351;tirilir.
</p>


</body>

</html>



