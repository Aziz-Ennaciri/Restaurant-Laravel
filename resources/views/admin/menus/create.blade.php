<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex m-2 p-2 justify-end">
              <a href="{{ route('admin.menus.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Menu</a>
          </div>
          <div class="m-2 p-2 bg-slate-100 rounded">
              <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                  <form method="POST" action="{{route('admin.menus.store')}}" enctype="multipart/form-data">
                    @csrf
                      <div class="sm:col-span-6">
                          <label for="title" class="block text-sm font-medium text-gray-700">Name</label>
                          <div class="mt-1">
                              <input type="text" id="name"  name="name" class="block w-full transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" />
                          </div>
                      </div>
                      <div class="sm:col-span-6">
                          <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                          <div class="mt-1">
                              <input type="file" id="image" name="image" class="block w-full transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" />
                          </div>
                      </div>

                      <div class="sm:col-span-6 pt-5">
                        <label for="body" class="block text-sm font-medium text-gray-700">Price</label>
                        <div class="mt-1">
                          <input type="number" min="0.00" max="10000.00" step="0.01" id="price" name="price" >
                        </div>
                    </div>

                      <div class="sm:col-span-6 pt-5">
                          <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
                          <div class="mt-1">
                              <textarea id="description" rows="3" name="description" class="shadow-sm focus:ring-indigo-500 bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                          </div>
                      </div>
                      <div class="sm:col-span-6 pt-5">
                          <label for="body" class="block text-sm font-medium text-gray-700">Categories</label>
                          <div class="mt-1">
                              <select id="categories" name="categories[]" class="form-multiselect block w-full mt-1" multiple>
                                  @foreach ($categories as $category)
                                  <option value="{{$category->id}}">{{ $category->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="mt-6 p-4">
                          <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</x-admin-layout>
