<h1>
    This page is for blade template practice.
</h1>
<br><hr><hr><hr><br>

{{-- Laravel Comment --}}

@php
$username = "Siddharth";

$fruits = ["Apple", "Banana", "Cherry", "Dragon Fruit"];
@endphp

<script>
    let name = @json($username);
    document.write(name);
    document.write("<br>");
    // let fruits = @json($fruits);
    let fruits = {{ Js::from($fruits) }}


    fruits.forEach(element => {
        document.write(`${element} <br>`);
    });
    // console.log(name);
</script>