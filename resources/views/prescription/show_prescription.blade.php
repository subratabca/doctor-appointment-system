@extends('admin.layouts.master')
@section('content')
  
<div class="container">
  <div class="row">
    <div class="card">

      <div class="row" style="margin:10px; border-bottom: 2px solid #000000;">
        <div class="col-sm-3">
          <h6>Harsankar Das</h6>
          <address>
            Visit:
            Example.com<br>
            Box 564, Disneyland<br>
            USA
          </address>
        </div>

        <div class="col-sm-6">

        </div>

        <div class="col-sm-3" style="float:right;">
          <h6>Paramita Eye Hospita</h6>        
          <address>
            House:125/4 charpara more;<br>
            Mymensingh Sadar-Mymensingh.<br>
            Phone: 01771898482.<br>
            website:www.paramita.com
          </address>
        </div>
      </div>

      <div class="row" style="margin:10px; border-bottom: 2px solid #000000;">
        <div class="col-sm-3">
          <h6>Name: Subrata Dey Sarker</h6>
        </div>

        <div class="col-sm-3">
          <h6>Gender: Female</h6>
        </div>

        <div class="col-sm-3">
          <h6>Age: Subrata Dey Sarker</h6>
        </div>

        <div class="col-sm-3">
          <h6>Date: Jul 23, 2021</h6>
        </div>
      </div>
<!-- ................................................................................................ -->
      <div class="row"  style="margin:10px;">
        <div class="col-sm-5" style="border-right: 2px solid #000000;">
            <div>
              <p><b>COMPLAINTS</b></p>
                  <ul>
                    @foreach($prescription->problems as $problem)
                     <li>{{ ucfirst($problem->problem) }}</li>
                    @endforeach
                  </ul>
            </div>

            <div>
              <p><b>FINDINGS (General Examination)</b></p>
                  <ul>
                    <li>BP: 120/80mmHg</li>
                    <li>Pulse: 72 bpm</li>
                  </ul>
            </div>

            <div>
              <p><b>INVESTIGATION</b></p>
                  <ul>
                    @foreach($prescription->investigations as $investigation)
                     <li>{{ ucfirst($investigation->investigation) }}</li>
                    @endforeach
                  </ul>
            </div>
        </div>
{{-- ..................................................................................................... --}}
        <div class="col-sm-7">
            <div>
              <p><b>Rx</b></p>
                  <ol>
                    @foreach($prescription->medicines as $medicine)
                      <li><b>{{ ucfirst($medicine->medicine) }}</b></li>
                      <p>{{$medicine->procedure_to_use_medicine}}</p>
                    @endforeach
                  </ol>
            </div>
        </div>


      </div>

    </div>
  </div> 
</div> 

@endsection
