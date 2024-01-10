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

    var rangeInputs = document.querySelectorAll(
        '.range-slider input[type="range"]'
    );
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

        if (origin == "min_euro" && minVal > maxVal - 1000) {
            minBtn.value = maxVal - 1000;
        }
        var newMinVal = parseInt(minBtn.value);
        range_min.value = addSeparator(newMinVal) + " €";

        if (origin == "max_euro" && maxVal - 1000 < newMinVal) {
            maxBtn.value = 1000 + newMinVal;
        }
        var newMaxVal = parseInt(maxBtn.value);
        range_max.value = addSeparator(newMaxVal) + " €";
    }

    var rangeInputs = document.querySelectorAll(
        '.range-slider_euro input[type="range"]'
    );
    rangeInputs.forEach(function (input) {
        input.addEventListener("input", rangeInputChangeEventHandler);
    });
});

function triggerRangeMin(event) {
    const value = parseInt(event.target.value);
    let range = document.querySelector(".rangeslider .min");
    let rangeMax = document.querySelector(".rangeslider .max").value;
    if (value < range.min) {
        range.value = parseInt(range.min);
        event.target.value = parseInt(range.min);
    } else if (value > rangeMax) {
        range.value = parseInt(rangeMax ) - 1;
        event.target.value = parseInt(rangeMax ) - 1;
    } else {
        range.value = parseInt(value);
    }
}

function triggerRangeMax(event) {
  const value = parseInt(event.target.value);
  let range = document.querySelector(".rangeslider .max");
  let rangeMin = document.querySelector(".rangeslider .min").value;
  if (value > range.max) {
      range.value = parseInt(range.max);
      event.target.value = parseInt(range.max);
  } else if (value < rangeMin) {
      range.value = parseInt(rangeMin) +1;
      event.target.value = parseInt(rangeMin ) + 1;
  } else {
      range.value = parseInt(value);
  }
}
