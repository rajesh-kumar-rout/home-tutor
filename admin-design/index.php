<?php require ('./header.php') ?>

<div class="w-full md:w-2/3 mb-6 md:mb-0 mx-auto">
    <form action="#" method="POST" class="bg-white p-8 rounded-lg shadow-lg">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
            <input type="text" id="name" name="name"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required="">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Title</label>
            <input type="email" id="email" name="email"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required="">
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-gray-700 font-bold mb-2">Description</label>
            <input type="tel" id="phone" name="phone"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required="">
        </div>

        <div class="text-center">
            <button type="submit"
                class="bg-blue-500 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:bg-blue-600 transition duration-300">Save</button>
        </div>
    </form>
</div>

<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
      <thead>
        <tr>
          <th class="py-3 px-6 text-left border-b border-gray-300">Name</th>
          <th class="py-3 px-6 text-left border-b border-gray-300">Age</th>
          <th class="py-3 px-6 text-left border-b border-gray-300">Occupation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="py-3 px-6 border-b border-gray-300">Alice</td>
          <td class="py-3 px-6 border-b border-gray-300">28</td>
          <td class="py-3 px-6 border-b border-gray-300">Engineer</td>
        </tr>
        <tr>
          <td class="py-3 px-6 border-b border-gray-300">Bob</td>
          <td class="py-3 px-6 border-b border-gray-300">34</td>
          <td class="py-3 px-6 border-b border-gray-300">Designer</td>
        </tr>
        <tr>
          <td class="py-3 px-6 border-b border-gray-300">Charlie</td>
          <td class="py-3 px-6 border-b border-gray-300">22</td>
          <td class="py-3 px-6 border-b border-gray-300">Developer</td>
        </tr>
      </tbody>
    </table>
  </div>


  <div class="w-full max-w-4xl mx-auto bg-white shadow-md rounded-lg">
    <div class="flex justify-between items-center p-4 bg-gray-200 rounded-t-lg">
      <h2 class="text-xl font-semibold">Users</h2>
      <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
        Add New
      </button>
    </div>
    <table class="min-w-full border-collapse border">
      <thead>
        <tr>
          <th class="py-2 px-4 border">Name</th>
          <th class="py-2 px-4 border">Age</th>
          <th class="py-2 px-4 border">Occupation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="py-2 px-4 border">Alice</td>
          <td class="py-2 px-4 border">28</td>
          <td class="py-2 px-4 border">Engineer</td>
        </tr>
        <tr>
          <td class="py-2 px-4 border">Bob</td>
          <td class="py-2 px-4 border">34</td>
          <td class="py-2 px-4 border">Designer</td>
        </tr>
        <tr>
          <td class="py-2 px-4 border">Charlie</td>
          <td class="py-2 px-4 border">22</td>
          <td class="py-2 px-4 border">Developer</td>
        </tr>
      </tbody>
    </table>
  </div>
<?php require ('./footer.php') ?>