@extends('backend.layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="h2 fs-16 mb-0">Customization Details</h1>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col text-center">
                    <h3>Customer Info</h3>
                    <p><b>Customer Name: </b>{{$customizations->customer_name}}</p>
                    <p><b>Customer Mobile: </b>{{$customizations->customer_mobile}}</p>
                    <p><b>Customer Email: </b>{{$customizations->customer_email}}</p>
                </div>
             </div>
             <div class="row mb-4">
                <div class="col text-left">
                    <p><b>Product Name: </b>{{$customizations->item_name}}</p>
                    <p><b>Product Description: </b>{{$customizations->description}}</p>
                </div>
             </div>
             <div class="row mb-4">
                @php
                    $images= json_decode($customizations->image,true);
                @endphp
                <div class="col" style="justify-content: center;display: flex;">
                    @foreach($images as $key=> $image)
                        <img src="../../public/uploads/preorder/{{ $image }}" alt="Image" class="img-fit" style="width:300px; height:300px; margin:0 15px;">
                    @endforeach
                </div>
                
            </div>
        </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection