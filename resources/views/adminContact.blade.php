<x-layout>
    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col mt-40">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class=" divide-y divide-gray-200">
          
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($contacts as $contact)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class=" text-gray-900">{{ $contact->title }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                   Saved
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right font-medium">
                <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
              </td>
            </tr>
            @endforeach

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</x-layout>
