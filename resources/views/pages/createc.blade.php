@extends('layouts.base')

@section('content')
    <div class="row" style="">
        {{-- card image --}}
        <div class="col-md-4" style="margin-top:2rem;">
            <!-- Card -->
            <div class="card card-image" style="background-image: url(https://bit.ly/333EoJb);">
        
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                        <h5 class="pink-text"><i class="fas fa-image"></i>Images</h5>
                        <h3 class="card-title pt-2"><strong>Image Contents</strong></h3>
                        <p>This are image content which are helpful and are related to mental health </p>
                        <a class="btn btn-info" href="{!! url('/images'); !!}"><i class="fas fa-image left"></i> View Contents</a>
                    </div>
                </div>
        
            </div>
            <!-- Card -->
        </div>

        {{-- card video --}}
        <div class="col-md-4" style="margin-top:2rem;">
            <!-- Card -->
            <div class="card card-image" style="background-image: url(https://bit.ly/333EoJb);">
        
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                        <h5 class="pink-text"><i class="fas fa-image"></i>Videos</h5>
                        <h3 class="card-title pt-2"><strong>Videos Contents</strong></h3>
                        <p>This are Videos contents related to human Mental Health that might be helpful to help to fight
                        the battle towards mental health</p>
                        <a class="btn btn-info" href="{!! url('/video'); !!}">
                            <i class="fas fa-image left"></i> View Contents
                        </a>
                    </div>
                </div>
        
            </div>
            <!-- Card -->
        </div>

        {{-- card text --}}
        <div class="col-md-4" style="margin-top:2rem;">
            <!-- Card -->
            <div class="card card-image" style="background-image: url(https://bit.ly/333EoJb);">
        
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                        <h5 class="pink-text"><i class="fas fa-image"></i>Texts</h5>
                        <h3 class="card-title pt-2"><strong>Texts Contents</strong></h3>
                        <p> This are text articles accompained by brief Description 
                        of articles related to Mental Health.</p>
                        <a class="btn btn-info" href="{!! url('/text'); !!}">
                            <i class="fas fa-image left"></i> View Contents
                        </a>
                    </div>
                </div>
        
            </div>
            <!-- Card -->
        </div>

        {{-- card audio --}}
        <div class="col-md-4" style="margin-top:2rem;">
            <!-- Card -->
            <div class="card card-image" style="background-image: url(https://bit.ly/333EoJb);">
        
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                        <h5 class="pink-text"><i class="fas fa-image"></i>Audios</h5>
                        <h3 class="card-title pt-2"><strong>Audios Contents</strong></h3>
                        <p>This are audios  related to mental health  that help people who are  visual impaired  to get 
                        access to mental health education to succumb the rising of mental health in the current generation .</p>
                        <a class="btn btn-info" href="{!! url('/audios'); !!}">
                            <i class="fas fa-image left"></i> View Contents
                        </a>
                    </div>
                </div>
        
            </div>
            <!-- Card -->
        </div>
    </div>
@endsection