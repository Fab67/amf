@extends ('layouts.new')

@section('menu')

         <main data-nav-container="" role="main">

            <!--ESPACE BLANC-->
            <!--
     <div data-tms-ad-container="" class="o-ad-container o-ad-container--banner-top o-ad-container--with-background">
        <div class="o-ad-container__content o-ad-container__content--report-enabled">
            <div class="o-ad-container__content__ad" data-tms-ad-type="banner" data-tms-ad-status="idle" data-tms-ad-pos="1"></div>
                            <button title="Signaler cette publicité" class="o-ad-container__content__report-link" rel="noopener" data-tms-ad-report=""><svg xmlns="http://www.w3.org/2000/svg" width="26.077" height="16.107"><g fill="none" stroke="currentColor"><path d="M7.994 15.607a1.5 1.5 0 0 1-1.5-1.5v-3.423H1.325l5.169-4.547V2a1.5 1.5 0 0 1 1.5-1.5h16.083a1.5 1.5 0 0 1 1.5 1.5v12.107a1.5 1.5 0 0 1-1.5 1.5z"></path><g stroke-width="2"><path d="M16.037 10.504v-7.84M16.037 13.442V11.71"></path></g></g></svg></button>
           </div>
    </div>
    <div class="o-ad-sponsoring" data-tms-ad-type="sponsoring" data-tms-ad-status="disabled">
    <a class="o-ad-sponsoring__link o-ad-sponsoring__start start_link" href="https://www.france24.com/fr/#"></a>
    <a class="o-ad-sponsoring__link o-ad-sponsoring__middle middle_link" href="https://www.france24.com/fr/#"></a>
    <a class="o-ad-sponsoring__link o-ad-sponsoring__end end_link" href="https://www.france24.com/fr/#"></a>
    </div>
    <link type="text/css" rel="stylesheet" href="./bernj/page-builder--fr.eb425e88bd42ce9e40d4.css">
    <div class="t-content t-content--page-builder">
    <div id="main-content" tabindex="-1"></div>-->



    <section class="t-content__section-pb">

        <div class="o-banana-split ">
         <div class="o-layout-list o-banana-split__main-articles">
          <div class="o-layout-list__item o-layout-list__item--main-item">
           <div class="m-item-list-article  m-item-list-article--main-article" data-article-list="">


                <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[0]->titre )) ,"info_id"=>$article[0]->id,'type'=>'info+'])}}" data-article-item-link="">
                  <div class="article__figure-wrapper">
                        <figure class="m-figure m-figure--16x9 ">
                        <picture>
                        <img src="/fab/{{$article[0]->im1}}" alt="" aria-hidden="true"  sizes="(max-width: 639px) 100vw, (max-width: 1023px) calc(100vw - 40px), (min-width: 1024px) 642px" loading="eager" class="m-figure__img lazy">
                        </picture>
                            </figure>
                  </div>
                </a>


                  <div class="article__infos">
                        <div class="a-tag"><span class="a-tag__wrapper">Heure par Heure</span></div>
                       <p class="article__title "><span class="article__type">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video">
                        <path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z"></path></svg>
                        </span>{{$article[0]->titre}}</p>
                  </div>


      </div>
     </div>

    <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
     <div class="m-item-list-article  " data-article-list="">
        <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[1]->titre )),"info_id"=>$article[1]->id,'type'=>'info+'])}}" data-article-item-link="">
            <div class="article__figure-wrapper">
                    <figure class="m-figure m-figure--16x9 ">
                    <picture>

                    <img src="/fab/{{$article[1]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
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
           <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[2]->titre )) ,"info_id"=>$article[2]->id ,'type'=>'info+'])}}" data-article-item-link="">

                   <div class="article__figure-wrapper">
                       <figure class="m-figure m-figure--16x9 ">
                       <picture>

                       <img src="/fab/{{$article[2]->im1}}" alt="000_32JR9ZT" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
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
           <a href="{{route('pag', ["t"=> str_replace(  $symb1, "-", str_replace( $symb2 , $repla2,$article[3]->titre )) ,"info_id"=>$article[3]->id,'type'=>'info+'])}}" data-article-item-link="">
                   <div class="article__figure-wrapper">
                       <figure class="m-figure m-figure--16x9 ">
                          <picture>
                              <img src="/fab/{{$article[3]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
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
           <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[4]->titre )) ,"info_id"=>$article[4]->id,'type'=>'info+'])}}" data-article-item-link="">

                   <div class="article__figure-wrapper">
                       <figure class="m-figure m-figure--16x9 ">
                       <picture>

                       <img src="/fab/{{$article[4]->im1}}" alt="000_32JR9ZT" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
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
           <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[5]->titre )) ,"info_id"=>$article[5]->id,'type'=>'info+'])}}" data-article-item-link="">

                   <div class="article__figure-wrapper">
                       <figure class="m-figure m-figure--16x9 ">
                       <picture>

                       <img src="/fab/{{$article[5]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
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

    <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
        <div class="m-item-list-article  " data-article-list="">
           <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[6]->titre )) ,"info_id"=>$article[6]->id,'type'=>'info+'])}}" data-article-item-link="">

                   <div class="article__figure-wrapper">
                       <figure class="m-figure m-figure--16x9 ">
                       <picture>

                       <img src="/fab/{{$article[6]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
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

