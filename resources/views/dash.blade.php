@extends ('layouts.admin')
@section('menu')

    
    <section>
        <div class="card">
          <div class="card-body">

    <br><br>
            <!-- No Labels Form -->
            <form class="row g-3" method="POST" action="{{route('save-info')}}" id="forme1"   enctype="multipart/form-data">
               @csrf
                <select class="form-select" aria-label="Default select example" name="categorie_id" >
                    <option selected>Selectionnez d'abord la catégorie</option>
                    @foreach (@$cat as $cats )
                    <option value="{{ $cats->id}}">{{$cats->categorie }}</option>
                    @endforeach
                  </select>
                  <div>@if ($errors->has('categorie_id'))
                  <b style="color: red">Selectionnez d'abord la catégorie</b>
                  @endif </div>


                <h5 class="card-title">Informations</h5>
                <div class="mb-3">
                      <input type="text" class="form-control" id="inputText" placeholder="Titre" name="titre" value="{{ old('titre') }}">
                    @if ($errors->has('titre'))
                    <i style="color: red">required</i>
                    @endif
                </div>
           <br><br>

                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label" >Brève aperçue de l'information </label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="aperçue">{{ old('aperçue') }}</textarea>
                </div>
            
            <div class="row">
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Paragraphe 1 </label>
                   <input type="text" class="form-control" id="inputText" placeholder="Titre du paragraphe 1" name="titrep1" value="{{ old('titrep1') }}"><br>
                  </div>
                  
                  <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="p1">{{ old('p1') }}</textarea>
                    @if ($errors->has('p1'))
                    <i style="color: red">required</i>
                    @endif
                </div>

            </div>

                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Paragraphe 2</label>
                    <input type="text" class="form-control" id="inputText" placeholder="Titre du paragraphe 2" name="titrep2" value="{{ old('titrep2') }}"><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="p2">{{ old('p2') }}</textarea>
                  </div>


                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Paragraphe 3</label>
                    <input type="text" class="form-control" id="inputText" placeholder="Titre du paragraphe 3" name="titrep3" value="{{ old('titrep3') }}"><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="p3" >{{ old('p3') }}</textarea>
                  </div><br><br>

                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Paragraphe 4</label>
                    <input type="text" class="form-control" id="inputText" placeholder="Titre du paragraphe 4" name="titrep4" value="{{ old('titrep4') }}"><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="p4" >{{ old('p4') }}</textarea>
                  </div><br><br>
                  
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Paragraphe 5</label>
                <input type="text" class="form-control" id="inputText" placeholder="Titre du paragraphe 5" name="titrep5" value="{{ old('titrep5') }}"><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="p5" >{{ old('p5') }}</textarea>
                  </div><br><br>
                  
                   <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Paragraphe 6</label>
                    <input type="text" class="form-control" id="inputText" placeholder="Titre du paragraphe 6" name="titrep6"  value="{{ old('titrep6') }}"><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="p6" >{{ old('p6') }}</textarea>
                  </div><br><br>
                  
                   <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Paragraphe 7</label>
            <input type="text" class="form-control" id="inputText" placeholder="Titre du paragraphe 7" name="titrep7" value="{{ old('titrep7') }}"><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="p7" >{{ old('p7') }}</textarea>
                  </div><br><br>
                  
                   <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Paragraphe 8</label>
                  <input type="text" class="form-control" id="inputText" placeholder="Titre du paragraphe 8" name="titrep8" value="{{ old('titrep8') }}"><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="p8" >{{ old('p8') }}</textarea>
                  </div><br><br>


               <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">image 1</label>
                        <input type="file" class="form-control" name="im1"  ><br>
                        @if ($errors->has('im1'))
                        <i style="color: red">l'image est obligatoire</i>
                        @endif
                    </div>
                    <div class="mb-3">
                   <input type="text" class="form-control" id="inputText" placeholder="Titre de l'image 1" name="titreim1"  value="{{ old('titreim1') }}">
                        @if ($errors->has('titreim1'))
                        <i style="color: red">required</i>
                        @endif
                    </div><br><br>
                  </div>

             <div class="row">
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">image 2</label>
                    <input type="file" class="form-control" name="im2" ><br>
                    @if ($errors->has('im2'))
                    <i style="color: red">l'image est obligatoire</i>
                    @endif
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="inputText" placeholder="Titre de l'image 2" name="titreim2"  value="{{ old('titreim2') }}">
                    @if ($errors->has('titreim2'))
                    <i style="color: red">required</i>
                    @endif
                </div><br><br>
              </div>



                  <div class="text-center">
                    <button type="submit"class="btn btn-info">Submit</button>
                        <button type="reset"class="btn btn-info">Reset</button>
                    </div><br>
            </form><!-- End No Labels Form -->

          </div>
        </div>



    </section>

@endsection
