// -----------------------------------------------
// VARIABLES
// -----------------------------------------------
const colours = ['blue', 'red', 'yellow', 'green']
var gamePattern = []
var userClickedPattern = []
var level = 0
var start = false
var highScore = 0
var timesPlayed = 0
// -----------------------------------------------
// FUNCTIONS
// -----------------------------------------------

// Generate next pattern
function nextSequence() {
  var randomNumber = Math.floor(Math.random() * 4)
  var randomColour = colours[randomNumber]
  gamePattern.push(randomColour)
}

// Create the animation of button when pressed
function animatePress(colour) {
  $("#" + colour).addClass("pressed")

  setTimeout(function() {
    $("#" + colour).removeClass("pressed")
  }, 200)
}

// Produce sound when a button is clicked
function playSound(colour) {
  const audio = new Audio("sounds/" + colour + ".mp3")
  audio.play()
  console.log("clicked")
}

// To show the pattern for the player to follow
function showGamePattern() {

  let start = 0
  let pattern = setInterval(thisFunction, 1000)

  function thisFunction() {
    if (start < gamePattern.length) {
      var currentColour = gamePattern[start]
      animatePress(currentColour)
      playSound(currentColour)
      start++
    }
    else {
      clearInterval(pattern)
    }
  }
}

// To check if userClickedPattern contains inside gamePattern
function subList() {
  for (var i = 0; i < userClickedPattern.length; i++) {
    if (userClickedPattern[i] != gamePattern[i]) return false
  }

  return true
}

// To reset the game when its game over
function gameOver() {
  timesPlayed++
  if(level > highScore)
  {
    highScore = level
  }
  level = 0
  userClickedPattern = []
  gamePattern = []
  start = false

  $('body').addClass("lose")
  $(".header").text("Game Over!!")

  setTimeout(function() {
    $('body').removeClass("lose")
    $(".header").text("Press any key to restart. Your High Score was: " + highScore + " You have played: " + timesPlayed)
  }, 1000)
}

// -----------------------------------------------
// EVENT HANDLERS
// -----------------------------------------------


// Handle any keyboard press to start the game
$(document).on("keypress", function(event) {

  if (!start) {
    start = true
    nextSequence()
    showGamePattern()
    $(".header").text("Level " + level)
    console.log(gamePattern)
  }
})


// Handle any mouse click event on the buttons
$('.btn').on("click", function(event) {
  if (start) {

    // To get the ID of the button
    var userClickedButtonColour = event.target.id

    // Animation and sound when a button is pressed
    animatePress(userClickedButtonColour)
    playSound(userClickedButtonColour)

    userClickedPattern.push(userClickedButtonColour)

    // To check if the userClickedPattern is equal to gamePattern
    if (subList() && userClickedPattern.length === gamePattern.length) {

      // If its true, run the code below to go to the next level
      level++
      userClickedPattern = []
      nextSequence()
      showGamePattern()
      $(".header").text("Level " + level)
    }

    // If there is a difference between userClickedPattern and gamePattern
    else if (!subList()) {

      // Initiate gameOver and reset the game
      gameOver()
    }
  }
})
