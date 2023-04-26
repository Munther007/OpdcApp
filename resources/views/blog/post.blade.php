<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body dir="rtl">
    <article class="c-article">
        <div class="c-article__header">
          <img src="{{asset('img/' . $post->image)}}" alt="" class="c-article__image">
        </div>

        <div class="c-article__body">
          <h1 class="c-title">
           {{$post->title}}
          </h1>

          <div class="c-content">
            <p class="c-content__paragraph">
                {{$post->user_id}}
            </p>

            <p class="c-content__paragraph">
                {{$post->body}}
            </p>
          </div>
        </div>
      </article>

</body>
</html>
