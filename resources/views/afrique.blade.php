@extends ('layouts.new')

@section('menu')

        <div data-tms-ad-container="" class="o-ad-container o-ad-container--banner-top o-ad-container--with-background">
            <div class="o-ad-container__content o-ad-container__content--report-enabled">
                <div class="o-ad-container__content__ad" data-tms-ad-type="banner" data-tms-ad-status="idle" data-tms-ad-pos="1"></div>
                <button title="Signaler cette publicité" class="o-ad-container__content__report-link" rel="noopener" data-tms-ad-report=""><svg xmlns="http://www.w3.org/2000/svg" width="26.077" height="16.107"><g fill="none" stroke="currentColor">
                    <path d="M7.994 15.607a1.5 1.5 0 0 1-1.5-1.5v-3.423H1.325l5.169-4.547V2a1.5 1.5 0 0 1 1.5-1.5h16.083a1.5 1.5 0 0 1 1.5 1.5v12.107a1.5 1.5 0 0 1-1.5 1.5z">
                        </path><g stroke-width="2"><path d="M16.037 10.504v-7.84M16.037 13.442V11.71"></path></g></g></svg></button>
            </div>
        </div>
        <div class="o-ad-sponsoring" data-tms-ad-type="sponsoring" data-tms-ad-status="disabled">
            <a class="o-ad-sponsoring__link o-ad-sponsoring__start start_link" href="#"></a>
            <a class="o-ad-sponsoring__link o-ad-sponsoring__middle middle_link" href="#"></a>
            <a class="o-ad-sponsoring__link o-ad-sponsoring__end end_link" href="#"></a>
        </div>
        <link type="text/css" rel="stylesheet" href="./bernj/page-builder--fr.eb425e88bd42ce9e40d4.css">
        <div class="t-content t-content--page-builder">
        <div id="main-content" tabindex="-1">
        </div>

        <div class="t-content__section a-tag">
            <span class="a-tag__wrapper">
           {{$type}}
            </span><br>
       </div>

<section class="t-content__section-pb">
    <div class="o-layout-list o-layout-list--main-solo">
      <div class="o-layout-list__item o-layout-list__item--main-item">
        <div class="m-item-list-article  m-item-list-article--main-article" data-article-list="">

            <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[0]->titre )) ,"info_id"=>$article[0]->id,'type'=>$type])}}" data-article-item-link="">
            <div class="article__figure-wrapper">
              <figure class="m-figure m-figure--16x9 ">
                <picture>
                 <img src="/fab/{{$article[0]->im1}}" alt="000_32K64UZ" aria-hidden="true" sizes="(max-width: 1023px) calc(100vw - 40px), (min-width: 1024px) 980px" loading="eager" class="m-figure__img lazy">
                </picture>
              </figure>
            </div>
            <div class="article__infos">
             <p class="article__title ">{{$article[0]->titre}}</p><i>{{$article[0]->created_at}}</i>
            </div>
          </a>

        <!--  <div class="m-list-main-related">
            <a class="m-list-main-related__article" href="#">
              <span class="svg">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="1057.5 -2518.354 10.185 8.722"><path fill="none" stroke="currentColor" d="m1062.797-2517.999 4.168 4.143-4.168 3.857m3.655-3.907h-8.952"></path></svg>
              </span> Accord des 27 pour doper la rénovation énergétique, Paris et Berlin dénoncent un manque d'ambition
            </a>

             <a class="m-list-main-related__article" href="#">
               <span class="svg">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="1057.5 -2518.354 10.185 8.722"><path fill="none" stroke="currentColor" d="m1062.797-2517.999 4.168 4.143-4.168 3.857m3.655-3.907h-8.952"></path></svg>
                </span> Les prix du gaz baissent mais les problèmes sont "loin d'être derrière nous"
             </a>
         </div>-->

</div>
</div>
</div>
</section>



