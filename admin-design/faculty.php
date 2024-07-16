<?php require ('./header.php') ?>

<div class="w-full md:w-2/3 mb-6 md:mb-0 mx-auto">
    <form action="#" method="POST" class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="mb-6 text-xl font-bold text-center">Create New Faculty</h2>
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
            <input type="text" id="name" name="name"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required="">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Image</label>
            <div class="max-w-sm w-full bg-white p-4 shadow-md rounded-lg">
                <!-- Image Preview -->
                <img id="image-preview" src="https://via.placeholder.com/150"
                    class="mt-1 mb-4 w-24 h-24 object-cover rounded-md">


                <!-- Remove and Change Options -->
                <div class="flex items-center gap-3">
                    <!-- Remove Button -->
                    <button id="remove-image" type="button"
                        class="px-3 py-1.5 text-sm font-semibold bg-red-500 text-white rounded hover:bg-red-600">Remove</button>

                    <!-- Change Button -->
                    <label for="image"
                        class="px-4 py-1.5 text-sm font-semibold bg-blue-500 text-white rounded cursor-pointer hover:bg-blue-600">Change</label>
                    <input type="file" id="image" name="image" class="hidden">
                </div>
            </div>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Specialist</label>
            <input type="email" id="email" name="email"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required="">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Description</label>
            <input type="email" id="email" name="email"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required="">
        </div>

        <div class="text-center">
            <button type="submit"
                class="bg-blue-500 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:bg-blue-600 transition duration-300">Save</button>
        </div>
    </form>

    <script>
    // jQuery to handle image selection and removal interactions
    $(document).ready(function() {
      const imageInput = $('#image');
      const imagePreview = $('#image-preview');

      // Handle image preview on file selection
      imageInput.on('change', function() {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
            imagePreview.attr('src', e.target.result);
          }
          reader.readAsDataURL(file);
        }
      });

      // Handle image removal
      $('#remove-image').on('click', function() {
        imagePreview.attr('src', 'https://via.placeholder.com/150'); // Placeholder URL or empty image
        imageInput.val(''); // Clear the file input
      });
    });
  </script>
</div>

<?php require ('./footer.php') ?>