<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register For getting access</title>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="main.css">
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-81222017-1', 'auto');
  ga('send', 'pageview');
</script>
    <style>
         *,  *:before,  *:after  {
    -moz-box-sizing:  border-box;
    -webkit-box-sizing:  border-box;
    box-sizing:  border-box;
}
body  {
    font-family:  'Nunito',  sans-serif;
    color:  #384047;
    background-image: url('http://designvkp.com/wp-content/uploads/2015/07/pattern.png');
    background-position:  0px 0px;
    background-repeat:  repeat;
    animation:  animatedBackground 40s linear infinite;
    opacity: 0.9;
}
@keyframes animatedBackground  {
    from  {
    background-position:  0 0;
}
to  {
    background-position:  100% 0;
}
}
form  {
    max-width:  300px;
    margin:  10px auto;
    padding:  10px 20px;
    background:  #f4f7f8;
    border-radius:  8px;
}

a{
  color:#fff;
  font-weight:400;
  text-decoration:none;
  font-size:26px;
}

h1  {
    margin:  0 0 30px 0;
    text-align:  center;
}
input[type="text"],  input[type="password"],  input[type="date"],  input[type="datetime"],  input[type="email"],  input[type="number"],  input[type="search"],  input[type="tel"],  input[type="time"],  input[type="url"],  textarea,  select  {
    background:  rgba(255, 255, 255, 0.1);
    border:  none;
    font-size:  16px;
    height:  auto;
    margin:  0;
    outline:  0;
    padding:  15px;
    width:  100%;
    background-color:  #e8eeef;
    color:  #8a97a0;
    box-shadow:  0 1px 0 rgba(0, 0, 0, 0.03) inset;
    margin-bottom:  30px;
}
input[type="radio"],  input[type="checkbox"]  {
    margin:  0 4px 8px 0;
}
select  {
    padding:  6px;
    height:  32px;
    border-radius:  2px;
}
button  {
    padding:  19px 39px 18px 39px;
    color:  #FFF;
    background-color:  #4bc970;
    font-size:  18px;
    text-align:  center;
    font-style:  normal;
    border-radius:  5px;
    width:  100%;
    border:  1px solid #3ac162;
    border-width:  1px 1px 3px;
    box-shadow:  0 -1px 0 rgba(255, 255, 255, 0.1) inset;
    margin-bottom:  10px;
}
fieldset  {
    margin-bottom:  30px;
    border:  none;
}
legend  {
    font-size:  1.4em;
    margin-bottom:  10px;
}
label  {
    display:  block;
    margin-bottom:  8px;
}
label.light  {
    font-weight:  300;
    display:  inline;
}
.number  {
    background-color:  #5fcf80;
    color:  #fff;
    height:  30px;
    width:  30px;
    display:  inline-block;
    font-size:  0.8em;
    margin-right:  4px;
    line-height:  30px;
    text-align:  center;
    text-shadow:  0 1px 0 rgba(255, 255, 255, 0.2);
    border-radius:  100%;
}
@media screen and (min-width: 480px)  {
    form  {
    max-width:  480px;
}
}
    </style>
   <head>
           <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81222017-1', 'auto');
  ga('send', 'pageview');
</script>

      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register For getting access</title>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
         
      <form action="/work/admin" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h1>Techfest 2017</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Enter Your Details</legend>
          <label for="name">User Name:</label>
          <input type="text" id="name" name="user_name">
          <label for="mail">Password :</label>
          <input type="password" id="pass" name="user_pass">
        </fieldset>
        
        <fieldset>
        <label for="event_select_for">Select Event:</label>
        <select id="event_select" name="workshop_list">
          <optgroup label="Workshops List">
                <option value="accomodationdatasheet">Accomodation</option>
            @foreach ($data as $user)
                <option value="{{$user->table_name}}">{{$user->workshop_name}}</option>
            @endforeach
                <option value="workshop_count">Workshop Count</option>
                <option value="techX_17">TechX 2017</option>
                
          </optgroup>          
        </select>
        </fieldset>
        <button type="submit">Submit</button>
      </form>
      
      
     
           <form action="/work/mail" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h1>Techfest Send Mails</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Enter Your Details</legend>
          <label for="name">User Name:</label>
          <input type="text" id="name" name="user_name">
      
      
     
          <label for="mail">Password :</label>
          <input type="password" id="pass" name="user_pass">
          
          
        </fieldset>
        
        <!-- <fieldset>
        <label for="event_select_for">Select Event:</label>
        <select id="event_select" name="workshop_list">
          <optgroup label="Workshops List">
                <option value="accomodationdatasheet">Accomodation</option>
            @foreach ($data_compi as $user_data)
                <option value="{{$user_data->table_name}}">{{$user_data->table_name}}</option>
            @endforeach
                <option value="workshop_count">Workshop Count</option>
                <option value="techX_17">TechX 2017</option>
                
          </optgroup>          
        </select>
        </fieldset> -->
        <button type="submit">Submit</button>
      </form>

    </body>
</html>