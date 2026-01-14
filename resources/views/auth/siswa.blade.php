<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login sebagai Siswa</title>

        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    </head>
    <body>
        <div
            class="container vh-100 d-flex justify-content-center align-items-center"
        >
            <form action="{{ route('auth.siswa.login') }}" method="post">
                @csrf

                <div class="card border-primary p-5">
                    <h1>
                        Login sebagai
                        <span class="badge bg-primary">Siswa</span>
                    </h1>

                    @error('*')
                      <div
                        class="alert alert-primary"
                        role="alert"
                      >
                        <strong>{{ $message }}</strong>
                      </div>
                    @enderror

                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nis"
                            id="nis"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input
                            type="text"
                            class="form-control"
                            name="kelas"
                            id="kelas"
                            placeholder=""
                        />
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

                    <p>
                        Login sebagai
                        <a href="{{ route('auth.admin') }}">Admin</a>.
                    </p>
                </div>
            </form>

            <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
        </div>
    </body>
</html>
