<x-mail::message>
# New Message From Website

You have received a new inquiry from your portfolio website.

**Name:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Subject:** {{ $data['subject'] }}

**Message:**  
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
