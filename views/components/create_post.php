<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/?plugins=forms"></script>
</head>
<body>
    
<div>
      <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
          <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold underline decoration-blue-600">
              Create Register
            </h1>
          </div>

          <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
            <form method="POST" action="#">
              <!-- Title -->
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  Title
                </label>

                <input
                  class="block w-full mt-1 border-gray-400 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="email" placeholder="180" />
              </div>

              <!-- Description -->
              <div class="mt-4">
                <label class="block text-sm font-bold text-gray-700" for="password">
                  Description
                </label>
                <textarea name="description"
                  class="block w-full mt-1 border-gray-400 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  rows="4" placeholder="400"></textarea>
              </div>

              <div class="flex items-center justify-start mt-4 gap-x-2">
                
                <form action="#">
                  <button type="submit"
                    class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-blue-500 hover:bg-blue-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                    Save
                  </button>
                </form>
                
                <form action="/crud_php_sql/views/index.php">
                  <button type="submit"
                    class="px-6 py-2 text-sm font-semibold text-gray-100 bg-red-400 rounded-md shadow-md hover:bg-red-600 focus:outline-none focus:border-red-900 focus:ring ring-red-300">
                    Cancel
                  </button>
                </form>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</body>
</html>