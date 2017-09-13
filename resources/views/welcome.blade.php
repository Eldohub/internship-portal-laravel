@extends('layouts.app')

@section('content')
<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui text container">
      <h1 class="ui inverted header">
        Ready to Kick Start your work experience?
      </h1>
      <h2>We give you one-on-one mentorship in building your career.</h2>
      <div class="ui huge primary button">Get Started <i class="right arrow icon"></i></div>
    </div>

  </div>

  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">Become a World Class Developer</h3>
          <p>We give you chance to discover your superpowers through our extensive self paced internship program.</p>
          <h3 class="ui header">Learn How Start-Up Operates</h3>
          <p>Yes that's right, you get immersed into vibrance of startup culture through direct contributions and exchanges.</p>
        </div>
        <div class="six wide right floated column">
          <img src="{{asset('images/typical_internship.png')}}" class="ui large rounded image">
        </div>
      </div>
      <div class="row">
        <div class="center aligned column">
          <a class="ui huge button">See what we have been up to <i class="angle down icon"></i></a>
        </div>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>Eldohub Website Redesign</h3>
          <p>
          <!-- <img src="{{asset('images/benefits_icon.png')}}" class="ui avatar image"> -->It's a work in progress</p>
        </div>
        <div class="column">
          <h3>Eldohub Android App</h3>
          <p>
            <!-- <img src="{{asset('images/benefits_icon.png')}}" class="ui avatar image">  -->Still in pipeplines, to kickstart by October 1st.
          </p>
        </div>
      </div>
    </div>
  </div>

<!--   <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
      <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
      <a class="ui large button">Read More</a>
      <h4 class="ui horizontal header divider">
        <a href="#">Case Studies</a>
      </h4>
      <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
      <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
      <a class="ui large button">I'm Still Quite Interested</a>
    </div>
  </div> -->

</div>
@endsection