<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dash') }}
        </h2>
    </x-slot>
    <div class="admin content">
        <div class="sidebar">

          @if (Session::has('source'))
            <div id="redirect" data-source="{{Session::get('source')}}"></div>
          @endif
          
          <button class="sidebar__tablinks" data-target="add-product">Add product</button>
          <button class="sidebar__tablinks" data-target="add-category">Add category</button>
          <button class="sidebar__tablinks" data-target="view-products">View products</button>
          <button class="sidebar__tablinks" data-target="view-orders">View orders</button>
          <button class="sidebar__tablinks" data-target="view-subscribers">View subscribers</button>
        </div>
        <main class="main">
          <div id="add-product" class="tabcontent">
            <h3>Add new product</h3>
            @if (Session::has('message_prod_add'))
              <div class="session-message">{{ Session::get('message_prod_add') }}</div>
            @endif
            @if ($errors->any())
                <div class="alert-message alert alert-danger">{{ $errors->first()}}</div>
            @endif
            <x-product-add-form :categories="$categories"></x-product-add-form>
          </div>
          <div id="add-category" class="tabcontent">
            <h3>Add new category</h3>
            @if (session('message_cat_add'))
              <div class="session-message">{{ session('message_cat_add') }}</div>
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
                <?php $total = 0;?>
                <tbody>
                  <tr class="order-number">
                    <td>{{$orderId->id}}</td>
                    <td>{{$orderId->email}}</td>
                    <td colspan="4"></td>
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
                      <?php $total += $order->product_price * $order->quantity;?>
                    @endif
                  @endforeach
                  <tr class="order-total">
                    <td colspan="5"></td>
                    <td>{{$total}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
          <div id="view-subscribers" class="tabcontent">
            <h3>View email subscribers</h3>
            <div class="subscriber-list">
              @if (count($subs) > 0)
                @foreach ($subs as $sub)
                  <div class="subscriber-item">
                    <p>{{$sub->email}}</p>
                  </div>
                @endforeach
              @else 
                <div class="no-items">
                  <p>No items found</p>
                </div>
              @endif
            </div>
          </div>
        </main>
    </div>
</x-app-layout>
