<?php

namespace App\Console\Commands;

use App\Models\Faq;
use Illuminate\Console\Command;

class ReorderFaqs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'faqs:reorder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reorder all FAQs to ensure sequential order numbers';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Reordering FAQs...');
        
        $faqs = Faq::orderBy('order')->get();
        $count = $faqs->count();
        
        if ($count === 0) {
            $this->warn('No FAQs found to reorder.');
            return;
        }
        
        $this->info("Found {$count} FAQs to reorder.");
        
        $bar = $this->output->createProgressBar($count);
        $bar->start();
        
        foreach ($faqs as $index => $faq) {
            $faq->update(['order' => $index + 1]);
            $bar->advance();
        }
        
        $bar->finish();
        $this->newLine();
        $this->info('FAQ reordering completed successfully!');
        
        // Show the new order
        $this->newLine();
        $this->info('New FAQ order:');
        $reorderedFaqs = Faq::orderBy('order')->get();
        
        foreach ($reorderedFaqs as $faq) {
            $this->line("  {$faq->order}. {$faq->question}");
        }
    }
}
