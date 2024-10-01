<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-lg w-full">
        <h1 class="text-2xl font-bold mb-6 text-center">Create Article</h1>
        <form action="{{ route('pdf_authors.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Input for Name -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Article Name
                </label>
                <input name="name" id="name" type="text" placeholder="Enter article name" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Input for Content -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                    Article Content
                </label>
                <textarea name="content" id="content" rows="5" placeholder="Enter article content" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>


            <!-- Input for Thumbnail -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="thumbnail">
                    Thumbnail
                </label>
                <input name="thumbnail" id="thumbnail" type="file" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Dropdown for Is Featured -->
            {{-- <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="is_featured">
                    Is Featured?
                </label>
                <select name="is_featured" id="is_featured" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="featured">Featured</option>
                    <option value="not_featured">Not Featured</option>
                </select>
            </div> --}}

            <!-- Dropdown for Category -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">
                    Category
                </label>
                <select name="category_id" id="category_id" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <!-- Assuming categories come from the server -->
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    <!-- Add more categories here dynamically -->
                </select>
            </div>

            <!-- Hidden Input for Author ID -->
            <input type="hidden" name="author_id" value="{{ auth()->user()->id }}">

            <!-- Input for Slug -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="link_pdf">
                    Link PDF
                </label>
                <input name="link_pdf" id="link_pdf" type="text" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Submit
                </button>
            </div>
        </form>
    </div>
    <!-- CKEditor CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <script>
        // Inisialisasi CKEditor pada textarea dengan id 'content'
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>
