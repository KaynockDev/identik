<?php

namespace Database\Seeders;

use App\Models\Markdown;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarkdownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                "title" => "Ana Sayfa | Hakkımızda",
                "key" => "about_us",
                "value" => "Id officia dolor nostrud cillum voluptate officia fugiat exercitation excepteur ad. Laboris consectetur amet magna ex proident laboris non tempor occaecat reprehenderit. Proident incididunt aute aliqua reprehenderit dolor consectetur fugiat ea voluptate. Minim amet nisi Lorem occaecat ad. Nulla consequat enim velit sunt ea eu ad sint ipsum. Qui officia aute anim nulla labore cillum. Laborum ex aute incididunt veniam. Voluptate aute mollit minim amet consequat adipisicing. Irure magna consectetur esse aliqua aliqua cupidatat enim. Mollit aliqua sint non aliqua ad tempor. Ad mollit ut veniam ipsum. Id deserunt non minim aliquip. Incididunt tempor incididunt cillum ullamco reprehenderit non nostrud cupidatat eiusmod sint. Tempor eiusmod eiusmod ea elit est officia officia ea reprehenderit voluptate tempor. Sunt qui dolore sit magna ipsum. Dolor dolor ea in commodo enim amet. Anim tempor ad tempor mollit eiusmod."
            ],
            [
                "title" => "Gizlilik Sözleşmesi",
                "key" => "privacy",
                "value" => "1. Giriş
Bu Gizlilik Politikası, İdentik olarak, ziyaretçilerimizin ve kullanıcılarımızın kişisel bilgilerinin gizliliğine verdiğimiz önemi ve bu bilgilerin nasıl toplandığını, kullanıldığını ve korunduğunu açıklamaktadır. Web sitemize erişerek bu Gizlilik Politikası'nı kabul ettiğinizi beyan etmiş olursunuz.
2. Toplanan Bilgiler
İletişim formunu doldururken sizden aşağıdaki kişisel bilgileri talep edebiliriz:
İsim
Telefon numarası
E-posta adresi
İletişim talebinize ilişkin ek bilgiler
3. Bilgilerin Kullanımı
Topladığımız kişisel bilgiler aşağıdaki amaçlarla kullanılmaktadır:
Taleplerinizi yanıtlamak ve sizinle iletişime geçmek
Hizmetlerimizi iyileştirmek ve müşteri memnuniyetini artırmak
Yasal yükümlülüklerimizi yerine getirmek
4. Bilgilerin Korunması
Verilerinizin güvenliğini sağlamak için güncel güvenlik önlemleri kullanmaktayız. Kişisel bilgileriniz, yetkisiz erişime ve ifşaya karşı korunur.
5. Bilgilerin Paylaşımı
Kişisel bilgileriniz hiçbir şekilde üçüncü şahıslarla paylaşılmayacak veya satılmayacaktır. Ancak, yasal gereklilikler çerçevesinde ilgili resmi makamlarla paylaşmak durumunda kalabiliriz.
6. Çerezler (Cookies)
Web sitemiz, deneyiminizi geliştirmek için çerezler kullanabilir. Çerezlerin kullanımıyla ilgili detaylı bilgi için Çerez Politikamıza göz atabilirsiniz.
7. Haklarınız
Kişisel bilgileriniz üzerinde, kanunlar çerçevesinde erişim, düzeltme, silme ve işlemeyi kısıtlama haklarına sahipsiniz. Bu haklarınızı kullanmak için bizimle iletişime geçebilirsiniz.
8. İletişim Bilgileri
Bu Gizlilik Politikası veya kişisel bilgilerinizin kullanımı ile ilgili sorularınız için bizimle info@identik.com.tr veya
+90 542 402 65 60 üzerinden iletişime geçebilirsiniz."
            ],
            [
                "title" => "KVKK",
                "key" => "kvkk",
                "value" => "1. Veri Sorumlusunun Kimliği
6698 sayılı Kişisel Verilerin Korunması Kanunu (\"KVKK\") uyarınca, [Dişçi Kliniği Adı] olarak, veri sorumlusu sıfatıyla, kişisel verilerinizi aşağıda belirtilen kapsamda işlemekteyiz.
2. Kişisel Verilerin İşlenme Amaçları
İnternet sitemiz (www.identik.com.tr) aracılığıyla ilettiğiniz kişisel verileriniz;
Talep ve şikayetlerinizi yanıtlamak,
Randevu ve iletişim taleplerinizi işlemek,
Sunulan hizmetlerin kalitesini artırmak ve müşteri memnuniyetini sağlamak,
Hizmetlerimiz hakkında bilgi vermek ve sizleri bilgilendirmek,
Yasal yükümlülüklerimizi yerine getirmek,
Kalite, bilgi güvenliği ve hukuki işlemlerimizin yönetimi gibi amaçlarla işlenmektedir.
3. İşlenen Kişisel Veriler
İletişim formu veya diğer kanallar aracılığıyla sağladığınız kişisel veriler şunlardır:
Ad ve soyad,
İletişim bilgileriniz (telefon numarası, e-posta adresi),
Talep ve şikayetlerinize yönelik açıklamalar ve ek bilgiler.
4. Kişisel Verilerin Toplanma Yöntemi ve Hukuki Sebebi
Kişisel verileriniz, dijital ortamda bulunan iletişim formları, telefon görüşmeleri veya e-posta yazışmaları aracılığıyla toplanmaktadır. Kişisel verileriniz, KVKK'nın 5. ve 6. maddelerinde belirtilen;
Kanunlarda açıkça öngörülmesi,
Veri sorumlusunun hukuki yükümlülüğünü yerine getirebilmesi için zorunlu olması,
Bir hakkın tesisi, kullanılması veya korunması için veri işlemenin zorunlu olması,
Temel hak ve özgürlüklerinize zarar vermemek kaydıyla veri sorumlusunun meşru menfaatleri için zorunlu olması hukuki sebeplerine dayanılarak işlenmektedir.
5. Kişisel Verilerin Kimlere ve Hangi Amaçla Aktarılabileceği
Toplanan kişisel verileriniz;
Yasal yükümlülükler doğrultusunda yetkili kamu kurum ve kuruluşlarına,
İş ortaklarımız ve tedarikçilerimiz gibi üçüncü taraflara, yalnızca yukarıda belirtilen amaçlarla sınırlı olmak kaydıyla aktarılabilecektir.
6. Kişisel Verilerin Saklanma Süresi
Kişisel verileriniz, işleme amacı ortadan kalktığında veya yasal saklama süreleri dolduğunda silinmekte, yok edilmekte veya anonim hale getirilmektedir.
7. İlgili Kişinin Hakları
KVKK’nın 11. maddesi uyarınca, kişisel veri sahibi olarak, veri sorumlusuna başvurarak aşağıdaki haklara sahipsiniz:
Kişisel verilerinizin işlenip işlenmediğini öğrenme,
Kişisel verileriniz işlenmişse buna ilişkin bilgi talep etme,
Kişisel verilerinizin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,
Yurt içinde veya yurt dışında kişisel verilerinizin aktarıldığı üçüncü kişileri bilme,
Kişisel verilerinizin eksik veya yanlış işlenmiş olması halinde bunların düzeltilmesini isteme,
KVKK kapsamında kişisel verilerinizin silinmesini veya yok edilmesini isteme,
Kişisel verilerinizin düzeltilmesi veya silinmesi halinde, bu işlemin kişisel verilerinizin aktarıldığı üçüncü kişilere bildirilmesini isteme,
İşlenen verilerin analiz edilmesi suretiyle aleyhinize bir sonucun ortaya çıkmasına itiraz etme,
Kişisel verilerinizin kanuna aykırı olarak işlenmesi sebebiyle zarara uğramanız halinde zararınızın giderilmesini talep etme.
Bu haklarınıza ilişkin taleplerinizi, www.identik.com adresindeki iletişim formunu kullanarak veya info@identik.com.tr üzerinden bizimle iletişime geçerek iletebilirsiniz. Talebiniz en kısa sürede ve en geç 30 gün içinde ücretsiz olarak sonuçlandırılacaktır. Ancak, işlemin ek bir maliyeti gerektirmesi halinde, KVKK’nın belirlediği tarifeye göre tarafınızdan ücret talep edilebilir.
8. Gizlilik ve Güvenlik
Verilerinizin güvenliğini sağlamak için uygun teknik ve idari önlemler almaktayız. Bilgileriniz yetkisiz erişim, kaybolma, yanlış kullanım, ifşa edilme veya değiştirilme riskine karşı korunmaktadır."
            ],


        ];

        foreach ($items as $item) {
            Markdown::create($item);
        }
    }
}
