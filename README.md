# LaravelBackend
Kartaca Görev 2
Backend Yapıldı (Laravel servisler)
Frontend Yapılamadı (Vue js ile backend arası post request isteklerinde yaşadığım sorunları çözemediğimden frontend geliştirme kismini yapamadım, views kisimlarını oluşturamadım.)

Laravel ile backend kisminda servisler yazıldı.
Bu servisler ProductController , AdminController , CustomerController olarak 3 Controller içinde yazıldı.
ProductController:
1.Tüm ürünleri çekme 
2.Tüm kategorileri getirme
3.Belirli bir kategorideki tüm ürünleri çekme
CustomerController:
1.Müşteri Kayıt İşlemleri
2.Müşteri Giriş işlemleri
3.Sepete Ürün ekleme
4.Sepetten ürün çıkarma
5.Sepetteki ürünleri görüntüleme(getirme)
AdminController
1.Admin Girişi
2.Müşterileri getirme
3.Yeni ürün ekleme
4.Ürün silme
5.Ürün güncelleme
6.Yeni kategori ekleme
7.Kategori silme
8.Kategori güncelleme

Controller içindeki tüm servisler post method için yazıldı.
Controllers içinde tanımlı tüm servisler için web.php de routes tanımları yapıldı.
Servislerin database bağlantıları için Modeller Açıldı(Admin.php, Basket.php, Category.php, Customer.php, Product.php).
Database içindeki tüm tablolar için database/migrations içinde migrations oluşturuldu.
Tüm migrations sayfaları için bir seed sayfası açıldı ve örnek veriler girildi.
