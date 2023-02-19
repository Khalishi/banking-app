<x-layout>
        <!-- Contact form -->
        <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12 bg-blue-400">
            <h3 class="text-lg font-medium text-warm-gray-900">Create Contact-Info</h3>
                  <form action="/admin/contact/recieve" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                         @csrf
                      <div>
                        <label for="first-name" class="block text-lg font-medium text-warm-gray-900">Title</label>
                      <div class="mt-1">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-blue-600 focus:border-blue-600 border-warm-gray-300 rounded-md">
                  </div>
                </div>

                <div class="sm:col-span-2">
                    <div class="flex justify-between">
                      <label for="message" class="block text-lg font-medium text-warm-gray-900">Description</label>
                      <span id="message-max" class="text-sm text-warm-gray-500">Max. 250 characters</span>
                    </div>
                    <div class="mt-1">
                      <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-blue-600 focus:border-blue-600 border border-warm-gray-300 rounded-md" aria-describedby="message-max"></textarea>
                    </div>
                  </div>

             <div>
                <label for="last-name" class="block text-lg font-medium text-warm-gray-900">Contact number</label>
                    <div class="mt-1">
                      <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-blue-600 focus:border-blue-600 border-warm-gray-300 rounded-md">
                    </div>
                  </div>

                  <div>
                    <label for="email" class="block text-lg font-medium text-warm-gray-900">Email</label>
                    <div class="mt-1">
                      <input id="email" name="email" type="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-blue-600 focus:border-blue-600 border-warm-gray-300 rounded-md">
                  </div>
                </div>

                <div class="sm:col-span-2 sm:flex sm:justify-end">
                    <button type="submit" class="mt-2 w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 sm:w-auto">
                      Save
                    </button>
                  </div>

              </div>
         </form>
</x-layout>