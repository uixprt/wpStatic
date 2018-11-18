@extends('layouts.app')

@section('content')
 <header class="prf-header">
  <a href="" class="prf-header__logo">
   logo
   <img src="" alt="" class="prf-header__img">
  </a>

  <nav class="prf-header__navigation">
   <button class="prf-nav__toggle"></button>
   <ul class="prf-nav__menu">
    <li class="prf-nav__item"><a href="#" class="prf-nav__link">asher</a></li>
    <li class="prf-nav__item"><a href="#" class="prf-nav__link">yeuda</a></li>
   </ul>
  </nav>
 </header>

 <div class="prf-hero">
  <div class="prf-hero__background"></div>
  <h1 class="prf-hero__title">big title in the page</h1>
  <h2 class="prf-hero__subtitle">subtitle title in the page</h2>
 </div>

 <section id="#" class="prf-section">
  <div class="prf-u-row">
   <div class="prf-col">
    <h2 class="prf-title-lg">viewbox</h2>
    <div class="prf-text-wrapper prf-text-md">
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, animi cupiditate dolores eligendi exercitationem laborum maxime molestias natus nisi perferendis praesentium quae rem repellat repudiandae sequi similique unde voluptas, voluptatum!</p>
    </div>
   </div>
   <div class="prf-col">
    <h2 class="prf-title-lg">trade</h2>
    <div class="prf-text-wrapper prf-text-md">
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, animi cupiditate dolores eligendi exercitationem laborum maxime molestias natus nisi perferendis praesentium quae rem repellat repudiandae sequi similique unde voluptas, voluptatum!</p>
    </div>
   </div>
  </div>
 </section>

 <section class="prf-section">
  <div class="nav prf-tabs__menu" id="myTab" role="tablist">
    <a class="nav-link prf-tabs__link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
    <a class="nav-link prf-tabs__link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
    <a class="nav-link prf-tabs__link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
    <a class="nav-link prf-tabs__link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
  </div>

  <!-- Tab panes -->
  <div class="prf-tabs__content">
   <div class="prf-tabs__pane active show" id="home" role="tabpanel" aria-labelledby="home-tab">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit eius voluptatem culpa pariatur blanditiis, at, ratione eveniet facere perferendis minus sit consequatur sunt. Doloremque atque incidunt quod, sapiente expedita laboriosam?</p></div>
   <div class="prf-tabs__pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">.
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nobis atque aliquid labore nihil velit eius reprehenderit dicta quisquam ratione! Blanditiis enim veritatis exercitationem voluptate asperiores molestias tenetur maiores animi?</p></div>
   <div class="prf-tabs__pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem perspiciatis nemo fuga illo id voluptatum ipsa eveniet velit necessitatibus veniam quae sit, omnis, ipsum odio, iste repellat repellendus nulla at.</p></div>
   <div class="prf-tabs__pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea quisquam, cumque libero explicabo nisi deleniti excepturi dolores recusandae nemo. Voluptatum sequi neque illo facere ullam temporibus dolorem natus architecto suscipit?</p></div>
  </div>
 </section>
@endsection
