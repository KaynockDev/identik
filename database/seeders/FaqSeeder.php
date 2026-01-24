<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'İlk randevumda ne beklemeliyim?',
                'question_en' => 'What should I expect at my first appointment?',
                'answer' => '<p>İlk randevunuzda detaylı bir ağız muayenesi yapılacak, diş sağlığınız değerlendirilecek ve size uygun tedavi planı sunulacaktır. Gerekirse röntgen çekimi de yapılabilir.</p>',
                'answer_en' => '<p>At your first appointment, a detailed oral examination will be performed, your dental health will be evaluated, and a suitable treatment plan will be presented to you. X-rays may also be taken if necessary.</p>',
                'order' => 1,
                'is_active' => true,
                'show_on_homepage' => true,
            ],
            [
                'question' => 'Diş beyazlatma işlemi güvenli midir?',
                'question_en' => 'Is teeth whitening safe?',
                'answer' => '<p>Evet, profesyonel diş beyazlatma işlemi güvenlidir. Uzman diş hekimleri tarafından yapıldığında ve uygun konsantrasyonlarda kullanıldığında herhangi bir zarar vermez. İşlem sonrası hafif hassasiyet normal bir durumdur.</p>',
                'answer_en' => '<p>Yes, professional teeth whitening is safe. When performed by expert dentists and used in appropriate concentrations, it does not cause any harm. Mild sensitivity after the procedure is normal.</p>',
                'order' => 2,
                'is_active' => true,
                'show_on_homepage' => true,
            ],
            [
                'question' => 'Çocuklar için diş muayenesi ne zaman başlamalı?',
                'question_en' => 'When should dental checkups start for children?',
                'answer' => '<p>Çocukların ilk diş muayenesi ilk diş çıktıktan sonra veya en geç 1 yaşına kadar yapılmalıdır. Düzenli kontroller 3 yaşından itibaren 6 ayda bir yapılmalıdır. Erken başlanan diş bakımı çocukların diş sağlığı için çok önemlidir.</p>',
                'answer_en' => '<p>Children\'s first dental checkup should be done after the first tooth comes out or at the latest by the age of 1. Regular checkups should be done every 6 months starting from the age of 3. Early dental care is very important for children\'s dental health.</p>',
                'order' => 3,
                'is_active' => true,
                'show_on_homepage' => true,
            ],
            [
                'question' => 'Diş implantı ne kadar sürer?',
                'question_en' => 'How long does a dental implant take?',
                'answer' => '<p>Diş implantı tedavisi genellikle 3-6 ay sürer. Bu süre kemik yapısına, implant sayısına ve kişinin iyileşme hızına göre değişebilir. İmplant yerleştirildikten sonra kemik ile kaynaşması için 2-3 ay beklenir.</p>',
                'answer_en' => '<p>Dental implant treatment usually takes 3-6 months. This duration may vary depending on bone structure, number of implants, and the person\'s healing rate. After the implant is placed, 2-3 months are waited for it to fuse with the bone.</p>',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Diş eti hastalığı nasıl tedavi edilir?',
                'question_en' => 'How is gum disease treated?',
                'answer' => '<p>Diş eti hastalığının tedavisi hastalığın şiddetine göre değişir. Hafif durumlarda profesyonel temizlik yeterli olabilirken, ileri durumlarda cerrahi müdahale gerekebilir. Erken teşhis ve tedavi çok önemlidir.</p>',
                'answer_en' => '<p>The treatment of gum disease varies depending on the severity of the disease. While professional cleaning may be sufficient in mild cases, surgical intervention may be required in advanced cases. Early diagnosis and treatment are very important.</p>',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'question' => 'Sigara diş sağlığını nasıl etkiler?',
                'question_en' => 'How does smoking affect dental health?',
                'answer' => '<p>Sigara diş eti hastalıklarına, diş çürüklerine, ağız kanserine ve diş kaybına neden olabilir. Ayrıca diş beyazlatma ve implant tedavilerinin başarısını olumsuz etkiler. Sigarayı bırakmanız diş sağlığınız için çok önemlidir.</p>',
                'answer_en' => '<p>Smoking can cause gum diseases, tooth decay, oral cancer, and tooth loss. It also negatively affects the success of teeth whitening and implant treatments. Quitting smoking is very important for your dental health.</p>',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
