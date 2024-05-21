@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Prescription</h5>
                    <span>Add Prescription</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Prescription</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container" id="app">
    @if(Session::has('message'))
    <div class="alert bg-success alert-success text-white" role="alert">
        {{Session::get('message')}}
    </div>
    @endif

    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>
    @endforeach

    <form action="{{route('prescription')}}" method="post">@csrf

        <input type="hidden" name="user_id" value="{{$booking->user_id}}">
        <input type="hidden" name="doctor_id" value="{{$booking->doctor_id}}">
        <input type="hidden" name="date" value="{{$booking->date}}">

        <div class="card">
            <div class="card-header">
                Select Problems
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><input type="checkbox" name="problem[]"  value="Left Eye Sani Problem">Left Eye Sani Problem</td>
                            <td><input type="checkbox" name="problem[]"  value="Right Eye Sani Problem">Right Eye Sani Problem</td>
                            <td><input type="checkbox" name="problem[]"  value="Left Eye Become Red">Left Eye Become Red</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><input type="checkbox" name="problem[]"  value="Right Eye Become Red">Right Eye Become Red</td>
                            <td><input type="checkbox" name="problem[]"  value="Right Eye physically Damage">Right Eye physically Damage</td>
                            <td><input type="checkbox" name="problem[]"  value="Left Eye physically Damage">Left Eye physically Damage</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Choose Investigation
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><input type="checkbox" name="investigation[]"  value="Left Eye CT Scan">Left Eye CT Scan</td>
                            <td><input type="checkbox" name="investigation[]"  value="Right Eye CT Scan">Right Eye CT Scan</td>
                            <td><input type="checkbox" name="investigation[]"  value="Retinal Tomography">Retinal Tomography</td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td><input type="checkbox" name="investigation[]"  value="Applanation Tonometry">Applanation Tonometry</td>
                            <td><input type="checkbox" name="investigation[]"  value="Corneal Topography">Corneal Topography</td>
                            <td><input type="checkbox" name="investigation[]"  value="Fluorescein Angiogram">Fluorescein Angiogram</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                 Add Medicine
            </div>
            <div class="card-body">
                  <add-btn></add-btn>            
                <br>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                 Add Notes
            </div>
            <div class="card-body">
               <textarea name="feedback" class="form-control" placeholder="feedback" required=""></textarea>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<style type="text/css">
input[type="checkbox"]{
    zoom:1.1;

}
body{
    font-size: 16px;
}
</style>

<script src="{{ asset('js/app.js') }}" defer></script>
@endsection