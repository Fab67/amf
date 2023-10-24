
    @extends ('layouts.new')

    @section('menu')
    <div data-tms-ad-container="" class="o-ad-container o-ad-container--banner-top o-ad-container--with-background">
        <div class="o-ad-container__content o-ad-container__content--report-enabled">
            <div class="o-ad-container__content__ad" data-tms-ad-type="banner" data-tms-ad-status="idle" data-tms-ad-pos="1"></div>
                            <button title="Signaler cette publicité" class="o-ad-container__content__report-link" rel="noopener" data-tms-ad-report=""><svg xmlns="http://www.w3.org/2000/svg" width="26.077" height="16.107"><g fill="none" stroke="currentColor"><path d="M7.994 15.607a1.5 1.5 0 0 1-1.5-1.5v-3.423H1.325l5.169-4.547V2a1.5 1.5 0 0 1 1.5-1.5h16.083a1.5 1.5 0 0 1 1.5 1.5v12.107a1.5 1.5 0 0 1-1.5 1.5z"></path><g stroke-width="2"><path d="M16.037 10.504v-7.84M16.037 13.442V11.71"></path></g></g></svg></button>
           </div>
    </div>
    <div class="o-ad-sponsoring" data-tms-ad-type="sponsoring" data-tms-ad-status="disabled">
    <a class="o-ad-sponsoring__link o-ad-sponsoring__start start_link" href=""></a>
    <a class="o-ad-sponsoring__link o-ad-sponsoring__middle middle_link" href=""></a>
    <a class="o-ad-sponsoring__link o-ad-sponsoring__end end_link" href=""></a>
    </div>
    <link type="text/css" rel="stylesheet" href="">
    <div class="t-content t-content--page-builder">
    <div id="main-content" tabindex="-1"></div>

    <article data-article-content>
            <div id="main-content" tabindex="-1"></div>
            <div class="o-layout-list ">
                        <div class="t-content__section a-tag">
                             <span class="a-tag__wrapper">
                            {{$type}}
                             </span><br>
                        </div>

                      <h1 class="t-content__title a-page-title">{{$info->titre}}</h1>
                      
                         <img src="/bernj/img/3.png" alt="" height="50px" width="100">

                    <div class="t-content__dates">
                            <p class="m-pub-dates"><span class="m-pub-dates__date">Publié le :
                                <time datetime="2022-10-26T05:50:05+00:00" pubdate="pubdate">{{$info->created_at}}</time></span>
                            </p><br>
                    </div>
                    
                    <div class="t-content__dates">
                            <p class="m-pub-dates"><span class="m-pub-dates__date">par :
                                <time datetime="2022-10-26T05:50:05+00:00" pubdate="pubdate">{{$seo}}</time></span>
                            </p><br>
                    </div>



                        <img src="/fab/{{$info->im1}}" alt="" class="responsive">

                        <span class="a-media-legend">{{$info->titre_im1}}</span><br><br>

               <!-- <div class="t-content__authors-tts">
                  <div class="m-author-n-reading-time">
                        <div class="m-author-n-reading-time__authors">
                            <div class="m-from-author">
                                 <span class="m-from-author__by-label"> Texte par : </span>
                                 <a href="" title="" class="m-from-author__name"> Louise BROSOLO  </a>
                            </div>
                        </div>

                 </div>
              </div>-->

             <p class="t-content__chapo">
                {{$info->aperçue}}
             </p>

            <div class="t-content__body u-clearfix">
               <!-- <div class="m-interstitial">
                      <div data-readmore-target class="m-interstitial__ad">
                         <div class="m-block-ad " data-tms-ad-type="box"  data-tms-ad-status="idle" data-tms-ad-pos="1">
                              <div class="m-block-ad__label m-block-ad__label--report-enabled">
                                  <span class="m-block-ad__label__text">Publicité</span>
                                  <button title="Signaler cette publicité" class="m-block-ad__label__report-link" rel="noopener" data-tms-ad-report><svg xmlns="http://www.w3.org/2000/svg" width="26.077" height="16.107"><g fill="none" stroke="currentColor"><path d="M7.994 15.607a1.5 1.5 0 0 1-1.5-1.5v-3.423H1.325l5.169-4.547V2a1.5 1.5 0 0 1 1.5-1.5h16.083a1.5 1.5 0 0 1 1.5 1.5v12.107a1.5 1.5 0 0 1-1.5 1.5z"/><g stroke-width="2">
                                    <path d="M16.037 10.504v-7.84M16.037 13.442V11.71"/></g></g></svg></button>
                              </div>
                               <div class="m-block-ad__content"> </div>
                          </div>
                      </div>

               </div>-->

               <h2> <strong>{{$info->titre_p1}}</strong> </h2>
               <p>
                {{$info->p1}}
                </p>
                <img src="/fab/{{$info->im2}}" alt="" class="responsive">

                     <span class="a-media-legend">{{$info->titre_im2}}</span><br><br>
                <h2> <strong>{{$info->titre_p2}}</strong> </h2>
                <p>
                    {{$info->p2}}
                </p>

                <h2> <strong>{{$info->titre_p3}}</strong> </h2>
                <p>
                    {{$info->p3}}
                </p>
                
                 <h2> <strong>{{$info->titre_p4}}</strong> </h2>
                <p>
                    {{$info->p4}}
                </p>
                
                 <center><div class="o-layout-list__item o-layout-list__item--with-ad l-m-100 l-t-50 l-d-33">
        <div class="m-block-ad m-block-ad--h300" data-tms-ad-type="box" data-tms-ad-status="idle" data-tms-ad-pos="2">
