@component('mail::message')
# SODA STORE

Thank you {{$customer->name}} for your purchase. Your invoice ID is {{$invoice->id}}. You can click bellow button to see more item.

@component('mail::button', ['url' => route('homepage')])
Shop more
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
