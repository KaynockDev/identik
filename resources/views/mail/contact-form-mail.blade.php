<x-mail::message>
# Yeni İletişim Formu Mesajı

**İsim:**
{{ $details['name'] }}

**Soyisim:**
{{ $details['surname'] }}

**E-posta:**
{{ $details['email'] }}

**Telefon:**
{{ $details['phone'] }}

---

**Mesaj:**
{{ $details['message'] }}
</x-mail::message>
