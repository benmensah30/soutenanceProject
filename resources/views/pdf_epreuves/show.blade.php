@extends('layout.base')

@section('content')
<div>

<div class="butone">

<a href="{{ route('pdf_epreuves.pdf', ['epreuve_id' => $epreuves->id]) }}" class="icon-button primary">
    <i class="fa fa-download"></i>
</a>

</div>
    <section class="">
       
               <div class="entete">
               <p>
                Épreuve de {{ $epreuves->classe }}
                </p>
                <p>
                Matière de {{ $epreuves->matiere }}
                </p>
               </div>
                <p>
                {!! $epreuves->contenue !!}
                </p>
       
    </section>
   

</div>
@endsection