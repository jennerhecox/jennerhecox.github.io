//Sound variables and function
var hello = new Audio('Audio/hello.mp3');
var Idea = new Audio('Audio/Idea.mp3');
var Banshee = new Audio('Audio/Banshee.mp3');
var Jeepers = new Audio('Audio/jeepers.mp3');
var Clue = new Audio('Audio/clue.mp3');
var Zoinks = new Audio('Audio/zoinks.mp3');
    function myAudioFunction(name) {
        if(name == 'hello') {
            hello.play();
        } else if(name == 'Idea') {
            Idea.play();
        }
        else if(name == 'Banshee') {
           Banshee.play();
       }
       else if(name == 'Jeepers') {
          Jeepers.play();
      }
      else if(name == 'Clue') {
         Clue.play();
     }
     else if(name == 'Zoinks') {
        Zoinks.play();
    }
    }

  //Random trivia variables and function
  var trivia = [];
  trivia[0] = "As an animated series, it was the longest running Saturday morning show in the United States.";
  trivia[1] = "Scooby-Doo was the first Saturday morning cartoon to feature a laugh track.";
  trivia[2] = "In 2013, TV Guide ranked Scooby-Doo as the fifth greatest cartoon of all time.";
  trivia[3] = "Shaggy-Doo and Scooby-Doo are the only two characters to appear in every show.";
  trivia[4] = "The team of mystery solvers have gone up against 392 different villains.";
  trivia[5] = "Scooby-Doo is actually a triplet. His identical siblings are named Skippy-Doo and Dooby-Doo.";
  trivia[6] = "The show was originally pitched as a group of friends in a rock band with a dog named Too Much who plays the bongos.";
  trivia[7] = " The only actor to voice the same character through every movie and TV show is Frank Welker who voices Fred. The only version he missed was the 1988 show A Pup Named Scooby-Doo.";
  trivia[8] = "In 2013 TV Guide ranked Scooby Doo, Where Are You! as the fifth Greatest TV Cartoon of All Time.";
  trivia[9] = "Scooby's real name is Scoobert.";

  function randomTrivia() {
    var Answer = Math.floor(Math.random() * (trivia.length));
    document.getElementById('results').innerHTML = trivia[Answer];
  }
