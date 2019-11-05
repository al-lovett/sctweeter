<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ScTweeter</title>


        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>

        <div id="splash" class="container-fluid">
          <div id="right-hm" style="text-align:center; font-size: 50px;">
              @if (Route::has('login'))

                      @auth
                          <a href="{{ url('/home') }}" class="badge badge-secondary">ScTweet Wisdom Starts Here!!</a>
                      @else
                          <a href="{{ route('login') }}" class="homepagelink">Login</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="homepagelink">Register</a>
                          @endif
                      @endauth

              @endif
          </div>

          <h1 id="headline" alt="the worlds first social media wisdome exchange">Sapientia Commutationem - Wisdom Exchange</h1>


          <h3>Hello and Welcome to the webs first social media wisdom exchange!</h3>
          <img src="images/SC.jpg" alt="The Creation of Adam by Michelangelo"> <br> <br>



          <div class="card" id="quote1">
            <div class="card-header">
              Sapientia Commutationem
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>“Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid.”</p>
                <cite title="Source Title">Albert Einstein</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card" id="quote2">
            <div class="card-header">
              Wisdom Exchange
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>"Before you diagnose yourself with depression or low self-esteem, first make sure that you are not, in fact, just surrounded by assholes.”</p>
                <cite title="Source Title">Sigmund Freud</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card" id="quote3">
            <div class="card-header">
              Sapientia Commutationem
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>“In seeking happiness for others, you will find it in yourself.”</p>
                <cite title="Source Title">Unknown</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card" id="quote4">
            <div class="card-header">
              Wisdom Exchange
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>“Love is a verb. Love – the feeling – is a fruit of love, the verb.”</p>
                <cite title="Source Title">Stephen Covey</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card" id="quote5">
            <div class="card-header">
              Sapientia Commutationem
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>“Everything can be taken from a man but one thing: the last of the human freedoms—to choose one’s attitude in any given set of circumstances, to choose one’s own way.”</p>
                <cite title="Source Title">Viktor Frankl</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card" id="quote6">
            <div class="card-header">
              Wisdom Exchange
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>“He who fears he will suffer, already suffers because he fears.”</p>
                <cite title="Source Title">Michel De Montaigne</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card" id="quote7">
            <div class="card-header">
              Sapientia Commutationem
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>“Success is stumbling from failure to failure with no loss of enthusiasm.”</p>
                <cite title="Source Title">Winston Churchill</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card" id="quote8">
            <div class="card-header">
              Wisdom Exchange
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>“You must be the change you wish to see in the world.” </p>
                <cite title="Source Title">Gandhi</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card" id="quote9">
            <div class="card-header">
              Sapientia Commutationem
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>“When one door of happiness closes, another opens, but often we look so long at the closed door that we do not see the one that has been opened for us.”</p>
                <cite title="Source Title">Helen Keller</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card" id="quote10">
            <div class="card-header">
              Wisdom Exchange
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>“Challenges is what makes life interesting and overcoming them is what makes life meaningful.”</p>
                <cite title="Source Title">Joshua J. Marine</cite></footer>
              </blockquote>
            </div>
          </div>

        </div>





    </body>
</html>
