<!DOCTYPE html>
<html>
<head>
    <title>Edit Booking</title>
</head>
<body>

    <h1>Edit Status Booking: {{ $bookings->name }} (NIM: {{ $bookings->nim }})</h1>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.bookings.update', $booking->id) }}">
        @csrf
        @method('PUT') 

        <div>
            <label for="status">Ubah Status:</label>
            <select name="status" id="status" required>
                <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Menunggu Konfirmasi</option>
                <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Dikonfirmasi</option>
                <option value="rejected" {{ $booking->status == 'rejected' ? 'selected' : '' }}>Ditolak</option>
            </select>
            @error('status')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Perbarui Status</button>
        <a href="{{ route('admin.dashboard') }}">Batal</a> 
    </form>

</body>
</html>