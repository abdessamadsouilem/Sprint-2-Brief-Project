var i = 0;             // Start Point
var images = [];    // Images Array
var time = 3000;    // Time Between Switch

// Image List
images[0] = "image/6061f5ad4bfcf.jpg";
images[1] = "image/6061f5fc10436.jpg";
images[2] = "image/604beb7867542.jpg";
images[3] = "image/604bebfa82310.jpg";

// Change Image
function changeImg(){
    document.slide.src = images[i];

    // Check If Index Is Under Max
    if(i < images.length - 1){
      // Add 1 to Index
      i++; 
    } else { 
        // Reset Back To O
        i = 0;
    }

    // Run function every x seconds
    setTimeout("changeImg()", 3000);
}

// Run function when page loads
window.onload=changeImg;