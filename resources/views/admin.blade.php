<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>I'm sad and alone</title>

        <!-- CSS -->
        <link href="{{asset('css/admin.css')}}" rel="stylesheet">

    </head>
    <body>

      <header>
        <div class="left">
          <a href="<?= URL::to('/'); ?>">
            <div class="left__exit">
              <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.41402 9.50001L4.70702 10.793C4.79986 10.8859 4.87351 10.9961 4.92376 11.1174C4.97401 11.2387 4.99987 11.3687 4.99987 11.5C4.99987 11.6313 4.97401 11.7613 4.92376 11.8826C4.87351 12.0039 4.79986 12.1142 4.70702 12.207C4.61417 12.2999 4.50395 12.3735 4.38264 12.4238C4.26134 12.474 4.13132 12.4999 4.00002 12.4999C3.86872 12.4999 3.7387 12.474 3.61739 12.4238C3.49609 12.3735 3.38586 12.2999 3.29302 12.207L0.293018 9.20701C0.200072 9.11422 0.126335 9.00402 0.0760239 8.8827C0.0257132 8.76139 -0.000183105 8.63134 -0.000183105 8.50001C-0.000183105 8.36868 0.0257132 8.23863 0.0760239 8.11732C0.126335 7.996 0.200072 7.8858 0.293018 7.79301L3.29302 4.79301C3.38586 4.70017 3.49609 4.62652 3.61739 4.57627C3.7387 4.52602 3.86872 4.50016 4.00002 4.50016C4.13132 4.50016 4.26134 4.52602 4.38264 4.57627C4.50395 4.62652 4.61417 4.70017 4.70702 4.79301C4.79986 4.88586 4.87351 4.99608 4.92376 5.11739C4.97401 5.23869 4.99987 5.36871 4.99987 5.50001C4.99987 5.63131 4.97401 5.76133 4.92376 5.88264C4.87351 6.00394 4.79986 6.11417 4.70702 6.20701L3.41402 7.50001H10C10.2652 7.50001 10.5196 7.60537 10.7071 7.7929C10.8947 7.98044 11 8.23479 11 8.50001C11 8.76523 10.8947 9.01958 10.7071 9.20712C10.5196 9.39465 10.2652 9.50001 10 9.50001H3.41402Z" fill="#5C5F62"/>
                <path d="M18 15C18 15.8284 17.3284 16.5 16.5 16.5H1.28573C0.575652 16.5 1.81084e-05 15.9244 1.80943e-05 15.2143L1.80801e-05 14.5C1.80691e-05 13.9477 0.447733 13.5 1.00002 13.5C1.5523 13.5 2.00002 13.9477 2.00002 14.5H16V2.11801H9.00003H2.00002V2.50001C2.00002 3.0523 1.5523 3.50001 1.00002 3.50001C0.447733 3.50001 1.80602e-05 3.0523 1.80602e-05 2.50001V1C1.80602e-05 0.447716 0.447733 0 1.00002 0H16.5C17.3284 0 18 0.671573 18 1.5V15Z" fill="#5C5F62"/>
              </svg>
            </div>
          </a>
          <div class="left__heading">
            <h4>Admin panel - BLANK</h4>
          </div>
        </div>
      </header>
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
                </div>
              @endforeach
            </div>
            @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
            @endif
            <!-- @if(isset($status))
              <p>{{$status}}</p>
            @endif -->
          </div>

          <div id="view-products" class="tabcontent">
            <h3>View all products</h3>
            <p>Tokyo is the capital of Japan.</p>
          </div>
        </main>
    </div>
    <script src="{{asset('js/admin.js')}}"></script>
    </body>
</html>

