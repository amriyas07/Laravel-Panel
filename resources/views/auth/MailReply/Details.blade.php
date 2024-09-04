@include('auth.includes.head')

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Account Registered Successfully</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Dear {{$register->name}},<br><br>
                            Welcome to our platform! Your account has been created successfully.
                        </p>
                        <div class="alert alert-secondary">
                            <strong>Account Details:</strong><br>
                            Username: {{$register->email}}<br>
                            {{-- Username: [username] --}}
                        </div>
                        <p>If you have any questions or need assistance, please contact our support team.</p>
                        <p>Best Regards,<br> The Mr DeenBro Team</p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{route('home')}}" class="btn btn-secondary">Go to Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>