<div class="m-block-ad__label m-block-ad__label--report-enabled">
    <span class="m-block-ad__label__text">Publicité</span>
                <button title="Signaler cette publicité" class="m-block-ad__label__report-link" rel="noopener" data-tms-ad-report=""><svg xmlns="http://www.w3.org/2000/svg" width="26.077" height="16.107"><g fill="none" stroke="currentColor"><path d="M7.994 15.607a1.5 1.5 0 0 1-1.5-1.5v-3.423H1.325l5.169-4.547V2a1.5 1.5 0 0 1 1.5-1.5h16.083a1.5 1.5 0 0 1 1.5 1.5v12.107a1.5 1.5 0 0 1-1.5 1.5z"></path><g stroke-width="2"><path d="M16.037 10.504v-7.84M16.037 13.442V11.71"></path></g></g></svg></button>
            </div>
<div class="m-block-ad__content">
</div>
</div>
</div></center>

                 <h2> <strong>{{$info->titre_p5}}</strong> </h2>
                <p>
                    {{$info->p5}}
                </p>
                
                 <h2> <strong>{{$info->titre_p6}}</strong> </h2>
                <p>
                    {{$info->p6}}
                </p>
                
                 <h2> <strong>{{$info->titre_p7}}</strong> </h2>
                <p>
                    {{$info->p7}}
                </p>
                
                 <h2> <strong>{{$info->titre_p8}}</strong> </h2>
                <p>
                    {{$info->p8}}
                </p>


            </div>
    </div>
</article>



            <!--TECH-->

            <section class="t-content__section-pb">
                <aside data-org-name="Afrique" data-org-type="aside-content--sponsors" class="o-aside-content  o-aside-content--no-background">

                    <div class="o-aside-content__row o-aside-content__row--center">
                        <div class="o-aside-content__title a-aside-title"><span class="a-aside-title__content">AUTRES</span></div>
                    </div>

                    <div class="o-layout-list ">
                         <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                              <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                                 <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$relation[1]->titre )) ,"info_id"=>$relation[1]->id,'type'=>$type])}}" data-article-item-link="" data-tms-tr="">
                                      <div class="article__figure-wrapper">
                                          <figure class="m-figure m-figure--16x9 ">
                                              <picture>
                                                  <img src="/fab/{{$relation[1]->im1}}" alt="Tchad: Saleh Kebzabo, l&#39;opposant historique à Idriss Déby, nommé Premier ministre" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                              </picture>
                                          </figure>
                                      </div>
                                      <div class="article__infos">
                                          <p class="article__title "><span class="article__type"><svg xmlns="http://www.w3.org/2000/svg" viewBox="417 -2708 15.218 10.146" preserveAspectRatio="xMinYMin meet" class="picto--video"><path d="M428.836-2704.2v-2.955a.845.845 0 0 0-.845-.845h-10.146a.845.845 0 0 0-.845.845v8.455a.845.845 0 0 0 .845.845h10.146a.845.845 0 0 0 .845-.845v-2.959l3.382 3.382v-9.3z">
                                            </path></svg></span>{{$relation[1]->titre}}</p>
                                      </div>
                                  </a>
                              </div>
                         </div>

                         <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                             <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                                 <a href="{{route('pag', ["t"=> str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$relation[0]->titre )) ,"info_id"=>$relation[0]->id,'type'=>$type])}}" data-article-item-link="" data-tms-tr="">
                                     <div class="article__figure-wrapper">
                                         <figure class="m-figure m-figure--16x9 ">
                                             <picture>
                                                 <img src="/fab/{{$relation[0]->im1}}" alt="Inondations au Nigeria" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                             </picture>
                                         </figure>
                                     </div>
                                    <div class="article__infos">
                                        <p class="article__title ">{{$relation[0]->titre}}</p>
                                    </div>
                               </a>
                            </div>
                        </div>

                        <div class="o-layout-list__item l-m-100 l-t-50 l-d-33">
                            <div class="m-item-list-article  m-item-list-article--hor-to-ver" data-article-list="">
                                <a href="{{route('pag', ["t"=>str_replace( $symb1, "-", str_replace( $symb2 , $repla2,$relation[3]->titre )) ,"info_id"=>$relation[3]->id,'type'=>$type])}}" data-article-item-link="" data-tms-tr="">
                                     <div class="article__figure-wrapper">
                                          <figure class="m-figure m-figure--16x9 ">
                                               <picture>
                                                   <img src="/fab/{{$relation[3]->im1}}" alt="000_32LA3PT" aria-hidden="true" sizes="(max-width: 639px) calc(37vw - 32px), (max-width: 1023px) calc(50vw - 36px), (min-width: 1024px) 306px" loading="lazy" class="m-figure__img lazy" data-ll-status="native">
                                              </picture>
                                          </figure>
                                      </div>
                                      <div class="article__infos">
                                            <p class="article__title ">{{$relation[3]->titre}}</p>
                                      </div>
                               </a>
                            </div>
                      </div>
                    </div>

                            <div class="o-aside-content__row o-aside-content__row--flex-end">
                                <a class="o-aside-content__see-more" href="{{route($type,['menu'=>encrypt($idc),'type'=>$type])}}" data-tms-tr="">
                                    Lire plus d'actualités  <span class="svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="1057.5 -2518.354 10.185 8.722"><path fill="none" stroke="currentColor" d="m1062.797-2517.999 4.168 4.143-4.168 3.857m3.655-3.907h-8.952"></path></svg></span>
                                </a>
                            </div>
                 </aside>
                 </section>




    @endsection