</div>

<!--L'Info en continu  -->
<div class="o-block-ad-n-newsfeed o-banana-split__ad-n-newsfeed">
      <aside data-org-name="1" data-org-type="banana-split--main-with-related" class="o-aside-content  o-aside-content--no-background o-aside-content--news-feed">
                <div class="o-aside-content__row o-aside-content__row--center">
                        <div class="o-aside-content__title a-aside-title"><span class="a-aside-title__content">L'Info en continu</span></div>
                </div>
        <ol class="o-layout-list o-layout-list--news-feed">
        <li class="o-layout-list__item">
                <div class="m-item-news-feed">
                    <div class="news__content">

                            <p class="news__content__title"><span class="news__content__title__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z"></path></svg>
                            </span>{{$infos[0]->titre}}
                            </p>

                  </div>
               </div>
            </li>

            <li class="o-layout-list__item">
                   <div class="m-item-news-feed">
                         <div class="news__content">
                                    <p class="news__content__title"><span class="news__content__title__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z"></path></svg>
                                            </span>{{$infos[1]->titre}}
                                    </p>

                         </div>
                   </div>
            </li>

            <li class="o-layout-list__item">
                <div class="m-item-news-feed">
                    <div class="news__content">
                                <p class="news__content__title"><span class="news__content__title__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video">
                                    <path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z"></path></svg>
                                </span>{{$infos[2]->titre}}
                                </p>

                  </div>
               </div>
            </li>

            <li class="o-layout-list__item">
                 <div class="m-item-news-feed">
                      <div class="news__content">
                                    <p class="news__content__title"><span class="news__content__title__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z"></path></svg>
                                    </span>{{$infos[3]->titre}}
                                    </p>

                       </div>
                 </div>
            </li>

            <li class="o-layout-list__item">
                <div class="m-item-news-feed">
                    <div class="news__content">
                                <p class="news__content__title"><span class="news__content__title__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z"></path></svg>
                                </span>{{$infos[4]->titre}}
                                </p>
                  </div>
              </div>
            </li>  </ol>

 </aside>


            <div class="m-block-ad " data-tms-ad-type="bigbox" data-tms-ad-status="idle" data-tms-ad-pos="1">
        <div class="m-block-ad__label m-block-ad__label--report-enabled">
            <span class="m-block-ad__label__text">Publicité</span>
                        <button title="Signaler cette publicité" class="m-block-ad__label__report-link" rel="noopener" data-tms-ad-report=""><svg xmlns="http://www.w3.org/2000/svg" width="26.077" height="16.107"><g fill="none" stroke="currentColor"><path d="M7.994 15.607a1.5 1.5 0 0 1-1.5-1.5v-3.423H1.325l5.169-4.547V2a1.5 1.5 0 0 1 1.5-1.5h16.083a1.5 1.5 0 0 1 1.5 1.5v12.107a1.5 1.5 0 0 1-1.5 1.5z"></path><g stroke-width="2"><path d="M16.037 10.504v-7.84M16.037 13.442V11.71"></path></g></g></svg></button>
                    </div>
        <div class="m-block-ad__content">
        </div>
    </div>
</div>

