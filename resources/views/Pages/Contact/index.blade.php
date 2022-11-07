@extends('Layouts.app')
@section('content')
    <!-- Product Catagories Area Start -->
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <form class="row g-3" action="{{ route('contact.store') }}" method="POST">
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Email</label>
                          <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                          <label for="inputAddress" class="form-label">Subject</label>
                          <input type="text" class="form-control" id="inputAddress" >
                        </div>
                        <div class="col-12">
                          <label for="inputAddress2" class="form-label">Message</label>
                          <textarea name="Message" class="form-control" id="Message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-12 mt-3">
                          <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                      </form>
                </div>
            </div>


    </div>
    <!-- Product Catagories Area End -->
@endsection
