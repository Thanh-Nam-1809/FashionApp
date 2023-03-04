<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form
        action="{{ route('home.store') }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <label for="is_published" class="text-gray-500 text-2xl">
            Is Published
        </label>

        <input
            type="text"
            name="title"
            placeholder="Title...">

        <input
            type="text"
            name="content"
            placeholder="Content...">

        <input
            type="number"
            name="price"
            placeholder="Price...">

        <textarea
            name="description"
            placeholder="description..."></textarea>

        <div>
            <label >
                    <span>
                        Select a file
                    </span>
                <input
                    type="file"
                    name="image_path"
                    class="hidden">
            </label>
        </div>

        <input
            type="text"
            name="gender"
            placeholder="Gender...">

        <input
            type="text"
            name="detail"
            placeholder="Detail...">

        <input
            type="text"
            name="condition"
            placeholder="Condition...">

        <button
            type="submit">
            Submit Post
        </button>
    </form>
</body>
</html>
