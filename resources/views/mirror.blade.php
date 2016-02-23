<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mirror Mirror</title>
        <meta name="description" content="Mirror mirror on the wall...">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/weather.css">
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Neucha' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>
        <script src="/js/skycons.js"></script>
        <script src="/js/vendor/moment.js"></script>
        <script src="/js/vendor/moment-timezone.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>
        <section>
            <div id="date">

            </div>
            
            <div id="verticalScroller">
                @foreach ($stuffFeed as $item)
                    <div>
                        {{ $item->title }}
                        <br>
                        {{ $item->description }}
                    </div>
                @endforeach
            </div>
            
            <div id="weather">

            </div>
        </section>
        <p id="greeting">
            {{ $greeting }}
        </p>

        <script>
            var datetime = null,
            date = null;

            var update = function () {
                date = moment(new Date())
                var html = '<p>' + date.format('dddd, MMMM Do') + '</p>';
                html += '<p id="time">' + date.tz("{{config('timezone.timezone')}}").format('h:mm A') + '</p>';
                datetime.html(html);
            };

            $(document).ready(function() {
                datetime = $('#date');
                update();
                setInterval(update, 10000);
            });
        </script>
        <script>
        // Docs at http://simpleweatherjs.com
        $(document).ready(function() {
          $.simpleWeather({
            location: 'Lower Hutt, Wellington',
            woeid: '2349239',
            unit: 'c',
            success: function(weather) {
                var skycons = new Skycons({"color": "white"});

                  html = '<canvas id="weather-icon" width="128" height="128"></canvas><h2> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
                  html += '<div id="region">'+weather.city+', '+weather.country+'</div>';
                  html += '<div>'+weather.currently+'</div>';
                  html += '<div>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</div>';
                  html += '<div><i class="fa fa-angle-up"></i>  High '+weather.high + ' <i class="fa fa-angle-down"></i>  Low ' + weather.low + '</div>'
                  $("#weather").html(html);


                 switch(weather.code) {
                    case 0:
                        var animation = 'sleet';
                        break;
                    case 1:
                        var animation = 'sleet';
                        break;
                    case 2:
                        var animation = 'sleet';
                        break;
                     case 3:
                        var animation = 'sleet';
                        break;                       
                     case 4:
                        var animation = 'sleet';
                        break;
                     case 5:
                        var animation = 'snow';
                        break;
                     case 6:
                        var animation = 'snow';
                        break;
                     case 7:
                        var animation = 'snow';
                        break;
                     case 8:
                        var animation = 'snow';
                        break;
                     case 9:
                        var animation = 'rain';
                        break;
                     case 10:
                        var animation = 'snow';
                        break;
                     case 11:
                        var animation = 'rain';
                        break;
                     case 12:
                        var animation = 'rain';
                        break;
                     case 13:
                        var animation = 'snow';
                        break; 
                     case 14:
                        var animation = 'snow';
                        break;
                     case 15:
                        var animation = 'snow';
                        break;
                     case 16:
                        var animation = 'snow';
                        break;
                     case 17:
                        var animation = 'sleet';
                        break;
                     case 18:
                        var animation = 'sleet';
                        break;
                     case 19:
                        var animation = 'fog';
                        break;
                     case 20:
                        var animation = 'fog';
                        break;
                     case 21:
                        var animation = 'fog';
                        break;
                     case 22:
                        var animation = 'fog';
                        break;
                     case 23:
                        var animation = 'wind';
                        break;
                     case 24:
                        var animation = 'wind';
                        break;
                     case 25:
                        var animation = 'cloudy';
                        break;
                    case 26:
                        var animation = 'cloudy';
                        break; 
                     case 27:
                        var animation = 'partly-cloudy-night';
                        break;
                     case 28:
                        var animation = 'partly-cloudy-day';
                        break;
                     case 29:
                        var animation = 'partly-cloudy-night';
                        break;
                     case 30:
                        var animation = 'partly-cloudy-day';
                        break;
                     case 31:
                        var animation = 'clear-night';
                        break;
                     case 32:
                        var animation = 'clear-day';
                        break;
                     case 33:
                        var animation = 'clear-night';
                        break;
                     case 34:
                        var animation = 'clear-day';
                        break;
                     case 35:
                        var animation = 'sleet';
                        break;
                     case 36:
                        var animation = 'clear-day';
                        break;
                     case 37:
                        var animation = 'sleet';
                        break;
                     case 38:
                        var animation = 'sleet';
                        break;
                     case 39:
                        var animation = 'sleet';
                        break;
                     case 40:
                        var animation = 'rain';
                        break;
                     case 41:
                        var animation = 'snow';
                        break;
                     case 42:
                        var animation = 'snow';
                        break;
                     case 43:
                        var animation = 'snow';
                        break;
                     case 44:
                        var animation = 'partly-cloudy-day';
                        break;
                     case 45:
                        var animation = 'sleet';
                        break;
                     case 46:
                        var animation = 'snow';
                        break;
                     case 46:
                        var animation = 'sleet';
                        break;                
                    default:
                        var animation = 'clear-day';
                } 

                  skycons.remove('weather-icon')
                  // you can add a canvas by it's ID...
                  console.log(animation);
                  skycons.add("weather-icon", animation);

                  // ...or by the canvas DOM element itself.

                  // if you're using the Forecast API, you can also supply
                  // strings: "partly-cloudy-day" or "rain".

                  // start animation!
                  skycons.play();
            },
            error: function(error) {
              $("#weather").html('<p>'+error+'</p>');
            }
          });
        });
        </script>
        <script type="text/javascript">
            var gitHash = {{ trim(`git rev-parse HEAD`) }};
               (function checkVersion()
                {
                    $.getJSON('/version', {}, function(json, textStatus) {
                        if (json) {
                            if (json.gitHash != gitHash) {
                                window.location.reload();
                                window.location.href=window.location.href;
                            }
                        }
                    });
                    setTimeout(function() {
                        checkVersion();
                    }, 3000);
                })(); 
        </script>
        <script>
        window.verticalScroller = function($elem) {
            var top = parseInt($elem.css("top"));
            var temp = -1 * $('#verticalScroller > div').height();
            if(top < temp) {
                top = $('#verticalScroller').height()
                $elem.css("top", top);
            }
            $elem.animate({ top: (parseInt(top)-60) }, 600, function () {
              window.verticalScroller($(this))
            });
        }
        
        
        $(document).ready(function() {
            var i = 0;
            $("#verticalScroller > div").each(function () {
                  $(this).css("top", i);
                  i += 60;
                  window.verticalScroller($(this));
            });
        });

        </script>
    </body>
</html>
