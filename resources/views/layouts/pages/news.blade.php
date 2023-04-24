<style>
    .blog-item img {
        display: block;
    }

    .blog-item a {
        display: flex;
        padding: 50px;
        overflow: hidden;
        align-items: center;
        max-width: 1000px;
        margin: auto;
        color: #333;
        font-family: 'Lato', sans-serif;
        font-size: 16px;
        border-radius: 6px;
        margin-bottom: 50px;
        text-decoration: none;
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
    }

    .blog-item a:hover {
        box-shadow: 0 10px 50px 0 rgba(0, 0, 0, 0.2);
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
    }

    .blog-item .icon {
        width: 35%;
        object-fit: cover;
        margin-right: 50px;
        border-radius: 6px;
        overflow: hidden;
        box-shadow: 0 15px 26px rgba(0, 0, 0, 0.4);
    }

    .blog-item .content {
        width: 65%;
    }

    .blog-item .content .title {
        font-size: 21px;
        text-transform: capitalize;
        color: #fd8203;
        font-weight: 600;
        font-family: 'Lato', sans-serif;
    }



    .blog-item .content .title .blog-date {
        font-size: 12px;
        margin-left: 20px;
        color: #333;
        font-family: 'Lato', sans-serif;
    }

    .blog-item .content .title .blog-date:before {
        content: '/';
        color: #fd8203;
        font-size: 25px;
        top: auto;
        position: relative;
        margin-right: 10px;
    }

    .blog-item .content .rounded {
        margin-left: 0;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .blog-item .item-arrow {
        height: 20px;
        width: 15%;
        position: relative;
        text-align: center;
        font-size: 35px;
        left: 0;
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
    }

    .blog-item a:hover > .item-arrow {
        /*padding-left: 40px;*/
        color: #fd8203;
        left: 30px;
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
    }

    .rounded {
        width: 70px;
        height: 5px;
        border-radius: 6px;
        background-image: linear-gradient(to right, #e59f5b, #e77916);
        /* background: #2bb769; */
        margin-left: 0;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    @media screen and (max-width: 768px){

        .blog-item .content {
            width: 100%;
            margin-top: 35px;
        }

        .blog-item .content .title {
            font-size: 18px;
        }

        .blog-item .item-arrow {
            margin: auto;
        }

        .blog-item .icon {
            width: 100%;
        }

        .blog-item .icon img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .blog-item {
            width: 92%;
            margin: auto;
        }

        .blog-item a {
            display: block;
            padding: 30px;
        }

    }

</style>
<div class="section-header">
    <h2>news</h2>
    <p>read <span>news</span></p>
</div>

@foreach($akhbars as $akhbar)
<div class="blog-item">
    <a href="#">
        <div class="icon">
            <img src="{{$akhbar->img}}" alt="" width="300px">
        </div>
        <div class="content">
            <div class="title">{{ $akhbar->Title}} <span class="blog-date">{{ $akhbar->UploadTime}}</span></div>
            <div class="rounded"></div>

            <p>
                {{ $akhbar->writer}}
                <br>{{ $akhbar->Reference}}
            </p>
        </div>

        <div class="item-arrow">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </div>
    </a>

</div>

@endforeach
