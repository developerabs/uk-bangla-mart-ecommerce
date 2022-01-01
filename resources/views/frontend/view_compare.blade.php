@extends('frontend.layouts.app')
@section('content')

<tr>
    <th scope="row">{{ translate('Price')}}</th>
    @foreach (Session::get('compare') as $key => $item)
        @php
            $product = \App\Models\Product::find($item);
        @endphp
        <td>
            @if(home_base_price($product) != home_discounted_base_price($product))
                <del class="fw-600 opacity-50 mr-1">{{ home_base_price($product) }}</del>
            @endif
            <span class="fw-700 text-primary">{{ home_discounted_base_price($product) }}</span>
        </td>
    @endforeach
</tr>
@endsection