<?php

require_once __DIR__ . "/pages/header.php";

?>


<!-- SECTION : BIG TITLE -->
<section class="big_title d-flex align-items-center">
    <p class="text-white text-center fs-5 mx-auto">
        Bienvenue au Zoo Arcadia ! <br>
        Niché au cœur de la forêt de Brocéliande depuis 1960, notre zoo vous invite à une <br>
        aventure exceptionnelle au milieu de la nature. <br>
        Bien plus qu'un simple parc animalier : c'est un voyage au pays de la biodiversité.
    </p>
</section>

<!-- SECTION : PRESENTATION DU ZOO -->
<section class="container my-5 d-flex justify-content-center">
    <div class="d-flex flex-column align-items-end me-5">
        <p class="mb-5 pe-4">
            Venez rencontrer une incroyable <br>
            diversité d'animaux venant des <br>
            quatre coins du monde.
        </p>
        <img class="w-50 rounded-circle" src="/assets/images/accueil/Presentation loutre.jpg"
            alt="Présentation Loutre">
    </div>
    <div class="d-flex flex-column align-items-start ms-5">
        <img class="w-50 rounded-circle" src="/assets/images/accueil/Presentation singe.jpg"
            alt="Présentation Singe">
        <p class="mt-5">
            Nos équipes veillent quotidiennement au <br>
            bien-être de chaque animal, garantissant <br>
            des conditions de vie respectueuses de <br>
            leurs besoins naturels.
        </p>
    </div>
</section>

<!-- SECTION : NOS HABITATS -->
<section id="home_section_habitats" class="container_bg_secondary1 py-5">
    <div class="container">
        <div class="d-flex justify-content-center">
            <hr class="line_h2">
            <h2>Nos habitats</h2>
            <hr class="line_h2">
        </div>
        <div class="d-flex flex-column align-items-center">
            <a href="/savane"><img src="/assets/images/savane/savane.jpg" alt="Habitats Savane"></a>
            <h3>Savane</h3>
        </div>
        <div class="d-flex flex-column align-items-center">
            <a href="/jungle"></a><img src="/assets/images/jungle/jungle.jpg" alt="Habitats Jungle"></a>
            <h3>Jungle</h3>
        </div>
        <div class="d-flex flex-column align-items-center">
            <a href="/marais"></a><img src="/assets/images/marais/marais.jpg" alt="Habitats Marais"></a>
            <h3>Marais</h3>
        </div>
    </div>
</section>

