<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dash') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}

    <div class="admin content">
        <div class="sidebar">
          <button class="sidebar__tablinks active" data-target="add-product">Add product</button>
          <button class="sidebar__tablinks" data-target="add-category">Add category</button>
          <button class="sidebar__tablinks" data-target="view-products">View products</button>
        </div>
    
        <main class="main">
          <div id="add-product" class="tabcontent">
            <h3>Add new product</h3>
            <x-product-add-form :categories="$categories"></x-product-add-form>
          </div>

          <div id="add-category" class="tabcontent">
            <h3>Add new category</h3>
            <x-category-add-form></x-category-add-form>
            <div class="category-list">
              <h4>Category list</h4>
              @foreach($categories as $category)
                <div class="category-item">
                  <p>{{$category->title}}</p>
                  <a href="/category/delete/{{$category->id}}" onclick="return confirm('When deleting category, all products from this category will be deleted as well. Are you sure?')"><button>Delete</button></a>
                </div>
              @endforeach
            </div>
            @if(isset($status))
              <p>{{$status}}</p>
            @endif
          </div>

          <div id="view-products" class="tabcontent">
            <h3>View all products</h3>
            <p>Tokyo is the capital of Japan.</p>
          </div>
        </main>
    </div>
</x-app-layout>
