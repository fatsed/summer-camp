<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body onload="show()">
<labe>select</labe>

<select name="state" id="state"  >

</select>
<select name="city" id="city"  >

</select>
<script>
    var x=document.getElementById('state');
    const show=()=>{


        fetch('https://iran-locations-api.vercel.app/api/v1/states')
            .then((res)=>res.json())
            .then((res)=>{


                res.forEach(r=>{
                    x.innerHTML=x.innerHTML+'<option>'+r['name']+'</option>';

                });
            });
    }
</script>
</body>
</html>
