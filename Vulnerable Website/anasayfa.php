
<!DOCTYPE html>
<html>
<head>
<title>Injection test</title>
<meta charset="UTF-8">
<style>
.aciklama{
	color:black;
	
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


<p class="aligncenter">
    <img src="pars.jpg" width="280" height="130" />
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

<p class="aciklama">
Penetrasyon testi, kurumun sahip olduğu bilişim sistemlerindeki güvenlik zaafiyetlerinin üçüncü bir göz tarafından kontrol edilmesi ve raporlanması konusudur.
 Proaktif güvenliğin ilk adımı olan bu test, sızma testi olarak da adlandırılır. Kurum tarafından belirlenmiş bilişim sistemlerine, tüm yollar denenerek sızmaya çalışma
 işlemleri yapılır. Bu sızma testindeki amaç, sistemdeki güvenlik açığını bulmakla beraber, yetkili erişimler sağlanmasıdır.Penetrasyon testinin tanımlandığı, 
 yapıldığı ve pazarlandığı birçok farklı yol vardır. Genellikle “güvenlik açığı taraması”, “uyumluluk denetimi” veya “güvenlik değerlendirmesi” yürütülmesi ile 
 karıştırıldığından, penetrasyon testi bu çabaların dışında birkaç kritik yolla durur:Bir sızma testi, güvenlik açıklarını açığa çıkarmakla kalmıyor: Bir kuruluşun 
 BT varlıklarına, verilerine, insanlarına ve / veya fiziksel güvenliğine karşı gerçek dünya saldırı vektörlerini kanıtlamak (veya onaylamak) için bu açıkları 
 aktif olarak kullanmak adına bir sonraki adımı atıyor.Bir penetrasyon testi, otomatik araçların ve süreç çerçevelerinin kullanımını içerebilse de, eninde 
 sonunda, bireyin veya test uzmanlarının, testin getirdiği deneyimin, ve bunlara bağlı aktif bir saldırı bağlamında kullandıkları beceriler ve yetenekleri 
 vardır ve bunlardan en önemlisi; organizasyon.  Gelişmiş karşı önlem teknolojilerini kullanan yüksek oranda otomatik, iyi kaynaşmış ve gelişmiş ağlar, genellikle, 
 insan zihninin kendine özgü niteliğine karşı savunmasızdır.Bir penetrasyon testi şu soruya cevap verecek şekilde tasarlanmıştır: “Mevcut güvenlik kontrollerimin 
 aktif, yetenekli bir saldırganın gerçek dünyadaki etkinliği nedir?” Bunu, gerekli kontrollerin varlığını kontrol eden güvenlik veya uyumluluk denetimleriyle 
 basit bir senaryo oluşturarak  doğru konfigürasyonları karşılayabiliriz. % 100 uyumlu bir kuruluş bile, gerçek dünyada yetenekli bir insan tehdit etmenine 
 karşı savunmasız olabilir.Bir penetrasyon testi, aynı hedefe karşı çoklu saldırı vektörlerinin araştırılmasına izin verir. Çoğunlukla, başarılı bir uzlaşmaya 
 yol açacak farklı sistemlerdeki bilgi veya güvenlik açıklarının birleşimidir. Her ne kadar bir vektör üzerinden kapsamlarını sadece bir hedefle sınırlandıran 
 penetrasyon testi örnekleri olsa da (örneğin, sadece internet tarayıcısı açısından yürütülen bir web uygulama kalem testi), sonuçları her zaman detaylıca göz 
 önünde bulundurulmalıdır : Test değerli sonuçlar vermiş olsa da, sonuçlardan sadece testin yapıldığı bağlamda yararlıdır. Başka bir deyişle, kapsamı ve vektörü
 sınırlamak, gerçek dünyadaki güvenlik riski anlayışını sınırlar.Sızma testlerinde hayati önem taşıtan pentest metodolojisi, doğrulanabilir, yorumlanabilir ve 
 tekrar edilebilir bir teknik ile çalışılmasında rehber niteliğindedir. Daha önce denenmiş ve standart haline getirilmiş bu kurallar doğru ve eksiksiz bir biçimde 
 uygulandığında başarılı sonuçlar verir.Bizler de Penetrasyon Testi hizmetimizle, güvenliğinizin denetlenmesiyle beraber sağlıklı ve başarılı sonuçlar üretmeyi 
 hedefliyoruz. Penetrasyon test çeşitlerimiz; Web Application Pentest, Network Pentest, Cloud Pentest, DDoS Pentest, Wireless Pentest ‘dir. Kurumunuza uygun olanı tercih edilerek, testiniz başarılı bir şekilde gerçekleştirilecektir.
</p>
</body>

</html>