<!-- END de L'Info en continu  -->
</div>
</section>


    <!--CDM 2022-->
    <section class="t-content__section-pb">
        <aside data-org-name="Videomobile" data-org-type="aside-content--highlighted" class="o-aside-content  o-aside-content--overflow-background o-aside-content--highlighted">
            <div class="o-aside-content__row o-aside-content__row--center">
             <div class="o-aside-content__title a-aside-title"><span class="a-aside-title__content">Immobilier</span></div>
            </div>

            <div class="m-item-list-article  m-item-list-article--highlighted-main" data-article-list="">
                    <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$cdm[0]->titre )) ,"info_id"=>$cdm[0]->id,'type'=>'Immobilier'])}}" data-article-item-link="" data-tms-tr="">

                  <div class="article__figure-wrapper">
                      <figure class="m-figure m-figure--16x9 ">
                          <picture>
                             <img src="/fab/{{$cdm[0]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(100vw - 32px), (max-width: 1023px) calc(50vw - 66px), (min-width: 1024px) 464px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                          </picture>
                     </figure>
                  </div>

                  <div class="article__infos">
                       <p class="article__title "><span class="article__type">&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                        </path></svg></span>{{$cdm[0]->titre}}</p>
                         </div>
                 </a>
            </div>


         <div class="o-layout-list o-layout-list--highlighted">

                <div class="o-layout-list__item l-m-100 l-t-100 l-d-100">
                    <div class="m-item-list-article  m-item-list-article--keep-it-horizontal" data-article-list="">
                                <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$cdm[1]->titre )),"info_id"=>$cdm[1]->id,'type'=>'Immobilier'])}}" data-article-item-link="" data-tms-tr="">
                                    <div class="article__figure-wrapper">
                                        <figure class="m-figure m-figure--16x9 ">
                                            <picture>
                                                <img src="/fab/{{$cdm[1]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(21vw - 36px), (min-width: 1024px) 200px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                            </picture>
                                        </figure>
                                    </div>

                                <div class="article__infos">
                                    <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                        </path></svg></span>{{$cdm[1]->titre}}</p>
                                </div>
                             </a>
                     </div>
                </div>

                <div class="o-layout-list__item l-m-100 l-t-100 l-d-100">
                    <div class="m-item-list-article  m-item-list-article--keep-it-horizontal" data-article-list="">
                                <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$cdm[2]->titre )),"info_id"=>$cdm[2]->id,'type'=>'Immobilier'])}}" data-article-item-link="" data-tms-tr="">
                                    <div class="article__figure-wrapper">
                                        <figure class="m-figure m-figure--16x9 ">
                                            <picture>
                                                <img src="/fab/{{$cdm[2]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(21vw - 36px), (min-width: 1024px) 200px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                            </picture>
                                        </figure>
                                    </div>

                                <div class="article__infos">
                                    <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                        </path></svg></span>{{$cdm[2]->titre}}</p>
                                </div>
                             </a>
                     </div>
                </div>


                <div class="o-layout-list__item l-m-100 l-t-100 l-d-100">
                    <div class="m-item-list-article  m-item-list-article--keep-it-horizontal" data-article-list="">
                                <a href="{{route('Immobilier', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$cdm[3]->titre )),"info_id"=>$cdm[3]->id,'type'=>'cdm'])}}" data-article-item-link="" data-tms-tr="">
                                    <div class="article__figure-wrapper">
                                        <figure class="m-figure m-figure--16x9 ">
                                            <picture>
                                                <img src="/fab/{{$cdm[3]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(21vw - 36px), (min-width: 1024px) 200px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                            </picture>
                                        </figure>
                                    </div>

                                <div class="article__infos">
                                    <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                        </path></svg></span>{{$cdm[3]->titre}}</p>
                                </div>
                             </a>
                     </div>
                </div>
            </div>


              <div class="o-aside-content__row o-aside-content__row--flex-end">
                    <a class="o-aside-content__see-more" href="{{route('Immobilier',['menu'=>encrypt(8),'type'=>'Immobilier'])}}" data-tms-tr="">
                        voir plus <span class="svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="1057.5 -2518.354 10.185 8.722"><path fill="none" stroke="currentColor" d="m1062.797-2517.999 4.168 4.143-4.168 3.857m3.655-3.907h-8.952"></path></svg></span>
                     </a>
                </div>
    </aside>
    </section>




<br><br>

<!--ARTICLES-->

