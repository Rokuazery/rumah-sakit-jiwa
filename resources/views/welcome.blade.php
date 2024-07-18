<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rumah Sakit Jiwa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <h1 class="font-weight-bold text-center p-5 text-semibold text-uppercase">Rumah Sakit Jiwa Fenli</h1>
    <div class="p-5">
        <h3>Patients</h3>
        <a href="{{ route('patients.create') }}" class="btn btn-primary mb-5">Add Patient +</a>

        <table class="table">
            <thead class="bg-secondary">
                <tr>
                    <th class="bg-secondary text-white" scope="col">#</th>
                    <th class="bg-secondary text-white" scope="col">Name</th>
                    <th class="bg-secondary text-white" scope="col">Gender</th>
                    <th class="bg-secondary text-white" scope="col">Home Address</th>
                    <th class="bg-secondary text-white" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <th scope="row">{{ $patient->id }}</th>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->gender }}</td>
                        <td>{{ $patient->home_address }}</td>
                        <td>
                            <a href="{{ route('patients.edit', $patient) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('patients.destroy', $patient) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
