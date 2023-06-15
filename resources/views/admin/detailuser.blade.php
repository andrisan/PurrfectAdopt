<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwindcss Course</title>

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/0.0.0-insiders.4a070ac/tailwind.min.css" integrity="sha512-vJu7D5BpjnNXVpLBrl9LKLvmXBNjiLwge8EOZ/YS9XwiChpfKLAlydwIZvoJaDE3LI/kr3goH0MzDzNbBgyoOQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <style>

html {
  -moz-tab-size: 4;-o-tab-size: 4;tab-size: 4;}

html {
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
}

body {
  margin: 0;
}

body {
  font-family:
		system-ui,-apple-system, 'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji';
}

table {
  text-indent: 0;
  border-color: inherit;
}

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
  margin: 0;
  
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

html {
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  line-height: 1.5;

}

table {
  border-collapse: collapse;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
 
  vertical-align: middle;

}

.col-auto {
  grid-column: auto;
}

.col-span-1 {
  grid-column: span 1 / span 1;
}

.col-span-2 {
  grid-column: span 2 / span 2;
}

.col-span-3 {
  grid-column: span 3 / span 3;
}

.col-span-4 {
  grid-column: span 4 / span 4;
}

.col-span-5 {
  grid-column: span 5 / span 5;
}

.col-span-6 {
  grid-column: span 6 / span 6;
}

.col-span-7 {
  grid-column: span 7 / span 7;
}

.col-span-8 {
  grid-column: span 8 / span 8;
}

.col-span-9 {
  grid-column: span 9 / span 9;
}

.col-span-10 {
  grid-column: span 10 / span 10;
}

.col-span-11 {
  grid-column: span 11 / span 11;
}

.col-span-12 {
  grid-column: span 12 / span 12;
}

.col-span-full {
  grid-column: 1 / -1;
}

.col-start-1 {
  grid-column-start: 1;
}

.col-start-2 {
  grid-column-start: 2;
}

.col-start-3 {
  grid-column-start: 3;
}

.col-start-4 {
  grid-column-start: 4;
}

.col-start-5 {
  grid-column-start: 5;
}

.col-start-6 {
  grid-column-start: 6;
}

.col-start-7 {
  grid-column-start: 7;
}

.col-start-8 {
  grid-column-start: 8;
}

.col-start-9 {
  grid-column-start: 9;
}

.col-start-10 {
  grid-column-start: 10;
}

.col-start-11 {
  grid-column-start: 11;
}

.col-start-12 {
  grid-column-start: 12;
}

.col-start-13 {
  grid-column-start: 13;
}

.col-start-auto {
  grid-column-start: auto;
}

.col-end-1 {
  grid-column-end: 1;
}

.col-end-2 {
  grid-column-end: 2;
}

.col-end-3 {
  grid-column-end: 3;
}

.col-end-4 {
  grid-column-end: 4;
}

.col-end-5 {
  grid-column-end: 5;
}

.col-end-6 {
  grid-column-end: 6;
}

.col-end-7 {
  grid-column-end: 7;
}

.col-end-8 {
  grid-column-end: 8;
}

.col-end-9 {
  grid-column-end: 9;
}

.col-end-10 {
  grid-column-end: 10;
}

.col-end-11 {
  grid-column-end: 11;
}

.col-end-12 {
  grid-column-end: 12;
}

.col-end-13 {
  grid-column-end: 13;
}

.col-end-auto {
  grid-column-end: auto;
}

.row-auto {
  grid-row: auto;
}

.row-span-1 {
  grid-row: span 1 / span 1;
}

.row-span-2 {
  grid-row: span 2 / span 2;
}

.row-span-3 {
  grid-row: span 3 / span 3;
}

.row-span-4 {
  grid-row: span 4 / span 4;
}

.row-span-5 {
  grid-row: span 5 / span 5;
}

.row-span-6 {
  grid-row: span 6 / span 6;
}

.row-span-full {
  grid-row: 1 / -1;
}

.row-start-1 {
  grid-row-start: 1;
}

.row-start-2 {
  grid-row-start: 2;
}

.row-start-3 {
  grid-row-start: 3;
}