<section class="t-content__section-pb">
 <div class="o-layout-list ">

    <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
        <div class="m-item-list-article  " data-article-list="">
           <a href="{{route('pag', ["t"=> str_replace($symb1, "-", str_replace( $symb2 , $repla2,$article[7]->titre )) ,"info_id"=>$article[7]->id,'type'=>'info+'])}}" data-article-item-link="">
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
           <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[8]->titre )) ,"info_id"=>$article[8]->id,'type'=>'info+'])}}" data-article-item-link="">
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
           <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[9]->titre )) ,"info_id"=>$article[9]->id,'type'=>'info+'])}}" data-article-item-link="">
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
           <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[10]->titre )) ,"info_id"=>$article[10]->id,'type'=>'info+'])}}" data-article-item-link="">
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

      <div class="o-layout-list__item l-m-100 l-t-50 l-d-50">
        <div class="m-item-list-article  " data-article-list="">
           <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$article[11]->titre )) ,"info_id"=>$article[11]->id,'type'=>'info+'])}}" data-article-item-link="">
              <div class="article__figure-wrapper">
                <figure class="m-figure m-figure--16x9 ">
                  <picture>
                    <img src="/fab/{{$article[11]->im1}}" alt="" aria-hidden="true"  sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="eager" class="m-figure__img lazy">
                  </picture>
                </figure>
             </div>

               <div class="article__infos">
                  <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                   </path></svg></span>{{$article[11]->titre}}</p>
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



        <!--INSTANT MOBILE-->
        <section class="t-content__section-pb">
            <aside data-org-name="Videomobile" data-org-type="aside-content--highlighted" class="o-aside-content  o-aside-content--overflow-background o-aside-content--highlighted">
                <div class="o-aside-content__row o-aside-content__row--center">
                 <div class="o-aside-content__title a-aside-title"><span class="a-aside-title__content">INSTANT WEB</span></div>
                </div>

                <div class="m-item-list-article  m-item-list-article--highlighted-main" data-article-list="">
                        <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$web[0]->titre )) ,"info_id"=>$web[0]->id,'type'=>'web'])}}" data-article-item-link="" data-tms-tr="">

                      <div class="article__figure-wrapper">
                          <figure class="m-figure m-figure--16x9 ">
                              <picture>
                                 <img src="/fab/{{$web[0]->im1}}" alt="&quot;C’était horrible&quot; : les ratés du tourisme dentaire en Turquie" aria-hidden="true" sizes="(max-width: 639px) calc(100vw - 32px), (max-width: 1023px) calc(50vw - 66px), (min-width: 1024px) 464px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                              </picture>
                         </figure>
                      </div>

                      <div class="article__infos">
                           <p class="article__title "><span class="article__type">&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                            </path></svg></span>{{$web[0]->titre}}</p>
                             </div>
                     </a>
                </div>


             <div class="o-layout-list o-layout-list--highlighted">

                    <div class="o-layout-list__item l-m-100 l-t-100 l-d-100">
                        <div class="m-item-list-article  m-item-list-article--keep-it-horizontal" data-article-list="">
                                    <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$web[1]->titre )),"info_id"=>$web[1]->id,'type'=>'web'])}}" data-article-item-link="" data-tms-tr="">
                                        <div class="article__figure-wrapper">
                                            <figure class="m-figure m-figure--16x9 ">
                                                <picture>
                                                    <img src="/fab/{{$web[1]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(21vw - 36px), (min-width: 1024px) 200px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                                </picture>
                                            </figure>
                                        </div>

                                    <div class="article__infos">
                                        <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                            </path></svg></span>{{$web[1]->titre}}</p>
                                    </div>
                                 </a>
                         </div>
                    </div>

                    <div class="o-layout-list__item l-m-100 l-t-100 l-d-100">
                        <div class="m-item-list-article  m-item-list-article--keep-it-horizontal" data-article-list="">
                                    <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$web[2]->titre )) ,"info_id"=>$web[2]->id,'type'=>'web'])}}" data-article-item-link="" data-tms-tr="">
                                        <div class="article__figure-wrapper">
                                            <figure class="m-figure m-figure--16x9 ">
                                                <picture>
                                                    <img src="/fab/{{$web[2]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(21vw - 36px), (min-width: 1024px) 200px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                                </picture>
                                            </figure>
                                        </div>

                                    <div class="article__infos">
                                        <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                            </path></svg></span>{{$web[2]->titre}}</p>
                                    </div>
                                 </a>
                         </div>
                    </div>


                    <div class="o-layout-list__item l-m-100 l-t-100 l-d-100">
                        <div class="m-item-list-article  m-item-list-article--keep-it-horizontal" data-article-list="">
                                    <a href="{{route('pag', ["t"=>str_replace($symb1, "-", str_replace( $symb2 , $repla2,$web[3]->titre )) ,"info_id"=>$web[3]->id,'type'=>'web'])}}" data-article-item-link="" data-tms-tr="">
                                        <div class="article__figure-wrapper">
                                            <figure class="m-figure m-figure--16x9 ">
                                                <picture>
                                                    <img src="/fab/{{$web[3]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(21vw - 36px), (min-width: 1024px) 200px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                                </picture>
                                            </figure>
                                        </div>

                                    <div class="article__infos">
                                        <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                            </path></svg></span>{{$web[3]->titre}}</p>
                                    </div>
                                 </a>
                         </div>
                    </div>
                </div>


                  <div class="o-aside-content__row o-aside-content__row--flex-end">
                        <a class="o-aside-content__see-more" href="{{route('web',['menu'=>encrypt(10),'type'=>'web'])}}" data-tms-tr="">
                            voir plus <span class="svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="1057.5 -2518.354 10.185 8.722"><path fill="none" stroke="currentColor" d="m1062.797-2517.999 4.168 4.143-4.168 3.857m3.655-3.907h-8.952"></path></svg></span>
                         </a>
                    </div>
        </aside>
        </section>


            <!--AFRIQUE-->
            <section class="t-content__section-pb">
                <aside data-org-name="Afrique" data-org-type="aside-content--sponsors" class="o-aside-content  o-aside-content--no-background">

                    <div class="o-aside-content__row o-aside-content__row--center">
                        <div class="o-aside-content__title a-aside-title"><span class="a-aside-title__content">Afrique</span></div>
                    </div>

                    <div class="o-layout-list ">
                         <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                              <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                                 <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$afrique[0]->titre )) ,"info_id"=>$afrique[0]->id,'type'=>'afrique'])}}" data-article-item-link="" data-tms-tr="">
                                      <div class="article__figure-wrapper">
                                          <figure class="m-figure m-figure--16x9 ">
                                              <picture>
                                                  <img src="/fab/{{$afrique[0]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                              </picture>
                                          </figure>
                                      </div>
                                      <div class="article__infos">
                                          <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                            </path></svg></span>{{$afrique[0]->titre}}</p>
                                      </div>
                                  </a>
                              </div>
                         </div>

                         <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                             <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                                 <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$afrique[1]->titre )) ,"info_id"=>$afrique[1]->id,'type'=>'afrique'])}}" data-article-item-link="" data-tms-tr="">
                                     <div class="article__figure-wrapper">
                                         <figure class="m-figure m-figure--16x9 ">
                                             <picture>
                                                 <img src="/fab/{{$afrique[1]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                             </picture>
                                         </figure>
                                     </div>
                                    <div class="article__infos">
                                        <p class="article__title ">{{$afrique[1]->titre}}</p>
                                    </div>
                               </a>
                            </div>
                        </div>

                        <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                            <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                                <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$afrique[2]->titre )) ,"info_id"=>$afrique[2]->id,'type'=>'afrique'])}}" data-article-item-link="" data-tms-tr="">
                                     <div class="article__figure-wrapper">
                                          <figure class="m-figure m-figure--16x9 ">
                                               <picture>
                                                   <img src="/fab/{{$afrique[2]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                              </picture>
                                          </figure>
                                      </div>
                                      <div class="article__infos">
                                            <p class="article__title ">{{$afrique[2]->titre}}</p>
                                      </div>
                               </a>
                            </div>
                      </div>
                    </div>

                            <div class="o-aside-content__row o-aside-content__row--flex-end">
                                <a class="o-aside-content__see-more" href="{{route('afrique',['menu'=>encrypt(11),'type'=>'afrique'])}}" data-tms-tr="">
                                    Lire plus  <span class="svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="1057.5 -2518.354 10.185 8.722"><path fill="none" stroke="currentColor" d="m1062.797-2517.999 4.168 4.143-4.168 3.857m3.655-3.907h-8.952"></path></svg></span>
                                </a>
                            </div>
          </aside>
     </section>


