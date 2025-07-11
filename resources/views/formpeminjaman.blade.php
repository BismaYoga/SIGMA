<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
</head>
<body>

    <!-- @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif -->

    <form method="POST" action="{{ route('mahasiswa.store') }}">
        @csrf

        <div>
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" id="nama" name="nama" required>
            @error('nama')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>
            @error('nim')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Simpan Data</button>
    </form>

</body>
</html>