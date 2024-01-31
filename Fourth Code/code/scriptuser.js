const robot = document.getElementById("robot");
const robotContainer = document.getElementById("robot-container");
const robotVoiceMessage = document.getElementById("robot-message");

const robotMessages = [
  "Welcome to our Safari Page",
  "I'm your premium AI version",
  "select home button to go home",
  "If you like premium version",
  "You can click AI button",
  "Thank you",
  
];

let messageIndex = 0;

function displayMessage() {
  robotVoiceMessage.style.display = "block";

  const audio = document.querySelector("audio");
  if (audio) {
    audio.play();
  } else {
    console.error("Audio file not found.");

    audio.onerror = () => {
      console.error("Audio playback failed."); // Log error for debugging
      // Optionally, display a visual message to the user
    };
  }

  function displayNextMessage() {
    robotVoiceMessage.textContent = robotMessages[messageIndex];
    messageIndex++;
    if (messageIndex >= robotMessages.length) {
      messageIndex = 0;
    }

    setTimeout(displayNextMessage, 4000); // Adjust delay as needed
  }

  displayNextMessage();
}

robot.addEventListener("animationend", displayMessage);