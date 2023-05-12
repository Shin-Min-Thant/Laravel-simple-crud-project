@extends("Layout.master");
@section('title')
    <title>Home Page</title>
@endsection

@section("body")
            <!-- Header -->
            <header id="header" class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text-container">
                                <h1 class="h1-large">CRUD Project with Laravel</h1>
                                <p class="p-large">This is creating customers list for project offered by Run Free Education IT Department which warmly welcomes all learners who join CDM movement.</p>
                            </div> <!-- end of text-container -->
                        </div> <!-- end of col -->
                        <div class="col-lg-6">

                            <!-- Get Quote Form -->
                            <div class="form-container">
                                <form action="{{route('create')}}"  method="POST" id="getQuoteForm">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control-input" id="gname" >
                                        <label class="label-control" for="gname">Name</label>
                                        <p class="text-danger float-start">
                                            @error('name')
                                          {{$message}}

                                        @enderror
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control-input" id="gemail" >
                                        <label class="label-control" for="gemail">Email</label>
                                    <p class="text-danger float-start">
                                        @error('email')
                                        {{$message}}

                                      @enderror
                                    </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control-input" id="gphone" >
                                        <label class="label-control" for="gphone">Phone</label>
                                        <p class="text-danger float-start">
                                            @error('phone')
                                            {{$message}}

                                          @enderror
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control-select" name="address" id="gselect" >
                                            <option class="select-option" value="" disabled selected>Select Address</option>
                                            <option class="select-option" value="Ygn">Yangon</option>
                                            <option class="select-option" value="Mdy">Madalay</option>
                                            <option class="select-option" value="Ss">Shan State</option>
                                            <option class="select-option" value="Kc">Kachin</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                        <p class="text-danger float-start">
                                            @error('address')
                                            {{$message}}

                                          @enderror
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control-submit-button">Create Customer</button>
                                    </div>
                                </form>
                            </div> <!-- end of form-container -->
                            <!-- end of get quote form -->

                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </header> <!-- end of header -->
            <!-- end of header -->
@endsection
