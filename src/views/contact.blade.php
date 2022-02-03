<html>
<head>
  <title>Document</title>
</head>
<body>
    <h1>Contact us any time</h1>
   <form action="{{Route('contact')}}" method="post">
       @csrf
       <input type="text" name="name" placeholder="name">
       <input type="email" name="email" placeholder="email">
       <textarea name="message" ></textarea>
       <input type="submit">
   </form>
</body>
</html>
