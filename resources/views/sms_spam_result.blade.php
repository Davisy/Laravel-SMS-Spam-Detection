<html>
<head>
  <title>SMS Spam Prediction Results</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link
  rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"
  />
  <style>
    .center-block {
      display: block;
      margin-right: auto;
      margin-left: auto;
    }
  </style>
</head>
<body>
  <div class="container text-center center-block">
    <h1 class="text-center">PREDICTION RESULTS</h1>
    <h4>Message Sent:</h4>
    <p>{{ $message }}</p>
    <hr />
    <h4>Detection Result:</h4>

    @if($result == "normal messsage")
    <p>The message sent is <strong><span style="color: green;">{{ $result }}</span></strong> </p>

    @else

    <p> The message sent is <strong><span style="color: red;">{{ $result }}</span></strong> </p>
    
    @endif 
    
    <br />

    <h3 class="text-center">
      <a href="/" class="btn btn-lg btn-primary" title="">Try Again</a>
    </h3>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
