<?php

namespace App\Livewire;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Filament\Notifications\Notification;


class ContactForm extends Component
{

    public $name = "";
    public $surname = "";
    public $email = "";

    public $phone = "";
    public $message = "";


    public function send()
    {


        Mail::to("info@identik.com.tr")->send(new ContactFormMail([
            "name" => $this->name,
            "surname"=>$this->surname,
            "email" => $this->email,
            "phone" => $this->phone,
            "message" => $this->message,
        ]));

        Notification::make()
            ->title(__("Başarıyla Gönderildi"))
            ->body("Talebinizi aldık, en kısa sürede dönüş sağlayacağız.")
            ->success()
            ->send();

        $this->reset();

    }


    public function render()
    {


        $items = [
            [
                "name" => "name",
                "placeholder" => __("İsim"),
                "type" => "text",
                "spanFull" => false

            ],
            [
                "name" => "surname",
                "placeholder" => __("Soyisim"),
                "type" => "text",
                "spanFull" => false


            ],
            [
                "name" => "email",
                "placeholder" => __("E-posta"),
                "type" => "email",
                "spanFull" => true

            ],
            [
                "name" => "phone",
                "placeholder" => __("Telefon"),
                "type" => "text",
                "spanFull" => true

            ],
            [
                "name" => "message",
                "placeholder" => __("Mesaj..."),
                "type" => "textarea",
                "spanFull" => true

            ],


        ];

        return view('livewire.contact-form', ["items" => $items]);
    }
}
