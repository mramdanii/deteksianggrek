console.clear();

let featureExtractor;
let classifier;
let status;
let labelInput;
let trainButton;
let saveButton;
let progress;

let canvas;
let halfWidth;
let halfHeight;
const imageSize = 224;

function setup() {
  status = select("#status");
  status.html("Loading the model...");
  labelInput = select("#labelFormages");
  trainButton = select("#trainButton");
  trainButton.mousePressed(trainRequested);
  saveButton = select("#saveButton");
  saveButton.mousePressed(saveRequested);
  document
    .getElementById("imagesToTrain")
    .addEventListener("change", handleImagesToTrain, false);
  document
    .getElementById("imageToTest")
    .addEventListener("change", handleImageToTest, false);
  progress=document.getElementById("progress")
  
  canvas = createCanvas(imageSize, imageSize);
  canvas.position(status.elt.offsetLeft, status.elt.offsetTop + 20);
  halfWidth = width / 2;
  halfHeight = height / 2;

  // Change the number of epochs from 20 (default) to 50
  // See https://github.com/ml5js/ml5-library/blob/f471eec18b7b64347b355ced8bc40604827924b3/src/FeatureExtractor/Mobilenet.js#L25
  const options = { epochs: 50 };
  featureExtractor = ml5.featureExtractor("MobileNet", options, () => {
    status.html("Please specify an index and upload image files");
  });

  classifier = featureExtractor.classification();
}

// Range for random rotations (in degree)
let rotationRange = 10;

// Fraction of total width
let widthShiftRange = 0.1;

// Fraction of total height
let heightShiftRange = 0.1;

// Range for random zoom
let zoomRange = 0.2;

// Randomly flip inputs horizontally
let horizontalFlip = true;

// Randomly flip inputs vertically
let verticalFlip = true;

function handleImagesToTrain(evt) {
  let files = evt.target.files;
  const numFiles = files.length;
  let processedFiles = 0;
  status.html(`Processing ${numFiles} images...`);
  progress.max = numFiles;

  for (let i = 0, f; (f = files[i]); i++) {
    let reader = new FileReader();
    reader.onload = function(event) {
      img = loadImage(event.target.result, img => {
        for (let i = 0; i < 10; i++) {
          resetMatrix();
          background(0);
          translate(halfWidth, halfHeight);

          const angle = random(-rotationRange, rotationRange);
          rotate(angle);

          const widthShift =
            imageSize * random(-widthShiftRange, widthShiftRange);
          const heightShift =
            imageSize * random(-heightShiftRange, heightShiftRange);

          const zoom = 1 + random(-zoomRange, zoomRange);

          let horizontalScale = zoom;
          if (horizontalFlip && 0.5 <= random()) {
            horizontalScale *= -1;
          }

          let verticalScale = zoom;
          if (verticalFlip && 0.5 <= random()) {
            verticalScale *= -1;
          }

          scale(horizontalScale, verticalScale);
          image(
            img,
            widthShift - halfWidth,
            heightShift - halfHeight,
            width,
            height
          );

          // We'll be able to supply the canvas directly in the near future
          // See https://github.com/ml5js/ml5-library/pull/206
          const src = canvas.elt.toDataURL();
          let tmpImg = createImg(src, "Failed to create", () => {
            tmpImg.class("image").size(224, 224);
            classifier.addImage(tmpImg.elt, labelInput.value());
          });
          tmpImg.remove();
        }
      });

      processedFiles++;
      progress.value = processedFiles;
      if (processedFiles === numFiles) {
        status.html(`Processed ${numFiles} images`);
      }
    };

    reader.readAsDataURL(f);
  }
}

function handleImageToTest(evt) {
  const files = evt.target.files;
  const numFiles = files.length;
  console.log(`Testing on ${numFiles} image(s)`);

  for (let i = 0, f; (f = files[i]); i++) {
    let reader = new FileReader();
    reader.onload = function(event) {
      img = loadImage(event.target.result, img => {
        resetMatrix();
        background(0);
        image(img, 0, 0, width, height);
        const src = canvas.elt.toDataURL();
        let tmpImg = createImg(src, "Failed to create", () => {
          tmpImg.class("image").size(224, 224);
          classifier.classify(tmpImg.elt, (err, result) => {
            if (err) {
              console.error(err);
            }

            // I want to get multiple results, instead of the top one
            status.html(result);
                        console.log(`${f.name}: ${result}`);
          });
          tmpImg.remove();
        });
      });
    };

    reader.readAsDataURL(f);
  }
}

function trainRequested() {
  classifier.train(loss => {
    if (loss) {
      status.html("Training... loss: " + loss);
    } else {
      status.html("Done training! Upload an image file to test.");
    }
  });
}

function saveRequested() {
  classifier.save();
}
