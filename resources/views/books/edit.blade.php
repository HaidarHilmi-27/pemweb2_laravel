<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Edit Buku</h1>

        <form action="{{ url('/books/update/' . $book->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Judul Buku</label>
                <input type="text" name="title" value="{{ old('title', $book->title) }}"
                    class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('title')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Penulis</label>
                <input type="text" name="author" value="{{ old('author', $book->author) }}"
                    class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('author')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Tahun Terbit</label>
                <input type="number" name="year" min="1900" max="2155" value="{{ old('year', $book->year) }}"
                    class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('year')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ url('/books') }}" class="text-blue-600 hover:underline text-sm">← Kembali</a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

</body>
</html>