<section class="t-content__section-pb">
    <div class="o-layout-list ">

       <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
           <div class="m-item-list-article  " data-article-list="">
              <a href="{{route('pag', ["t"=> str_replace($symb1, "-", str_replace( $symb2 , $repla2,$article[1]->titre )),"info_id"=>$article[1]->id,'type'=>$type])}}" data-article-item-link="">
                 <div class="article__figure-wrapper">
                   <figure class="m-figure m-figure--16x9 ">
                     <picture>
                       <img src="/fab/{{$article[1]->im1}}" alt="" aria-hidden="true"  sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
                     </picture>
                   </figure>
                </div>

                  <div class="article__infos">
                     <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                      </path></svg></span>{{$article[1]->titre}}</p>
                  </div>
               </a>
           </div>
         </div>


         <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
           <div class="m-item-list-article  " data-article-list="">
              <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[2]->titre )),"info_id"=>$article[2]->id,'type'=>$type])}}" data-article-item-link="">
                 <div class="article__figure-wrapper">
                   <figure class="m-figure m-figure--16x9 ">
                     <picture>
                       <img src="/fab/{{$article[2]->im1}}" alt="" aria-hidden="true"  sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
                     </picture>
                   </figure>
                </div>

                  <div class="article__infos">
                     <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                      </path></svg></span>{{$article[2]->titre}}</p>
                  </div>
               </a>
           </div>
         </div>

         <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
           <div class="m-item-list-article  " data-article-list="">
              <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[3]->titre )) ,"info_id"=>$article[3]->id,'type'=>$type])}}" data-article-item-link="">
                 <div class="article__figure-wrapper">
                   <figure class="m-figure m-figure--16x9 ">
                     <picture>
                       <img src="/fab/{{$article[3]->im1}}" alt="" aria-hidden="true"  sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
                     </picture>
                   </figure>
                </div>

                  <div class="article__infos">
                     <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                      </path></svg></span>{{$article[3]->titre}}</p>
                  </div>
               </a>
           </div>
         </div>

         <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
           <div class="m-item-list-article  " data-article-list="">
              <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[4]->titre )) ,"info_id"=>$article[4]->id,'type'=>$type])}}" data-article-item-link="">
                 <div class="article__figure-wrapper">
                   <figure class="m-figure m-figure--16x9 ">
                     <picture>
                       <img src="/fab/{{$article[4]->im1}}" alt="" aria-hidden="true"  sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
                     </picture>
                   </figure>
                </div>

                  <div class="article__infos">
                     <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                      </path></svg></span>{{$article[4]->titre}}</p>
                  </div>
               </a>
           </div>
         </div>

         <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
           <div class="m-item-list-article  " data-article-list="">
              <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[5]->titre )) ,"info_id"=>$article[5]->id,'type'=>$type])}}" data-article-item-link="">
                 <div class="article__figure-wrapper">
                   <figure class="m-figure m-figure--16x9 ">
                     <picture>
                       <img src="/fab/{{$article[5]->im1}}" alt="" aria-hidden="true"  sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
                     </picture>
                   </figure>
                </div>

                  <div class="article__infos">
                     <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                      </path></svg></span>{{$article[5]->titre}}</p>
                  </div>
               </a>
           </div>
         </div>



               <div class="o-layout-list__item o-layout-list__item--with-ad l-m-100 l-t-50 l-d-33">
                   <div class="m-block-ad m-block-ad--h300" data-tms-ad-type="box" data-tms-ad-status="idle" data-tms-ad-pos="2">
           <div class="m-block-ad__label m-block-ad__label--report-enabled">
               <span class="m-block-ad__label__text">Publicité</span>
                           <button title="Signaler cette publicité" class="m-block-ad__label__report-link" rel="noopener" data-tms-ad-report=""><svg xmlns="http://www.w3.org/2000/svg" width="26.077" height="16.107"><g fill="none" stroke="currentColor"><path d="M7.994 15.607a1.5 1.5 0 0 1-1.5-1.5v-3.423H1.325l5.169-4.547V2a1.5 1.5 0 0 1 1.5-1.5h16.083a1.5 1.5 0 0 1 1.5 1.5v12.107a1.5 1.5 0 0 1-1.5 1.5z"></path><g stroke-width="2"><path d="M16.037 10.504v-7.84M16.037 13.442V11.71"></path></g></g></svg></button>
                       </div>
           <div class="m-block-ad__content">
           </div>
       </div>
           </div>
       </div>
</section>

