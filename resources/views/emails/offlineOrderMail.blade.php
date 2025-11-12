@component('mail::message')
# Hello {{ auth()->user()->name }},

We have successfully received your request for the following items:

## Order Reference No. {{$content['reference_no']}}

@foreach($content['items'] as $item)
- **Item #{{$loop->iteration}}**: {{$item['name']}} - **${{$item['price']}}**
@endforeach

## Total Amount: **${{$content['total']}}**

Our representatives will contact you soon regarding your order payment.

Happy Shopping!

Thanks,<br>
{{ config('app.name') }}
@endcomponent
