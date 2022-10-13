<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TabunganKu</title>
    
    <link rel="stylesheet" href="/assets/css/login.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/lineicons.css" />
</head>
<body>
    <div class="wadah d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-3">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <h4 class="text-center text-bold mb-2 text-primary">LOGIN</h4>
                    Masukkan email dan password anda untuk login
                    <hr>
                </div>

                <form action="login" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="email" class="mb-2 text-secondary">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="example@gmail.com">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group  mb-3">
                        <label for="password" class="mb-2 text-secondary">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mt-4 d-flex justify-content-center" >
                        <button type="submit" class="btn btn-block btn-outline-secondary rounded-pill px-5">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>