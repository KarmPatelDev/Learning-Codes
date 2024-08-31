// It is use for make single compiled file of css and js and others.
// first install node and npm
// npm install  <== command run
// npm run dev <== command run
// also use  ==> npm install laravel-mix@latest --save-dev <== command for use mix

// it compile the resources files that we define in first parameter and make comiled on file that we define in second
// also you have to change <link> src parameters in your project and link to new one file


mix.js(['resources/js/toastr.min.js', 'resources/js/custom.js'], 'public/js/common.js')
.postCss(['resources/css/app.css'], 'public/css')

