
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen p-6">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Daftar Buku</h1>

    <div class="max-w-4xl mx-auto mb-4 text-right">
        <a href="{{ url('books/create') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded">
            + Tambah Buku
        </a>
    </div>

    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-700 text-left">
                    <th class="px-4 py-3">Judul Buku</th>
                    <th class="px-4 py-3">Penulis</th>
                    <th class="px-4 py-3">Tahun Terbit</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="border-t hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $book->title }}</td>
                        <td class="px-4 py-2">{{ $book->author }}</td>
                        <td class="px-4 py-2">{{ $book->year }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ url('books/edit/'.$book->id) }}"
                               class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm">
                                Edit
                            </a>

                            <form action="{{ url('books/' . $book->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

