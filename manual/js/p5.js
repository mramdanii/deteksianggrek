// Copyright (c) 2019 ml5
//
// This software is released under the MIT License.
// https://opensource.org/licenses/MIT

/* ===
ml5 Example
Webcam Image Classification using a pre-trained customized model and p5.js
This example uses p5 preload function to create the classifier
=== */

// Classifier Variable
let classifier;
// Model URL
let imageModelURL = 'https://teachablemachine.withgoogle.com/models/SgbvD_jhk/';

// Video
let video;
let flippedVideo;
// To store the classification
let label = "";

// Load the model first
function preload() {
  classifier = ml5.imageClassifier(imageModelURL + 'model.json');
}

function setup() {
  createCanvas(320, 260);
  // Create the video
  video = createCapture(VIDEO);
  video.size(320, 240);
  video.hide();

  flippedVideo = ml5.flipImage(video)
  // Start classifying
  classifyVideo();
}

function draw() {
  background(0);
  // Draw the video
  image(flippedVideo, 0, 0);

  // Draw the label
  fill(255);
  textSize(16);
  textAlign(CENTER);
  text( width / 2, height - 2);
}

// Get a prediction for the current video frame
function classifyVideo() {
  flippedVideo = ml5.flipImage(video)
  classifier.classify(flippedVideo, gotResult);
}

// When we get a result
function gotResult(error, results) {
  // If there is an error
  if (error) {
    console.error(error);
    return;
  }
  // The results are in an array ordered by confidence.
  // console.log(results[0]);
  // label = results[0].label;
  label = select("#label-container").textContent = ('Prediction : ' + results[0].label);
  // Classifiy again!
  classifyVideo();
}

// // Classifier Variable
//     // More API functions here:
//     // https://github.com/googlecreativelab/teachablemachine-community/tree/master/libraries/image

//     // the link to your model provided by Teachable Machine export panel
//     const URL = "https://teachablemachine.withgoogle.com/models/SgbvD_jhk/";

//     let model, webcam, labelContainer, maxPredictions;

//     // Load the image model and setup the webcam
//     async function init() {
//       const modelURL = URL + "model.json";
//       const metadataURL = URL + "metadata.json";

//         // load the model and metadata
//         // Refer to tmImage.loadFromFiles() in the API to support files from a file picker
//         // or files from your local hard drive
//         // Note: the pose library adds "tmImage" object to your window (window.tmImage)
//         model = await tmImage.load(modelURL, metadataURL);
//         maxPredictions = model.getTotalClasses();

//         // Convenience function to setup a webcam
//         const flip = true; // whether to flip the webcam
//         webcam = new tmImage.Webcam(200, 200, flip); // width, height, flip
//         await webcam.setup(); // request access to the webcam
//         await webcam.play();
//         window.requestAnimationFrame(loop);

//         // append elements to the DOM
//         document.getElementById("webcam-container").appendChild(webcam.canvas);
//         labelContainer = document.getElementById("label-container");
//         for (let i = 0; i < maxPredictions; i++) { // and class labels
//           labelContainer.appendChild(document.createElement("div"));
//         }
//       }

//       async function loop() {
//         webcam.update(); // update the webcam frame
//         await predict();
//         window.requestAnimationFrame(loop);
//       }

//     // run the webcam image through the image model
//     async function predict() {
//         // predict can take in an image, video or canvas html element
//         const prediction = await model.predict(webcam.canvas);
//         for (let i = 0; i < maxPredictions; i++) {
//           const classPrediction =
//           prediction[i].className + ": " + prediction[i].probability.toFixed(2);
//           labelContainer.childNodes[i].innerHTML = classPrediction;
//         }
//       }