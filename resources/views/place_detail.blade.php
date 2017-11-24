<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{$place['name']}}</title>
    <script src="https://use.fontawesome.com/86896db091.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="detail.css">
</head>

<body>
    

    <div class="container">
        <div class="row">
            <div class="col-9 wrap">
                <div class="place-info">
                    <span class="place-name">{$place['name']}}</span>
                    <div class="details">
                        <span class="type">{$place['type']}}</span>
                        <span class="address">{$place['address']}}/span>
                        <span class="description">{$place['description']}}</span>
                        <span class="phone">{$place['telephone']}}</span>
                        <span class="wifi">{$place['wifi']}}</span>
                        <span class="hours">{$place['opening_hours']}}</span>
                        <span class="map-link"> <a href="">Show in map</a> </span>

                    </div>
                </div>
                aaaaaaaaaaaaaaaaaaaaaaaaaaa
                <div class="place-pic">
                    <img style="width:200px; height:200px" src="/img/{{$places->img}}" alt="???">
                </div>
                
                <div class="container ">
                    <div class= "row feed">
                <div class="col-8 ">
                    <div class="add-post">
                        <textarea name="" placeholder=" Write Your Review" id="review" cols="60" rows="5"></textarea>
                        <div class="button-box">
                            <button class="btn"><i class="fa fa-plus" aria-hidden="true"></i>Add Picture</button>
                            
                            <button class="btn"><i class="fa fa-paper-plane" aria-hidden="true"></i>Post</button>
                        </div>
                        
                    </div>
                    <div class="post">
                           <div class="post-id">
                                <img src="img/1.jpg" alt="">
                                <span class="post-name">Zeynep Artok</span>
                        </div> 

                            <div class="post-content">
                                <p>
                                    One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.
                                </p>
                                <button class="btn"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Like</button>
                                
                                <button class="btn"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>Dislike</button>

                                 </div>

                    </div>

                </div>
            </div>
            </div>
           


            </div>
        </div>
    </div>


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
</body>

</html>