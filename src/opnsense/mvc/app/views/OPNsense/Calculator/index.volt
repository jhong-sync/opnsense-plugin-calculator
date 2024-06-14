<!DOCTYPE html>
<html>
  <head>
    <title>Calculator Plugin</title>
  </head>
  <body>
    <h1>Calculator</h1>
    <form method="post" action="/yourplugin/index/calculate">
      <input type="text" name="a" placeholder="Enter first number" />
      <input type="text" name="b" placeholder="Enter second number" />
      <select name="operation">
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
      </select>
      <button type="submit">Calculate</button>
    </form>
    {% if result is defined %}
    <h2>Result: {{ result }}</h2>
    {% endif %}
  </body>
</html>
