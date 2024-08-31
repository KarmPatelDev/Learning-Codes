@extends('layouts.master')

@section('content')
Hello I am From Test Blade // we render it in master blade

@if(1==1)
If Statement 1=1
@endif

@if(1==2)
If Statement 1=2
@else
Else Statement
@endif

@if(1==2)
If Statement 1=2
@elseif(1==1)
Elseif Statement 1=1
@else
Else Statement
@endif

@endsection

@section('script')
<script>
    window.alert("Shivam is a Consistent Person");
    console.log("We can use it to json rendor using json blade")
    @json('{{ $name }}')
    

</script>
@endsection