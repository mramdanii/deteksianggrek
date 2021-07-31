console.clear();

let featureExtractor;
let classifier;

let status;
let canvas;
const imageSize = 224;

function setup() {
  status = select("#status");
  status.html("Loading the base model...");
  document
    .getElementById("modelFiles")
    .addEventListener("change", handleModelFiles, false);
  document
    .getElementById("imageToTest")
    .addEventListener("change", handleImageToTest, false);

  canvas = createCanvas(imageSize, imageSize);
  canvas.position(status.elt.offsetLeft, status.elt.offsetTop + 30);

  featureExtractor = ml5.featureExtractor("MobileNet", () => {
    status.html("Please upload model files");
  });

  classifier = featureExtractor.classification();
}

function handleModelFiles(evt) {
  classifier.load(evt.target.files, () => {
    status.html("Loaded");
    console.log(classifier)
  });
}

function handleImageToTest(evt) {
  var files = evt.target.files;
  const numFiles = files.length;
  console.log('classifier?')
  console.log(classifier)
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