<!-- SECTION : NOS SERVICES -->
<section class="container_bg_secondary1 py-5" id="style_section_services">
    <div class="container">
        <div class="d-flex justify-content-center">
            <hr class="line_h2">
            <h2>Nos services</h2>
            <hr class="line_h2">
        </div>
        <div class="row mt-4">
            <div class="col-4 text-center text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0">
                    <g>
                        <path
                            d="m66.172 31.68c0.39844 0 0.80078-0.15234 1.1055-0.45703 2.9727-2.9688 10.074-6.2812 15.52-6.2812 0.86328 0 1.5625-0.69922 1.5625-1.5625 0-0.86328-0.69922-1.5625-1.5625-1.5625-6.5039 0-14.266 3.7344-17.727 7.1953-0.60937 0.60938-0.60937 1.5977 0 2.2109 0.30469 0.30469 0.70313 0.45703 1.1055 0.45703z" />
                        <path
                            d="m17.492 51.332c5.4023 5.3867 13.668 6.8047 20.5 3.6445l3.5391 3.9609-16.48 14.664c-1.7969 1.6016-2.8281 3.8086-2.8984 6.2188-0.070313 2.4102 0.82812 4.6719 2.5312 6.375 1.6406 1.6406 3.8047 2.5352 6.1133 2.5352 0.085937 0 0.17578 0 0.26172-0.003907 2.4102-0.070312 4.6172-1.1016 6.2188-2.8984l14.102-15.836 14.094 15.828c1.5742 1.7812 3.8438 2.8438 6.2227 2.9141 0.085938 0 0.16797 0.003906 0.25 0.003906 2.2891 0 4.5078-0.91797 6.1172-2.5391 1.6836-1.6719 2.6094-3.9961 2.5391-6.375-0.070312-2.3789-1.1328-4.6484-2.9062-6.2188l-16.477-14.664 3.4688-3.8984c7.5195 3.75 16.688 2.3086 22.703-3.7109 3.8086-3.8086 7.1172-10.117 8.6289-16.465 1.7852-7.4844 0.78125-13.59-2.8203-17.191-7.6836-7.6875-25.863-1.9844-33.656 5.8125-6.0156 6.0156-7.457 15.188-3.7031 22.715l-4.4727 3.9766-4.5273-4.0391c3.168-6.8398 1.7461-15.109-3.6953-20.547l-14.398-13.059c-0.95312-0.85938-2.1562-1.3125-3.3906-1.2578-1.2812 0.023437-2.4688 0.53906-3.3398 1.4297-1.8984 1.9023-1.8984 4.9961 0 6.8984l12.312 12.316c0.50781 0.51172 0.60547 1.3125 0.22656 1.7812-0.23047 0.28516-0.55469 0.44922-0.90625 0.46875-0.35938 0.023437-0.68359-0.10938-0.93359-0.35938l-12.453-12.453c-1.8945-1.8945-4.9922-1.8984-6.9766 0.066406l-0.0625 0.074219c-0.92969 0.91797-1.4414 2.1406-1.4453 3.4453-0.003906 1.3125 0.50781 2.5469 1.4414 3.4805l12.438 12.438c0.25781 0.25781 0.39062 0.59375 0.37109 0.94922-0.019532 0.35156-0.1875 0.67188-0.48047 0.90625-0.46875 0.38281-1.2539 0.28125-1.7578-0.23438l-12.336-12.336c-1.8477-1.8047-5.0078-1.832-6.9023 0.015624-1.8516 1.8516-1.9219 4.8086-0.16406 6.7305l13.105 14.449zm58.125 24.613c1.1523 1.0195 1.8125 2.4297 1.8594 3.9727 0.046876 1.5391-0.53125 2.9844-1.625 4.0742-1.082 1.0898-2.5195 1.6719-4.0664 1.6172-1.543-0.046875-2.9531-0.70312-3.9766-1.8633l-14.34-16.102 5.668-6.3672zm-16.461-30.184c-3.7891-6.4922-2.7188-14.746 2.6016-20.062 4.5547-4.5547 13.766-8.5586 21.094-8.5586 3.2969 0 6.2109 0.8125 8.1445 2.7461 2.7656 2.7656 3.4883 7.9609 1.9883 14.258-1.3672 5.7305-4.4297 11.609-7.8008 14.98-5.3203 5.3203-13.566 6.3906-20.055 2.6094-0.64453-0.375-1.4609-0.24609-1.9531 0.3125l-28.227 31.711c-1.0234 1.1484-2.4375 1.8086-3.9766 1.8516-1.5547 0.046875-2.9883-0.53125-4.0781-1.6172-1.0859-1.0859-1.6602-2.5352-1.6172-4.0742 0.046875-1.543 0.70312-2.9531 1.8516-3.9766l17.617-15.672c0.011718-0.011719 0.03125-0.015625 0.042968-0.027343 0.011719-0.011719 0.015626-0.023438 0.027344-0.035157l14.031-12.484c0.55469-0.49219 0.6875-1.3125 0.3125-1.9531zm-52.406-13.387c0.70703-0.6875 1.8516-0.65625 2.5078-0.015625l12.312 12.312c1.6211 1.6484 4.2383 1.8477 5.9414 0.46094 0.97266-0.78125 1.5664-1.9375 1.6328-3.1641 0.066407-1.2344-0.40234-2.4453-1.2812-3.3281l-12.438-12.438c-0.33984-0.33984-0.52734-0.78906-0.52344-1.2578 0-0.46484 0.1875-0.90234 0.58594-1.3008l0.0625-0.074219c0.69531-0.6875 1.8203-0.6875 2.5039-0.007812l12.453 12.453c0.87109 0.87109 2.0781 1.332 3.3008 1.2695 1.2305-0.0625 2.3867-0.65234 3.1719-1.6172 1.4023-1.7227 1.2227-4.2812-0.42969-5.957l-12.32-12.324c-0.68359-0.68359-0.68359-1.7969 0.015625-2.4961 0.30469-0.3125 0.72266-0.48828 1.207-0.5 0.40625-0.019531 0.85938 0.14453 1.2031 0.45312l14.336 12.996c4.7148 4.7148 5.7617 12.078 2.5508 17.902-0.35156 0.64062-0.21484 1.4336 0.32812 1.9219l5.1562 4.6016-5.1562 4.5898-4.3398-4.8594c-0.48438-0.54297-1.2812-0.67969-1.9219-0.32812-5.8203 3.207-13.18 2.1602-17.844-2.4922l-13.059-14.402c-0.62891-0.6875-0.60156-1.75 0.050781-2.4062z" />
                    </g>
                </svg>
                <p>Restauration</p>
            </div>
            <div class="col-4 text-center text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 512 640" x="0px" y="0px">
                    <title>630-Binoculars</title>
                    <path
                        d="M257.29,284.42a25.51,25.51,0,1,1,25.51-25.51A25.53,25.53,0,0,1,257.29,284.42Zm0-35.71a10.2,10.2,0,1,0,10.2,10.2A10.22,10.22,0,0,0,257.29,248.71Z" />
                    <path
                        d="M218.51,350.35a7.09,7.09,0,0,1-.79,0,7.64,7.64,0,0,1-6.83-8.4l5.49-53.5A7.65,7.65,0,1,1,231.61,290l-5.49,53.5A7.66,7.66,0,0,1,218.51,350.35ZM37.57,293.91a7.81,7.81,0,0,1-2.27-.34,7.65,7.65,0,0,1-5-9.58L66.94,165.7c17.93-57.76,73-74.48,116.64-65.58,17.7,3.61,33.43,11.47,44.31,22.11,12.42,12.16,18.11,27.15,16.46,43.36l-5.92,57.7a7.66,7.66,0,1,1-15.24-1.56l5.92-57.7c2.7-26.38-22.46-43.57-48.59-48.9-37.07-7.57-83.85,6.45-99,55.11L44.88,288.52A7.65,7.65,0,0,1,37.57,293.91Z" />
                    <path
                        d="M119.22,449.66A107,107,0,1,1,226.16,342.72,107.06,107.06,0,0,1,119.22,449.66Zm0-198.59a91.64,91.64,0,1,0,91.63,91.65A91.74,91.74,0,0,0,119.22,251.07Z" />
                    <path
                        d="M224.61,137.5h-.53a7.66,7.66,0,0,1-7.12-8.16l.08-1.27c1.74-26.7-16.23-42.93-34.82-47.17-18.85-4.3-45.58,2.36-58.86,35.29a7.66,7.66,0,1,1-14.2-5.73C125,71.27,159,59.88,185.62,66a60.91,60.91,0,0,1,34.17,21.23c9.23,11.61,13.56,26.1,12.53,41.89l-.08,1.29A7.66,7.66,0,0,1,224.61,137.5Z" />
                    <path
                        d="M257.29,311.59a52.67,52.67,0,1,1,52.65-52.68A52.73,52.73,0,0,1,257.29,311.59Zm0-90a37.36,37.36,0,1,0,37.34,37.34A37.38,37.38,0,0,0,257.29,221.57Z" />
                    <path
                        d="M296.06,350.35a7.65,7.65,0,0,1-7.6-6.88L283,290a7.65,7.65,0,1,1,15.23-1.56l5.49,53.5a7.66,7.66,0,0,1-6.84,8.4A6.85,6.85,0,0,1,296.06,350.35ZM477,293.91a7.66,7.66,0,0,1-7.31-5.39L433,170.24c-15.11-48.66-61.89-62.68-98.95-55.11-26.13,5.33-51.29,22.52-48.6,48.9l5.92,57.7a7.65,7.65,0,1,1-15.23,1.56l-5.92-57.7c-1.66-16.21,4-31.2,16.46-43.36,10.87-10.64,26.61-18.5,44.3-22.11,43.61-8.9,98.71,7.82,116.64,65.58L484.32,284a7.66,7.66,0,0,1-5.05,9.58A7.76,7.76,0,0,1,477,293.91Z" />
                    <path
                        d="M395.35,449.66A107,107,0,1,1,502.29,342.72,107.06,107.06,0,0,1,395.35,449.66Zm0-198.59A91.64,91.64,0,1,0,487,342.72,91.74,91.74,0,0,0,395.35,251.07Z" />
                    <path
                        d="M290,137.5a7.65,7.65,0,0,1-7.63-7.13l-.09-1.27c-1-15.81,3.3-30.3,12.53-41.91A60.94,60.94,0,0,1,329,66c26.69-6.09,60.67,5.31,76.47,44.49a7.66,7.66,0,0,1-14.21,5.73c-13.27-32.93-40-39.59-58.86-35.29-18.58,4.24-36.56,20.47-34.82,47.19l.09,1.25a7.66,7.66,0,0,1-7.12,8.16Z" />
                    <path
                        d="M278.1,174.77a7.67,7.67,0,0,1-3.55-.88,37.49,37.49,0,0,0-34.52,0,7.66,7.66,0,1,1-7.11-13.56,52.73,52.73,0,0,1,48.74,0,7.66,7.66,0,0,1-3.56,14.44Z" />
                    <path
                        d="M296.93,363.46a7.57,7.57,0,0,1-4.23-1.28c-9.72-6.46-22.3-10-35.41-10s-25.69,3.56-35.41,10a7.66,7.66,0,1,1-8.48-12.75c12.2-8.12,27.79-12.58,43.89-12.58s31.68,4.46,43.89,12.58a7.66,7.66,0,0,1-4.25,14Z" />
                    <path
                        d="M119.22,416a73.24,73.24,0,1,1,73.24-73.24A73.32,73.32,0,0,1,119.22,416Zm0-131.16a57.93,57.93,0,1,0,57.93,57.92A58,58,0,0,0,119.22,284.8Z" />
                    <path
                        d="M395.35,416a73.24,73.24,0,1,1,73.24-73.24A73.32,73.32,0,0,1,395.35,416Zm0-131.16a57.93,57.93,0,1,0,57.93,57.92A58,58,0,0,0,395.35,284.8Z" />
                    <path
                        d="M119.22,251.07a7.65,7.65,0,0,1-7.2-10.25l49.57-137.6a7.65,7.65,0,1,1,14.4,5.19L126.43,246A7.67,7.67,0,0,1,119.22,251.07Z" />
                    <path
                        d="M395.35,251.07a7.65,7.65,0,0,1-7.2-5.06l-49.57-137.6A7.66,7.66,0,1,1,353,103.22l49.57,137.6a7.65,7.65,0,0,1-7.21,10.25Z" />
                    <path
                        d="M413.47,358.34a7.66,7.66,0,0,1-6.64-3.83l-21.3-36.91a7.66,7.66,0,0,1,13.26-7.66l21.31,36.92a7.65,7.65,0,0,1-6.63,11.48Z" />
                    <path
                        d="M429.77,337.67a7.66,7.66,0,0,1-6.64-3.83l-11.55-20a7.65,7.65,0,1,1,13.26-7.65l11.56,20a7.65,7.65,0,0,1-6.63,11.48Z" />
                    <path
                        d="M101.1,358.34a7.65,7.65,0,0,1-6.62-11.48l21.3-36.92a7.66,7.66,0,0,1,13.27,7.66l-21.31,36.91A7.65,7.65,0,0,1,101.1,358.34Z" />
                    <path
                        d="M84.8,337.67a7.65,7.65,0,0,1-6.62-11.48l11.55-20A7.66,7.66,0,1,1,103,313.8l-11.56,20A7.65,7.65,0,0,1,84.8,337.67Z" />
                </svg>
                <p>Visite guidée des habitats <br>(gratuit)</p>
            </div>
            <div class="col-4 text-center text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0">
                    <g>
                        <path
                            d="m74.309 45.98c0.21094 0 0.41016-0.078125 0.55859-0.23047 0.14844-0.14844 0.23828-0.35938 0.23828-0.57031v-12.531c0-0.44141-0.35156-0.78906-0.78125-0.80078l-20.73-0.37891c-0.19922 0-0.42188 0.078125-0.57031 0.23047-0.14844 0.14844-0.23828 0.35938-0.23828 0.57031v12.531c0 0.44141 0.35156 0.78906 0.78125 0.80078l20.73 0.39063h0.019531zm-0.80078-10.289-9.2305-0.17188v-2.2617l9.2305 0.17188zm-10.82-2.4609v2.2617l-8.3086-0.14844v-2.2617zm-8.3086 3.6992 8.3086 0.14844v7.0781l-8.3086-0.16016v-7.0703zm9.9102 7.2617v-7.0781l9.2305 0.17188v7.0781z" />
                        <path
                            d="m26.859 69.078c-1.2695 0-2.4102 0.5-3.2617 1.3086-0.019531 0.019531-0.050781 0.039062-0.070312 0.058593-0.87891 0.87109-1.4297 2.0703-1.4297 3.3984 0 2.6289 2.1406 4.7695 4.7695 4.7695 2.6289 0 4.7695-2.1406 4.7695-4.7695s-2.1406-4.7695-4.7695-4.7695zm0 7.2305c-1.3516 0-2.4492-1.1016-2.4492-2.4492 0-1.3516 1.1016-2.4492 2.4492-2.4492 1.3516 0 2.4492 1.1016 2.4492 2.4492 0 1.3516-1.1016 2.4492-2.4492 2.4492z" />
                        <path
                            d="m45.371 69.078c-2.6289 0-4.7695 2.1406-4.7695 4.7695s2.1406 4.7695 4.7695 4.7695 4.7695-2.1406 4.7695-4.7695-2.1406-4.7695-4.7695-4.7695zm0 7.2305c-1.3516 0-2.4492-1.1016-2.4492-2.4492 0-1.3516 1.1016-2.4492 2.4492-2.4492 1.3516 0 2.4492 1.1016 2.4492 2.4492 0 1.3516-1.1016 2.4492-2.4492 2.4492z" />
                        <path
                            d="m70.031 66.551c-2.6289 0-4.7695 2.1406-4.7695 4.7695 0 2.6289 2.1406 4.7695 4.7695 4.7695s4.7695-2.1406 4.7695-4.7695c0-2.6289-2.1406-4.7695-4.7695-4.7695zm0 7.2188c-1.3516 0-2.4492-1.1016-2.4492-2.4492 0-1.3516 1.1016-2.4492 2.4492-2.4492 1.3516 0 2.4492 1.1016 2.4492 2.4492 0 1.3516-1.1016 2.4492-2.4492 2.4492z" />
                        <path
                            d="m87.539 62.031-3.6094-1.8594v-6.3594c0-0.51172-0.32813-0.96094-0.82031-1.1094-0.039063-0.011719-0.23047-0.070313-0.53125-0.14844l-0.55078-21.32c3.1797-1.7695 5-4.0195 5.2383-6.5586 0.078125-0.80078-0.19922-1.5703-0.78906-2.2305-3.5391-3.8516-20.539-3.7812-22.5-3.75-8.6094 0.32031-23.09 1.5391-23.359 6.0391-0.19141 3.2617 2.6797 5.3203 4.8203 6.3984v3.5391h-16l3.3086-7.1484h1.6797c0.64062 0 1.1602-0.51953 1.1602-1.1602v-4.6289c0-0.64062-0.51953-1.1602-1.1602-1.1602h-11.07c-0.64062 0-1.1602 0.51953-1.1602 1.1602v4.6289c0 0.64062 0.51953 1.1602 1.1602 1.1602h1.1484l2.6211 7.1484h-10.34-0.070312c-0.03125 0-0.050782 0-0.078125 0.011719-0.12891 0.019531-0.25 0.050781-0.35938 0.10938h-0.019532c-0.12109 0.058593-0.23047 0.16016-0.32812 0.26172 0 0-0.019532 0.011718-0.03125 0.019531 0 0 0 0.019531-0.019532 0.03125-0.019531 0.03125-0.050781 0.050781-0.070312 0.089843-0.17188 0.26953-4.2695 6.8008-3.8086 14.25 0.37109 5.9883 2.5508 9.7109 3.5117 11.07l0.23047 10.801c0.011718 0.62891 0.53125 1.1289 1.1602 1.1289h0.89844c-0.070312 0.44922-0.12109 0.91016-0.12109 1.3789 0 5.0586 4.1211 9.1797 9.1797 9.1797s9.1797-4.1211 9.1797-9.1797c0-0.51953-0.050781-1.0391-0.14062-1.5391h0.37109c-0.050781 0.37109-0.078125 0.75-0.078125 1.1406 0 5.0586 4.1211 9.1797 9.1797 9.1797s9.1797-4.1211 9.1797-9.1797c0-0.44141-0.039062-0.87109-0.10156-1.2891l4.9492-0.039063c0.42187 5.9219 5.3594 10.621 11.379 10.621 6.0195 0 11.07-4.8008 11.391-10.809h0.60938c0.5-0.011718 0.92188-0.33984 1.0703-0.78906h3.0195c0.80078 0 1.4414-0.64844 1.4414-1.4414v-6.3984c0-0.53906-0.30078-1.0391-0.78125-1.2812zm-64.93-15.789c-0.21094-4.2891-1.8594-7.3789-3.2305-9.2305h26.078l0.51953 19.738c-2.5312 1.1094-4.3594 2.0508-5.0312 2.4102h-22.262c1.5508-2.5703 4.1602-7.7305 3.9102-12.922zm25.672 9.5391-0.53125-19.941v-5.1094c2.5586-0.46094 9.8711-1.6484 15.539-1.4609 5.7812 0.19922 13.73 1.4492 16.422 1.8906l0.53906 20.891c-2.8516-0.51172-7.7891-1.0703-14.602-0.73047-5.9414 0.28906-12.48 2.4492-17.371 4.4492zm-5.3516-30.898c0.089843-1.4219 9.3398-3.4219 21.109-3.8594 6.8906-0.070313 18.602 0.67187 20.738 3 0.21094 0.23047 0.19922 0.37109 0.19922 0.44141-0.19922 2.0508-2.0312 3.5898-3.8086 4.6289-0.039063-0.011719-0.070313-0.03125-0.10938-0.039062-0.42188-0.070313-10.488-1.8281-17.672-2.0781-7.2305-0.25-16.609 1.5898-17.012 1.6719-0.14844 0.03125-0.28125 0.089843-0.39844 0.17187-1.3984-0.78906-3.1406-2.1406-3.0391-3.9219zm-18.41-1.9688h8.75v2.3086h-8.75zm5.6719 4.6289-1.7891 3.8711-1.4219-3.8711zm-13.148 10.25c1.1914 1.4414 3.0508 4.3281 3.25 8.5508 0.21875 4.5781-2.2188 9.3398-3.6211 11.66-0.89062-1.6406-2.1016-4.5586-2.3594-8.6797-0.28906-4.8398 1.6289-9.3789 2.7305-11.539zm9.8203 42.922c-3.7812 0-6.8594-3.0781-6.8594-6.8594s3.0781-6.8594 6.8594-6.8594 6.8594 3.0781 6.8594 6.8594-3.0781 6.8594-6.8594 6.8594zm18.512-0.39844c-3.7812 0-6.8594-3.0781-6.8594-6.8594s3.0781-6.8594 6.8594-6.8594 6.8594 3.0781 6.8594 6.8594-3.0781 6.8594-6.8594 6.8594zm0-16.039c-3.8281 0-7.1211 2.3594-8.4883 5.7109h-1.6992c-1.4609-3.1289-4.6289-5.3086-8.3203-5.3086-3.6914 0-6.9609 2.25-8.3906 5.4688h-0.44141l-0.19141-8.6719h23.398c0.19141 0 0.37891-0.050781 0.55078-0.14062 0.12891-0.070313 13.34-7.1602 23.961-7.6914 8.3906-0.42188 13.879 0.60156 15.852 1.0586v13.012c-1.5117-4.5391-5.7891-7.8203-10.828-7.8203-5.7891 0-10.57 4.3281-11.309 9.9219l-5.6484 0.050782c-1.3984-3.2695-4.6602-5.5703-8.4414-5.5703zm25.41 15.578c-4.7109 0-8.5391-3.8281-8.5391-8.5391 0-4.7109 3.8281-8.5391 8.5391-8.5391 4.7109 0 8.5391 3.8281 8.5391 8.5391 0 4.7109-3.8281 8.5391-8.5391 8.5391zm14.66-11.602h-1.5117v-4.8516l1.5117 0.76953z" />
                    </g>
                </svg>
                <p>Visite du zoo <br>en petit train</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION : NOS ANIMAUX -->
