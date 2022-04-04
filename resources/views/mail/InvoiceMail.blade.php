@component('mail::message')
# SODA STORE

Thank you <b>{{$customer->name}}</b> for your purchase. Your invoice ID is <b>{{$invoice->id}}</b>. You can click bellow button to see more item.

@component('mail::button', ['url' => route('homepage')])
Shop more
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
