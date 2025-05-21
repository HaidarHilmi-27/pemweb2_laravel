<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg mx-auto mt-10">
        <h1 class="text-3xl font-extrabold text-center text-gray-900 mb-8">Tambah Buku Baru</h1>

        <form action="{{ url('/books/store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-gray-800 font-semibold mb-2">Judul Buku</label>
                <input id="title" type="text" name="title" value="{{ old('title') }}"
                    class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                    placeholder="Masukkan judul buku...">
                @error('title') <small class="text-red-600 mt-1 block">{{ $message }}</small> @enderror
            </div>

            <div>
                <label for="author" class="block text-gray-800 font-semibold mb-2">Penulis</label>
                <input id="author" type="text" name="author" value="{{ old('author') }}"
                    class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                    placeholder="Masukkan nama penulis...">
                @error('author') <small class="text-red-600 mt-1 block">{{ $message }}</small> @enderror
            </div>

            <div>
                <label for="year" class="block text-gray-800 font-semibold mb-2">Tahun Terbit</label>
                <input id="year" type="number" name="year" value="{{ old('year') }}"
                    class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                    placeholder="Masukkan tahun terbit...">
                @error('year') <small class="text-red-600 mt-1 block">{{ $message }}</small> @enderror
            </div>

            <div class="flex justify-between items-center mt-8">
                <a href="{{ url('/books') }}" class="text-blue-600 hover:underline text-sm font-medium">← Kembali ke daftar</a>
                <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-md shadow-md transition duration-200">
                    Simpan
                </button>
            </div>
        </form>
    </div>

</body>
</html>