<section class="t-content__section-pb">
    <div class="o-layout-list ">

       <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
           <div class="m-item-list-article  " data-article-list="">
              <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[6]->titre )) ,"info_id"=>$article[6]->id,'type'=>$type])}}" data-article-item-link="">
                 <div class="article__figure-wrapper">
                   <figure class="m-figure m-figure--16x9 ">
                     <picture>
                       <img src="/fab/{{$article[6]->im1}}" alt="" aria-hidden="true"  sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
                     </picture>
                   </figure>
                </div>

                  <div class="article__infos">
                     <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                      </path></svg></span>{{$article[6]->titre}}</p>
                  </div>
               </a>
           </div>
         </div>


         <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
           <div class="m-item-list-article  " data-article-list="">
              <a href="{{route('pag', ["t"=> str_replace($symb1, "-", str_replace( $symb2 , $repla2,$article[7]->titre )),"info_id"=>$article[7]->id,'type'=>$type])}}" data-article-item-link="">
                 <div class="article__figure-wrapper">
                   <figure class="m-figure m-figure--16x9 ">
                     <picture>
                       <img src="/fab/{{$article[7]->im1}}" alt="" aria-hidden="true"  sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
                     </picture>
                   </figure>
                </div>

                  <div class="article__infos">
                     <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                      </path></svg></span>{{$article[7]->titre}}</p>
                  </div>
               </a>
           </div>
         </div>

         <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
           <div class="m-item-list-article  " data-article-list="">
              <a href="{{route('pag', ["t"=> str_replace($symb1, "-", str_replace( $symb2 , $repla2,$article[8]->titre )) ,"info_id"=>$article[8]->id,'type'=>$type])}}" data-article-item-link="">
                 <div class="article__figure-wrapper">
                   <figure class="m-figure m-figure--16x9 ">
                     <picture>
                       <img src="/fab/{{$article[8]->im1}}" alt="" aria-hidden="true"  sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
                     </picture>
                   </figure>
                </div>

                  <div class="article__infos">
                     <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                      </path></svg></span>{{$article[8]->titre}}</p>
                  </div>
               </a>
           </div>
         </div>

         <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
           <div class="m-item-list-article  " data-article-list="">
              <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[9]->titre )) ,"info_id"=>$article[9]->id,'type'=>$type])}}" data-article-item-link="">
                 <div class="article__figure-wrapper">
                   <figure class="m-figure m-figure--16x9 ">
                     <picture>
                       <img src="/fab/{{$article[9]->im1}}" alt="" aria-hidden="true"  sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
                     </picture>
                   </figure>
                </div>

                  <div class="article__infos">
                     <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                      </path></svg></span>{{$article[9]->titre}}</p>
                  </div>
               </a>
           </div>
         </div>

         <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
           <div class="m-item-list-article  " data-article-list="">
              <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[10]->titre )) ,"info_id"=>$article[10]->id,'type'=>$type])}}" data-article-item-link="">
                 <div class="article__figure-wrapper">
                   <figure class="m-figure m-figure--16x9 ">
                     <picture>
                       <img src="/fab/{{$article[10]->im1}}" alt="" aria-hidden="true"  sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
                     </picture>
                   </figure>
                </div>

                  <div class="article__infos">
                     <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                      </path></svg></span>{{$article[10]->titre}}</p>
                  </div>
               </a>
           </div>
         </div>



               <div class="o-layout-list__item o-layout-list__item--with-ad l-m-100 l-t-50 l-d-33">
                   <div class="m-block-ad m-block-ad--h300" data-tms-ad-type="box" data-tms-ad-status="idle" data-tms-ad-pos="2">
           <div class="m-block-ad__label m-block-ad__label--report-enabled">
               <span class="m-block-ad__label__text">Publicité</span>
                           <button title="Signaler cette publicité" class="m-block-ad__label__report-link" rel="noopener" data-tms-ad-report=""><svg xmlns="http://www.w3.org/2000/svg" width="26.077" height="16.107"><g fill="none" stroke="currentColor"><path d="M7.994 15.607a1.5 1.5 0 0 1-1.5-1.5v-3.423H1.325l5.169-4.547V2a1.5 1.5 0 0 1 1.5-1.5h16.083a1.5 1.5 0 0 1 1.5 1.5v12.107a1.5 1.5 0 0 1-1.5 1.5z"></path><g stroke-width="2"><path d="M16.037 10.504v-7.84M16.037 13.442V11.71"></path></g></g></svg></button>
                       </div>
           <div class="m-block-ad__content">
           </div>
       </div>
           </div>
       </div>
</section>


@endsection
