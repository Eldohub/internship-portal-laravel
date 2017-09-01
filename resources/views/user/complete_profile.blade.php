@extends('layouts.app')

@section('content')
<div class="ui container" style="margin-top: 10em; margin-bottom: 5em;">
<div class="ui negative message">
  <i class="close icon"></i>
  <div class="header">
    Your profile is incomplete!
  </div>
  <p>Kindly all the fields are compulsory to proceed with using the system.
</p></div>

<div class="ui attached message">
  <div class="header">
    Personal Information
  </div>
  <p>Fill out the form below to help us know you, and what you want and how we will possibly help you achieve</p>
</div>
<form class="ui form attached fluid segment large"  method="POST" action="{{ route('complete') }}" >
{{ csrf_field() }}
  <div class="field">
    <label>You Official Name</label>
    <input placeholder="Full Name" type="text" name="full_name" value="{{ old('full_name') }}" required>
  </div>
  <div class="three fields">
    <div class="field">
      <label>School Name</label>
      <input placeholder="University or College Name" type="text" name="school" value="{{ old('school') }}" required>
    </div>
    <div class="field">
      <label>Course Name</label>
      <input placeholder="Course Name" type="text" name="course" value="{{ old('course') }}" required>
    </div>
    <div class="field">
      <label>Year</label>
      <input placeholder="Year in school i.e 1, 2, 3, 4" type="text" name="year" value="{{ old('year') }}" required>
    </div>
  </div>
  <div class="field">
    <label>Motivation</label>
     <textarea name="motivation" value="{{ old('motivation') }}" required></textarea>
  </div>
  <div class="field">
    <label>Expectation(s)</label>
     <textarea name="expectations" value="{{ old('expectations') }}" required></textarea>
  </div>
  <div class="inline field">
    <div class="ui checkbox">
      <input type="checkbox" id="terms">
      <label for="terms">I agree to the terms and conditions</label>
    </div>
  </div>
   <button type="submit" class="ui fluid large teal submit button">
      Submit
  </button>
</form>
</div>
@endsection