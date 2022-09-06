@component('mail::message')
The following are the details of customer orders, please confirm immediately :

# Summary Paper:
@component('mail::table')
@isset ($materials)
| Size                           | Quantity                                                   | Material                 |
|--------------------------------|:----------------------------------------------------------:|-------------------------:|
    @foreach ($materials as  $ConCurrent)
|{{ $materials[$loop->index] }}  |{{ number_format($qtys[$loop->index], 2,',','.') }} (PCS)   |{{ $sizes[$loop->index] }}|
    @endforeach
    @else
| Size                           | Quantity                                                 | Material                 |
|--------------------------------|:--------------------------------------------------------:|-------------------------:|
    @foreach ($material as $ConCurrent)
|{{ $material[$loop->index] }}   |{{ number_format($qty[$loop->index], 2,',','.') }} (PCS)  |{{ $size[$loop->index]  }}|
    @endforeach
@endisset

@endcomponent

# Summary Component:
@component('mail::table')
@isset ($components)
| GSM                                | Paper Type                     | Component                     |
|------------------------------------|:------------------------------:|:-----------------------------:|
    @foreach ($components as $ConCurrent)
|{{ $jenisKrtasGSM[$loop->index]}}   |{{ $jenisKrtas[$loop->index] }} |{{$components[$loop->index] }} |
    @endforeach
@else 
| GSM                                                      | Paper Type                          |
|----------------------------------------------------------|:-----------------------------------:|
    @foreach ($component as $ConCurrent)
|{{ number_format($jenis_kertas[$loop->index], 2,',','.')}}|{{ $jenis_kertas_gsm[$loop->index] }}|
    @endforeach
@endisset
@endcomponent

@isset($flattened)  
# Summary Detail Orders  :
    @foreach ($flattened as $expand)
        {{ $expand }}  
    @endforeach
@endisset

@component('mail::button', ['url' => 'https://vpn.krisanthium.com:7070/kop/public/products/customer/building-box'])
Confirm
@endcomponent

Thank you,
Warm greetings 

@EDP team.
# {{ config('app.name') }}
@endcomponent
