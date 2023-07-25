<html>
<script>
  window.onload = function() {
  console.log('fetch');
  fetch('https://runok-production.herokuapp.com/api/event-registration/9')
  .then(response => response.json())
  .then(data => {console.log(data); });
};
  </script>
<style>
.container {
    display: flex;
    flex-direction: column;
}

a:link, a:visited {
  font-size: 3em;

  background-color: steelblue;
  border: solid steelblue;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 10px;
}

a:hover, a:active {
	border: solid steelblue;
  background-color: transparent;
  color: steelblue;
}

a.user-name {
	text-align: center;
  border: none steelblue;
  background-color: transparent;
  color: steelblue;
  font-size: 3em;
}
</style>
<body>
<div class="container">
	
<a class="user-name">@mcrunok</a>
<br/>
<br/>
<br/>


</div>
</body>
</html>
