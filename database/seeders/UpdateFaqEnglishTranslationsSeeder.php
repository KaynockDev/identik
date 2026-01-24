<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class UpdateFaqEnglishTranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqUpdates = [
            [
                'question' => 'İlk randevumda ne beklemeliyim?',
                'question_en' => 'What should I expect at my first appointment?',
                'answer_en' => '<p>At your first appointment, a detailed oral examination will be performed, your dental health will be evaluated, and a suitable treatment plan will be presented to you. X-rays may also be taken if necessary.</p>',
            ],
            [
                'question' => 'Diş beyazlatma işlemi güvenli midir?',
                'question_en' => 'Is teeth whitening safe?',
                'answer_en' => '<p>Yes, professional teeth whitening is safe. When performed by expert dentists and used in appropriate concentrations, it does not cause any harm. Mild sensitivity after the procedure is normal.</p>',
            ],
            [
                'question' => 'Diş implantı ne kadar sürer?',
                'question_en' => 'How long does dental implant treatment take?',
                'answer_en' => '<p>Dental implant treatment usually takes 3-6 months. This duration may vary depending on your bone structure, healing rate, and treatment plan. Time is needed for the implant to fuse with the bone after placement.</p>',
            ],
            [
                'question' => 'Çocuklar için diş muayenesi ne zaman başlamalı?',
                'question_en' => 'When should dental check-ups start for children?',
                'answer_en' => '<p>Children\'s first dental check-up should be done after the first tooth comes out or at the latest by the age of 1. Regular check-ups are recommended every 6 months. Dental care habits that start at an early age last a lifetime.</p>',
            ],
            [
                'question' => 'Diş eti hastalığı nasıl tedavi edilir?',
                'question_en' => 'How is gum disease treated?',
                'answer_en' => '<p>The treatment of gum disease varies depending on the severity of the disease. While professional cleaning may be sufficient in mild cases, surgical intervention may be required in advanced cases. Early diagnosis and treatment are very important.</p>',
            ],
            [
                'question' => 'Sigara diş sağlığını nasıl etkiler?',
                'question_en' => 'How does smoking affect dental health?',
                'answer_en' => '<p>Smoking can cause gum diseases, tooth decay, oral cancer, and tooth loss. It also negatively affects the success of teeth whitening and implant treatments. Quitting smoking is very important for your dental health.</p>',
            ],
        ];

        foreach ($faqUpdates as $update) {
            $faq = Faq::where('question', $update['question'])->first();
            if ($faq) {
                $faq->update([
                    'question_en' => $update['question_en'],
                    'answer_en' => $update['answer_en'],
                ]);
            }
        }
    }
}
