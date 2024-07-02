@extends('templates.App')

@push('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('content')
<div class="content_home">
    <!-- contenedor de las historias -->
    <div class="histories__container">

        <!-- <section class="histories_home">
            <div class="content__box">
                <div class="galery">
                    <div class="img-history" data-classname="historie" ><h3>Nombre</h3></div>
                    <div class="img-history" data-classname="historie" ><h3>Nombre</h3></div>
                    <div class="img-history" data-classname="historie" ><h3>Nombre</h3></div>
                </div>
            </div>
        </section> -->
    <!-- para futuras actualizaciones meteremos estados o historias de las personas, este codigo quedara aca por eso. -->
        
    </div>
    <!-- contenedor de las publicaciones -->
    <div class="publications__container">

        <section class="information__section__home">
  

            <form action="" method="post" class="form_search_pipol">

                <div class="searchbar">

                    <div class="shadow"></div>
                    <input type="text" placeholder="Search and find your friends..." class="input__search">
                    <ion-icon name="search-outline" class="icon__find"></ion-icon>

                </div>

            </form>
        </section>

       
        <div class="content_central_home">
            <div class="publications">

                <section class="header_publications">
                    <div class="profile_image_home">
                        <a href="#">
                            <img class="img_prf" src="{{asset('img/profile_example.jpg')}}" alt="foto_publicacion">
                        </a>
                    </div>
                    <a href="#">
                        <p>Brawler</p>
                    </a>
                </section>

                <section class="image_publication__content">
                    <div class="image_publications">
                        <img class="img_pbl" src="{{asset('img/profile_example.jpg')}}" alt="foto_publicacion">
                    </div>
                </section>

                <section class="message__publication">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quam unde, ex hic veniam nostrum nemo quasi eius cumque veritatis fugiat temporibus, autem delectus vitae soluta, reprehenderit quia pariatur quisquam.</p>
                </section>

                {{-- we use react here --}}
                <section class="root">
                    <section class="reactions">
                        <ion-icon name="heart-outline" class="reactions1"></ion-icon>
                        <ion-icon name="happy-outline" class="reactions2"></ion-icon>
                    </section>
    
                    <section class="comments">
                        <input type="text" placeholder="deja un comentario" class="preview_comentary">
    
                    </section>
                </section>
               

            </div> 
            <div class="publications">

                <section class="header_publications">
                    <div class="profile_image_home">
                        <a href="#">
                            <img class="img_prf" src="{{asset('img/profile_example.jpg')}}" alt="foto_publicacion">
                        </a>
                    </div>
                    <a href="#">
                        <p>Brawler</p>
                    </a>
                </section>

                <section class="image_publication__content">
                    <div class="image_publications">
                        <img class="img_pbl" src="{{asset('img/profile_example.jpg')}}" alt="foto_publicacion">
                    </div>
                </section>

                <section class="message__publication">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quam unde, ex hic veniam nostrum nemo quasi eius cumque veritatis fugiat temporibus, autem delectus vitae soluta, reprehenderit quia pariatur quisquam.</p>
                </section>

               {{-- we use react --}}
               <section class="root">

                    <section class="reactions">
                        <ion-icon name="heart-outline" class="reactions1"></ion-icon>
                        <ion-icon name="happy-outline" class="reactions2"></ion-icon>
                    </section>

                    <section class="comments">

                        <div class="input_container">
                            <input type="text" class="preview_comentary">
                            <span>Deja un comentario</span>
                            <i></i>
                        </div>
                        

                        <ion-icon class="comments_view" name="chatbubble-outline"></ion-icon>

                    </section>

                </section>

            </div>    
            <!-- esto es un ejemplo de como se veran las publicaciones de los usuarios -->

        </div>
    </div>  
    
</div>
@endsection