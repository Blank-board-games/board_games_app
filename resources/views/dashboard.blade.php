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
          <button class="sidebar__tablinks" data-target="view-orders">View orders</button>
        </div>
    
        <main class="main">
          <div id="add-product" class="tabcontent">
            <h3>Add new product</h3>
            @if (Session::has('message_prod_add'))
              <div class="session-message">{{ Session::get('message_prod_add') }}</div>
            @endif
            <x-product-add-form :categories="$categories"></x-product-add-form>
          </div>

          <div id="add-category" class="tabcontent">
            <h3>Add new category</h3>
            @if (Session::has('message_cat_add'))
              <div class="session-message">{{ Session::get('message_cat_add') }}</div>
            @endif
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
            @if (Session::has('message_cat_del'))
              <div class="session-message">{{ Session::get('message_cat_del') }}</div>
            @endif
          </div>

          <div id="view-products" class="tabcontent">
            <h3>View all products</h3>
            @if (Session::has('message_prod_del'))
              <div class="session-message">{{ Session::get('message_prod_del') }}</div>
            @endif
            <div class="products-list">
              <table>
                <tr>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Age</th>
                  <th>Price</th>
                  <th>Count</th>
                  <th></th>
                </tr>
                @foreach($products as $product)
                <?php
                  $filepath_list = explode(',', $product->image_path);
                ?>
                  <tr class="product-item">
                    <td>
                      <img src="{{asset('storage/' . $filepath_list[0])}}" alt="" srcset="">
                    </td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->category->title}}</td>
                    <td>{{$product->age_recom}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->count_in_stock}}</td>
                    <td><a href="/product/delete/{{$product->id}}" onclick="return confirm('Are you sure?')">
                      <button>Delete</button>
                    </a></td>
                  </tr>
                @endforeach
              </table>
            </div>
          </div>
          <div id="view-orders" class="tabcontent">
            <h3>View all orders</h3>
            <div class="order-list">
              <table>
                <tr>
                  <th>Order ID</th>
                  <th>Customer email</th>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total SUM</th>
                </tr>
                @foreach($orderIds as $orderId)
                <tbody>
                  <tr class="order-number">
                    <td>{{$orderId->id}}</td>
                    <td>{{$orderId->email}}</td>
                    <td colspan="3"></td>
                    <td>Total</td>
                  </tr>
                  @foreach($orders as $order)
                    @if($order->id == $orderId->id)
                      <tr class="order-item">
                        <td colspan="2"></td>
                        <td>{{$order->title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->product_price}}</td>
                        <td>{{$order->product_price * $order->quantity}}</td>
                      </tr>
                    @endif
                  @endforeach
                </tbody>
                @endforeach
              </table>
            </div>

          </div>

        </main>
    </div>
</x-app-layout>
