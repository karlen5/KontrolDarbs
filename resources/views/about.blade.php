<form action="/" method="post">
    @csrf
  <div>
    <label for="name">Vārds: </label>
    <input type="text" name="name"/>
  </div>
  <div>
    <label for="email">Email: </label>
    <input type="email" name="email"/>
  </div>
    <div>
    <label for="response">Response: </label>
    <textarea name="response"></textarea>
  </div>
  <div>
    <input type="submit" value="Submit" />
  </div>
</form>