<!--PEOPLE-->

<section class="t-content__section-pb">
    <aside data-org-name="Videomobile" data-org-type="aside-content--highlighted" class="o-aside-content  o-aside-content--overflow-background o-aside-content--highlighted">
        <div class="o-aside-content__row o-aside-content__row--center">
         <div class="o-aside-content__title a-aside-title"><span class="a-aside-title__content"> PEOPLE</span></div>
        </div>

        <div class="m-item-list-article  m-item-list-article--highlighted-main" data-article-list="">
                <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$people[0]->titre )) ,"info_id"=>$people[0]->id,'type'=>'people'])}}" data-article-item-link="" data-tms-tr="">

              <div class="article__figure-wrapper">
                  <figure class="m-figure m-figure--16x9 ">
                      <picture>
                         <img src="/fab/{{$people[0]->im1}}" alt="&quot;C’était horrible&quot; : les ratés du tourisme dentaire en Turquie" aria-hidden="true" sizes="(max-width: 639px) calc(100vw - 32px), (max-width: 1023px) calc(50vw - 66px), (min-width: 1024px) 464px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                      </picture>
                 </figure>
              </div>

              <div class="article__infos">
                   <p class="article__title "><span class="article__type">&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                    </path></svg></span>{{$people[0]->titre}}</p>
                     </div>
             </a>
        </div>


     <div class="o-layout-list o-layout-list--highlighted">

            <div class="o-layout-list__item l-m-100 l-t-100 l-d-100">
                <div class="m-item-list-article  m-item-list-article--keep-it-horizontal" data-article-list="">
                            <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$people[1]->titre )),"info_id"=>$people[1]->id,'type'=>'people'])}}" data-article-item-link="" data-tms-tr="">
                                <div class="article__figure-wrapper">
                                    <figure class="m-figure m-figure--16x9 ">
                                        <picture>
                                            <img src="/fab/{{$people[1]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(21vw - 36px), (min-width: 1024px) 200px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                        </picture>
                                    </figure>
                                </div>

                            <div class="article__infos">
                                <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                    </path></svg></span>{{$people[1]->titre}}</p>
                            </div>
                         </a>
                 </div>
            </div>

            <div class="o-layout-list__item l-m-100 l-t-100 l-d-100">
                <div class="m-item-list-article  m-item-list-article--keep-it-horizontal" data-article-list="">
                            <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$people[2]->titre )) ,"info_id"=>$people[2]->id,'type'=>'people'])}}" data-article-item-link="" data-tms-tr="">
                                <div class="article__figure-wrapper">
                                    <figure class="m-figure m-figure--16x9 ">
                                        <picture>
                                            <img src="/fab/{{$people[2]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(21vw - 36px), (min-width: 1024px) 200px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                        </picture>
                                    </figure>
                                </div>

                            <div class="article__infos">
                                <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                    </path></svg></span>{{$people[2]->titre}}</p>
                            </div>
                         </a>
                 </div>
            </div>


            <div class="o-layout-list__item l-m-100 l-t-100 l-d-100">
                <div class="m-item-list-article  m-item-list-article--keep-it-horizontal" data-article-list="">
                            <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$people[3]->titre )) ,"info_id"=>$people[3]->id,'type'=>'people'])}}" data-article-item-link="" data-tms-tr="">
                                <div class="article__figure-wrapper">
                                    <figure class="m-figure m-figure--16x9 ">
                                        <picture>
                                            <img src="/fab/{{$people[3]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(21vw - 36px), (min-width: 1024px) 200px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                        </picture>
                                    </figure>
                                </div>

                            <div class="article__infos">
                                <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                    </path></svg></span>{{$people[3]->titre}}</p>
                            </div>
                         </a>
                 </div>
            </div>
        </div>


          <div class="o-aside-content__row o-aside-content__row--flex-end">
                <a class="o-aside-content__see-more" href="{{route('people',['menu'=>encrypt(7),'type'=>'people'])}}" data-tms-tr="">
                    voir plus <span class="svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="1057.5 -2518.354 10.185 8.722"><path fill="none" stroke="currentColor" d="m1062.797-2517.999 4.168 4.143-4.168 3.857m3.655-3.907h-8.952"></path></svg></span>
                 </a>
            </div>