<section class="container_bg_secondary1 pb-5">
    <div class="container">
        <div class="py-5 d-flex justify-content-center">
            <hr class="line_h2">
            <h2>Nos animaux</h2>
            <hr class="line_h2">
        </div>
        <div id="carouselHome" class="carousel slide">
            <div class="carousel-inner rounded-5">
                <div class="carousel-item active">
                    <img src="/assets/images/carousel/panda_roux.jpg" alt="Panda roux">
                </div>
                <div class="carousel-item">
                    <img src="/assets/images/carousel/presentation_loutre.jpg" alt="Loutre">
                </div>
                <div class="carousel-item">
                    <img src="/assets/images/carousel/presentation_singe.jpg" alt="Singe">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- SECTION : AVIS -->
<section class="bg_avis text-center py-4">
    <div class="container">
        <h2>Avis de nos visiteurs</h2>
        <div class="row mt-4">
            <div class="col-3">
                <span>Gérard D.</span>
                <p>“Très très agréable comme zoo nous étions étonné que ce zoo soit aussi propre. Superbe découverte.”
                </p>
            </div>
            <div class="col-3">
                <span>Luke L.</span>
                <p>“Je suis allé dans ce zoo avec un enfant en bas âge en pensant y passer un bon moment. En réalité,
                    j’y ai
                    pensé un excellent moment !”</p>
            </div>
            <div class="col-3">
                <span>Laëtitia S.</span>
                <p>“Les explications du soigneur et de notre guide se sont révélées très utiles. L'activité est très
                    bien
                    organisée. Je recommande.”</p>
            </div>
            <div class="col-3 d-flex flex-column justify-content-evenly">
                <a href="/formAvis">
                    <svg version="1.1" viewBox="0 0 1640.2342 1754.6284" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(1203.2 335.4)">
                            <path
                                d="m176.77 1129.9c-2e-5 40.186-11.601 96.026-33.526 132.45-21.925 36.421-44.691 71.332-89.98 92.823-90.834 43.102-275.63 64.046-392.44 64.046s-319.57-7.3692-402.17-64.201c-41.298-28.416-69.938-49.261-81.034-98.315-19.733-37.653-28.111-79.394-28.111-119.58s12.296-77.721 43.723-105.34c33.341-29.301 95.054-37.612 127.33-80.466 50.632-40.972 36.77-95.63 59.894-180.44 41.172-77.592 131.5-149.16 263.03-124.31 125.68-17.849 197.95 17.476 254.95 68.975 55.198 58.718 39.459 140.52 67.813 190.04 45.417 38.813 85.296 77.33 153.99 91.539 47.669 32.645 56.523 92.603 56.523 132.79z" />
                            <path
                                d="m-471.2 16.389c4.2962 40.115 13.202 59.471 26.214 87.554 12.393 24.617 26.798 40.752 27.536 102.96-5.1834 54.248-21.712 82.483-53.587 104.41-30.827 18.516-66.518 31.506-129.94 36.66-28.665-1.3152-64.083-16.591-91.95-35.217-28.653-17.316-50.541-39.032-71.273-69.21-30.552-62.804-30.033-87.738-26.443-157.34 5.2064-28.357 10.134-47.98 18.588-72.451 4.0955-11.855 9.835-23.411 16.406-38.734 6.5707-15.323 17.248-32.434 30.413-52.852 17.077-21.03 24.445-30.25 44.836-50.382-4.8002-62.376 29.002-132.95 36.937-153.83 17.806-30.91 23.993-47.139 35.307-53.34 6.0746 10.077 19.376 23.876 17.403 44.207 2.6779 11.805-14.569 38.669-15.333 55.108 0.0261 20.154 4.1843 43.454 8.4451 66.892 48.098-3.6763 78.074-12.65 114.27 15.973 25.021 32.242 28.825 68.787 25.632 99.151 0.47547 30.626-17.575 47.997-13.467 70.453z" />
                            <path
                                d="m-292.66 16.389c-4.2962 40.115-13.202 59.471-26.214 87.554-12.393 24.617-26.798 40.752-27.536 102.96 5.1833 54.248 21.712 82.483 53.587 104.41 30.827 18.516 66.518 31.506 129.94 36.66 28.665-1.3152 64.083-16.591 91.95-35.217 28.653-17.316 50.541-39.032 71.273-69.21 30.552-62.804 30.033-87.738 26.443-157.34-5.2064-28.357-10.134-47.98-18.588-72.451-4.0955-11.855-9.835-23.411-16.406-38.734-6.5707-15.323-17.248-32.434-30.413-52.852-17.077-21.03-24.445-30.25-44.836-50.382 4.8002-62.376-29.002-132.95-36.937-153.83-17.806-30.91-23.993-47.139-35.307-53.34-6.0746 10.077-19.376 23.876-17.403 44.207-2.6779 11.805 14.569 38.669 15.333 55.108-0.0261 20.154-4.1843 43.454-8.4451 66.892-48.098-3.6763-78.074-12.65-114.27 15.973-25.021 32.242-28.825 68.787-25.632 99.151-0.4755 30.626 17.575 47.997 13.467 70.453z" />
                            <path
                                d="m-919.16 476.97c21.17 34.344 37.55 47.97 61.398 67.7 21.795 16.869 41.748 25.218 69.231 81.027 18.709 51.182 15.967 83.785-3.3426 117.31-19.833 29.997-46.437 57.104-101.44 89.096-26.432 11.171-64.975 12.657-98.149 7.8634-33.319-3.2722-62.43-13.43-94.146-31.723-54.643-43.498-64.922-66.219-91.69-130.57-7.5268-27.831-11.54-47.661-14.461-73.386-1.4153-12.462-1.2184-25.364-1.8953-42.022s1.5807-36.701 4.6577-60.8c6.3422-26.337 9.0159-37.833 18.737-64.788-31.222-54.213-31.146-132.47-32.989-154.73 2.7412-35.567 1.3267-52.877 8.863-63.35 9.8252 6.4736 27.776 13.19 34.761 32.386 7.5054 9.4972 3.524 41.172 9.9224 56.334 8.712 18.174 22.509 37.405 36.457 56.716 41.814-24.052 64.993-45.071 110-34.851 36.476 18.306 55.663 49.64 65.872 78.414 13.632 27.429 4.834 50.885 18.221 69.375z" />
                            <path
                                d="m150.17 510.31c-16.564 36.787-31.05 52.412-52.154 75.052-19.437 19.539-38.147 30.391-58.203 89.279-11.952 53.168-5.0289 85.144 18.443 115.9 23.535 27.189 53.414 50.639 112.08 75.27 27.652 7.6688 66.064 4.1716 98.344-4.8597 32.619-7.5418 60.176-21.369 89.269-43.599 48.577-50.181 55.841-74.039 74.086-141.31 3.8749-28.569 5.2969-48.751 4.8763-74.638-0.20369-12.541-2.0627-25.309-3.5397-41.916-1.4771-16.607-6.3006-36.191-12.46-59.691-9.6857-25.299-13.82-36.354-26.935-61.831 23.97-57.787 13.803-135.38 12.76-157.69-7.3051-34.916-8.135-52.264-16.959-61.678-8.9083 7.6866-25.843 16.662-30.294 36.598-6.2179 10.386 1.815 41.282-2.5746 57.144-6.2955 19.146-17.497 39.996-28.839 60.944-44.566-18.459-70.263-36.313-113.57-20.375-33.811 22.857-48.796 56.404-55.209 86.254-9.9808 28.958 1.7685 51.083-9.1224 71.146z" />
                        </g>
                    </svg>
                </a>
                <a class="lien_avis text-dark fs-5" href="/formAvis">Donner votre avis</a>
            </div>
        </div>
        <a href="/listAvis"><button class="btn btn-bg-dark">Plus d'avis</button></a>
    </div>
</section>

<?php

require_once __DIR__ . "/pages/footer.php";

?>