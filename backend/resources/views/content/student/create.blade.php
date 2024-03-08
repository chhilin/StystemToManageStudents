@extends('layouts/contentNavbarLayout')

@section('title', 'User Card - UI elements')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('vendor-script')
<script src="{{ asset('assets/vendor/libs/masonry/masonry.js') }}"></script>
@endsection

@section('page-script')
<script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold">User Create </h5>
</div>
<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                    @csrf
                    @include('content.user.form')
                    <br>
                    <a href="{{ url('user') }}" class="btn btn-secondary me-1">Cancel</a>
                    <button type="submit" class="btn" style="background-color: #009DE1; color:white">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- java script --}}
<script>
    $(document).ready(function() {
        $('#basic-default-fullname, #upload').on('input change', function() {
            $('#basic-default-fullname-error').hide();
            $(this).removeClass('is-invalid');
        });
    });
    $(document).ready(function() {
        // Initialize Croppie
        var croppie = new Croppie(document.getElementById('croppie-container'), {
            viewport: {
                width: 150,
                height: 150,
                type: 'circle'
            },
            boundary: {
                width: 200,
                height: 200
            },
        });

        // Handle file input change
        $('#upload').on('change', function() {
            console.log(1);
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    // Bind image to Croppie
                    croppie.bind({
                        url: e.target.result
                    });
                    // Open cropping modal
                    // $('#crop-modal').modal('show');
                };
                reader.readAsDataURL(input.files[0]);
                document.getElementById('img').style.display = 'none'
                document.getElementById('croppie-container').style.display = 'block';
                document.getElementById('crop-button').style.display = 'block';
            }
        });

    });
</script>
