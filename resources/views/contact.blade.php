<!DOCTYPE html>
<html>
<head>
    <title>Mail Lesson</title>
    <link href="css/mail.css" rel="stylesheet" type="text/css" media="all" />


</head>
<body>

<div class="form-style-5">
    <form method="post" action="/contact">

        @csrf
        <fieldset>
            <legend> Email Address</legend>
            <input type="text" name="email" id="email" placeholder="Your Email">

            @error('email')
                   <div class="text-red-500 text-xs">{{ $message }} </div>
            @enderror

        </fieldset>
        <input type="submit" value="Email me" />

        @if (session('message'))
            <div>
                {{session('message')}}
            </div>
            @endif

    </form>
</div>
</body>
</html>