</aside>
</section>


            <!--AFRIQUE-->



            <!--TECH-->

            <section class="t-content__section-pb">
                <aside data-org-name="Afrique" data-org-type="aside-content--sponsors" class="o-aside-content  o-aside-content--no-background">

                    <div class="o-aside-content__row o-aside-content__row--center">
                        <div class="o-aside-content__title a-aside-title"><span class="a-aside-title__content">TECH</span></div>
                    </div>

                    <div class="o-layout-list ">
                         <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                              <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                                 <a href="{{route('pag', ["t"=>str_replace($symb1, "-", str_replace( $symb2 , $repla2,$tech[0]->titre )) ,"info_id"=>$tech[0]->id,'type'=>'Tech'])}}" data-article-item-link="" data-tms-tr="">
                                      <div class="article__figure-wrapper">
                                          <figure class="m-figure m-figure--16x9 ">
                                              <picture>
                                                  <img src="/fab/{{$tech[0]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                              </picture>
                                          </figure>
                                      </div>
                                      <div class="article__infos">
                                          <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                            </path></svg></span>{{$tech[0]->titre}}</p>
                                      </div>
                                  </a>
                              </div>
                         </div>

                         <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                             <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                                 <a href="{{route('pag', ["t"=> str_replace($symb1, "-", str_replace( $symb2 , $repla2,$tech[1]->titre )) ,"info_id"=>$tech[1]->id,'type'=>'Tech'])}}" data-article-item-link="" data-tms-tr="">
                                     <div class="article__figure-wrapper">
                                         <figure class="m-figure m-figure--16x9 ">
                                             <picture>
                                                 <img src="/fab/{{$tech[1]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                             </picture>
                                         </figure>
                                     </div>
                                    <div class="article__infos">
                                        <p class="article__title ">{{$tech[1]->titre}}</p>
                                    </div>
                               </a>
                            </div>
                        </div>

                        <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                            <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                                <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$tech[2]->titre )) ,"info_id"=>$tech[2]->id,'type'=>'Tech'])}}" data-article-item-link="" data-tms-tr="">
                                     <div class="article__figure-wrapper">
                                          <figure class="m-figure m-figure--16x9 ">
                                               <picture>
                                                   <img src="/fab/{{$tech[2]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                              </picture>
                                          </figure>
                                      </div>
                                      <div class="article__infos">
                                            <p class="article__title ">{{$tech[2]->titre}}</p>
                                      </div>
                               </a>
                            </div>
                      </div>
                    </div>

                            <div class="o-aside-content__row o-aside-content__row--flex-end">
                                <a class="o-aside-content__see-more" href="{{route('Tech',['menu'=>encrypt(11),'type'=>'Tech'])}}" data-tms-tr="">
                                    Lire plus  <span class="svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="1057.5 -2518.354 10.185 8.722"><path fill="none" stroke="currentColor" d="m1062.797-2517.999 4.168 4.143-4.168 3.857m3.655-3.907h-8.952"></path></svg></span>
                                </a>
                            </div>
          </aside>
     </section>


            <!--SPORT-->

