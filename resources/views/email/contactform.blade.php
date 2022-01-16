@component('mail::message')
# Website message received from {{ request('email') }}

---

{{ request('name') }} wrote:

{{ request('message') }}

---
@endcomponent
