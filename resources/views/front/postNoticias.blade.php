@extends('layouts.front')
@section('title', 'Post Noticias')    
@section('content')
<main class="main-blog">
  <section class="banner-blog">
      <div class="container">
        <div class="banner-post">
          <img class="image-post" src="{{ url('assets_front/images/5.jpg')}}" alt="">
        </div>
      </div>
  </section>

  <section class="post">
    <div class="container">
      <div class="row">
        <div class="col-md-9 mx-auto">
          <h2 class="title-post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta animi totam ipsa, aperiam debitis inventore.</h2>
          <div class="container-blog-info container-blog-post">
            <div class="blog-fecha">
              <p>Septiembre 2, 2020</p>
            </div>
          </div>
          <p class="text-blog">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic excepturi qui quae suscipit impedit sapiente, et doloribus blanditiis non voluptates quasi quisquam modi laudantium deleniti odio distinctio voluptate quam ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic excepturi qui quae suscipit impedit sapiente, et doloribus blanditiis non voluptates quasi quisquam modi laudantium deleniti odio distinctio voluptate quam ipsa.</p>
          <p class="text-blog">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic excepturi qui quae suscipit impedit sapiente, et doloribus blanditiis non voluptates quasi quisquam modi laudantium deleniti odio distinctio voluptate quam ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic excepturi qui quae suscipit impedit sapiente, et doloribus blanditiis non voluptates quasi quisquam modi laudantium deleniti odio distinctio voluptate quam ipsa.</p>
          <p class="text-blog">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic excepturi qui quae suscipit impedit sapiente, et doloribus blanditiis non voluptates quasi quisquam modi laudantium deleniti odio distinctio voluptate quam ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic excepturi qui quae suscipit impedit sapiente, et doloribus blanditiis non voluptates quasi quisquam modi laudantium deleniti odio distinctio voluptate quam ipsa.</p>
          <p class="text-blog">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic excepturi qui quae suscipit impedit sapiente, et doloribus blanditiis non voluptates quasi quisquam modi laudantium deleniti odio distinctio voluptate quam ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic excepturi qui quae suscipit impedit sapiente, et doloribus blanditiis non voluptates quasi quisquam modi laudantium deleniti odio distinctio voluptate quam ipsa.</p>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
@section('especifico')

@endsection