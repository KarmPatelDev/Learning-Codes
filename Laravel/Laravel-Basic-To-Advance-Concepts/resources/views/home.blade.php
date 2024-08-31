<!DOCTYPE html>
<html lang="en">
<body>

php artisan make:component Form  <== For make component
php artisan make:component Form/Input  <== For make nested component

Anonymous Component ==> Which has not class file in App/View/Components only blade file in Resources/View/Components
php artisan make:component Form --view <== for make anonymous component


Home page

Not properties only component
<x-alert1/>

with properties
<x-alert title="About Page PHP" />


<!-- use variable of class  -->
@php
   $message = "Post Created Successfully";
@endphp
<x-notification type="info" :message="$message"/>


<x-form.input />

Pass Property to nested anonymous folder component access
<x-user.index data="I am anonymous component" />   <== it is anonymous component

<x-example>

   <h3>Below is Un-named Slot</h3>
   <h2> My Name is Karm Patel</h2>


   <h3>Below are named Slot</h3>
   <x-slot name="heading"><h2>Slot Heading - in laravel old</h2></x-slot>
   <x-slot name="heading2"><h2>Slot Heading - in laravel 9</h2></x-slot>
   


</x-example>

</body>
</html>