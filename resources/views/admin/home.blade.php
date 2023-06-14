<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwindcss Course</title>

  <style>
  /* ! tailwindcss v2.2.4 | MIT License | https://tailwindcss.com */
  /*! modern-normalize v1.1.0 | MIT License | https://github.com/sindresorhus/modern-normalize */
/*
Document
========
*/

/**
Use a better box model (opinionated).
*/

*,
::before,
::after {
  box-sizing: border-box;
}

/**
Use a more readable tab size (opinionated).
*/

html {
  -moz-tab-size: 4;
  -o-tab-size: 4;
     tab-size: 4;
}

html {
  line-height: 1.15;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
}

body {
  margin: 0;
}

/**
Improve consistency of default fonts in all browsers. (https://github.com/sindresorhus/modern-normalize/issues/3)
*/

body {
  font-family: Poppins;
}

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
}

abbr[title] {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/**
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/**
1. Improve consistency of default fonts in all browsers. (https://github.com/sindresorhus/modern-normalize/issues/3)
2. Correct the odd 'em' font sizing in all browsers.
*/

  /* 1 */
  font-size: 1em;
  /* 2 */

small {
  font-size: 80%;
}

/**
Prevent 'sub' and 'sup' elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
Tabular data
============
*/

/**
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
}

/*
Forms
=====
*/

/**
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: Poppins;
  /* 1 */
  font-size: 100%;
  /* 1 */
  line-height: 1.15;
  /* 1 */
  margin: 0;
  /* 2 */
}

/**
Remove the inheritance of text transform in Edge and Firefox.
1. Remove the inheritance of text transform in Firefox.
*/

button,
select {
  /* 1 */
  text-transform: none;
}

/**
Correct the inability to style clickable types in iOS and Safari.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
  -webkit-appearance: button;
}

/**
Remove the inner border and padding in Firefox.
*/

::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

/**
Restore the focus styles unset by the previous rule.
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/**
Remove the padding so developers are not caught out when they zero out 'fieldset' elements in all browsers.
*/

legend {
  padding: 0;
}

/**
Add the correct vertical alignment in Chrome and Firefox.
*/

summary {
  display: list-item;
}

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

button {
  background-color: transparent;
  background-image: none;
}

fieldset {
  margin: 0;
  padding: 0;
}

ol,
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

/**
 * Tailwind custom reset styles
 */

/**
 * 1. Use the user's configured `sans` font-family (with Tailwind's default
 *    sans-serif font stack as a fallback) as a sane default.
 * 2. Use Tailwind's default "normal" line-height so the user isn't forced
 *    to override it to ensure consistency even when using the default theme.
 */

html {
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 1 */
  line-height: 1.5;
  /* 2 */
}

body {
  font-family: inherit;
  line-height: inherit;
}


/**
 * Use the configured 'mono' font family for elements that
 * are expected to be rendered with a monospace font, falling
 * back to the system monospace stack if there is no configured
 * 'mono' font family.
 */

.col-span-2 {
  grid-column: span 2 / span 2;
}

.mt-8 {
  margin-top: 2rem;
}

.flex {
  display: flex;
}

.table {
  display: table;
}

.grid {
  display: grid;
}

.h-16 {
  height: 4rem;
}

.h-20 {
  height: 5rem;
}

.flex-auto {
  flex: 1 1 auto;
}

.flex-shrink-0 {
  flex-shrink: 0;
}

.flex-shrink {
  flex-shrink: 1;
}

.flex-col {
  flex-direction: column;
}

.gap-10 {
  gap: 2.5rem;
}

.gap-12 {
  gap: 3rem;
}

.rounded-none {
  border-radius: 0px;
}

.rounded {
  border-radius: 0.25rem;
}

.rounded-md {
  border-radius: 0.375rem;
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: #C07F00;
}

.bg-graph {
  --tw-bg-opacity: 1;
  background-color: #FFD95A;
}

.bg-blue-50 {
  --tw-bg-opacity: 1;
  background-color: #FFF7D4;
}

.stroke-0 {
  stroke-width: 0;
}

.p-1 {
  padding: 0.25rem;
}

.p-2 {
  padding: 0.5rem;
}

.p-3 {
  padding: 0.75rem;
}

.p-4 {
  padding: 1rem;
}

.p-5 {
  padding: 1.25rem;
}

.p-8 {
  padding: 2rem;
}

.p-9 {
  padding: 2.25rem;
}

.px-20 {
  padding-left: 5rem;
  padding-right: 5rem;

}
.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.text-base {
  font-size: 1rem;
  line-height: 1.5rem;
}

