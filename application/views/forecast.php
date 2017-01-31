<!DOCTYPE html>
  <html>
    <head>
      <title>WeaCast | <?=$title?></title>
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <style>
        body {
          padding: 4% 2%;
          background-color: #00bcd4;
          color: #fff;
          font-family: 'Raleway', sans-serif;
        }
        .homepage {
          text-align: center;
        }
        .title {
          border-bottom: .1em solid #fff;
        }
        .title h1 {
          margin-top: 0;
          font-size: 4em;
        }
        .cityinput {
          display: flex;
          justify-content: center;
          margin-top: 1em;
        }
        .cityinput input {
          border:0;
          border-radius: 6px;
          box-shadow: none;
          font-size: 18px;
          height: 4em;
          width: 14em;
          text-align: center;
        }
    </style>

    <body>

        <div class="container homepage">
            <div class="row">
                <div class="col-sm-12 title"><h1>WeaCast</h1></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><h1 style="margin-top: 2em">Where's your city?</h1></div>
              <div class="col-sm-12 cityinput">
                <form method="POST" action="<?=site_url('weacast')?>">
                  <input type="text" class="form-control" placeholder="Your city's name" name="city"> 
                </form>
              </div>
              <div class="col-sm-12"><p style="margin-top: 2em">Type in your city and hit ENTER</p></div>
            </div>
        </div>

    </body>
  </html>