@extends('layouts.master')
@section('content')
<div class="listOfCity">
  <input type="button"  onclick="show()" value="show">
    <div id="cityList"></div>
</div>
<script>
    const show=()=>{
        fetch("api/CityList")
            .then((res)=>res.json())
            .then((res)=>{
                $("#cityList").html("");

                res.forEach(r=>{
                     $("#cityList").append(r["cityName"])
                                   .append("<hr/>");
       });
     });
 }
</script>
@endsection
