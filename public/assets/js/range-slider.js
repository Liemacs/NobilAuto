document.addEventListener("DOMContentLoaded", function () {  
    function rangeInputChangeEventHandler(e) {
      var minBtn = this.parentElement.querySelector(".min"),
        maxBtn = this.parentElement.querySelector(".max"),
        range_min = document.getElementById("range_min"),
        range_max = document.getElementById("range_max"),
        minVal = parseInt(minBtn.value),
        maxVal = parseInt(maxBtn.value),
        origin = e.target.className;

      if (origin == "min" && minVal > maxVal - 1) {
        minBtn.value = maxVal - 1;
      }
      var newMinVal = parseInt(minBtn.value);
      range_min.value = newMinVal;
  
      if (origin == "max" && maxVal - 1 < newMinVal) {
        maxBtn.value = 1 + newMinVal;
      }
      var newMaxVal = parseInt(maxBtn.value);
      range_max.value = newMaxVal;
    }
  
    var rangeInputs = document.querySelectorAll('.range-slider input[type="range"]');
    rangeInputs.forEach(function (input) {
      input.addEventListener("input", rangeInputChangeEventHandler);
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    function addSeparator(nStr) {
      nStr += "";
      var x = nStr.split(".");
      var x1 = x[0];
      var x2 = x.length > 1 ? "." + x[1] : "";
      var rgx = /(\d+)(\d{3})/;
      while (rgx.test(x1)) {
        x1 = x1.replace(rgx, "$1" + "." + "$2");
      }
      return x1 + x2;
    }
  
    function rangeInputChangeEventHandler(e) {
      var minBtn = this.parentElement.querySelector(".min_euro"),
        maxBtn = this.parentElement.querySelector(".max_euro"),
        range_min = document.getElementById("range_min_euro"),
        range_max = document.getElementById("range_max_euro"),
        minVal = parseInt(minBtn.value),
        maxVal = parseInt(maxBtn.value),
        origin = e.target.className;
  
        if (origin == "min" && minVal > maxVal - 1000) {
            minBtn.value = maxVal - 1000;
          }
          var newMinVal = parseInt(minBtn.value);
          range_min.value = newMinVal;
      
          if (origin == "max" && maxVal - 1000 < newMinVal) {
            maxBtn.value = 1000 + newMinVal;
          }
          var newMaxVal = parseInt(maxBtn.value);
          range_max.value = newMaxVal;
        }
  
    var rangeInputs = document.querySelectorAll('.range-slider_euro input[type="range"]');
    rangeInputs.forEach(function (input) {
      input.addEventListener("input", rangeInputChangeEventHandler);
    });
  });
  
