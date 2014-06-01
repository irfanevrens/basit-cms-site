-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 01 Haz 2014, 20:43:36
-- Sunucu sürümü: 5.6.12-log
-- PHP Sürümü: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `cms`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerikler`
--

CREATE TABLE IF NOT EXISTS `icerikler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yazar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `image` text COLLATE utf8_turkish_ci NOT NULL,
  `keyword` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=25 ;

--
-- Tablo döküm verisi `icerikler`
--

INSERT INTO `icerikler` (`id`, `baslik`, `tarih`, `yazar`, `image`, `keyword`, `icerik`) VALUES
(20, 'Zuckerberg: WhatsApp  19 milyar dolar eder', '01.06.14 23:12:26', 'bahadır', 'mobilecon.png', 'mark zuckerberg; whatsapp', 'Mobile World Congress''te sahne alan önemli isimlerden biri de Facebook CEO’su Mark Zuckerberg''di. David Kirkpatrick’in yönettiği oturumda Zuckerberg, WhatsApp satın alması sonrasında ilk kez sahneye çıkmış oldu. Ve Kirkpatrick’in ilk sorusu tabii ki WhatsApp satın alması oldu. 19 milyar dolarlık satın almayı iki şirketin birbirine uyan amaçlarına bağlayan Zuckerberg, insanları birbirine bağlamak misyonunu iki şirketin de benimsediğini paylaştı.\r\n\r\nWhatsApp’ın sağladığı hizmet sayesinde tek başına 19 milyar dolar edeceğini söyleyen Zuckerberg, şirketin iş modelinin Facebook’un sahip olduğu dünyayı birleştirme misyonuna çok uygun olduğunu belirtti. Bugünkü konuşmasının internet.org merkezinde olacağını paylaşan Zuckerberg, tüm insanlığın internete ulaşımının ana amaçları olduğunu belirtti.\r\n\r\nBasit veri erişiminin bile olmadığı ülkeler olduğunu belirten Zuckerberg, 911 gibi acil erişim noktasının bu projede sağlanılmak istenen temel hizmetlerden biri olduğunu belirtti. Bu serviste kullanıcının ücretsiz veya çok ucuz bir şekilde yavaş hızda internete bağlanmasını sağlamak istediklerini dile getiren Zuckerberg, hava durumunu öğrenmeyi, Wikipedia’da bir sayfaya ulaşmayı, basit bir arama yapmayı veya sosyal ağlara bağlanmayı sağlamak istediklerini belirtti.\r\n\r\nGelişmekte olan ülkelerin bazılarında ISP’lerle çeşitli anlaşmalar yaptıklarını belirten Zuckerberg, mobil operatörlerden temel veri erişimini ücretsiz olarak sunmak istediklerini belirterek, birçok operatörle özel ortaklıklar yaptıklarını ama bunların arasında birkaç tane dahil etmek istediklerini açıkladı.\r\n\r\nBildiğiniz gibi ülkemizde de operatörler bir dönem sosyal ağlara erişimi ücretsiz hale getirmişti, hatta bazılarının anlaşmalar'),
(21, 'Mark Zuckerberg Evlendi', '01.06.14 23:16:38', 'bahadır', 'markevlendi.jpg', 'mark, zuckerberg, evlendi', 'Facebook''un kurucusu Mark Zuckerberg''le (28) evlenerek bir anda tüm dünyanın en çok konuştuğu kadın haline gelen Çinli çocuk doktoru Priscilla Chan''in (27) gelinlik için ünlü tasarımcılar yerine adı duyulmamış bir tasarımcıyı tercih ettiği ortaya çıktı.\r\n\r\nSERVETE RAĞMEN UCUZ GELİNLİK\r\nİngiliz Daily Mail Gazetesi''nde yer alan habere göre Chan, Zuckerberg''in 20 milyar dolarlık (36.3 milyar TL) servetine rağmen Los Angeleslı modacı Claire Pettibone imzası taşıyan mütevazı bir gelinlik giymeyi tercih etti. 27 yaşındaki Chan''in giydiği gelinlik modacının internet sitesinde 4 bin 700 dolara (8 bin 600 TL)satılıyor. Chan''in bu gelinliği tercih etmesi çoğu kişi için olduğu kadar Pettibone için de sürpriz oldu. Pettibone, "Ben de herkesle aynı gün öğrendim. Kızımın beşini yaşını kutlamak için ailece Disneyland''a gitmiştik. Eve döndüğümüzde kocam haberleri izlerken heyecanlı bir şekilde ''Hayatım bak senin gelinlik'' diye seslendi" dedi.\r\n\r\nEVLİLİK SEBEBİ TAMAMEN "DUYGUSAL" MI?\r\nÖte yandan Zurcekberg''in servetini korumak için uzun süredir aynı evi paylaştığı Chan''le evlendiği iddia edildi. Çünkü California yasaları, evli olmayan çiftlerde de ayrılık sonrası mal paylaşımı hakkı tanıyor. İşte bu nedenle Zuckerberg''in servetini korumak için evlenip, evlilik sözleşmesi imzaladığı ifade ediliyor.\r\nPriscilla Chan, "işkolik" olan Zuckerberg''e ilişkilerinin sürmesi için "haftada bir gece çıkma ve 100 dakika başbaşa kalma" şartı getirmiş.'),
(22, 'Facebook WhatsApp''ı satın alıyor', '01.06.14 23:24:50', 'bahadır', 'whatsapp.Jpeg', 'mark, whatsapp, satın alıyor', 'Mobil hızlı mesajlaşma servisinde büyümek isteyen Facebook , aylık yaklaşık 450 milyon kullanıcısı olan WhatsApp''ı 19 milyar dolara satın almak için şirket ile anlaşmaya vardığını duyurdu. \r\nŞirketten yapılan açıklamada, WhatsApp için dört milyar dolarlık nakit ödeme yapılacağı, geri kalan 12 milyar doların ise hisse senetleri yöntemiyle ödeneceği belirtildi. Üç milyar dolarlık hisse de WhatsApp''ın kurucuları ve çalışanlarına dağıtılacak. \r\nFacebook Üst Yöneticisi Mark Zuckerberg , ''''WhatsApp dünyada 1 milyar insanı birbirine bağlama yolunda, bu kadar önemli bir dönemeci aşan şirketler zaten inanılmaz değerli'''' diyerek, satın alma işleminin gerçekleşeceğini açıkladı'),
(23, 'Mark Zuckerberg Yapay Zekaya Yatırım Yapıyor', '01.06.14 23:29:09', 'bahadır', 'mark-zuckerberg.png', 'mark, yapay zeka', 'Teknoloji dünyasının Holywood’u Silikon Vadisi’nin şöhretleri bir yapay zeka şirketine yatırım yapıyorlar. Facebook’un kurucusu Mark Zuckerberg, geek aktör Ashton Kutcher ve Tesla Motors CEO’su Elen Musk’ı bir araya getiren şirketse Vicarious. Üçlünün şirketlerinden bağımsız olarak yaptıkları yatırımın miktarıysa 40 milyon dolar.\r\n\r\nYapay zeka, en çok gelecek vaat eden alanlardan biri olarak, son zamanlarda teknoloji şirketlerinin de gözdesi. Geçtiğimiz Ocak ayında Google’ın Deep Mind isimli yapay zeka girişimini satın almıştı. Facebook’un yeni yapay zeka ekibi ise yakın zamanda bir köşe taşı niteliğinde bir çalışmayla yüz eşleme teknolojilerini bir adım ileri taşıdıklarını duyurmuştu.'),
(24, 'Biri Facebook''u durdursun!', '01.06.14 23:39:19', 'bahadır', 'markzuckerberg.jpg', 'facebook, mark zuckerberg', 'Facebook Inc.''in kar ve satışı, şirketin mobil hizmetler için daha fazla reklamcıyı çekmesiyle beklentinin üzerinde geldi. Şirketin ilk çeyrekte net karı, geçen yılın aynı dönemine göre yüzde 193 artarak 219 milyon dolardan, 642 milyon dolara yükseldi. Facebook''un geliri de aynı dönemde yüzde 72 artarak 2,5 milyar dolara yükseldi. Bilanço rakamlarının ardından Facebook''un hisseleri yüzde 4 değerlendi.\r\nFacebook açıklamasına göre ilk çeyrekte mobil reklam gelirleri, toplam gelirlerin yüzde 59''unu oluştururken, geçen yıl bu oran yüzde 30 seviyesindeydi. Facebook''un kurucusu ve Üst Yöneticisi (CEO) Mark Zuckerberg yaptığı açıklamada, şirketin güçlü olduğunu ve büyüdüğünü belirterek, 2014 yılına çok iyi başladıklarını, şirketin misyonunu gerçekleştirmek için çok iyi durumda olduklarını ifade etti.\r\n140 MİLYAR DOLARA YAKLAŞABİLİR\r\n\r\nMobil hızlı mesajlaşma servisinde büyümek isteyen Facebook, bu yılın şubat ayında aylık yaklaşık 450 milyon kullanıcısı olan WhatsApp''ı 19 milyar dolara satın almak için şirketle anlaşmaya vardığını duyurmuştu. Dünya genelinde 1,2 milyar kullanıcıya sahip olan Facebook, WhatsApp''ı ayrı bir servis sağlayıcısı olarak kullanmaya devam edeceğini açıkladı. Dünya genelinde geçen yıl şirketler tarafından 120 milyar dolar dijital reklam harcamaları yapılırken, bu yıl bu rakamın140 milyar dolara yaklaşması bekleniyor.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
