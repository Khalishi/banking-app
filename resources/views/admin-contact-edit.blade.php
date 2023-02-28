<x-layout>

          <!-- Contact form -->

          <div class="relative py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12 ml-96">
             <h3 class="text-lg font-medium text-blue-600">Edit Contact for: {{ $contact->title }}</h3>
                  <form action="/admin/contacts/{{ $contact->id }}" method="POST" class="mt-14">
                         @csrf
                         @method('PATCH')
                      <div>
                        <label for="title" class="block text-lg font-medium text-warm-gray-900">Title</label>
                      <div class="mt-1">
                      <input type="text" 
                       name="title" 
                       id="title" 
                       value="{{ old('title', $contact->title ) }}"
                       autocomplete="given-name" 
                       class="py-3 px-4 block w-3/5 shadow-sm text-warm-gray-900 focus:ring-blue-600 focus:border-blue-600 border-warm-gray-300 rounded-md"
                       >

                      @error('title')
                          <p class="text-red-500 text-lg">{{ $message }}</p>
                      @enderror
                  </div>
                 
                </div>

                <div class="sm:col-span-2 mt-4">
                    <div class="flex">
                      <label for="description" class="block text-lg font-medium text-warm-gray-900">Description</label>
                      <span id="description-max" class="text-sm text-blue-600 ml-96">Max. 255 characters</span>
                    </div>
                    <div class="mt-1">
                      <textarea id="description" 
                      name="description" 
                      rows="4" 
                      class="py-3 px-4 block w-3/5 shadow-sm text-warm-gray-900 focus:ring-blue-600 focus:border-blue-600 border border-warm-gray-300 rounded-md" 
                      aria-describedby="message-max">
                      {{ old('description', $contact->description) }}
                    </textarea>
                      @error('title')
                          <p class="text-red-500 text-lg">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>

             <div>
                <label for="contact number" class="block text-lg font-medium text-warm-gray-900 mt-4">Contact number</label>
                    <div class="mt-1">
                      <input type="text" 
                      name="contact number" 
                      id="contact number"
                      value="{{ old('contact_number', $contact->contact_number) }}"
                      autocomplete="family-name" 
                      class="py-3 px-4 block w-3/5 shadow-sm text-warm-gray-900 focus:ring-blue-600 focus:border-blue-600 border-warm-gray-300 rounded-md"
                      >

                      @error('title')
                          <p class="text-red-500 text-lg">{{ $message }}</p>
                      @enderror

                    </div>
                  </div>

                  <div>
                    <label for="email" class="block text-lg font-medium text-warm-gray-900 mt-4">Email</label>
                    <div class="mt-1">
                      <input id="email" 
                      name="email" 
                      type="email" 
                      value="{{ old('email', $contact->email) }}"
                      autocomplete="email" 
                      class="py-3 px-4 block w-3/5 shadow-sm text-warm-gray-900 focus:ring-blue-600 focus:border-blue-600 border-warm-gray-300 rounded-md"
                      >
                      @error('title')
                          <p class="text-red-500 text-lg">{{ $message }}</p>
                      @enderror
                  </div>
                </div>

                <div class="sm:col-span-2 sm:flex">
                    <button type="submit" class="mt-2 inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 sm:w-auto">
                      Update
                    </button>
                  </div>

              </div>
         </form>
        
         @if (session()->has('success'))
            <div x-data="{ show: true }"
                 x-init="setTimeout(() => show = false, 4000)"
                 x-show="show"
                 class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl text-sm"
                 
                 >
                <p> {{ session('success') }} </p>
                
            </div>
        @endif

</x-layout>