.row-start-4 {
  grid-row-start: 4;
}

.row-start-5 {
  grid-row-start: 5;
}

.row-start-6 {
  grid-row-start: 6;
}

.row-start-7 {
  grid-row-start: 7;
}

.row-start-auto {
  grid-row-start: auto;
}

.row-end-1 {
  grid-row-end: 1;
}

.row-end-2 {
  grid-row-end: 2;
}

.row-end-3 {
  grid-row-end: 3;
}

.row-end-4 {
  grid-row-end: 4;
}

.row-end-5 {
  grid-row-end: 5;
}

.row-end-6 {
  grid-row-end: 6;
}

.row-end-7 {
  grid-row-end: 7;
}

.row-end-auto {
  grid-row-end: auto;
}

.box-border {
  box-sizing: border-box;
}

.box-content {
  box-sizing: content-box;
}

.block {
  display: block;
}

.inline-block {
  display: inline-block;
}

.inline {
  display: inline;
}

.flex {
  display: flex;
}

.inline-flex {
  display: inline-flex;
}

.table {
  display: table;
}

.inline-table {
  display: inline-table;
}

.table-caption {
  display: table-caption;
}

.table-cell {
  display: table-cell;
}

.table-column {
  display: table-column;
}

.table-column-group {
  display: table-column-group;
}

.table-footer-group {
  display: table-footer-group;
}

.table-header-group {
  display: table-header-group;
}

.table-row-group {
  display: table-row-group;
}

.table-row {
  display: table-row;
}

.max-h-full {
  max-height: 100%;
}

.max-h-screen {
  max-height: 100vh;
}

.min-h-0 {
  min-height: 0px;
}

.min-h-full {
  min-height: 100%;
}

.min-h-screen {
  min-height: 100vh;
}


.w-min {
  width: -webkit-min-content;
  width: -moz-min-content;
  width: min-content;
}

.w-max {
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
}

.min-w-0 {
  min-width: 0px;
}

.min-w-full {
  min-width: 100%;
}

.min-w-min {
  min-width: -webkit-min-content;
  min-width: -moz-min-content;
  min-width: min-content;
}

.min-w-max {
  min-width: -webkit-max-content;
  min-width: -moz-max-content;
  min-width: max-content;
}

.max-w-0 {
  max-width: 0rem;
}


.flex-auto {
  flex: 1 1 auto;
}

.table-auto {
  table-layout: auto;
}

.grid-cols-1 {
  grid-template-columns: repeat(1, minmax(0, 1fr));
}

.grid-cols-2 {
  grid-template-columns: repeat(2, minmax(0, 1fr));
}

.grid-cols-3 {
  grid-template-columns: repeat(3, minmax(0, 1fr));
}

.grid-cols-4 {
  grid-template-columns: repeat(4, minmax(0, 1fr));
}

.grid-cols-5 {
  grid-template-columns: repeat(5, minmax(0, 1fr));
}

.grid-cols-6 {
  grid-template-columns: repeat(6, minmax(0, 1fr));
}

.grid-cols-7 {
  grid-template-columns: repeat(7, minmax(0, 1fr));
}

.grid-cols-8 {
  grid-template-columns: repeat(8, minmax(0, 1fr));
}

.grid-cols-9 {
  grid-template-columns: repeat(9, minmax(0, 1fr));
}

.grid-cols-10 {
  grid-template-columns: repeat(10, minmax(0, 1fr));
}

.grid-cols-11 {
  grid-template-columns: repeat(11, minmax(0, 1fr));
}

.grid-cols-12 {
  grid-template-columns: repeat(12, minmax(0, 1fr));
}

.grid-cols-none {
  grid-template-columns: none;
}

.grid-rows-1 {
  grid-template-rows: repeat(1, minmax(0, 1fr));
}

.grid-rows-2 {
  grid-template-rows: repeat(2, minmax(0, 1fr));
}

.grid-rows-3 {
  grid-template-rows: repeat(3, minmax(0, 1fr));
}

.grid-rows-4 {
  grid-template-rows: repeat(4, minmax(0, 1fr));
}