<section class="t-content__section-pb">
    <aside data-org-name="Afrique" data-org-type="aside-content--sponsors" class="o-aside-content  o-aside-content--no-background">

        <div class="o-aside-content__row o-aside-content__row--center">
            <div class="o-aside-content__title a-aside-title"><span class="a-aside-title__content">SPORT</span></div>
        </div>

        <div class="o-layout-list ">
             <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                  <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                     <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$sport[0]->titre )) ,"info_id"=>$sport[0]->id,'type'=>'sport'])}}" data-article-item-link="" data-tms-tr="">
                          <div class="article__figure-wrapper">
                              <figure class="m-figure m-figure--16x9 ">
                                  <picture>
                                      <img src="/fab/{{$sport[0]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                  </picture>
                              </figure>
                          </div>
                          <div class="article__infos">
                              <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                </path></svg></span>{{$sport[0]->titre}}</p>
                          </div>
                      </a>
                  </div>
             </div>

             <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                 <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                     <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$sport[1]->titre )) ,"info_id"=>$sport[1]->id,'type'=>'sport'])}}" data-article-item-link="" data-tms-tr="">
                         <div class="article__figure-wrapper">
                             <figure class="m-figure m-figure--16x9 ">
                                 <picture>
                                     <img src="/fab/{{$sport[1]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                 </picture>
                             </figure>
                         </div>
                        <div class="article__infos">
                            <p class="article__title ">{{$sport[1]->titre}}</p>
                        </div>
                   </a>
                </div>
            </div>

            <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                    <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$sport[2]->titre )) ,"info_id"=>$sport[2]->id,'type'=>'sport'])}}" data-article-item-link="" data-tms-tr="">
                         <div class="article__figure-wrapper">
                              <figure class="m-figure m-figure--16x9 ">
                                   <picture>
                                       <img src="/fab/{{$sport[2]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                  </picture>
                              </figure>
                          </div>
                          <div class="article__infos">
                                <p class="article__title ">{{$sport[2]->titre}}</p>
                          </div>
                   </a>
                </div>
          </div>
        </div>

                <div class="o-aside-content__row o-aside-content__row--flex-end">
                    <a class="o-aside-content__see-more" href="{{route('Environnement',['menu'=>encrypt(13),'type'=>'Environnement'])}}" data-tms-tr="">
                        Lire plus <span class="svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="1057.5 -2518.354 10.185 8.722"><path fill="none" stroke="currentColor" d="m1062.797-2517.999 4.168 4.143-4.168 3.857m3.655-3.907h-8.952"></path></svg></span>
                    </a>
                </div>
     </aside>
     </section>

            <!--EVIRONNEMENT-->

            <section class="t-content__section-pb">
                <aside data-org-name="Afrique" data-org-type="aside-content--sponsors" class="o-aside-content  o-aside-content--no-background">

                    <div class="o-aside-content__row o-aside-content__row--center">
                        <div class="o-aside-content__title a-aside-title"><span class="a-aside-title__content">ENVIRONNEMENT</span></div>
                    </div>

                    <div class="o-layout-list ">
                         <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                              <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                     <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$Environnement[0]->titre )) ,"info_id"=>$Environnement[0]->id,'type'=>'Environnement'])}}" data-article-item-link="" data-tms-tr="">
                                      <div class="article__figure-wrapper">
                                          <figure class="m-figure m-figure--16x9 ">
                                              <picture>
                                                  <img src="/fab/{{$Environnement[0]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                              </picture>
                                          </figure>
                                      </div>
                                      <div class="article__infos">
                                          <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                            </path></svg></span>{{$Environnement[0]->titre}}</p>
                                      </div>
                                  </a>
                              </div>
                         </div>

                         <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                             <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                        <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$Environnement[1]->titre )) ,"info_id"=>$Environnement[1]->id,'type'=>'Environnement'])}}" data-article-item-link="" data-tms-tr="">
                                     <div class="article__figure-wrapper">
                                         <figure class="m-figure m-figure--16x9 ">
                                             <picture>
                                                 <img src="/fab/{{$Environnement[1]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                             </picture>
                                         </figure>
                                     </div>
                                    <div class="article__infos">
                                        <p class="article__title ">{{$Environnement[1]->titre}}</p>
                                    </div>
                               </a>
                            </div>
                        </div>

                        <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                            <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                  <a href="{{route('pag', ["t"=> str_replace($symb1, "-", str_replace( $symb2 , $repla2,$Environnement[2]->titre )) ,"info_id"=>$Environnement[2]->id,'type'=>'Environnement'])}}" data-article-item-link="" data-tms-tr="">
                                     <div class="article__figure-wrapper">
                                          <figure class="m-figure m-figure--16x9 ">
                                               <picture>
                                                   <img src="/fab/{{$Environnement[2]->im1}}" alt="" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                              </picture>
                                          </figure>
                                      </div>
                                      <div class="article__infos">
                                            <p class="article__title ">{{$Environnement[2]->titre}}</p>
                                      </div>
                               </a>
                            </div>
                      </div>
                    </div>

                            <div class="o-aside-content__row o-aside-content__row--flex-end">
                                <a class="o-aside-content__see-more" href="{{route('Environnement',['menu'=>encrypt(13),'type'=>'Environnement'])}}" data-tms-tr="">
                                    Lire plus  <span class="svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="1057.5 -2518.354 10.185 8.722"><path fill="none" stroke="currentColor" d="m1062.797-2517.999 4.168 4.143-4.168 3.857m3.655-3.907h-8.952"></path></svg></span>
                                </a>
                            </div>
          </aside>
     </section>


            <!--SPONSORS-->


            <!--PARTENAIRES-->




    </div>

<a href="https://tierceinfos.com/" target="_blank">partenaire</a>
    @endsection
