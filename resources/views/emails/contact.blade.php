# New Contact Form Submission

**Name:** {{ $name }}
**Email:** {{ $email }}
@if($subject)
**Subject:** {{ $subject }}
@endif

---

**Message:**
{{ $message_body }}

---
_This email was sent from your portfolio contact form._