.text-3xl {
  font-size: 1.875rem;
  line-height: 2.25rem;
}

.font-medium {
  font-weight: 500;
}

.font-bold {
  font-weight: 700;
}
  .lg\:grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr));
  }

  .lg\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .lg\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }
.bg-kotak{
  --tw-bg-opacity: 1;
  background-color: #FFD95A; 
}
    </style>

</head>
  <div class="flex flex-row ">
    <div class="flex-auto ">
      <div class="flex flex-col">
        <div class="flex flex-col bg-white p-2 drop-shadow-2xl">
          <div class="flex flex-row space-x-3">
            <h4 class="font-bold text-gray-500 p-1 ">Welcome Admin</h4>
          </div>
          <p class="text-gray-400 p-1">30th October 2020 | 1st November 2020</p>
        </div>
        <!-- Counter -->
        <div class="bg-blue-50 min-h-screen px-20"> 
          <!-- px-20 untuk ngatur padding kiri dan kanan -->
          <div class="flex flex-wrap mt-8 grid lg:grid-cols-3 sm:grid-cols-2 p-4 gap-10 rounded-md bg-kotak">
            
            <!--Grid starts here-->
              <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                <div>
                  <div id="hitungkucing" class="text-sm text-gray-400 ">Kucing</div>
                  <div class="flex items-center pt-1">
                    <div class="text-3xl font-medium text-gray-600 ">34</div>
                  </div>
                </div>
                <div class="text-pink-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-10" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                      
                      clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
  
              <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                <div>
                  <div class="text-sm text-gray-400 ">User</div>
                  <div class="flex items-center pt-1">
                    <div id="hitunguser" class="text-3xl font-medium text-gray-600 ">44</div>
                  </div>
                </div>
                <div class="text-pink-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                      
                      clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
  
              <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                <div>
                  <div class="text-sm text-gray-400 ">Artikel</div>
                  <div class="flex items-center pt-1">
                    <div id="hitungartikel" class="text-3xl font-medium text-gray-600 ">45</div>
                  </div>
                </div>
                <div class="text-pink-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                    <path
                      />
                  </svg>
                </div>
              </div>

            <!-- Grid ends here..-->

          </div>
          <div class=" mt-5 grid  lg:grid-cols-2  md:grid-cols-3 p-4 gap-3">
            <div class="col-span-2 flex flex-col   p-8 bg-graph rounded shadow-sm">
              <b class="flex flex-row text-gray-500">Data kucing tahun lalu</b>
              <canvas class="p-5" id="chartLine"></canvas>

          </div>
        </div> 
        <!-- Counter -->
      </div>
    </div>
  </div>

  <!-- Required chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Chart line -->
  <script>
    const labels = ["January", "February", "March", "April", "May", "June"];
    const data = {
      labels: labels,
      datasets: [{
        label: "My First dataset",
        backgroundColor: "hsl(252, 82.9%, 67.8%)",
        borderColor: "hsl(252, 82.9%, 67.8%)",
        data: [10, 25, 20, 2, 20, 30, 45],
      }, ],
    };

    const configLineChart = {
      type: "line",
      data,
      options: {},
    };

    var chartLine = new Chart(
      document.getElementById("chartLine"),
      configLineChart
    );
  </script>

  <script>
    const dataRadar = {
      labels: [
        "Reservation 1",
        "Reservation 2",
        "Reservation 3",
        "Reservation 4",
        "Reservation 5",
        "Reservation 6",
        "Reservation 7",
      ],
      datasets: [{
          label: "My First Dataset",
          data: [65, 59, 90, 81, 56, 55, 40],
          fill: true,
          backgroundColor: "rgba(255,105,180)",
          borderColor: "rgb(255,20,147)",
          pointBackgroundColor: "rgb(133, 105, 241)",
          pointBorderColor: "#fff",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgb(133, 105, 241)",
        },
        {
          label: "My Second Dataset",
          data: [28, 48, 40, 19, 96, 27, 100],
          fill: true,
          backgroundColor: "rgba(255,105,180)",
          borderColor: "rgb(0,191,255)",
          pointBackgroundColor: "rgb(54, 162, 235)",
          pointBorderColor: "#fff",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgb(54, 162, 235)",
        },
      ],
    };

    const configRadarChart = {
      type: "radar",
      data: dataRadar,
      options: {},
    };

    var chartBar = new Chart(
      document.getElementById("chartRadar"),
      configRadarChart
    );
  </script>

</body>

</html>