<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PDF Author</title>
</head>

<body>
    <h1>Create PDF Author</h1>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pdf_authors.store') }}" method="POST">
        @csrf
        <div>
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" required>
                <option value="">Select a Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="link_pdf">PDF Link:</label>
            <input type="text" name="link_pdf" id="link_pdf" value="{{ old('link_pdf') }}" required>
            @error('link_pdf')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>