.grid-rows-5 {
  grid-template-rows: repeat(5, minmax(0, 1fr));
}

.grid-rows-6 {
  grid-template-rows: repeat(6, minmax(0, 1fr));
}

.grid-rows-none {
  grid-template-rows: none;
}

.flex-row {
  flex-direction: row;
}

.flex-row-reverse {
  flex-direction: row-reverse;
}

.flex-col {
  flex-direction: column;
}

.flex-col-reverse {
  flex-direction: column-reverse;
}

.flex-wrap {
  flex-wrap: wrap;
}


.rounded-bl-3xl {
  border-bottom-left-radius: 1.5rem;
}

.rounded-bl-full {
  border-bottom-left-radius: 9999px;
}


.bg-white {
  --tw-bg-opacity: 1;
  background-color:#FFD95A;
}

.bg-gray-50 {
  --tw-bg-opacity: 1;
  background-color:#C07F00;
}
.p-2 {
  padding: 0.5rem;
}

.p-4 {
  padding: 1rem;
}

.p-5 {
  padding: 1.25rem;
}

.px-2 {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}


.px-5 {
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.px-6 {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}


.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

</style>
</head>

<body>

  <div class="flex flex-row ">
    <div class="flex flex-col  space-y-5 justify-between min-h-screen w-60 px-2 py-4 bg-gray-50">

      <div class="flex flex-col flex-auto">
        <div class="p-2 hover:bg-pink-100">
          <div class="flex flex-row space-x-3">
            <h4 class="font-bold  hover:text-pink-600 ">Profil User</h4>
          </div>
        </div>
        <div class="p-2 hover:bg-pink-100 ">
          <div class="flex flex-row space-x-3 ">
           <div><img src="../../img/cogan.png" alt=">" height='150px' width='150px'></div>
          </div>
        </div>
        <div class="p-2 hover:bg-pink-100">
          <div class="flex flex-row space-x-3">
            <h4 class="font-regular">Louis Partridge</h4>
          </div>
        </div>
        <div>
          <h4 class="font-regular  hover:text-pink-600">1234567890</h4>
        </div>
        <div>
          <h4 class="font-regular  hover:text-pink-600">5</h4>
        </div>
        <div>
          <h4 class="font-regular  hover:text-pink-600">Kucing</h4>
        </div>
        <div>
          <h4 class="font-regular  hover:text-pink-600">---------------------------------</h4>
        </div>
        <div>
          <h4 class="font-regular  hover:text-pink-600">partridge@gmail.com</h4>
        </div>
        <div>
          <h4 class="font-regular  hover:text-pink-600">089747632496</h4>
        </div>

      </div>

      <div class="flex flex-col ">
      </div>
    </div>
    <div class="flex-auto ">
      <div class="flex flex-col">
        <div class="flex flex-col bg-white h-24 p-2 drop-shadow-2xl">
          <div class="flex flex-row space-x-3">
          </div>
        </div>
        <div class="bg-blue-50 min-h-screen">
          <div class=" mt-8 grid lg:grid-cols-3 sm:grid-cols-2 p-4 gap-10 ">
          <div>
        <button>Kembali</button>
        </div>
        </div>
          
          <div class=" flex items-center justify-between text-gray-600 text-3xl px-5"><b>Data Kucing</b></div>
          <!--Table-->
          <div class="grid  lg:grid-cols-1  md:grid-cols-1 p-4 gap-3">
            <div class="col-span-2 flex flex-auto items-center justify-between  p-5 bg-white rounded shadow-sm">
              <table class="min-w-full divide-y divide-gray-200 table-auto">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col"
                      class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                      Nama
                    </th>
                    <th scope="col"
                      class="px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider">
                      Umur
                    </th>
                    <th scope="col"
                      class="px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider">
                      Jenis Kelamin
                    </th>
                    <th scope="col"
                      class="px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider">
                      Jenis Ras
                    </th>
                    <th scope="col" 
                    class="relative px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider">
                    Berat
                    </th>
                    </th>
                    <th scope="col" 
                    class="relative px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <tr>

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
        data: [0, 10, 5, 2, 20, 30, 45],
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
